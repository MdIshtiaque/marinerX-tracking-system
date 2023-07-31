@extends('backend.master')

@section('content')
    <div data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
        <div
            class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 sm:gap-4 lg:gap-5 items-center mt-3 px-5 md:px-0">
            <div class="flex items-center gap-3 my-3 bg-white px-6 py-6 rounded-xl shadow-lg shadow-zinc-100/80">
                <div class="bg-blue-100 px-2 py-2 rounded-full">
                    <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                        <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"></path>
                    </svg>

                </div>

                <div>
                    <p class="text-lg font-medium">No of Packages</p>
                    <p class="text-sky-700 text-base font-medium">{{ $data->no_of_packages }}</p>
                </div>
            </div>
            <div class="flex items-center gap-3 my-3 bg-white px-6 py-6 rounded-xl shadow-lg shadow-zinc-100/80">
                <div class="bg-blue-100 px-2 py-2 rounded-full">
                    <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2">
                        </rect>
                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2">
                        </rect>
                        <line x1="6" y1="6" x2="6.01" y2="6"></line>
                        <line x1="6" y1="18" x2="6.01" y2="18"></line>
                    </svg>
                </div>

                <div>
                    <p class="text-lg font-medium">No of Containers</p>
                    <p class="text-sky-700 text-base font-medium">{{ $data->no_of_containers }}</p>
                </div>
            </div>
            <div class="flex items-center gap-3 my-3 bg-white px-6 py-6 rounded-xl shadow-lg shadow-zinc-100/80">
                <div class="bg-blue-100 px-2 py-2 rounded-full">
                    <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 2a10 10 0 1 0 10 10H12V2zM21.18 8.02c-1-2.3-2.85-4.17-5.16-5.18"></path>
                    </svg>
                </div>

                <div>
                    <p class="text-lg font-medium">Measurement</p>
                    <p class="text-sky-700 text-base font-medium">{{ $data->measurement }}</p>
                </div>
            </div>
        </div>
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-3 gap-5 my-5 px-5 md:px-0">
            <div class="bg-white shadow-lg shadow-zinc-100/80 lg:col-span-2 px-5 py-5 rounded-xl">
                <div class="flex justify-between items-center">
                    <p class="text-xl capitalize font-semibold ">Your order summary</p>
                    <button type="button"
                        class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center justify-center items-center gap-2 flex lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                            <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                        </svg>

                    </button>
                    {{-- <button type="button"
                        class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center justify-center items-center gap-2 hidden lg:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                            <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                        </svg>
                        Edit Order
                    </button> --}}
                </div>

                <!-- order process -->
                <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 items-center mt-5 ">
                    <div class="flex items-center gap-3 border border-slate-200 px-4 py-4 rounded-xl">
                        <div class="bg-blue-100 px-2 py-2 rounded-full">
                            <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                                <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"></path>
                            </svg>

                        </div>

                        <div>
                            <p class="text-sm font-medium">Gross Cargo Weight</p>
                            <p class="text-sky-700 text-sm font-medium">{{ $data->gross_cargo_weight }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 border border-slate-200 px-4 py-4 rounded-xl">
                        <div class="bg-blue-100 px-2 py-2 rounded-full">
                            <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                                <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"></path>
                            </svg>

                        </div>

                        <div>
                            <p class="text-sm font-medium">Service Requirement</p>
                            <p class="text-sky-700 text-sm font-medium">{{ $data->service_requirement }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 border border-slate-200 px-4 py-4 rounded-xl">
                        <div class="bg-blue-100 px-2 py-2 rounded-full">
                            <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                                <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"></path>
                            </svg>

                        </div>

                        <div>
                            <p class="text-sm font-medium">Type</p>
                            <p class="text-sky-700 text-sm font-medium">{{ $data->type }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                        <div class="bg-blue-100 px-2 py-2 rounded-full">
                            <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                                <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"></path>
                            </svg>

                        </div>

                        <div>
                            <p class="text-sm font-medium">Latest Event</p>
                            <p class="text-sky-700 text-sm font-medium">{{ $data->latest_event }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                        <div class="bg-blue-100 px-2 py-2 rounded-full">
                            <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                                <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"></path>
                            </svg>

                        </div>

                        <div>
                            <p class="text-sm font-medium">Place</p>
                            <p class="text-sky-700 text-sm font-medium">{{ $data->place }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                        <div class="bg-blue-100 px-2 py-2 rounded-full">
                            <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                                <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"></path>
                            </svg>

                        </div>

                        <div>
                            <p class="text-sm font-medium">VGM</p>
                            <p class="text-sky-700 text-sm font-medium">{{ $data->vgm }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                        <div class="bg-blue-100 px-2 py-2 rounded-full">
                            <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                                <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"></path>
                            </svg>

                        </div>

                        <div>
                            <p class="text-sm font-medium">Move Type</p>
                            <p class="text-sky-700 text-sm font-medium">{{ $data->move_type }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                        <div class="bg-blue-100 px-2 py-2 rounded-full">
                            <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                                <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"></path>
                            </svg>

                        </div>

                        <div>
                            <p class="text-sm font-medium">Size</p>
                            <p class="text-sky-700 text-sm font-medium">{{ $data->size }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                        <div class="bg-blue-100 px-2 py-2 rounded-full">
                            <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                                <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"></path>
                            </svg>

                        </div>

                        <div>
                            <p class="text-sm font-medium">On Board Date</p>
                            <p class="text-sky-700 text-sm font-medium">{{ $data->on_board_date }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-lg shadow-zinc-100/80 px-5 py-5 rounded-xl">
                <div class="flex items-center gap-2 my-3">
                    <div class="bg-blue-100 px-2 py-2 rounded-full">
                        <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                            <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"></path>
                        </svg>

                    </div>

                    <div>
                        <p class="text-lg font-medium">Bl No</p>
                        <p>{{ $data->bl_no }}</p>
                    </div>
                </div>
                <hr>
                <div class="flex items-center gap-2 my-3">
                    <div class="bg-purple-100 px-3 py-3 rounded-full">
                        <svg class="text-purple-700" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>

                    <div>
                        <p class="text-lg font-medium">Booking No</p>
                        <p>{{ $data->booking_no }}</p>
                    </div>
                </div>
                <hr>
                <div class="flex items-center gap-2 my-3">
                    <div class="bg-teal-100 px-3 py-3 rounded-full">
                        <svg class="text-teal-700" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V9l-7-7z"></path>
                            <path d="M13 3v6h6"></path>
                        </svg>
                    </div>

                    <div>
                        <p class="text-lg font-medium">Vassel Voy No</p>
                        <p>{{ $data->vessel_voy_no }}</p>
                    </div>
                </div>
                <hr>
                <div class="flex items-center gap-2 my-3">
                    <div class="bg-amber-100 px-3 py-3 rounded-full">
                        <svg class="text-amber-700" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="8" rx="2"
                                ry="2"></rect>
                            <rect x="2" y="14" width="20" height="8" rx="2"
                                ry="2"></rect>
                            <line x1="6" y1="6" x2="6.01" y2="6"></line>
                            <line x1="6" y1="18" x2="6.01" y2="18"></line>
                        </svg>
                    </div>

                    <div>
                        <p class="text-lg font-medium">Container No</p>
                        <p>{{ $data->container_no }}</p>
                    </div>
                </div>
                <hr>
                <div class="flex items-center gap-2 my-3">
                    <div class="bg-cyan-100 px-3 py-3 rounded-full">
                        <svg class="text-cyan-700" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.5 12H16c-.7 2-2 3-4 3s-3.3-1-4-3H2.5"></path>
                            <path
                                d="M5.5 5.1L2 12v6c0 1.1.9 2 2 2h16a2 2 0 002-2v-6l-3.4-6.9A2 2 0 0016.8 4H7.2a2 2 0 00-1.8 1.1z">
                            </path>
                        </svg>
                    </div>

                    <div>
                        <p class="text-lg font-medium">Seal No</p>
                        <p>{{ $data->seal_no }}</p>
                    </div>
                </div>


            </div>


        </div>
        <div class="px-5 md:px-0">
            <div class="bg-white container mx-auto px-5 py-5 mt-10 rounded-xl shadow-lg shadow-zinc-100/80">
                <p class="text-xl font-semibold mb-5">Shipment Summary</p>
                <div class="  grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 items-center gap-5  ">
                    @foreach ($data->ports as $port)
                        @php
                            $type = '';
                        @endphp

                        @switch($port->port_type)
                            @case('starting')
                                @php
                                    $type = 'Starting';
                                @endphp
                            @break

                            @case('second')
                                @php
                                    $type = 'Second Port';
                                @endphp
                            @break

                            @case('third')
                                @php
                                    $type = 'Third Port';
                                @endphp
                            @break

                            @default
                                @php
                                    $type = 'Destination';
                                @endphp
                        @endswitch

                        <div
                            class="flex items-center gap-3 border border-slate-200 px-4 py-4 rounded-xl {{ $port->id == optional($data->currentPort)->port_id ? 'bg-blue-200 text-blue-800' : '' }}">
                            <div class="bg-blue-100 px-2 py-2 rounded-full">
                                <svg class="@if ($port->id == optional($data->currentPort)->port_id) text-blue-700 @else text-sky-700 @endif"
                                    xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                            </div>

                            <div>
                                <p class="text-sm font-medium">{{ $type }}</p>
                                <p
                                    class="text-sm font-medium @if ($port->id == optional($data->currentPort)->port_id) text-blue-800 @else text-sky-700 @endif">
                                    {{ $port->name }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @if (!$data->status->isEmpty())
            <div class="px-5 md:px-0">
                <div class="bg-white container mx-auto px-5 py-5 mt-10 rounded-xl shadow-lg shadow-zinc-100/80">
                    <p class="text-xl font-semibold mb-5">Route Scheduling Summary</p>
                    <div class="  grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 items-center gap-5  ">
                        @foreach ($data->status as $status)
                            <div class="flex items-center gap-3  border border-slate-200 px-4 py-4 rounded-xl">
                                <div class="bg-blue-100 px-2 py-2 rounded-full">
                                    <svg class="text-sky-700" xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                </div>

                                <div>
                                    <p class="text-sm font-medium">{{ $status->title }}</p>
                                    <p class="text-sky-700 text-sm font-medium pb-5">{{ $status->description }}</p>
                                    <p class="text-green-700 text-sm font-medium">
                                        {{ \Carbon\Carbon::parse($status->status_time_date)->format('jS F, Y') }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

    </div>
@endsection

@push('js')
    <script>
        AOS.init();
    </script>
@endpush
