const navLinks = document.querySelectorAll('nav ul li a');

navLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Remove active class from all links
        navLinks.forEach(nav => nav.classList.remove('active'));
        // Add active class to the clicked link
        this.classList.add('active');
    });
});

new Swiper('.card-wrapper', {
  loop: true,
  spaceBetween: 30,

  // Pagination bullet
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,

  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
// responsive breakpoints
  breakpoints: {
      0: {
          slidesPerView: 1
      },
      768: {
          slidesPerView: 2
      },
      1024: {
          slidesPerView: 3
      },

  }

});


