document.addEventListener("DOMContentLoaded", function () {
    const cartButton = document.querySelector(".cart-button"); // Ваш класс кнопки
    const modal = document.querySelector(".cart-modal");
    const closeModalButton = document.querySelector(".cart-modal__close");

    // Открытие модального окна
    cartButton.addEventListener("click", function () {
        modal.classList.add("show");
    });

    // Закрытие модального окна
    closeModalButton.addEventListener("click", function () {
        modal.classList.remove("show");
    });

    // Закрытие модального окна при клике вне него
    modal.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.classList.remove("show");
        }
    });
});
