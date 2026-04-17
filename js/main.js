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
