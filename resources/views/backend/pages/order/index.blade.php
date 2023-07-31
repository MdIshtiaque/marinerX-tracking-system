@extends('backend.master')

@section('content')
    <!--Modal -->
    <div id="extralarge-modal" tabindex="-1"
         class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full ">
        <div class="relative w-full max-w-7xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t">
                    <h3 class="text-xl font-medium text-gray-900">Fill up this form</h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                            data-modal-hide="extralarge-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form id="order" action="{{ route('order.store') }}" method="POST">
                    @csrf
                    @include('backend.pages.order.modal.create')
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="submit" id="orderButton" onclick="onSubmitForm()"
                                class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('backend.pages.order.modal.status.edit')
    <!-- change status Modal -->
    @include('backend.pages.order.modal.status.change')
    <!-- set Port  Modal -->
    @include('backend.pages.order.modal.port.set',['order' => $orders])
    <!-- order button here -->
    <div class="flex justify-between items-center my-5 px-5 md:px-0">
        <p class="text-xl font-semibold">Order Manage</p>
        <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-3 text-xs md:text-base py-2 text-center items-center gap-2 flex md:hidden"
                type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="#ffffff"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
        </button>
        <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 block w-full md:w-auto text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-3 text-xs md:text-base py-2 text-center items-center gap-2 hidden md:flex"
                type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="#ffffff"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
            Create Order
        </button>
    </div>

    <hr/>
    <div class="flex flex-col">
        <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <table id="myTable" class="display w-full border-collapse border border-gray-300 shadow-sm rounded-xl"
                       style="width:100%">
                    <thead>
                    <tr>
                        <th class="px-4 py-2 bg-gray-200 text-gray-700">SL</th>
                        <th class="px-4 py-2 bg-gray-200 text-gray-700">BL no</th>
                        <th class="px-4 py-2 bg-gray-200 text-gray-700">Booking No.</th>
                        <th class="px-4 py-2 bg-gray-200 text-gray-700">Starting Point</th>
                        <th class="px-4 py-2 bg-gray-200 text-gray-700">Destination</th>
                        <th class="px-4 py-2 bg-gray-200 text-gray-700">Status</th>
                        <th class="px-4 py-2 bg-gray-200 text-gray-700">Port</th>
                        <th class="px-4 py-2 bg-gray-200 text-gray-700">Show</th>
                        <th class="px-4 py-2 bg-gray-200 text-gray-700">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr class="border-t border-gray-300 text-center">
                            <td class="px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2">{{ $order->bl_no }}</td>
                            <td class="px-4 py-2">{{ $order->booking_no }}</td>
                            <td class="px-4 py-2">{{ $order->starting_port }}</td>
                            <td class="px-4 py-2">{{ $order->destination }}</td>
                            <td class="px-2 py-1">
                                @if (isset($order->status->first()->title))
                                  <span class="inline-block px-3 py-1 rounded-full bg-green-500 text-white font-bold text-sm max-w-xs whitespace-nowrap">
                                    {{ $order->status->first()->title }}
                                  </span>
                                @else
                                  <span class="inline-block px-3 py-1 rounded-full bg-red-500 text-white font-bold text-sm max-w-xs whitespace-nowrap">
                                    No Status
                                  </span>
                                @endif
                              </td>



                              <td class="px-2 py-1">
                                @if (isset($order->currentPort))
                                  <span class="inline-block px-3 py-1 rounded-full bg-green-500 text-white font-bold text-sm max-w-xs whitespace-nowrap">
                                    {{ $order->currentPort->port->name }}
                                  </span>
                                @else
                                  <span class="inline-block px-3 py-1 rounded-full bg-red-500 text-white font-bold text-sm max-w-xs whitespace-nowrap">
                                    No Port
                                  </span>
                                @endif
                              </td>


                            <td class="px-4 py-2">
                                <a data-tooltip-target="show" data-tooltip-style="light" href="{{ route('order.show', $order->id) }}"
                                        class="transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none md:w-auto text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2"
                                        type="button"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                         fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <div id="show" role="tooltip"
                                         class="absolute z-10 invisible inline-block px-3 py-1 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                                        Show
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                            </td>
                            <td class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 items-center gap-2">

                                <button data-tooltip-target="changestatus" data-tooltip-style="light"
                                        data-modal-target="status-modal-{{ $order->id }}"
                                        data-modal-toggle="status-modal-{{ $order->id }}"
                                        class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 block w-full text-white bg-sky-700 flex-shrink-0 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-2 py-2.5  flex items-center justify-center gap-2"
                                        type="button" id="openModalBtn"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                         fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M20 11.08V8l-6-6H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h6"/>
                                        <path d="M14 3v5h5M18 21v-6M15 18h6"/>
                                    </svg>
                                    <div id="changestatus" role="tooltip"
                                         class="absolute z-10 invisible inline-block px-3 py-1 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                                        Change Status
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </button>
                                <button data-tooltip-target="setport" data-tooltip-style="light"
                                        data-modal-target="small-modal-{{ $order->id }}"
                                        data-modal-toggle="small-modal-{{ $order->id }}"
                                        class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 block w-full md:w-auto text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-2 py-2.5  flex items-center justify-center gap-2"
                                        type="button"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                         fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                                        <line x1="4" y1="22" x2="4" y2="15"></line>
                                    </svg>
                                    <div id="setport" role="tooltip"
                                         class="absolute z-10 invisible inline-block px-3 py-1 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                                        Set Port
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </button>
                                <button data-tooltip-target="tooltip1" data-tooltip-style="light" {{ isset($order->status->first()->title) ? '' : "disabled" }}
                                        data-modal-target="popup-modal-{{ $order->id }}"
                                        data-modal-toggle="popup-modal-{{ $order->id }}"
                                        class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 block w-full md:w-auto text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-lg text-sm px-2 py-2.5  flex items-center justify-center gap-2"
                                        type="button"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                         fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path
                                            d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                        <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                    </svg>
                                    <div id="tooltip1" role="tooltip"
                                         class="absolute z-10 invisible inline-block px-3 py-1 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                                        Edit Current Status
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </button>
                                <a data-tooltip-target="delete" data-tooltip-style="light"
                                   href="{{ route('order.destroy', $order->id) }}"
                                   class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 del_warn block w-full md:w-auto text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-2.5  flex items-center justify-center gap-2"
                                   type="button"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                         fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                    <div id="delete" role="tooltip"
                                         class="absolute z-10 invisible inline-block px-3 py-1 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                                        Delete
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{-- Paginator --}}
                @if ($orders->hasPages())
                     <div class="bg-white p-4 flex items-center justify-end flex-wrap">
                        <nav aria-label="Page navigation">
                            <ul class="flex">
                                <li>
                                    <a href="{{ $orders->previousPageUrl() }}" class="px-4 py-2 text-blue-600 transition-colors duration-150 bg-white border border-blue-600 rounded-l-lg focus:shadow-outline hover:bg-blue-100">Prev</a>
                                </li>
                                @for ($i = 1; $i <= $orders->lastPage(); $i++)
                                    <li>
                                        <a href="{{ $orders->url($i) }}" class="px-4 py-2 {{ $orders->currentPage() === $i ? 'text-white bg-blue-600' : 'text-blue-600 bg-white' }} border border-blue-600 focus:shadow-outline">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li>
                                    <a href="{{ $orders->nextPageUrl() }}" class="px-4 py-2 text-blue-600 transition-colors duration-150 bg-white border border-blue-600 rounded-r-lg focus:shadow-outline hover:bg-blue-100">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                @endif


            </div>
        </div>
    </div>

@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
    <script>
        $('.del_warn').click(function (event) {
            let link = $(this);
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link.attr('href');
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        })
    </script>
    <script>
        let isFormSubmitting = false;

        function onSubmitForm() {
            if (document.getElementById("order").checkValidity()) {
                $('#orderButton').text('Saving...');
                $('#order').submit();
                $('#orderButton').attr('disabled', 'disabled');
                setTimeout(() => {
                    $('#orderButton').text('Submit');
                    $('#orderButton').removeAttr('disabled');
                }, 2000)
            }
        }

    </script>
@endpush

