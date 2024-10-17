// document.addEventListener('DOMContentLoaded', () => {
//     const cartItemsContainer = document.getElementById('cart-items');
//     const cartModal = document.getElementById('cart-modal');
//     const cartButton = document.querySelector('.cart-button');
//     const closeModalButton = document.querySelector('.cart-modal__close');

//     // Функция для добавления товара в корзину
//     function addToCart(productId, productName, productPrice, productImage, quantity) {
//         const existingCartItem = [...cartItemsContainer.children].find(item =>
//             item.getAttribute('data-id') === productId
//         );

//         if (existingCartItem) {
//             const quantityInput = existingCartItem.querySelector('.quantity-input');
//             quantityInput.value = parseInt(quantityInput.value) + quantity;
//         } else {
//             const cartItem = document.createElement('div');
//             cartItem.classList.add('cart-item');
//             cartItem.setAttribute('data-id', productId);
//             cartItem.innerHTML = `
//                 <img src="${productImage}" alt="${productName}" class="cart-item__image">
//                 <div class="cart-item__details">
//                     <h4 class="cart-item__name">${productName}</h4>
//                     <div class="cart-item__quantity">
//                         <button class="quantity-button decrease">-</button>
//                         <input type="number" class="quantity-input" value="${quantity}" min="1" />
//                         <button class="quantity-button increase">+</button>
//                     </div>
//                     <p class="cart-item__price">${productPrice} zł</p>
//                 </div>
//             `;
//             cartItemsContainer.appendChild(cartItem);
//         }

//         updateCartTotal();
//     }

//     function updateCartTotal() {
//         let total = 0;
//         const cartItems = document.querySelectorAll('.cart-item');
//         cartItems.forEach(item => {
//             const price = parseFloat(item.querySelector('.cart-item__price').textContent.replace('zł', ''));
//             const quantity = parseInt(item.querySelector('.quantity-input').value);
//             total += price * quantity;
//         });

//         document.getElementById('cart-total').textContent = `Total: ${total.toFixed(2)} zł`;
//     }

//     // Открытие модального окна
//     cartButton.addEventListener('click', () => {
//         cartModal.style.display = 'block';
//     });

//     // Закрытие модального окна
//     closeModalButton.addEventListener('click', () => {
//         cartModal.style.display = 'none';
//     });

//     // Обработчики кнопок "Kupić" и "Dodaj do koszyka"
//     document.querySelectorAll('.product__buy').forEach(button => {
//         button.addEventListener('click', function () {
//             const productCard = this.closest('.product-card');
//             const productId = this.getAttribute('data-id');
//             const productName = this.getAttribute('data-name');
//             const productPrice = parseFloat(this.getAttribute('data-price'));
//             const productImage = productCard.querySelector('.product__image').src;
//             const quantity = parseInt(productCard.querySelector('.quantity-input').value);

//             addToCart(productId, productName, productPrice, productImage, quantity);
//         });
//     });

//     document.querySelectorAll('.product__button').forEach(button => {
//         button.addEventListener('click', function () {
//             const productCard = this.closest('.product-card');
//             const productId = productCard.getAttribute('data-id');
//             const productName = productCard.querySelector('.product__name').textContent;
//             const productPrice = parseFloat(productCard.querySelector('.product__price').textContent.replace('zł', ''));
//             const productImage = productCard.querySelector('.product__image').src;

//             addToCart(productId, productName, productPrice, productImage, 1);
//         });
//     });

//     // Обработчики для увеличения и уменьшения количества товара в корзине
//     cartItemsContainer.addEventListener('click', function (event) {
//         if (event.target.classList.contains('decrease')) {
//             const input = event.target.nextElementSibling;
//             if (parseInt(input.value) > 1) {
//                 input.value = parseInt(input.value) - 1;
//             }
//         } else if (event.target.classList.contains('increase')) {
//             const input = event.target.previousElementSibling;
//             input.value = parseInt(input.value) + 1;
//         }
//         updateCartTotal();
//     });
// });
