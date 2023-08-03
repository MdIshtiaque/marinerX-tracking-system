@extends('frontend.master')

@section('user_content')
    <div
         class="min-h-screen mb-36 relative">
        <div class="container mx-auto my-10">
            <p class="text-xl mt-5 mb-10 px-5 md:px-0 font-semibold flex justify-center">Trace Your Order Here</p>
{{--            <form action="" method="get">--}}
{{--                <div class="flex flex-col md:flex-row mb-3 gap-3 md:gap-10 px-10 md:px-0 ">--}}
{{--                    <div class="form-check form-check-inline">--}}
{{--                        <input class="form-check-input" type="radio" name="inlineRadioOptions"--}}
{{--                               id="inlineRadio1"--}}
{{--                               value="option1" {{ $request->inlineRadioOptions == 'option1' ? 'checked' : ''}} required>--}}
{{--                        <label class="form-check-label" for="inlineRadio1">Booking No</label>--}}
{{--                    </div>--}}
{{--                    <div class="form-check form-check-inline">--}}
{{--                        <input class="form-check-input" type="radio" name="inlineRadioOptions"--}}
{{--                               id="inlineRadio2"--}}
{{--                               value="option2" {{ $request->inlineRadioOptions == 'option2' ? 'checked' : ''}} required>--}}
{{--                        <label class="form-check-label" for="inlineRadio2">BL No</label>--}}
{{--                    </div>--}}
{{--                    <div class="form-check form-check-inline">--}}
{{--                        <input class="form-check-input" type="radio" name="inlineRadioOptions"--}}
{{--                               id="inlineRadio3"--}}
{{--                               value="option3" {{ $request->inlineRadioOptions == 'option3' ? 'checked' : ''}} required>--}}
{{--                        <label class="form-check-label" for="inlineRadio3">Container No.</label>--}}
{{--                    </div>--}}
{{--                    <div class="form-check form-check-inline">--}}
{{--                        <input class="form-check-input" type="radio" name="inlineRadioOptions"--}}
{{--                               id="inlineRadio4"--}}
{{--                               value="option4" {{ $request->inlineRadioOptions == 'option4' ? 'checked' : ''}} required>--}}
{{--                        <label class="form-check-label" for="inlineRadio4">P/O</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex flex-col md:flex-row items-center px-10 md:px-0">--}}
{{--                    <label for="simple-search" class="sr-only">Search</label>--}}
{{--                    <div class="relative w-full">--}}
{{--                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"--}}
{{--                                 fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"--}}
{{--                                 stroke-linejoin="round">--}}
{{--                                <circle cx="11" cy="11" r="8"></circle>--}}
{{--                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                        <input type="text" value="{{ $request->input('search') }}" name="search" id="simple-search"--}}
{{--                               class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  "--}}
{{--                               placeholder="Search here..." required>--}}
{{--                    </div>--}}
{{--                    <div class="flex mt-3 md:mt-0">--}}
{{--                        <button type="submit"--}}
{{--                                class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-blue-900 duration-300 inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">--}}
{{--                            Search--}}
{{--                        </button>--}}
{{--                        <a type="button" href="{{ route('track.order') }}"--}}
{{--                           class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-teal-900 duration-300 inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-teal-700 rounded-lg border border-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 ">--}}
{{--                            Reset--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
            <form class="flex flex-col items-center" action="" method="get">
                @csrf
                <!-- Radio buttons -->
                <div class="flex mb-3">
                    <div class="form-check form-check-inline pe-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                               id="inlineRadio1" value="option1" {{ $request->inlineRadioOptions == 'option1' ? 'checked' : ''}}>
                        <label class="form-check-label" for="inlineRadio1">Booking No</label>
                    </div>
                    <div class="form-check form-check-inline pe-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                               id="inlineRadio2" value="option2" {{ $request->inlineRadioOptions == 'option2' ? 'checked' : ''}}>
                        <label class="form-check-label" for="inlineRadio2">BL No</label>
                    </div>
                    <div class="form-check form-check-inline pe-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                               id="inlineRadio3" value="option3" {{ $request->inlineRadioOptions == 'option3' ? 'checked' : ''}}>
                        <label class="form-check-label" for="inlineRadio2">Container No.</label>
                    </div>
                    <div class="form-check form-check-inline pe-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                               id="inlineRadio4" value="option4" {{ $request->inlineRadioOptions == 'option4' ? 'checked' : ''}}>
                        <label class="form-check-label" for="inlineRadio4">Vessel No.</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                               id="inlineRadio5" value="option5" {{ $request->inlineRadioOptions == 'option5' ? 'checked' : ''}}>
                        <label class="form-check-label" for="inlineRadio5">P/O</label>
                    </div>
                </div>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                             viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </div>
                    <input type="text" name="search" id="simple-search" value="{{ $request->input('search') }}"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                           placeholder="Search here..." required>
                </div>
                <div class="flex mt-2">
                    <button type="submit"
                            class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-blue-900 duration-300 inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Search
                    </button>
                    <a type="submit" href="{{ route('track.order') }}"
                       class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-teal-700 rounded-lg border border-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300">
                        Reset
                    </a>
                </div>
            </form>
            <!-- routing -->
            @if(isset($datas->id))
                @php
                    $starting_port = '';
                    $second_port = '';
                    $third_port = '';
                    $destination_port = '';
                @endphp
                @foreach ($datas->ports as $port)
                    @php
                        if($port->port_type == 'starting'){
                            $starting_port = $port->name;
                        }if($port->port_type == 'second'){
                            $second_port = $port->name;
                        }if($port->port_type == 'third'){
                            $third_port = $port->name;
                        }if($port->port_type == 'destination'){
                            $destination_port = $port->name;
                        }
                    @endphp
                @endforeach

                <div class="mb-36 px-10 md:px-0" data-aos="fade-up"
                data-aos-duration="1000">
                    <p class="text-xl mt-5 mb-10 px-5 md:px-0 font-semibold">Tracking Result:</p>
                    <!-- mobile version for track order -->
                    <ol class="relative text-gray-500 border-l border-gray-200 md:col-span-1 flex md:hidden  flex-col">
                        @if($destination_port !== '')
                            <li class="mb-10 ml-6 order-1">
                                <span
                                    class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-white ">
                                    <div
                                        class="rounded-full transition duration-500 ease-in-out h-8 w-8 py-3 border-2 {{ in_array("destination", $active) ? 'bg-green-600' : 'bg-red-600' }} flex justify-center items-center">
                                        @if(in_array("destination", $active))
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 24 24"
                                                 fill="none" stroke="#8af217" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round"><polyline points="9 11 12 14 22 4"></polyline><path
                                                    d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 24 24" fill="none" stroke="#ffff"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle
                                                    cx="12" cy="12" r="10"></circle><line
                                                    x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>
                                        @endif
                                    </div>
                                </span>
                                <h3 class="font-medium leading-tight">{{ $destination_port }}</h3>
                                <p class="text-sm">Destination Port</p>
                            </li>
                        @endif
                        @if($third_port !== '')
                            <li class="mb-10 ml-6 order-2">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-white ">
                                <div
                                    class="rounded-full transition duration-500 ease-in-out h-8 w-8 py-3 border-2 {{ in_array("third", $active) ? 'bg-green-600' : 'bg-red-600' }} flex justify-center items-center">
                                    @if(in_array("third", $active))
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="#8af217" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round"><polyline points="9 11 12 14 22 4"></polyline><path
                                                d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 24 24" fill="none" stroke="#ffff"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle
                                                cx="12" cy="12" r="10"></circle><line
                                                x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>
                                    @endif
                                </div>
                            </span>
                                <h3 class="font-medium leading-tight">{{ $third_port }}</h3>
                                <p class="text-sm">Third Port</p>
                            </li>
                        @endif
                        @if($second_port !== '')
                            <li class="mb-10 ml-6 order-3">
                                <span
                                    class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-white ">
                                    <div
                                        class="rounded-full transition duration-500 ease-in-out h-8 w-8 py-3 border-2 {{ in_array("second", $active) ? 'bg-green-600' : 'bg-red-600' }} flex justify-center items-center">
                                        @if(in_array("second", $active))
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 24 24"
                                                 fill="none" stroke="#8af217" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round"><polyline points="9 11 12 14 22 4"></polyline><path
                                                    d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 24 24" fill="none" stroke="#ffff"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle
                                                    cx="12" cy="12" r="10"></circle><line
                                                    x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>
                                        @endif
                                    </div>
                                </span>
                                <h3 class="font-medium leading-tight">{{ $second_port }}</h3>
                                <p class="text-sm">Second Port</p>
                            </li>
                        @endif
                        <li class="ml-6 order-last">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8  rounded-full -left-4 ring-4 ring-white ">
                                <div
                                    class="rounded-full transition duration-500 ease-in-out h-8 w-8 py-3 border-2 border-gray-100 {{ in_array("starting", $active) ? 'bg-green-600' : 'bg-red-600' }}  flex justify-center items-center">
                                    @if(in_array("starting", $active))
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="#8af217" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round"><polyline points="9 11 12 14 22 4"></polyline><path
                                                d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 24 24" fill="none" stroke="#ffff"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle
                                                cx="12" cy="12" r="10"></circle><line
                                                x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>
                                    @endif
                                </div>
                            </span>
                            <h3 class="font-medium leading-tight">{{ $starting_port }}</h3>
                            <p class="text-sm">Starting Port</p>
                        </li>
                    </ol>
                    <div class="mx-4 p-4 hidden md:block">
                        <div class="flex items-center">
                            <div
                                class="flex items-center relative {{ in_array("starting", $active) ? 'text-white' : '' }}">
                                <div
                                    class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 {{ in_array("starting", $active) ? 'border-teal-600' : 'border-gray-300'}} {{ in_array("starting", $active) ? 'bg-teal-600' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-bookmark ">
                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                </div>

                                <div class=" text-xs font-medium capitalize text-gray-500 px-2">Starting Port</div>
                                <div
                                    class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                                    {{ $starting_port }}</div>


                            </div>
                            @if($second_port !== '')
                                <div
                                    class="flex-auto border-t-2 transition duration-500 ease-in-out {{ in_array("second", $active) ? 'border-teal-600' : 'border-gray-300' }}"></div>
                                <div
                                    class="flex items-center relative {{ in_array("second", $active) ? 'text-white' : '' }}">
                                    <div
                                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 {{ in_array("second", $active) ? 'bg-teal-600' : '' }} border-teal-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="20"
                                             viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                  d="M10.562 16.285c.03-.502-.083-1.645-.338-3.48l2.652-2.432l1.691 6.053a.5.5 0 0 0 .822.232c1.493-1.386 2.291-2.639 2.36-3.793c.052-.886-.412-2.749-1.397-5.68l.47-.43c2.062-2.062 2.62-3.747 1.417-4.951c-1.204-1.204-2.89-.646-4.937 1.4l-.445.485c-2.932-.984-4.795-1.449-5.68-1.396c-1.155.069-2.408.866-3.793 2.36a.5.5 0 0 0 .232.821l6.053 1.692l-2.431 2.652c-1.835-.256-2.979-.369-3.482-.339c-.78.047-1.6.57-2.497 1.535a.5.5 0 0 0 .232.822l4.78 1.335l.6.6l1.335 4.78a.5.5 0 0 0 .822.231c.965-.895 1.488-1.716 1.534-2.497Zm-1.365-3.6c.27 1.91.393 3.11.367 3.541c-.02.332-.225.742-.629 1.217L7.8 13.375a.5.5 0 0 0-.128-.219l-.786-.785a.5.5 0 0 0-.219-.128L2.6 11.107c.475-.404.884-.61 1.217-.63c.431-.025 1.631.097 3.543.368a.5.5 0 0 0 .438-.157l3.16-3.447a.5.5 0 0 0-.234-.82L4.7 4.74c.979-.93 1.83-1.406 2.535-1.448c.734-.043 2.637.44 5.608 1.45a.5.5 0 0 0 .53-.136l.65-.709c1.692-1.69 2.827-2.066 3.508-1.385c.68.681.305 1.815-1.402 3.522l-.693.635a.5.5 0 0 0-.136.53c1.009 2.97 1.493 4.874 1.45 5.608c-.042.704-.518 1.556-1.449 2.535L13.62 9.319a.5.5 0 0 0-.82-.234l-3.446 3.16a.5.5 0 0 0-.157.44Z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div class="px-2 text-xs font-medium capitalize text-gray-500">Second Port</div>
                                    <div
                                        class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                                        {{ $second_port }}</div>

                                </div>
                            @endif
                            @if($third_port !== '')
                                <div
                                    class="flex-auto border-t-2 transition duration-500 ease-in-out {{ in_array("third", $active) ? 'border-teal-600' : 'border-gray-300' }}"></div>
                                <div
                                    class="flex items-center {{ in_array("third", $active) ? 'text-white' : '' }} relative">
                                    <div
                                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 {{ in_array("third", $active) ? 'bg-teal-600' : '' }} border-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="20"
                                             viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                  d="M10.562 16.285c.03-.502-.083-1.645-.338-3.48l2.652-2.432l1.691 6.053a.5.5 0 0 0 .822.232c1.493-1.386 2.291-2.639 2.36-3.793c.052-.886-.412-2.749-1.397-5.68l.47-.43c2.062-2.062 2.62-3.747 1.417-4.951c-1.204-1.204-2.89-.646-4.937 1.4l-.445.485c-2.932-.984-4.795-1.449-5.68-1.396c-1.155.069-2.408.866-3.793 2.36a.5.5 0 0 0 .232.821l6.053 1.692l-2.431 2.652c-1.835-.256-2.979-.369-3.482-.339c-.78.047-1.6.57-2.497 1.535a.5.5 0 0 0 .232.822l4.78 1.335l.6.6l1.335 4.78a.5.5 0 0 0 .822.231c.965-.895 1.488-1.716 1.534-2.497Zm-1.365-3.6c.27 1.91.393 3.11.367 3.541c-.02.332-.225.742-.629 1.217L7.8 13.375a.5.5 0 0 0-.128-.219l-.786-.785a.5.5 0 0 0-.219-.128L2.6 11.107c.475-.404.884-.61 1.217-.63c.431-.025 1.631.097 3.543.368a.5.5 0 0 0 .438-.157l3.16-3.447a.5.5 0 0 0-.234-.82L4.7 4.74c.979-.93 1.83-1.406 2.535-1.448c.734-.043 2.637.44 5.608 1.45a.5.5 0 0 0 .53-.136l.65-.709c1.692-1.69 2.827-2.066 3.508-1.385c.68.681.305 1.815-1.402 3.522l-.693.635a.5.5 0 0 0-.136.53c1.009 2.97 1.493 4.874 1.45 5.608c-.042.704-.518 1.556-1.449 2.535L13.62 9.319a.5.5 0 0 0-.82-.234l-3.446 3.16a.5.5 0 0 0-.157.44Z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div class="px-2 text-xs font-medium uppercase text-gray-500">Third Port</div>
                                    <div
                                        class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                                        {{ $third_port }}</div>
                                </div>
                            @endif

                            @if($destination_port !== '')
                                <div
                                    class="flex-auto border-t-2 transition duration-500 ease-in-out {{ in_array("destination", $active) ? 'border-teal-600' : 'border-gray-300' }}"></div>
                                <div
                                    class="flex items-center {{ in_array("destination", $active) ? 'text-white' : '' }} relative">
                                    <div
                                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 {{ in_array("destination", $active) ? 'bg-teal-600' : '' }} border-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-database ">
                                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                        </svg>
                                    </div>
                                    <div class="px-2 text-xs font-medium uppercase text-gray-500">Destination Port</div>
                                    <div
                                        class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                                        {{ $destination_port }}</div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- order deetails -->
                    <div class="px-5 md:px-0 my-20">
                        <div class="bg-white container mx-auto px-5 py-5 rounded-xl shadow-lg shadow-zinc-100/80">
                            <p class="text-xl my-1 font-semibold px-1 pb-5 md:px-0">Basic Details</p>
                            <div class="  grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 items-center gap-5  ">
                                <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                    <div class="bg-blue-100 px-2 py-2 rounded-full">
                                        <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                             height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/>
                                            <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/>
                                        </svg>


                                    </div>

                                    <div>
                                        <p class="text-sm font-medium">Receipt No</p>
                                        <p class="text-sky-700 text-sm font-medium">{{ $datas->receipt_no }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                    <div class="bg-sky-100 px-2 py-2 rounded-full">
                                        <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                             height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/>
                                            <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/>
                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-sm font-medium">Bl No</p>
                                        <p class="text-sky-700 text-sm font-medium">{{ $datas->bl_no }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                    <div class="bg-blue-100 px-2 py-2 rounded-full">
                                        <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                             height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/>
                                            <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/>
                                        </svg>

                                    </div>

                                    <div>
                                        <p class="text-sm font-medium">Booking No</p>
                                        <p class="text-sky-700 text-sm font-medium">{{ $datas->booking_no }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                    <div class="bg-blue-100 px-2 py-2 rounded-full">
                                        <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                             height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="11.5" cy="8.5" r="5.5"/>
                                            <path d="M11.5 14v7"/>
                                        </svg>
                                    </div>

                                    <div>
                                        <p class="text-sm font-medium">Starting Point</p>
                                        <p class="text-sky-700 text-sm font-medium">{{ $datas->starting_port }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                    <div class="bg-blue-100 px-2 py-2 rounded-full">
                                        <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                             height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="11.5" cy="8.5" r="5.5"/>
                                            <path d="M11.5 14v7"/>
                                        </svg>
                                    </div>

                                    <div>
                                        <p class="text-sm font-medium">Destination Point</p>
                                        <p class="text-sky-700 text-sm font-medium">{{ $datas->destination }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="text-xl my-5 font-semibold px-5 md:px-0">Route scheduling</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-10 mt-10 px-5 md:px-0">

                        <ol class="relative text-gray-500 border-l border-gray-200 md:col-span-1 flex  flex-col">
                            @foreach ($datas->status as $status )
                                <li class="ml-6 p-2 {{ $loop->last ? 'order-last' : 'mb-10 order-3' }}">
                                <span
                                    class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-white ">
                                    <svg class="w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                      d="M1 5.917 5.724 10.5 15 1.5"/>
                                                            </svg>
                                </span>
                                    <h3 class="font-medium leading-tight">{{ $status->title }}</h3>
                                    <p class="text-sm">{{ $status->description }}</p>
                                    <p class="text-sm">{{ \Carbon\Carbon::parse($status->status_time_date)->format('jS F, Y') }}</p>
                                </li>
                            @endforeach
                        </ol>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:col-span-2">
                            <div
                                class="bg-cyan-50 border border-zinc-50 px-4 py-2 flex items-center shadow-md rounded-lg">
                                <p><strong>Vessel Voy No. :</strong> {{ $datas->vessel_voy_no }}</p>
                            </div>
                            <div
                                class="bg-cyan-50 border border-zinc-50 px-4 py-2 flex items-center shadow-md rounded-lg">
                                <p><strong>No. of Containers (booking quantity) :</strong> {{ $datas->no_of_containers }}</p>
                            </div>
                            <div
                                class="bg-cyan-50 border border-zinc-50 px-4 py-2 flex items-center shadow-md rounded-lg">
                                <p><strong>No. of Packages :</strong> {{ $datas->no_of_packages }}</p>
                            </div>
                            <div
                                class="bg-cyan-50 border border-zinc-50 px-4 py-2 flex items-center shadow-md rounded-lg">
                                <p><strong>Measurement :</strong> {{ $datas->measurement }}</p>
                            </div>
                            <div
                                class="bg-cyan-50 border border-zinc-50 px-4 py-2 flex items-center shadow-md rounded-lg">
                                <p><strong>On Board Date :</strong> {{ \Carbon\Carbon::parse($datas->on_board_date)->format('jS F, Y') }}</p>
                            </div>
                            <div
                                class="bg-cyan-50 border border-zinc-50 px-4 py-2 flex items-center shadow-md rounded-lg">
                                <p><strong>Gross Cargo Weight :</strong> {{ $datas->gross_cargo_weight }}</p>
                            </div>
                            <div
                                class="bg-cyan-50 border border-zinc-50 px-4 py-2 md:col-span-3  flex justify-centeritems-center shadow-md rounded-lg">
                                <p><strong>Service Requirement :</strong> {{ $datas->service_requirement }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-5 md:px-0 my-20">
                    <div class="bg-white container mx-auto px-5 py-5 rounded-xl shadow-lg shadow-zinc-100/80">
                        <p class="text-xl my-1 font-semibold px-1 pb-5 md:px-0">Container Details</p>
                        <div class="  grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 items-center gap-5">
                            <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                <div class="bg-blue-100 px-2 py-2 rounded-full">
                                    <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                         height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/>
                                        <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/>
                                    </svg>


                                </div>

                                <div>
                                    <p class="text-sm font-medium">Container No</p>
                                    <p class="text-sky-700 text-sm font-medium">{{ $datas->container_no }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                <div class="bg-sky-100 px-2 py-2 rounded-full">
                                    <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                         height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/>
                                        <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/>
                                    </svg>

                                </div>

                                <div>
                                    <p class="text-sm font-medium">Size</p>
                                    <p class="text-sky-700 text-sm font-medium">{{ $datas->size }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                <div class="bg-blue-100 px-2 py-2 rounded-full">
                                    <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                         height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/>
                                        <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/>
                                    </svg>

                                </div>

                                <div>
                                    <p class="text-sm font-medium">Type</p>
                                    <p class="text-sky-700 text-sm font-medium">{{ $datas->type }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                <div class="bg-blue-100 px-2 py-2 rounded-full">
                                    <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                         height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11.5" cy="8.5" r="5.5"/>
                                        <path d="M11.5 14v7"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-sm font-medium">Seal No</p>
                                    <p class="text-sky-700 text-sm font-medium">{{ $datas->seal_no }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                <div class="bg-blue-100 px-2 py-2 rounded-full">
                                    <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                         height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11.5" cy="8.5" r="5.5"/>
                                        <path d="M11.5 14v7"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-sm font-medium">Move Type</p>
                                    <p class="text-sky-700 text-sm font-medium">{{ $datas->move_type }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                <div class="bg-blue-100 px-2 py-2 rounded-full">
                                    <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                         height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11.5" cy="8.5" r="5.5"/>
                                        <path d="M11.5 14v7"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-sm font-medium">Latest Event</p>
                                    <p class="text-sky-700 text-sm font-medium">{{ $datas->latest_event }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                <div class="bg-blue-100 px-2 py-2 rounded-full">
                                    <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                         height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11.5" cy="8.5" r="5.5"/>
                                        <path d="M11.5 14v7"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-sm font-medium">Place</p>
                                    <p class="text-sky-700 text-sm font-medium">{{ $datas->place }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                <div class="bg-blue-100 px-2 py-2 rounded-full">
                                    <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                         height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11.5" cy="8.5" r="5.5"/>
                                        <path d="M11.5 14v7"/>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-sm font-medium">VGM</p>
                                    <p class="text-sky-700 text-sm font-medium">{{ $datas->vgm }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($isSearch === true && !isset($datas->id))
                <div data-aos="fade-right" class="mb-36 px-10 md:px-0">
                    <p class="text-xl mt-5 mb-10 px-5 md:px-0 font-semibold">No Results Found</p>
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
