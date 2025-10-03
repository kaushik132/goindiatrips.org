@extends('dashboard.layouts.main')
@section('container.main')
    <!-- hero section -->
    <section id="heroSection"
        class="bg-[url('{{url('uploads/'.$tourData->banner_image)}}')] relative bg-no-repeat bg-center bg-cover pt-[110px] pb-[210px] lg:pb-[100px] lg:py-[160px]">
        <div class="text-center">
            <h2 class="lg:text-[48px] text-white text-[24px] font-semibold -mt-1 lg:-mt-3">
             {{$tourData->title}}
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

    <section class="lg:px-14 px-6 pt-[80px]">
        <div class="grid lg:grid-cols-3 grid-cols-2 auto-rows-[100px] lg:auto-rows-[145px] gap-3 lg:gap-4">
            <div class="col-span-2 row-span-4 relative">
                <img class="w-full h-full rounded-[30px]" src="{{url('uploads/'.$tourData->thumnail_image)}}" alt="tour deatils" />

                <div class="flex justify-between items-center w-full absolute bottom-0 left-0 lg:px-8 px-4 py-4 lg:py-8">
                    <div class="bg-[rgba(0,0,0,.7)] rounded-lg lg:px-6 px-4 py-3 inline-block">
                        <p class="lg:text-[14px] text-[10px] text-white">
                           {{$tourData->tourCategorys->name}}
                        </p>
                    </div>

                    <a href="#"
                        class="bg-[rgba(0,0,0,.7)] rounded-full h-[50px] flex justify-center items-center w-[50px]">
                        <i class="fa-solid fa-share-nodes text-white text-[20px]"></i></a>
                </div>
            </div>


         @php
    $gallery = $tourData->gallery; // already array
    $totalImages = count($gallery);
@endphp

{{-- Grid wrapper --}}

    @foreach ($gallery as $key => $image)
        {{-- पहले 4 ही दिखाने हैं --}}
        @if ($key < 4)
            {{-- अगर ये आखिरी दिखने वाली image है और total > 4 --}}
            @if ($key === 3 && $totalImages > 4)
                <div class="col-span-1 relative">
                    <img class="w-full rounded-[30px] object-cover h-full"
                         src="{{ url('uploads/'.$image) }}" alt="" />
                    <div
                        class="bg-[rgba(0,0,0,.4)] h-full w-full rounded-[30px] absolute top-0 left-0 flex justify-center items-center">
                        <p class="text-[32px] text-white font-semibold">+{{ $totalImages - 4 }}</p>
                    </div>
                </div>
            @else
                <div class="col-span-1">
                    <img class="w-full rounded-[30px] object-cover h-full"
                         src="{{ url('uploads/'.$image) }}" alt="" />
                </div>
            @endif
        @endif
    @endforeach


        </div>
    </section>

    <section class="lg:px-14 px-6 py-[30px]">
        <div class="grid lg:grid-cols-3 lg:gap-8">
            <div class="lg:col-span-2">
                <div>
                    <span
                        class="bg-[#E2AC55] lg:px-6 px-4 py-2 text-[12px] lg:text-[15px] text-white font-medium rounded-lg"> {{$tourData->tourCategorys->name}}</span>

                    <span
                        class="bg-[#2B9E4B] lg:ml-3 ml-2 lg:px-6 px-4 py-2 text-[12px] lg:text-[15px] text-white font-medium rounded-lg">{{$tourData->discount_off}}
                        OFF</span>
                </div>

                <div class="mt-4">
                    <h2 class="lg:text-[42px] text-[22px] font-medium">
                        {{$tourData->title}}
                    </h2>
                    <p class="text-[#8C7858] lg:text-[18px] text-[14px] lg:-mt-1">
                        {{$tourData->short_description}}
                    </p>

                    <div class="mt-5 flex lg:gap-14 gap-5 items-center">
                        <div class="flex gap-2">
                            <i class="fa-solid fa-star text-[#3D6687] text-[14px] lg:text-[18px]"></i>
                            <p class="text-[#8C7858] text-[13px] lg:text-[16px]">
                                {{$tourData->rating}} ({{$tourData->review}} Review)
                            </p>
                        </div>

                        <div class="flex gap-2">
                            <i class="fa-solid fa-calendar text-[#3D6687] text-[14px] lg:text-[18px]"></i>
                            <p class="text-[#8C7858] text-[13px] lg:text-[16px]">{{$tourData->time_date}}</p>
                        </div>

                        <div class="flex gap-2">
                            <i class="fa-solid fa-star text-[#3D6687] text-[14px] lg:text-[18px]"></i>
                            <p class="text-[#8C7858] text-[13px] lg:text-[16px]">{{$tourData->number_of_person}}</p>
                        </div>
                    </div>
                </div>

                <div class="lg:mt-10 mt-6">
                    <h2 class="lg:text-[32px] text-[20px]">Tour Overview</h2>

                    <p class="mt-1 lg:text-[16px] text-[12px]">
                        {!!$tourData->description!!}
                    </p>
                </div>


                <!-- Tabs -->
                <div class="lg:mt-12 mt-8 flex justify-center">
                    <ul
                        class="flex bg-[#EEC587] rounded-full p-1 w-full justify-between text-[13px] lg:text-[16px] font-medium">
                        <li>
                            <button onclick="openTab('itinerary')" id="tab-itinerary"
                                class="tab-btn block px-6 py-2 bg-white rounded-full text-black text-center">
                                Itinerary
                            </button>
                        </li>

                        <li>
                            <button onclick="openTab('inclusion')" id="tab-inclusion"
                                class="tab-btn block px-6 py-2 rounded-full text-black hover:bg-white hover:shadow">
                                Inclusion & Exclusion
                            </button>
                        </li>

                        <li>
                            <button onclick="openTab('details')" id="tab-details"
                                class="tab-btn block px-6 py-2 rounded-full text-black hover:bg-white hover:shadow">
                                Details
                            </button>
                        </li>
                    </ul>
                </div>

                <!-- Content Wrapper -->
                <div class="lg:mt-12 mt-14 border-[#C4C4C4] border lg:px-10 px-6 py-6 rounded-[30px]">
                    <!-- Itinerary Content -->
                    {{-- <div id="content-itinerary" class="tab-content">
                        <h2 class="lg:text-[22px] text-[16px]">
                            Day 1: Royal Heritage Discovery
                        </h2>
                        <div class="mt-8">
                            <ul class="space-y-8">
                                <li class="flex lg:gap-4 gap-1">
                                    <div>
                                        <span
                                            class="block w-[70px] lg:w-auto border-[#E7E7E7] border px-3 py-1.5 text-[10px] lg:text-[12px] rounded-lg">9:00
                                            AM</span>
                                    </div>
                                    <div>

                                        <p class="lg:text-[16px] text-[10px] text-[#8C7858]">
                                            Comfortable pickup from your hotel in Jaipur city center
                                        </p>
                                    </div>
                                </li>
                                <!-- aur bhi items ... -->
                            </ul>
                        </div>
                    </div> --}}

                    <div id="content-itinerary" class="tab-content">
    @foreach ($destinationsdetails as $dayIndex => $detail)
        <h2 class="lg:text-[22px] text-[16px]">
            Day {{ $dayIndex + 1 }}: {{ $detail->name }}
        </h2>

        <div class="mt-8">
            <ul class="space-y-8">
                <li class="flex lg:gap-4 gap-1">
                    <div>
                        <span
                            class="block w-[70px] lg:w-auto border-[#E7E7E7] border px-3 py-1.5 text-[10px] lg:text-[12px] rounded-lg">
                            {{ $detail->time }}
                        </span>
                    </div>
                    <div>
                        <p class="lg:text-[16px] text-[10px] text-[#8C7858]">
                            {!! $detail->description !!}
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    @endforeach
</div>


                    <!-- Inclusion Content -->
                <div id="content-inclusion" class="tab-content hidden">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- What's Included -->
        <div class="bg-white rounded-2xl shadow p-6">
            <h3 class="text-lg font-semibold text-green-600 flex items-center gap-2 mb-3">
                ✅ What's Included
            </h3>
            <ul class="space-y-2 text-sm text-gray-700">
                <?php
                $includeds = $tourData->included ? explode('__', $tourData->included) : [];
                ?>
                @foreach ($includeds as $item)
                    @if(trim($item) != '')
                        <li class="flex items-start gap-2">
                            <span class="text-green-600 text-lg">✓</span>
                            <p>{!! trim($item) !!}</p>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>

        <!-- What's Not Included -->
        <div class="bg-white rounded-2xl shadow p-6">
            <h3 class="text-lg font-semibold text-red-600 flex items-center gap-2 mb-3">
                ❌ What's Not Included
            </h3>
            <ul class="space-y-2 text-sm text-gray-700">
                <?php
                $excludeds = $tourData->exclusions ? explode('__', $tourData->exclusions) : [];
                ?>
                @foreach ($excludeds as $item)
                    @if(trim($item) != '')
                        <li class="flex items-start gap-2">
                            <span class="text-red-600 text-lg">✗</span>
                            <p>{!! trim($item) !!}</p>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>


                    <!-- Details Content -->
                    <div id="content-details" class="tab-content hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Important Information -->
                            <div class="bg-white rounded-2xl shadow p-6">
                                <h3 class="text-lg font-semibold mb-3">
                                    Important Information
                                </h3>
                                <p class="text-sm text-gray-600 mb-2">
                                       <li>{!! $tourData->important_information!!}</li>

                                </p>


                            </div>

                            <!-- Cancellation Policy -->
                            <div class="bg-white rounded-2xl shadow p-6">
                                <h3 class="text-lg font-semibold mb-3">
                                    Cancellation Policy
                                </h3>
                                <p class="text-sm text-gray-600 mb-3">
                                    Free cancellation up to 24 hours before the tour. 50% refund
                                    on cancellations within 24 hours.
                                </p>
                                <div class="bg-yellow-100 border-l-4 border-yellow-500 p-3 rounded-md">
                                    <p class="text-sm text-gray-700">
                                        <strong>Weather Policy:</strong> Tours operate in most
                                        weather conditions. In case of extreme weather, we'll
                                        reschedule or provide a full refund.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 mt-7">
                <div>
                    <p class="lg:text-[28px] text-[20px] font-medium">
                        {!!$tourData->discount_price!!}
                        <del class="text-[#858484] lg:text-[18px] text-[15px] ml-2">{!!$tourData->price!!}</del>
                    </p>
                    {{-- <p class="text-[#8C7858] lg:text-[15px] text-[12px]">Per Person</p> --}}

                    <form class="mt-4">
                        <div>
                            <label class="lg:text-[15px] text-[13px] font-medium">Select Date</label>
                            <input type="date" class="px-3 py-2 w-full text-[12px] lg:text-[15px] rounded-lg mt-1" />
                        </div>

                        <div class="mt-3">
                            <label class="lg:text-[15px] text-[13px] font-medium">Number of Travelers</label>
                            <select type="date" class="px-3 py-2 w-full text-[12px] lg:text-[15px] rounded-lg mt-1">
                                <option value="">Select Members</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>

                        <div class="lg:mt-10 mt-6">
                            <button type="submit"
                                class="text-[#fff] bg-[var(--primary-color)] lg:py-3 py-2 text-[13px] lg:text-[14px] w-full rounded-lg">
                                Book Now
                            </button>
                        </div>
                    </form>

                    <span class="inline-block lg:mt-10 mt-6 bg-[#C6C6C6] h-[1px] w-full"></span>

                    <div class="lg:mt-6 mt-3 text-center">
                        <p class="text-[#8C7858] text-[12px] lg:text-[15px]">
                            Need Help?
                        </p>

                        <a href="#" class="mt-1 inline-block text-[13px] lg:text-[16px]"><i
                                class="fa-solid fa-phone mr-1"></i> Call +91 9856774839</a>
                    </div>
                </div>

                <div class="border-[#C7C7C7] border rounded-[30px] lg:px-8 px-6 py-6 mt-6">
                    <h2 class="lg:text-[18px] text-[15px]">Quick Info</h2>

                    <div class="mt-3 space-y-2">
                        <div class="flex justify-between font-medium">
                            <p class="text-[#8C7858] lg:text-[15px] text-[13px]">
                                Duration:
                            </p>

                            <p class="lg:text-[15px] text-[13px]">{{$tourData->time_date}}</p>
                        </div>

                        <div class="text-[15px] flex justify-between font-medium">
                            <p class="text-[#8C7858] lg:text-[15px] text-[13px]">
                                Group Size:
                            </p>

                            <p class="lg:text-[15px] text-[13px]">{{$tourData->number_of_person}}</p>
                        </div>

                        <div class="text-[15px] flex justify-between font-medium">
                            <p class="text-[#8C7858] lg:text-[15px] text-[13px]">Rating:</p>

                            <p class="lg:text-[15px] text-[13px]">⭐ {{$tourData->rating}}/5</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-7 lg:px-14 py-12">
        <div>
            <h2 class="lg:text-[32px] text-[20px] font-medium">Related Tours</h2>
        </div>
        <!-- Container -->
        <div id="tourSwiper" class="swiper mySwiper mt-4">
            <div class="swiper-wrapper">


                {{-- <div class="swiper-slide">
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
                </div> --}}
@foreach ($alltour as $touraa)


                <div class="swiper-slide">
                    <div class="col-span-1 relative border-[#E4E6E8] border rounded-3xl">
                        <div>
                            <img class="h-[270px] w-full object-cover rounded-t-3xl" src="{{url('uploads/'.$touraa->thumnail_image)}}" alt />
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
                                class="lg:text-[11px] text-[10px] font-medium text-[#F09814] bg-white px-5 py-1.5 rounded-full">{{$touraa->tourCategorys->name}}</span>
                        </div>
                    </div>
                </div>
                @endforeach

                {{-- <div class="swiper-slide">
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
                </div> --}}

                {{-- <div class="swiper-slide">
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
                </div> --}}
            </div>
        </div>
    </section>

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

    <!-- Tab Switching Script -->
    <script>
        function openTab(tab) {
            // Hide all
            document
                .querySelectorAll(".tab-content")
                .forEach((el) => el.classList.add("hidden"));
            document
                .querySelectorAll(".tab-btn")
                .forEach((el) => el.classList.remove("bg-white", "text-black"));

            // Show active
            document.getElementById("content-" + tab).classList.remove("hidden");
            document
                .getElementById("tab-" + tab)
                .classList.add("bg-white", "text-black");
        }
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
