// ハンバーガーボタンとドロワー
$("#js-button-drawer").on("click", function () {
  $(this).toggleClass("is-checked");
  $("#js-drawer").slideToggle();
  $("body").toggleClass("is-fixed");
});

// 各ボタンを押したときにドロワーを閉じる
function toggleDrawerEvent() {
  const windowWidth = $(window).width();

  // すでにイベントがバインドされてたら一度offにする
  $(".js-button").off("click");

  const speed = 1000;
  // ヘッダーの高さを動的に取得
  const headerHeight = $(".header").outerHeight();

  if (windowWidth <= 1024) {
    $(".js-button").on("click", function (e) {
      const id = $(this).attr("href");

      // ハッシュリンク（#で始まる）でない場合は処理しない
      if (!id || !id.startsWith("#")) {
        return;
      }

      const target = id === "#" ? "html" : id;
      const $target = $(target);

      // ターゲット要素が存在しない場合は処理しない
      if ($target.length === 0) {
        return;
      }

      $("#js-button-drawer").toggleClass("is-checked");
      $("#js-drawer").slideToggle();
      $("body").toggleClass("is-fixed");

      const offset = $target.offset();
      if (offset) {
        const position = offset.top - headerHeight;
        $("html, body").animate(
          {
            scrollTop: position,
          },
          speed,
          "swing"
        );
      }
    });
  } else {
    // PC表示時はdrawerの状態をリセットする
    $("#js-button-drawer").removeClass("is-checked");
    $("#js-drawer").removeAttr("style"); // slideToggleでstyle属性が付くため
    $("body").removeClass("is-fixed");

    $(".js-button").on("click", function (e) {
      const id = $(this).attr("href");

      // ハッシュリンク（#で始まる）でない場合は処理しない
      if (!id || !id.startsWith("#")) {
        return;
      }

      const target = id === "#" ? "html" : id;
      const $target = $(target);

      // ターゲット要素が存在しない場合は処理しない
      if ($target.length === 0) {
        return;
      }

      const offset = $target.offset();
      if (offset) {
        const position = offset.top;
        $("html, body").animate(
          {
            scrollTop: position,
          },
          speed,
          "swing"
        );
      }
    });
  }
}

// 初回実行
toggleDrawerEvent();

// 画面リサイズ時にも実行
$(window).on("resize", function () {
  toggleDrawerEvent();
});

// スムーススクロール
// スマホのドロワーメニューは閉じてから移動する
// 以下のようにis-checkedをつけ外しして制御している場合
//  $("#js-drawer-icon").toggleClass("is-checked");
//  $("#js-drawer-content").toggleClass("is-checked");

// $('.js-drawer-close a[href^="#"]').on("click", function (e) {
//   $("#js-drawer-icon").removeClass("is-checked");
//   $("#js-drawer-content").removeClass("is-checked");
// });

// $('a[href^="#"]').on("click", function (e) {
//   const speed = 1000;
//   const id = $(this).attr("href");
//   const target = $("#" == id ? "html" : id);
//   // ヘッダーの高さを動的に取得
//   const headerHeight = $('.header').outerHeight();
//   const position = $(target).offset().top - headerHeight;

//   $("html, body").animate(
//     {
//       scrollTop: position,
//     },
//     speed,
//     "swing" // or linear
//   );
// });
