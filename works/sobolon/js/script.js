// ドロワー制御
jQuery(function ($) {
  const $btn = $("#js-drawer-icon");
  const $content = $("#js-drawer-content");
  const $body = $("body");
  const mq = window.matchMedia("(min-width: 1024px)"); // PCで自動リセットしたい幅に調整

  const openDrawer = (open) => {
    $btn.toggleClass("is-checked", open).attr("aria-expanded", String(open));
    $body.toggleClass("is-fixed", open);
    $content.toggleClass("is-checked", open);
  };

  // ボタンで開閉
  $btn.on("click", function (e) {
    e.preventDefault();
    openDrawer(!$content.hasClass("is-checked"));
  });

  // ドロワー外側をクリックで閉じる
  $(document).on("click", (e) => {
    if (!$content.hasClass("is-checked")) return;
    const clickedInside = $(e.target).closest("#js-drawer-content, #js-drawer-icon").length > 0;
    if (!clickedInside) openDrawer(false);
  });

  // ESCで閉じる
  $(document).on("keydown", (e) => {
    if (e.key === "Escape" && $content.hasClass("is-checked")) openDrawer(false);
  });

  // レイアウト切替で状態リセット（PCに戻ったら閉じる）
  mq.addEventListener("change", (e) => {
    if (e.matches) openDrawer(false);
  });

  // スムーススクロール
  $('.js-drawer-close a[href^="#"]').on("click", function (e) {
    openDrawer(false);
  });

  $('a[href^="#"]').on("click", function (e) {
    const speed = 1000;
    const id = $(this).attr("href");
    const target = $("#" == id ? "html" : id);
    // ヘッダーの高さを動的に取得
    const headerHeight = $(".header").outerHeight();
    const position = $(target).offset().top - headerHeight;

    $("html, body").animate(
      {
        scrollTop: position,
      },
      speed,
      "swing"
    );
  });
});

// 未実装パーツのアラート
$(".js-unimplemented").on("click", function (e) {
  e.preventDefault();
  alert(`サンプルサイトのため、「${this.textContent}」は未実装です。`);
});

// 問い合わせフォーム
(function ($) {
  var defaults = {
    formSelector: ".js-validate-form",
    submitSelector: ".js-form-submit",
    activeClass: "is-active",
    enableAlertOnSubmit: true, // trueでダミー送信アラート
  };

  function setup($form, opts) {
    var $btn = $form.find(opts.submitSelector);

    function reflect(valid) {
      $btn.toggleClass(opts.activeClass, valid);
      $btn.prop("disabled", !valid);
      $btn.attr("aria-disabled", String(!valid));
    }

    function validate() {
      var formEl = $form.get(0);
      var valid = formEl ? formEl.checkValidity() : false;
      reflect(valid);
      return valid;
    }

    // 入力のたびに検証
    $form.on("input change", "input, textarea, select", validate);

    // 送信時: 無効ならネイティブのエラーメッセージ表示
    $form.on("submit", function (e) {
      if (!validate()) {
        e.preventDefault();
        this.reportValidity && this.reportValidity();
        return;
      }
      if (opts.enableAlertOnSubmit) {
        e.preventDefault();
        alert("サンプルサイトのため、送信は未実装です。");
      }
    });

    // 初期状態反映
    validate();
  }

  $(function () {
    var opts = $.extend({}, defaults, window.FormToggleOptions || {});
    $(opts.formSelector).each(function () {
      setup($(this), opts);
    });
  });
})(jQuery);