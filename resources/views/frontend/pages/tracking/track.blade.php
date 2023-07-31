@extends('frontend.master')

@section('user_content')
    <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0"
        class="min-h-screen mb-36 relative">
        <form class="flex flex-col md:flex-row items-center px-10 md:px-0" action="" method="get">
        <div class="container mx-auto my-10">
            <!-- Radio buttons -->
            <div class="flex flex-col md:flex-row mb-3 gap-3 md:gap-10 px-10 md:px-0 ">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">Booking No</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">BL No</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                        value="option3">
                    <label class="form-check-label" for="inlineRadio2">Container No.</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4"
                        value="option4">
                    <label class="form-check-label" for="inlineRadio4">P/O</label>
                </div>
            </div>

                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </div>
                    <input type="text" id="simple-search" name="search"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  "
                        placeholder="Search here..." required>
                </div>
                <div class="flex mt-3 md:mt-0">
                    <button type="submit"
                        class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        Search
                    </button>
                    <button type="submit"
                        class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-teal-700 rounded-lg border border-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 ">
                        Reset
                    </button>
                </div>

            </form>
            <!-- routing -->
            {{-- @dd($datas) --}}
            @if(isset($datas->id))
                <p class="text-xl mt-10 mb-5 px-5 md:px-0 font-semibold">Trace Your Order Here</p>
                <div data-aos="fade-up"
                data-aos-anchor-placement="top-bottom" class="mb-36 px-10 md:px-0">
                    <!-- mobile version for track order -->
                    <ol class="relative text-gray-500 border-l border-gray-200 md:col-span-1 flex md:hidden  flex-col">

                        <li class="mb-10 ml-6 order-1">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-white ">
                                <div
                                    class="rounded-full transition duration-500 ease-in-out h-8 w-8 py-3 border-2 bg-green-600 border-green-600 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                        viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-database ">
                                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                    </svg>
                                </div>
                            </span>
                            <h3 class="font-medium leading-tight">Chuadanga</h3>
                            <p class="text-sm">Destination</p>
                        </li>
                        <li class="mb-10 ml-6 order-2">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-white ">
                                <div
                                    class="rounded-full transition duration-500 ease-in-out h-8 w-8 py-3 border-2 bg-orange-600 border-orange-600 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="#ffffff" fill-rule="evenodd"
                                            d="M10.562 16.285c.03-.502-.083-1.645-.338-3.48l2.652-2.432l1.691 6.053a.5.5 0 0 0 .822.232c1.493-1.386 2.291-2.639 2.36-3.793c.052-.886-.412-2.749-1.397-5.68l.47-.43c2.062-2.062 2.62-3.747 1.417-4.951c-1.204-1.204-2.89-.646-4.937 1.4l-.445.485c-2.932-.984-4.795-1.449-5.68-1.396c-1.155.069-2.408.866-3.793 2.36a.5.5 0 0 0 .232.821l6.053 1.692l-2.431 2.652c-1.835-.256-2.979-.369-3.482-.339c-.78.047-1.6.57-2.497 1.535a.5.5 0 0 0 .232.822l4.78 1.335l.6.6l1.335 4.78a.5.5 0 0 0 .822.231c.965-.895 1.488-1.716 1.534-2.497Zm-1.365-3.6c.27 1.91.393 3.11.367 3.541c-.02.332-.225.742-.629 1.217L7.8 13.375a.5.5 0 0 0-.128-.219l-.786-.785a.5.5 0 0 0-.219-.128L2.6 11.107c.475-.404.884-.61 1.217-.63c.431-.025 1.631.097 3.543.368a.5.5 0 0 0 .438-.157l3.16-3.447a.5.5 0 0 0-.234-.82L4.7 4.74c.979-.93 1.83-1.406 2.535-1.448c.734-.043 2.637.44 5.608 1.45a.5.5 0 0 0 .53-.136l.65-.709c1.692-1.69 2.827-2.066 3.508-1.385c.68.681.305 1.815-1.402 3.522l-.693.635a.5.5 0 0 0-.136.53c1.009 2.97 1.493 4.874 1.45 5.608c-.042.704-.518 1.556-1.449 2.535L13.62 9.319a.5.5 0 0 0-.82-.234l-3.446 3.16a.5.5 0 0 0-.157.44Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </span>
                            <h3 class="font-medium leading-tight">Review</h3>
                            <p class="text-sm">thisis my 3nd status 28th July, 2023</p>
                        </li>


                        <li class="mb-10 ml-6 order-3">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-white ">
                                <div
                                    class="rounded-full transition duration-500 ease-in-out h-8 w-8 py-3 border-2 bg-orange-600 border-orange-600 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="#ffffff" fill-rule="evenodd"
                                            d="M10.562 16.285c.03-.502-.083-1.645-.338-3.48l2.652-2.432l1.691 6.053a.5.5 0 0 0 .822.232c1.493-1.386 2.291-2.639 2.36-3.793c.052-.886-.412-2.749-1.397-5.68l.47-.43c2.062-2.062 2.62-3.747 1.417-4.951c-1.204-1.204-2.89-.646-4.937 1.4l-.445.485c-2.932-.984-4.795-1.449-5.68-1.396c-1.155.069-2.408.866-3.793 2.36a.5.5 0 0 0 .232.821l6.053 1.692l-2.431 2.652c-1.835-.256-2.979-.369-3.482-.339c-.78.047-1.6.57-2.497 1.535a.5.5 0 0 0 .232.822l4.78 1.335l.6.6l1.335 4.78a.5.5 0 0 0 .822.231c.965-.895 1.488-1.716 1.534-2.497Zm-1.365-3.6c.27 1.91.393 3.11.367 3.541c-.02.332-.225.742-.629 1.217L7.8 13.375a.5.5 0 0 0-.128-.219l-.786-.785a.5.5 0 0 0-.219-.128L2.6 11.107c.475-.404.884-.61 1.217-.63c.431-.025 1.631.097 3.543.368a.5.5 0 0 0 .438-.157l3.16-3.447a.5.5 0 0 0-.234-.82L4.7 4.74c.979-.93 1.83-1.406 2.535-1.448c.734-.043 2.637.44 5.608 1.45a.5.5 0 0 0 .53-.136l.65-.709c1.692-1.69 2.827-2.066 3.508-1.385c.68.681.305 1.815-1.402 3.522l-.693.635a.5.5 0 0 0-.136.53c1.009 2.97 1.493 4.874 1.45 5.608c-.042.704-.518 1.556-1.449 2.535L13.62 9.319a.5.5 0 0 0-.82-.234l-3.446 3.16a.5.5 0 0 0-.157.44Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </span>
                            <h3 class="font-medium leading-tight">order</h3>
                            <p class="text-sm">1st Port</p>
                        </li>
                        <li class="ml-6 order-last">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8  rounded-full -left-4 ring-4 ring-white ">
                                <div
                                    class="rounded-full transition duration-500 ease-in-out h-8 w-8 py-3 border-2 border-gray-100 bg-blue-600 flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                        viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-bookmark ">
                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                </div>
                            </span>
                            <h3 class="font-medium leading-tight">Dhaka</h3>
                            <p class="text-sm">starting</p>
                        </li>
                    </ol>

                    <div class="mx-4 p-4 hidden md:block">
                        <div class="flex items-center">
                            <div class="flex items-center relative {{ $active >= 1 ? 'text-gray-100' : 'text-black-100' }}">
                                <div
                                    class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-blue-500 {{ $active >= 1 ? 'bg-blue-600' : 'bg-white-100' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-bookmark ">
                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                </div>

                                <div class=" text-xs font-medium capitalize text-blue-600 px-2">Starting Port</div>
                                <div
                                    class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-blue-600">
                                    Dhaka</div>


                            </div>
                            <div class="flex-auto border-t-2 transition duration-500 ease-in-out {{ $active >= 2 ? 'border-orange-600' : 'border-gray-300' }}"></div>
                            <div class="flex items-center relative {{ $active >= 2 ? 'text-white' : 'text-orange-600' }}">
                                <div
                                    class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 {{ $active >= 2 ? 'bg-orange-600' : 'bg-white-600' }} border-orange-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M10.562 16.285c.03-.502-.083-1.645-.338-3.48l2.652-2.432l1.691 6.053a.5.5 0 0 0 .822.232c1.493-1.386 2.291-2.639 2.36-3.793c.052-.886-.412-2.749-1.397-5.68l.47-.43c2.062-2.062 2.62-3.747 1.417-4.951c-1.204-1.204-2.89-.646-4.937 1.4l-.445.485c-2.932-.984-4.795-1.449-5.68-1.396c-1.155.069-2.408.866-3.793 2.36a.5.5 0 0 0 .232.821l6.053 1.692l-2.431 2.652c-1.835-.256-2.979-.369-3.482-.339c-.78.047-1.6.57-2.497 1.535a.5.5 0 0 0 .232.822l4.78 1.335l.6.6l1.335 4.78a.5.5 0 0 0 .822.231c.965-.895 1.488-1.716 1.534-2.497Zm-1.365-3.6c.27 1.91.393 3.11.367 3.541c-.02.332-.225.742-.629 1.217L7.8 13.375a.5.5 0 0 0-.128-.219l-.786-.785a.5.5 0 0 0-.219-.128L2.6 11.107c.475-.404.884-.61 1.217-.63c.431-.025 1.631.097 3.543.368a.5.5 0 0 0 .438-.157l3.16-3.447a.5.5 0 0 0-.234-.82L4.7 4.74c.979-.93 1.83-1.406 2.535-1.448c.734-.043 2.637.44 5.608 1.45a.5.5 0 0 0 .53-.136l.65-.709c1.692-1.69 2.827-2.066 3.508-1.385c.68.681.305 1.815-1.402 3.522l-.693.635a.5.5 0 0 0-.136.53c1.009 2.97 1.493 4.874 1.45 5.608c-.042.704-.518 1.556-1.449 2.535L13.62 9.319a.5.5 0 0 0-.82-.234l-3.446 3.16a.5.5 0 0 0-.157.44Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="px-2 text-xs font-medium capitalize text-orange-600">Account</div>
                                <div
                                    class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-orange-600">
                                    Account</div>

                            </div>
                            <div class="flex-auto border-t-2 transition duration-500 ease-in-out {{ $active >= 3 ? 'border-violet-600' : 'border-violet-300' }}"></div>
                            <div class="flex items-center {{ $active >= 3 ? 'text-white' : 'text-violet-500' }} relative">
                                <div
                                    class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 {{ $active >= 3 ? 'bg-violet-600' : 'bg-white-600' }} border-violet-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M10.562 16.285c.03-.502-.083-1.645-.338-3.48l2.652-2.432l1.691 6.053a.5.5 0 0 0 .822.232c1.493-1.386 2.291-2.639 2.36-3.793c.052-.886-.412-2.749-1.397-5.68l.47-.43c2.062-2.062 2.62-3.747 1.417-4.951c-1.204-1.204-2.89-.646-4.937 1.4l-.445.485c-2.932-.984-4.795-1.449-5.68-1.396c-1.155.069-2.408.866-3.793 2.36a.5.5 0 0 0 .232.821l6.053 1.692l-2.431 2.652c-1.835-.256-2.979-.369-3.482-.339c-.78.047-1.6.57-2.497 1.535a.5.5 0 0 0 .232.822l4.78 1.335l.6.6l1.335 4.78a.5.5 0 0 0 .822.231c.965-.895 1.488-1.716 1.534-2.497Zm-1.365-3.6c.27 1.91.393 3.11.367 3.541c-.02.332-.225.742-.629 1.217L7.8 13.375a.5.5 0 0 0-.128-.219l-.786-.785a.5.5 0 0 0-.219-.128L2.6 11.107c.475-.404.884-.61 1.217-.63c.431-.025 1.631.097 3.543.368a.5.5 0 0 0 .438-.157l3.16-3.447a.5.5 0 0 0-.234-.82L4.7 4.74c.979-.93 1.83-1.406 2.535-1.448c.734-.043 2.637.44 5.608 1.45a.5.5 0 0 0 .53-.136l.65-.709c1.692-1.69 2.827-2.066 3.508-1.385c.68.681.305 1.815-1.402 3.522l-.693.635a.5.5 0 0 0-.136.53c1.009 2.97 1.493 4.874 1.45 5.608c-.042.704-.518 1.556-1.449 2.535L13.62 9.319a.5.5 0 0 0-.82-.234l-3.446 3.16a.5.5 0 0 0-.157.44Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="px-2 text-xs font-medium uppercase text-violet-500">Message</div>
                                <div
                                    class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-violet-500">
                                    Message</div>
                            </div>
                            <div class="flex-auto border-t-2 transition duration-500 ease-in-out {{ $active >= 4 ? 'border-teal-400' : 'border-gray-300' }}"></div>
                            <div class="flex items-center {{ $active >= 4 ? 'text-white' : 'text-teal-500' }} relative">
                                <div
                                    class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 {{ $active >= 4 ? 'bg-teal-400' : 'bg-white-600' }} border-teal-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-database ">
                                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                    </svg>
                                </div>
                                <div class="px-2 text-xs font-medium uppercase text-teal-500">Confirm</div>
                                <div
                                    class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-500">
                                    Confirm</div>
                            </div>
                        </div>
                    </div>

                    <!-- order deetails -->
                    <div class="px-5 md:px-0 my-20">
                        <div class="bg-white container mx-auto px-5 py-5 rounded-xl shadow-lg shadow-zinc-100/80">

                            <div class="  grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 items-center gap-5  ">
                                <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                    <div class="bg-blue-100 px-2 py-2 rounded-full">
                                        <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                            height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
                                            <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8" />
                                        </svg>


                                    </div>

                                    <div>
                                        <p class="text-sm font-medium">Sl No</p>
                                        <p class="text-sky-700 text-sm font-medium">1</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                    <div class="bg-sky-100 px-2 py-2 rounded-full">
                                        <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                            height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
                                            <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8" />
                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-sm font-medium">Bl No</p>
                                        <p class="text-sky-700 text-sm font-medium">1</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                    <div class="bg-blue-100 px-2 py-2 rounded-full">
                                        <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                            height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
                                            <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8" />
                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-sm font-medium">Booking No</p>
                                        <p class="text-sky-700 text-sm font-medium">2</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                    <div class="bg-blue-100 px-2 py-2 rounded-full">
                                        <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                            height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="11.5" cy="8.5" r="5.5" />
                                            <path d="M11.5 14v7" />
                                        </svg>
                                    </div>

                                    <div>
                                        <p class="text-sm font-medium">Starting Point</p>
                                        <p class="text-sky-700 text-sm font-medium">Dhaka</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                    <div class="bg-blue-100 px-2 py-2 rounded-full">
                                        <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                            height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="11.5" cy="8.5" r="5.5" />
                                            <path d="M11.5 14v7" />
                                        </svg>
                                    </div>

                                    <div>
                                        <p class="text-sm font-medium">Destination Point</p>
                                        <p class="text-sky-700 text-sm font-medium">Dhaka</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="text-xl my-5 font-semibold px-5 md:px-0">Route scheduling</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-10 mt-10 px-5 md:px-0">

                        <ol class="relative text-gray-500 border-l border-gray-200 md:col-span-1 flex  flex-col">

                            <li class="mb-10 ml-6 order-1">
                                <span
                                    class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-white ">
                                    <svg class="w-3.5 h-3.5 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                        <path
                                            d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z" />
                                    </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Account Info</h3>
                                <p class="text-sm">thisis my 3nd status 28th July, 2023</p>
                            </li>
                            <li class="mb-10 ml-6 order-2">
                                <span
                                    class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-white ">
                                    <svg class="w-3.5 h-3.5 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                        <path
                                            d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                                    </svg>
                                </span>
                                <h3 class="font-medium leading-tight">Review</h3>
                                <p class="text-sm">thisis my 3nd status 28th July, 2023</p>
                            </li>


                            <li class="mb-10 ml-6 order-3">
                                <span
                                    class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-white ">
                                    <svg class="w-3.5 h-3.5 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                        <path
                                            d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                                    </svg>
                                </span>
                                <h3 class="font-medium leading-tight">account</h3>
                                <p class="text-sm">thisis my 3nd status 28th July, 2023</p>
                            </li>
                            <li class="ml-6 order-last">
                                <span
                                    class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-white ">
                                    <div
                                        class="rounded-full transition duration-500 ease-in-out h-8 w-8 py-3 border-2 bg-orange-600 border-orange-600 flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="20"
                                            viewBox="0 0 24 24">
                                            <path fill="#ffffff" fill-rule="evenodd"
                                                d="M10.562 16.285c.03-.502-.083-1.645-.338-3.48l2.652-2.432l1.691 6.053a.5.5 0 0 0 .822.232c1.493-1.386 2.291-2.639 2.36-3.793c.052-.886-.412-2.749-1.397-5.68l.47-.43c2.062-2.062 2.62-3.747 1.417-4.951c-1.204-1.204-2.89-.646-4.937 1.4l-.445.485c-2.932-.984-4.795-1.449-5.68-1.396c-1.155.069-2.408.866-3.793 2.36a.5.5 0 0 0 .232.821l6.053 1.692l-2.431 2.652c-1.835-.256-2.979-.369-3.482-.339c-.78.047-1.6.57-2.497 1.535a.5.5 0 0 0 .232.822l4.78 1.335l.6.6l1.335 4.78a.5.5 0 0 0 .822.231c.965-.895 1.488-1.716 1.534-2.497Zm-1.365-3.6c.27 1.91.393 3.11.367 3.541c-.02.332-.225.742-.629 1.217L7.8 13.375a.5.5 0 0 0-.128-.219l-.786-.785a.5.5 0 0 0-.219-.128L2.6 11.107c.475-.404.884-.61 1.217-.63c.431-.025 1.631.097 3.543.368a.5.5 0 0 0 .438-.157l3.16-3.447a.5.5 0 0 0-.234-.82L4.7 4.74c.979-.93 1.83-1.406 2.535-1.448c.734-.043 2.637.44 5.608 1.45a.5.5 0 0 0 .53-.136l.65-.709c1.692-1.69 2.827-2.066 3.508-1.385c.68.681.305 1.815-1.402 3.522l-.693.635a.5.5 0 0 0-.136.53c1.009 2.97 1.493 4.874 1.45 5.608c-.042.704-.518 1.556-1.449 2.535L13.62 9.319a.5.5 0 0 0-.82-.234l-3.446 3.16a.5.5 0 0 0-.157.44Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </span>
                                <h3 class="font-medium leading-tight">Dhaka</h3>
                                <p class="text-sm">starting</p>
                            </li>
                        </ol>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:col-span-2">
                            <div class="bg-teal-100 border border-teal-400 px-4 py-2 flex items-center shadow-md rounded-lg">
                                <p>Vessel Voy No. : dfdsfds</p>
                            </div>
                            <div class="bg-teal-100 border border-teal-400 px-4 py-2 flex items-center shadow-md rounded-lg">
                                <p>No. of Containers (booking quantity) : 21</p>
                            </div>
                            <div class="bg-teal-100 border border-teal-400 px-4 py-2 flex items-center shadow-md rounded-lg">
                                <p>No. of Packages : 23</p>
                            </div>
                            <div
                                class="bg-violet-100 border border-violet-400 px-4 py-2 flex items-center shadow-md rounded-lg">
                                <p>Measurement : dfsdsgf</p>
                            </div>
                            <div
                                class="bg-violet-100 border border-violet-400 px-4 py-2 flex items-center shadow-md rounded-lg">
                                <p>On Board Date : 23rd July, 2023</p>
                            </div>
                            <div
                                class="bg-violet-100 border border-violet-400 px-4 py-2 flex items-center shadow-md rounded-lg">
                                <p>Service Requirement : service goes here from now</p>
                            </div>
                            <div
                                class="bg-orange-100 border border-orange-400 px-4 py-2 md:col-span-3  flex justify-centeritems-center shadow-md rounded-lg">
                                <p>Gross Cargo Weight : Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam </p>
                            </div>
                        </div>
                    </div>


                </div>
            @endif
        </div>
    </div>
@endsection

@push('js')
    <script>
        AOS.init();
    </script>
@endpush
