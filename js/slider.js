document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('.slider');
            const slides = document.querySelectorAll('.slide');
            
            let currentSlide = 0;
            const slideCount = slides.length;
            const slideInterval = 3000; // 3 секунды
            
            // Автоматическое перелистывание
            function autoSlide() {
                setInterval(() => {
                    // Переход к следующему слайду
                    currentSlide++;
                    
                    // Если достигли конца - начинаем сначала
                    if (currentSlide >= slideCount) {
                        currentSlide = 0;
                        // Мгновенный переход без анимации
                        slider.style.transition = 'none';
                        slider.style.transform = 'translateX(0)';
                        // Принудительное обновление DOM
                        void slider.offsetWidth;
                        // Восстанавливаем анимацию
                        slider.style.transition = 'transform 0.5s ease-in-out';
                    }
                    
                    // Плавный переход к текущему слайду
                    slider.style.transform = `translateX(-${currentSlide * 100}%)`;
                }, slideInterval);
            }
            
            // Запуск слайдера
            autoSlide();
        });
        