document.addEventListener("DOMContentLoaded", function () {
  const accordionHeaders = document.querySelectorAll(".area-accordion__header");

  accordionHeaders.forEach((header) => {
    header.addEventListener("click", function () {
      const accordion = this.closest(".area-accordion");
      accordion.classList.toggle("area-accordion--closed");
    });
  });
});

