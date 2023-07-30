<div class="bg-white relative sticky top-0 left-0 w-full z-40">
    <div class="container mx-auto flex justify-between items-center py-5 px-5">
        <button class="" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                aria-controls="drawer-navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="#000000"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
            </svg>
        </button>
        <img class="w-32 h-8 mr-2" src="http://marinerx.co.uk/assets/images/logo.png" alt="logo"/>
        <div class="flex items-center z-50">
            <div class="flex items-center ml-3 text-white hover:text-black">
                <div>
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full"
                             src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                             alt="user photo"/>
                    </button>
                </div>
                <div
                    class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow-xl bg-white"
                    id="dropdown-user">
                    <div class="px-4 py-3" role="none">
                        <p class="text-sm text-200" role="none">Neil Sims</p>
                        <p class="text-sm font-medium text-200 truncate" role="none">
                            neil.sims@flowbite.com
                        </p>
                    </div>
                    <ul class="py-1" role="none">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-sky-700 hover:text-white"
                               role="menuitem">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-sky-700 hover:text-white"
                               role="menuitem">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-sky-700 hover:text-white"
                               role="menuitem">Earnings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-red-700 hover:bg-red-500 hover:text-white"
                               role="menuitem">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
