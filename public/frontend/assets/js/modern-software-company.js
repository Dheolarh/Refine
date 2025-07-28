// Modern Software Company JavaScript
(function($) {
    'use strict';

    // Initialize AOS (Animate On Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
    }

    $(document).ready(function() {
        
        // Smooth scrolling for anchor links
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 80
                }, 1000, 'easeInOutExpo');
            }
        });

        // Portfolio filter functionality
        $('.filter-btn').on('click', function() {
            var filterValue = $(this).attr('data-filter');
            
            // Update active button
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');
            
            // Filter portfolio items
            if (filterValue === 'all') {
                $('.portfolio-item').removeClass('hidden').addClass('visible');
            } else {
                $('.portfolio-item').each(function() {
                    var itemCategory = $(this).attr('data-category');
                    if (itemCategory === filterValue) {
                        $(this).removeClass('hidden').addClass('visible');
                    } else {
                        $(this).removeClass('visible').addClass('hidden');
                    }
                });
            }
        });

        // Testimonials slider
        if ($('.testimonials-slider').length) {
            $('.testimonials-slider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                arrows: false,
                fade: true,
                cssEase: 'linear'
            });
        }

        // Counter animation
        function animateCounters() {
            $('.stat-number').each(function() {
                var $this = $(this);
                var countTo = parseInt($this.text().replace(/[^0-9]/g, ''));
                var suffix = $this.text().replace(/[0-9]/g, '');
                
                $({ countNum: 0 }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum) + suffix);
                    },
                    complete: function() {
                        $this.text(countTo + suffix);
                    }
                });
            });
        }

        // Trigger counter animation when hero section is in view
        var heroSection = $('.modern-hero-section');
        var countersAnimated = false;
        
        $(window).on('scroll', function() {
            if (!countersAnimated && isElementInViewport(heroSection[0])) {
                animateCounters();
                countersAnimated = true;
            }
        });

        // Check if element is in viewport
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Typing animation for code window
        function typeWriter() {
            const codeLines = $('.code-line');
            let currentLine = 0;
            
            function typeLine() {
                if (currentLine < codeLines.length) {
                    $(codeLines[currentLine]).addClass('typing-active');
                    currentLine++;
                    setTimeout(typeLine, 500);
                }
            }
            
            // Start typing animation after a delay
            setTimeout(typeLine, 1000);
        }

        // Initialize typing animation
        typeWriter();

        // Parallax effect for floating shapes
        $(window).on('scroll', function() {
            var scrolled = $(window).scrollTop();
            var parallax = scrolled * 0.5;
            
            $('.floating-shapes .shape').each(function(index) {
                var speed = (index + 1) * 0.1;
                $(this).css('transform', 'translateY(' + (parallax * speed) + 'px)');
            });
        });

        // Service card hover effects
        $('.service-card').on('mouseenter', function() {
            $(this).find('.service-icon').addClass('animate-bounce');
        }).on('mouseleave', function() {
            $(this).find('.service-icon').removeClass('animate-bounce');
        });

        // Team card social links animation
        $('.team-card').on('mouseenter', function() {
            $(this).find('.social-link').each(function(index) {
                $(this).css('animation-delay', (index * 0.1) + 's');
                $(this).addClass('animate-fadeInUp');
            });
        }).on('mouseleave', function() {
            $(this).find('.social-link').removeClass('animate-fadeInUp');
        });

        // Smooth reveal animation for sections
        function revealSections() {
            $('.modern-about-section, .modern-services-section, .modern-portfolio-section, .modern-team-section, .modern-testimonials-section, .modern-cta-section').each(function() {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                
                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $(this).addClass('section-visible');
                }
            });
        }

        // Initial check and scroll event
        revealSections();
        $(window).on('scroll', revealSections);

        // Button ripple effect
        $('.modern-btn').on('click', function(e) {
            var $this = $(this);
            var offset = $this.offset();
            var x = e.pageX - offset.left;
            var y = e.pageY - offset.top;
            
            var ripple = $('<span class="ripple"></span>');
            ripple.css({
                left: x,
                top: y
            });
            
            $this.append(ripple);
            
            setTimeout(function() {
                ripple.remove();
            }, 600);
        });

        // Navbar scroll effect
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 100) {
                $('.site-header').addClass('scrolled');
            } else {
                $('.site-header').removeClass('scrolled');
            }
        });

        // Mobile menu enhancements
        $('.mobile-menu-trigger').on('click', function() {
            $('body').toggleClass('mobile-menu-open');
        });

        // Close mobile menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.mobile-menu-trigger, .menu-block').length) {
                $('body').removeClass('mobile-menu-open');
            }
        });

        // Preloader
        $(window).on('load', function() {
            $('.optech-preloader-wrap').fadeOut(500);
        });

        // Back to top button
        var backToTop = $('.progress-wrap');
        
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 300) {
                backToTop.addClass('active-progress');
            } else {
                backToTop.removeClass('active-progress');
            }
        });

        backToTop.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 1000);
        });

        // Initialize lightbox for portfolio
        if (typeof $.fn.magnificPopup !== 'undefined') {
            $('.portfolio-action[data-lightbox]').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300
                }
            });
        }

        // Form validation and submission
        $('form').on('submit', function(e) {
            var form = $(this);
            var isValid = true;
            
            // Basic validation
            form.find('input[required], textarea[required]').each(function() {
                if (!$(this).val().trim()) {
                    isValid = false;
                    $(this).addClass('error');
                } else {
                    $(this).removeClass('error');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                toastr.error('Please fill in all required fields.');
            }
        });

        // Input focus effects
        $('input, textarea').on('focus', function() {
            $(this).parent().addClass('focused');
        }).on('blur', function() {
            if (!$(this).val()) {
                $(this).parent().removeClass('focused');
            }
        });

        // Lazy loading for images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Performance optimization: Debounce scroll events
        function debounce(func, wait, immediate) {
            var timeout;
            return function() {
                var context = this, args = arguments;
                var later = function() {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                var callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        }

        // Apply debounce to scroll events
        $(window).on('scroll', debounce(function() {
            // Scroll-dependent functions here
        }, 10));

    });

    // Custom easing function
    $.easing.easeInOutExpo = function (x, t, b, c, d) {
        if (t == 0) return b;
        if (t == d) return b + c;
        if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
        return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
    };

})(jQuery);

// Additional CSS animations
const style = document.createElement('style');
style.textContent = `
    .animate-bounce {
        animation: bounce 1s infinite;
    }
    
    .animate-fadeInUp {
        animation: fadeInUp 0.5s ease-out forwards;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }
    
    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
    
    .section-visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    .typing-active {
        animation: typewriter 0.5s ease-out;
    }
    
    .site-header.scrolled {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
    }
    
    .error {
        border-color: #EF4444 !important;
        box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1) !important;
    }
    
    .focused {
        transform: translateY(-2px);
    }
    
    .lazy {
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .lazy.loaded {
        opacity: 1;
    }
`;
document.head.appendChild(style);