<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <!-- 本番環境では消す　検索結果に出てこないようにする設定 -->
    <meta name="robots" content="noindex" />
    <!-- ここまで消す -->

    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-KSXJLJXL');
    </script>
    <!-- End Google Tag Manager -->

    <!-- キーワードを設定 複数いれるばあいは,で区切る -->
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="format-detection" content="telephone=no,address=no,email=no" />
    <meta name="thumbnail" content="" />
    <!-- <link rel="icon" href="" /> -->
    <!-- <link rel="apple-touch-icon-precomposed" href="" /> -->
    <!-- フォントを読み込む -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP:wght@400;500;600;700&family=Instrument+Sans:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css?v=<?php echo date('Ymd'); ?>" />
    <!-- タイトルを設定 -->
    <title>お問合せ完了 | ゴミ屋敷クリーンサポート</title>
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSXJLJXL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include 'header.php'; ?>

    <main>
      <section class="thanks-section section">
        <div class="inner">
          <div class="thanks-section__content">
            <div class="thanks-section__image-wrapper">
              <img src="./img/thanks-human.png" alt="お問合せ完了" class="thanks-section__image" width="80" height="120" />
            </div>
            <div class="thanks-section__text-wrapper">
              <h2 class="thanks-section__title">お問合せが<br />完了しました。</h2>
              <p class="thanks-section__description">
                お問合せありがとうございます！
                <br />
                内容を確認後
                <br />
                折り返しご連絡いたします。
                <br />
                お急ぎのお問い合わせは、
                <br />
                電話にて直接ご連絡ください。
              </p>
            </div>
            <a href="index.php" class="thanks-section__button">
              <span class="thanks-section__button-text">TOPに戻る</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                <path d="M16.2154 10.3124H3.4375C3.25516 10.3124 3.0803 10.3848 2.95136 10.5138C2.82243 10.6427 2.75 10.8176 2.75 10.9999C2.75 11.1822 2.82243 11.3571 2.95136 11.486C3.0803 11.615 3.25516 11.6874 3.4375 11.6874H16.2154L11.2008 16.7006C11.0717 16.8297 10.9991 17.0048 10.9991 17.1874C10.9991 17.37 11.0717 17.545 11.2008 17.6741C11.3298 17.8032 11.5049 17.8758 11.6875 17.8758C11.8701 17.8758 12.0452 17.8032 12.1743 17.6741L18.3618 11.4866C18.4258 11.4228 18.4766 11.3469 18.5112 11.2634C18.5459 11.1799 18.5637 11.0903 18.5637 10.9999C18.5637 10.9095 18.5459 10.8199 18.5112 10.7364C18.4766 10.6529 18.4258 10.577 18.3618 10.5131L12.1743 4.32564C12.0452 4.19655 11.8701 4.12402 11.6875 4.12402C11.5049 4.12402 11.3298 4.19655 11.2008 4.32564C11.0717 4.45474 10.9991 4.62983 10.9991 4.81239C10.9991 4.99496 11.0717 5.17005 11.2008 5.29914L16.2154 10.3124Z" fill="#197647"/>
              </svg>
            </a>
          </div>
        </div>
      </section>
    </main>

    <?php include 'footer.php'; ?>

