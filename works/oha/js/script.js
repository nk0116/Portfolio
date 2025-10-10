// 他社サービスとの違いのスクロールバーの制御
(() => {
  console.log("[scrollbar] init");

  const wraps = document.querySelectorAll(".compare__content");
  if (!wraps.length) return;

  const setup = (wrap) => {
    const thumb = wrap.querySelector(".compare__thumb");
    const sync = () => {
      // オーバー検知
      const overflow = wrap.scrollWidth > wrap.clientWidth + 1; // 誤差吸収
      wrap.classList.toggle("is-overflow", overflow);

      // つまみ同期（thumbが有る場合のみ）
      if (thumb) {
        const maxX = wrap.scrollWidth - wrap.clientWidth;
        const trackW = wrap.clientWidth;
        const thumbW = thumb.offsetWidth || 112;
        const maxTranslate = Math.max(trackW - thumbW, 0);
        const ratio = maxX > 0 ? wrap.scrollLeft / maxX : 0;
        thumb.style.transform = `translateX(${maxTranslate * ratio}px)`;
      }
    };

    // イベント
    wrap.addEventListener("scroll", sync, { passive: true });
    window.addEventListener("resize", sync);

    // 内容サイズ変化にも追従（画像ロード・フォントなど）
    const ro = new ResizeObserver(sync);
    ro.observe(wrap);
    // 子の変化も拾いたければこちら（任意）
    // new MutationObserver(sync).observe(wrap, { childList: true, subtree: true });

    // 初期化
    requestAnimationFrame(sync);
  };

  wraps.forEach(setup);
})();

// ドロワー
$("#js-drawer-icon").on("click", function (e) {
  e.preventDefault();
  $("#js-drawer-icon").toggleClass("is-checked");
  $("#js-drawer-content").toggleClass("is-checked");
});

// QAのアコーディオン
$(".js-accordion").on("click", function (e) {
  e.preventDefault();

  if ($(this).parent().hasClass("is-open")) {
    $(this).parent().removeClass("is-open");
    $(this).next().slideUp();
  } else {
    $(this).parent().addClass("is-open");
    $(this).next().slideDown();
  }
});

// スワイパー
const swiper = new Swiper("#js-gallery-swiper", {
  spaceBetween: 82,
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: "#js-gallery-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: "#js-gallery-next",
    prevEl: "#js-gallery-prev",
  },
});

// モーダルの開閉
$(".js-modal-open").on("click", function (e) {
  e.preventDefault();
  $("#js-about-modal")[0].showModal();
});

$(".js-modal-close").on("click", function (e) {
  e.preventDefault();
  $("#js-about-modal")[0].close();
});

// スムーススクロール
$('#js-drawer-content a[href^="#"]').on("click", function (e) {
  $("#js-drawer-icon").removeClass("is-checked");
  $("#js-drawer-content").removeClass("is-checked");
});

$('a[href^="#"]').on("click", function (e) {
  const speed = 1000;
  const id = $(this).attr("href");
  const target = $("#" == id ? "html" : id);
  const header = $(".header");
  const headerHeight = header.length ? header.outerHeight() : 0;
  const position = $(target).offset().top - headerHeight;

  $("html, body").animate(
    {
      scrollTop: position,
    },
    speed,
    "swing"
  );
});

// 未実装パーツ
$(".js-unimplemented").on("click", function (e) {
  e.preventDefault();
  alert(`サンプルサイトのため、「${this.textContent}」は未実装です。`);
});

// topへ戻るボタンの制御
const scrollAmount = 100; //どこまでスクロールしたら表示するか（単位はpx)
$(window).on("scroll", function () {
  if (scrollAmount < $(window).scrollTop()) {
    $("#js-pagetop").addClass("is-show");
  } else {
    $("#js-pagetop").removeClass("is-show");
  }
});

// ふわっと表示
const intersectionObserver = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      // 表示領域に入ったときに表示
      entry.target.classList.add("is-in-view");
    } else {
      // 表示領域を出たときに消す
      entry.target.classList.remove("is-in-view");
    }
  });
});

const inViewItems = document.querySelectorAll(".js-in-view");
inViewItems.forEach(function (inViewItem) {
  intersectionObserver.observe(inViewItem);
});

// お問い合わせフォームの送信ボタンの制御
$(function () {
  const $form = $(".contact__form");
  const $btn = $(".js-form-submit");

  function validate() {
    // 必須項目をリストアップ
    const nameFilled = $.trim($("#your-name").val()) !== "";
    const emailFilled = $.trim($("#your-email").val()) !== "";
    const radioChecked = $form.find('input[name="inquiry_type"]:checked').length > 0;
    const msgFilled = $.trim($("#your-message").val()) !== "";
    const agreed = $("#privacy_agreement").is(":checked");
    //すべての必須項目に入力されているかどうかをチェック
    const isAllFilled = nameFilled && emailFilled && radioChecked && msgFilled && agreed;

    if (isAllFilled) {
      $btn.addClass("is-active").data("status", "ok");
    } else {
      $btn.removeClass("is-active").data("status", "ng");
    }
  }

  $form.on("input change", "input, textarea, select", validate);
  validate();

  $btn.on("click", function (e) {
    e.preventDefault();
    const status = $(this).data("status");
    if (status === "ok") {
      alert("送信ありがとうございます！（サンプルなので実際には送信されません）");
    } else {
      alert("必須項目を入力してください");
    }
  });
});
