// ▼ ハンバーガーメニューのボタンをクリックしたときの処理
$("#js-button-drawer").on("click", function () {
  $(this).toggleClass("is-checked");
  $("#js-drawer").slideToggle(); // ドロワーメニューの開閉
  $("body").toggleClass("is-fixed"); // 背景スクロール固定
});

// ▼ ドロワー内のボタンを押したときに閉じる（スマホのみ）
function toggleDrawerEvent() {
  const windowWidth = $(window).width();

  // すでに設定されていたクリックイベントを解除
  $(".js-button").off("click");

  if (windowWidth <= 767) {
    $(".js-button").on("click", function () {
      $("#js-button-drawer").toggleClass("is-checked");
      $("#js-drawer").slideToggle();
      $("body").toggleClass("is-fixed");
    });
  } else {
    // PC表示時はドロワー状態をリセット
    $("#js-button-drawer").removeClass("is-checked");
    $("#js-drawer").removeAttr("style");
    $("body").removeClass("is-fixed");
  }
}

// 初期化（ページ読み込み時）
toggleDrawerEvent();

// ウィンドウサイズ変更時にも再判定
$(window).on("resize", function () {
  toggleDrawerEvent();
});

$("a").on("click",function(){
    alert("メインページの見た目のみ実装のため、イベントは起こりません。");
})