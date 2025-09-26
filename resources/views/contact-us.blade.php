@extends('dashboard.layouts.main')
@section('container.main')
    <!-- hero section -->
    <section id="heroSection"
        class="bg-[url('./images/contact-banner.jpg')] relative bg-no-repeat bg-center bg-cover pt-[110px] pb-[210px] lg:pb-[100px] lg:py-[160px]">
        <div class="text-center">
            <h2 class="lg:text-[48px] text-white text-[24px] font-semibold -mt-1 lg:-mt-3">
                Contact us
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

    <!-- contact section -->
    <section class="lg:py-20 lg:py-10 py-16 px-6 lg:px-32">
        <div class="text-center">
            <h2 class="lg:text-[42px] text-[20px] font-semibold -mt-1 lg:-mt-3">
                Get In Touch
            </h2>

            <p class="lg:text-[16px] text-[11px]">
                Have questions? We’re just a message away
            </p>


            <span>
                @if (session('success'))
                    <p class="text-green-500 text-[12px] mt-2">{{ session('success') }}</p>
                @endif

            </span>

        </div>
        <div class="bg-white rounded-2xl w-full lg:mt-10 mt-6 px-8 py-7">
            <div class="lg:flex justify-between h-[450px] gap-10">
                <div class="lg:w-[60%]">
                    <form action="{{ route('contact-us-post') }}" method="POST">
                        @csrf
                        <div class="lg:flex gap-6">
                            <div class="flex-1">
                                <label class="lg:text-[14px] text-[12px] font-medium">FIRST NAME</label>
                                <input name="fname" type="text" value="{{ old('fname') }}"
                                    class="w-full border mt-1 text-[12px] lg:text-[15px] py-1.5 px-4 rounded-md" />
                                @if (Session::has('message'))
                                    <script>
                                        toastr.options = {
                                            "progressBar": true,
                                            "closeButton": true,
                                        }
                                        toastr.success("{{ Session::get('message') }}", 'Success!', {
                                            timeOut: 12000
                                        });
                                    </script>
                                @endif
                            </div>

                            <div class="flex-1 mt-2 lg:mt-0">
                                <label class="lg:text-[14px] text-[12px] font-medium">LAST NAME</label>
                                <input name="lname" type="text" value="{{ old('lname') }}"
                                    class="border w-full mt-1 lg:text-[14px] text-[12px] py-1.5 px-4 rounded-md" />
                                <span>
                                    @error('lname')
                                        <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p>
                                    @enderror
                                </span>

                            </div>
                        </div>

                        <div class="mt-2 lg:mt-5">
                            <label class="lg:text-[14px] text-[12px] font-medium">EMAIL</label>
                            <input name="email" type="text" value="{{ old('email') }}"
                                class="border w-full mt-1 lg:text-[14px] text-[12px] py-1.5 px-4 rounded-md" />
                            <span>
                                @error('email')
                                    <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>

                        <div class="mt-2 lg:mt-5">
                            <label class="lg:text-[14px] text-[12px] font-medium">MESSAGE</label>
                            <textarea name="message" value="{{ old('message') }}" rows="6"
                                class="border resize-none w-full mt-1 lg:text-[14px] text-[12px] py-1.5 px-4 rounded-md"></textarea>
                            <span>
                                @error('message')
                                    <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>

                        <div class="lg:mt-6 mt-4">
                            <div class="flex gap-2 mb-3 ml-2">
                                <input name="terms" type="checkbox"
                                    class="cursor-pointer accent-[var(--primary-color)] w-3 lg:w-4" />

                                <span>
                                    @error('terms')
                                        <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p>
                                    @enderror
                                </span>
                                <p class="lg:text-[14px] text-[12px] font-medium">
                                    I agree to the Terms and Condition
                                </p>
                            </div>
                            <button type="submit"
                                class="bg-[var(--primary-color)] text-white font-medium rounded-full block lg:py-2 py-1.5 w-full text-[12px] lg:text-[14px]">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>

                <div class="w-[40%] hidden lg:block">
                    <img src="./images/18.jpg" alt="" class="h-full w-full object-cover rounded-xl" />
                </div>
            </div>

            <div class="rounded-xl border py-6 mt-8 grid lg:grid-cols-3 px-8">
                <div class="flex gap-3 items-center justify-center lg:justify-start lg:border-r">
                    <div>
                        <i
                            class="fa-regular fa-envelope h-10 text-[14px] w-10 border rounded-full flex justify-center items-center"></i>
                    </div>

                    <div>
                        <h2 class="text-[15px]">Email</h2>
                        <p class="text-[14px]">hello@uiwiki.co</p>
                    </div>
                </div>

                <div class="flex gap-3 my-10 lg:my-0 justify-center lg:justify-start items-center lg:pl-10 lg:border-r">
                    <div>
                        <i
                            class="fa-solid fa-phone h-10 text-[14px] w-10 border rounded-full flex justify-center items-center"></i>
                    </div>

                    <div>
                        <h2 class="text-[15px]">Phone</h2>
                        <p class="text-[14px]">6232 1151 2211</p>
                    </div>
                </div>

                <div class="flex gap-4 items-center justify-center justify-start lg:pl-10">
                    <p class="text-[15px] font-medium">Follows Us</p>
                    <i
                        class="fa-brands fa-x-twitter h-10 text-[14px] w-10 border rounded-full flex justify-center items-center"></i>
                    <i
                        class="fa-brands fa-instagram h-10 text-[14px] w-10 border rounded-full flex justify-center items-center"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- map -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.7544481910704!2d75.74810857578032!3d26.879541561514664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db500086c45f1%3A0xf6912ee7cae318a1!2sMansarovar%20metro%20station!5e0!3m2!1sen!2sin!4v1755345301366!5m2!1sen!2sin"
        width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- Scripts -->

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
