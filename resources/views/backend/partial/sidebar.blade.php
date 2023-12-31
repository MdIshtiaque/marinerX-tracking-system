@php
    $currentRouteName = Route::currentRouteName();
@endphp
    <div id="drawer-navigation"
         class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-sky-700"
         tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-200 uppercase">
            Menu
        </h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
                class="text-gray-400 bg-transparent hover:bg-red-700 hover:text-white rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex itesky-700">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto z-50">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex items-center p-2 text-200 rounded-lg hover:bg-sky-200 group">
                        <svg class="w-5 h-5 text-gray-200 transition duration-75 group-hover:text-black"
                             aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                        </svg>
                        <span class="ml-3 text-white group-hover:text-black">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center p-2 text-200 rounded-lg hover:bg-sky-200 group {{ $currentRouteName == 'admin.dashboard' || $currentRouteName == 'order.show' ? 'bg-sky-200' : '' }}">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-200 transition duration-75 group-hover:text-black"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                        </svg>
                        <span class="flex-1 ml-3 text-white group-hover:text-black whitespace-nowrap">Orders</span>
                    </a>
                </li>
                    <a href="#" class="flex items-center p-2 text-200 rounded-lg hover:bg-sky-200 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-200 transition duration-75 group-hover:text-black"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                        </svg>
                        <span class="flex-1 ml-3 text-white group-hover:text-black whitespace-nowrap">Users</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <!-- datatable -->

