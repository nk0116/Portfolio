<?php
// =============================================
// contact.php - お問い合わせフォーム処理
// =============================================

mb_language('Japanese');
mb_internal_encoding('UTF-8');

// --- reCAPTCHA v3 設定 ---
// ※ Google reCAPTCHA 管理画面で取得したシークレットキーに置き換えてください
define('RECAPTCHA_SECRET_KEY', '6LeNi7QsAAAAAHxopdKD0ba0NLdLe4tDrWW6KHxX');
define('RECAPTCHA_THRESHOLD', 0.5);

// POST以外のアクセスを拒否
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit;
}

// --- reCAPTCHA v3 トークン検証 ---
$recaptcha_token = isset($_POST['recaptcha_token']) ? $_POST['recaptcha_token'] : '';

if ($recaptcha_token === '') {
    showError('<li>不正なアクセスです。（reCAPTCHAトークンがありません）</li>', '', '', '', '', '');
    exit;
}

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_data = [
    'secret'   => RECAPTCHA_SECRET_KEY,
    'response' => $recaptcha_token,
    'remoteip' => $_SERVER['REMOTE_ADDR'],
];

$recaptcha_options = [
    'http' => [
        'method'  => 'POST',
        'header'  => 'Content-Type: application/x-www-form-urlencoded',
        'content' => http_build_query($recaptcha_data),
    ],
];

$recaptcha_context  = stream_context_create($recaptcha_options);
$recaptcha_response = file_get_contents($recaptcha_url, false, $recaptcha_context);
$recaptcha_result   = json_decode($recaptcha_response, true);

if (!$recaptcha_result || !$recaptcha_result['success'] || $recaptcha_result['score'] < RECAPTCHA_THRESHOLD) {
    showError('<li>スパム判定されました。お手数ですが、時間をおいて再度お試しください。</li>', '', '', '', '', '');
    exit;
}

// --- 入力値の取得とサニタイズ ---
$company = isset($_POST['company']) ? trim($_POST['company']) : '';
$name    = isset($_POST['name'])    ? trim($_POST['name'])    : '';
$email   = isset($_POST['email'])   ? trim($_POST['email'])   : '';
$phone   = isset($_POST['phone'])   ? trim($_POST['phone'])   : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// XSS対策
$company_safe = htmlspecialchars($company, ENT_QUOTES, 'UTF-8');
$name_safe    = htmlspecialchars($name,    ENT_QUOTES, 'UTF-8');
$email_safe   = htmlspecialchars($email,   ENT_QUOTES, 'UTF-8');
$phone_safe   = htmlspecialchars($phone,   ENT_QUOTES, 'UTF-8');
$message_safe = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// --- バリデーション ---
$errors = [];

if ($name === '') {
    $errors[] = 'お名前は必須項目です。';
}

if ($email === '') {
    $errors[] = 'メールアドレスは必須項目です。';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'メールアドレスの形式が正しくありません。';
}

// メールヘッダインジェクション対策
if (preg_match('/[\r\n]/', $name) || preg_match('/[\r\n]/', $email) || preg_match('/[\r\n]/', $company)) {
    $errors[] = '不正な入力が検出されました。';
}

// --- エラーがある場合 ---
if (!empty($errors)) {
    $error_html = '';
    foreach ($errors as $err) {
        $error_html .= '<li>' . htmlspecialchars($err, ENT_QUOTES, 'UTF-8') . '</li>';
    }
    showError($error_html, $company_safe, $name_safe, $email_safe, $phone_safe, $message_safe);
    exit;
}

// --- メール送信設定 ---
$admin_email = 'n0116kazuma@gmail.com';
$site_name   = "Nerio's Portfolio";

// 共通ヘッダー（mb_send_mailがISO-2022-JPに自動変換）
$headers_common  = "MIME-Version: 1.0\r\n";
$headers_common .= "Content-Type: text/plain; charset=ISO-2022-JP\r\n";
$headers_common .= "Content-Transfer-Encoding: 7bit\r\n";
$headers_common .= "X-Mailer: PHP/" . phpversion() . "\r\n";

// --- 1. 自分への通知メール ---
$admin_subject = "【ポートフォリオ】お問い合わせ：{$name}";
$admin_body = <<<EOT
ポートフォリオサイトからお問い合わせがありました。

─────────────────
貴社名：{$company}
お名前：{$name}
メールアドレス：{$email}
電話番号：{$phone}
お問い合わせ内容：
{$message}
─────────────────

EOT;

$from_email = 'noreply@nerio-portfolio.com';

$admin_headers  = $headers_common;
$admin_headers .= "From: {$from_email}\r\n";
$admin_headers .= "Reply-To: {$email}\r\n";

$admin_result = mb_send_mail($admin_email, $admin_subject, $admin_body, $admin_headers);

// --- 2. 相手への自動返信メール ---
$reply_subject = "【Nerio's Portfolio】お問い合わせありがとうございます";
$reply_body = <<<EOT
{$name}様

お問い合わせいただきありがとうございます。
以下の内容で承りました。

─────────────────
貴社名：{$company}
お名前：{$name}
メールアドレス：{$email}
電話番号：{$phone}
お問い合わせ内容：
{$message}
─────────────────

内容を確認のうえ、折り返しご連絡いたします。
通常2〜3営業日以内にご返信いたします。

──────────────────
Nerio's Portfolio
ネリオ
Mail: n0116kazuma@gmail.com
──────────────────

EOT;

$reply_headers  = $headers_common;
$reply_headers .= "From: {$from_email}\r\n";
$reply_headers .= "Reply-To: {$admin_email}\r\n";

$reply_result = mb_send_mail($email, $reply_subject, $reply_body, $reply_headers);

// --- 送信結果の処理 ---
if ($admin_result && $reply_result) {
    header('Location: thanks.html');
    exit;
} else {
    $error_html = '<li>メールの送信に失敗しました。お手数ですが、時間をおいて再度お試しください。</li>';
    showError($error_html, $company_safe, $name_safe, $email_safe, $phone_safe, $message_safe);
    exit;
}

// =============================================
// エラー表示用関数
// =============================================
function showError($error_html, $company, $name, $email, $phone, $message) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>エラー | Nerio's Portfolio</title>
  <link rel="icon" href="images/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: "Noto Sans JP", sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background-color: #FFFFFF;
      color: #333333;
      padding: 24px;
    }
    .error {
      text-align: center;
      max-width: 500px;
    }
    .error__title {
      font-family: "Lato", sans-serif;
      font-size: 32px;
      font-weight: 100;
      letter-spacing: 0.08em;
      margin-bottom: 24px;
    }
    .error__list {
      list-style: none;
      font-size: 15px;
      line-height: 2;
      color: #c0392b;
      margin-bottom: 48px;
    }
    .error__link {
      display: inline-block;
      padding: 14px 40px;
      font-size: 15px;
      font-weight: 700;
      color: #FFFFFF;
      background-color: #333333;
      text-decoration: none;
      letter-spacing: 0.05em;
      transition: background-color 0.3s ease;
    }
    .error__link:hover {
      background-color: #555555;
    }
  </style>
</head>
<body>
  <div class="error">
    <h1 class="error__title">Error -</h1>
    <ul class="error__list">
      <?php echo $error_html; ?>
    </ul>
    <a href="javascript:history.back()" class="error__link">戻って入力し直す</a>
  </div>
</body>
</html>
<?php
}
