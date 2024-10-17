document.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('.quantity-button').forEach(button => {
        button.addEventListener('click', (e) => {
            const quantityInput = e.target.parentElement.querySelector('.quantity-input');
            let currentQuantity = parseInt(quantityInput.value);

            if (e.target.classList.contains('increase')) {
                currentQuantity++;
            } else if (e.target.classList.contains('decrease')) {
                if (currentQuantity > 1) {
                    currentQuantity--;
                }
            }

            quantityInput.value = currentQuantity; 
        });
    });

});
