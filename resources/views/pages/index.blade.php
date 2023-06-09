<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- SEO Meta Tags -->
        <meta name="description" content="Pavo is a mobile app Tailwind CSS HTML template created to help you present benefits, features and information about mobile apps in order to convince visitors to download them" />
        <meta name="author" content="Your name" />

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>Beeney</title>

        <!-- Styles -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
        <link href="css/fontawesome-all.css" rel="stylesheet" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
        <link href="css/swiper.css" rel="stylesheet" />
        <link href="css/magnific-popup.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />

        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png" />
        <link rel="icon" href="../../images/Logo.png">
    </head>
    <body data-spy="scroll" data-target=".fixed-top">

        <!-- Navigation -->
        <nav class="navbar fixed-top">
            <div class="sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a> -->

                <!-- Image Logo -->
                <a class="flex mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline" href="{{ route('landing-page') }}">
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

                <button class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
                    <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                        <li>
                            <a class="nav-link page-scroll active" href="#header">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#details">Details</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#features">Features</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#download">Discussion</a>
                        </li>
                    </ul>
                    <span class="block lg:ml-3.5">
                        <a class="btn-solid-reg" href="{{ route('question.index') }}">
                            Start Discussion
                        </a>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

        <!-- Header -->
        <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
            <div class="px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
                <div class="mb-16 md:ml-12 lg:mt-32 xl:mt-40 xl:mr-12 md:pt-18">
                    <h1 class="h1-large mb-5">Asah Pengetahuanmu, Jadi Peternak Yang Lebih Baik</h1>
                    <p class="p-large mb-8">Membangun komunitas yang  edukatif melalui teknologi. Meningkatkan pengetahuan dan kualitas industri madu Indonesia.</p>
                    <a class="btn-outline-lg" href="{{ route('question.index') }}">Start Discussion</a>
                </div>
                <div class="xl:text-right md:-mr-8">
                    <img class="md:inline hidden" src="../../images/landing-page-img.png" alt="alternative" />
                </div>
            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->

        <!-- Details 2 -->
        <div id="details" class="py-24">
            <div class="px-4 sm:px-12 lg:grid lg:grid-cols-12 lg:gap-x-12">
                <div class="lg:col-span-7">
                    <div class="mb-12 lg:mb-0 xl:mr-14">
                        <img class="inline" src="../../images/kumpulan.png" alt="alternative" />
                    </div>
                </div> <!-- end of col -->
                <div class="lg:col-span-5">
                    <div class="xl:mt-12 justify-center text-center md:pt-40">
                        <p class="mb-6 text-gray-800 text-3xl">Beeney merupakan situs edukasi untuk peternak madu professional dan masyarakat umum. Asah pengetahuanmu dengan konten edukasi, diskusi dengan sesama peternak, dan siapkan panen dengan lebih baik menggunakan prediksi panen.</p>
                        <a class="btn-solid-lg mr-1.5" href="#pricing">Gabung dengan Kami</a>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of container -->
        </div>
        <!-- end of details 2 -->

        <!-- Features -->
        <div id="features" class="cards-1">
            <div class="pt-4 pb-14 text-center">
                <div class="container px-4 sm:px-8 xl:px-4">
                    <p class="mb-4 text-gray-800 text-3xl leading-10 lg:max-w-5xl lg:mx-auto">Jelajahi menu kami</p>
                </div> <!-- end of container -->
            </div>
            <div class="container px-4 sm:px-8 xl:px-4">

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src="../../images/books-pile.png" alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Blog Edukasi</h5>
                        <p class="mb-4">Baca berbagai macam artikel edukasi tentang madu, tata cara beternak lebah, dll.</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src="../../images/chat-bubble.png" alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Forum Diskusi</h5>
                        <p class="mb-4">Ikut berdiskusi dengan peternak lain dan tingkatkan pengetahuanmu</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src="../../images/honey-jar.png" alt="alternative" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Prediksi Panen</h5>
                        <p class="mb-11">Siapkan panen dengan lebih baik menggunakan prediksi panen</p>
                    </div>
                </div>
                <!-- end of card -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of features -->

        <!-- Pricing -->
        <div id="pricing" class="cards-2">
            <div class="absolute bottom-0 h-40 w-full bg-white"></div>
            <div class="container px-4 pb-px sm:px-8">
                <h2 class="mb-2.5 text-white lg:max-w-xl lg:mx-auto">Pricing options for all budgets</h2>
                <p class="mb-16 text-white lg:max-w-3xl lg:mx-auto"> Our pricing plans are setup in such a way that any user can start enjoying Beeney without worrying so much about costs. They are flexible and work for honey industry </p>

                @foreach ($plans as $plan)
                @if ($plan->name == 'Basic')
                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">{{ strtoupper($plan->name) }}</div>
                            <div class="price"><span class="value">FREE</span></div>
                            <div class="frequency">Lifetime</div>
                            <p>This basic package covers the education needs of small startups</p>
                            <ul class="list mb-7 space-y-2 text-left">
                                @foreach (json_decode($plan->features) as $feature)
                                    <li class="flex">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M8.4402 12.0001L10.8142 14.3731L15.5602 9.62708"
                                                strokeWidth="1.5"
                                                strokeLinecap="round"
                                                strokeLinejoin="round"
                                            />
                                            <path
                                                fillRule="evenodd"
                                                clipRule="evenodd"
                                                d="M2.7498 12.0001C2.7498 18.9371 5.0628 21.2501 11.9998 21.2501C18.9368 21.2501 21.2498 18.9371 21.2498 12.0001C21.2498 5.06312 18.9368 2.75012 11.9998 2.75012C5.0628 2.75012 2.7498 5.06312 2.7498 12.0001Z"
                                                strokeWidth="1.5"
                                                strokeLinecap="round"
                                                strokeLinejoin="round"
                                            />
                                        </svg>
                                        <div>{{ $feature }}</div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="button-wrapper">
                                @if (Auth::check())
                                    <div class="btn-solid-reg page-scroll cursor-pointer">Already Subscribe</div>
                                @else
                                    <a class="btn-solid-reg page-scroll" href="{{ route('login') }}">Subscribe Now</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- end of card -->
                @elseif ($plan->name == 'Premium')
                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">{{ strtoupper($plan->name) }}</div>
                            <div class="price mr-4"><span class="currency">Rp</span><span class="value">{{ number_format($plan->price) }}</span></div>
                            <div class="frequency">Monthly</div>
                            <p>This is more premium package suited for medium companies</p>
                            <ul class="list mb-11 space-y-2 text-left">
                                @foreach (json_decode($plan->features) as $feature)
                                    <li class="flex">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M8.4402 12.0001L10.8142 14.3731L15.5602 9.62708"
                                                strokeWidth="1.5"
                                                strokeLinecap="round"
                                                strokeLinejoin="round"
                                            />
                                            <path
                                                fillRule="evenodd"
                                                clipRule="evenodd"
                                                d="M2.7498 12.0001C2.7498 18.9371 5.0628 21.2501 11.9998 21.2501C18.9368 21.2501 21.2498 18.9371 21.2498 12.0001C21.2498 5.06312 18.9368 2.75012 11.9998 2.75012C5.0628 2.75012 2.7498 5.06312 2.7498 12.0001Z"
                                                strokeWidth="1.5"
                                                strokeLinecap="round"
                                                strokeLinejoin="round"
                                            />
                                        </svg>
                                        <div>{{ $feature }}</div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="{{ route('subscriptionPlan.payment-page', $plan->id) }}">Subscribe Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- end of card -->
                @endif

                @endforeach

            </div> <!-- end of container -->
        </div> <!-- end of cards-2 -->
        <!-- end of pricing -->

        <div class="w-full bg-green-700 h-[1px] my-32"></div>

        <!-- Footer -->
        <div class="footer">
            <div class="container px-4 sm:px-8">
                <h4 class="mb-8 lg:max-w-3xl lg:mx-auto">Beeney is a web application for honey industry and you can ask anything on our customer service at <a class="text-indigo-600 hover:text-gray-500" href="mailto:beeney@gmail.com">beeney@gmail.com</a></h4>
            </div> <!-- end of container -->
        </div> <!-- end of footer -->
        <!-- end of footer -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-3">
                <ul class="mb-4 list-unstyled p-small">
                    <li class="mb-2"><a href="#">Terms & Conditions</a></li>
                    <li class="mb-2"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="pb-2 p-small statement">Copyright © {{ date('Y') }} <a href="#your-link" class="no-underline">Beeney</a></p>

                <p class="mb-4 p-small align-middle statement">BEENEY Startup Industry<br />Community of honey since 2023</p>
            </div>

        <!-- end of container -->
        </div> <!-- end of copyright -->
        <!-- end of copyright -->

        <!-- Scripts -->
        <script src="js/jquery.min.js"></script> <!-- jQuery for JavaScript plugins -->
        <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>
