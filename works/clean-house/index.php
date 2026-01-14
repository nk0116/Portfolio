<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />

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
    <meta name="description" content="ゴミ屋敷の片付け・清掃ならゴミ屋敷クリーンサポート。見積り・出張費0円、追加料金なしの明朗会計。最短10分対応・24時間365日受付、関西一円に対応" />
    <meta name="format-detection" content="telephone=no,address=no,email=no" />
    <meta name="thumbnail" content="" />
    <link rel="icon" href="./img/favicon.ico" />
    <!-- <link rel="apple-touch-icon-precomposed" href="" /> -->
    <!-- フォントを読み込む -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP:wght@400;500;600;700&family=Instrument+Sans:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css?v=<?php echo date('YmdHi'); ?>" />
    <!-- タイトルを設定 -->
    <title>ゴミ屋敷クリーンサポート</title>
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSXJLJXL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <main>
      <?php include 'header.php'; ?>
      <section class="fv section">
        <div class="inner">
          <div class="fv__inner">
            <div class="fv__contents">
              <div class="fv__contents-prefecture"><img src="./img/fv__prefecture.png" alt="対象地域" width="363" height="50" /></div>
              <h2 class="fv__contents-text"><img src="./img/fv__text.png" alt="どんなお部屋でもお任せ　ゴミ屋敷清掃" width="345" height="50" /></h2>
              <div class="fv__contents-star"><img src="./img/fv-star.png" alt="星" width="28" height="35" /></div>
              <div class="fv__contents-price"><img src="./img/fv__price.png" alt="料金" width="363" height="50" /></div>
              <div class="fv__contents-label">
                <ul class="fv__label-lists">
                  <li class="fv__label-list">
                    <div class="fv__label-icon"><?php echo file_get_contents('./img/fv__label-icon-1-v2.svg'); ?></div>
                    <div class="fv__label-texts">
                      <div class="fv__label-text">最短即日</div>
                      <div class="fv__label-number">10</div>
                      <div class="fv__label-text">分対応</div>
                    </div>
                  </li>
                  <li class="fv__label-list">
                    <div class="fv__label-icon"><svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.7658 28.1255L31.3225 21.1048L33.4372 19.3884C33.9456 18.9757 34.2639 18.3862 34.3219 17.7496C34.38 17.1131 34.1732 16.4816 33.7468 15.9941L32.3984 14.453C32.0056 14.004 31.4549 13.7097 30.8503 13.6258L30.8047 12.9048C30.7913 12.6924 30.6907 12.4942 30.5251 12.3539L24.3441 7.11417C24.1785 6.97379 23.9615 6.90272 23.7408 6.91662L12.9194 7.59989C12.2571 7.64171 11.6379 7.93502 11.198 8.41529C10.7581 8.89556 10.5336 9.52345 10.5739 10.1608L11.7878 29.387C11.8281 30.0243 12.1298 30.619 12.6265 31.0401C13.1233 31.4613 13.7745 31.6744 14.4368 31.6325L29.4203 30.6865C30.0826 30.6447 30.7018 30.3514 31.1417 29.8711C31.5815 29.3908 31.806 28.7629 31.7658 28.1255ZM13.4527 29.2818L12.2387 10.0557C12.2253 9.84325 12.3001 9.63396 12.4467 9.47387C12.5934 9.31378 12.7998 9.21601 13.0205 9.20207L23.0095 8.57135L23.2881 12.9829C23.3298 13.6438 23.9205 14.1438 24.6064 14.1005L29.1905 13.8111L29.1991 13.9472C29.0862 14.0123 28.9778 14.0869 28.8739 14.1713L26.795 15.8588C26.7643 15.7776 26.7072 15.7083 26.632 15.6612C26.5569 15.614 26.4679 15.5916 26.3782 15.5972L15.5568 16.2805C15.4464 16.2874 15.3432 16.3363 15.2699 16.4164C15.1966 16.4964 15.1592 16.6011 15.1659 16.7073C15.1726 16.8135 15.2229 16.9126 15.3057 16.9828C15.3885 17.053 15.497 17.0885 15.6074 17.0816L26.105 16.4187L23.9561 18.163L15.7085 18.6837C15.5982 18.6907 15.495 18.7396 15.4216 18.8196C15.3483 18.8997 15.3109 19.0043 15.3176 19.1106C15.3243 19.2168 15.3746 19.3159 15.4574 19.3861C15.5402 19.4563 15.6487 19.4918 15.7591 19.4848L22.8821 19.0351L20.7332 20.7793L15.8603 21.087C15.7499 21.094 15.6467 21.1429 15.5734 21.2229C15.5001 21.3029 15.4627 21.4076 15.4694 21.5138C15.4761 21.6201 15.5264 21.7192 15.6092 21.7894C15.692 21.8595 15.8005 21.8951 15.9109 21.8881L19.6592 21.6514L17.5549 23.3591L17.5137 23.3954L16.012 23.4903C15.9016 23.4972 15.7984 23.5461 15.7251 23.6262C15.6518 23.7062 15.6144 23.8109 15.6211 23.9171C15.6278 24.0233 15.6781 24.1224 15.7609 24.1926C15.8437 24.2628 15.9522 24.2983 16.0626 24.2914L17.1722 24.2213L16.2156 28.065C16.1852 28.1872 16.1849 28.3143 16.2148 28.4363C16.2446 28.5583 16.3038 28.6717 16.3875 28.7674C16.4712 28.8632 16.5772 28.9386 16.6969 28.9876C16.8166 29.0367 16.9467 29.058 17.0768 29.0498L21.632 28.7654C21.8106 28.7544 21.981 28.6883 22.1182 28.5771L29.7325 22.3955L30.101 28.2307C30.1144 28.4431 30.0395 28.6524 29.8929 28.8125C29.7463 28.9726 29.5399 29.0704 29.3191 29.0843L14.3356 30.0304C14.1149 30.0443 13.8978 29.9733 13.7322 29.8329C13.5666 29.6925 13.4661 29.4943 13.4527 29.2818ZM24.5558 13.2994C24.5019 13.3028 24.4479 13.296 24.3968 13.2793C24.3458 13.2626 24.2987 13.2363 24.2583 13.2021C24.2179 13.1678 24.1849 13.1262 24.1613 13.0796C24.1376 13.0329 24.1237 12.9823 24.1205 12.9304L23.8629 8.85044L28.7953 13.0317L24.5558 13.2994ZM29.7943 20.2506L27.3788 17.4804L28.3089 16.7251L30.7284 19.4919L29.7943 20.2506ZM19.4424 23.9227L26.7396 17.9993L29.1543 20.7696L21.9342 26.6302L19.4424 23.9227ZM18.8248 24.4644L21.2943 27.15L21.2569 27.1805L19.0809 27.3163L18.3296 26.4565L18.8248 24.4644Z" fill="#3BAF75"/></svg></div>
                    <div class="fv__label-texts">
                      <div class="fv__label-text">お見積り・出張費無料</div>
                    </div>
                  </li>
                  <li class="fv__label-list">
                    <div class="fv__label-icon"><?php echo file_get_contents('./img/fv__label-icon-3-v2.svg'); ?></div>
                    <div class="fv__label-texts">
                      <div class="fv__label-number">24</div>
                      <div class="fv__label-text">時間</div>
                      <div class="fv__label-number">365</div>
                      <div class="fv__label-text">日対応</div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="fv__contents-picture"><img src="./img/fv__picture.png" alt="ゴミ屋敷清掃のイメージ画像" width="278" height="278" /></div>
            </div>
          </div>
        </div>
      </section>

      <section class="problem section">
        <div class="inner">
          <div class="problem__contents">
            <h2 class="problem__title title">
              ゴミ屋敷に
              <br />
              お困りではありませんか？
            </h2>
            <ul class="problem__lists">
              <li class="problem__list">
                <div class="problem__list-icon"><img src="./img/problem__check.svg" alt="チェックマーク" width="24" height="24" /></div>
                <div class="problem__list-text">片付け方がわからない</div>
              </li>
              <li class="problem__list">
                <div class="problem__list-icon"><img src="./img/problem__check.svg" alt="チェックマーク" width="24" height="24" /></div>
                <div class="problem__list-text">なるべく費用はかけたくない</div>
              </li>
              <li class="problem__list">
                <div class="problem__list-icon"><img src="./img/problem__check.svg" alt="チェックマーク" width="24" height="24" /></div>
                <div class="problem__list-text">後から追加請求がないか不安だ</div>
              </li>
              <li class="problem__list">
                <div class="problem__list-icon"><img src="./img/problem__check.svg" alt="チェックマーク" width="24" height="24" /></div>
                <div class="problem__list-text">実績のある会社に依頼したい</div>
              </li>
              <li class="problem__list">
                <div class="problem__list-icon"><img src="./img/problem__check.svg" alt="チェックマーク" width="24" height="24" /></div>
                <div class="problem__list-text">早朝・深夜にも対応して欲しい</div>
              </li>
              <li class="problem__list">
                <div class="problem__list-icon"><img src="./img/problem__check.svg" alt="チェックマーク" width="24" height="24" /></div>
                <div class="problem__list-text">誠実な人に対応してほしい</div>
              </li>
            </ul>
            <div class="problem__pictures">
              <div class="problem__picture-human"><img src="./img/problem-human.png" alt="ゴミ屋敷清掃人" width="121" height="150" /></div>
              <div class="problem__picture-dust"><img src="./img/problem-dust.png" alt="ゴミ" width="425" height="200" /></div>
              <div class="problem__picture-triangle"><img src="./img/problem-triangle.svg" alt="下矢印" width="425" height="50" /></div>
            </div>
            <div class="problem__before-after">
              <div class="problem__before-after-header">
                <div class="problem__before-after-human"><img src="./img/problem__before-after-human.png" alt="ゴミ屋敷清掃人" width="108" height="163" /></div>
                <div class="problem__before-after-text">
                  <img src="./img/problem__before-after-text.png" alt="こんな汚部屋もたった1日で綺麗を叶えます！" width="166" height="123" />
                </div>
              </div>
              <div class="problem__before-after-1"><img src="./img/problem__before-after-1.jpg" alt="ビフォーアフター" width="425" height="300" /></div>
              <div class="problem__before-after-2"><img src="./img/problem__before-after-2.jpg" alt="ビフォーアフター" width="425" height="300" /></div>
            </div>
          </div>
        </div>
      </section>

      <section class="contact1 section">
        <div class="inner">
          <div class="contact1__contents">
            <div class="contact-section">
              <!-- ご相談ヘッダー -->
              <div class="consultation-header">
                <div class="consultation-header__badge-wrapper">
                  <img src="./img/consultation-badge.png" alt="無料 ご相談・お見積もり" class="consultation-header__badge-image" width="113" height="113" />
                </div>
                <h2 class="consultation-header__message">
                  まずは
                  <br />
                  ご相談ください！
                </h2>
              </div>

              <!-- お問い合わせセクション -->
              <div class="contact-section__content">
                <div class="contact-section__contact-wrapper">
                  <p class="contact-section__urgent-text">＼お急ぎの方はお電話ください／</p>

                  <!-- 電話コンポーネント -->
                  <a href="tel:<?php echo htmlspecialchars($phone_number, ENT_QUOTES, 'UTF-8'); ?>" class="phone-contact">
                    <div class="phone-contact__header">
                      <svg class="phone-contact__icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 18 21" fill="none">
                        <g clip-path="url(#clip0_phone_contact_1)">
                          <path
                            d="M6.85108 2.33656C6.48675 1.56333 5.86906 1.13493 5.15463 1.01684C4.47686 0.90433 3.76707 1.07765 3.14903 1.36606C2.5183 1.66213 1.95156 2.07869 1.4807 2.59227C1.0355 3.08184 0.669422 3.68864 0.591265 4.33045C0.21579 7.41794 1.36023 10.9896 3.3506 13.8343C5.33972 16.6761 8.26863 18.9239 11.5816 19.1772C12.231 19.2269 12.8919 19.0082 13.4582 18.6809C14.0445 18.3388 14.555 17.8808 14.9586 17.3349C15.3508 16.7984 15.6426 16.1514 15.6638 15.475C15.6866 14.77 15.4104 14.0876 14.7751 13.5555C14.6436 13.4446 14.5141 13.3313 14.3869 13.2157C14.2734 13.1143 14.1527 13.0046 14.0054 12.8771C13.7056 12.6104 13.3816 12.3721 13.0376 12.1655C12.6826 11.9602 12.2648 11.7929 11.8023 11.7752C11.3231 11.7573 10.8496 11.9013 10.4038 12.2306C10.0604 12.4852 9.6175 12.5051 9.04871 12.2263C8.47033 11.9422 7.86166 11.3832 7.37021 10.6856C6.87846 9.98971 6.54954 9.21923 6.46686 8.56131C6.38567 7.90978 6.54979 7.47043 6.90214 7.20958C7.37822 6.85762 7.67506 6.42505 7.80777 5.93553C7.93723 5.45944 7.89692 4.98317 7.79465 4.5555C7.64121 3.91662 7.30721 3.24939 7.04538 2.72882C6.97944 2.59858 6.915 2.46759 6.85208 2.33586"
                            fill="#FDFDFD"
                          />
                        </g>
                        <defs>
                          <clipPath id="clip0_phone_contact_1">
                            <rect width="18" height="21" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                      <span class="phone-contact__label">受付時間</span>
                      <div class="phone-contact__time">7:00~23:00</div>
                    </div>
                    <div class="phone-contact__number"><?php echo htmlspecialchars($phone_number, ENT_QUOTES, 'UTF-8'); ?></div>
                  </a>

                  <!-- メールコンポーネント -->
                  <a href="#contact" class="email-contact">
                    <div class="email-contact__header">
                      <svg class="email-contact__icon" xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                        <path
                          d="M20.5 0H2.5C1.12 0 0 1.12 0 2.5V15.5C0 16.88 1.12 18 2.5 18H20.5C21.88 18 23 16.88 23 15.5V2.5C23 1.12 21.88 0 20.5 0ZM20.5 4.75L11.5 10.5L2.5 4.75V2.5L11.5 8.25L20.5 2.5V4.75Z"
                          fill="#FDFDFD"
                        />
                      </svg>
                      <div class="email-contact__label-wrapper">
                        <span class="email-contact__label">メールで</span>
                      </div>
                    </div>
                    <div class="email-contact__text">無料相談・お問合せする</div>
                  </a>
                </div>

                <!-- お支払い方法セクション -->
                <div class="payment-section">
                  <div class="payment-section__image">
                    <img src="./img/payment-human.png" alt="作業員" width="96" height="119" />
                  </div>
                  <div class="payment-section__content">
                    <div class="payment-section__title-wrapper">
                      <h3 class="payment-section__title">お支払い方法</h3>
                    </div>
                    <div class="payment-method">
                      <div class="payment-method__option payment-method__option--cash">
                        <svg class="payment-method__icon" width="30" height="30" viewBox="0 0 30 30" fill="none">
                          <path
                            d="M15.0063 27.5037C8.1026 27.5037 2.50635 21.9075 2.50635 15.0037C2.50635 8.09997 8.1026 2.50372 15.0063 2.50372C21.9101 2.50372 27.5064 8.09997 27.5064 15.0037C27.5064 21.9075 21.9101 27.5037 15.0063 27.5037ZM16.2564 16.2537V15.0037H20.0063V12.5037H16.7738L19.4251 9.84997L17.6576 8.08247L15.0063 10.735L12.3551 8.08247L10.5863 9.84997L13.2388 12.5025H10.0063V15.0025H13.7563V16.2525H10.0063V18.7525H13.7563V21.2525H16.2564V18.7525H20.0063V16.2525L16.2564 16.2537Z"
                            fill="#3BAF75"
                          />
                        </svg>
                        <span class="payment-method__option-text">現金</span>
                      </div>
                      <div class="payment-method__option payment-method__option--card">
                        <svg class="payment-method__icon" width="30" height="30" viewBox="0 0 30 30" fill="none">
                          <path
                            d="M3.00093 10.3126H26.9995V9.31718C26.9995 7.11319 25.8525 6 23.5682 6H6.4323C4.14845 6 3.00047 7.11319 3.00047 9.31764L3.00093 10.3126ZM3.00093 20.6933C3.00093 22.8978 4.14799 24 6.4323 24H23.5682C25.852 24 27 22.8978 27 20.6933V12.7421H3L3.00093 20.6933ZM6.65099 18.082V16.1022C6.65099 15.5032 7.07717 15.0749 7.72204 15.0749H10.3994C11.0443 15.0749 11.4705 15.5032 11.4705 16.1022V18.082C11.4705 18.6921 11.0443 19.1094 10.3994 19.1094H7.72157C7.0767 19.1094 6.65099 18.6921 6.65099 18.082Z"
                            fill="#3BAF75"
                          />
                        </svg>
                        <span class="payment-method__option-text">
                          クレジット
                          <br />
                          カード
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="contact1-discount"><img src="./img/contact1-discount.png" alt="割引情報" width="113" height="113" /></div>
        </div>
      </section>

      <section class="feature-section section">
        <div class="inner">
          <!-- prettier-ignore -->
          <h2 class="feature-title title">
            <span>安心して任せられる</span>
            <span><span class="feature-title__number">4</span>つの特徴</span>
          </h2>

          <div class="feature-cards">
            <div class="feature-card">
              <div class="feature-card__header">
                <div class="feature-card__icon">
                  <img src="./img/feature-card-icon.svg" alt="特徴アイコン" width="100" height="94" />
                </div>
                <div class="feature-card__text-wrapper">
                  <div class="feature-card__badge-wrapper">
                    <div class="feature-card__badge">
                      <span class="feature-card__badge-text">
                        年間実績
                        <span class="feature-card__badge-text-number">10,000</span><span class="feature-card__badge-text-unit">件</span>以上
                      </span>
                    </div>
                    <div class="feature-card__badge-triangle"></div>
                  </div>
                  <h3 class="feature-card__title">ゴミ屋敷に特化した専門チーム</h3>
                </div>
              </div>
              <p class="feature-card__description">
                当社には、ゴミ屋敷清掃に特化した専門スタッフが多数在籍しており、年間10,000件以上の実績を誇っております。
                <br />
                地域密着の体制で、「退去日が迫っている」「今日しか動けない」という状況でも即日見積り・即日片付けが可能です。
                <br />
                複数チームと車両を常時稼働させ、 専門知識と経験を活かしながら、スピード感ある作業で確実に片付けを進めます。
              </p>
            </div>

            <div class="feature-card">
              <div class="feature-card__header">
                <div class="feature-card__icon">
                  <img src="./img/feature-card-icon-2.svg" alt="特徴アイコン" width="100" height="94" />
                </div>
                <div class="feature-card__text-wrapper">
                  <div class="feature-card__badge-wrapper">
                    <div class="feature-card__badge">
                      <span class="feature-card__badge-text feature-card__badge-text--weight-700">明朗会計</span><span class="feature-card__badge-text">で</span><span class="feature-card__badge-text feature-card__badge-text--weight-700">安心できる</span>
                    </div>
                    <div class="feature-card__badge-triangle"></div>
                  </div>
                  <h3 class="feature-card__title">
                    お見積り無料！
                    <br />
                    追加料金なし！
                  </h3>
                </div>
              </div>
              <p class="feature-card__description feature-card__description--weight-500">
                当社は
                お見積り完全無料！電話・メール、訪問見積りも含めて費用は一切かかりません。さらに、訪問見積り後に内容の変更がない限り追加料金は一切発生しません。信頼性のあるサービスを提供することを心掛けております。お客様にご満足いただけるよう真摯に対応させていただきます。
              </p>
            </div>

            <div class="feature-card">
              <div class="feature-card__header">
                <div class="feature-card__icon">
                  <img src="./img/feature-card-icon-3.svg" alt="特徴アイコン" width="100" height="94" />
                </div>
                <div class="feature-card__text-wrapper">
                  <div class="feature-card__badge-wrapper">
                    <div class="feature-card__badge">
                      <span class="feature-card__badge-text feature-card__badge-text--weight-700">最短即日</span>
                    </div>
                    <div class="feature-card__badge-triangle"></div>
                  </div>
                  <h3 class="feature-card__title">
                    早朝や深夜も
                    <br />
                    10分での対応可能
                  </h3>
                </div>
              </div>
              <p class="feature-card__description feature-card__description--weight-500">
                早朝や深夜を含め、最短10分での対応が可能です。 お仕事やプライベートでお忙しいお客様でも、いつでもお気軽にお問い合わせいただけます。
              </p>
            </div>

            <div class="feature-card">
              <div class="feature-card__header">
                <div class="feature-card__icon">
                  <img src="./img/feature-card-icon-4.svg" alt="特徴アイコン" width="100" height="94" />
                </div>
                <div class="feature-card__text-wrapper">
                  <div class="feature-card__badge-wrapper">
                    <div class="feature-card__badge">
                      <span class="feature-card__badge-text feature-card__badge-text--weight-700">お客様の期待を裏切らない</span>
                    </div>
                    <div class="feature-card__badge-triangle"></div>
                  </div>
                  <h3 class="feature-card__title">誠実なお客様対応</h3>
                </div>
              </div>
              <p class="feature-card__description feature-card__description--weight-500">
                安全・格安・清潔・丁寧をモットーに、お客様に安心のサービスをお届けすることを心がけています。接客やマナーの研修も徹底して行っており、常にお客様に最適な提案を心掛け、お客様視点での提案を行います。お客様のニーズに合わせたサービスを提供することで、ご満足していただけるよう頑張っております。
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- 料金セクション -->
      <section class="price-section section">
        <div class="inner">
          <h2 class="price-title title">ゴミ屋敷の片付け料金</h2>

          <div class="price-section__content">
            <div class="price-section__info-wrapper">
              <div class="price-info">
                <img src="./img/price-img.png" alt="料金情報" class="price-info__image" width="351" height="200" />
              </div>
            </div>

            <div class="price-section__table-wrapper">
              <div class="price-table-scroll-wrapper">
                <table class="price-table">
                  <thead>
                    <tr>
                      <th class="price-table__header price-table__header--plan">
                        プラン
                        <br />
                        間取り
                      </th>
                      <th class="price-table__header price-table__header--price">定価</th>
                      <th class="price-table__header price-table__header--discount">割引率</th>
                      <th class="price-table__header price-table__header--web">
                        WEB
                        <br />
                        限定価格
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="price-table__cell price-table__cell--plan">少量</td>
                      <td class="price-table__cell price-table__cell--price">
                        <span class="price-table__price-original">13,800円</span>
                        <br />
                        （税込）
                      </td>
                      <td class="price-table__cell price-table__cell--discount price-table__cell--discount-43">
                        43%
                        <br />
                        OFF
                      </td>
                      <td class="price-table__cell price-table__cell--web">
                        <span class="price-table__web-price-number">7,800</span>
                        円
                        <br />
                        （税込）〜
                      </td>
                    </tr>
                    <tr>
                      <td class="price-table__cell price-table__cell--plan">1K</td>
                      <td class="price-table__cell price-table__cell--price">
                        <span class="price-table__price-original">19,800円</span>
                        <br />
                        （税込）
                      </td>
                      <td class="price-table__cell price-table__cell--discount price-table__cell--discount-25">
                        25%
                        <br />
                        OFF
                      </td>
                      <td class="price-table__cell price-table__cell--web">
                        <span class="price-table__web-price-number">14,800</span>
                        円
                        <br />
                        （税込）〜
                      </td>
                    </tr>
                    <tr>
                      <td class="price-table__cell price-table__cell--plan">1LDK</td>
                      <td class="price-table__cell price-table__cell--price">
                        <span class="price-table__price-original">39,800円</span>
                        <br />
                        （税込）
                      </td>
                      <td class="price-table__cell price-table__cell--discount price-table__cell--discount-28">
                        28%
                        <br />
                        OFF
                      </td>
                      <td class="price-table__cell price-table__cell--web">
                        <span class="price-table__web-price-number">28,800</span>
                        円
                        <br />
                        （税込）〜
                      </td>
                    </tr>
                    <tr>
                      <td class="price-table__cell price-table__cell--plan">2LDK</td>
                      <td class="price-table__cell price-table__cell--price">
                        <span class="price-table__price-original">59,800円</span>
                        <br />
                        （税込）
                      </td>
                      <td class="price-table__cell price-table__cell--discount price-table__cell--discount-18">
                        18%
                        <br />
                        OFF
                      </td>
                      <td class="price-table__cell price-table__cell--web">
                        <span class="price-table__web-price-number">48,800</span>
                        円
                        <br />
                        （税込）〜
                      </td>
                    </tr>
                    <tr>
                      <td class="price-table__cell price-table__cell--plan price-table__cell--plan-large">
                        3LDK
                        <br />
                        以上
                      </td>
                      <td class="price-table__cell price-table__cell--consultation" colspan="3">要相談</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="price-section__footer">
                <p class="price-section__note">
                  ※ゴミ・不用品の量や現場の状況により多少異なる場合がございます。正式な料金は現場確認後、内訳を詳細に記載したお見積書をお渡しします。訪問お見積もり後の追加料金は一切ございません。
                </p>
              </div>
            </div>
          </div>
          <img src="./img/house-image.png" alt="家" class="price-section__house-image" width="273" height="265" />
          <div class="price-section__images">
            <img src="./img/price-cleanup-visual.jpg" alt="クリーンアップビジュアル" class="price-section__image" width="425" height="300" />
            <img src="./img/contact1-discount.png" alt="割引情報" class="price-section__image" width="425" height="300" />
          </div>
        </div>
      </section>

      <!-- フローセクション -->
      <section class="flow-section section">
        <div class="inner">
          <h2 class="flow-title title">ゴミ屋敷の片付けの流れ</h2>

          <div class="flow-section__steps">
            <div class="flow-item">
              <div class="flow-item__header">
                <div class="flow-item__step-wrapper">
                  <div class="flow-item__step-badge-wrapper">
                    <img src="./img/flow-step-1.png" alt="STEP 1" class="flow-item__step-badge" width="69" height="69" />
                  </div>
                  <h3 class="flow-item__title">無料相談・お問合せ</h3>
                </div>
              </div>
              <p class="flow-item__description">お電話・メールでお気軽にご相談ください。片付けや掃除でご不安な点、お客様のご都合をお伺いしてお見積りの日時を調整させていただきます。</p>
            </div>

            <div class="flow-item">
              <div class="flow-item__header">
                <div class="flow-item__step-wrapper">
                  <div class="flow-item__step-badge-wrapper">
                    <img src="./img/flow-step-2.png" alt="STEP 2" class="flow-item__step-badge" width="69" height="69" />
                  </div>
                  <h3 class="flow-item__title">無料お見積もり</h3>
                </div>
              </div>
              <p class="flow-item__description">ご訪問して見積りを行います。見積りにご承諾いただいた上で作業を進めますのでご安心ください。当日はもちろん、別の日時での予約も可能です。</p>
            </div>

            <div class="flow-item">
              <div class="flow-item__header">
                <div class="flow-item__step-wrapper">
                  <div class="flow-item__step-badge-wrapper">
                    <img src="./img/flow-step-3.png" alt="STEP 3" class="flow-item__step-badge" width="69" height="69" />
                  </div>
                  <h3 class="flow-item__title">作業開始</h3>
                </div>
              </div>
              <p class="flow-item__description">
                不用品の回収作業を開始いたします。
                <br />
                基本的にはお客様の立ち合いをお願いしていますが、もし立会いが難しい場合は一度ご相談ください。
              </p>
            </div>

            <div class="flow-item">
              <div class="flow-item__header">
                <div class="flow-item__step-wrapper">
                  <div class="flow-item__step-badge-wrapper">
                    <img src="./img/flow-step-4.png" alt="STEP 4" class="flow-item__step-badge" width="69" height="69" />
                  </div>
                  <h3 class="flow-item__title">作業終了</h3>
                </div>
              </div>
              <p class="flow-item__description">作業完了後に、お見積りした金額をお支払いいただきます。お支払い方法は現金の他、クレジットカードに対応しています。</p>
            </div>
          </div>
        </div>
      </section>

      <!-- エリアセクション -->
      <section class="area-section section">
        <div class="inner">
          <img src="./img/area-car-background.png" alt="車の背景" class="area-section__car-image" width="354" height="354" />
          <h2 class="area-title title">対応エリア</h2>
          <div class="area-section__content">
            <p class="area-section__description">ゴミ屋敷クリーンサポートは、下記市区町村にて対応しています。常に迅速な対応を心がけておりますので、ゴミ屋敷の片付けは一度お気軽にご相談ください！</p>
            <div class="area-accordions">
              <div class="area-accordion">
                <button class="area-accordion__header" type="button">
                  <span class="area-accordion__title">大阪府全域</span>
                  <img src="./img/area-accordion-minus.svg" alt="閉じる" class="area-accordion__icon area-accordion__icon--minus" width="20" height="20" />
                  <img src="./img/area-accordion-plus.svg" alt="開く" class="area-accordion__icon area-accordion__icon--plus" width="20" height="20" />
                </button>
                <div class="area-accordion__content">
                  <p class="area-accordion__text">
                    大阪市・堺市・岸和田市・豊中市・池田市・吹田市・泉大津市・高槻市・貝塚市・守口市・枚方市・茨木市・八尾市・泉佐野市・富田林市・寝屋川市・河内長野市・松原市・大東市・和泉市・箕面市・柏原市・羽曳野市・門真市・摂津市・高石市・藤井寺市・東大阪市・泉南市・四條畷市・交野市・大阪狭山市・阪南市・島本町・豊能町・能勢町・忠岡町・熊取町・田尻町・岬町・太子町・河南町・千早赤阪村
                  </p>
                </div>
              </div>

              <div class="area-accordion area-accordion--closed">
                <button class="area-accordion__header" type="button">
                  <span class="area-accordion__title">兵庫県全域</span>
                  <img src="./img/area-accordion-minus.svg" alt="閉じる" class="area-accordion__icon area-accordion__icon--minus" width="20" height="20" />
                  <img src="./img/area-accordion-plus.svg" alt="開く" class="area-accordion__icon area-accordion__icon--plus" width="20" height="20" />
                </button>
                <div class="area-accordion__content">
                  <p class="area-accordion__text">
                    神戸市・姫路市・尼崎市・明石市・西宮市・洲本市・芦屋市・伊丹市・相生市・豊岡市・加古川市・赤穂市・西脇市・宝塚市・三木市・高砂市・川西市・小野市・三田市・加西市・篠山市・養父市・丹波市・南あわじ市・朝来市・淡路市・宍粟市・加東市・たつの市・猪名川町・多可町・稲美町・播磨町・市川町・福崎町・神河町・太子町・上郡町・佐用町・香美町・新温泉町
                  </p>
                </div>
              </div>

              <div class="area-accordion area-accordion--closed">
                <button class="area-accordion__header" type="button">
                  <span class="area-accordion__title">京都府全域</span>
                  <img src="./img/area-accordion-minus.svg" alt="閉じる" class="area-accordion__icon area-accordion__icon--minus" width="20" height="20" />
                  <img src="./img/area-accordion-plus.svg" alt="開く" class="area-accordion__icon area-accordion__icon--plus" width="20" height="20" />
                </button>
                <div class="area-accordion__content">
                  <p class="area-accordion__text">京都市・福知山市・舞鶴市・綾部市・宇治市・宮津市・亀岡市・城陽市・向日市・長岡京市・八幡氏・京田辺市・京丹後市・南丹市・木津川市</p>
                </div>
              </div>

              <div class="area-accordion area-accordion--closed">
                <button class="area-accordion__header" type="button">
                  <span class="area-accordion__title">奈良県全域</span>
                  <img src="./img/area-accordion-minus.svg" alt="閉じる" class="area-accordion__icon area-accordion__icon--minus" width="20" height="20" />
                  <img src="./img/area-accordion-plus.svg" alt="開く" class="area-accordion__icon area-accordion__icon--plus" width="20" height="20" />
                </button>
                <div class="area-accordion__content">
                  <p class="area-accordion__text">
                    奈良市・大和高田市・大和郡山市・天理市・橿原市・桜井市・五條市・御所市・生駒市・香芝市・葛城市・宇陀市・山添村・平群町・三郷町・斑鳩町・安堵町・川西町・三宅町・田原本町・曽爾村・御杖村・高取町・明日香村・上牧町・王寺町・広陵町・河合町・吉野町・大淀町・下市町・黒滝村・天川村・野迫川村・十津川村・下北山村・上北山村・川上村・東吉野村
                  </p>
                </div>
              </div>

              <div class="area-accordion area-accordion--closed">
                <button class="area-accordion__header" type="button">
                  <span class="area-accordion__title">和歌山県全域</span>
                  <img src="./img/area-accordion-minus.svg" alt="閉じる" class="area-accordion__icon area-accordion__icon--minus" width="20" height="20" />
                  <img src="./img/area-accordion-plus.svg" alt="開く" class="area-accordion__icon area-accordion__icon--plus" width="20" height="20" />
                </button>
                <div class="area-accordion__content">
                  <p class="area-accordion__text">
                    和歌山市・海南市・橋本市・有田市・御坊市・田辺市・新宮市・紀の川市・岩出市・紀美野町・かつらぎ町・九度山町・高野町・湯浅町・広川町・有田川町・美浜町・日高町・由良町・印南町・みなべ町・日高川町・白浜町・上富田町・すさみ町・那智勝浦町・太地町・古座川町・北山村・串本町
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- QAセクション -->
      <section class="qa-section section">
        <div class="inner">
          <h2 class="qa-title title">よくあるご質問</h2>
          <div class="qa-section__items">
            <div class="qa-item qa-item--closed">
              <button class="qa-item__question" type="button">
                <span class="qa-item__q-badge">
                  <span class="qa-item__q-text">Q</span>
                </span>
                <span class="qa-item__question-content">
                  <span class="qa-item__question-text">当日の作業は可能ですか？</span>
                  <img src="./img/qa-icon-closed.svg" alt="閉じる" class="qa-item__question-icon qa-item__question-icon--closed" width="18" height="25" />
                  <img src="./img/qa-icon.svg" alt="開く" class="qa-item__question-icon qa-item__question-icon--open" width="18" height="25" />
                </span>
              </button>
              <div class="qa-item__answer">
                <div class="qa-item__a-badge">
                  <span class="qa-item__a-text">A</span>
                </div>
                <p class="qa-item__answer-text">
                  可能です。対応エリアをスタッフが巡回しているため、最短15分でお伺いいたします。お部屋の状況や必要人員、車両によっては翌日以降に改めて日程調整させて頂くこともございますが、まずはお気軽にご相談ください。
                </p>
              </div>
            </div>

            <div class="qa-item">
              <button class="qa-item__question" type="button">
                <span class="qa-item__q-badge">
                  <span class="qa-item__q-text">Q</span>
                </span>
                <span class="qa-item__question-content">
                  <span class="qa-item__question-text">現金以外も利用可能ですか？</span>
                  <img src="./img/qa-icon-closed.svg" alt="閉じる" class="qa-item__question-icon qa-item__question-icon--closed" width="18" height="25" />
                  <img src="./img/qa-icon.svg" alt="開く" class="qa-item__question-icon qa-item__question-icon--open" width="18" height="25" />
                </span>
              </button>
              <div class="qa-item__answer">
                <div class="qa-item__a-badge">
                  <span class="qa-item__a-text">A</span>
                </div>
                <p class="qa-item__answer-text">
                  現金以外にも当社ではVISA・Master・JCBなどのクレジットカードに対応していますので、安心してお問い合わせください。分割が可能なクレジットカードであれば、決済後にお客様自身で対応頂ければより安心してご依頼頂けます。
                </p>
              </div>
            </div>

            <div class="qa-item qa-item--closed">
              <button class="qa-item__question" type="button">
                <span class="qa-item__q-badge">
                  <span class="qa-item__q-text">Q</span>
                </span>
                <span class="qa-item__question-content">
                  <span class="qa-item__question-text">後日請求書払いは可能ですか？</span>
                  <img src="./img/qa-icon-closed.svg" alt="閉じる" class="qa-item__question-icon qa-item__question-icon--closed" width="18" height="25" />
                  <img src="./img/qa-icon.svg" alt="開く" class="qa-item__question-icon qa-item__question-icon--open" width="18" height="25" />
                </span>
              </button>
              <div class="qa-item__answer">
                <div class="qa-item__a-badge">
                  <span class="qa-item__a-text">A</span>
                </div>
                <p class="qa-item__answer-text">
                  基本的には現金かクレジットカードにてお支払いいただきます。ただ、お客様のご事情に合わせて最適な方法をご提案いたしますので、まずは一度ご相談ください。受付時にお申し付けいただければ可能な範囲でご協力いたします。
                </p>
              </div>
            </div>

            <div class="qa-item qa-item--closed">
              <button class="qa-item__question" type="button">
                <span class="qa-item__q-badge">
                  <span class="qa-item__q-text">Q</span>
                </span>
                <span class="qa-item__question-content">
                  <span class="qa-item__question-text">他社より安くできますか？</span>
                  <img src="./img/qa-icon-closed.svg" alt="閉じる" class="qa-item__question-icon qa-item__question-icon--closed" width="18" height="25" />
                  <img src="./img/qa-icon.svg" alt="開く" class="qa-item__question-icon qa-item__question-icon--open" width="18" height="25" />
                </span>
              </button>
              <div class="qa-item__answer">
                <div class="qa-item__a-badge">
                  <span class="qa-item__a-text">A</span>
                </div>
                <p class="qa-item__answer-text">
                  お安くできるように努力します。お見積り内容をお電話でお伝え頂いた上で、現地のお見積にてギリギリまで費用を抑えたプランをご提案いたします。地域密着でコストを抑えるなど、お客様にお得なサービスを提供できるように企業努力しております。
                </p>
              </div>
            </div>

            <div class="qa-item qa-item--closed">
              <button class="qa-item__question" type="button">
                <span class="qa-item__q-badge">
                  <span class="qa-item__q-text">Q</span>
                </span>
                <span class="qa-item__question-content">
                  <span class="qa-item__question-text">作業時に何か必要なものはありますか？</span>
                  <img src="./img/qa-icon-closed.svg" alt="閉じる" class="qa-item__question-icon qa-item__question-icon--closed" width="18" height="25" />
                  <img src="./img/qa-icon.svg" alt="開く" class="qa-item__question-icon qa-item__question-icon--open" width="18" height="25" />
                </span>
              </button>
              <div class="qa-item__answer">
                <div class="qa-item__a-badge">
                  <span class="qa-item__a-text">A</span>
                </div>
                <p class="qa-item__answer-text">
                  特にありません。ゴミ回収や片付け作業に関してはすべてスタッフが対応いたします。状況によってはお立会い無しで作業することも可能ですので、ご要望等は遠慮なくお申し付けください。
                </p>
              </div>
            </div>
            <div class="qa-item qa-item--closed">
              <button class="qa-item__question" type="button">
                <span class="qa-item__q-badge">
                  <span class="qa-item__q-text">Q</span>
                </span>
                <span class="qa-item__question-content">
                  <span class="qa-item__question-text">見積もり日程や作業日程を変更することはできますか？</span>
                  <img src="./img/qa-icon-closed.svg" alt="閉じる" class="qa-item__question-icon qa-item__question-icon--closed" width="18" height="25" />
                  <img src="./img/qa-icon.svg" alt="開く" class="qa-item__question-icon qa-item__question-icon--open" width="18" height="25" />
                </span>
              </button>
              <div class="qa-item__answer">
                <div class="qa-item__a-badge">
                  <span class="qa-item__a-text">A</span>
                </div>
                <p class="qa-item__answer-text">日程変更に関しては、前日12時までにご連絡いただきますようお願いいたします。</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTAセクション -->
      <div class="cta-section section">
        <div class="inner">
          <div class="cta-section__inner">
            <div class="cta-section__container">
              <div class="cta-section__features">
                <ul class="cta-section__feature-lists">
                  <li class="cta-section__feature-list">
                    <div class="fv__label-icon"><?php echo file_get_contents('./img/fv__label-icon-1-v2.svg'); ?></div>
                    <div class="cta-section__feature-texts">
                      <div class="cta-section__feature-text">最短即日</div>
                      <div class="cta-section__feature-number">10</div>
                      <div class="cta-section__feature-text">分対応</div>
                    </div>
                  </li>
                  <li class="cta-section__feature-list">
                    <div class="fv__label-icon"><svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.7658 28.1255L31.3225 21.1048L33.4372 19.3884C33.9456 18.9757 34.2639 18.3862 34.3219 17.7496C34.38 17.1131 34.1732 16.4816 33.7468 15.9941L32.3984 14.453C32.0056 14.004 31.4549 13.7097 30.8503 13.6258L30.8047 12.9048C30.7913 12.6924 30.6907 12.4942 30.5251 12.3539L24.3441 7.11417C24.1785 6.97379 23.9615 6.90272 23.7408 6.91662L12.9194 7.59989C12.2571 7.64171 11.6379 7.93502 11.198 8.41529C10.7581 8.89556 10.5336 9.52345 10.5739 10.1608L11.7878 29.387C11.8281 30.0243 12.1298 30.619 12.6265 31.0401C13.1233 31.4613 13.7745 31.6744 14.4368 31.6325L29.4203 30.6865C30.0826 30.6447 30.7018 30.3514 31.1417 29.8711C31.5815 29.3908 31.806 28.7629 31.7658 28.1255ZM13.4527 29.2818L12.2387 10.0557C12.2253 9.84325 12.3001 9.63396 12.4467 9.47387C12.5934 9.31378 12.7998 9.21601 13.0205 9.20207L23.0095 8.57135L23.2881 12.9829C23.3298 13.6438 23.9205 14.1438 24.6064 14.1005L29.1905 13.8111L29.1991 13.9472C29.0862 14.0123 28.9778 14.0869 28.8739 14.1713L26.795 15.8588C26.7643 15.7776 26.7072 15.7083 26.632 15.6612C26.5569 15.614 26.4679 15.5916 26.3782 15.5972L15.5568 16.2805C15.4464 16.2874 15.3432 16.3363 15.2699 16.4164C15.1966 16.4964 15.1592 16.6011 15.1659 16.7073C15.1726 16.8135 15.2229 16.9126 15.3057 16.9828C15.3885 17.053 15.497 17.0885 15.6074 17.0816L26.105 16.4187L23.9561 18.163L15.7085 18.6837C15.5982 18.6907 15.495 18.7396 15.4216 18.8196C15.3483 18.8997 15.3109 19.0043 15.3176 19.1106C15.3243 19.2168 15.3746 19.3159 15.4574 19.3861C15.5402 19.4563 15.6487 19.4918 15.7591 19.4848L22.8821 19.0351L20.7332 20.7793L15.8603 21.087C15.7499 21.094 15.6467 21.1429 15.5734 21.2229C15.5001 21.3029 15.4627 21.4076 15.4694 21.5138C15.4761 21.6201 15.5264 21.7192 15.6092 21.7894C15.692 21.8595 15.8005 21.8951 15.9109 21.8881L19.6592 21.6514L17.5549 23.3591L17.5137 23.3954L16.012 23.4903C15.9016 23.4972 15.7984 23.5461 15.7251 23.6262C15.6518 23.7062 15.6144 23.8109 15.6211 23.9171C15.6278 24.0233 15.6781 24.1224 15.7609 24.1926C15.8437 24.2628 15.9522 24.2983 16.0626 24.2914L17.1722 24.2213L16.2156 28.065C16.1852 28.1872 16.1849 28.3143 16.2148 28.4363C16.2446 28.5583 16.3038 28.6717 16.3875 28.7674C16.4712 28.8632 16.5772 28.9386 16.6969 28.9876C16.8166 29.0367 16.9467 29.058 17.0768 29.0498L21.632 28.7654C21.8106 28.7544 21.981 28.6883 22.1182 28.5771L29.7325 22.3955L30.101 28.2307C30.1144 28.4431 30.0395 28.6524 29.8929 28.8125C29.7463 28.9726 29.5399 29.0704 29.3191 29.0843L14.3356 30.0304C14.1149 30.0443 13.8978 29.9733 13.7322 29.8329C13.5666 29.6925 13.4661 29.4943 13.4527 29.2818ZM24.5558 13.2994C24.5019 13.3028 24.4479 13.296 24.3968 13.2793C24.3458 13.2626 24.2987 13.2363 24.2583 13.2021C24.2179 13.1678 24.1849 13.1262 24.1613 13.0796C24.1376 13.0329 24.1237 12.9823 24.1205 12.9304L23.8629 8.85044L28.7953 13.0317L24.5558 13.2994ZM29.7943 20.2506L27.3788 17.4804L28.3089 16.7251L30.7284 19.4919L29.7943 20.2506ZM19.4424 23.9227L26.7396 17.9993L29.1543 20.7696L21.9342 26.6302L19.4424 23.9227ZM18.8248 24.4644L21.2943 27.15L21.2569 27.1805L19.0809 27.3163L18.3296 26.4565L18.8248 24.4644Z" fill="#3BAF75"/></svg></div>
                    <div class="cta-section__feature-texts">
                      <div class="cta-section__feature-text">お見積り・出張費無料</div>
                    </div>
                  </li>
                  <li class="cta-section__feature-list">
                    <div class="fv__label-icon"><?php echo file_get_contents('./img/fv__label-icon-3-v2.svg'); ?></div>
                    <div class="cta-section__feature-texts">
                      <div class="cta-section__feature-number">24</div>
                      <div class="cta-section__feature-text">時間</div>
                      <div class="cta-section__feature-number">365</div>
                      <div class="cta-section__feature-text">日対応</div>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="cta-section__contacts">
                <p class="cta-section__urgent-text">＼お急ぎの方はお電話ください／</p>
                <div class="cta-section__contact-buttons">
                  <a href="tel:<?php echo htmlspecialchars($phone_number, ENT_QUOTES, 'UTF-8'); ?>" class="phone-contact">
                    <div class="phone-contact__header">
                      <svg class="phone-contact__icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 18 21" fill="none">
                        <g clip-path="url(#clip0_phone_contact_2)">
                          <path
                            d="M6.85108 2.33656C6.48675 1.56333 5.86906 1.13493 5.15463 1.01684C4.47686 0.90433 3.76707 1.07765 3.14903 1.36606C2.5183 1.66213 1.95156 2.07869 1.4807 2.59227C1.0355 3.08184 0.669422 3.68864 0.591265 4.33045C0.21579 7.41794 1.36023 10.9896 3.3506 13.8343C5.33972 16.6761 8.26863 18.9239 11.5816 19.1772C12.231 19.2269 12.8919 19.0082 13.4582 18.6809C14.0445 18.3388 14.555 17.8808 14.9586 17.3349C15.3508 16.7984 15.6426 16.1514 15.6638 15.475C15.6866 14.77 15.4104 14.0876 14.7751 13.5555C14.6436 13.4446 14.5141 13.3313 14.3869 13.2157C14.2734 13.1143 14.1527 13.0046 14.0054 12.8771C13.7056 12.6104 13.3816 12.3721 13.0376 12.1655C12.6826 11.9602 12.2648 11.7929 11.8023 11.7752C11.3231 11.7573 10.8496 11.9013 10.4038 12.2306C10.0604 12.4852 9.6175 12.5051 9.04871 12.2263C8.47033 11.9422 7.86166 11.3832 7.37021 10.6856C6.87846 9.98971 6.54954 9.21923 6.46686 8.56131C6.38567 7.90978 6.54979 7.47043 6.90214 7.20958C7.37822 6.85762 7.67506 6.42505 7.80777 5.93553C7.93723 5.45944 7.89692 4.98317 7.79465 4.5555C7.64121 3.91662 7.30721 3.24939 7.04538 2.72882C6.97944 2.59858 6.915 2.46759 6.85208 2.33586"
                            fill="#FDFDFD"
                          />
                        </g>
                        <defs>
                          <clipPath id="clip0_phone_contact_2">
                            <rect width="18" height="21" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                      <span class="phone-contact__label">受付時間</span>
                      <div class="phone-contact__time">7:00~23:00</div>
                    </div>
                    <div class="phone-contact__number"><?php echo htmlspecialchars($phone_number, ENT_QUOTES, 'UTF-8'); ?></div>
                  </a>
                  <a href="#contact" class="email-contact">
                    <div class="email-contact__header">
                      <svg class="email-contact__icon" xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                        <path
                          d="M20.5 0H2.5C1.12 0 0 1.12 0 2.5V15.5C0 16.88 1.12 18 2.5 18H20.5C21.88 18 23 16.88 23 15.5V2.5C23 1.12 21.88 0 20.5 0ZM20.5 4.75L11.5 10.5L2.5 4.75V2.5L11.5 8.25L20.5 2.5V4.75Z"
                          fill="#FDFDFD"
                        />
                      </svg>
                      <div class="email-contact__label-wrapper">
                        <span class="email-contact__label">メールで</span>
                      </div>
                    </div>
                    <div class="email-contact__text">無料相談・お問合せする</div>
                  </a>
                </div>
              </div>

              <div class="cta-section__payment">
                <img src="./img/payment-human.png" alt="作業員" class="cta-section__payment-image" width="96" height="119" />
                <div class="cta-section__payment-content">
                  <div class="cta-section__payment-title">
                    <p class="cta-section__payment-title-text">お支払い方法</p>
                  </div>
                  <div class="payment-method">
                    <div class="payment-method__option payment-method__option--cash">
                      <svg class="payment-method__icon" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path
                          d="M15.0063 27.5037C8.1026 27.5037 2.50635 21.9075 2.50635 15.0037C2.50635 8.09997 8.1026 2.50372 15.0063 2.50372C21.9101 2.50372 27.5064 8.09997 27.5064 15.0037C27.5064 21.9075 21.9101 27.5037 15.0063 27.5037ZM16.2564 16.2537V15.0037H20.0063V12.5037H16.7738L19.4251 9.84997L17.6576 8.08247L15.0063 10.735L12.3551 8.08247L10.5863 9.84997L13.2388 12.5025H10.0063V15.0025H13.7563V16.2525H10.0063V18.7525H13.7563V21.2525H16.2564V18.7525H20.0063V16.2525L16.2564 16.2537Z"
                          fill="#3BAF75"
                        />
                      </svg>
                      <span class="payment-method__option-text">現金</span>
                    </div>
                    <div class="payment-method__option payment-method__option--card">
                      <svg class="payment-method__icon" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path
                          d="M3.00093 10.3126H26.9995V9.31718C26.9995 7.11319 25.8525 6 23.5682 6H6.4323C4.14845 6 3.00047 7.11319 3.00047 9.31764L3.00093 10.3126ZM3.00093 20.6933C3.00093 22.8978 4.14799 24 6.4323 24H23.5682C25.852 24 27 22.8978 27 20.6933V12.7421H3L3.00093 20.6933ZM6.65099 18.082V16.1022C6.65099 15.5032 7.07717 15.0749 7.72204 15.0749H10.3994C11.0443 15.0749 11.4705 15.5032 11.4705 16.1022V18.082C11.4705 18.6921 11.0443 19.1094 10.3994 19.1094H7.72157C7.0767 19.1094 6.65099 18.6921 6.65099 18.082Z"
                          fill="#3BAF75"
                        />
                      </svg>
                      <span class="payment-method__option-text">
                        クレジット
                        <br />
                        カード
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <img src="./img/contact1-discount.png" alt="割引情報" class="cta-section__discount-image" width="425" height="300" />
          <img src="./img/footer-image.png" alt="フッター画像" class="footer-section__image" width="425" height="200" />
        </div>
      </div>

      <!-- 無料相談・お問合せセクション -->
      <section id="contact" class="contact2-section section">
        <div class="inner">
          <!-- タイトル -->
          <h2 class="contact-form__title title">無料相談・お問合せ</h2>

          <!-- 説明テキスト -->
          <div class="contact2-section__description">
            <p class="contact2-section__description-text">送信完了しても正式なお申込みにはなりませんのでご安心ください。追ってメールまたはお電話にてご連絡いたします。</p>
          </div>

          <!-- フォーム -->
          <form class="contact2-section__form" id="contact2-form" action="sendmail.php" method="POST">
            <div class="contact-form__fields">
              <div class="contact-form__radio-group">
                <div class="contact-form__radio-group-header">
                  <div class="contact-form__tag">必須</div>
                  <div class="contact-form__label">お問合せ内容</div>
                </div>
                <div class="contact-form__radio-options">
                  <label class="contact-form__radio-option">
                    <input type="radio" name="contact-content" value="consultation" class="contact-form__radio-input" />
                    <span class="contact-form__radio-visual">
                      <span class="contact-form__radio-circle"></span>
                    </span>
                    <span class="contact-form__radio-text">まずは無料で相談したい</span>
                  </label>
                  <label class="contact-form__radio-option">
                    <input type="radio" name="contact-content" value="reservation" class="contact-form__radio-input" />
                    <span class="contact-form__radio-visual">
                      <span class="contact-form__radio-circle"></span>
                    </span>
                    <span class="contact-form__radio-text">日程の予約をしたい</span>
                  </label>
                  <label class="contact-form__radio-option">
                    <input type="radio" name="contact-content" value="other" class="contact-form__radio-input" />
                    <span class="contact-form__radio-visual">
                      <span class="contact-form__radio-circle"></span>
                    </span>
                    <span class="contact-form__radio-text">その他</span>
                  </label>
                </div>
                <div class="contact-form__radio-error" style="display: none">
                  <span class="contact-form__error-icon">⚠️</span>
                  <span class="contact-form__error-text">このフィールドを入力してください。</span>
                </div>
              </div>
              <div class="contact-form__field">
                <div class="contact-form__field-header">
                  <div class="contact-form__tag">必須</div>
                  <div class="contact-form__label">お名前</div>
                </div>
                <input type="text" class="contact-form__field-input" placeholder="お名前を入力してください" name="お名前" />
                <div class="contact-form__field-error" style="display: none">
                  <span class="contact-form__error-icon">⚠️</span>
                  <span class="contact-form__error-text">このフィールドを入力してください。</span>
                </div>
              </div>
              <div class="contact-form__field">
                <div class="contact-form__field-header">
                  <div class="contact-form__tag">必須</div>
                  <div class="contact-form__label">メールアドレス</div>
                </div>
                <input type="email" class="contact-form__field-input" placeholder="例）info@example.com" name="email" />
                <div class="contact-form__field-error" style="display: none">
                  <span class="contact-form__error-icon">⚠️</span>
                  <span class="contact-form__error-text">このフィールドを入力してください。</span>
                </div>
              </div>
              <div class="contact-form__field">
                <div class="contact-form__field-header">
                  <div class="contact-form__tag">必須</div>
                  <div class="contact-form__label">電話番号</div>
                </div>
                <input type="tel" class="contact-form__field-input" placeholder="例）090-0000-0000" name="電話番号" />
                <div class="contact-form__field-error" style="display: none">
                  <span class="contact-form__error-icon">⚠️</span>
                  <span class="contact-form__error-text">このフィールドを入力してください。</span>
                </div>
              </div>
              <div class="contact-form__field contact-form__field--postal">
                <div class="contact-form__field-header">
                  <div class="contact-form__tag">必須</div>
                  <div class="contact-form__label">郵便番号</div>
                </div>
                <input type="text" class="contact-form__field-input" placeholder="例）000-0000" name="郵便番号" />
                <div class="contact-form__field-error" style="display: none">
                  <span class="contact-form__error-icon">⚠️</span>
                  <span class="contact-form__error-text">このフィールドを入力してください。</span>
                </div>
              </div>
              <div class="contact-form__field">
                <div class="contact-form__field-header">
                  <div class="contact-form__tag">必須</div>
                  <div class="contact-form__label">住所</div>
                </div>
                <input type="text" class="contact-form__field-input" placeholder="住所を入力してください" name="住所" />
                <div class="contact-form__field-error" style="display: none">
                  <span class="contact-form__error-icon">⚠️</span>
                  <span class="contact-form__error-text">このフィールドを入力してください。</span>
                </div>
              </div>
              <div class="contact-form__field">
                <div class="contact-form__field-header">
                  <div class="contact-form__tag">必須</div>
                  <div class="contact-form__label">お問合せ内容</div>
                </div>
                <textarea class="contact-form__field-textarea" placeholder="お問合せ内容をできるだけ具体的にお書きください" name="ご要望など"></textarea>
                <div class="contact-form__field-error" style="display: none">
                  <span class="contact-form__error-icon">⚠️</span>
                  <span class="contact-form__error-text">このフィールドを入力してください。</span>
                </div>
              </div>
            </div>

            <!-- プライバシーポリシー -->
            <div class="contact2-section__privacy">
              <div class="contact-form__privacy-text">
                <div class="contact-form__privacy-text-content">
                  〇個人情報保護方針 (プライバシーポリシー)
                  <br />
                  ゴミ屋敷クリーンサポート(以下、当社)では、お客様からご提供いただく個人情報の保護のため、下記の個人情報保護方針に基づき取り扱っております。 ■個人情報の管理
                  <br />
                  当社は、お客様の個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。
                  <br />
                  ■個人情報の第三者提供について
                  <br />
                  当社では、個人情報の第三者への提供は正当な弊社事業遂行に必要な範囲内で、法令に基づき開示することが必要である場合を除き、お客様の同意がある場合のみ行います。
                  <br />
                  当社では、正当な弊社事業遂行に必要な範囲において、お預かりした個人情報を第三者へ委託する場合があります。 個人情報の委託とは、広告制作会社への外部委託、
                  データベース構築の外部委託などを指します。情報の委託にあたっては、
                  委託する第三者に十分な個人情報保護の体制が整っていることを条件に慎重に審査した上で、契約等を通じて監督し、事故防止に努めます。
                  <br />
                  ■Cookie（クッキー）について
                  <br />
                  Cookieとは利用者のウェブサイト閲覧情報を記録させる機能のことです。
                  <br />
                  当社では第三者が提供する広告配信サービスを利用するため、Cookieを使用し、ウェブサイトへの訪問回数や訪問したページなどの閲覧情報を取得、利用している場合があります。
                  <br />
                  なお、Cookie情報から、利用者の個人情報を特定することは出来ません。
                  <br />
                  当該第三者によって取得された訪問･閲覧情報は当該第三者のプライバシーポリシーに従って取り扱われます。
                  <br />
                  利用者は、当該第三者が提供する広告配信サービスのオプトアウト手段により、取得されたCookieの広告配信への利用を停止できます。
                  <br />
                  ・Google（https://policies.google.com/technologies/ads?hl=ja）
                  <br />
                  ・Yahoo! JAPAN（https://btoptout.yahoo.co.jp/optout/index.html）
                  <br />
                  ・Facebook（https://www.facebook.com/legal/terms）
                  <br />
                  ■個人情報の利用目的
                  <br />
                  当社はお客様からお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用させていただきます。
                  <br />
                  当社では第三者が運営するデータ・マネジメント・プラットフォームからクッキーにより収集されたウェブの閲覧履歴及びその分析結果を取得し、これをお客様の個人データと結びつけた上で、広告配信等の目的で利用する場合があります。
                  <br />
                  また、Facebook・LINEその他の広告関連事業者が保有するユーザーリストと当社が保有するメールアドレス・電話番号その他連絡先の情報を本人が特定されないデータに不可逆変換した上で、第三者広告配信事業者においてマッチングを行い、その結果に基づいて広告を配信することがあります。
                  <br />
                  ■アクセスログについて
                  <br />
                  当サイトに訪れる利用者が、いつどのドメインからアクセスしてきたかという情報は、当社が委託するサーバ会社のウェブサーバに蓄積されます。アクセスログは、ウェブサーバの統計を取るために分析の目的で利用するものであり、それ以外に利用することはございません。
                  <br />
                  ■個人情報に関するお問い合わせ、ご質問等
                  <br />
                  内容につきましてご不明な点がございましたら、こちらのWEBお問い合わせフォームまたはお電話にてお気軽にお問い合わせ下さい。
                </div>
              </div>

              <!-- チェックボックスと送信ボタン -->
              <div class="contact2-section__submit">
                <div class="contact2-section__privacy-checkbox-wrapper">
                  <label class="contact-form__checkbox">
                    <input type="checkbox" class="contact-form__checkbox-input" name="privacy-agree" />
                    <span class="contact-form__checkbox-visual"></span>
                    <span class="contact-form__checkbox-text">プライバシーポリシーに同意する</span>
                  </label>
                  <div class="contact2-section__privacy-error" style="display: none">
                    <span class="contact2-section__privacy-error-icon">⚠️</span>
                    <span class="contact2-section__privacy-error-text">このフィールドを入力してください。</span>
                  </div>
                </div>
                <input type="hidden" name="eweb_submit" value="eweb_submit" />
                <input type="hidden" name="お問合せ内容" id="contact-content-hidden" value="" />
                <button type="submit" class="contact-form__submit">
                  <span class="contact-form__submit-text">この内容で送信する</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </section>
    

      <!-- 固定フッター電話ボタン -->
      <div class="footer-tel section">
        <a href="tel:<?php echo htmlspecialchars($phone_number, ENT_QUOTES, 'UTF-8'); ?>" class="footer-tel__phone-button">
          <svg class="footer-tel__phone-icon" xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
            <path
              d="M18.985 17.8562L20.2289 20.0853C21.3502 22.0978 20.8998 24.7351 19.1326 26.5042C19.1326 26.5042 16.9859 28.649 20.8768 32.5379C24.7619 36.423 26.9066 34.282 26.9085 34.282C28.6776 32.513 31.3169 32.0625 33.3274 33.1838L35.5565 34.4296C38.5944 36.124 38.9529 40.3828 36.2829 43.0546C34.6787 44.657 32.7122 45.9066 30.5406 45.9871C26.8836 46.127 20.6717 45.2013 14.4406 38.9721C8.21144 32.741 7.28569 26.5291 7.42561 22.8721C7.50802 20.7005 8.75578 18.734 10.3581 17.1298C13.0299 14.4599 17.2888 14.8183 18.9831 17.8581M25.1605 11.2705C25.1908 11.0841 25.2575 10.9055 25.3568 10.7449C25.4562 10.5843 25.5862 10.4448 25.7394 10.3344C25.8927 10.2241 26.0662 10.145 26.25 10.1017C26.4338 10.0585 26.6244 10.0518 26.8108 10.0822C26.8587 10.0918 27.0159 10.1205 27.0983 10.1397C27.2631 10.1742 27.488 10.2317 27.7729 10.3122C28.3422 10.479 29.1376 10.753 30.0921 11.19C32.0011 12.066 34.5407 13.5974 37.178 16.2328C39.8154 18.8701 41.3468 21.4116 42.2227 23.3206C42.6597 24.2751 42.9319 25.0686 43.0986 25.6398C43.1821 25.9269 43.2543 26.2172 43.3152 26.51L43.3248 26.5694C43.3879 26.9489 43.2993 27.3381 43.078 27.6529C42.8568 27.9677 42.5207 28.183 42.1422 28.2522C41.7669 28.3132 41.3828 28.2229 41.0738 28.0013C40.7649 27.7797 40.5564 27.4447 40.4939 27.0696C40.4539 26.858 40.4021 26.6487 40.3386 26.4429C40.1427 25.7846 39.8993 25.1415 39.6103 24.5185C38.8628 22.8894 37.5173 20.6392 35.1444 18.2664C32.7716 15.8935 30.5234 14.55 28.8923 13.8025C28.2699 13.5135 27.6274 13.2701 26.9699 13.0741C26.7681 13.0175 26.5649 12.9663 26.3604 12.9208C25.9841 12.8577 25.6476 12.6494 25.4233 12.3408C25.1989 12.0322 25.1046 11.6479 25.1605 11.2705Z"
              fill="#FDFDFD"
            />
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M25.5938 17.883C25.6455 17.7013 25.7324 17.5317 25.8497 17.3836C25.967 17.2356 26.1123 17.1122 26.2773 17.0203C26.4423 16.9285 26.6237 16.8701 26.8113 16.8484C26.9989 16.8267 27.1889 16.8422 27.3705 16.894L27.3763 16.8959L27.382 16.8978L27.3974 16.9016L27.4357 16.9131L27.543 16.9515C27.6287 16.9808 27.7417 17.0256 27.8823 17.0856C28.1621 17.2045 28.5435 17.3885 29.0131 17.6664C29.9504 18.2222 31.2307 19.1422 32.7353 20.6487C34.2399 22.1533 35.1618 23.4336 35.7176 24.3709C35.9955 24.8405 36.1795 25.2219 36.2984 25.5017C36.362 25.6481 36.4196 25.7971 36.4709 25.9483L36.4805 25.9866L36.4862 26.002V26.0077L36.4881 26.0096C36.4881 26.0096 36.4881 26.0135 35.1081 26.4083L36.4881 26.0135C36.5855 26.3761 36.537 26.7625 36.3532 27.0899C36.1693 27.4173 35.8646 27.6598 35.5043 27.7655C35.1439 27.8712 34.7566 27.8316 34.425 27.6554C34.0934 27.4791 33.844 27.1801 33.73 26.8223L33.7243 26.8031L33.6572 26.6345C33.535 26.3602 33.3967 26.0933 33.2432 25.8352C32.8158 25.1145 32.0434 24.022 30.7017 22.6804C29.36 21.3387 28.2695 20.5682 27.5469 20.1408C27.2365 19.9586 26.9137 19.7985 26.5809 19.6616L26.5617 19.654C26.1996 19.5451 25.895 19.298 25.7139 18.9662C25.5327 18.6343 25.4896 18.2464 25.5938 17.883Z"
              fill="#FDFDFD"
            />
          </svg>
          <div class="footer-tel__phone-content">
            <div class="footer-tel__phone-header">
              <div class="footer-tel__phone-label">お電話受付時間</div>
              <div class="footer-tel__phone-time">7:00~23:00／年中無休</div>
            </div>
            <div class="footer-tel__phone-number"><?php echo htmlspecialchars($phone_number, ENT_QUOTES, 'UTF-8'); ?></div>
          </div>
        </a>
        <a href="#contact" class="footer-tel__other-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="28" viewBox="0 0 36 28" fill="none">
            <path
              d="M3.6 28C2.61 28 1.7628 27.6576 1.0584 26.9727C0.354 26.2879 0.0012 25.4637 0 24.5V3.5C0 2.5375 0.3528 1.71383 1.0584 1.029C1.764 0.344166 2.6112 0.00116667 3.6 0H32.4C33.39 0 34.2378 0.343 34.9434 1.029C35.649 1.715 36.0012 2.53867 36 3.5V24.5C36 25.4625 35.6478 26.2867 34.9434 26.9727C34.239 27.6587 33.3912 28.0012 32.4 28H3.6ZM18 15.75L32.4 7V3.5L18 12.25L3.6 3.5V7L18 15.75Z"
              fill="#C1BF54"
            />
          </svg>
        </a>
      </div>

      <?php include 'footer.php'; ?>
    </main>