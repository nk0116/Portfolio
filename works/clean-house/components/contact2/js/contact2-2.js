document.addEventListener("DOMContentLoaded", function () {
  const radioInputs = document.querySelectorAll(".contact2-2-option__input");

  radioInputs.forEach((input) => {
    input.addEventListener("change", function () {
      // 他のラジオボタンの選択を解除（ブラウザが自動で行うが、念のため）
      radioInputs.forEach((otherInput) => {
        if (otherInput !== input) {
          otherInput.checked = false;
        }
      });
    });
  });
});
