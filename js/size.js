document.addEventListener('DOMContentLoaded', function() {
    const sizeElements = document.querySelectorAll('.icon_size:not(.out_of_stock)');
    
    sizeElements.forEach(size => {
        size.addEventListener('click', function() {
            sizeElements.forEach(el => el.classList.remove('selected'));
            
            this.classList.add('selected');
            
            const selectedSize = this.getAttribute('data-size');
            console.log('Выбран размер: ', selectedSize);
            
            console.log(selectedSize);
        });
    });
});


