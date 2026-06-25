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

  // 7. Package Detail Page Interactions

  // 7a. Individual itinerary accordion items
  const itiHeaders = document.querySelectorAll('.iti-day-header');
  itiHeaders.forEach(header => {
    header.style.cursor = 'pointer'; // Make it look clickable
    header.addEventListener('click', function () {
      const day = this.closest('.iti-day');

      // Toggle current
      day.classList.toggle('expanded');

      // Toggle icon
      const icon = this.querySelector('.iti-toggle i');
      if (day.classList.contains('expanded')) {
        icon.classList.remove('fa-plus');
        icon.classList.add('fa-minus');
      } else {
        icon.classList.remove('fa-minus');
        icon.classList.add('fa-plus');
      }

      // Check if this is inside details-info section to update the toggle-all switch
      const detailsSection = this.closest('.package-details-info-section');
      if (detailsSection) {
        const allDays = detailsSection.querySelectorAll('.iti-day');
        const expandedDays = detailsSection.querySelectorAll('.iti-day.expanded');
        const toggleSwitch = detailsSection.querySelector('.toggle-switch');

        if (toggleSwitch) {
          if (allDays.length === expandedDays.length) {
            // All are expanded
            toggleSwitch.classList.add('active');
          } else {
            // Not all are expanded
            toggleSwitch.classList.remove('active');
          }
        }
      }
    });
  });

  // 7b. Toggle all functionality for Detail Information section
  const toggleAllBtn = document.querySelector('.toggle-all');
  if (toggleAllBtn) {
    toggleAllBtn.addEventListener('click', function () {
      const switchEl = this.querySelector('.toggle-switch');

      // Toggle the switch state
      switchEl.classList.toggle('active');

      const isActive = switchEl.classList.contains('active');

      // Find all accordion items in the details section
      const detailsSection = this.closest('.package-details-info-section');
      const detailDays = detailsSection.querySelectorAll('.iti-day');

      detailDays.forEach(day => {
        const icon = day.querySelector('.iti-toggle i');
        if (isActive) {
          day.classList.add('expanded');
          if (icon) {
            icon.classList.remove('fa-plus');
            icon.classList.add('fa-minus');
          }
        } else {
          day.classList.remove('expanded');
          if (icon) {
            icon.classList.remove('fa-minus');
            icon.classList.add('fa-plus');
          }
        }
      });
    });
  }

  // 7c. Inclusions/Exclusions tabs
  const incTabs = document.querySelectorAll('.inc-tab');
  const incLists = document.querySelectorAll('.inc-list');

  incTabs.forEach(tab => {
    tab.addEventListener('click', function () {
      // remove active from all tabs
      incTabs.forEach(t => t.classList.remove('active'));
      this.classList.add('active');

      // hide all lists
      incLists.forEach(list => list.style.display = 'none');

      // show target list
      const targetId = this.getAttribute('data-target') + '-list';
      const targetList = document.getElementById(targetId);
      if (targetList) {
        targetList.style.display = 'flex';
      }
    });
  });

  // 7d. Safety Policy accordion
  const safetyHeaders = document.querySelectorAll('.safety-header');
  safetyHeaders.forEach(header => {
    header.addEventListener('click', function () {
      const currentItem = this.closest('.safety-item');
      const isExpanded = currentItem.classList.contains('expanded');

      // Collapse all safety items
      document.querySelectorAll('.safety-item').forEach(item => {
        item.classList.remove('expanded');
        const icon = item.querySelector('.safety-icon i');
        if (icon) {
          icon.classList.remove('fa-minus');
          icon.classList.add('fa-plus');
        }
      });

      // If the clicked one wasn't expanded, expand it
      if (!isExpanded) {
        currentItem.classList.add('expanded');
        const icon = this.querySelector('.safety-icon i');
        if (icon) {
          icon.classList.remove('fa-plus');
          icon.classList.add('fa-minus');
        }
      }
    });
  });

  // 7e. Calendar day selection
  const calDays = document.querySelectorAll('.cal-day');
  calDays.forEach(day => {
    if (!day.classList.contains('text-soldout')) {
      day.addEventListener('click', function () {
        // Remove selected from all other days
        calDays.forEach(d => d.classList.remove('selected'));
        this.classList.add('selected');
      });
    }
  });

  // 7f. FAQ accordion
  const faqHeaders = document.querySelectorAll('.faq-header');
  faqHeaders.forEach(header => {
    header.addEventListener('click', function () {
      const currentItem = this.closest('.faq-item');
      const isExpanded = currentItem.classList.contains('expanded');

      // Collapse all faq items
      document.querySelectorAll('.faq-item').forEach(item => {
        item.classList.remove('expanded');
        const icon = item.querySelector('.faq-icon i');
        if (icon) {
          icon.classList.remove('fa-minus');
          icon.classList.add('fa-plus');
        }
      });

      // Toggle current item
      if (!isExpanded) {
        currentItem.classList.add('expanded');
        const icon = this.querySelector('.faq-icon i');
        if (icon) {
          icon.classList.remove('fa-plus');
          icon.classList.add('fa-minus');
        }
      }
    });
  });

  // 8. Package Detail Sticky Section Nav (scrollspy + smooth scroll)
  const sectionNav = document.getElementById('pkgSectionNav');
  if (sectionNav) {
    const navLinks = Array.from(sectionNav.querySelectorAll('a[href^="#"]'));
    const siteHeader = document.querySelector('.nn-header');

    // Map each nav link to its target section (skip links with no match)
    const links = navLinks
      .map(link => {
        const id = link.getAttribute('href').slice(1);
        const section = document.getElementById(id);
        return section ? { link, section } : null;
      })
      .filter(Boolean);

    // Keep the header + nav heights in sync as CSS variables so the sticky
    // offset and section scroll-margins stay correct on resize.
    const updateOffsets = () => {
      const headerH = siteHeader ? siteHeader.offsetHeight : 0;
      const navH = sectionNav.offsetHeight;
      const root = document.documentElement;
      root.style.setProperty('--pkg-header-offset', headerH + 'px');
      root.style.setProperty('--pkg-scroll-offset', (headerH + navH + 16) + 'px');
      return { headerH, navH };
    };
    updateOffsets();

    const setActive = (activeLink) => {
      links.forEach(({ link }) => link.classList.remove('active'));
      if (activeLink) {
        activeLink.classList.add('active');
        // Keep the active item visible in the horizontal strip on mobile
        activeLink.scrollIntoView({ block: 'nearest', inline: 'center' });
      }
    };

    // Smooth scroll to a section, accounting for the sticky offset
    links.forEach(({ link, section }) => {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        const { headerH, navH } = updateOffsets();
        const top = section.getBoundingClientRect().top + window.pageYOffset - (headerH + navH);
        window.scrollTo({ top, behavior: 'smooth' });
        setActive(link);
        history.replaceState(null, '', link.getAttribute('href'));
      });
    });

    // Scrollspy: highlight the section currently sitting under the sticky bar,
    // and toggle the full-bleed "stuck" style. Throttled with requestAnimationFrame.
    let ticking = false;
    const onScroll = () => {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(() => {
        const { headerH, navH } = updateOffsets();
        const line = headerH + navH + 20; // viewport line just below the sticky bar

        // Stuck state: the nav has reached its sticky position
        const stuck = sectionNav.getBoundingClientRect().top <= headerH + 1;
        sectionNav.classList.toggle('is-stuck', stuck);

        // Find the last section whose top has passed the line
        let current = links[0];
        for (const item of links) {
          if (item.section.getBoundingClientRect().top <= line) {
            current = item;
          } else {
            break;
          }
        }

        // Near the bottom of the page, force the last section active
        if (window.innerHeight + window.pageYOffset >= document.body.offsetHeight - 4) {
          current = links[links.length - 1];
        }

        if (current && !current.link.classList.contains('active')) {
          setActive(current.link);
        }
        ticking = false;
      });
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', updateOffsets);

    // Honour an incoming hash (e.g. /package-detail.php#itinerary) on load
    if (window.location.hash) {
      const target = links.find(item => '#' + item.section.id === window.location.hash);
      if (target) {
        setTimeout(() => {
          const { headerH, navH } = updateOffsets();
          const top = target.section.getBoundingClientRect().top + window.pageYOffset - (headerH + navH);
          window.scrollTo({ top, behavior: 'auto' });
          setActive(target.link);
        }, 100);
      }
    }

    onScroll();
  }

});
