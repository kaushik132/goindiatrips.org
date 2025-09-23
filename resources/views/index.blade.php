@extends('dashboard.layouts.main')
@section('container.main')
<section class="lg:px-14 px-6 lg:pt-[140px] pt-[80px] pb-[70px]">

    <div class="grid lg:grid-cols-2 items-center gap-16">
        <div class="col-span-1 relative">
            <h2 class="lg:text-[62px] text-[26px] font-medium lg:w-[68%] lg:leading-[74px]">
                Experience Jaipur Like Never Before
            </h2>

            <div class="mt-5 flex gap-6">
                <a href="#"
                    class="bg-[var(--primary-color)] flex items-center lg:text-[14px] text-[13px] text-white px-7  py-1 lg:py-2.5 rounded-full">Contact
                    Us
                    <i class="fa-solid fa-arrow-right text-[12px] ml-1"></i></a>

                <a href="#" class="flex items-center gap-3">
                    <i
                        class="fa-solid fa-play lg:text-[15px] text-[14px] bg-[#fff] text-[14px] w-[38px] h-[38px] lg:h-[45px] lg:w-[45px] shadow-lg flex justify-center items-center rounded-full"></i>
                    <span class="lg:text-[14px] text-[13px] font-medium"> How it Work?</span></a>
            </div>

            <div class="mt-5">
                <p class="lg:w-[68%] lg:text-[16px] text-[12px]">
                    From majestic forts and colorful bazaars to royal palaces and
                    authentic cuisine, experience Jaipur’s timeless charm with us and
                    create memories that last a lifetime in Rajasthan’s crown jewel.
                </p>
            </div>

            <div class="absolute lg:top-20 top-2 -right-7 lg:right-6">
                <img class="lg:w-[320px] w-[130px]" src="./images/arrow.png" alt />
            </div>

            <div class="bg-white mt-10 shadow-md rounded-2xl px-6 py-4 lg:flex items-center gap-6 lg:w-fit">
                <!-- Tour Type -->
                <div class="flex items-center gap-1">
                    <i class="fa-solid fa-location-dot text-[12px] text-gray-400"></i>
                    <select class="font-medium text-[12px] focus:outline-none w-full">
                        <option>Select Type</option>
                        <option>Adventure</option>
                        <option>City Tour</option>
                        <option>Beach</option>
                    </select>
                </div>

                <!-- Divider -->
                <div class="w-px h-6 bg-gray-200 hidden lg:block"></div>

                <!-- Date -->
                <div class="flex items-center gap-1 mt-4 lg:mt-0">
                    <i class="fa-solid fa-calendar text-[12px] text-gray-400"></i>
                    <select class="font-medium text-[12px] focus:outline-none w-full">
                        <option>02 Janua</option>
                        <option>03 Janua</option>
                        <option>04 Janua</option>
                    </select>
                </div>

                <!-- Divider -->
                <div class="w-px h-6 bg-gray-200 hidden lg:block"></div>

                <!-- Guest -->
                <div class="flex items-center gap-1 mt-4 lg:mt-0">
                    <i class="fa-solid text-[12px] fa-user text-gray-400"></i>
                    <select class="font-medium text-[12px] focus:outline-none w-full">
                        <option>2 adults, 2 children</option>
                        <option>1 adult</option>
                        <option>2 adults</option>
                        <option>Family Pack</option>
                    </select>
                </div>

                <!-- Search Button -->
                <button
                    class="lg:ml-4 flex justify-center lg:justify-start items-center mt-4 lg:mt-0 text-[13px] w-full lg:w-auto lg:text-[14px] gap-2 bg-[var(--primary-color)] text-white px-6 py-2 rounded-full font-medium">
                    <i class="fa-solid fa-magnifying-glass text-[12px]"></i>
                    Search
                </button>
            </div>
        </div>

        <div class="col-span-1 lg:px-10">
            <img class="w-full" src="./images/hero-image.png" alt />
        </div>
    </div>
</section>


<section class="relative lg:pl-14 px-6">
    <div class="text-center">
        <h2 class="lg:text-[38px] text-[20px] font-medium">Explore The Royal Heritage Of Jaipur</h2>
        <p class="lg:text-[16px] text-[12px]  lg:-mt-1">
            Walk through majestic forts, grand palaces, and timeless stories of Rajasthan’s royal past.
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
    <!-- Container -->
    <div id="tourSwiper" class="swiper mySwiper mt-12">
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
                                <span class="text-[#737373] lg:text-[12px] text-[11px]">2 days 3
                                    nights</span>
                            </div>
                            <div class="flex gap-1 items-center">
                                <i class="fa-solid fa-user text-[#737373] text-[10px]"></i>
                                <span class="text-[#737373] lg:text-[12px] text-[11px]">2 Person</span>
                            </div>
                        </div>

                        <div class="mt-6 flex justify-between items-center">
                            <h2 class="font-semibold lg:text-[20px] text-[17px]">₹4800</h2>
                            <a href="#"
                                class="lg:text-[14px] text-[12px] border-[#E4E6E8] border px-6 py-1.5 rounded-full">Book
                                Now</a>
                        </div>

                        <div
                            class="border-[#E4E6E8] flex gap-2 items-center shadow border px-4 bg-white right-8 -top-4 py-1.5 absolute inline-block rounded-full">
                            <i class="fa-solid fa-star text-[#FFC700] text-[11px] lg:text-[12px]"></i>
                            <p class="lg:text-[12px] text-[11px] font-semibold">
                                4.96
                                <span class="text-[#737373] font-medium">(672
                                    reviews)</span>
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
                                <span class="text-[#737373] lg:text-[12px] text-[11px]">2 days 3
                                    nights</span>
                            </div>
                            <div class="flex gap-1 items-center">
                                <i class="fa-solid fa-user text-[#737373] text-[10px]"></i>
                                <span class="text-[#737373] lg:text-[12px] text-[11px]">2 Person</span>
                            </div>
                        </div>

                        <div class="mt-6 flex justify-between items-center">
                            <h2 class="font-semibold lg:text-[20px] text-[17px]">₹4800</h2>
                            <a href="#"
                                class="lg:text-[14px] text-[12px] border-[#E4E6E8] border px-6 py-1.5 rounded-full">Book
                                Now</a>
                        </div>

                        <div
                            class="border-[#E4E6E8] flex gap-2 items-center shadow border px-4 bg-white right-8 -top-4 py-1.5 absolute inline-block rounded-full">
                            <i class="fa-solid fa-star text-[#FFC700] text-[11px] lg:text-[12px]"></i>
                            <p class="lg:text-[12px] text-[11px] font-semibold">
                                4.96
                                <span class="text-[#737373] font-medium">(672
                                    reviews)</span>
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
                                <span class="text-[#737373] lg:text-[12px] text-[11px]">2 days 3
                                    nights</span>
                            </div>
                            <div class="flex gap-1 items-center">
                                <i class="fa-solid fa-user text-[#737373] text-[10px]"></i>
                                <span class="text-[#737373] lg:text-[12px] text-[11px]">2 Person</span>
                            </div>
                        </div>

                        <div class="mt-6 flex justify-between items-center">
                            <h2 class="font-semibold lg:text-[20px] text-[17px]">₹4800</h2>
                            <a href="#"
                                class="lg:text-[14px] text-[12px] border-[#E4E6E8] border px-6 py-1.5 rounded-full">Book
                                Now</a>
                        </div>

                        <div
                            class="border-[#E4E6E8] flex gap-2 items-center shadow border px-4 bg-white right-8 -top-4 py-1.5 absolute inline-block rounded-full">
                            <i class="fa-solid fa-star text-[#FFC700] text-[11px] lg:text-[12px]"></i>
                            <p class="lg:text-[12px] text-[11px] font-semibold">
                                4.96
                                <span class="text-[#737373] font-medium">(672
                                    reviews)</span>
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
                                <span class="text-[#737373] lg:text-[12px] text-[11px]">2 days 3
                                    nights</span>
                            </div>
                            <div class="flex gap-1 items-center">
                                <i class="fa-solid fa-user text-[#737373] text-[10px]"></i>
                                <span class="text-[#737373] lg:text-[12px] text-[11px]">2 Person</span>
                            </div>
                        </div>

                        <div class="mt-6 flex justify-between items-center">
                            <h2 class="font-semibold lg:text-[20px] text-[17px]">₹4800</h2>
                            <a href="#"
                                class="lg:text-[14px] text-[12px] border-[#E4E6E8] border px-6 py-1.5 rounded-full">Book
                                Now</a>
                        </div>

                        <div
                            class="border-[#E4E6E8] flex gap-2 items-center shadow border px-4 bg-white right-8 -top-4 py-1.5 absolute inline-block rounded-full">
                            <i class="fa-solid fa-star text-[#FFC700] text-[11px] lg:text-[12px]"></i>
                            <p class="lg:text-[12px] text-[11px] font-semibold">
                                4.96
                                <span class="text-[#737373] font-medium">(672
                                    reviews)</span>
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
    </div>
</section>

<div class="lg:pt-[40px] pt-[30px] text-center lg:px-0 px-6">
    <a href="#"
        class="text-white bg-[var(--primary-color)] px-8 text-[14px] lg:text-[17px] lg:w-auto block lg:inline-block
         w-full py-2 rounded-full">View
        More</a>
</div>

<section class="lg:px-14 px-6 py-[60px]">
    <div class="grid grid-cols-1">
        <div class="col-span-1 lg:h-[500px] h-[300px] relative">
            <!-- Image -->
            <img class="w-full h-full object-cover rounded-3xl" src="./images/img2.jpg" alt />

            <!-- Black Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent rounded-3xl"></div>

            <!-- Content -->
            <div class="absolute bottom-10 left-6 lg:left-14 lg:w-[17%] text-white">
                <h2 class="lg:text-[20px] text-[18px] font-medium">Santorini Cliffside Retreat</h2>
                <p class="lg:text-[15px] text-[12px]">
                    Cultural stays immerse you in the heart of tradition and beauty.
                </p>

                <a href="#"
                    class="bg-white mt-3 inline-block py-1.5 lg:py-2 font-medium rounded-full text-black text-[10px] lg:text-[14px] px-6">Explore
                    More
                    <i class="fa-solid fa-arrow-right text-[9px] lg:text-[12px] ml-1"></i></a>
            </div>
        </div>
    </div>

    <div class="grid lg:grid-cols-2 mt-10 px-3 items-center">
        <div class="col-span-1">
            <h2 class="font-semibold lg:text-[34px] text-center lg:text-left text-[20px] lg:w-[45%] lg:leading-[40px]">
                <span class="lg:block">Rooted in </span> Heritage, Driven by Discovery
            </h2>
        </div>

        <div class="col-span-1 mt-2 lg:mt-0">
            <p class="lg:text-[14px] text-justify lg:text-left text-[11px] font-medium text-[#141219]">
                ounded in 2009 by a group of passionate travelers, WanderLust began
                as a small agency with a big dream: to make extraordinary travel
                experiences accessible to everyone. What started as weekend trips to
                nearby destinations has evolved into a full-service travel company
                offering adventures across all seven continents. We believe that
                travel has the power to transform lives, build connections, and
                create lasting memories. Today, we're proud to have helped over
                50,000 travelers discover the world, from backpackers seeking
                adventure to families creating precious memories together.
            </p>
        </div>
    </div>

    <div class="grid rounded-3xl mt-10 grid-cols-3 bg-white py-[20px] lg:py-[30px]">
        <div class="col-span-1 py-[15px] lg:py-[35px] text-center border-r-[rgba(0,0,0,.1)] border-r">
            <h2 class="lg:text-[32px] text-[17px] font-semibold">2.5M+</h3>
                <p class="text-[#141219] lg:text-[16px] text-[9px]">Engaged Learners</p>
        </div>

        <div class="col-span-1 py-[15px] lg:py-[35px] text-center border-r-[rgba(0,0,0,.1)] border-r">
            <h2 class="lg:text-[32px] text-[17px]  font-semibold">500+</h3>
                <p class="text-[#141219] lg:text-[16px] text-[9px]">Courses Available</p>
        </div>

        <div class="col-span-1 py-[15px] lg:py-[35px] text-center ">
            <h2 class="lg:text-[32px] text-[17px]  font-semibold">800+</h3>
                <p class="text-[#141219] lg:text-[16px] text-[9px]">Expert Mentors</p>
        </div>
    </div>
</section>

<section class="lg:px-14 px-6 lg:py-[70px] py-[30px]  bg-[#E3D1B5]">
    <div class="text-center">
        <h2 class="lg:text-[38px] text-[20px] font-medium">Why Travel With Us?</h2>
        <p class="lg:text-[14px] text-[12px]  lg:-mt-1">
            The best booking platform you can trust
        </p>
    </div>

    <div class="grid lg:grid-cols-4 grid-cols-2 mt-10 gap-3 lg:gap-12">
        <div class="col-span-1 bg-white px-3 lg:px-6 rounded-2xl lg:pt-12 pt-4 pb-4 lg:pb-10">
            <div
                class="flex justify-center items-center mx-auto lg:w-[70px] w-[50px] h-[50px] lg:h-[70px] text-center shadow-lg  rounded-xl">
                <div> <img class="lg:w-auto w-[20px]" src="./images/security..png" alt></div>
            </div>

            <h2 class="text-center lg:text-[20px] text-[12px] mt-2 font-semibold">Security
                Assurance</h2>

            <p class="text-[9px] lg:text-[15px] mt-1 text-[#737373] text-center  lg:mt-2 lg:leading-[25px]">
                Demonstrates commitment to user data security through encryption and
                secure payment practices</p>

            <a href="#"
                class="inline-block flex justify-center items-center lg:text-[16px] text-[12px] mt-3 lg:mt-5">Learn
                More <i class="fa-solid fa-arrow-right text-[10px] lg:text-[12px] ml-1"></i></a>
        </div>

        <div class="col-span-1 bg-white px-3 lg:px-6 rounded-2xl lg:pt-12 pt-4 pb-4 lg:pb-10">
            <div
                class="flex justify-center items-center mx-auto lg:w-[70px] w-[50px] h-[50px] lg:h-[70px] text-center shadow-lg  rounded-xl">
                <div> <img class="lg:w-auto w-[20px]" src="./images/support..png" alt></div>
            </div>


            <h2 class="text-center lg:text-[20px] text-[12px] mt-2 font-semibold">Security
                Assurance</h2>

            <p class="text-[9px] lg:text-[15px] mt-1 text-[#737373] text-center  lg:mt-2 lg:leading-[25px]">
                Demonstrates commitment to user data security through encryption and
                secure payment practices</p>


            <a href="#"
                class="inline-block flex justify-center items-center lg:text-[16px] text-[12px] mt-3 lg:mt-5">Learn
                More <i class="fa-solid fa-arrow-right text-[10px] lg:text-[12px] ml-1"></i></a>
        </div>

        <div class="col-span-1 bg-white px-3 lg:px-6 rounded-2xl lg:pt-12 pt-4 pb-4 lg:pb-10">
            <div
                class="flex justify-center items-center mx-auto lg:w-[70px] w-[50px] h-[50px] lg:h-[70px] text-center shadow-lg  rounded-xl">
                <div> <img class="lg:w-auto w-[20px]" src="./images/policy.png" alt></div>
            </div>

            <h2 class="text-center lg:text-[20px] text-[12px] mt-2 font-semibold">Security
                Assurance</h2>

            <p class="text-[9px] lg:text-[15px] mt-1 text-[#737373] text-center  lg:mt-2 lg:leading-[25px]">
                Demonstrates commitment to user data security through encryption and
                secure payment practices</p>


            <a href="#"
                class="inline-block flex justify-center items-center lg:text-[16px] text-[12px] mt-3 lg:mt-5">Learn
                More <i class="fa-solid fa-arrow-right text-[10px] lg:text-[12px] ml-1"></i></a>
        </div>

        <div class="col-span-1 bg-white px-3 lg:px-6 rounded-2xl lg:pt-12 pt-4 pb-4 lg:pb-10 ">
            <div
                class="flex justify-center items-center mx-auto lg:w-[70px] w-[50px] h-[50px] lg:h-[70px] text-center shadow-lg  rounded-xl">
                <div> <img class="lg:w-auto w-[20px]" src="./images/repu.png" alt></div>
            </div>

            <h2 class="text-center lg:text-[20px] text-[12px] mt-2 font-semibold">Security
                Assurance</h2>

            <p class="text-[9px] lg:text-[15px] mt-1 text-[#737373] text-center  lg:mt-2 lg:leading-[25px]">
                Demonstrates commitment to user data security through encryption and
                secure payment practices</p>


            <a href="#"
                class="inline-block flex justify-center items-center lg:text-[16px] text-[12px] mt-3 lg:mt-5">Learn
                More <i class="fa-solid fa-arrow-right text-[10px] lg:text-[12px] ml-1"></i></a>
        </div>
    </div>

    <div class="grid lg:grid-cols-8 grid-cols-4 mt-12 gap-4 lg:gap-10">
        <div
            class="lg:col-span-3 col-span-4 flex gap-2 lg:gap-4 border-[#E4E6E8] border lg:px-6 px-4 py-3 lg:py-4 bg-white rounded-xl">
            <ul class="flex">
                <li><img class="lg:min-w-[45px] min-w-[35px] lg:w-[45px] lg:h-[45px] h-[30px] w-[30px] min-h-[35px] lg:min-h-[40px]"
                        src="./images/user1.png" alt></li>
                <li><img class="lg:min-w-[45px] min-w-[35px] lg:w-[45px] lg:h-[45px] h-[30px] w-[30px] min-h-[35px] lg:min-h-[40px] -ml-3 lg:-ml-4"
                        src="./images/user2.png" alt></li>
                <li><img class="lg:min-w-[45px] min-w-[35px] lg:w-[45px] lg:h-[45px] h-[30px] w-[30px] min-h-[35px] lg:min-h-[40px] lg:-ml-4 -ml-3"
                        src="./images/user3.png" alt></li>
                <li
                    class="lg:min-w-[45px] min-w-[35px] lg:min-w-[35px] w-[35px] lg:w-[45px] h-[35px] lg:h-[45px] min-h-[35px]  lg:min-h-[40px] -ml-4 bg-[var(--primary-color)] text-white  rounded-full flex justify-center items-center border-[#E4E6E8] border">
                    <i class="fa-solid fa-plus text-[12px] lg:text-[15px]"></i></li>
            </ul>
            <p class="lg:text-[15px] text-[12px] font-medium lg:w-[50%]">1684 people used <span
                    class="font-semibold">Travila</span> in the last <span class="font-semibold">24 hours</span></p>
        </div>

        <div class="col-span-1 lg:block hidden"></div>

        <div class="col-span-1">
            <h2 class="lg:text-[34px] text-[17px] font-semibold">45+</h2>
            <p class="lg:text-[16px] text-[10px] font-medium -mt-1 text-[#737373]">Global
                Branches</p>
        </div>

        <div class="col-span-1">
            <h2 class="lg:text-[34px] text-[17px]  font-semibold">29K</h2>
            <p class="lg:text-[16px] text-[10px] font-medium -mt-1 text-[#737373]">Destinations
                Collaboration</p>
        </div>

        <div class="col-span-1">
            <h2 class="lg:text-[34px] text-[17px]  font-semibold">20+</h2>
            <p class="lg:text-[16px] text-[10px] font-medium -mt-1 text-[#737373]">Years
                Experience</p>
        </div>
        <div class="col-span-1">
            <h2 class="lg:text-[34px] text-[17px]  font-semibold">168K</h2>
            <p class="lg:text-[16px] text-[10px] font-medium -mt-1 text-[#737373]">Happy
                Customers</p>
        </div>
    </div>
</section>

<section class="lg:px-14 px-6  py-[30px] lg:pt-[70px] lg:pb-[60px]">
    <div class="text-center">
        <span
            class="bg-[var(--primary-color)] lg:px-8 px-6 py-1.5 lg:py-2 text-white text-[9px] lg:text-[13px] rounded-full">Tour
            Destination</span>
        <h2 class="lg:text-[38px] font-medium text-[20px] font-medium mt-3">Why Travel With Us?</h2>
        <p class="lg:text-[14px] text-[12px] lg:-mt-1">
            The best booking platform you can trust
        </p>
    </div>

    <div class="grid lg:grid-cols-4 grid-col-2 gap-2 lg:gap-8 mt-6 lg:mt-10 auto-rows-[100px] lg:auto-rows-[230px]">
        <div class="col-span-2 row-span-2">
            <img class="h-full w-full rounded-2xl" src="./images/img3.jpg" alt>

        </div>

        <div class="col-span-1">
            <img class="h-full w-full rounded-2xl" src="./images/image3.jpg" alt>
        </div>

        <div class="col-span-1">
            <img class="h-full w-full rounded-2xl" src="./images/image4.jpg" alt>
        </div>

        <div class="col-span-2 row-span-1 relative">
            <img class="h-full w-full rounded-2xl" src="./images/image5.jpg" alt>

            <button href="#" class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
                <i
                    class="fa-solid fa-play text-[15px] bg-[#fff] text-[14px] h-[45px] w-[45px] shadow-lg flex justify-center items-center rounded-full"></i></button>
        </div>
    </div>

    <div class="lg:mt-3 mt-2 flex justify-between items-center px-1.5 lg:px-3">
        <div>
            <h2 class="lg:text-[24px] text-[15px] font-semibold">Crafted Images</h2>
            <p class="lg:text-[14px] text-[10px] font-medium">54 Photos, 5 Videos</p>
        </div>

        <div>
            <a href="#" class="lg:text-[14px] text-[11px] font-semibold">View All</a>
        </div>
    </div>
</section>

<section class="lg:pl-14 px-6 lg:pr-0 lg:py-[50px]  py-[20px] bg-[#E3D1B5]">
    <div class="lg:grid lg:grid-cols-3 lg:gap-10">
        <div class="col-span-1 relative lg:py-[60px] py-[20px] ">
            <div class="bg-white pl-2 pr-4 py-1.5 rounded-full inline-block ">
                <div class="flex gap-2 items-center">
                    <ul class="flex ">
                        <li><img class="lg:min-w-[35px] min-w-[30px] lg:w-[35px] w-[30px] lg:h-[35px] w-[30px] min-h-[30px] lg:min-h-[35px]"
                                src="./images/user1.png" alt></li>
                        <li><img class="lg:min-w-[35px] min-w-[30px] lg:w-[35px] w-[30px] lg:h-[35px] w-[30px] min-h-[30px] lg:min-h-[35px] -ml-3"
                                src="./images/user2.png" alt></li>
                        <li><img class="lg:min-w-[35px] min-w-[30px] lg:w-[35px] w-[30px] lg:h-[35px] w-[30px] min-h-[30px] lg:min-h-[35px] -ml-3"
                                src="./images/user3.png" alt></li>

                    </ul>

                    <span class="lg:text-[15px] text-[12px] font-semibold">Testimonials</span>
                </div>
            </div>

            <div class="mt-1.5">
                <h2 class="lg:text-[36px] text-[18px] w-full  font-bold lg:leading-[40px]">What our clients are
                    saying about us?</h2>

                <p class="text-[#737373] lg:text-[13px] text-[11px] lg:w-[90%] mt-1 lg:mt-3"> Discover how you can
                    offset your adventure's carbon emissions
                    and support the sustainable initiatives practiced by our
                    operators worldwide.</p>
            </div>

            <div class="absolute  lg:-top-4 top-2 right-0 lg:right-auto lg:left-52">
                <img class="lg:w-[200px] w-[100px]" src="./images/travel.png" alt="">
            </div>
        </div>

        <div class="lg:col-span-2 ">
            <div id="reviewSwiper" class="swiper mySwiper mt-5 lg:mt-10">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div
                            class="border-[#E4E6E8] border rounded-xl lg:rounded-3xl bg-white lg:px-8 px-4 py-6 lg:py-8">
                            <div class="flex items-end justify-between border-[#E4E6E8] border-b pb-5 lg:pb-10">
                                <div class="flex gap-2 items-center">
                                    <div>
                                        <img class="lg:w-[60px] w-[50px]" src="./images/user1.png" alt="">
                                    </div>
                                    <div>
                                        <h2 class="font-semibold lg:text-[15px] text-[12px] ">Sara Mohamed</h2>
                                        <p class="font-medium lg:text-[13px] text-[11px] m-0">Jakatar</p>
                                    </div>
                                </div>
                                <div>
                                    <ul class="flex gap-1">
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-[#737373] lg:text-[14px] text-[11px] mt-3 lg:mt-6">
                                I've been using the hotel booking system for several years now...
                            </p>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div
                            class="border-[#E4E6E8] border rounded-xl lg:rounded-3xl bg-white lg:px-8 px-4 py-6 lg:py-8">
                            <div class="flex items-end justify-between border-[#E4E6E8] border-b pb-5 lg:pb-10">
                                <div class="flex gap-2 items-center">
                                    <div>
                                        <img class="lg:w-[60px] w-[50px]" src="./images/user1.png" alt="">
                                    </div>
                                    <div>
                                        <h2 class="font-semibold lg:text-[15px] text-[12px] ">Sara Mohamed</h2>
                                        <p class="font-medium lg:text-[13px] text-[11px] m-0">Jakatar</p>
                                    </div>
                                </div>
                                <div>
                                    <ul class="flex gap-1">
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-[#737373] lg:text-[14px] text-[11px] mt-3 lg:mt-6">
                                I've been using the hotel booking system for several years now...
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div
                            class="border-[#E4E6E8] border rounded-xl lg:rounded-3xl bg-white lg:px-8 px-4 py-6 lg:py-8">
                            <div class="flex items-end justify-between border-[#E4E6E8] border-b pb-5 lg:pb-10">
                                <div class="flex gap-2 items-center">
                                    <div>
                                        <img class="lg:w-[60px] w-[50px]" src="./images/user1.png" alt="">
                                    </div>
                                    <div>
                                        <h2 class="font-semibold lg:text-[15px] text-[12px] ">Sara Mohamed</h2>
                                        <p class="font-medium lg:text-[13px] text-[11px] m-0">Jakatar</p>
                                    </div>
                                </div>
                                <div>
                                    <ul class="flex gap-1">
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-[#737373] lg:text-[14px] text-[11px] mt-3 lg:mt-6">
                                I've been using the hotel booking system for several years now...
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div
                            class="border-[#E4E6E8] border rounded-xl lg:rounded-3xl bg-white lg:px-8 px-4 py-6 lg:py-8">
                            <div class="flex items-end justify-between border-[#E4E6E8] border-b pb-5 lg:pb-10">
                                <div class="flex gap-2 items-center">
                                    <div>
                                        <img class="lg:w-[60px] w-[50px]" src="./images/user1.png" alt="">
                                    </div>
                                    <div>
                                        <h2 class="font-semibold lg:text-[15px] text-[12px] ">Sara Mohamed</h2>
                                        <p class="font-medium lg:text-[13px] text-[11px] m-0">Jakatar</p>
                                    </div>
                                </div>
                                <div>
                                    <ul class="flex gap-1">
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                        <li><i class="fa-solid fa-star text-yellow-400 text-[11px] lg:text-[13px]"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-[#737373] lg:text-[14px] text-[11px] mt-3 lg:mt-6">
                                I've been using the hotel booking system for several years now...
                            </p>
                        </div>
                    </div>



                </div>


            </div>

        </div>
    </div>
</section>
@endsection
