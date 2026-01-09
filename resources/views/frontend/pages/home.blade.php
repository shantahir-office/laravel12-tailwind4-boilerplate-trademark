@extends('components.layouts.web.master')
@section('main-content')
    {{-- Hero Banner --}}
    <section
        class="hero-banner flex flex-col lg:flex-row items-center justify-center relative xl:pb-0 bg-primary lg:bg-cover lg:bg-center"
        style="background-image: url('{{ asset('assets/images/banners/hero-banner.png') }}');">
        <img src="{{ asset('assets/images/banners/hero-boys.png') }}" alt=""
            class=" object-fit-contain hidden xl:block w-[52vw] mx-auto absolute bottom-0 z-0 4xl:right-3 xl:right-5">
        <div class="cus-container">
            <div class="row">
                <div class="lg:w-6/12 2xl:w-7/12">
                    <span class="font-montserrat text-white text-sm xl:text-xl 4xl:text-4xl">Protect Your <span
                            class="text-secondary font-bold">Brand's Future</span> With</span>
                    <h1 class="text-white text-3xl md:text-3xl lg:text-5xl 4xl:text-7xl font-montserrat font-semibold mb-0">
                        Trademark<br>
                        <span class="text-secondary">Registration</span><br>
                        Services
                    </h1>
                    <p class="my-4 text-white font-hind 4xl:text-xl xl:text-lg text-sm font-extralight">Lorem Ipsum is
                        simply
                        dummy text of the printing and typesetting industry. <br class="hidden 4xl:block">Lorem Ipsum
                        has been the industry's standard.</p>
                    <div class="flex gap-0 md:gap-10 4xl:gap-20 lg:w-11/12 2xl:w-8/12 flex-wrap">
                        <ul>
                            <li
                                class="flex items-center gap-3 text-white font-hind 4xl:text-xl xl:text-lg text-sm font-medium mb-2">
                                <img src="{{ asset('assets/images/icons/check.svg') }}" alt="check icon" width="20"
                                    height="20">Lorem Ipsum is simply
                            </li>
                            <li
                                class="flex items-center gap-3 text-white font-hind 4xl:text-xl xl:text-lg text-sm font-medium mb-2">
                                <img src="{{ asset('assets/images/icons/check.svg') }}" alt="check icon" width="20"
                                    height="20">Lorem Ipsum is simply
                            </li>

                        </ul>
                        <ul>
                            <li
                                class="flex items-center gap-3 text-white font-hind 4xl:text-xl xl:text-lg text-sm font-medium mb-2">
                                <img src="{{ asset('assets/images/icons/check.svg') }}" alt="check icon" width="20"
                                    height="20">Lorem Ipsum is simply
                            </li>
                            <li
                                class="flex items-center gap-3 text-white font-hind 4xl:text-xl xl:text-lg text-sm font-medium mb-2">
                                <img src="{{ asset('assets/images/icons/check.svg') }}" alt="check icon" width="20"
                                    height="20">Lorem Ipsum is simply
                            </li>

                        </ul>

                    </div>
                    <div class="flex gap-3 mt-4 flex-wrap">
                        <button type="button" class="btn btn-primary">Start My Trademark Registration</button>
                        <button type="button" class="btn btn-outline-white">Consult Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Banner End --}}

    {{-- About Section Start --}}
    <section class="pb-0">
        <div class="cus-container relative z-1">
            <div class="row justify-between">
                <div class="lg:w-5/12 2xl:w-5/12">
                    <h2 class="section-title font-bold">
                        About Us
                    </h2>
                    <p>At Legacy Trademark, we have brought a team of USA’s best industry-specific trademark attorneys to
                        provide our clients with top-of-the-line USPTO trademark registration services. We have been
                        assisting our clients for more than 20 years, and we have maintained a 100% satisfaction score. With
                        our assistance, you can have your trademark registered with the USPTO smoothly, without any
                        roadblocks</p>
                </div>
                <div class="lg:w-5/12 2xl:w-5/12">
                    <ul class="list-inside pl-3 lg:pl-0">
                        <li class="list-disc font-semibold text-black mb-2">More than 10 Years of Experience</li>
                        <li class="list-disc font-semibold text-black mb-2">More than 20 Best Attorney Awards Achieved</li>
                        <li class="list-disc font-semibold text-black mb-2">100% Satisfaction Rate Maintained</li>
                    </ul>
                    <div class="flex gap-3 mt-4 flex-wrap">
                        <button class="btn btn-primary">Start My Trademark Registration</button>
                        <button class="btn btn-outline-black">Consult Now</button>
                    </div>
                </div>
            </div>

        </div>
        <img loading="lazy" src="{{ asset('assets/images/banners/about-1.png') }}" alt="peoples" width="1920"
            height="772" class=" object-fit-contain hidden xl:block w-full h-auto mx-auto z-0 xl:-mt-37 4xl:-mt-50">
    </section>
    {{-- About Section End --}}

    {{-- About Sec Section Start --}}
    <section class="">
        <div class="cus-container relative z-1">
            <div class="row justify-center">
                <div class="xl:w-5/12 w-full 2xl:w-5/12 ml-auto">
                    <h2 class="section-title font-bold mb-5 xl:mb-3 4xl:mb-10">Why Trademark Registration Is Important For
                        Your Business</h2>
                    <ul class="">
                        <li
                            class="flex items-center gap-3 mb-4 xl:mb-3 4xl:mb-10 font-hind 4xl:text-xl xl:text-lg text-sm font-medium text-black">
                            <img loading="lazy" src="{{ asset('assets/images/icons/icon1.png') }}" alt="service icon"
                                width="64" height="64"> Once
                            you register a trademark, all of your ideas are protected with us without paying a premium.
                        </li>
                        <li
                            class="flex items-center gap-3 mb-4 xl:mb-3 4xl:mb-10 font-hind 4xl:text-xl xl:text-lg text-sm font-medium text-black">
                            <img loading="lazy" src="{{ asset('assets/images/icons/icon2.png') }}" alt="service icon"
                                width="64" height="64"> World’s best intellectual property protection services are
                            provided for a fixed charge for those who are short on time.
                        </li>
                        <li
                            class="flex items-center gap-3 mb-4 xl:mb-3 4xl:mb-10 font-hind 4xl:text-xl xl:text-lg text-sm font-medium text-black">
                            <img loading="lazy" src="{{ asset('assets/images/icons/icon3.png') }}" alt="service icon"
                                width="64" height="64"> We speed up the adoption of your innovations.
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <img loading="lazy" src="{{ asset('assets/images/banners/about-bg3.png') }}" alt="peoples" width="1920"
            height="772" class=" object-fit-contain hidden xl:block w-full h-auto mx-auto absolute  right-0 top-0 -z-1">




    </section>
    {{-- About Sec Section End --}}




    <section class="bg-primary xl:mt-10 4xl:mt-20 overflow-hidden">
        <div class="my-auto mx-5 ml-5 xl:ml-19 4xl:ml-23 xl:mr-0 max-w-ful">
            <div class="row items-center space-y-7 xl:space-y-0 justify-between">

                {{-- LEFT CONTENT --}}
                <div class="w-full lg:w-5/12 4xl:w-4/12">
                    <h2 class="section-title">Here’s What We Offer</h2>

                    <p class="text-black font-normal mb-2 font-hind">
                        From Trademark registrations, monitoring, renewals and more, TMC Registry offers a plethora of
                        services focused with one mission and vision only; to secure your brand and set your business up for
                        success. Whether you need to trademark you brand name or even trademark your

                    </p>

                    <p class="text-black font-normal font-hind">
                        company, We're here to help clients from all 50 states in the U.S. and from countries all over the
                        globe. So, no matter where you're from, we've got your back!
                    </p>

                    <a href="#" class="btn btn-primary mt-6 inline-block">
                        Start My Trademark Registration
                    </a>
                </div>

                {{-- RIGHT SLIDER --}}
                <div class="w-full lg:w-7/12 4xl:w-7/12">
                    <div class="swiper services-swiper">
                        <div class="swiper-wrapper">

                            {{-- SLIDE 1 --}}
                            <div class="swiper-slide">
                                <div class="grid grid-cols-1 gap-5">
                                    <article
                                        class="group relative rounded-lg border-1 border-secondary flex flex-col bg-primary hover:shadow-xl shadow-secondary-80 hover:bg-white pt-4 pb-0 px-4 transition-all duration-300">

                                        <img loading="lazy" src="{{ asset('assets/images/icons/icon4.png') }}"
                                            alt="service icon" width="64" height="64">

                                        <h3 class="text-[clamp(19px,1.2vw,22px)] text-black font-bold my-5">
                                            Comprehensive Trademark Search
                                        </h3>

                                        <p class="text-black mb-0">
                                            Once you've filled out our engagement form, we'll do a thorough trademark search
                                            for you. This search covers federal, state, and
                                            common law trademarks. To make sure we cover all bases, we use renowned
                                            trademark search software's used by major law firms worldwide. This way, we can
                                            spot any
                                            potential problems with your desired
                                            trademark before filing it. So, you're in safe
                                            hands!
                                        </p>

                                        <!-- BUTTON -->
                                        <div
                                            class="mt-auto text-end transform translate-y-5 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
                                            <a href="#"
                                                class="btn btn-primary px-4 py-1 inline-block group-hover:shadow-lg group-hover:shadow-secondary/80 transition-shadow duration-300 ease-in-out">
                                                Consult Now
                                            </a>
                                        </div>

                                    </article>


                                </div>
                            </div>


                            {{-- SLIDE 2 --}}
                            <div class="swiper-slide">
                                <div class="grid grid-cols-1 gap-5">
                                    <article
                                        class="group relative rounded-lg border-1 border-secondary flex flex-col bg-primary hover:shadow-xl shadow-secondary-80 hover:bg-white pt-4 pb-0 px-4 transition-all duration-300">

                                        <img loading="lazy" src="{{ asset('assets/images/icons/icon4.png') }}"
                                            alt="service icon" width="64" height="64">

                                        <h3 class="text-[clamp(19px,1.2vw,22px)] text-black font-bold my-5">
                                            Comprehensive Trademark Search
                                        </h3>

                                        <p class="text-black mb-0">
                                            Once you've filled out our engagement form, we'll do a thorough trademark search
                                            for you. This search covers federal, state, and
                                            common law trademarks. To make sure we cover all bases, we use renowned
                                            trademark search software's used by major law firms worldwide. This way, we can
                                            spot any
                                            potential problems with your desired
                                            trademark before filing it. So, you're in safe
                                            hands!
                                        </p>

                                        <!-- BUTTON -->
                                        <div
                                            class="mt-auto text-end transform translate-y-5 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
                                            <a href="#"
                                                class="btn btn-primary px-4 py-1 inline-block group-hover:shadow-lg group-hover:shadow-secondary/80 transition-shadow duration-300 ease-in-out">
                                                Consult Now
                                            </a>
                                        </div>

                                    </article>


                                </div>
                            </div>
                            {{-- SLIDE 3 --}}
                            <div class="swiper-slide">
                                <div class="grid grid-cols-1 gap-5">
                                    <article
                                        class="group relative rounded-lg border-1 border-secondary flex flex-col bg-primary hover:shadow-xl shadow-secondary-80 hover:bg-white pt-4 pb-0 px-4 transition-all duration-300">

                                        <img loading="lazy" src="{{ asset('assets/images/icons/icon4.png') }}"
                                            alt="service icon" width="64" height="64">

                                        <h3 class="text-[clamp(19px,1.2vw,22px)] text-black font-bold my-5">
                                            Comprehensive Trademark Search
                                        </h3>

                                        <p class="text-black mb-0">
                                            Once you've filled out our engagement form, we'll do a thorough trademark search
                                            for you. This search covers federal, state, and
                                            common law trademarks. To make sure we cover all bases, we use renowned
                                            trademark search software's used by major law firms worldwide. This way, we can
                                            spot any
                                            potential problems with your desired
                                            trademark before filing it. So, you're in safe
                                            hands!
                                        </p>

                                        <!-- BUTTON -->
                                        <div
                                            class="mt-auto text-end transform translate-y-5 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
                                            <a href="#"
                                                class="btn btn-primary px-4 py-1 inline-block group-hover:shadow-lg group-hover:shadow-secondary/80 transition-shadow duration-300 ease-in-out">
                                                Consult Now
                                            </a>
                                        </div>

                                    </article>


                                </div>
                            </div>
                            {{-- SLIDE 4 --}}
                            <div class="swiper-slide">
                                <div class="grid grid-cols-1 gap-5">
                                    <article
                                        class="group relative rounded-lg border-1 border-secondary flex flex-col bg-primary hover:shadow-xl shadow-secondary-80 hover:bg-white pt-4 pb-0 px-4 transition-all duration-300">

                                        <img loading="lazy" src="{{ asset('assets/images/icons/icon4.png') }}"
                                            alt="service icon" width="64" height="64">

                                        <h3 class="text-[clamp(19px,1.2vw,22px)] text-black font-bold my-5">
                                            Comprehensive Trademark Search
                                        </h3>

                                        <p class="text-black mb-0">
                                            Once you've filled out our engagement form, we'll do a thorough trademark search
                                            for you. This search covers federal, state, and
                                            common law trademarks. To make sure we cover all bases, we use renowned
                                            trademark search software's used by major law firms worldwide. This way, we can
                                            spot any
                                            potential problems with your desired
                                            trademark before filing it. So, you're in safe
                                            hands!
                                        </p>

                                        <!-- BUTTON -->
                                        <div
                                            class="mt-auto text-end transform translate-y-5 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
                                            <a href="#"
                                                class="btn btn-primary px-4 py-1 inline-block group-hover:shadow-lg group-hover:shadow-secondary/80 transition-shadow duration-300 ease-in-out">
                                                Consult Now
                                            </a>
                                        </div>

                                    </article>


                                </div>
                            </div>
                            {{-- SLIDE 5 --}}
                            <div class="swiper-slide">
                                <div class="grid grid-cols-1 gap-5">
                                    <article
                                        class="group relative rounded-lg border-1 border-secondary flex flex-col bg-primary hover:shadow-xl shadow-secondary-80 hover:bg-white pt-4 pb-0 px-4 transition-all duration-300">

                                        <img loading="lazy" src="{{ asset('assets/images/icons/icon4.png') }}"
                                            alt="service icon" width="64" height="64">

                                        <h3 class="text-[clamp(19px,1.2vw,22px)] text-black font-bold my-5">
                                            Comprehensive Trademark Search
                                        </h3>

                                        <p class="text-black mb-0">
                                            Once you've filled out our engagement form, we'll do a thorough trademark search
                                            for you. This search covers federal, state, and
                                            common law trademarks. To make sure we cover all bases, we use renowned
                                            trademark search software's used by major law firms worldwide. This way, we can
                                            spot any
                                            potential problems with your desired
                                            trademark before filing it. So, you're in safe
                                            hands!
                                        </p>

                                        <!-- BUTTON -->
                                        <div
                                            class="mt-auto text-end transform translate-y-5 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
                                            <a href="#"
                                                class="btn btn-primary px-4 py-1 inline-block group-hover:shadow-lg group-hover:shadow-secondary/80 transition-shadow duration-300 ease-in-out">
                                                Consult Now
                                            </a>
                                        </div>

                                    </article>


                                </div>
                            </div>
                            {{-- SLIDE 6 --}}
                            <div class="swiper-slide">
                                <div class="grid grid-cols-1 gap-5">
                                    <article
                                        class="group relative rounded-lg border-1 border-secondary flex flex-col bg-primary hover:shadow-xl shadow-secondary-80 hover:bg-white pt-4 pb-0 px-4 transition-all duration-300">

                                        <img loading="lazy" src="{{ asset('assets/images/icons/icon4.png') }}"
                                            alt="service icon" width="64" height="64">

                                        <h3 class="text-[clamp(19px,1.2vw,22px)] text-black font-bold my-5">
                                            Comprehensive Trademark Search
                                        </h3>

                                        <p class="text-black mb-0">
                                            Once you've filled out our engagement form, we'll do a thorough trademark search
                                            for you. This search covers federal, state, and
                                            common law trademarks. To make sure we cover all bases, we use renowned
                                            trademark search software's used by major law firms worldwide. This way, we can
                                            spot any
                                            potential problems with your desired
                                            trademark before filing it. So, you're in safe
                                            hands!
                                        </p>

                                        <!-- BUTTON -->
                                        <div
                                            class="mt-auto text-end transform translate-y-5 group-hover:translate-y-0 transition-all duration-300 ease-in-out">
                                            <a href="#"
                                                class="btn btn-primary px-4 py-1 inline-block group-hover:shadow-lg group-hover:shadow-secondary/80 transition-shadow duration-300 ease-in-out">
                                                Consult Now
                                            </a>
                                        </div>

                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="services-pagination mt-10 flex justify-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-[#BEE7FF] lg:bg-[linear-gradient(162deg,_rgba(190,231,255,1)_0%,_rgba(255,255,255,1)_49%)]">
        <div class="container">
            <div class="text-center mb-20 xl:mb-0">
                <span class="font-hind font-semibold text-secondary text-2xl">HOW IT WORKS?</span>
                <h2 class="section-title">Our easy Trademark Registration Process</h2>
                <p class="text-black">Register your trademark easily in just three simple online steps - it’s never been
                    simpler!</p>
            </div>
            <div class="max-w-[56vw] mx-auto hidden xl:block">
                <img loading="lazy" src="{{ asset('assets/images/icons/line.svg') }}" alt="line icon" width="1000"
                    height="111" class="text-center mx-auto w-full">
            </div>
            <div class="row justify-around flex-warp">
                <div class="w-full lg:w-4/12 4xl:w-3/12">
                    <div
                        class="bg-primary rounded-xl border-secondary border-1 py-10 px-7 text-center mx-auto relative hover:shadow-2xl shadow-secondary-80 transition-all duration-300">
                        <span
                            class="absolute top-5 left-3 leading-none text-[200px] font-hind z-0 font-extrabold text-white">01</span>
                        <img loading="lazy" src="{{ asset('assets/images/icons/icon5.png') }}" alt="service icon"
                            width="100" height="100" class="inline absolute -top-14 left-1/2 -translate-x-1/2"><br>
                        <div class="relative z-1">
                            <span class="text-black font-montserrat font-bold text-lg 4xl:text-xl my-6 block">Details About
                                Your <br>Trademark</span>
                            <p class="font-hind text-black mb-0">Please provide us with information regarding your
                                trademark, including your trademark, including the brand name, slogan, or logo.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 4xl:w-3/12">
                    <div
                        class="bg-primary rounded-xl border-secondary border-1 py-10 px-7 text-center mx-auto relative hover:shadow-2xl shadow-secondary-80 transition-all duration-300">
                        <span
                            class="absolute top-5 left-3 leading-none text-[200px] font-hind z-0 font-extrabold text-white">02</span>
                        <img loading="lazy" src="{{ asset('assets/images/icons/icon6.png') }}" alt="service icon"
                            width="100" height="100" class="inline absolute -top-14 left-1/2 -translate-x-1/2"><br>
                        <div class="relative z-1">
                            <span class="text-black font-montserrat font-bold text-lg 4xl:text-xl my-6 block">Comprehensive
                                <br>research</span>
                            <p class="font-hind text-black mb-0">After obtaining the information, our team performs a
                                comprehensive search to verify its accessibility.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 4xl:w-3/12">
                    <div
                        class="bg-primary rounded-xl border-secondary border-1 py-10 px-7 text-center mx-auto relative hover:shadow-2xl shadow-secondary-80 transition-all duration-300">
                        <span
                            class="absolute top-5 left-3 leading-none text-[200px] font-hind z-0 font-extrabold text-white">03</span>
                        <img loading="lazy" src="{{ asset('assets/images/icons/icon7.png') }}" alt="service icon"
                            width="100" height="100" class="inline absolute -top-14 left-1/2 -translate-x-1/2"><br>
                        <div class="relative z-1">
                            <span class="text-black font-montserrat font-bold text-lg 4xl:text-xl my-6 block">File
                                application <br>with the USPTO</span>
                            <p class="font-hind text-black mb-0">Please provide us with information regarding your
                                trademark, including your trademark, including the brand name, slogan, or logo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section {{-- style="background-image: url('{{ asset('assets/images/banners/packages-bg.png') }}');" --}}
        class="bg-primary bg-[linear-gradient(172deg,_rgba(190,231,255,1)_0%,_rgba(255,255,255,1)_49%)] lg:bg-[url('/assets/images/banners/packages-bg.png')] bg-no-repeat bg-center bg-cover">
        <div class="cus-container">
            <h2 class="section-title text-center mb-20">Our easy Trademark Registration Process</h2>
            <div class="row justify-center gap-0 4xl:gap-7">
                <div class="w-full lg:w-4/12 4xl:w-3/12">
                    <div
                        class="bg-white border-1 border-black rounded-2xl hover:-translate-y-5 transition-transform duration-500 hover:shadow-2xl hover:shadow-secondary-80">
                        <div class="p-7 4xl:p-10 w-full xl:max-w-[431px]">
                            <strong
                                class="font-montserrat font-extrabold text-2xl text-secondary mb-3 inline-block">Platinum</strong>
                            <h3 class="font-montserrat font-extrabold text-7xl text-black mb-0">$49</h3>
                            <span class="font-montserrat text-2xl font-light text-black mb-5 inline-block">+ USPTO Filing
                                Fee</span>
                            <ul
                                class="*:font-hind text-black *:text-sm 4xl:*:text-xl *:border-b *:border-gray-400 *:py-3 *:capitalize">
                                <li>Case review</li>
                                <li>Case Preparation</li>
                                <li>Case Filing </li>
                                <li>Trademark Alert</li>
                                <li>Direct Hit Search</li>
                                <li>100% satisfaction Guarantee</li>
                                <li>Refusal risk meter</li>
                            </ul>

                        </div>
                        <div class="flex gap-3 justify-center pb-7 px-7 4xl:px-0 lg:flex-no-wrap flex-wrap">
                            <button type="button"
                                class="btn btn-primary text-[12px] hover:bg-transparent border-secondary border-1 hover:border-secondary hover:border hover:text-secondary w-full 4xl:w-auto">Start
                                My Trademark
                                Registration</button>
                            <button type="button" class="btn btn-outline-black text-[12px] w-full 4xl:w-auto">Consult
                                Now</button>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 4xl:w-3/12">
                    <div
                        class="bg-white border-1 border-secondary rounded-2xl hover:-translate-y-5 transition-transform duration-500 hover:shadow-2xl hover:shadow-secondary-80">
                        <div class="p-7 4xl:p-10 w-full xl:max-w-[431px]">
                            <strong
                                class="font-montserrat font-extrabold text-2xl text-secondary mb-3 inline-block">Diamond</strong>
                            <h3 class="font-montserrat font-extrabold text-7xl text-black mb-0">$199</h3>
                            <span class="font-montserrat text-2xl font-light text-black mb-5 inline-block">+ USPTO Filing
                                Fee</span>
                            <ul
                                class="*:font-hind text-black *:text-sm 4xl:*:text-xl *:border-b *:border-gray-400 *:py-1 *:capitalize">
                                <li>Case review</li>
                                <li>Case Preparation</li>
                                <li>Case Filing </li>
                                <li>Trademark Alert</li>
                                <li>Trademark Secured</li>
                                <li>Direct Hit Search</li>
                                <li>100% Satisfaction guarantee</li>
                                <li>Refusal Risk Meter</li>
                                <li>Trademark Monitoring</li>
                                <li>Complete Documentation</li>
                                <li>Digital File</li>
                                <li>Dedicated Case Manager</li>
                            </ul>

                        </div>
                        <div class="flex gap-3 justify-center pb-7 px-7 4xl:px-0 lg:flex-no-wrap flex-wrap">
                            <button type="button"
                                class="btn btn-primary text-[12px] hover:bg-transparent border-secondary border-1 hover:border-secondary hover:border hover:text-secondary w-full 4xl:w-auto">Start
                                My Trademark
                                Registration</button>
                            <button type="button" class="btn btn-outline-black text-[12px] w-full 4xl:w-auto">Consult
                                Now</button>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 4xl:w-5/12">
                    <div
                        class="bg-black border-1 border-secondary rounded-2xl hover:-translate-y-5 transition-transform duration-500 hover:shadow-2xl hover:shadow-secondary-80">
                        <div class="p-7 4xl:p-10 w-full ">
                            <strong
                                class="font-montserrat font-extrabold text-2xl text-secondary mb-3 inline-block">Elite</strong>
                            <h3 class="font-montserrat font-extrabold text-7xl text-white mb-0">$349</h3>
                            <span class="font-montserrat text-2xl font-light text-white mb-5 inline-block">+ USPTO Filing
                                Fee</span>
                            <div class="flex gap-0 xl:gap-3 4xl:gap-10 flex-col xl:flex-row">
                                <ul
                                    class="*:font-hind *:text-white *:text-sm 4xl:*:text-xl *:border-b *:border-gray-400 *:py-1 4xl:*:py-3 *:capitalize w-full">
                                    <li>Case review</li>
                                    <li>Case Preparation</li>
                                    <li>Case Filing </li>
                                    <li>Trademark Alert</li>
                                    <li>Direct Hit Search</li>
                                    <li>100% satisfaction Guarantee</li>
                                </ul>
                                <ul
                                    class="*:font-hind *:text-white *:text-sm 4xl:*:text-xl *:border-b *:border-gray-400 *:py-1 4xl:*:py-3 *:capitalize w-full">
                                    <li>Trademark Monitoring</li>
                                    <li>Complete Documentation</li>
                                    <li>Digital File </li>
                                    <li>Dedicated Case Manager</li>
                                    <li>100% Approval Guarantee</li>
                                    <li>Refusal risk meter</li>
                                </ul>

                            </div>
                            <ul
                                class="*:font-hind *:text-white *:text-sm 4xl:*:text-xl *:border-b *:border-gray-400 *:py-1 4xl:*:py-3 *:capitalize">
                                <li>Comprehensive Trademark Search Report (Federal & State)</li>
                            </ul>
                        </div>
                        <div class="flex gap-3 justify-center pb-7 px-7 4xl:px-0 lg:flex-no-wrap flex-wrap">
                            <button type="button"
                                class="btn btn-primary hover:bg-transparent px-20 border-secondary border-1 hover:border-secondary hover:border hover:text-secondary text-[12px] 4xl:text-lg w-full 4xl:w-auto">Start
                                My Trademark
                                Registration</button>
                            <button type="button"
                                class="btn btn-outline-white text-[12px] 4xl:text-lg w-full 4xl:w-auto hover:text-black">Consult
                                Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="bg-secondary">
        <div class="text-center ">
            <h2 class="section-title text-white">Get Your Trademark registered Now</h2>
            <p class="text-white text-xl my-4">Get your brand protected with USPTO trademark registration through us.</p>
            <div class="flex gap-3 mt-4 flex-wrap justify-center">
                <button type="button"
                    class="btn btn-primary bg-black border-1 border-white hover:border-secondary hover:border-1">Start My
                    Trademark Registration</button>
                <button type="button" class="btn btn-outline-white hover:text-black">Consult Now</button>
            </div>
        </div>
    </section>




    <section
        class="bg-black bg-[linear-gradient(153deg,#1a6996_0%,#000000_71%)] lg:bg-[url('/assets/images/banners/packages-bg.png')] bg-no-repeat bg-center bg-cover">

        <div class="cus-container">
            <div class="text-center">
                <h2 class="section-title text-white">Our Customers Are Always Right</h2>
                <p class="text-white text-xl mt-4 mb-10">Our experienced attorneys helped thousands of clients with custom
                    intellectual property solution, enabling them to be much more <br>competitive in business than ever
                    before
                </p>
            </div>
            <div class="row">
                <div class="w-full ">
                    <div class="swiper testimonilas-swiper">
                        <div class="swiper-wrapper">

                            {{-- SLIDE 1 --}}
                            <div class="swiper-slide">
                                <div class="grid grid-cols-1 gap-5">
                                    <article
                                        class="group relative rounded-3xl border-1 border-white flex flex-col bg-transparent hover:shadow-xl shadow-secondary-80 hover:transform hover:translate-y-5 hover:shadow-secondary/40 p-5 transition-all duration-300">
                                        <h3 class="text-[clamp(19px,1.2vw,32px)] text-white font-bold my-5">
                                            You have right place
                                        </h3>
                                        <p class="text-white text-lg leading-6">
                                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <img loading="lazy" src="{{ asset('assets/images/icons/star.png') }}"
                                            alt="service icon" width="182" height="29" class="mb-5">
                                        <span class="text-2xl font-semibold text-white">Lorem Ipsum</span>
                                        <small class="text-white font-hind">@loremipsumtext</small>
                                    </article>
                                </div>
                            </div>


                            {{-- SLIDE 2 --}}
                            <div class="swiper-slide">
                                <div class="grid grid-cols-1 gap-5">
                                    <article
                                        class="group relative rounded-3xl border-1 border-white flex flex-col bg-transparent hover:shadow-xl shadow-secondary-80 hover:transform hover:translate-y-5 hover:shadow-secondary/40 p-5 transition-all duration-300">
                                        <h3 class="text-[clamp(19px,1.2vw,32px)] text-white font-bold my-5">
                                            You have right place
                                        </h3>
                                        <p class="text-white text-lg leading-6">
                                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <img loading="lazy" src="{{ asset('assets/images/icons/star.png') }}"
                                            alt="service icon" width="182" height="29" class="mb-5">
                                        <span class="text-2xl font-semibold text-white">Lorem Ipsum</span>
                                        <small class="text-white font-hind">@loremipsumtext</small>
                                    </article>
                                </div>
                            </div>
                            {{-- SLIDE 3 --}}
                            <div class="swiper-slide">
                                <div class="grid grid-cols-1 gap-5">
                                    <article
                                        class="group relative rounded-3xl border-1 border-white flex flex-col bg-transparent hover:shadow-xl shadow-secondary-80 hover:transform hover:translate-y-5 hover:shadow-secondary/40 p-5 transition-all duration-300">
                                        <h3 class="text-[clamp(19px,1.2vw,32px)] text-white font-bold my-5">
                                            You have right place
                                        </h3>
                                        <p class="text-white text-lg leading-6">
                                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <img loading="lazy" src="{{ asset('assets/images/icons/star.png') }}"
                                            alt="service icon" width="182" height="29" class="mb-5">
                                        <span class="text-2xl font-semibold text-white">Lorem Ipsum</span>
                                        <small class="text-white font-hind">@loremipsumtext</small>
                                    </article>
                                </div>
                            </div>
                            {{-- SLIDE 4 --}}
                            <div class="swiper-slide">
                                <div class="grid grid-cols-1 gap-5">
                                    <article
                                        class="group relative rounded-3xl border-1 border-white flex flex-col bg-transparent hover:shadow-xl shadow-secondary-80 hover:transform hover:translate-y-5 hover:shadow-secondary/40 p-5 transition-all duration-300">
                                        <h3 class="text-[clamp(19px,1.2vw,32px)] text-white font-bold my-5">
                                            You have right place
                                        </h3>
                                        <p class="text-white text-lg leading-6">
                                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <img loading="lazy" src="{{ asset('assets/images/icons/star.png') }}"
                                            alt="service icon" width="182" height="29" class="mb-5">
                                        <span class="text-2xl font-semibold text-white">Lorem Ipsum</span>
                                        <small class="text-white font-hind">@loremipsumtext</small>
                                    </article>
                                </div>
                            </div>
                            {{-- SLIDE 5 --}}
                            <div class="swiper-slide">
                                <div class="grid grid-cols-1 gap-5">
                                    <article
                                        class="group relative rounded-3xl border-1 border-white flex flex-col bg-transparent hover:shadow-xl shadow-secondary-80 hover:transform hover:translate-y-5 hover:shadow-secondary/40 p-5 transition-all duration-300">
                                        <h3 class="text-[clamp(19px,1.2vw,32px)] text-white font-bold my-5">
                                            You have right place
                                        </h3>
                                        <p class="text-white text-lg leading-6">
                                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <img loading="lazy" src="{{ asset('assets/images/icons/star.png') }}"
                                            alt="service icon" width="182" height="29" class="mb-5">
                                        <span class="text-2xl font-semibold text-white">Lorem Ipsum</span>
                                        <small class="text-white font-hind">@loremipsumtext</small>
                                    </article>
                                </div>
                            </div>
                            {{-- SLIDE 6 --}}
                            <div class="swiper-slide">
                                <div class="grid grid-cols-1 gap-5">
                                    <article
                                        class="group relative rounded-3xl border-1 border-white flex flex-col bg-transparent hover:shadow-xl shadow-secondary-80 hover:transform hover:translate-y-5 hover:shadow-secondary/40 p-5 transition-all duration-300">
                                        <h3 class="text-[clamp(19px,1.2vw,32px)] text-white font-bold my-5">
                                            You have right place
                                        </h3>
                                        <p class="text-white text-lg leading-6">
                                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.
                                        </p>
                                        <img loading="lazy" src="{{ asset('assets/images/icons/star.png') }}"
                                            alt="service icon" width="182" height="29" class="mb-5">
                                        <span class="text-2xl font-semibold text-white">Lorem Ipsum</span>
                                        <small class="text-white font-hind">@loremipsumtext</small>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="testimonilas-pagination mt-10 xl:mt-20 flex justify-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative">
        <div class="cus-container">
            <div class=" mx-auto text-center mb-5 lg:mb-10">
                <h2 class="section-title leading-tight font-bold text-black">Frequently Asked Question</h2>

            </div>

            <div class="row ">
                <div class="w-full lg:w-7/12">
                    <div id="accordionFlushExample">
                        {{-- 1 --}}
                        <div class="rounded-none border border-e-0 border-s-0 border-t-0 border-gray-400">
                            <h2 class="mb-0" id="flush-heading1">
                                <button
                                    class="group relative flex w-full items-center rounded-none border-0 px-5 py-4 text-left text-base lg:text-lg 4xl:text-2xl text-black font-semibold transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:text-[#1D1616]"
                                    type="button" data-twe-collapse-init data-twe-target="#flush-collapse1"
                                    aria-expanded="false" aria-controls="flush-collapse1">
                                   What Are the Expenses of Registering a Trademark?
                                    <span
                                        class="-me-1 ms-auto shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:size-[clamp(20px,5vw,25px)] text-[#1D1616] p-[4px] rounded-full border border-[#1D1616] flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </button>
                            </h2>
                            <div id="flush-collapse1" class="!visible border-0" data-twe-collapse-item
                                data-twe-collapse-show aria-labelledby="flush-heading1"
                                data-twe-parent="#accordionFlushExample">
                                <div class="px-5 pb-4 pt-0">
                                    <p class="text-black mb-0">Depending on the type of trademark and the number of classes you are applying for, the price varies.</p>
                                </div>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="rounded-none border border-e-0 border-s-0 border-t-0 border-gray-400">
                            <h2 class="mb-0" id="flush-heading2">
                                <button
                                    class="group relative flex w-full items-center rounded-none border-0 px-5 py-4 text-left text-base lg:text-lg 4xl:text-2xl text-black font-semibold transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:text-[#1D1616]"
                                    type="button" data-twe-collapse-init data-twe-collapse-collapsed
                                    data-twe-target="#flush-collapse2" aria-expanded="false"
                                    aria-controls="flush-collapse2">
                                    Is It Possible to Trademark a Company Name?
                                    <span
                                        class="-me-1 ms-auto shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:size-[clamp(20px,5vw,25px)] text-[#1D1616] p-[4px] rounded-full border border-[#1D1616] flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </button>
                            </h2>
                            <div id="flush-collapse2" class="!visible hidden border-0" data-twe-collapse-item
                                aria-labelledby="flush-heading2" data-twe-parent="#accordionFlushExample">
                                <div class="px-5 pb-4 pt-0">
                                    <p class="text-black mb-0">Depending on the type of trademark and the number of classes you are applying for, the price varies.</p>
                                </div>
                            </div>
                        </div>
                        {{-- 3 --}}
                        <div class="rounded-none border border-e-0 border-s-0 border-t-0 border-gray-400">
                            <h2 class="mb-0" id="flush-heading3">
                                <button
                                    class="group relative flex w-full items-center rounded-none border-0 px-5 py-4 text-left text-base lg:text-lg 4xl:text-2xl text-black font-semibold transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:text-[#1D1616]"
                                    type="button" data-twe-collapse-init data-twe-collapse-collapsed
                                    data-twe-target="#flush-collapse3" aria-expanded="false"
                                    aria-controls="flush-collapse3">
                                   Is It Possible to Trademark a Company Name?
                                    <span
                                        class="-me-1 ms-auto shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:size-[clamp(20px,5vw,25px)] text-[#1D1616] p-[4px] rounded-full border border-[#1D1616] flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </button>
                            </h2>
                            <div id="flush-collapse3" class="!visible hidden border-0" data-twe-collapse-item
                                aria-labelledby="flush-heading3" data-twe-parent="#accordionFlushExample">
                                <div class="px-5 pb-4 pt-0">
                                    <p class="text-black mb-0">Depending on the type of trademark and the number of classes you are applying for, the price varies.</p>
                                </div>
                            </div>
                        </div>
                        {{-- 4 --}}
                        <div class="rounded-none border border-e-0 border-s-0 border-t-0 border-gray-400">
                            <h2 class="mb-0" id="flush-heading4">
                                <button
                                    class="group relative flex w-full items-center rounded-none border-0 px-5 py-4 text-left text-base lg:text-lg 4xl:text-2xl text-black font-semibold transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:text-[#1D1616]"
                                    type="button" data-twe-collapse-init data-twe-collapse-collapsed
                                    data-twe-target="#flush-collapse4" aria-expanded="false"
                                    aria-controls="flush-collapse4">
                                   Is It Possible to Trademark a Company Name?
                                    <span
                                        class="-me-1 ms-auto shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:size-[clamp(20px,5vw,25px)] text-[#1D1616] p-[4px] rounded-full border border-[#1D1616] flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </button>
                            </h2>
                            <div id="flush-collapse4" class="!visible hidden border-0" data-twe-collapse-item
                                aria-labelledby="flush-heading4" data-twe-parent="#accordionFlushExample">
                                <div class="px-5 pb-4 pt-0">
                                    <p class="text-black mb-0"> Depending on the type of trademark and the number of classes you are applying for, the price varies.</p>
                                </div>
                            </div>
                        </div>
                        {{-- 5 --}}
                        <div class="rounded-none border border-e-0 border-s-0 border-t-0 border-gray-400">
                            <h2 class="mb-0" id="flush-heading5">
                                <button
                                    class="group relative flex w-full items-center rounded-none border-0 px-5 py-4 text-left text-base lg:text-lg 4xl:text-2xl text-black font-semibold transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:text-[#1D1616]"
                                    type="button" data-twe-collapse-init data-twe-collapse-collapsed
                                    data-twe-target="#flush-collapse5" aria-expanded="false"
                                    aria-controls="flush-collapse5">
                                   Is It Possible to Trademark a Company Name?
                                    <span
                                        class="-me-1 ms-auto shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:size-[clamp(20px,5vw,25px)] text-[#1D1616] p-[4px] rounded-full border border-[#1D1616] flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </button>
                            </h2>
                            <div id="flush-collapse5" class="!visible hidden border-0" data-twe-collapse-item
                                aria-labelledby="flush-heading5" data-twe-parent="#accordionFlushExample">
                                <div class="px-5 pb-4 pt-0">
                                    <p class="text-black mb-0">Depending on the type of trademark and the number of classes you are applying for, the price varies.</p>
                                </div>
                            </div>
                        </div>
                        {{-- 6 --}}
                        <div class="rounded-none border border-e-0 border-s-0 border-t-0 border-gray-400">
                            <h2 class="mb-0" id="flush-heading6">
                                <button
                                    class="group relative flex w-full items-center rounded-none border-0 px-5 py-4 text-left text-base lg:text-lg 4xl:text-2xl text-black font-semibold transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:text-[#1D1616]"
                                    type="button" data-twe-collapse-init data-twe-collapse-collapsed
                                    data-twe-target="#flush-collapse6" aria-expanded="false"
                                    aria-controls="flush-collapse6">
                                  Is It Possible to Trademark a Company Name?
                                    <span
                                        class="-me-1 ms-auto shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:size-[clamp(20px,5vw,25px)] text-[#1D1616] p-[4px] rounded-full border border-[#1D1616] flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </button>
                            </h2>
                            <div id="flush-collapse6" class="!visible hidden border-0" data-twe-collapse-item
                                aria-labelledby="flush-heading6" data-twe-parent="#accordionFlushExample">
                                <div class="px-5 pb-4 pt-0">
                                    <p class="text-black mb-0">Depending on the type of trademark and the number of classes you are applying for, the price varies.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="w-full lg:w-5/12 absolute right-0 hidden lg:block pe-0">
                    <img loading="lazy" src="{{ asset('assets/images/faq-img.png') }}" alt="people icon" width="764"
                        height="566" class="w-full h-[466px] object-cover">

                </div>
            </div>


        </div>

    </section>
@endsection
