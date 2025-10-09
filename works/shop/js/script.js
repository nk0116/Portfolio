// フォーム送信をキャンセルしてメッセージ表示
document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".js-form");

  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault(); // 送信を止める
      alert("※このフォームはデモです。実際には送信されません。");
    });
  }
});


// モーダルで画像の拡大表示

$(function () {
    console.log("モーダル処理実行");
  $(".menu-img").on("click", function () {
    console.log("モーダル処理　関数に入った");

    const imgSrc = $(this).find("img").attr("src");
    $(".modal-img").attr("src", imgSrc);
    $("#image-modal").css("display","flex").fadeIn(300);
    $(".menu-img-item").on("click", function () {
        console.log("モーダル処理　menu-imgクラスを押下");
      $("#image-modal").fadeIn(300);
    });
    $("#image-modal").on("click", function () {
        console.log("モーダル処理　モーダル削除");
      $(".modal").fadeOut(300);
    });
  });
});
