// Services Section

document.querySelectorAll('.services-cards').forEach(carousel => {
  carousel.addEventListener('wheel', (e) => {
    e.preventDefault();
    carousel.scrollBy({
      left: e.deltaY < 0 ? -300 : 300,
    });
  });
});

