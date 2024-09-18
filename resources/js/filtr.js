document.addEventListener('DOMContentLoaded', function() {
    const filterItems = document.querySelectorAll('.filter-item');
    const gridItems = document.querySelectorAll('.grid__item');

    filterItems.forEach(function(filterItem) {
        filterItem.addEventListener('click', function() {
            // Удаляем класс 'active' у всех кнопок
            filterItems.forEach(function(item) {
                item.classList.remove('active');
            });

            // Добавляем класс 'active' к текущей кнопке
            filterItem.classList.add('active');

            const filterClass = filterItem.dataset.filter;

            if (!filterClass) {
                gridItems.forEach(function(gridItem) {
                    gridItem.style.display = 'block';
                });
                return;
            }

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
