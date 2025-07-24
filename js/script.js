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