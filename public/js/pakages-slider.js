(function() {
    let currentIndex = 1;
    const totalSlides = document.querySelectorAll('.slide-container').length;
    const dots = document.querySelectorAll('.carousel-dot');
    const intervalTime = 4000;
    let autoSlideInterval;

    // Show slide by index and update dots
    function showSlide(index) {
        if (index < 1) index = totalSlides;
        if (index > totalSlides) index = 1;

        document.getElementById(`img-${index}`).checked = true;
        updateDots(index);
        currentIndex = index;
    }

    // Update dots based on the current slide
    function updateDots(index) {
        dots.forEach(dot => {
            dot.classList.remove('active');
            if (parseInt(dot.getAttribute('data-slide')) === index) {
                dot.classList.add('active');
            }
        });
    }

    // Move to the next slide
    function nextSlide() {
        let nextIndex = currentIndex + 1;
        if (nextIndex > totalSlides) nextIndex = 1;
        showSlide(nextIndex);
    }

    // Reset auto-slide interval
    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        autoSlideInterval = setInterval(nextSlide, intervalTime);
    }

    // Auto-slide functionality
    autoSlideInterval = setInterval(nextSlide, intervalTime);

    // Attach event listeners to dots
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            const slideNumber = parseInt(this.getAttribute('data-slide'));
            if (slideNumber !== currentIndex) {
                showSlide(slideNumber);
                resetAutoSlide();
            }
        });
    });

    // Attach event listeners to slides for manual control
    document.querySelectorAll('.slide-container').forEach(container => {
        container.addEventListener('click', function() {
            nextSlide(); // Show the next slide when the current slide is clicked
            resetAutoSlide(); // Reset auto-slide interval to maintain user control
        });
    });

    // Initialize the first slide and dot as active
    showSlide(currentIndex);

})();
