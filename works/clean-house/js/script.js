// contact-form ラジオボタンの機能
document.addEventListener("DOMContentLoaded", function () {
  const radioInputs = document.querySelectorAll(".contact-form__radio-input");

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

  // contact2-section フォームのバリデーション
  const contact2Form = document.getElementById("contact2-form");
  if (contact2Form) {
    // プライバシーポリシーのチェックボックスが変更されたときにエラーを非表示にする
    const privacyCheckbox = contact2Form.querySelector('input[name="privacy-agree"]');
    if (privacyCheckbox) {
      privacyCheckbox.addEventListener("change", function () {
        const privacyErrorElement = contact2Form.querySelector(".contact2-section__privacy-error");
        if (privacyCheckbox.checked && privacyErrorElement) {
          privacyErrorElement.style.display = "none";
        }
      });
    }

    // お問合せ内容のラジオボタンが変更されたときにエラーを非表示にする
    const contactContentRadios = contact2Form.querySelectorAll('input[name="contact-content"]');
    contactContentRadios.forEach((radio) => {
      radio.addEventListener("change", function () {
        const contactContentErrorElement = contact2Form.querySelector(".contact-form__radio-error");
        if (radio.checked && contactContentErrorElement) {
          contactContentErrorElement.style.display = "none";
        }
      });
    });

    // 入力フィールドが変更されたときにエラーを非表示にする
    const inputFields = contact2Form.querySelectorAll('input[name="お名前"], input[name="email"], input[name="電話番号"], input[name="郵便番号"], input[name="住所"], textarea[name="ご要望など"]');
    inputFields.forEach((field) => {
      field.addEventListener("input", function () {
        const inputWrapper = field.closest(".contact-form__field");
        if (inputWrapper) {
          const errorElement = inputWrapper.querySelector(".contact-form__field-error");
          if (errorElement && field.value.trim()) {
            errorElement.style.display = "none";
          }
        }
      });
    });

    contact2Form.addEventListener("submit", function (e) {
      // 1. submitイベントの最初で必ず e.preventDefault() を実行する
      e.preventDefault();

      // 2. let errorMessages = [] を初期化する
      let errorMessages = [];
      let errorElements = []; // エラー要素を保存する配列
      let labelElements = []; // ラベル要素を保存する配列（スクロール用）

      // 必須項目の要素を取得
      const contactContentRadio = contact2Form.querySelector('input[name="contact-content"]:checked');
      const nameInput = contact2Form.querySelector('input[name="お名前"]');
      const emailInput = contact2Form.querySelector('input[name="email"]');
      const telInput = contact2Form.querySelector('input[name="電話番号"]');
      const postalInput = contact2Form.querySelector('input[name="郵便番号"]');
      const addressInput = contact2Form.querySelector('input[name="住所"]');
      const messageTextarea = contact2Form.querySelector('textarea[name="ご要望など"]');
      const privacyCheckbox = contact2Form.querySelector('input[name="privacy-agree"]');

      // 3. 以下の必須項目をすべてチェックし、未入力の場合は errorMessages.push("〜してください") を必ず追加する

      // お問合せ内容（radio）のチェック
      const contactContentErrorElement = contact2Form.querySelector(".contact-form__radio-error");
      const contactContentErrorText = contactContentErrorElement ? contactContentErrorElement.querySelector(".contact-form__error-text") : null;
      const contactContentLabelElement = contact2Form.querySelector(".contact-form__radio-group-header");
      if (!contactContentRadio) {
        errorMessages.push("お問い合わせ内容を選択してください。");
        // エラーメッセージを表示
        if (contactContentErrorElement) {
          if (contactContentErrorText) {
            contactContentErrorText.textContent = "お問い合わせ内容を選択してください。";
          }
          contactContentErrorElement.style.setProperty("display", "flex", "important");
          errorElements.push(contactContentErrorElement);
        }
        // ラベル要素を保存
        if (contactContentLabelElement) {
          labelElements.push(contactContentLabelElement);
        }
      } else {
        // エラーメッセージを非表示
        if (contactContentErrorElement) {
          contactContentErrorElement.style.display = "none";
        }
      }

      // お名前のチェック
      const nameInputWrapper = nameInput ? nameInput.closest(".contact-form__field") : null;
      const nameErrorElement = nameInputWrapper ? nameInputWrapper.querySelector(".contact-form__field-error") : null;
      const nameErrorText = nameErrorElement ? nameErrorElement.querySelector(".contact-form__error-text") : null;
      const nameLabelElement = nameInputWrapper ? nameInputWrapper.querySelector(".contact-form__field-header") : null;
      const nameLabelText = nameLabelElement ? nameLabelElement.querySelector(".contact-form__label") : null;
      if (!nameInput || !nameInput.value || !nameInput.value.trim()) {
        const labelName = nameLabelText ? nameLabelText.textContent.trim() : "お名前";
        errorMessages.push(`${labelName}を入力してください`);
        if (nameErrorElement) {
          if (nameErrorText) {
            nameErrorText.textContent = `${labelName}を入力してください`;
          }
          nameErrorElement.style.setProperty("display", "flex", "important");
          errorElements.push(nameErrorElement);
        }
        // ラベル要素を保存
        if (nameLabelElement) {
          labelElements.push(nameLabelElement);
        }
      } else {
        if (nameErrorElement) {
          nameErrorElement.style.display = "none";
        }
      }

      // メールアドレスのチェック
      const emailInputWrapper = emailInput ? emailInput.closest(".contact-form__field") : null;
      const emailErrorElement = emailInputWrapper ? emailInputWrapper.querySelector(".contact-form__field-error") : null;
      const emailErrorText = emailErrorElement ? emailErrorElement.querySelector(".contact-form__error-text") : null;
      const emailLabelElement = emailInputWrapper ? emailInputWrapper.querySelector(".contact-form__field-header") : null;
      const emailLabelText = emailLabelElement ? emailLabelElement.querySelector(".contact-form__label") : null;
      if (!emailInput || !emailInput.value || !emailInput.value.trim()) {
        const labelName = emailLabelText ? emailLabelText.textContent.trim() : "メールアドレス";
        errorMessages.push(`${labelName}を入力してください`);
        if (emailErrorElement) {
          if (emailErrorText) {
            emailErrorText.textContent = `${labelName}を入力してください`;
          }
          emailErrorElement.style.setProperty("display", "flex", "important");
          errorElements.push(emailErrorElement);
        }
        // ラベル要素を保存
        if (emailLabelElement) {
          labelElements.push(emailLabelElement);
        }
      } else {
        if (emailErrorElement) {
          emailErrorElement.style.display = "none";
        }
      }

      // 電話番号のチェック
      const telInputWrapper = telInput ? telInput.closest(".contact-form__field") : null;
      const telErrorElement = telInputWrapper ? telInputWrapper.querySelector(".contact-form__field-error") : null;
      const telErrorText = telErrorElement ? telErrorElement.querySelector(".contact-form__error-text") : null;
      const telLabelElement = telInputWrapper ? telInputWrapper.querySelector(".contact-form__field-header") : null;
      const telLabelText = telLabelElement ? telLabelElement.querySelector(".contact-form__label") : null;
      if (!telInput || !telInput.value || !telInput.value.trim()) {
        const labelName = telLabelText ? telLabelText.textContent.trim() : "電話番号";
        errorMessages.push(`${labelName}を入力してください`);
        if (telErrorElement) {
          if (telErrorText) {
            telErrorText.textContent = `${labelName}を入力してください`;
          }
          telErrorElement.style.setProperty("display", "flex", "important");
          errorElements.push(telErrorElement);
        }
        // ラベル要素を保存
        if (telLabelElement) {
          labelElements.push(telLabelElement);
        }
      } else {
        if (telErrorElement) {
          telErrorElement.style.display = "none";
        }
      }

      // 郵便番号のチェック
      const postalInputWrapper = postalInput ? postalInput.closest(".contact-form__field") : null;
      const postalErrorElement = postalInputWrapper ? postalInputWrapper.querySelector(".contact-form__field-error") : null;
      const postalErrorText = postalErrorElement ? postalErrorElement.querySelector(".contact-form__error-text") : null;
      const postalLabelElement = postalInputWrapper ? postalInputWrapper.querySelector(".contact-form__field-header") : null;
      const postalLabelText = postalLabelElement ? postalLabelElement.querySelector(".contact-form__label") : null;
      if (!postalInput || !postalInput.value || !postalInput.value.trim()) {
        const labelName = postalLabelText ? postalLabelText.textContent.trim() : "郵便番号";
        errorMessages.push(`${labelName}を入力してください`);
        if (postalErrorElement) {
          if (postalErrorText) {
            postalErrorText.textContent = `${labelName}を入力してください`;
          }
          postalErrorElement.style.setProperty("display", "flex", "important");
          errorElements.push(postalErrorElement);
        }
        // ラベル要素を保存
        if (postalLabelElement) {
          labelElements.push(postalLabelElement);
        }
      } else {
        if (postalErrorElement) {
          postalErrorElement.style.display = "none";
        }
      }

      // 住所のチェック
      const addressInputWrapper = addressInput ? addressInput.closest(".contact-form__field") : null;
      const addressErrorElement = addressInputWrapper ? addressInputWrapper.querySelector(".contact-form__field-error") : null;
      const addressErrorText = addressErrorElement ? addressErrorElement.querySelector(".contact-form__error-text") : null;
      const addressLabelElement = addressInputWrapper ? addressInputWrapper.querySelector(".contact-form__field-header") : null;
      const addressLabelText = addressLabelElement ? addressLabelElement.querySelector(".contact-form__label") : null;
      if (!addressInput || !addressInput.value || !addressInput.value.trim()) {
        const labelName = addressLabelText ? addressLabelText.textContent.trim() : "住所";
        errorMessages.push(`${labelName}を入力してください`);
        if (addressErrorElement) {
          if (addressErrorText) {
            addressErrorText.textContent = `${labelName}を入力してください`;
          }
          addressErrorElement.style.setProperty("display", "flex", "important");
          errorElements.push(addressErrorElement);
        }
        // ラベル要素を保存
        if (addressLabelElement) {
          labelElements.push(addressLabelElement);
        }
      } else {
        if (addressErrorElement) {
          addressErrorElement.style.display = "none";
        }
      }

      // お問合せ内容（textarea）のチェック
      const messageTextareaWrapper = messageTextarea ? messageTextarea.closest(".contact-form__field") : null;
      const messageErrorElement = messageTextareaWrapper ? messageTextareaWrapper.querySelector(".contact-form__field-error") : null;
      const messageErrorText = messageErrorElement ? messageErrorElement.querySelector(".contact-form__error-text") : null;
      const messageLabelElement = messageTextareaWrapper ? messageTextareaWrapper.querySelector(".contact-form__field-header") : null;
      const messageLabelText = messageLabelElement ? messageLabelElement.querySelector(".contact-form__label") : null;
      if (!messageTextarea || !messageTextarea.value || !messageTextarea.value.trim()) {
        const labelName = messageLabelText ? messageLabelText.textContent.trim() : "お問合せ内容";
        errorMessages.push(`${labelName}を入力してください`);
        if (messageErrorElement) {
          if (messageErrorText) {
            messageErrorText.textContent = `${labelName}を入力してください`;
          }
          messageErrorElement.style.setProperty("display", "flex", "important");
          errorElements.push(messageErrorElement);
        }
        // ラベル要素を保存
        if (messageLabelElement) {
          labelElements.push(messageLabelElement);
        }
      } else {
        if (messageErrorElement) {
          messageErrorElement.style.display = "none";
        }
      }

      // プライバシーポリシー（checkbox）のチェック
      const privacyErrorElement = contact2Form.querySelector(".contact2-section__privacy-error");
      const privacyErrorText = privacyErrorElement ? privacyErrorElement.querySelector(".contact2-section__privacy-error-text") : null;
      const privacyCheckboxWrapper = privacyCheckbox ? privacyCheckbox.closest(".contact2-section__privacy-checkbox-wrapper") : null;
      if (!privacyCheckbox || !privacyCheckbox.checked) {
        errorMessages.push("プライバシーポリシーに同意してください。");
        // エラーメッセージを表示
        if (privacyErrorElement) {
          if (privacyErrorText) {
            privacyErrorText.textContent = "プライバシーポリシーに同意してください。";
          }
          privacyErrorElement.style.setProperty("display", "flex", "important");
          errorElements.push(privacyErrorElement);
        }
        // ラベル要素を保存（チェックボックスのラベル部分）
        if (privacyCheckboxWrapper) {
          labelElements.push(privacyCheckboxWrapper);
        }
      } else {
        // エラーメッセージを非表示
        if (privacyErrorElement) {
          privacyErrorElement.style.display = "none";
        }
      }

      // 4. errorMessages.length > 0 の場合は alert を表示して return する
      if (errorMessages.length > 0) {
        // alert("以下の項目を確認してください：\n\n" + errorMessages.join("\n"));

        // 最初のラベル要素までスクロール
        if (labelElements.length > 0) {
          const firstLabelElement = labelElements[0];
          firstLabelElement.scrollIntoView({ behavior: "smooth", block: "start" });
        }

        return;
      }

      // 5. errorMessages.length === 0 の場合のみ sendmail.phpに送信する
      // FormDataを使用してPHPに送信
      const formData = new FormData(contact2Form);

      // お問い合わせ内容（radio）を追加
      if (contactContentRadio) {
        const contactContentText = contactContentRadio.closest("label").querySelector(".contact-form__radio-text").textContent.trim();
        formData.set("お問い合わせ内容", contactContentText);
      } else {
        formData.set("お問い合わせ内容", ""); // 未選択の場合も空で送信
      }

      // 郵便番号と住所を結合して一つのフィールドとして送信
      const postalCode = postalInput ? postalInput.value.trim() : "";
      const address = addressInput ? addressInput.value.trim() : "";
      formData.set("住所", `${postalCode} ${address}`.trim());

      // 不要なフィールドを削除または調整
      formData.delete("郵便番号"); // 郵便番号は住所に結合されたため削除
      formData.delete("contact-content"); // radioのvalueは不要

      // fetch APIを使用してPHPにデータを送信
      fetch("sendmail.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.text())
        .then((data) => {
          console.log(data); // PHPからの応答をログに出力
          // 成功時のリダイレクトなど
          window.location.href = "thanks.php"; // 成功ページへリダイレクト
        })
        .catch((error) => {
          console.error("Error:", error);
          alert("送信中にエラーが発生しました。もう一度お試しください。");
        });
    });
  }

  // area-accordion アコーディオン機能
  const accordionHeaders = document.querySelectorAll(".area-accordion__header");

  accordionHeaders.forEach((header) => {
    header.addEventListener("click", function () {
      const accordion = this.closest(".area-accordion");
      accordion.classList.toggle("area-accordion--closed");
    });
  });

  // qa-item アコーディオン機能
  const qaQuestions = document.querySelectorAll(".qa-item__question");

  qaQuestions.forEach((question) => {
    question.addEventListener("click", function () {
      const qaItem = this.closest(".qa-item");
      qaItem.classList.toggle("qa-item--closed");
    });
  });

  const footerTel = document.querySelector(".footer-tel");
  const footer = document.querySelector("footer");

  if (footerTel && footer) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            // フッターが画面に入った → 固定フッターを隠す
            footerTel.classList.add("footer-tel--hidden");
          } else {
            // フッターが画面から出た → 表示
            footerTel.classList.remove("footer-tel--hidden");
          }
        });
      },
      {
        root: null, // viewport
        threshold: 0, // 少しでも入ったら反応
      }
    );

    observer.observe(footer);
  }
});
