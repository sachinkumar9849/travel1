/**
 * HopeBridge Care - Premium Web JS
 */

document.addEventListener('DOMContentLoaded', function () {
  
  // 1. Initialize AOS (Animate on Scroll)
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 800,
      easing: 'ease-out-cubic',
      once: true,
      offset: 50,
      delay: 50
    });
  }

  // 2. Initialize Hero Slider Swiper
  if (typeof Swiper !== 'undefined') {

    // 2a. Hero full-width fade slider
    new Swiper('.hero-swiper', {
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      loop: true,
      speed: 1000,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      navigation: {
        prevEl: '.hero-swiper-prev',
        nextEl: '.hero-swiper-next',
      },
      pagination: {
        el: '.hero-swiper-pagination',
        clickable: true,
        type: 'bullets',
      },
      grabCursor: true,
      keyboard: {
        enabled: true,
      },
      a11y: {
        prevSlideMessage: 'Previous slide',
        nextSlideMessage: 'Next slide',
      },
    });

    // 2b. Success Stories Swiper
    new Swiper('.stories-swiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.stories-swiper .swiper-pagination',
        clickable: true,
        dynamicBullets: true,
      },
      breakpoints: {
        768: { slidesPerView: 2 },
        1200: { slidesPerView: 3 },
      },
    });

    // 2c. Partners Logo Carousel Swiper
    new Swiper('.partners-swiper', {
      slidesPerView: 2,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      breakpoints: {
        576: { slidesPerView: 3 },
        768: { slidesPerView: 4 },
        992: { slidesPerView: 5 },
        1200: { slidesPerView: 6 },
      },
    });
  }


  // 4. Counter Animation for Trust & Impact
  const counters = document.querySelectorAll('.counter-val');
  const speed = 200; // The higher the slower

  const animateCounters = () => {
    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const inc = target / speed;

        if (count < target) {
          counter.innerText = Math.ceil(count + inc);
          setTimeout(updateCount, 15);
        } else {
          counter.innerText = target;
        }
      };
      updateCount();
    });
  };

  // Intersection Observer for Counters
  const impactSection = document.getElementById('impact');
  if (impactSection) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounters();
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    observer.observe(impactSection);
  }

  // 5. Gallery Lightbox Logic
  const galleryItems = document.querySelectorAll('.gallery-item');
  const lightboxModal = document.getElementById('lightboxModal');
  const lightboxImg = document.getElementById('lightboxImg');

  if (galleryItems.length > 0 && lightboxModal && lightboxImg) {
    const bsModal = new bootstrap.Modal(lightboxModal);
    
    galleryItems.forEach(item => {
      item.addEventListener('click', function () {
        const imgSrc = this.querySelector('.gallery-img').getAttribute('src');
        lightboxImg.setAttribute('src', imgSrc);
        bsModal.show();
      });
    });
  }

  // 6. Dynamic Form Actions (Newsletter / Support Request)
  const newsletterForm = document.getElementById('newsletterForm');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const emailInput = this.querySelector('input[type="email"]');
      if (emailInput && emailInput.value) {
        alert('Thank you for subscribing to the HopeBridge Care newsletter! Check your inbox soon for updates.');
        emailInput.value = '';
      }
    });
  }

  const supportForm = document.getElementById('supportForm');
  if (supportForm) {
    supportForm.addEventListener('submit', function (e) {
      e.preventDefault();
      alert('Your request for support has been received. One of our compassionate Care Directors will reach out to you within 24 hours.');
      this.reset();
      
      // Close modal if it's inside one
      const modalEl = document.getElementById('supportModal');
      if (modalEl) {
        const modalInstance = bootstrap.Modal.getInstance(modalEl);
        if (modalInstance) {
          modalInstance.hide();
        }
      }
    });
  }

});
