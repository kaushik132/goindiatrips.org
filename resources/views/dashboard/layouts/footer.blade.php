
<footer class="bg-[#AA987B] px-6 lg:px-14">
    <div class="grid lg:grid-cols-7 grid-cols-2 gap-6 pt-[40px] pb-[60px]">
        <div class="col-span-2">
            <div>
                <img class="lg:w-[120px] w-[100px] " src="./images/logo.png" alt="">

                <p class="text-white lg:text-[15px] text-[13px] font-medium">Unlock performance with data-driven
                    campaigns, creative storytelling, and impactful branding</p>
            </div>

            <div class="mt-5">
                <ul class="flex gap-4 ">
                    <li>
                        <a href="{{$headerInfo->twitter_link}}"
                            class="border-[rgba(0,0,0,.1)] flex justify-center items-center border
          h-[38px] w-[38px] rounded-full "><i
                                class="fa-brands fa-youtube text-[16px] text-white"></i></a>
                    </li>

                    <li>
                        <a href="{{$headerInfo->instagram_link}}"
                            class="border-[rgba(0,0,0,.1)] flex justify-center items-center border h-[38px] w-[38px] rounded-full "><i
                                class="fa-brands fa-youtube text-[16px] text-white"></i></a>
                    </li>

                    <li>
                        <a href="{{$headerInfo->facebook_link}}"
                            class="border-[rgba(0,0,0,.1)] flex justify-center items-center border h-[38px] w-[38px] rounded-full "><i
                                class="fa-brands fa-youtube text-[16px] text-white"></i></a>
                    </li>

                    <li>
                        <a href="{{$headerInfo->youtube_link}}"
                            class="border-[rgba(0,0,0,.1)] flex justify-center items-center border h-[38px] w-[38px] rounded-full "><i
                                class="fa-brands fa-youtube text-[16px] text-white"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-span-1 mt-5">
            <h3 class="font-semibold text-white text-[15px] lg:text-[17px]">Quick link</h3>

            <ul class="lg:mt-5 mt-3 space-y-1 lg:text-[15px] text-[13px]">
                <li>
                    <a href="#" class="  text-white">What We Offer</a>
                </li>

                <li>
                    <a href="#" class=" text-white">Case Studies</a>
                </li>

                <li>
                    <a href="#" class=" text-white">Blog & Insights</a>
                </li>

                <li>
                    <a href="#" class="  text-white">Resources</a>
                </li>

                <li>
                    <a href="#" class="  text-white">FAQs</a>
                </li>
            </ul>
        </div>

        <div class="col-span-1 mt-5">
            <h3 class="font-semibold text-white text-[15px] lg:text-[17px]">Support</h3>

            <ul class="lg:mt-5 mt-3 space-y-1 lg:text-[15px] text-[13px]">
                <li>
                    <a href="#" class="  text-white">Home</a>
                </li>

                <li>
                    <a href="#" class="  text-white">About</a>
                </li>

                <li>
                    <a href="#" class="  text-white">Service</a>
                </li>

                <li>
                    <a href="#" class="  text-white">Testimonials</a>
                </li>

                <li>
                    <a href="#" class="  text-white">Pricing</a>
                </li>

                <li>
                    <a href="#" class=" text-[15px] text-white">Career</a>
                </li>
            </ul>

        </div>
        <div class="col-span-1 mt-5 hidden lg:block">
            <h3 class="font-semibold text-white text-[15px] lg:text-[17px]">Contact Us</h3>

            <ul class="lg:mt-5 mt-3 space-y-1 lg:text-[15px] text-[13px]">
                <li>
                    <a href="#" class="text-white">{{$headerInfo->address ?? '123 Maple Street, Springfield'}}
                        </a>
                </li>

                <li>
                   <a href="tel:+91{{$headerInfo->mobile_number}}" class="text-white">+91 {{$headerInfo->mobile_number}}</a>
                </li>

                <li>
                    <a href="mailto:{{$headerInfo->email}}" class="text-white">{{$headerInfo->email}}</a>
                </li>


            </ul>

        </div>

        <div class="col-span-2 mt-5">
            <h3 class="font-semibold text-white text-[15px] lg:text-[17px]">Request a Demo</h3>

            <form class="mt-5 flex gap-2">
                <input type="text" placeholder="Enter your email"
                    class="border-[rgba(0,0,0,.1)] placeholder:text-white text-white text-[14px] border px-5 py-2 rounded-full bg-transparent">

                <button type="submit"
                    class="bg-[#EEC587] text-white text-[14px] py-2 px-5 lg:px-7 rounded-full">Submit</button>
            </form>

        </div>

        <div class="lg:col-span-1 col-span-2 mt-5  lg:hidden">

            <h3 class="font-semibold text-white text-[15px] lg:text-[17px]">Contact Us</h3>

            <ul class="lg:mt-5 mt-3 space-y-1 lg:text-[15px] text-[13px]">
                <li>
                    <a href="#" class=" text-white">{{$headerInfo->address ?? '123 Maple Street, Springfield'}}</a>
                </li>

                <li>
                    <a href="tel:+91{{$headerInfo->mobile_number}}" class=" text-white">+91 {{$headerInfo->mobile_number}}</a>
                </li>

                <li>
                    <a href="mailto:{{$headerInfo->email}}" class="  text-white">{{$headerInfo->email}}</a>
                </li>


            </ul>

        </div>
    </div>

    <div class="lg:py-[30px] py-[15px] border-[rgba(0,0,0,.1)] border-t">
        <p class="lg:text-[15px] text-[13px] text-white text-center">© Goindiatrips. All Rights Reserved.</p>
    </div>
</footer>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    new Swiper("#tourSwiper", {
        slidesPerView: 1, // default (mobile)
        spaceBetween: 15,
        loop: true,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
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
    new Swiper("#reviewSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        speed: 6000,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2.5,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3.2,
                spaceBetween: 25,
            },
            1280: {
                slidesPerView: 2,
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
</body>

</html>
