<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ProDarna - @yield('title')</title>
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="Prodarna-Real Estate Listing Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />

    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css" />

    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />

</head>


<body class="font-karla text-body text-tiny">
    <div class="overflow-hidden">
        <!-- Header start -->

        <header id="sticky-header" class="absolute left-0 top-[15px] lg:top-[30px] xl:top-[40px] w-full z-10">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-wrap items-center justify-between">
                            <a href="index.html" class="block">
                                <img class="w-2 h-2 white-logo" src="assets/images/logo/logo-white.svg" loading="lazy"
                                    width="56" height="46" alt="brand logo">
                                <img class="w-2 h-2 hidden dark-logo" src="assets/images/logo/logo.svg" loading="lazy"
                                    width="56" height="46" alt="brand logo">
                            </a>
                            <nav class="flex flex-wrap items-center justify-between">
                                <ul
                                    class="hidden lg:flex flex-wrap items-center font-lora text-[16px] xl:text-[18px] leading-none text-black">
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                        <a href="#"
                                            class="sticky-dark transition-all text-white hover:text-secondary">Home</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                        <a href="about.html"
                                            class="sticky-dark transition-all text-white hover:text-secondary">About</a>

                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                        <a href="#"
                                            class="sticky-dark transition-all text-white hover:text-secondary">Properties</a>

                                    </li>

                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                        <a href="#"
                                            class="sticky-dark transition-all text-white hover:text-secondary">Blog</a>

                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                        <a href="contact-us.html"
                                            class="sticky-dark transition-all text-white hover:text-secondary">Contact</a>

                                    </li>
                                </ul>
                                @if (Route::has('login') || Route::has('register'))
                                @auth
                                <ul class="flex flex-wrap items-center">
                                    <li class="sm:mr-5 xl:mr-[20px] relative group"><a href="#">
                                            <img src="assets/images/user/avater.png" loading="lazy" width="62"
                                                height="62" alt="avater">
                                        </a>

                                        <ul
                                            class="list-none bg-white drop-shadow-[0px_6px_10px_rgba(0,0,0,0.2)] rounded-[12px] flex flex-wrap flex-col w-[180px] absolute top-[120%] sm:left-1/2 sm:-translate-x-1/2 transition-all
                                            group-hover:top-[60px] invisible group-hover:visible opacity-0 group-hover:opacity-100 right-0">
                                            <li
                                                class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="login.html"
                                                    class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-secondary hover:text-white text-center my-[-1px] rounded-t-[12px]">Profile</a>
                                            </li>

                                            <li
                                                class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="register.html"
                                                    class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-secondary hover:text-white text-center my-[-1px]">Dashboard</a>
                                            </li>
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="font-lora w-full leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-secondary hover:text-white text-center my-[-1px] rounded-b-[12px]">
                                                        Sign Out
                                                    </button>
                                                </form>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('agencies.create')}}"
                                            class="sticky-btn before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-white before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto hover:text-primary before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-secondary after:rounded-md after:transition-all">Add
                                            Agency</a>
                                    </li>
                                    <li class="ml-2 sm:ml-5 lg:hidden">
                                        <a href="#offcanvas-mobile-menu"
                                            class="offcanvas-toggle flex text-[#016450] hover:text-secondary">
                                            <svg width="24" height="24" class="fill-current"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path
                                                    d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                @else
                                <a href="{{ route('register') }}" class="sticky-btn before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-white before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto hover:text-primary before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-secondary after:rounded-md after:transition-all">Get started</a>
                                @endif
                                @endauth
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- offcanvas-overlay start -->
        <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
        <!-- offcanvas-overlay end -->
        <!-- offcanvas-mobile-menu start -->
        <div id="offcanvas-mobile-menu"
            class="offcanvas left-0 transform -translate-x-full fixed font-normal text-sm top-0 z-50 h-screen xs:w-[300px] lg:w-[380px] transition-all ease-in-out duration-300 bg-white">

            <div class="py-12 pr-5 h-[100vh] overflow-y-auto">
                <!-- close button start -->
                <button class="offcanvas-close text-primary text-[25px] w-10 h-10 absolute right-0 top-0 z-[1]"
                    aria-label="offcanvas">x</button>
                <!-- close button end -->

                <!-- offcanvas-menu start -->

                <nav class="offcanvas-menu mr-[20px]">
                    <ul>
                        <li class="relative block border-b-primary border-b first:border-t first:border-t-primary">
                            <a href="#"
                                class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Home</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary"
                                        href="index.html">home 01</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary"
                                        href="index-2.html">home 02</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary"
                                        href="index-3.html">home 03</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary"
                                        href="index-4.html">home 04</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary"
                                        href="index-5.html">home 05</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary"
                                        href="index-6.html">home 06</a></li>
                            </ul>
                        </li>
                        <li class="relative block border-b-primary border-b">
                            <a href="about.html"
                                class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">About</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary"
                                        href="about.html">About</a></li>

                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary"
                                        href="about-v2.html">About v2</a></li>
                            </ul>

                        </li>
                        <li class="relative block border-b-primary border-b">
                            <a href="#"
                                class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Properties</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li>
                                    <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary"
                                        href="#">Properties</a>
                                    <ul
                                        class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">



                                        <li>
                                            <a class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary"
                                                href="properties-v1.html"> properties v1</a>
                                        </li>
                                        <li>
                                            <a class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary"
                                                href="properties-v2.html"> properties v2</a>
                                        </li>
                                        <li>
                                            <a class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary"
                                                href="add-properties.html">add properties </a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary"
                                        href="#">Properties with sidebar</a>
                                    <ul
                                        class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">

                                        <li>
                                            <a href="properties-left-side-bar.html"
                                                class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                                left side bar</a>
                                        </li>
                                        <li>
                                            <a href="properties-right-side-bar.html"
                                                class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                                right side bar</a>
                                        </li>

                                        <li>
                                            <a href="properties-list-left-side-bar.html"
                                                class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                                list left side bar</a>
                                        </li>

                                        <li>
                                            <a href="properties-list-right-side-bar.html"
                                                class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                                list
                                                right side bar</a>
                                        </li>
                                    </ul>


                                </li>
                                <li>
                                    <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary"
                                        href="#">Property Details</a>

                                    <ul
                                        class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">

                                        <li>
                                            <a href="add-properties.html"
                                                class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">add
                                                properties</a>
                                        </li>

                                        <li>
                                            <a href="properties-details.html"
                                                class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                                details</a>
                                        </li>

                                    </ul>

                                </li>

                            </ul>
                        </li>
                        <li class="relative block border-b-primary border-b"><a href="#"
                                class="relative block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Pages</a>

                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li>
                                    <a href="service.html"
                                        class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">Service</a>
                                </li>
                                <li>
                                    <a href="single-service.html"
                                        class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">single
                                        service</a>
                                </li>
                                <li>
                                    <a href="contact-us.html"
                                        class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">contact
                                        us</a>
                                </li>
                                <li>
                                    <a href="create-agency.html"
                                        class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">create
                                        agency</a>
                                </li>
                                <li>
                                    <a href="login.html"
                                        class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">login</a>
                                </li>
                                <li>
                                    <a href="register.html"
                                        class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">register</a>
                                </li>
                            </ul>
                        </li>

                        <li class="relative block border-b-primary border-b"><a href="#"
                                class="relative block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">agency</a>

                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li>
                                    <a href="agency.html"
                                        class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agency</a>
                                </li>
                                <li>
                                    <a href="create-agency.html"
                                        class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">create
                                        agency</a>
                                </li>

                                <li>
                                    <a href="agent.html"
                                        class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agent</a>
                                </li>

                                <li>
                                    <a href="agency-details.html"
                                        class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agency
                                        details</a>
                                </li>

                                <li>
                                    <a href="agent-details.html"
                                        class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agent
                                        details</a>
                                </li>

                            </ul>

                        </li>

                        <li class="relative block border-b-primary border-b"><a href="#"
                                class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Blog</a>

                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li>
                                    <a href="blog-grid.html"
                                        class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary">blog
                                        grid</a>
                                </li>
                                <li>
                                    <a href="blog-grid-left-side-bar.html"
                                        class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary">blog
                                        grid left side bar</a>
                                </li>
                                <li>
                                    <a href="blog-grid-right-side-bar.html"
                                        class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary">blog
                                        grid right side bar</a>
                                </li>
                                <li>
                                    <a href="blog-details.html"
                                        class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary">blog
                                        details</a>
                                </li>

                            </ul>
                        </li>
                        <li class="relative block border-b-primary border-b"><a href="contact.html"
                                class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Contact</a>
                        </li>
                    </ul>
                </nav>
                <!-- offcanvas-menu end -->

                <div class="px-5 flex flex-wrap mt-3 sm:hidden">
                    <a href="#"
                        class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Add
                        Property</a>
                </div>



            </div>
        </div>
        <!-- offcanvas-mobile-menu end -->
        <!-- Header end -->
        <!-- Main Content Start -->
        <main>
            @yield('content')
        </main>
        <!-- Footer Start -->
        <footer
            class="footer bg-[#EEEEEE] pt-[80px] lg:pt-[120px] pb-30 md:pb-[80px] lg:pb-[110px] font-normal bg-no-repeat"
            style="background-image: url('assets/images/footer/pattern.png');">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px]">
                    <div class="col-span-12 sm:col-span-6 lg:col-span-4 mb-[30px]">
                        <a href="index.html" class="block mb-[25px]">
                            <img src="assets/images/logo/logo.svg" width="56" height="46" loading=lazy
                                alt="footer logo">
                        </a>
                        <p class="mb-[5px] xl:mb-[40px] max-w-[270px]">Properties are most budget friendly
                            so you have are find opportunity is
                            main responsibility to clients </p>
                    </div>
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3 mb-[30px]">
                        <h3
                            class="font-lora font-normal text-[22px] leading-[1.222] text-primary mb-[20px] lg:mb-[30px]">
                            Information<span class="text-secondary">.</span></h3>
                        <ul class="text-[16px] leading-none mb-[-20px]">
                            <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary"
                                    href="about.html">About
                                    us</a></li>
                            <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary"
                                    href="properties-v2.html">Properties</a></li>
                            <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary"
                                    href="#">Careers</a></li>
                            <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary"
                                    href="#">Payment</a></li>
                            <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary"
                                    href="blog-grid.html">Blog
                                    Post</a></li>
                        </ul>
                    </div>
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3 mb-[30px]">
                        <h3
                            class="font-lora font-normal text-[22px] leading-[1.222] text-primary mb-[20px] lg:mb-[30px]">
                            Support<span class="text-secondary">.</span></h3>
                        <ul class="text-[16px] leading-none mb-[-20px]">
                            <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary"
                                    href="add-properties.html">Add Property</a></li>
                            <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary"
                                    href="#">Terms &
                                    Conditions</a></li>
                            <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary"
                                    href="#">Help line</a>
                            </li>
                            <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary"
                                    href="agent.html">Our
                                    Agents</a></li>
                            <li class="mb-[20px]"><a class="inline-block transition-all hover:text-secondary"
                                    href="#">features</a></li>
                        </ul>
                    </div>
                    <div class="col-span-12 sm:col-span-6 lg:col-span-2 mb-[30px]">
                        <h3
                            class="font-lora font-normal text-[22px] leading-[1.222] text-primary mb-[20px] lg:mb-[30px]">
                            Address<span class="text-secondary">.</span></h3>
                        <p>2104 Charmaine Lane
                            Amarillo, New York</p>
                        <ul class="inline-flex items-center justify-center mt-[20px]">
                            <li class="first:ml-0 ml-[15px]">
                                <a href="https://www.facebook.com/" aria-label="svg"
                                    class="w-[22px] h-[22px] transition-all rounded-full bg-primary flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-white hover:bg-secondary">
                                    <svg width="7" height="10" viewBox="0 0 7 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.36 4.20156V3.12156C4.36 2.65356 4.468 2.40156 5.224 2.40156H6.16V0.601562H4.72C2.92 0.601562 2.2 1.78956 2.2 3.12156V4.20156H0.760002V6.00156H2.2V11.4016H4.36V6.00156H5.944L6.16 4.20156H4.36Z"
                                            fill="currentColor"></path>
                                    </svg>

                                </a>
                            </li>
                            <li class="ml-[15px]">
                                <a href="https://twitter.com/" aria-label="svg"
                                    class="w-[22px] h-[22px] transition-all rounded-full bg-primary flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-white hover:bg-secondary">
                                    <svg width="10" height="8" viewBox="0 0 14 12" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.6667 1.93957C13.1669 2.15783 12.6376 2.30093 12.096 2.36424C12.6645 2.0304 13.092 1.50098 13.2987 0.874908C12.76 1.18846 12.1725 1.40931 11.5607 1.52824C11.303 1.25838 10.9931 1.04383 10.6498 0.897693C10.3065 0.751554 9.93709 0.676884 9.564 0.678241C8.05333 0.678241 6.82866 1.88491 6.82866 3.37157C6.82866 3.58224 6.85266 3.78824 6.89933 3.98491C5.81571 3.93337 4.75474 3.65651 3.78411 3.172C2.81348 2.68749 1.9545 2.00596 1.26199 1.17091C1.01921 1.58051 0.891605 2.04809 0.892662 2.52424C0.893126 2.96955 1.00455 3.40773 1.21685 3.79917C1.42916 4.19061 1.73566 4.52298 2.10866 4.76624C1.67498 4.75224 1.25068 4.63646 0.869995 4.42824V4.46157C0.869995 5.76691 1.81333 6.85557 3.06333 7.10357C2.8284 7.16591 2.58638 7.1975 2.34333 7.19757C2.16666 7.19757 1.99533 7.18091 1.828 7.14757C2.00672 7.68619 2.34873 8.15578 2.80654 8.49113C3.26435 8.82648 3.81522 9.01095 4.38266 9.01891C3.40937 9.7686 2.21454 10.1736 0.985995 10.1702C0.764662 10.1702 0.547328 10.1569 0.333328 10.1329C1.5875 10.9267 3.04172 11.3471 4.52599 11.3449C9.55733 11.3449 12.308 7.24024 12.308 3.68091L12.2987 3.33224C12.8352 2.95469 13.2988 2.4828 13.6667 1.93957Z"
                                            fill="currentColor"></path>
                                    </svg>


                                </a>
                            </li>
                            <li class="ml-[15px]">
                                <a href="https://www.instagram.com/" aria-label="svg"
                                    class="w-[22px] h-[22px] transition-all rounded-full bg-primary flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-white hover:bg-secondary">
                                    <svg width="10" height="10" viewBox="0 0 14 14" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 3.79646C5.22656 3.79646 3.79531 5.22771 3.79531 7.00115C3.79531 8.77458 5.22656 10.2058 7 10.2058C8.77344 10.2058 10.2047 8.77458 10.2047 7.00115C10.2047 5.22771 8.77344 3.79646 7 3.79646ZM7 9.08396C5.85312 9.08396 4.91719 8.14802 4.91719 7.00115C4.91719 5.85427 5.85312 4.91834 7 4.91834C8.14687 4.91834 9.08281 5.85427 9.08281 7.00115C9.08281 8.14802 8.14687 9.08396 7 9.08396ZM10.3359 2.91834C9.92187 2.91834 9.5875 3.25271 9.5875 3.66677C9.5875 4.08084 9.92187 4.41521 10.3359 4.41521C10.75 4.41521 11.0844 4.0824 11.0844 3.66677C11.0845 3.56845 11.0652 3.47107 11.0277 3.38021C10.9901 3.28935 10.935 3.2068 10.8654 3.13727C10.7959 3.06775 10.7134 3.01262 10.6225 2.97506C10.5316 2.93749 10.4343 2.91821 10.3359 2.91834ZM13.2469 7.00115C13.2469 6.13865 13.2547 5.28396 13.2063 4.42302C13.1578 3.42302 12.9297 2.53552 12.1984 1.80427C11.4656 1.07146 10.5797 0.844898 9.57969 0.796461C8.71719 0.748023 7.8625 0.755836 7.00156 0.755836C6.13906 0.755836 5.28437 0.748023 4.42344 0.796461C3.42344 0.844898 2.53594 1.07302 1.80469 1.80427C1.07187 2.53709 0.84531 3.42302 0.796873 4.42302C0.748435 5.28552 0.756248 6.14021 0.756248 7.00115C0.756248 7.86209 0.748435 8.71834 0.796873 9.57927C0.84531 10.5793 1.07344 11.4668 1.80469 12.198C2.5375 12.9308 3.42344 13.1574 4.42344 13.2058C5.28594 13.2543 6.14062 13.2465 7.00156 13.2465C7.86406 13.2465 8.71875 13.2543 9.57969 13.2058C10.5797 13.1574 11.4672 12.9293 12.1984 12.198C12.9312 11.4652 13.1578 10.5793 13.2063 9.57927C13.2562 8.71834 13.2469 7.86365 13.2469 7.00115ZM11.8719 10.6855C11.7578 10.9699 11.6203 11.1824 11.4 11.4011C11.1797 11.6215 10.9687 11.759 10.6844 11.873C9.8625 12.1996 7.91094 12.1261 7 12.1261C6.08906 12.1261 4.13594 12.1996 3.31406 11.8746C3.02969 11.7605 2.81719 11.623 2.59844 11.4027C2.37812 11.1824 2.24062 10.9715 2.12656 10.6871C1.80156 9.86365 1.875 7.91209 1.875 7.00115C1.875 6.09021 1.80156 4.13709 2.12656 3.31521C2.24062 3.03084 2.37812 2.81834 2.59844 2.59959C2.81875 2.38084 3.02969 2.24177 3.31406 2.12771C4.13594 1.80271 6.08906 1.87615 7 1.87615C7.91094 1.87615 9.86406 1.80271 10.6859 2.12771C10.9703 2.24177 11.1828 2.37927 11.4016 2.59959C11.6219 2.8199 11.7594 3.03084 11.8734 3.31521C12.1984 4.13709 12.125 6.09021 12.125 7.00115C12.125 7.91209 12.1984 9.86365 11.8719 10.6855Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <p class="text-sm md:hidden mb-7 sm:mb-0 mt-[20px]">&copy; <a
                                href="https://themeforest.net/user/codecarnival/portfolio"
                                class="text-secondary">CodeCarnival.</a> All Rights Reserved - Privacy Policy</p>
                    </div>
                </div>

            </div>
            <div class="flex items-center justify-center ">
                <p class="text-sm hidden md:block">&copy; <a
                        href="https://themeforest.net/user/codecarnival/portfolio"
                        class="text-secondary">CodeCarnival.</a> All Rights Reserved - Privacy Policy</p>
            </div>
        </footer>
        <!-- Footer End -->

        <a id="scrollUp"
            class="w-12 h-12 rounded-full bg-primary text-white fixed right-5 bottom-16 flex flex-wrap items-center justify-center transition-all duration-300 z-10"
            href="#" aria-label="scroll up">
            <svg width="25" height="25" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512">
                <path
                    d="M6.101 261.899L25.9 281.698c4.686 4.686 12.284 4.686 16.971 0L198 126.568V468c0 6.627 5.373 12 12 12h28c6.627 0 12-5.373 12-12V126.568l155.13 155.13c4.686 4.686 12.284 4.686 16.971 0l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L232.485 35.515c-4.686-4.686-12.284-4.686-16.971 0L6.101 244.929c-4.687 4.686-4.687 12.284 0 16.97z" />
            </svg>
        </a>

    </div>



    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/parallax.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>

    <!-- Activation JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
