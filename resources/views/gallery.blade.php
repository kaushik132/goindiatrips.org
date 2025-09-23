@extends('dashboard.layouts.main')
@section('container.main')

    <!-- hero section -->
    <section
      id="heroSection"
      class="bg-[url('./images/gallery-banner.png')] relative bg-no-repeat bg-center bg-cover pt-[110px] pb-[210px] lg:pb-[100px] lg:py-[160px]"
    >
      <div class="text-center">
        <h2
          class="lg:text-[48px] text-white text-[24px] font-semibold -mt-1 lg:-mt-3"
        >
          Gallery
        </h2>
      </div>
      <div
        class="bg-white absolute -bottom-10 left-1/2 -translate-x-1/2 mt-10 shadow-md rounded-2xl px-4 lg:px-6 py-4 lg:flex justify-between items-center gap-6 w-[75%] lg:w-[65%]"
      >
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
            <select
              class="font-medium w-full text-[12px] w-full focus:outline-none"
            >
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
          class="lg:ml-4 mt-4 lg:mt-0 flex items-center w-full lg:w-auto text-[12px] lg:text-[14px] gap-2 bg-[var(--primary-color)] text-white px-6 lg:py-2 py-1.5 rounded-full font-medium"
        >
          <i
            class="fa-solid fa-magnifying-glass text-[11px] lg:text-[12px]"
          ></i>
          Search
        </button>
      </div>
    </section>

    <!-- gallery section -->
    <section class="lg:px-14 px-6 pt-[70px] pb-[40px] lg:py-[100px]">
      <div
        class="grid lg:grid-cols-4 grid-cols-2 auto-rows-[120px] lg:auto-rows-[380px] gap-3 lg:gap-6"
      >
        <div class="col-span-1">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="{{url('images/contact-banner.jpg')}}"
            alt=""
            data-gallery="gallery1"
            data-index="0"
          />
        </div>

        <div class="col-span-1">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/1.jpg"
            alt=""
            data-gallery="gallery1"
            data-index="1"
          />
        </div>

        <div class="col-span-2">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/contact-banner.jpg"
            alt=""
            data-gallery="gallery1"
            data-index="2"
          />
        </div>

        <div class="col-span-1">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/2.jpg"
            alt=""
            data-gallery="gallery1"
            data-index="3"
          />
        </div>

        <div class="col-span-1">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/3.jpg"
            alt=""
            data-gallery="gallery1"
            data-index="4"
          />
        </div>

        <div class="col-span-2">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/img2.jpg"
            alt=""
            data-gallery="gallery1"
            data-index="5"
          />
        </div>

        <div class="col-span-1">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/img4.jpg"
            alt=""
            data-gallery="gallery1"
            data-index="6"
          />
        </div>

        <div class="col-span-1">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/5.jpg"
            alt=""
            data-gallery="gallery1"
            data-index="7"
          />
        </div>

        <div class="col-span-2">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/6.png"
            alt=""
            data-gallery="gallery1"
            data-index="8"
          />
        </div>

        <div class="col-span-1">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/7.jpg"
            alt=""
            data-gallery="gallery1"
            data-index="9"
          />
        </div>

        <div class="col-span-1">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/8.jpg"
            alt=""
            data-gallery="gallery1"
            data-index="10"
          />
        </div>

        <div class="col-span-2">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/9.jpg"
            alt=""
            data-gallery="gallery1"
            data-index="11"
          />
        </div>
      </div>
    </section>

    <!-- captured moment section -->
    <section class="capturedMomentSection px-6 lg:px-14">
      <div class="lg:mb-8 mb-6">
        <h2 class="text-[18px] lg:text-[26px] font-semibold">
          Experience Jaipur in Motion
        </h2>
        <p class="-mt-1 text-[12px] lg:text-[16px]">
          Watch breathtaking clips that bring the Pink City’s beauty to life.
        </p>
      </div>

      <div id="videoSlider" class="swiper mx-auto rounded-[16px]">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <img
              src="./images/contact-banner.jpg"
              class="h-[250px] gallery-img lg:h-[500px] sliderImage w-full object-cover rounded-[16px]"
              data-index="0"
              alt=""
            />
            <i
              class="fa-solid fa-play absolute cursor-pointer top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex justify-center text-[18px] items-center text-white bg-[#63636394] h-[65px] w-[65px] rounded-full"
            ></i>
          </div>

          <!-- Slide 2 -->
          <div class="swiper-slide">
            <img
              src="./images/gallery-banner.png"
              class="h-[250px] gallery-img lg:h-[500px] sliderImage w-full object-cover rounded-[16px]"
              alt=""
              data-index="1"
            />
            <i
              class="fa-solid fa-play absolute cursor-pointer top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex justify-center text-[18px] items-center text-white bg-[#63636394] h-[65px] w-[65px] rounded-full"
            ></i>
          </div>
        </div>

        <!-- Navigation buttons -->
        <!-- Left Arrow -->
        <div class="swiper-button-prev custom-arrow text-white">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-4 h-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 19l-7-7 7-7"
            />
          </svg>
        </div>

        <!-- Right Arrow -->
        <div class="swiper-button-next custom-arrow text-white">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-4 h-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 5l7 7-7 7"
            />
          </svg>
        </div>
      </div>
    </section>

    <!-- gallery section -->
    <section class="lg:px-14 px-6 lg:py-[100px] py-[60px]">
      <div
        class="grid lg:grid-cols-4 grid-cols-2 auto-rows-[120px] lg:auto-rows-[380px] gap-3 lg:gap-6"
      >
        <div class="col-span-1">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/2.jpg"
            alt=""
            data-gallery="gallery2"
            data-index="0"
          />
        </div>

        <div class="col-span-1">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/10.jpg"
            alt=""
            data-gallery="gallery2"
            data-index="1"
          />
        </div>

        <div class="col-span-2">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/gallery-banner.png"
            alt=""
            data-gallery="gallery2"
            data-index="2"
          />
        </div>

        <div class="col-span-1">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/11.jpg"
            alt=""
            data-gallery="gallery2"
            data-index="3"
          />
        </div>

        <div class="col-span-1">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/12.jpg"
            alt=""
            data-gallery="gallery2"
            data-index="4"
          />
        </div>

        <div class="col-span-2">
          <img
            class="h-full w-full rounded-2xl object-cover cursor-pointer"
            src="./images/13.jpg"
            alt=""
            data-gallery="gallery2"
            data-index="5"
          />
        </div>
      </div>
    </section>

    <div
      id="imageModal"
      class="hidden fixed inset-0 bg-black/80 flex items-center justify-center z-[9999]"
    >
      <button
        class="absolute top-5 right-5 text-white text-3xl"
        onclick="closeModal()"
      >
        ✕
      </button>

      <div class="relative w-[90%] lg:w-[60%]">
        <img
          id="modalImage"
          class="w-full h-auto rounded-2xl object-contain"
          src=""
          alt="Modal Image"
        />

        <button
          onclick="changeSlide(-1)"
          class="absolute top-1/2 left-2 -translate-y-1/2 text-white text-4xl"
        >
          ‹
        </button>

        <button
          onclick="changeSlide(1)"
          class="absolute top-1/2 right-2 -translate-y-1/2 text-white text-4xl"
        >
          ›
        </button>
      </div>
    </div>


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
      let currentGallery = [];
      let currentIndex = 0;

      // Select all images having data-gallery
      document.querySelectorAll("img[data-gallery]").forEach((img) => {
        img.addEventListener("click", () => {
          const galleryName = img.dataset.gallery;
          currentGallery = Array.from(
            document.querySelectorAll(`img[data-gallery='${galleryName}']`)
          );
          currentIndex = parseInt(img.dataset.index);
          openModal(currentIndex);
        });
      });

      function openModal(index) {
        document.getElementById("imageModal").classList.remove("hidden");
        document.getElementById("modalImage").src = currentGallery[index].src;
      }

      function closeModal() {
        document.getElementById("imageModal").classList.add("hidden");
      }

      function changeSlide(direction) {
        currentIndex =
          (currentIndex + direction + currentGallery.length) %
          currentGallery.length;
        document.getElementById("modalImage").src =
          currentGallery[currentIndex].src;
      }
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const swiper = new Swiper("#videoSlider", {
          slidesPerView: 1,
          spaceBetween: 20,
          loop: true,
          autoplay: {
            delay: 5000,
            disableOnInteraction: false,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
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
      window.addEventListener("click", function (e) {
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
