@extends('dashboard.layouts.main')
@section('container.main')

        <!-- hero section -->
        <section id="heroSection"
            class="bg-[url('./images/about-us-banner.jpg')] relative bg-no-repeat bg-center bg-cover  pt-[110px] pb-[210px] lg:pb-[100px] lg:py-[160px]">
            <div class="text-center">
                <h2 class="lg:text-[48px] text-white text-[24px] font-semibold -mt-1 lg:-mt-3">
                    About us
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




        <section class="lg:px-14 px-6 py-[60px]">
            <div class="grid grid-cols-1">
                <div class="col-span-1 lg:h-[500px] h-[300px] relative">
                    <!-- Image -->
                    <img class="w-full h-full object-cover rounded-3xl" src="./images/img2.jpg" alt />

                    <!-- Black Gradient Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent rounded-3xl">
                    </div>

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
                    <h2
                        class="font-semibold lg:text-[34px] text-center lg:text-left text-[20px] lg:w-[45%] lg:leading-[40px]">
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



{{--
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
        </script> --}}
@endsection
