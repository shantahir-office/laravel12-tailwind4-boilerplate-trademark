{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}
<script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/intlTelInput.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js" defer></script> --}}
{{-- <script defer src="{{ asset('vendor/js/virtual-select.min.js') }}"></script>
<script defer src="{{ asset('assets/js/chat.js') }}"></script>
<script defer src="{{ asset('js/form.js') }}"></script>





{{-- ================= HEADER SCRIPT ================= --}}
<script>
    const btn = document.getElementById('mobileMenuBtn');
    const menu = document.getElementById('mobileMenu');
    const overlay = document.getElementById('mobileOverlay');
    const closeBtn = document.getElementById('closeMobileMenu');

    btn.onclick = () => {
        menu.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
    };

    const closeMenu = () => {
        menu.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    };

    closeBtn.onclick = closeMenu;
    overlay.onclick = closeMenu;
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ===== SERVICES SWIPER ===== */
    var servicesSwiper = new Swiper('.services-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        speed: 600,
        loop: true,

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        pagination: {
            el: '.services-pagination',
            clickable: true,
        },

        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            1366: {
                slidesPerView: 2.2,
                spaceBetween: 10,
            },
            1920: {
                slidesPerView: 2.5,
                spaceBetween: 40,
            }
        }
    });


    /* ===== TESTIMONIALS SWIPER ===== */
    var testimonialsSwiper = new Swiper('.testimonilas-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        speed: 600,
        loop: true,

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        pagination: {
            el: '.testimonilas-pagination',
            clickable: true,
        },

        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            1366: {
                slidesPerView: 2.3,
                spaceBetween: 10,
            },
            1920: {
                slidesPerView: 3,
                spaceBetween: 40,
            }
        }
    });

});
</script>
@vite('resources/js/app.js')