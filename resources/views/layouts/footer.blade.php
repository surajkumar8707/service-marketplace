<footer class="bg-black text-white py-8 mt-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="text-center">
            <div>
                <h1 class="text-4xl font-bold mb-4">{{ $settings->app_name }}</h1>
            </div>
            <div class="social-media-links flex text-white gap-5 mt-5 ml-20">
                @if ($settings->contact)
                    <a href="tel:+91{{ $settings->contact }}" target="_blank">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                            height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M391.1 351.1c-13.2 0-26.2-2.1-38.7-6.3-10.4-3.6-21.9-.9-29.7 6.8l-45.5 34.4c-60.6-31.6-110.2-81.2-141.8-141.8l34.4-45.5c7.8-7.8 10.4-19.3 6.8-29.7-4.2-12.5-6.3-25.5-6.3-38.7 0-16.6-13.5-30.1-30.1-30.1H70.9c-16.6 0-30.1 13.5-30.1 30.1C40.8 317.4 194.6 471.2 389.1 471.2c16.6 0 30.1-13.5 30.1-30.1v-69.5c0-16.6-13.5-30.1-30.1-30.1z" />
                        </svg>
                    </a>
                @endif
                @if ($settings->whatsapp)
                    <a href="https://wa.me/+91{{ $settings->whatsapp }}" target="_blank">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
                            height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                            </path>
                        </svg>
                    </a>
                @endif

                @if ($social->instagram_show)
                    <a href="{{ $social->instagram }}" target="_blank">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
                            height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                            </path>
                        </svg>
                    </a>
                @endif
                @if ($social->youTube_show)
                    <a href="{{ $social->youTube }}" target="_blank">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                            height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M549.655 124.083C534.876 85.519 502.926 64 463.728 64H112.271C73.074 64 41.124 85.519 26.345 124.083 15.65 151.356 8 185.212 8 256s7.65 104.644 18.345 131.917C41.124 426.481 73.074 448 112.271 448h351.457c39.198 0 71.148-21.519 86.927-60.083C560.35 360.644 568 326.788 568 256s-7.65-104.644-18.345-131.917zM232 336V176l142.745 80L232 336z" />
                        </svg>
                    </a>
                @endif
                @if ($social->facebook_show)
                    <a href="{{ $social->facebook }}" target="_blank">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
                            height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z">
                            </path>
                        </svg>
                    </a>
                @endif
                @if ($social->twitter_show)
                    <a href="{{ $social->twitter }}" target="_blank">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                            height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M459.4 151.7c.3 4.5.3 9.1.3 13.6 0 138.7-105.6 298.9-298.9 298.9-59.5 0-114.7-17.4-161.1-47.1 8.4 1 16.6 1.3 25.6 1.3 49.2 0 94.5-16.6 130.3-44.8-46.1-.8-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.5-1.3 27.2-3.6-48.1-9.8-84.3-51.9-84.3-102.9v-1.3c14.3 7.9 30.7 12.7 48.1 13.3-28.3-18.9-46.8-51-46.8-87.7 0-19.2 5.2-37.1 14.3-52.5C91.6 121.9 162.7 162.5 243 166.4c-1.9-7.6-2.9-15.6-2.9-23.7 0-57.4 46.8-104.2 104.2-104.2 30.1 0 57.3 12.7 76.4 33.1 23.7-4.5 46.1-13.3 66.4-25.2-7.8 24.4-24.4 44.8-46.1 57.6 21-2.3 41.3-8.1 60.1-16.2-14.4 20.8-32.7 39.2-53.8 53.9z" />
                        </svg>
                    </a>
                @endif
                @if ($social->linkedin_show)
                    <a href="{{ $social->linkedin }}" target="_blank">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
                            height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.57 0 53.79 0 24.09 24.09 0 53.79 0s53.79 24.09 53.79 53.79c0 29.78-24.09 54.31-53.79 54.31zM447.9 448h-92.4V302.4c0-34.7-.7-79.3-48.3-79.3-48.3 0-55.7 37.7-55.7 76.6V448h-92.4V148.9h88.7v40.8h1.3c12.3-23.3 42.3-47.9 87-47.9 93 0 110.1 61.2 110.1 140.7V448z" />
                        </svg>
                    </a>
                @endif

            </div>
        </div>
        <div class="">
            <h6 class=" text-blue-400 mb-2 font-bold text-xl ">Services</h6>
            <ul class="flex  gap-[2em]   ">
                <ul class="flex flex-col gap-2 ">
                    <li class="text-md ">Hotels</li>
                    <li class=" text-md">Homestays</li>
                </ul>
                <ul class="flex flex-col gap-2 ">
                    <li class=" text-md">Electricians</li>
                    <li class=" text-md">Plumbers</li>
                </ul>
                <ul class="flex flex-col gap-2 ">
                    <li class=" text-md">Single Rooms</li>
                    <li class=" text-md">Flat Homes</li>
                </ul>
                <ul class="flex flex-col gap-2 ">
                    <li class=" text-md">Taxis</li>
                    <li class=" text-md">Pickup vans</li>
                </ul>
            </ul>
        </div>
        <div class="text-center">
            <h6 class=" text-blue-400 mb-2 font-bold text-xl ">For partners</h6>
            <li class="list-none m-auto">Register as Professional</li>
        </div>
    </div>
    <br>
    <div class="ml-20">
        <a class="no-underline" href="/terms">
            <p class="text-white text-sm">Terms and Conditions</p>
        </a>
        <a class="no-underline" href="/about-us">
            <p class="text-white text-sm">About Us</p>
        </a>
        <a class="no-underline" href="/refund-policy">
            <p class="text-white text-sm">Refund Policy</p>
        </a>
    </div>
    <br>
    <div class="container mx-auto px-4 text-center">
        <p>© 2023 BharatPros. All rights reserved.</p>
    </div>
</footer>
