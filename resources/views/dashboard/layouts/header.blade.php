<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
       @if (isset($seo_data['seo_title']))
        <meta property="og:title" content="{{ $seo_data['seo_title'] }}">
    @endif
    <meta property="og:site_name" content="http://127.0.0.1:8000/">

    <meta property="og:url" content="http://127.0.0.1:8000/">

    @if (isset($seo_data['seo_description']))
        <meta property="og:description" content="{{ $seo_data['seo_description'] }}">
    @endif


    @if (isset($seo_data['seo_title']))
        <title>{{ $seo_data['seo_title'] }}</title>
    @endif

    @if (isset($seo_data['seo_description']))
        <meta name="description" content="{{ $seo_data['seo_description'] }}" />
    @endif

    @if (isset($seo_data['keywords']))
        <meta name="keywords" content="{{ $seo_data['keywords'] }}" />
    @endif


    @if (isset($canocial))
        <link rel="canonical" href="{{ $canocial }}" />
    @endif
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{url('uploads/'.$seo_data['seo_image'])  }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>
    <header id="header"
        class="px-6 md:px-14 bg-white fixed w-full z-[999] lg:backdrop-blur  lg:py-1 flex flex-col md:flex-row justify-between items-center transition-all duration-500 ease-in-out ">

        <!-- Top Row -->
        <div class="w-full flex justify-between items-center">
            <!-- Logo -->
            <div>
                <a href="{{ url('/') }}">
                    <img class="w-[60px] md:w-[90px]" src="{{ url('images/logo.png') }}" alt="Logo" />
                </a>
            </div>
            <!-- Desktop Menu -->
            <nav class="hidden lg:block">
                <ul class="flex gap-8 text-[15px] relative">
                    <li><a href="{{ url('/') }}" class="activeLink">Home</a></li>
                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                    <li><a href="{{ url('gallery') }}">Gallery</a></li>

                    <!-- Dropdown Parent -->
                    <li class="relative group">
                        <button class="flex items-center gap-1 focus:outline-none"
                            onclick="toggleDropdown('tourDropdown')">
                            <a href="{{ url('tour-and-package') }}">
                                Tour & Packages
                            </a>
                            <i class="fa-solid fa-chevron-down text-[12px]"></i>
                        </button>

                        <!-- First Level Dropdown -->
                        <ul id="tourDropdown"
                            class="absolute -left-0 mt-2 w-56 bg-white shadow-lg rounded-lg hidden z-50">
                            @foreach ($headerTourCategory as $TourCategoryarray)
                                <li class="relative group">
                                    <button
                                        class="w-full flex justify-between items-center px-4 py-2 hover:bg-yellow-200"
                                        onclick="toggleDropdown('dropdown-{{ $TourCategoryarray->id }}')">
                                        <a href="{{ url('tour-and-package/' . $TourCategoryarray->slug) }}">
                                            {{ $TourCategoryarray->name }}
                                        </a>
                                        <i class="fa-solid fa-chevron-right text-[12px]"></i>
                                    </button>

                                    <!-- Second Level Dropdown -->
                                    <ul id="dropdown-{{ $TourCategoryarray->id }}"
                                        class="absolute top-0 left-full ml-1 w-56 bg-white shadow-lg rounded-lg hidden z-50">
                                        @foreach ($headerTour as $tour)
                                        @if ($tour->tour_id == $TourCategoryarray->id)
                                            <li>
                                                <a href="{{ url('tour-details/' . $tour->slug) }}"
                                                    class="block px-4 py-2 hover:bg-yellow-200">
                                                    {{ $tour->title }}
                                                </a>
                                            </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>

                    </li>

                    <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                </ul>
            </nav>
            <div></div>



            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden border-0 outline-none flex flex-col gap-1.5">
                <span class="w-6 h-[2px] bg-black block"></span>
                <span class="w-4 h-[2px] bg-black block"></span>
                <span class="w-2 h-[2px] bg-black block"></span>
            </button>
        </div>

        <!-- Mobile Dropdown Menu (inside header itself) -->
        <div id="mobile-menu"
            class="md:hidden overflow-hidden max-h-0 shadow-lg tansition-all duration-500 ease-in-out text-black w-full">
            <div class="px-4 py-4">
                <div class="flex flex-col space-y-2">
                    <a href="{{ url('/') }}" class="block text-md">Home</a>

                    <!-- Dropdown Wrapper -->
                    <div class="relative">
                        <!-- Parent Button -->
                        <button onclick="toggleMobileDropdown()"
                            class="flex items-center justify-between w-full text-md">
                            Tour & Packages
                            <svg id="mobileDropdownIcon" class="w-4 h-4 ml-2 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="mobileDropdownMenu" class="hidden flex-col pl-4 mt-2 space-y-2 text-sm">
                            <a href="/tour-heritage.html" class="block">Heritage Tours</a>
                            <a href="/tour-adventure.html" class="block">Adventure Tours</a>
                        </div>
                    </div>

                    <a href="{{ url('about-us') }}" class="block text-md">About Us</a>
                    <a href="{{ url('gallery') }}" class="block text-md">Gallery</a>
                    <a href="{{ url('contact-us') }}" class="block text-md">Contact Us</a>
                </div>

                <!-- Mobile Social Icons -->
                <ul class="flex gap-3 mt-5">
                    <li class="bg-black/10 h-8 w-8 rounded-full flex justify-center items-center">
                        <i class="fa-brands fa-whatsapp text-black text-[18px]"></i>
                    </li>
                    <li class="bg-black/10 h-8 w-8 rounded-full flex justify-center items-center">
                        <i class="fa-brands fa-youtube text-black text-[14px]"></i>
                    </li>
                    <li class="bg-black/10 h-8 w-8 rounded-full flex justify-center items-center">
                        <i class="fa-brands fa-facebook text-black"></i>
                    </li>
                </ul>
            </div>
        </div>
    </header>
