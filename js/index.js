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

  if (windowWidth <= 767) {
    $(".js-button").on("click", function () {
      $("#js-button-drawer").toggleClass("is-checked");
      $("#js-drawer").slideToggle();
      $("body").toggleClass("is-fixed");
    });
  } else {
    // PC表示時はdrawerの状態をリセットする
    $("#js-button-drawer").removeClass("is-checked");
    $("#js-drawer").removeAttr("style"); // slideToggleでstyle属性が付くため
    $("body").removeClass("is-fixed");
  }
}

// 初回実行
toggleDrawerEvent();

// 画面リサイズ時にも実行
$(window).on("resize", function () {
  toggleDrawerEvent();
});
