// ============================================
// Main JavaScript
// - スクロールアニメーション（Intersection Observer）
// - ヘッダースクロール検知
// - ハンバーガーメニュー
// ============================================

document.addEventListener("DOMContentLoaded", () => {
  // ----- フェードインアニメーション -----
  const fadeElements = document.querySelectorAll(".fade-in");

  const fadeObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          fadeObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15 }
  );

  fadeElements.forEach((el) => fadeObserver.observe(el));

  // ----- ハンバーガーメニュー -----
  const header = document.getElementById("header");
  const burger = document.getElementById("burger");
  const nav = document.getElementById("nav");
  const overlay = document.getElementById("overlay");

  // ----- ヘッダー背景切替（ヒーローの高さを超えたら黒背景に） -----
  const hero = document.getElementById("hero");
  if (hero && header) {
    let heroHeight = hero.offsetHeight;
    let headerHeight = header.offsetHeight;
    let ticking = false;

    const updateHeaderState = () => {
      const threshold = heroHeight - headerHeight;
      if (window.scrollY >= threshold) {
        header.classList.add("is-scrolled");
      } else {
        header.classList.remove("is-scrolled");
      }
      ticking = false;
    };

    const onScroll = () => {
      if (!ticking) {
        window.requestAnimationFrame(updateHeaderState);
        ticking = true;
      }
    };

    const onResize = () => {
      heroHeight = hero.offsetHeight;
      headerHeight = header.offsetHeight;
      updateHeaderState();
    };

    window.addEventListener("scroll", onScroll, { passive: true });
    window.addEventListener("resize", onResize);

    // 初期判定（途中からのリロード対応）
    updateHeaderState();
  }

  const toggleMenu = () => {
    burger.classList.toggle("is-open");
    nav.classList.toggle("is-open");
    overlay.classList.toggle("is-visible");
    const isOpen = nav.classList.contains("is-open");
    document.body.style.overflow = isOpen ? "hidden" : "";
    burger.setAttribute("aria-expanded", isOpen);
    burger.setAttribute("aria-label", isOpen ? "メニューを閉じる" : "メニューを開く");
  };

  burger.addEventListener("click", toggleMenu);
  overlay.addEventListener("click", toggleMenu);

  // ナビリンククリックでメニューを閉じる
  nav.querySelectorAll(".header__nav-link").forEach((link) => {
    link.addEventListener("click", () => {
      if (nav.classList.contains("is-open")) {
        toggleMenu();
      }
    });
  });

  // ----- スムーズスクロール（ヘッダー高さ分オフセット） -----
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", (e) => {
      const href = anchor.getAttribute("href");
      if (href === "#") return;
      e.preventDefault();
      const target = document.querySelector(href);
      if (target) {
        const headerHeight = header.offsetHeight;
        const targetPosition =
          target.getBoundingClientRect().top + window.scrollY - headerHeight;
        window.scrollTo({ top: targetPosition, behavior: "smooth" });
      }
    });
  });
});
