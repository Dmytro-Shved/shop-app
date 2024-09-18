  document.addEventListener('DOMContentLoaded', function() {
    // Получаем все элементы фильтра
    const filterItems = document.querySelectorAll('.filter-item');
    
    // Получаем все карточки товаров
    const gridItems = document.querySelectorAll('.grid__item');

    // Добавляем обработчики событий на каждый элемент фильтра
    filterItems.forEach(function(filterItem) {
      filterItem.addEventListener('click', function() {
        const filterClass = filterItem.dataset.filter; // Получаем класс для фильтрации
        
        // Если класс пустой, показываем все элементы
        if (!filterClass) {
          gridItems.forEach(function(gridItem) {
            gridItem.style.display = 'block';
          });
          return;
        }

        // Фильтруем элементы
        gridItems.forEach(function(gridItem) {
          if (gridItem.querySelector(`.product.${filterClass}`)) {
            gridItem.style.display = 'block';
          } else {
            gridItem.style.display = 'none';
          }
        });
      });
    });
  });
