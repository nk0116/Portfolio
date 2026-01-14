<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
require_once 'config.php';
//==========================================================
//  メールフォームシステム ver.0.96β
//  eWeb http://www.eweb-design.com/
//==========================================================

// このファイルの名前
$script ="sendmail.php";

// メールを送信するアドレス(複数指定する場合は「,」で区切る)
$to = "sukedachi15@i.softbank.jp";


// 送信されるメールのタイトル
// TODO ゴミ屋敷ようにカスタマイズ
$sbj = "【要確認】ゴミ屋敷清掃LPにお客様からお問い合わせがありました。";

// 送信確認画面の表示(する=1, しない=0)
$chmail = 0;

// 送信後に自動的にジャンプする(する=1, しない=0)
// 0にすると、送信終了画面が表示されます。
$jpage = 1;

// 送信後にジャンプするページ(送信後にジャンプする場合)
$next = "./thanks.html";

// 差出人は、送信者のメールアドレスにする(する=1, しない=0)
// する場合は、メール入力欄のname属性を「email」にしてください。
$from_add = 1;

// 差出人に送信内容確認メールを送る(送る=1, 送らない=0)
// 送る場合は、メール入力欄のname属性を「email」にしてください。
$remail = 1;

// 差出人に送信確認メールを送る場合のメールのタイトル
$resbj = "【ゴミ屋敷クリーンサポート】お問い合わせありがとうございます。";

// 必須入力項目を設定する(する=1, しない=0)
$esse = 1;

// 必須入力項目(入力フォームで指定したname)
$eles = array('お名前','電話番号','email');


//--------------------------------------------------------------------
// 以上で基本的な設定は終了です。
// 以下の変更は自己責任でお願いします。(行数はデフォルト時)
// 未入力画面のレイアウト → 88行目周辺
// 送信メールのレイアウト → 103行目周辺
// 差出人への送信確認メールのレイアウト → 128行目周辺
// 送信確認画面のレイアウト → 163行目周辺
// 送信終了画面のレイアウト → 194行目周辺
// 送信確認画面や終了画面のヘッダとフッタ → 209行目周辺
//--------------------------------------------------------------------

$sendm = 0;
foreach($_POST as $key=>$var) {
  if($var == "eweb_submit") $sendm = 1;
}

// 文字の置き換え
$string_from = "＼";
$string_to = "ー";

// 未入力項目のチェック
if($esse == 1) {
  $flag = 0;
  $length = count($eles) - 1;
  foreach($_POST as $key=>$var) {
    $key = strtr($key, $string_from, $string_to);
    if($var == "eweb_submit") ;
    else {
      for($i=0; $i<=$length; $i++) {
        if($key == $eles[$i] && empty($var)) {
          $errm .= "<td color=#ff0000>「".$key."」は必須入力項目です。</td><br>\n";
          $flag = 1;
        }
      }
    }
  }
  foreach($_POST as $key=>$var) {
    $key = strtr($key, $string_from, $string_to);
    for($i=0; $i<=$length; $i++) {
      if($key == $eles[$i]) {
        $eles[$i] = "eweb_ok";
      }
    }
  }
  for($i=0; $i<=$length; $i++) {
    if($eles[$i] != "eweb_ok") {
      $errm .= "<td color=#ff0000>「".$eles[$i]."」が未選択です。</td><br>\n";
      $eles[$i] = "eweb_ok";
      $flag = 1;
    }
  }
  if($flag == 1){
    htmlHeader();
?>


<!--- 未入力があった時の画面 --- 開始 --------------------->

<p>未入力の項目があります</p>
<form>
	<table>
		<tbody>
<?php echo $errm; ?>
		</tbody>
	</table>
	<div class="buttons">
		<div class="button-wrapper back">
			<input class="button" type="button" value="前画面に戻る" onClick="history.back()">
		</div>
	</div>
</form>

<!--- 終了 --->


<?php 
    htmlFooter();
    exit(0);
  }
}
//--- メールのレイアウトの編集 --- 開始 ------------------->

$body = "";
$body.="不用品回収LPに\n";
$body.="お客様からお問い合わせがありました。\n";
$body.="※本メールは、プログラムから自動で送信しています。\n\n";

$body.="以下お客様情報です。\n";
$body.="----------------------------------------------\n";
$body.="お名前：{$_POST['お名前']}\n";
$body.="電話番号：{$_POST['電話番号']}\n";
$body.="メールアドレス：{$_POST['email']}\n";
$body.="住所：{$_POST['住所']}\n";
if(isset($_POST['お問合せ内容']) && $_POST['お問合せ内容'] != '') {
  $body.="お問合せ内容：{$_POST['お問合せ内容']}\n";
}
$body.="ご要望など：{$_POST['ご要望など']}\n";
$body.="----------------------------------------------\n";
$body.="送信された日時：".date( "Y/m/d (D) H:i:s", time() )."\n";
$body.="送信者のIPアドレス：".$_SERVER['REMOTE_ADDR']."\n\n";

$body.="お客様への折り返しのご連絡をよろしくお願いいたします。\n";

//--- 終了 --->


if($remail == 1) {
//--- 差出人への送信確認メールのレイアウトの編集 --- 開始 ->

$rebody ="";
$rebody.="{$_POST['お名前']}様\n\n";

$rebody.="この度はお問い合わせいただき、\n";
$rebody.="誠にありがとうございました。\n\n";

$rebody.="下記の内容を確認させていただき、\n";
$rebody.="折り返し担当者よりご連絡いたします。\n\n";

$rebody.="----------------------------------------------\n";
$rebody.="お名前：{$_POST['お名前']}\n";
$rebody.="電話番号：{$_POST['電話番号']}\n";
$rebody.="メールアドレス：{$_POST['email']}\n";
$rebody.="住所：{$_POST['住所']}\n";
if(isset($_POST['お問合せ内容']) && $_POST['お問合せ内容'] != '') {
  $rebody.="お問合せ内容：{$_POST['お問合せ内容']}\n";
}
$rebody.="ご要望など：{$_POST['ご要望など']}\n";
$rebody.="----------------------------------------------\n\n";

$rebody.="なお、1～3営業日経ちましてもご連絡がない場合は、\n";
$rebody.="何かしらの不具合でメールが届いていない可能性がございます。\n";
$rebody.="その場合は、大変お手数ではございますが、\n";
$rebody.="下記の電話番号までご連絡をいただけますと幸いです。\n\n";

$rebody.="電話番号 {$phone_number}\n\n";

$rebody.="引き続き、どうぞよろしくお願いいたします。\n\n";


$rebody.="※本メールはプログラムから自動で送信しています。\n";
$rebody.="心当たりのない方は、お手数ですが削除していただければ幸いです。\n\n";

$rebody.="──────────────────────\n";
$rebody.="ゴミ屋敷クリーンサポート\n";
$rebody.="〒651-803\n";
$rebody.="兵庫県須磨区大池町5丁目5-3\n";
$rebody.="電話番号 {$phone_number}\n";
$rebody.="──────────────────────\n";

$reto = $_POST['email'];
$rebody = mb_convert_encoding($rebody, "JIS", "UTF-8");
$resbj = "=?iso-2022-jp?B?" . base64_encode(mb_convert_encoding($resbj, "JIS", "UTF-8")) . "?=";

$refrom_name = "ゴミ屋敷クリーンサポート";
$reheader = "From: =?UTF-8?B?" . base64_encode($refrom_name) . "?=<info@ayumi-service.com>\n";
// $reheader .= "Reply-To: " . $to . "\n";
$reheader .= "Content-Type: text/plain; charset=ISO-2022-JP\n";
$reheader .= "Content-Transfer-Encoding: 7bit\n";
$reheader .= "X-Mailer: PHP/" . phpversion();

//--- 終了 --->
}


$body = mb_convert_encoding($body, "JIS", "UTF-8");
$sbj = "=?iso-2022-jp?B?" . base64_encode(mb_convert_encoding($sbj, "JIS", "UTF-8")) . "?=";

if($from_add == 1) {
  $from_name = "ゴミ屋敷クリーンサポート";
  $from_email = $_POST['email'];
  $header = "From: =?UTF-8?B?" . base64_encode($from_name) . "?= <info@ayumi-service.com>\n";
  $header .= "Reply-To: " . $from_email . "\n";
  $header .= "Content-Type: text/plain; charset=ISO-2022-JP\n";
  $header .= "Content-Transfer-Encoding: 7bit\n";
  $header .= "X-Mailer: PHP/" . phpversion();
} else {
  $header = "Reply-To: " . $_POST['email'] . "\n";
  $header .= "Content-Type: text/plain; charset=ISO-2022-JP\n";
  $header .= "Content-Transfer-Encoding: 7bit\n";
  $header .= "X-Mailer: PHP/" . phpversion();
}
if($chmail == 0 || $sendm == 1) {
  mail($to,$sbj,$body,$header);
  if($remail == 1) { mail($reto,$resbj,$rebody,$reheader); }
}
else { htmlHeader();
?>

<!--- 送信確認画面のレイアウトの編集 --- 開始 ------------->
<p>以下の内容で間違いがなければ、<br class="sp">「送信する」ボタンを押してください。</p>
<form action="<? echo $script; ?>" method="POST">
<?php //echo $err_message; ?>
<table>
<?php
foreach($_POST as $key=>$var) {
  $key = strtr($key, $string_from, $string_to);
  $var = htmlspecialchars($var);
  print("<tr><th>".$key."</th><td>".$var);
?>
<input type="hidden" name="<?= $key ?>" value="<?= $var ?>">
<?php
  print("</td></tr>\n");
}
?>
</table>
<br>
<input type="hidden" name="eweb_set" value="eweb_submit">
<div class="buttons">
<div class="button-wrapper back"><input class="button" type="button" value="前画面に戻る" onClick="history.back()"></div>
<div class="button-wrapper"><input class="button" type="submit" value="送信する"></div>
</div>
</form>
<!--- 終了 --->


<?php htmlFooter(); } if(($jpage == 0 && $sendm == 1) || ($jpage == 0 && ($chmail == 0 && $sendm == 0))) { htmlHeader(); ?>


<!--- 送信終了画面のレイアウトの編集 --- 開始 ------------->

<p class="center">ありがとうございました。<br>
送信は無事に終了しました。</p>

<div class="buttons">
<div class="button-wrapper">
<a class="button" href="index.php">トップへ戻る</a>
</div>
</div>

<!-- 著作権表示                                                            -->
<!-- 消しても構いませんが、その際はeWebにリンクを貼ってくれると嬉しいです。-->
<!-- <FONT size="-1"><A href="http://www.eweb-design.com/">eWeb Mail</A></FONT><br> -->

<!--- 終了 --->


<?php htmlFooter(); } else if(($jpage == 1 && $sendm == 1) || $chmail == 0) { header("Location: ".$next); } function htmlHeader() { ?>


<!--- ヘッダーの編集 --- 開始 ----------------------------->

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PR92XTZV');</script>
	<!-- End Google Tag Manager -->

	<meta name="keywords" content="ゴミ屋敷,ゴミ屋敷クリーンサポート">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no,address=no,email=no">
	<meta name="thumbnail" content="icon/icon.png">
	<link rel="icon" href="icon/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="icon/icon.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<title></title>
</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR92XTZV"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<header id="header" class="site-header">
			<div id="header-logo" class="header-logo">
				<h1 class="site-title">
					<a href="index.php">
						<img src="images/logo.svg" alt="ゴミ屋敷クリーンサポート" width="240" height="56">
					</a>
				</h1>
				<p class="site-description"></p>
			</div>
		</header>
		<main id="main" class="site-main">
			<article id="article-contact" class="article article-contact">
				<section id="section-contact-content" class="section section-contact-content">
					<div class="inner">
						<h3 class="section-title">
							<i>contact</i>お問い合わせ
						</h3>
						<div class="content">

<!--- 終了 --->


<?php } function htmlFooter() { ?>


<!--- フッターの編集 --- 開始 ----------------------------->

						</div>
					</div>
				</section>
			</article>
		</main>
		<footer id="footer" class="site-footer">
			<div class="inner">
				<div id="footer-logo" class="footer-logo"><img src="images/top-footer-logo.svg" width="150" height="35" alt="ゴミ屋敷クリーンサポート"></div>
				<div class="content">
					<dl>
						<dt>所在地</dt>
						<dd>〒654-0026<br>兵庫県須磨区大池町5丁目5-3</dd>
					</dl>
					<dl>
						<dt>電話番号</dt>
						<dd><?php echo htmlspecialchars($phone_number, ENT_QUOTES, 'UTF-8'); ?></dd>
					</dl>
				</div>
				<small class="copy">Copyright©@2025 ゴミ屋敷クリーンサポート All Rights Reserved.</small>
			</div>
		</footer>
	</body>
</html>

<!--- 終了 --->


<?php } ?>