<nav class="bg-white border-gray-200 dark:bg-gray-900 relative">
    <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4"
    >
        <div
            class="flex flex-row font-medium p-0 mt-0 border-gray-100 rounded-lg space-x-8 border-0 bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
        >
            <a href="{{ route('landing-page') }}" class="flex items-center mr-8">
                <img
                    src="../../../images/Logo.png"
                    class="h-8 mr-3"
                    alt="Beeney Logo"
                />
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                    >Beeney</span
                >
            </a>
            <div class="md:flex hidden gap-8">
                <a
                    href="{{ route('landing-page') }}"
                    class="{{ request()->routeIs('landing-page') ? 'block py-2 mt-2 pl-3 pr-4 font-medium text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500' : 'block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}"
                    aria-current="page"
                    >Beranda</a
                >
                <a
                    href="{{ route('subscription.index') }}"
                    class="{{ request()->routeIs('subscription.index') ? 'block py-2 mt-2 pl-3 pr-4 font-medium text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500' : 'block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}"
                >
                    Langganan
                </a>
                <a
                    href="{{ route('question.index') }}"
                    class="{{ request()->routeIs('question.index') ? 'block py-2 mt-2 pl-3 pr-4 font-medium text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500' : 'block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}"
                >
                    Pertanyaan
                </a>
                <a
                    href="{{ route('article.index') }}"
                    class="{{ request()->routeIs('article.index') ? 'block py-2 mt-2 pl-3 pr-4 font-medium text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500' : 'block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}"
                >
                    Article
                </a>
                @auth
                    @role('user')
                        <a
                            href="{{ route('dashboard') }}"
                            class="block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        >
                            Dashboard
                        </a>
                    @endrole
                    @role('admin')
                        <a
                            href="{{ route('admin.dashboard') }}"
                            class="block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        >
                            Dashboard
                        </a>
                    @endrole
                @endauth
            </div>
        </div>
        <div class="flex md:order-2">
            <div class="relative hidden md:block mt-2">
                <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                >
                    <svg
                        class="w-5 h-5 text-gray-500"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input
                    type="text"
                    id="search-navbar"
                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                    placeholder="Search..."
                />
            </div>
            @if (Auth::check())
                <a href="#" class="hidden md:block mx-2">
                    <img src="https://img.icons8.com/material/96/C57C00/bookmark-ribbon--v1.png" class="w-6 mt-4 ml-4" />
                </a>

                <div class="md:dropdown dropdown-bottom dropdown-end hidden ml-2">
                    <label tabindex="0">
                        <img src="https://img.icons8.com/material/96/C57C00/bell--v1.png" class="w-6 mt-4 ml-2 cursor-pointer" />
                    </label>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-72">
                        <li>
                            <label for="label cursor-pointer">
                                <span class="label-text text-xs font-medium">"Udin" membalas : "izin menambahkan ka, jadi itu adalah lorem ipsum yang terbengkalai" </span>
                                <span class="badge text-xs border-none bg-green-700">NEW</span>
                            </label>
                        </li>
                        <li>
                            <label class="label cursor-pointer">
                                <span class="label-text text-xs font-medium">"Udin" membalas : "izin menambahkan ka, jadi itu adalah lorem ipsum yang terbengkalai" </span>
                            </label>
                        </li>
                        <li>
                            <label class="label cursor-pointer">
                                <span class="label-text text-xs font-medium">"Udin" membalas : "izin menambahkan ka, jadi itu adalah lorem ipsum yang terbengkalai" </span>
                            </label>
                        </li>
                        <li>
                            <label class="label cursor-pointer">
                                <span class="label-text text-xs font-medium">"Udin" membalas : "izin menambahkan ka, jadi itu adalah lorem ipsum yang terbengkalai" </span>
                            </label>
                        </li>
                    </ul>
                </div>

                <!--<a href="#" class="mx-2 font-medium rounded-lg text-sm px-4 mt-2 text-center hidden md:block">
                    <img src="https://img.icons8.com/material/96/15803D/user-male-circle--v1.png" alt="user" class="w-10" />
                </a>-->

                <div class="md:dropdown dropdown-bottom dropdown-end hidden">
                    <label tabindex="0">
                        <img src="https://img.icons8.com/material/96/15803D/user-male-circle--v1.png" alt="user" class="w-10 cursor-pointer mt-2 mx-4" />
                    </label>
                    <ul class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-44">
                        <li>
                            <a href="{{ route('profile.edit') }}" for="label cursor-pointer">
                                <span class="label-text font-medium" aria-current="page">Profile</span>
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" for="label cursor-pointer" class="min-w-full" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <span class="label-text font-medium" aria-current="page">Logout</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a
                    href="{{ route('login') }}"
                    class="hidden md:block mx-4 mt-2 text-green-500 border-green-600 border-2 hover:bg-green-700 hover:text-white transition-all font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                >
                    Login
                </a>
                <a
                    href="{{ route('register') }}"
                    class="hidden md:block text-white mt-2 bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                >
                    Register
                </a>
            @endif
            <div
                class="dropdown dropdown-bottom dropdown-end justify-end md:hidden"
            >
                <label
                    tabindex="0"
                    class="inline-flex items-center p-2 mt-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                >
                    <svg
                        class="w-6 h-6"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </label>
                <ul
                    class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-56"
                >
                    <li>
                        <div
                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                        >
                            <svg
                                class="w-5 h-5 text-gray-500"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span class="sr-only"
                                >Search icon</span
                            >
                        </div>
                        <input
                            type="text"
                            id="search-navbar"
                            class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="Search..."
                        />
                    </li>
                </ul>
            </div>
            <div
                class="dropdown dropdown-bottom dropdown-end justify-end md:hidden ml-1"
            >
                <label
                    tabindex="0"
                    class="inline-flex items-center p-2 mt-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                >
                    <svg
                        class="w-6 h-6"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </label>
                <ul
                    class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-72"
                >
                @if (Auth::check())
                    <li>
                        <a
                            href="#"
                            class="{{ request()->routeIs('landing.index') ? 'block py-2 mt-2 pl-3 pr-4 font-medium text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500' : 'block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}"
                            aria-current="page"
                            >Beranda</a
                        >
                    </li>
                    <li>
                        <a
                            href="#"
                            class="{{ request()->routeIs('subscription.index') ? 'block py-2 mt-2 pl-3 pr-4 font-medium text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500' : 'block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}"
                        >
                            Langganan
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('question.index') }}"
                            class="{{ request()->routeIs('question.index') ? 'block py-2 mt-2 pl-3 pr-4 font-medium text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500' : 'block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}"
                        >
                            Pertanyaan
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('article.index') }}"
                            class="{{ request()->routeIs('article.index') ? 'block py-2 mt-2 pl-3 pr-4 font-medium text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500' : 'block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}"
                        >
                            Article
                        </a>
                    </li>
                    <li>
                        @role('admin')
                            <a
                                href="{{ route('admin.dashboard') }}"
                                class="block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            >
                                Dashboard
                            </a>
                        @endrole
                    </li>
                    <li>
                        <a href="#" for="label cursor-pointer" class="block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            Profile
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            @csrf
                            <a href="{{ route('logout') }}" for="label cursor-pointer" onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </a>
                        </form>
                    </li>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="mx-4 mt-2 text-green-500 border-green-600 border-2 hover:bg-green-700 hover:text-white transition-all font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                    >
                        Login
                    </a>
                    <a
                        href="{{ route('register') }}"
                        class="text-white mt-2 mx-4 bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                    >
                        Register
                    </a>
                @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
