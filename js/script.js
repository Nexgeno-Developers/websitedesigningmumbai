// Mobile View Menu==========================================
// Mobile menu toggle
const mobileMenuButton = document.getElementById('mobileMenuButton');
const mobileMenu = document.getElementById('mobileMenu');
const menuIcon = document.getElementById('menuIcon');
let isMenuOpen = false;

mobileMenuButton.addEventListener('click', function () {
    isMenuOpen = !isMenuOpen;
    mobileMenu.classList.toggle('show');
    menuIcon.classList.toggle('bi-list');
    menuIcon.classList.toggle('bi-x-lg');
});

// Close mobile menu when clicking on a link
const mobileLinks = document.querySelectorAll('#mobileMenu .nav-link');
mobileLinks.forEach(link => {
    link.addEventListener('click', function () {
        mobileMenu.classList.remove('show');
        menuIcon.classList.remove('bi-x-lg');
        menuIcon.classList.add('bi-list');
        isMenuOpen = false;
    });
});

// Scroll effect for header
const header = document.getElementById('mainHeader');
window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});
// Mobile View Menu==========================================





// Testimonial==========================================
document.addEventListener('DOMContentLoaded', function () {
    const dots = document.querySelectorAll('.nav-dot');
    const testimonials = document.querySelectorAll('.testimonial-item');
    let currentIndex = 0;
    let intervalId;

    // Function to show testimonial by index
    function showTestimonial(index) {
        currentIndex = index;

        // Update active dot
        dots.forEach(dot => dot.classList.remove('active'));
        dots[index].classList.add('active');

        // Update active testimonial
        testimonials.forEach(testimonial => {
            testimonial.classList.remove('active', 'fade-in');
        });

        testimonials[index].classList.add('active');
        // Trigger reflow to restart animation
        void testimonials[index].offsetWidth;
        testimonials[index].classList.add('fade-in');
    }

    // Function to go to next testimonial
    function nextTestimonial() {
        const nextIndex = (currentIndex + 1) % testimonials.length;
        showTestimonial(nextIndex);
    }

    // Start auto-rotation
    function startAutoRotation() {
        intervalId = setInterval(nextTestimonial, 5000);
    }

    // Initialize
    function init() {
        // Add click event to dots
        dots.forEach(dot => {
            dot.addEventListener('click', function () {
                const index = parseInt(this.getAttribute('data-index'));
                showTestimonial(index);
                // Reset timer when manually changing testimonial
                clearInterval(intervalId);
                startAutoRotation();
            });
        });

        // Start auto rotation
        startAutoRotation();
    }

    // Start the testimonials
    init();
});
// Testimonial==========================================


// change by danish state counter

document.querySelector('.hero-content').addEventListener('mouseenter', () => {
  const counters = document.querySelectorAll('.counter-value');

  counters.forEach(counter => {
    const target = +counter.getAttribute('data-count');
    let count = 0;
    const duration = 2000;
    const intervalTime = 10;
    const steps = duration / intervalTime;
    const increment = target / steps;

    // Clear any previous interval
    if (counter._interval) {
      clearInterval(counter._interval);
    }

    counter.textContent = '0'; // reset to 0

    counter._interval = setInterval(() => {
      count += increment;
      if (count >= target) {
        counter.textContent = target;
        clearInterval(counter._interval);
      } else {
        counter.textContent = Math.floor(count);
      }
    }, intervalTime);
  });
});


// end


// State counter==========================================
var a = 0;
$(window).scroll(function () {

    var oTop = $('#counter').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter-value').each(function () {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                countNum: countTo
            },

                {

                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });
        });
        a = 1;
    }

});
// State counter==========================================





// form home validate==========================================
// Form validation
(function () {
    'use strict';

    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add('was-validated');
    }, false);
})();
// form home validate==========================================


///////////// tabs portfolio //////////////

document.addEventListener('DOMContentLoaded', function() {
    // Get all filter buttons and project cards
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.col-md-6.col-lg-4');
    
    // Add click event listeners to each filter button
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Get the filter value (text content of the button)
            const filterValue = this.textContent.trim();
            
            // Show/hide projects based on filter
            projectCards.forEach(card => {
                // Get the category badge text (remove any extra whitespace)
                const categoryBadge = card.querySelector('.badge.rounded-pill');
                const category = categoryBadge ? categoryBadge.textContent.trim() : '';
                
                // Show all projects if "All" is selected
                if (filterValue === 'All') {
                    card.style.display = 'block';
                } 
                // Show only projects that match the selected category
                else if (category === filterValue) {
                    card.style.display = 'block';
                } 
                // Hide projects that don't match
                else {
                    card.style.display = 'none';
                }
            });
        });
    });
});