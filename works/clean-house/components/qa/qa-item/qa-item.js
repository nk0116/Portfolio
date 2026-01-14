document.addEventListener("DOMContentLoaded", function () {
  const qaQuestions = document.querySelectorAll(".qa-item__question");

  qaQuestions.forEach((question) => {
    question.addEventListener("click", function () {
      const qaItem = this.closest(".qa-item");
      qaItem.classList.toggle("qa-item--closed");
    });
  });
});

