{{-- ================= TOP BAR ================= --}}
<div class="bg-[#F5F2EE] py-4 hidden lg:block">
    <div class="max-w-[1732px] mx-auto px-4">
        <div class="grid grid-cols-8 sm:grid-cols-12">

            <div class="flex justify-start items-center gap-3 col-span-6 md:col-span-3">
                <p class="mb-0 font-montserrat font-bold text-black me-4">Follow Us:</p>
                <a href="#"><img src="{{ asset('assets/images/icons/fb-header.png') }}" width="20"></a>
                <a href="#"><img src="{{ asset('assets/images/icons/insta-header.png') }}" width="20"></a>
                <a href="#"><img src="{{ asset('assets/images/icons/linkedin-header.png') }}" width="20"></a>
            </div>

            <div class="flex gap-6 lg:gap-14 col-span-12 md:col-span-9 justify-end items-center">
                <a class="font-montserrat font-semibold text-black" href="#">Blog</a>
                <a class="font-montserrat font-semibold text-black" href="#">About (Brand Name)</a>
                <a class="font-montserrat font-semibold text-black" href="#">Contact Us</a>
            </div>

        </div>
    </div>
</div>

{{-- ================= NAVBAR ================= --}}
<div class="bg-white">
    <div class="row m-0">

        {{-- LEFT SECTION --}}
        <div class="w-full lg:w-9/12 px-5 lg:px-0 py-6 lg:py-0">
            <div class="mx-auto px-3 lg:px-5 max-w-[1271px] ms-auto">

                <nav class="flex items-center justify-between lg:justify-start lg:py-4">

                    {{-- LOGO --}}
                    <a href="#">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" width="150">
                    </a>

                    {{-- MOBILE MENU BUTTON --}}
                    <button id="mobileMenuBtn" class="lg:hidden block text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    {{-- DESKTOP MENU --}}
                    <div class="hidden lg:flex flex-grow justify-end">
                        <ul class="flex gap-10 font-montserrat ">

                            <li><a class="text-lg 4xl:text-xl font-montserrat text-black" href="#">Home</a></li>
                            <li><a class="text-lg 4xl:text-xl font-montserrat text-black" href="#">Who We Are</a>
                            </li>

                            <li class="relative group">
                                <a class="flex items-center gap-2 text-lg 4xl:text-xl font-montserrat text-black"
                                    href="#">
                                    Our Services
                                    <img src="{{ asset('assets/images/icons/nav-icon.svg') }}" width="12">
                                </a>

                                <ul
                                    class="absolute left-0 mt-3 hidden group-hover:block bg-white rounded-lg shadow-lg min-w-[180px]">
                                    <li><a class="block px-4 py-2 hover:bg-gray-100" href="#">About Us</a></li>
                                    <li><a class="block px-4 py-2 hover:bg-gray-100" href="#">Blog</a></li>
                                    <li><a class="block px-4 py-2 hover:bg-gray-100" href="#">Contact Us</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                </nav>
            </div>
        </div>

        {{-- RIGHT CTA --}}
        <div class="hidden lg:flex w-3/12 bg-secondary items-center justify-center">
            <a href="#" class="text-white font-montserrat font-semibold text-lg 4xl:text-xl">
                Start My Trademark Registration
            </a>
        </div>

    </div>
</div>

{{-- ================= MOBILE LEFT DRAWER ================= --}}
<div id="mobileOverlay" class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden"></div>

<div id="mobileMenu"
    class="fixed top-0 left-0 h-full w-[300px] bg-white z-50
           transform -translate-x-full transition-transform duration-300 lg:hidden">

    {{-- MOBILE HEADER --}}
    <div class="flex justify-between items-center p-5 border-b">
        <img src="{{ asset('assets/images/logo/logo.png') }}" width="130">
        <button id="closeMobileMenu" class="text-2xl">&times;</button>
    </div>

    {{-- MOBILE MENU --}}
    <ul class="flex flex-col gap-6 p-5 font-montserrat text-primary">
        <li><a class="font-semibold" href="#">Home</a></li>
        <li><a class="font-semibold" href="#">Who We Are</a></li>

        <li>
            <button class="w-full flex justify-between font-semibold"
                onclick="this.nextElementSibling.classList.toggle('hidden')">
                Our Services <span>▾</span>
            </button>
            <ul class="mt-3 ml-4 hidden space-y-3 text-sm">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </li>

        <li><a class="font-semibold" href="#">Blog</a></li>
        <li><a class="font-semibold" href="#">Contact Us</a></li>
    </ul>

    {{-- MOBILE CTA --}}
    <div class="absolute bottom-0 w-full p-5">
        <a href="#" class="block text-center bg-secondary text-white py-3 rounded-xl">
            Start My Trademark Registration
        </a>
    </div>
</div>


