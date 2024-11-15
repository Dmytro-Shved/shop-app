// document.addEventListener("DOMContentLoaded", function() {
//     // Массив с путями к изображениям
//     const snowflakeImages = [
//         "{{ asset('storage/images/logo/logo.svg') }}",
//         "{{ asset('storage/images/logo/logo.svg') }}",
//         "{{ asset('storage/images/logo/logo.svg') }}",
//     ];

//     // Получаем элемент с классом .snowfall
//     const snowfall = document.querySelector('.snowfall');

//     // Добавляем снежинки с изображениями
//     snowflakeImages.forEach(imageSrc => {
//         const snowflake = document.createElement('img');
//         snowflake.classList.add('snowflake');
//         snowflake.src = imageSrc;  // Устанавливаем путь к изображению
//         snowflake.alt = 'snowflake'; // Альтернативный текст
//         snowfall.appendChild(snowflake); // Добавляем в контейнер
//     });
// });
