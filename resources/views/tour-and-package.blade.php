@extends('dashboard.layouts.main')
@section('container.main')
    <!-- hero section -->
    <section id="heroSection"
        class="bg-[url('{{url('images/img2.jpg')}}')] relative bg-no-repeat bg-center bg-cover pt-[110px] pb-[210px] lg:pb-[100px] lg:py-[160px]">
        <div class="text-center">
            <h2 class="lg:text-[48px] text-white text-[24px] font-semibold -mt-1 lg:-mt-3">
                Tour & Package
            </h2>
        </div>
        <div
            class="bg-white absolute -bottom-10 left-1/2 -translate-x-1/2 mt-10 shadow-md rounded-2xl px-4 lg:px-6 py-4 lg:flex justify-between items-center gap-6 w-[75%] lg:w-[65%]">
            <!-- Tour Type -->

            <div>
                <h1 class="text-[11px] text-[#737373] font-medium w-full">
                    Tour Type
                </h1>
                <div class="flex items-center gap-1">
                    <i class="fa-solid fa-location-dot text-[12px] text-gray-400"></i>
                    <select class="font-medium w-full text-[12px] focus:outline-none">
                        <option>Select Type</option>
                        <option>Adventure</option>
                        <option>City Tour</option>
                        <option>Beach</option>
                    </select>
                </div>
            </div>

            <!-- Divider -->
            <div class="w-px h-6 bg-gray-200 hidden lg:block"></div>

            <!-- Date -->
            <div class="mt-2 lg:mt-0">
                <h1 class="text-[11px] text-[#737373] font-medium">Check in</h1>

                <div class="flex items-center gap-1">
                    <i class="fa-solid fa-calendar text-[12px] text-gray-400"></i>
                    <select class="font-medium w-full text-[12px] w-full focus:outline-none">
                        <option>02 Janua</option>
                        <option>03 Janua</option>
                        <option>04 Janua</option>
                    </select>
                </div>
            </div>
            <!-- Divider -->
            <div class="w-px h-6 bg-gray-200 hidden lg:block"></div>

            <!-- Date -->
            <div class="mt-3 lg:mt-0">
                <h1 class="text-[11px] text-[#737373] font-medium">Check out</h1>

                <div class="flex items-center gap-1">
                    <i class="fa-solid fa-calendar text-[12px] text-gray-400"></i>
                    <select class="font-medium text-[12px] w-full focus:outline-none">
                        <option>02 Janua</option>
                        <option>03 Janua</option>
                        <option>04 Janua</option>
                    </select>
                </div>
            </div>

            <!-- Divider -->
            <div class="w-px h-6 bg-gray-200 hidden lg:block"></div>

            <!-- Guest -->
            <div class="mt-3 lg:mt-0">
                <h1 class="text-[11px] text-[#737373] font-medium">Guest</h1>

                <div class="flex items-center gap-1">
                    <i class="fa-solid text-[12px] fa-user text-gray-400"></i>
                    <select class="font-medium text-[12px] w-full focus:outline-none">
                        <option>2 adults, 2 children</option>
                        <option>1 adult</option>
                        <option>2 adults</option>
                        <option>Family Pack</option>
                    </select>
                </div>
            </div>
            <!-- Search Button -->
            <button
                class="lg:ml-4 mt-4 lg:mt-0 flex items-center w-full lg:w-auto text-[12px] lg:text-[14px] gap-2 bg-[var(--primary-color)] text-white px-6 lg:py-2 py-1.5 rounded-full font-medium">
                <i class="fa-solid fa-magnifying-glass text-[11px] lg:text-[12px]"></i>
                Search
            </button>
        </div>
    </section>

    <section id="offerSlider" class="lg:py-[100px] relative py-[60px] hidden lg:block px-6 lg:px-14">
        <div class="text-center">
            <h2 class="lg:text-[38px] text-[20px] font-medium">
                Your First Day in the Pink City
            </h2>
            <p class="font-medium lg:text-[16px] text-[12px]">
                Walk through majestic forts, grand palaces, and timeless stories of
                Rajasthan’s royal past.
            </p>
        </div>

        <!-- Navigation -->
        <div
            class="swiper-button-next absolute top-1/2 translate-y-1/2 right-10 !w-14 !h-14 rounded-full bg-[#8C7858] hidden lg:flex items-center justify-center text-white shadow-md cursor-pointer">
        </div>

        <!-- Custom Prev Button -->
        <div
            class="swiper-button-prev !top-1/2 translate-y-1/2 left-5 !w-14 !h-14 rounded-full bg-[#8C7858] lg:flex hidden items-center justify-center text-white shadow-md cursor-pointer">
        </div>
        <!-- Slider Wrapper -->
        <div id="offerSwiper" class="swiper mySwiper mt-10">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div
                    class="swiper-slide pt-[100px] pb-[40px] flex justify-end items-end rounded-2xl px-[30px] relative bg-[url('{{url('images/10.png')}}')] bg-no-repeat bg-cover bg-center w-full h-[260px]">
                    <div class="inline-block w-[44%]">
                        <h2 class="text-[22px] block leading-[30px] font-semibold text-white">
                            We Make Every Trips Special
                        </h2>
                        <a href="#"
                            class="bg-yellow-400 mt-2 inline-block text-[12px] text-black font-semibold px-5 py-2 rounded-full">View
                            More
                            <i class="fa-solid fa-arrow-right text-[10px] ml-0.5"></i></a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div
                    class="swiper-slide pt-[40px] pb-[100px] rounded-2xl px-[30px] relative bg-[url('{{url('images/11.png')}}')] bg-no-repeat bg-cover bg-center w-full h-[260px]">
                    <div class="inline-block w-[44%]">
                        <h2 class="text-[22px] block leading-[30px] font-semibold">
                            Buy 1, Get 1 Free Attractions
                        </h2>
                        <a href="#"
                            class="bg-yellow-400 mt-2 inline-block text-[12px] text-black font-semibold px-5 py-2 rounded-full">View
                            More
                            <i class="fa-solid fa-arrow-right text-[10px] ml-0.5"></i></a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div
                    class="swiper-slide pt-[40px] pb-[100px] rounded-2xl px-[30px] relative bg-[url('{{url('images/12.png')}}')] bg-no-repeat bg-cover bg-center w-full h-[260px]">
                    <div class="inline-block w-[44%]">
                        <h2 class="text-[22px] block leading-[30px] font-semibold">
                            Buy 1, Get 1 Free Attractions
                        </h2>
                        <a href="#"
                            class="bg-yellow-400 mt-2 inline-block text-[12px] text-black font-semibold px-5 py-2 rounded-full">View
                            More
                            <i class="fa-solid fa-arrow-right text-[10px] ml-0.5"></i></a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div
                    class="swiper-slide pt-[40px] pb-[100px] rounded-2xl px-[30px] relative bg-[url('{{url('images/12.png')}}')] bg-no-repeat bg-cover bg-center w-full h-[260px]">
                    <div class="inline-block w-[44%]">
                        <h2 class="text-[22px] block leading-[30px] font-semibold">
                            Buy 1, Get 1 Free Attractions
                        </h2>
                        <a href="#"
                            class="bg-yellow-400 mt-2 inline-block text-[12px] text-black font-semibold px-5 py-2 rounded-full">View
                            More
                            <i class="fa-solid fa-arrow-right text-[10px] ml-0.5"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tourSlider" class="px-7 relative lg:px-14 pt-[70px] lg:pt-0">
        <div class="lg:mb-8 mb-6">
            <h2 class="text-[18px] lg:text-[26px] font-semibold">
                Trending Tour & Packages
            </h2>
            <p class="-mt-1 text-[12px] lg:text-[16px]">
                Walk through majestic forts, grand palaces, and timeless stories of
                Rajasthan’s royal past.
            </p>
        </div>

        <div
            class="swiper-button-next absolute top-1/2 translate-y-1/2 right-10 !w-14 !h-14 rounded-full bg-[#8C7858] hidden lg:flex items-center justify-center text-white shadow-md cursor-pointer">
        </div>

        <!-- Custom Prev Button -->
        <div
            class="swiper-button-prev !top-1/2 translate-y-1/2 left-5 !w-14 !h-14 rounded-full bg-[#8C7858] lg:flex hidden items-center justify-center text-white shadow-md cursor-pointer">
        </div>
        <!-- Container -->
        <div id="tourSwiper" class="swiper mySwiper mt-12">
            <div class="swiper-wrapper">

                {{-- section  --}}
                @foreach ($tourdata as $touraa)


                <div class="swiper-slide">
                    <div class="col-span-1 relative border-[#E4E6E8] border rounded-3xl">
                        <div>
                            <img class="h-[270px] w-full object-cover rounded-t-3xl" src="{{url('uploads/'.$touraa->thumnail_image)}}" alt="tour" />
                        </div>

                        <div class="bg-white px-6 py-7 lg:py-9 rounded-3xl -mt-10 relative z-[99]">
                            <h3 class="lg:text-[20px] text-[16px] font-semibold">
                               {{$touraa->title}}
                            </h3>

                            <div class="mt-2 flex gap-6">
                                <div class="flex gap-1 items-center">
                                    <i class="fa-solid fa-clock text-[#737373] text-[10px]"></i>
                                    <span class="text-[#737373] lg:text-[12px] text-[11px]">{{$touraa->time_date}}</span>
                                </div>
                                <div class="flex gap-1 items-center">
                                    <i class="fa-solid fa-user text-[#737373] text-[10px]"></i>
                                    <span class="text-[#737373] lg:text-[12px] text-[11px]">{{$touraa->number_of_person}}</span>
                                </div>
                            </div>

                            <div class="mt-6 flex justify-between items-center">
                                <h2 class="font-semibold lg:text-[20px] text-[17px]">
                                    {{$touraa->price}}
                                </h2>
                                <a href="{{url('tour-details/'.$touraa->slug)}}"
                                    class="lg:text-[14px] text-[12px] border-[#E4E6E8] border px-6 py-1.5 rounded-full">Book
                                    Now</a>
                            </div>

                            <div
                                class="border-[#E4E6E8] flex gap-2 items-center shadow border px-4 bg-white right-8 -top-4 py-1.5 absolute inline-block rounded-full">
                                <i class="fa-solid fa-star text-[#FFC700] text-[11px] lg:text-[12px]"></i>
                                <p class="lg:text-[12px] text-[11px] font-semibold">
                                    {{$touraa->rating}}
                                    <span class="text-[#737373] font-medium">( {{$touraa->review}})</span>
                                </p>
                            </div>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span
                                class="lg:text-[11px] text-[10px] font-medium text-[#F09814] bg-white px-5 py-1.5 rounded-full"> {{$touraa->tourCategorys->name}}</span>
                        </div>
                    </div>
                </div>
                           @endforeach

                {{-- End section --}}




            </div>
        </div>
    </section>

    <section class="lg:px-14 px-6 p y-10">
        <div class="lg:mb-8 mb-6">
            <h2 class="text-[18px] lg:text-[26px] font-semibold">
                Top Packages & Tour
            </h2>
            <p class="-mt-1 text-[12px] lg:text-[16px]">
                Walk through majestic forts, grand palaces, and timeless stories of
                Rajasthan’s royal past.
            </p>
        </div>

        <div class="grid lg:grid-cols-4 grid-cols-2 auto-rows-[130px] lg:auto-rows-[250px] gap-3 lg:gap-6">
            <div class="lg:col-span-3 col-span-2 row-span-2 relative">
                <img class="w-full h-full rounded-2xl object-cover" src="{{url('images/15.jpg')}}" alt="15" />

                <div
                    class="flex justify-between w-full px-4 lg:px-6 bg-black/10 backdrop-blur rounded-b-2xl bottom-0 lg:py-6 py-3 items-center absolute">
                    <h2 class="lg:text-[20px] text-[15px] font-semibold text-white">
                        Singapore Skylines: Urban Exploration
                    </h2>

                    <a class="bg-white text-black lg:h-[50px] lg:w-[50px] h-[40px] w-[40px] rounded-full flex justify-center items-center"
                        href="{{url('gallery')}}"><i
                            class="fa-solid fa-arrow-right lg:text-[16px] text-[14px] rotate-[240deg]"></i></a>
                </div>
            </div>

            <div class="col-span-1">
                <img class="w-full h-full rounded-2xl" src="{{url('images/17.jpg')}}" alt="17" />
            </div>

            <div class="col-span-1">
                <img class="w-full h-full rounded-2xl" src="{{url('images/16.jpg')}}" alt="16" />
            </div>
        </div>
    </section>

    <section class="px-7 py-16 lg:px-14">
        {{-- <div class="lg:mb-8 mb-6">
            <h2 class="text-[18px] lg:text-[26px] font-semibold">
                Trending Tour & Packages
            </h2>
            <p class="-mt-1 text-[12px] lg:text-[16px]">
                Walk through majestic forts, grand palaces, and timeless stories of
                Rajasthan’s royal past.
            </p>
        </div> --}}

        <!-- Container -->
        {{-- <div id="tourSwiper" class="swiper mySwiper mt-12">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="col-span-1 relative border-[#E4E6E8] border rounded-3xl">
                        <div>
                            <img class="h-[270px] w-full object-cover rounded-t-3xl" src="./images/img1.jpg" alt />
                        </div>

                        <div class="bg-white px-6 py-7 lg:py-9 rounded-3xl -mt-10 relative z-[99]">
                            <h3 class="lg:text-[20px] text-[16px] font-semibold">
                                Singapore Skylines: Urban Exploration
                            </h3>

                            <div class="mt-2 flex gap-6">
                                <div class="flex gap-1 items-center">
                                    <i class="fa-solid fa-clock text-[#737373] text-[10px]"></i>
                                    <span class="text-[#737373] lg:text-[12px] text-[11px]">2 days 3 nights</span>
                                </div>
                                <div class="flex gap-1 items-center">
                                    <i class="fa-solid fa-user text-[#737373] text-[10px]"></i>
                                    <span class="text-[#737373] lg:text-[12px] text-[11px]">2 Person</span>
                                </div>
                            </div>

                            <div class="mt-6 flex justify-between items-center">
                                <h2 class="font-semibold lg:text-[20px] text-[17px]">
                                    ₹4800
                                </h2>
                                <a href="#"
                                    class="lg:text-[14px] text-[12px] border-[#E4E6E8] border px-6 py-1.5 rounded-full">Book
                                    Now</a>
                            </div>

                            <div
                                class="border-[#E4E6E8] flex gap-2 items-center shadow border px-4 bg-white right-8 -top-4 py-1.5 absolute inline-block rounded-full">
                                <i class="fa-solid fa-star text-[#FFC700] text-[11px] lg:text-[12px]"></i>
                                <p class="lg:text-[12px] text-[11px] font-semibold">
                                    4.96
                                    <span class="text-[#737373] font-medium">(672 reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span
                                class="lg:text-[11px] text-[10px] font-medium text-[#F09814] bg-white px-5 py-1.5 rounded-full">Top
                                Rated</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-span-1 relative border-[#E4E6E8] border rounded-3xl">
                        <div>
                            <img class="h-[270px] w-full object-cover rounded-t-3xl" src="./images/img1.jpg" alt />
                        </div>

                        <div class="bg-white px-6 py-7 lg:py-9 rounded-3xl -mt-10 relative z-[99]">
                            <h3 class="lg:text-[20px] text-[16px] font-semibold">
                                Singapore Skylines: Urban Exploration
                            </h3>

                            <div class="mt-2 flex gap-6">
                                <div class="flex gap-1 items-center">
                                    <i class="fa-solid fa-clock text-[#737373] text-[10px]"></i>
                                    <span class="text-[#737373] lg:text-[12px] text-[11px]">2 days 3 nights</span>
                                </div>
                                <div class="flex gap-1 items-center">
                                    <i class="fa-solid fa-user text-[#737373] text-[10px]"></i>
                                    <span class="text-[#737373] lg:text-[12px] text-[11px]">2 Person</span>
                                </div>
                            </div>

                            <div class="mt-6 flex justify-between items-center">
                                <h2 class="font-semibold lg:text-[20px] text-[17px]">
                                    ₹4800
                                </h2>
                                <a href="#"
                                    class="lg:text-[14px] text-[12px] border-[#E4E6E8] border px-6 py-1.5 rounded-full">Book
                                    Now</a>
                            </div>

                            <div
                                class="border-[#E4E6E8] flex gap-2 items-center shadow border px-4 bg-white right-8 -top-4 py-1.5 absolute inline-block rounded-full">
                                <i class="fa-solid fa-star text-[#FFC700] text-[11px] lg:text-[12px]"></i>
                                <p class="lg:text-[12px] text-[11px] font-semibold">
                                    4.96
                                    <span class="text-[#737373] font-medium">(672 reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span
                                class="lg:text-[11px] text-[10px] font-medium text-[#F09814] bg-white px-5 py-1.5 rounded-full">Top
                                Rated</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-span-1 relative border-[#E4E6E8] border rounded-3xl">
                        <div>
                            <img class="h-[270px] w-full object-cover rounded-t-3xl" src="./images/img1.jpg" alt />
                        </div>

                        <div class="bg-white px-6 py-7 lg:py-9 rounded-3xl -mt-10 relative z-[99]">
                            <h3 class="lg:text-[20px] text-[16px] font-semibold">
                                Singapore Skylines: Urban Exploration
                            </h3>

                            <div class="mt-2 flex gap-6">
                                <div class="flex gap-1 items-center">
                                    <i class="fa-solid fa-clock text-[#737373] text-[10px]"></i>
                                    <span class="text-[#737373] lg:text-[12px] text-[11px]">2 days 3 nights</span>
                                </div>
                                <div class="flex gap-1 items-center">
                                    <i class="fa-solid fa-user text-[#737373] text-[10px]"></i>
                                    <span class="text-[#737373] lg:text-[12px] text-[11px]">2 Person</span>
                                </div>
                            </div>

                            <div class="mt-6 flex justify-between items-center">
                                <h2 class="font-semibold lg:text-[20px] text-[17px]">
                                    ₹4800
                                </h2>
                                <a href="#"
                                    class="lg:text-[14px] text-[12px] border-[#E4E6E8] border px-6 py-1.5 rounded-full">Book
                                    Now</a>
                            </div>

                            <div
                                class="border-[#E4E6E8] flex gap-2 items-center shadow border px-4 bg-white right-8 -top-4 py-1.5 absolute inline-block rounded-full">
                                <i class="fa-solid fa-star text-[#FFC700] text-[11px] lg:text-[12px]"></i>
                                <p class="lg:text-[12px] text-[11px] font-semibold">
                                    4.96
                                    <span class="text-[#737373] font-medium">(672 reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span
                                class="lg:text-[11px] text-[10px] font-medium text-[#F09814] bg-white px-5 py-1.5 rounded-full">Top
                                Rated</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="col-span-1 relative border-[#E4E6E8] border rounded-3xl">
                        <div>
                            <img class="h-[270px] w-full object-cover rounded-t-3xl" src="./images/img1.jpg" alt />
                        </div>

                        <div class="bg-white px-6 py-7 lg:py-9 rounded-3xl -mt-10 relative z-[99]">
                            <h3 class="lg:text-[20px] text-[16px] font-semibold">
                                Singapore Skylines: Urban Exploration
                            </h3>

                            <div class="mt-2 flex gap-6">
                                <div class="flex gap-1 items-center">
                                    <i class="fa-solid fa-clock text-[#737373] text-[10px]"></i>
                                    <span class="text-[#737373] lg:text-[12px] text-[11px]">2 days 3 nights</span>
                                </div>
                                <div class="flex gap-1 items-center">
                                    <i class="fa-solid fa-user text-[#737373] text-[10px]"></i>
                                    <span class="text-[#737373] lg:text-[12px] text-[11px]">2 Person</span>
                                </div>
                            </div>

                            <div class="mt-6 flex justify-between items-center">
                                <h2 class="font-semibold lg:text-[20px] text-[17px]">
                                    ₹4800
                                </h2>
                                <a href="#"
                                    class="lg:text-[14px] text-[12px] border-[#E4E6E8] border px-6 py-1.5 rounded-full">Book
                                    Now</a>
                            </div>

                            <div
                                class="border-[#E4E6E8] flex gap-2 items-center shadow border px-4 bg-white right-8 -top-4 py-1.5 absolute inline-block rounded-full">
                                <i class="fa-solid fa-star text-[#FFC700] text-[11px] lg:text-[12px]"></i>
                                <p class="lg:text-[12px] text-[11px] font-semibold">
                                    4.96
                                    <span class="text-[#737373] font-medium">(672 reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span
                                class="lg:text-[11px] text-[10px] font-medium text-[#F09814] bg-white px-5 py-1.5 rounded-full">Top
                                Rated</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        new Swiper("#offerSwiper", {
            slidesPerView: 3, // ek time me 3 cards
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: "#offerSlider .swiper-button-next",
                prevEl: "#offerSlider .swiper-button-prev",
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1, // mobile me 1
                },
                1024: {
                    slidesPerView: 2, // tablet me 2
                },
                1280: {
                    slidesPerView: 3, // desktop me 3
                },
            },
        });
    </script>

    <script>
        new Swiper("#tourSwiper", {
            slidesPerView: 1, // default (mobile)
            spaceBetween: 15,
            loop: true,
            navigation: {
                nextEl: "#tourSlider .swiper-button-next",
                prevEl: "#tourSlider .swiper-button-prev",
            },
            breakpoints: {
                // when window width >= 640px (tablet)
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                // when window width >= 768px
                768: {
                    slidesPerView: 2.5,
                    spaceBetween: 20,
                },
                // when window width >= 1024px (desktop)
                1024: {
                    slidesPerView: 3.2,
                    spaceBetween: 25,
                },
                // when window width >= 1280px (large desktop)
                1280: {
                    slidesPerView: 3.8,
                    spaceBetween: 30,
                },
            },
        });
    </script>
    <script>
        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");
        const header = document.getElementById("header");

        menuBtn.addEventListener("click", () => {
            if (mobileMenu.classList.contains("max-h-0")) {
                mobileMenu.classList.remove("max-h-0");
                mobileMenu.classList.add("max-h-[500px]"); // enough space
            } else {
                mobileMenu.classList.remove("max-h-[500px]");
                mobileMenu.classList.add("max-h-0");
            }
        });
    </script>

    <script>
        // Toggle dropdown visibility
        function toggleDropdown(id) {
            document.querySelectorAll(".hidden").forEach((el) => {
                if (el.id !== id) el.classList.add("hidden");
            });

            const dropdown = document.getElementById(id);
            dropdown.classList.toggle("hidden");
        }

        // Click outside to close
        window.addEventListener("click", function(e) {
            const dropdowns = document.querySelectorAll("[id$='Dropdown']");
            dropdowns.forEach((dropdown) => {
                if (!dropdown.contains(e.target) && !e.target.closest("button")) {
                    dropdown.classList.add("hidden");
                }
            });
        });
    </script>

    <script>
        function toggleMobileDropdown() {
            const menu = document.getElementById("mobileDropdownMenu");
            const icon = document.getElementById("mobileDropdownIcon");

            menu.classList.toggle("hidden");
            icon.classList.toggle("rotate-180"); // arrow rotate effect
        }
    </script>
    @endsection
