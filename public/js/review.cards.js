let startX, currentX;
let isDragging = false;
let initialTranslateX = 0;
const reviewContainer = document.getElementById('review-cards-container');
const reviews = document.querySelectorAll('.review-card');
const totalReviews = reviews.length;
const visibleReviews = 3;
const cardMargin = 170; // Total margin including left and right (20px each side)

// Function to dynamically calculate the width of each review including margin
function calculateReviewWidth() {
    return reviews[0].offsetWidth + cardMargin; // width + margin
}

// Initial calculation of review width
let reviewWidth = calculateReviewWidth();

// Helper function to get the current translateX value of the container
function getCurrentTranslateX() {
    const transformMatrix = window.getComputedStyle(reviewContainer).transform;
    if (transformMatrix !== 'none') {
        return parseFloat(transformMatrix.split(',')[4]);
    }
    return 0;
}

function touchStart(event) {
    startX = event.touches[0].clientX;
    isDragging = true;
    initialTranslateX = getCurrentTranslateX();
    reviewContainer.style.transition = 'none'; // Disable transition during drag
}

function touchMove(event) {
    if (!isDragging) return;
    currentX = event.touches[0].clientX;
    const deltaX = currentX - startX;

    // Calculate the new translateX value based on drag
    let newTranslateX = initialTranslateX + deltaX;

    // Prevent the container from moving out of bounds
    const maxTranslateX = 0;
    const minTranslateX = -(totalReviews * reviewWidth - visibleReviews * reviewWidth);
    newTranslateX = Math.max(minTranslateX, Math.min(maxTranslateX, newTranslateX));

    reviewContainer.style.transform = `translateX(${newTranslateX}px)`;
}

function touchEnd() {
    isDragging = false;

    // Smooth transition for slowing down after swipe ends
    reviewContainer.style.transition = 'transform 0.8s cubic-bezier(0.25, 0.8, 0.5, 1)';
    
    // After the user lifts their finger, the container should stop where it is without snapping
    const finalTranslateX = getCurrentTranslateX();
    reviewContainer.style.transform = `translateX(${finalTranslateX}px)`;
}

function slideLeft() {
    const currentTranslateX = getCurrentTranslateX();
    if (currentTranslateX < 0) {
        const newTranslateX = Math.min(currentTranslateX + reviewWidth, 0); // Move right
        reviewContainer.style.transition = 'transform 0.8s cubic-bezier(0.25, 0.8, 0.5, 1)';
        reviewContainer.style.transform = `translateX(${newTranslateX}px)`;
    }
}

function slideRight() {
    const currentTranslateX = getCurrentTranslateX();
    const maxTranslateX = -(totalReviews * reviewWidth - visibleReviews * reviewWidth);
    if (currentTranslateX > maxTranslateX) {
        const newTranslateX = Math.max(currentTranslateX - reviewWidth, maxTranslateX); // Move left
        reviewContainer.style.transition = 'transform 0.8s cubic-bezier(0.25, 0.8, 0.5, 1)';
        reviewContainer.style.transform = `translateX(${newTranslateX}px)`;
    }
}

// Event listeners for touch events
reviewContainer.addEventListener('touchstart', touchStart, { passive: true });
reviewContainer.addEventListener('touchmove', touchMove, { passive: true });
reviewContainer.addEventListener('touchend', touchEnd, { passive: true });

// Event listeners for button clicks
document.getElementById('slide-left-btn').addEventListener('click', slideLeft);
document.getElementById('slide-right-btn').addEventListener('click', slideRight);

// Recalculate review width on window resize
window.addEventListener('resize', () => {
    reviewWidth = calculateReviewWidth();
});
