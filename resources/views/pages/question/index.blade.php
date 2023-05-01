<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/dist/output.css" rel="stylesheet" />
        <title>Questions Page</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <!-- As you can see, this is navbar -->
                <nav class="bg-white border-gray-200 dark:bg-gray-900">
                    <div
                        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4"
                    >
                        <div
                            class="flex flex-row font-medium p-0 mt-0 border-gray-100 rounded-lg space-x-8 border-0 bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                        >
                            <a href="#" class="flex items-center mr-8">
                                <img
                                    src="../../images/Logo.png"
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
                                    href="#"
                                    class="block py-2 mt-2 pl-3 pr-4 font-medium text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500"
                                    aria-current="page"
                                    >Beranda</a
                                >
                                <a
                                    href="#"
                                    class="block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >
                                    Subscription
                                </a>
                                <a
                                    href="#"
                                    class="block py-2 mt-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >
                                    About
                                </a>
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
                            <a
                                href="#"
                                class="hidden md:block mx-4 mt-2 text-green-500 border-green-600 border-2 hover:bg-green-700 hover:text-white transition-all font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                            >
                                Login
                            </a>
                            <a
                                href="#"
                                class="hidden md:block text-white mt-2 bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                            >
                                Register
                            </a>
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
                                    <li>
                                        <a
                                            href="#"
                                            class="mx-4 mt-2 text-green-500 border-green-600 border-2 hover:bg-green-700 hover:text-white transition-all font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                        >
                                            Login
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="#"
                                            type="button"
                                            class="text-white mt-2 mx-4 bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                        >
                                            Register
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Under Navbar -->
                <div class="flex flex-row md:justify-end justify-center gap-4">
                    <a
                        href="#"
                        class="btn font-medium bg-green-700 border-none hover:bg-slate-50 hover:text-green-700 hover:outline-green-700 hover:outline"
                        >Mulai Diskusi</a
                    >
                    <div class="dropdown dropdown-bottom dropdown-end">
                        <label tabindex="0" class="btn btn-ghost">
                            <img
                                src="https://img.icons8.com/material-rounded/24/null/filter.png"
                            />
                            <span class="label-text ml-2">Filter</span>
                        </label>
                        <ul
                            tabindex="0"
                            class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52"
                        >
                            <li>
                                <label class="label cursor-pointer">
                                    <span class="label-text font-medium"
                                        >Hari ini</span
                                    >
                                    <input
                                        type="radio"
                                        name="radio-10"
                                        class="radio checked:bg-green-700"
                                        checked
                                    />
                                </label>
                            </li>
                            <li>
                                <label class="label cursor-pointer">
                                    <span class="label-text font-medium"
                                        >Minggu ini</span
                                    >
                                    <input
                                        type="radio"
                                        name="radio-10"
                                        class="radio checked:bg-green-700"
                                    />
                                </label>
                            </li>
                            <li>
                                <label class="label cursor-pointer">
                                    <span class="label-text font-medium"
                                        >Bulan ini</span
                                    >
                                    <input
                                        type="radio"
                                        name="radio-10"
                                        class="radio checked:bg-green-700"
                                    />
                                </label>
                            </li>
                            <li>
                                <label class="label cursor-pointer">
                                    <span class="label-text font-medium"
                                        >Tahun ini</span
                                    >
                                    <input
                                        type="radio"
                                        name="radio-10"
                                        class="radio checked:bg-green-700"
                                    />
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-full bg-green-700 h-[1px] mt-4"></div>

                <!-- Questions -->
                <a
                    href="replies.html"
                    class="card w-full bg-orange-50 shadow-md hover:shadow-xl transition-shadow my-8"
                >
                    <div class="card-body">
                        <div class="flex justify-between gap-8">
                            <h2 class="card-title text-base">
                                Apakah perubahan iklim berpengaruh terhadap
                                produksi madu lebah madu hutan? Jika
                                berpengaruh, apa solusi yang sebaiknya
                                dilakukan?
                            </h2>
                            <div class="badge border-none bg-green-700">
                                NEW
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <div class="badge badge-outline">Apis Dorsata</div>
                            <div class="badge badge-outline">Pemula</div>
                        </div>
                        <div class="card-actions justify-end">
                            <div class="flex">
                                <img
                                    src="https://img.icons8.com/material-outlined/24/null/visible--v1.png"
                                    width="50%"
                                />
                                <div class="text-sm ml-2 min-w-full">12</div>
                            </div>
                            <div class="flex ml-4">
                                <img
                                    src="https://img.icons8.com/ios-glyphs/30/null/speech-bubble--v1.png"
                                    width="40%"
                                />
                                <div class="text-sm ml-2 min-w-full">5</div>
                            </div>
                            <div class="flex ml-2">
                                <img
                                    src="https://img.icons8.com/material-outlined/24/null/create.png"
                                    width="20%"
                                />
                                <div class="text-sm ml-2 min-w-full">
                                    12 April 2023
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a
                    href="replies.html"
                    class="card w-full bg-orange-50 shadow-md hover:shadow-xl transition-shadow my-8"
                >
                    <div class="card-body">
                        <div class="flex justify-between gap-8">
                            <h2 class="card-title text-base">
                                Apakah perubahan iklim berpengaruh terhadap
                                produksi madu lebah madu hutan? Jika
                                berpengaruh, apa solusi yang sebaiknya
                                dilakukan?
                            </h2>
                        </div>
                        <div class="flex gap-2">
                            <div class="badge badge-outline">Apis Dorsata</div>
                            <div class="badge badge-outline">Pemula</div>
                        </div>
                        <div class="card-actions justify-end">
                            <div class="flex">
                                <img
                                    src="https://img.icons8.com/material-outlined/24/null/visible--v1.png"
                                    width="50%"
                                />
                                <div class="text-sm ml-2 min-w-full">12</div>
                            </div>
                            <div class="flex ml-4">
                                <img
                                    src="https://img.icons8.com/ios-glyphs/30/null/speech-bubble--v1.png"
                                    width="40%"
                                />
                                <div class="text-sm ml-2 min-w-full">5</div>
                            </div>
                            <div class="flex ml-2">
                                <img
                                    src="https://img.icons8.com/material-outlined/24/null/create.png"
                                    width="20%"
                                />
                                <div class="text-sm ml-2 min-w-full">
                                    12 April 2023
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a
                    href="replies.html"
                    class="card w-full bg-orange-50 shadow-md hover:shadow-xl transition-shadow my-8"
                >
                    <div class="card-body">
                        <div class="flex justify-between gap-8">
                            <h2 class="card-title text-base">
                                Apakah perubahan iklim berpengaruh terhadap
                                produksi madu lebah madu hutan? Jika
                                berpengaruh, apa solusi yang sebaiknya
                                dilakukan?
                            </h2>
                        </div>
                        <div class="flex gap-2">
                            <div class="badge badge-outline">Apis Dorsata</div>
                            <div class="badge badge-outline">Pemula</div>
                        </div>
                        <div class="card-actions justify-end">
                            <div class="flex">
                                <img
                                    src="https://img.icons8.com/material-outlined/24/null/visible--v1.png"
                                    width="50%"
                                />
                                <div class="text-sm ml-2 min-w-full">12</div>
                            </div>
                            <div class="flex ml-4">
                                <img
                                    src="https://img.icons8.com/ios-glyphs/30/null/speech-bubble--v1.png"
                                    width="40%"
                                />
                                <div class="text-sm ml-2 min-w-full">5</div>
                            </div>
                            <div class="flex ml-2">
                                <img
                                    src="https://img.icons8.com/material-outlined/24/null/create.png"
                                    width="20%"
                                />
                                <div class="text-sm ml-2 min-w-full">
                                    12 April 2023
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="flex justify-center py-4">
                    <div class="btn-group">
                        <button class="btn btn-ghost">
                            <svg
                                aria-hidden="true"
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <button class="btn btn-ghost">1</button>
                        <button class="btn">2</button>
                        <button class="btn btn-ghost">3</button>
                        <button class="btn btn-ghost">4</button>
                        <button class="btn btn-ghost">
                            <svg
                                aria-hidden="true"
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="w-full bg-green-700 h-[1px] mt-4"></div>
            </div>
        </div>
        <footer
            class="footer p-10 bg-base-200 text-base-content justify-between px-52 mt-12"
        >
            <div>
                <img src="../../images/Logo.png" alt="Logo" />
                <p>
                    BEENEY Startup Industry<br />Community of honey since 2023
                </p>
            </div>
            <div class="flex">
                <div class="flex flex-col pr-24">
                    <span class="footer-title">Company</span>
                    <a class="link link-hover">About us</a>
                    <a class="link link-hover">Contact</a>
                </div>
                <div class="flex flex-col">
                    <span class="footer-title">Social</span>
                    <div class="grid grid-flow-col gap-4">
                        <a href="#">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                class="fill-current"
                            >
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
                                ></path>
                            </svg>
                        </a>
                        <a href="#">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                class="fill-current"
                            >
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"
                                ></path>
                            </svg>
                        </a>
                        <a href="#">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                class="fill-current"
                            >
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"
                                ></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="footer md:hidden footer-center p-4 bg-base-300 text-base-content"
            >
                <div class="w-full">
                    <p>
                        Copyright © 2023 - All right reserved by BEENEY Startup
                        Industry
                    </p>
                </div>
            </div>
        </footer>
        <div
            class="md:footer hidden footer-center p-4 bg-base-300 text-base-content"
        >
            <div class="w-full">
                <p>
                    Copyright © 2023 - All right reserved by BEENEY Startup
                    Industry
                </p>
            </div>
        </div>
    </body>
</html>
