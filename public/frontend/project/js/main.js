/**
* Template Name: FlexStart - v1.2.0
* Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
   const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }
  

  /**
   * Easy event listener function
   */
   const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener 
   */

  /**
   * Navbar links active state on scroll
   */
  
  /**
   * Scrolls to an element with header offset
   */
 

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  

  /**
   * Back to top button
   */
 

  /**
   * Mobile nav toggle
   */


  /**
   * Mobile nav dropdowns activate
   */
 

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  
  /**
   * Clients Slider
   */
  

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        aos_init();
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfokio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
 

  /**
   * Animation on scroll
   */
 

})();