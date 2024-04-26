
@extends('components.layout.app')

    <section
        class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]"
        style="background-image: url({{ asset('assets/images/breadcrumb/bg-1.png') }});">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="max-w-[600px]  mx-auto text-center text-white relative z-[1]">
                        <div class="mb-5"><span class="text-base block">Our Properties</span></div>
                        <h1
                            class="font-lora text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                            Properties Details
                        </h1>

                        <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                            Huge number of propreties availabe here for buy and sell
                            also you can find here co-living property as you like
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <!-- Popular Properties start -->
    <section class="popular-properties py-[80px] lg:py-[120px]">
        <div class="container">
            <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
                <div class="col-span-12 md:col-span-6 lg:col-span-8 mb-[30px]">
                    <img src="{{ asset('storage/' . $property->media->first()->file_path) }}"
                        class="w-full element-details h-56" loading="lazy" alt="Elite Garden Resedence.">
                    <div class="mt-[45px] mb-[35px]">
                        <h2
                            class="font-lora leading-tight text-[22px] md:text-[28px] lg:text-[36px] text-primary mb-[5px] font-medium">
                            {{ $property->title }}.</h2>
                        <h3 class="font-light text-[18px] text-secondary underline mb-[20px]">{{ $property->address }}</h3>
                        <p>{{ $property->description }}</p>
                    </div>

                    <div
                        class="xl:flex xl:flex-nowrap xl:justify-between gap-y-[30px] gap-x-[15px] xl:gap-x-[0px] mb-[30px] items-center">
                        <div class="grid grid-cols-12 gap-y-[30px] gap-x-[15px] xl:gap-x-[20px] xl:mr-[30px]">
                            @foreach ($property->media as $media)
                                <div class="col-span-5">
                                    <a href="{{ asset('storage/' . $media->file_path) }}" class="gallery-image">
                                        <img class="object-cover rounded-[8px] w-full h-full"
                                            src="{{ asset('storage/' . $media->file_path) }}" alt="{{ $media->name }}"
                                            loading="lazy" width="270" height="187">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <h4
                        class="font-lora text-primary text-[24px] leading-[1.277] sm:text-[28px] capitalize mt-[50px] mb-[40px] font-medium">
                        Property Amenities<span class="text-secondary">.</span>
                    </h4>

                    <ul
                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 px-[15px] mx-[-15px] mt-[40px]">
                        <li class="flex flex-wrap items-center mb-[25px]">
                            <img class="mr-[15px]" src="{{ asset('assets/images/about/check.png') }}" loading="lazy"
                                alt="icon" width="20" height="20">
                            <span>{{ $property->nbr_of_bedroom }} Beedrooms</span>
                        </li>
                        <li class="flex flex-wrap items-center mb-[25px]">
                            <img class="mr-[15px]" src="{{ asset('assets/images/about/check.png') }}" loading="lazy"
                                alt="icon" width="20" height="20">
                            <span>{{ $property->nbr_of_bathroom }} Bathrooms</span>
                        </li>
                        <li class="flex flex-wrap items-center mb-[25px]">
                            <img class="mr-[15px]" src="{{ asset('assets/images/about/check.png') }}" loading="lazy"
                                alt="icon" width="20" height="20">
                            <span>{{ $property->nbr_of_garage }} Garages</span>
                        </li>
                        @foreach ($property->amenities as $amenity)
                            <li class="flex flex-wrap items-center mb-[25px]">
                                <img class="mr-[15px]" src="{{ asset('assets/images/about/check.png') }}" loading="lazy"
                                    alt="icon" width="20" height="20">
                                <span>{{ $amenity->name }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <div class="grid grid-cols-12 mt-[70px]">
                        <div class="col-span-12">
                            <h2
                                class="font-lora text-primary text-[24px] sm:text-[28px] capitalize nt-[80px] lg:mt-[90px] font-medium">
                                Leave a Message<span class="text-secondary">.</span>
                            </h2>
                            <div class="mt-[60px]">
                                <form action="{{route('properties.message', $property->id)}}" method="POST" class="grid grid-cols-12 gap-x-[20px] gap-y-[30px]">
                                    @csrf
                                    <div class="col-span-12 md:col-span-6">
                                        <input name="first_name" type="text" placeholder="First Name" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)]">
                                    </div>

                                    <div class="col-span-12 md:col-span-6">
                                        <input name="last_name" type="text" placeholder="Last Name" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)]">
                                    </div>

                                    <div class="col-span-12 md:col-span-6">
                                        <input name="phone_number" type="text" placeholder="Phone number" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)]">
                                    </div>

                                    <div class="col-span-12 md:col-span-6">
                                        <input name="email" type="email" placeholder="Email Address" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)]">
                                    </div>

                                    <div class="col-span-12">
                                        <textarea name="message" placeholder="Message" class="h-[196px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none"></textarea>
                                    </div>

                                    <div class="col-span-12">
                                        <button type="submit" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Contact us</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-6 lg:col-span-4 mb-[30px]">
                    <aside class="mb-[-60px] asidebar">
                        <div class="mb-[60px]">
                            <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[40px] font-medium">
                                Property Search <span class="text-secondary">.</span></h3>
                            <form action="#" class="relative">
                                <div class="relative mb-[25px] bg-white">
                                    <input
                                        class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[8px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white"
                                        type="text" placeholder="Location">
                                    <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none"
                                        width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.39648 6.41666H8.60482" stroke="#016450" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M7 8.02083V4.8125" stroke="#016450" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path
                                            d="M2.11231 4.9525C3.26148 -0.0991679 10.7456 -0.0933345 11.889 4.95833C12.5598 7.92167 10.7165 10.43 9.10064 11.9817C7.92814 13.1133 6.07314 13.1133 4.89481 11.9817C3.28481 10.43 1.44148 7.91583 2.11231 4.9525Z"
                                            stroke="#0B2C3D" stroke-width="1.5" />
                                    </svg>
                                </div>
                                <div class="relative mb-[25px] bg-white">
                                    <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none"
                                        width="13" height="13" viewBox="0 0 13 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_928_754)">
                                            <path
                                                d="M4.64311 0H0V4.64311H4.64311V0ZM3.71437 3.71437H0.928741V0.928741H3.71437V3.71437Z"
                                                fill="#0B2C3D" />
                                            <path
                                                d="M8.35742 0V4.64311H13.0005V0H8.35742ZM12.0718 3.71437H9.28616V0.928741H12.0718V3.71437Z"
                                                fill="#0B2C3D" />
                                            <path
                                                d="M0 13H4.64311V8.35689H0V13ZM0.928741 9.28563H3.71437V12.0713H0.928741V9.28563Z"
                                                fill="#0B2C3D" />
                                            <path
                                                d="M8.35742 13H13.0005V8.35689H8.35742V13ZM9.28616 9.28563H12.0718V12.0713H9.28616V9.28563Z"
                                                fill="#0B2C3D" />
                                            <path
                                                d="M6.96437 0H6.03563V6.03563H0V6.96437H6.03563V13H6.96437V6.96437H13V6.03563H6.96437V0Z"
                                                fill="#0B2C3D" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_928_754">
                                                <rect width="13" height="13" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <select
                                        class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body borderborder-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary border-primary pl-[40px] pr-[20px] py-[8px] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                        <option value="0">Property Category</option>
                                        <option value="1">Property</option>
                                        <option value="2">Category</option>
                                    </select>
                                </div>
                                <div class="relative mb-[25px] bg-white">
                                    <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none"
                                        width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.16602 12.8333H12.8327" stroke="#0B2C3D" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M1.7207 12.8333L1.74987 5.81583C1.74987 5.45999 1.91904 5.12169 2.19904 4.90002L6.28237 1.72085C6.70237 1.39418 7.29154 1.39418 7.71737 1.72085L11.8007 4.89418C12.0865 5.11585 12.2499 5.45416 12.2499 5.81583V12.8333"
                                            stroke="#0B2C3D" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M9.04232 6.41666H4.95898C4.47482 6.41666 4.08398 6.8075 4.08398 7.29166V12.8333H9.91732V7.29166C9.91732 6.8075 9.52648 6.41666 9.04232 6.41666Z"
                                            stroke="#0B2C3D" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M5.83398 9.47916V10.3542" stroke="#0B2C3D" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.125 4.375H7.875" stroke="#0B2C3D" stroke-width="1.5"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <select
                                        class="nice-select font-light w-full h-[45px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[8px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                        <option value="0">Property Type</option>
                                        <option value="1">Property A</option>
                                        <option value="2">Category B</option>
                                    </select>
                                </div>
                                <div class="relative mb-[25px] bg-white">
                                    <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.78125 9.55323C5.78125 10.4132 6.44125 11.1066 7.26125 11.1066H8.93458C9.64792 11.1066 10.2279 10.4999 10.2279 9.75323C10.2279 8.9399 9.87458 8.65323 9.34792 8.46657L6.66125 7.53323C6.13458 7.34657 5.78125 7.0599 5.78125 6.24657C5.78125 5.4999 6.36125 4.89323 7.07458 4.89323H8.74792C9.56792 4.89323 10.2279 5.58657 10.2279 6.44657"
                                            stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8 4V12" stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M7.9987 14.6667C11.6806 14.6667 14.6654 11.6819 14.6654 8C14.6654 4.3181 11.6806 1.33333 7.9987 1.33333C4.3168 1.33333 1.33203 4.3181 1.33203 8C1.33203 11.6819 4.3168 14.6667 7.9987 14.6667Z"
                                            stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <select
                                        class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[8px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                        <option selected value="0">Price Range</option>
                                        <option value="1">1500 usd</option>
                                        <option value="2">1600 usd</option>
                                    </select>
                                </div>
                                <div class="relative mb-[25px] bg-white">
                                    <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none"
                                        width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.33268 4.66667H4.66602V9.33334H9.33268V4.66667Z" stroke="#0B2C3D"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2.91602 12.8333C3.87852 12.8333 4.66602 12.0458 4.66602 11.0833V9.33333H2.91602C1.95352 9.33333 1.16602 10.1208 1.16602 11.0833C1.16602 12.0458 1.95352 12.8333 2.91602 12.8333Z"
                                            stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M2.91602 4.66667H4.66602V2.91667C4.66602 1.95417 3.87852 1.16667 2.91602 1.16667C1.95352 1.16667 1.16602 1.95417 1.16602 2.91667C1.16602 3.87917 1.95352 4.66667 2.91602 4.66667Z"
                                            stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M9.33398 4.66667H11.084C12.0465 4.66667 12.834 3.87917 12.834 2.91667C12.834 1.95417 12.0465 1.16667 11.084 1.16667C10.1215 1.16667 9.33398 1.95417 9.33398 2.91667V4.66667Z"
                                            stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M11.084 12.8333C12.0465 12.8333 12.834 12.0458 12.834 11.0833C12.834 10.1208 12.0465 9.33333 11.084 9.33333H9.33398V11.0833C9.33398 12.0458 10.1215 12.8333 11.084 12.8333Z"
                                            stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <select
                                        class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[8px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                        <option selected value="0">Property Size</option>
                                        <option value="1">1500 squre fit</option>
                                        <option value="2">1600 squre fit</option>
                                    </select>
                                </div>


                                <button type="submit"
                                    class="block z-[1] before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:z-[-1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:z-[-2] after:bg-primary after:rounded-md after:transition-all">Search</button>

                            </form>
                        </div>

                        <div class="mb-[60px]">
                            <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[40px] font-medium">
                                Featured Property<span class="text-secondary">.</span></h3>
                            <div class="sidebar-carousel relative">
                                <div class="swiper p-1">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        @php
                                            $chunks = array_chunk($properties->all(), 2);
                                        @endphp
                                        @foreach ($chunks as $pair)
                                            <div class="swiper-slide">
                                                @foreach ($pair as $property)
                                                    <div
                                                        class="overflow-hidden rounded-md drop-shadow-[0px_0px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 mb-4">
                                                        <div class="relative">
                                                            <a href="{{route('properties-details', $property->id)}}" class="block">
                                                                <img src="{{ asset('storage/' . $property->media->first()->file_path) }}"
                                                                    class="element" loading="lazy" width="370"
                                                                    height="100" alt="Orchid Casel de Paradise.">
                                                            </a>
                                                            <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                                                <button
                                                                    class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img
                                                                        class="mr-1"
                                                                        src="{{ asset('assets/images/icon/camera.png') }}"
                                                                        loading="lazy" width="13" height="10"
                                                                        alt="camera icon">
                                                                    {{ $property->media->count() }}</button>
                                                            </div>
                                                            <span
                                                                class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">for
                                                                {{ $property->category->name }}</span>
                                                        </div>

                                                        <div class="py-[20px] px-[20px] text-left">
                                                            <h3><a href="{{route('properties-details', $property->id)}}"
                                                                    class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary hover:text-secondary transition-all font-medium">{{ $property->title }}</a>
                                                            </h3>
                                                            <h4><a href="{{route('properties-details', $property->id)}}"
                                                                    class="font-light text-[14px] leading-[1.75] underline">{{ $property->address }}</a>
                                                            </h4>
                                                            <span class="font-light text-sm">Added:
                                                                {{ $property->created_at }}</span>
                                                            <ul
                                                                class="flex flex-wrap items-center justify-between text-[12px] mt-[10px] mb-[15px] pb-[10px] border-b border-[#E0E0E0]">
                                                                <li
                                                                    class="flex flex-wrap items-center pr-[25px] sm:pr-[5px] md:pr-[25px] border-r border-[#E0DEDE]">
                                                                    <svg class="mr-[5px]" width="14" height="14"
                                                                        viewBox="0 0 14 14" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.8125 9.68709V4.31285C12.111 4.23634 12.384 4.0822 12.6037 3.86607C12.8234 3.64994 12.982 3.37951 13.0634 3.08226C13.1448 2.78501 13.1461 2.47151 13.0671 2.1736C12.9882 1.87569 12.8318 1.60398 12.6139 1.38605C12.396 1.16812 12.1243 1.01174 11.8263 0.932792C11.5284 0.85384 11.2149 0.855126 10.9177 0.936521C10.6204 1.01792 10.35 1.17652 10.1339 1.39623C9.91774 1.61593 9.7636 1.88892 9.68709 2.18747H4.31285C4.23634 1.88892 4.0822 1.61593 3.86607 1.39623C3.64994 1.17652 3.37951 1.01792 3.08226 0.936521C2.78501 0.855126 2.47151 0.85384 2.1736 0.932792C1.87569 1.01174 1.60398 1.16812 1.38605 1.38605C1.16812 1.60398 1.01174 1.87569 0.932792 2.1736C0.85384 2.47151 0.855126 2.78501 0.936521 3.08226C1.01792 3.37951 1.17652 3.64994 1.39623 3.86607C1.61593 4.0822 1.88892 4.23634 2.18747 4.31285V9.68709C1.88892 9.7636 1.61593 9.91774 1.39623 10.1339C1.17652 10.35 1.01792 10.6204 0.936521 10.9177C0.855126 11.2149 0.85384 11.5284 0.932792 11.8263C1.01174 12.1243 1.16812 12.396 1.38605 12.6139C1.60398 12.8318 1.87569 12.9882 2.1736 13.0671C2.47151 13.1461 2.78501 13.1448 3.08226 13.0634C3.37951 12.982 3.64994 12.8234 3.86607 12.6037C4.0822 12.384 4.23634 12.111 4.31285 11.8125H9.68709C9.7636 12.111 9.91774 12.384 10.1339 12.6037C10.35 12.8234 10.6204 12.982 10.9177 13.0634C11.2149 13.1448 11.5284 13.1461 11.8263 13.0671C12.1243 12.9882 12.396 12.8318 12.6139 12.6139C12.8318 12.396 12.9882 12.1243 13.0671 11.8263C13.1461 11.5284 13.1448 11.2149 13.0634 10.9177C12.982 10.6204 12.8234 10.35 12.6037 10.1339C12.384 9.91774 12.111 9.7636 11.8125 9.68709ZM11.375 1.74997C11.548 1.74997 11.7172 1.80129 11.8611 1.89744C12.005 1.99358 12.1171 2.13024 12.1834 2.29012C12.2496 2.45001 12.2669 2.62594 12.2332 2.79568C12.1994 2.96541 12.1161 3.12132 11.9937 3.24369C11.8713 3.36606 11.7154 3.4494 11.5457 3.48316C11.3759 3.51692 11.2 3.49959 11.0401 3.43337C10.8802 3.36714 10.7436 3.25499 10.6474 3.11109C10.5513 2.9672 10.5 2.79803 10.5 2.62497C10.5002 2.39298 10.5925 2.17055 10.7565 2.00651C10.9206 1.84246 11.143 1.7502 11.375 1.74997ZM1.74997 2.62497C1.74997 2.45191 1.80129 2.28274 1.89744 2.13885C1.99358 1.99495 2.13024 1.8828 2.29012 1.81658C2.45001 1.75035 2.62594 1.73302 2.79568 1.76678C2.96541 1.80055 3.12132 1.88388 3.24369 2.00625C3.36606 2.12862 3.4494 2.28453 3.48316 2.45427C3.51692 2.624 3.49959 2.79993 3.43337 2.95982C3.36714 3.1197 3.25499 3.25636 3.11109 3.35251C2.9672 3.44865 2.79803 3.49997 2.62497 3.49997C2.39298 3.49974 2.17055 3.40748 2.00651 3.24343C1.84246 3.07939 1.7502 2.85696 1.74997 2.62497ZM2.62497 12.25C2.45191 12.25 2.28274 12.1987 2.13885 12.1025C1.99495 12.0064 1.8828 11.8697 1.81658 11.7098C1.75035 11.5499 1.73302 11.374 1.76678 11.2043C1.80055 11.0345 1.88388 10.8786 2.00625 10.7563C2.12862 10.6339 2.28453 10.5505 2.45427 10.5168C2.624 10.483 2.79993 10.5003 2.95982 10.5666C3.1197 10.6328 3.25636 10.745 3.35251 10.8888C3.44865 11.0327 3.49997 11.2019 3.49997 11.375C3.49974 11.607 3.40748 11.8294 3.24343 11.9934C3.07939 12.1575 2.85696 12.2497 2.62497 12.25ZM9.68709 10.9375H4.31285C4.23448 10.6367 4.07729 10.3622 3.8575 10.1424C3.63771 9.92265 3.36326 9.76546 3.06247 9.68709V4.31285C3.36324 4.23444 3.63766 4.07724 3.85745 3.85745C4.07724 3.63766 4.23444 3.36324 4.31285 3.06247H9.68709C9.76546 3.36326 9.92265 3.63771 10.1424 3.8575C10.3622 4.07729 10.6367 4.23448 10.9375 4.31285V9.68709C10.6367 9.76542 10.3622 9.92259 10.1424 10.1424C9.92259 10.3622 9.76542 10.6367 9.68709 10.9375ZM11.375 12.25C11.2019 12.25 11.0327 12.1987 10.8888 12.1025C10.745 12.0064 10.6328 11.8697 10.5666 11.7098C10.5003 11.5499 10.483 11.374 10.5168 11.2043C10.5505 11.0345 10.6339 10.8786 10.7563 10.7563C10.8786 10.6339 11.0345 10.5505 11.2043 10.5168C11.374 10.483 11.5499 10.5003 11.7098 10.5666C11.8697 10.6328 12.0064 10.745 12.1025 10.8888C12.1987 11.0327 12.25 11.2019 12.25 11.375C12.2496 11.6069 12.1573 11.8293 11.9933 11.9933C11.8293 12.1573 11.6069 12.2496 11.375 12.25Z" />
                                                                    </svg>

                                                                    <span>{{ $property->area }} m²</span>

                                                                </li>
                                                                <li
                                                                    class="flex flex-wrap items-center pr-[25px] sm:pr-[5px] md:pr-[25px] border-r border-[#E0DEDE]">
                                                                    <svg class="mr-[5px]" width="14" height="10"
                                                                        viewBox="0 0 14 10" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M13.0002 4.18665V2.33331C13.0002 1.23331 12.1002 0.333313 11.0002 0.333313H8.3335C7.82016 0.333313 7.3535 0.533313 7.00016 0.853313C6.64683 0.533313 6.18016 0.333313 5.66683 0.333313H3.00016C1.90016 0.333313 1.00016 1.23331 1.00016 2.33331V4.18665C0.593496 4.55331 0.333496 5.07998 0.333496 5.66665V9.66665H1.66683V8.33331H12.3335V9.66665H13.6668V5.66665C13.6668 5.07998 13.4068 4.55331 13.0002 4.18665ZM8.3335 1.66665H11.0002C11.3668 1.66665 11.6668 1.96665 11.6668 2.33331V3.66665H7.66683V2.33331C7.66683 1.96665 7.96683 1.66665 8.3335 1.66665ZM2.3335 2.33331C2.3335 1.96665 2.6335 1.66665 3.00016 1.66665H5.66683C6.0335 1.66665 6.3335 1.96665 6.3335 2.33331V3.66665H2.3335V2.33331ZM1.66683 6.99998V5.66665C1.66683 5.29998 1.96683 4.99998 2.3335 4.99998H11.6668C12.0335 4.99998 12.3335 5.29998 12.3335 5.66665V6.99998H1.66683Z" />
                                                                    </svg>

                                                                    <span>{{ $property->nbr_of_bedroom }}</span>

                                                                </li>
                                                                <li
                                                                    class="flex flex-wrap items-center pr-[25px] sm:pr-[5px] md:pr-[25px] border-r border-[#E0DEDE]">
                                                                    <svg class="mr-[5px]" width="14" height="14"
                                                                        viewBox="0 0 14 14" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12.6875 7.65627H2.1875V2.7344C2.18699 2.54904 2.22326 2.36543 2.29419 2.19418C2.36512 2.02294 2.46932 1.86746 2.60075 1.73676L2.61168 1.72582C2.81765 1.52015 3.0821 1.38309 3.36889 1.33336C3.65568 1.28362 3.95083 1.32364 4.21403 1.44795C3.96546 1.86122 3.86215 2.34571 3.9205 2.82443C3.97885 3.30315 4.19552 3.74864 4.53608 4.0901L4.83552 4.38954L4.28436 4.94073L4.90304 5.55941L5.4542 5.00825L8.5082 1.95431L9.05937 1.40314L8.44066 0.78443L7.88946 1.3356L7.59002 1.03616C7.23151 0.678646 6.75892 0.458263 6.2546 0.413412C5.75029 0.368561 5.24622 0.502086 4.83025 0.790719C4.3916 0.513704 3.87178 0.394114 3.35619 0.451596C2.84059 0.509078 2.35987 0.740213 1.993 1.10703L1.98207 1.11797C1.76912 1.32975 1.6003 1.58165 1.48537 1.85911C1.37044 2.13657 1.31168 2.43407 1.3125 2.7344V7.65627H0.4375V8.53127H1.3125V9.37072C1.31248 9.44126 1.32386 9.51133 1.34619 9.57823L2.16016 12.02C2.20359 12.1508 2.28712 12.2645 2.39887 12.345C2.51062 12.4256 2.64491 12.4689 2.78266 12.4688H3.1354L2.81641 13.5625H3.72786L4.04688 12.4688H9.73711L10.0652 13.5625H10.9785L10.6504 12.4688H11.2172C11.355 12.4689 11.4893 12.4256 11.6011 12.3451C11.7129 12.2645 11.7964 12.1508 11.8398 12.02L12.6538 9.57823C12.6761 9.51133 12.6875 9.44126 12.6875 9.37072V8.53127H13.5625V7.65627H12.6875ZM5.15484 1.65486C5.3959 1.41433 5.72254 1.27924 6.06308 1.27924C6.40362 1.27924 6.73026 1.41433 6.97132 1.65486L7.2707 1.95431L5.45429 3.77072L5.15484 3.47134C4.91432 3.23027 4.77924 2.90364 4.77924 2.5631C4.77924 2.22256 4.91432 1.89593 5.15484 1.65486ZM11.8125 9.33518L11.0597 11.5938H2.94033L2.1875 9.33518V8.53127H11.8125V9.33518Z" />
                                                                    </svg>

                                                                    <span>{{ $property->nbr_of_bathroom }}</span>

                                                                </li>
                                                                <li class="flex flex-wrap items-center">
                                                                    <svg class="mr-[5px]" width="14" height="14"
                                                                        viewBox="0 0 14 14" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12.25 6.98507H12.236L11.1307 4.49805C11.0275 4.26615 10.8592 4.06913 10.6464 3.93083C10.4335 3.79253 10.1851 3.71887 9.93125 3.71875H4.06875C3.81491 3.71888 3.56655 3.79256 3.3537 3.93086C3.14085 4.06916 2.97263 4.26616 2.86937 4.49805L1.76397 6.98507H1.75C1.51802 6.98533 1.29561 7.0776 1.13157 7.24164C0.967531 7.40568 0.875261 7.62809 0.875 7.86007V10.9226C0.875261 11.1546 0.967531 11.377 1.13157 11.541C1.29561 11.705 1.51802 11.7973 1.75 11.7976V12.9062C1.7502 13.0802 1.81941 13.247 1.94243 13.3701C2.06546 13.4931 2.23226 13.5623 2.40625 13.5625H3.9375C4.11149 13.5623 4.27829 13.4931 4.40131 13.3701C4.52434 13.247 4.59355 13.0802 4.59375 12.9062V11.7976H9.40625V12.9062C9.40645 13.0802 9.47566 13.247 9.59869 13.3701C9.72171 13.4931 9.88851 13.5623 10.0625 13.5625H11.5938C11.7677 13.5623 11.9345 13.4931 12.0576 13.3701C12.1806 13.247 12.2498 13.0802 12.25 12.9062V11.7976C12.482 11.7973 12.7044 11.705 12.8684 11.541C13.0325 11.377 13.1247 11.1546 13.125 10.9226V7.86007C13.1247 7.62809 13.0325 7.40568 12.8684 7.24164C12.7044 7.0776 12.482 6.98533 12.25 6.98507ZM3.66885 4.85352C3.70327 4.7762 3.75936 4.71052 3.83033 4.66442C3.90131 4.61831 3.98412 4.59377 4.06875 4.59375H9.93125C10.0159 4.59379 10.0986 4.61835 10.1696 4.66445C10.2406 4.71055 10.2966 4.77622 10.331 4.85352L11.2784 6.98504H2.7215L3.66885 4.85352ZM3.71875 12.6875H2.625V11.7976H3.71875V12.6875ZM11.375 12.6875H10.2812V11.7976H11.375V12.6875ZM12.25 10.9226H1.75V7.86007H12.25V10.9226Z" />
                                                                        <path
                                                                            d="M2.625 8.96875H4.8125V9.84375H2.625V8.96875Z" />
                                                                        <path
                                                                            d="M9.1875 8.96875H11.375V9.84375H9.1875V8.96875Z" />
                                                                        <path
                                                                            d="M7 0.403564L0.4375 3.03849V3.98139L7 1.34649L13.5625 3.98139V3.03849L7 0.403564Z" />
                                                                    </svg>
                                                                    <span>{{ $property->nbr_of_garage }}</span>
                                                                </li>
                                                            </ul>
                                                            <ul>
                                                                <li class="flex flex-wrap items-center justify-between">
                                                                    <span
                                                                        class="font-lora text-base text-primary leading-none font-medium">Price:
                                                                        {{ $property->price }} DH</span>

                                                                    <span class="flex flex-wrap items-center">
                                                                        <button
                                                                            class="mr-[15px] text-[#9D9C9C] hover:text-secondary"
                                                                            aria-label="svg">
                                                                            <svg width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="currentColor"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M13.1667 11.6667C12.8572 11.6667 12.5605 11.7896 12.3417 12.0084C12.1229 12.2272 12 12.5239 12 12.8334C12 13.1428 12.1229 13.4395 12.3417 13.6583C12.5605 13.8771 12.8572 14 13.1667 14C13.4761 14 13.7728 13.8771 13.9916 13.6583C14.2104 13.4395 14.3333 13.1428 14.3333 12.8334C14.3333 12.5239 14.2104 12.2272 13.9916 12.0084C13.7728 11.7896 13.4761 11.6667 13.1667 11.6667ZM11 12.8334C11 12.2587 11.2283 11.7076 11.6346 11.3013C12.0409 10.895 12.592 10.6667 13.1667 10.6667C13.7413 10.6667 14.2924 10.895 14.6987 11.3013C15.1051 11.7076 15.3333 12.2587 15.3333 12.8334C15.3333 13.408 15.1051 13.9591 14.6987 14.3654C14.2924 14.7717 13.7413 15 13.1667 15C12.592 15 12.0409 14.7717 11.6346 14.3654C11.2283 13.9591 11 13.408 11 12.8334Z"
                                                                                    fill="currentColor" />
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M9.26984 1.14667C9.36347 1.24042 9.41606 1.3675 9.41606 1.5C9.41606 1.6325 9.36347 1.75958 9.26984 1.85333L8.4565 2.66667H11.1665C11.8295 2.66667 12.4654 2.93006 12.9343 3.3989C13.4031 3.86774 13.6665 4.50363 13.6665 5.16667V11C13.6665 11.1326 13.6138 11.2598 13.5201 11.3536C13.4263 11.4473 13.2991 11.5 13.1665 11.5C13.0339 11.5 12.9067 11.4473 12.813 11.3536C12.7192 11.2598 12.6665 11.1326 12.6665 11V5.16667C12.6665 4.96968 12.6277 4.77463 12.5523 4.59264C12.4769 4.41065 12.3665 4.24529 12.2272 4.10601C12.0879 3.96672 11.9225 3.85623 11.7405 3.78085C11.5585 3.70547 11.3635 3.66667 11.1665 3.66667H8.45717L9.2705 4.48C9.36154 4.57434 9.41188 4.70067 9.41068 4.83177C9.40948 4.96287 9.35683 5.08825 9.26409 5.18091C9.17134 5.27357 9.04591 5.32609 8.91481 5.32717C8.78371 5.32825 8.65743 5.27779 8.56317 5.18667L6.8965 3.52C6.80287 3.42625 6.75028 3.29917 6.75028 3.16667C6.75028 3.03417 6.80287 2.90708 6.8965 2.81333L8.56317 1.14667C8.65692 1.05303 8.784 1.00044 8.9165 1.00044C9.049 1.00044 9.17609 1.05303 9.26984 1.14667ZM2.83317 4.33333C2.98638 4.33333 3.13809 4.30316 3.27963 4.24453C3.42118 4.1859 3.54979 4.09996 3.65813 3.99162C3.76646 3.88329 3.8524 3.75468 3.91103 3.61313C3.96966 3.47158 3.99984 3.31988 3.99984 3.16667C3.99984 3.01346 3.96966 2.86175 3.91103 2.7202C3.8524 2.57866 3.76646 2.45004 3.65813 2.34171C3.54979 2.23337 3.42118 2.14744 3.27963 2.08881C3.13809 2.03018 2.98638 2 2.83317 2C2.52375 2 2.22701 2.12292 2.00821 2.34171C1.78942 2.5605 1.6665 2.85725 1.6665 3.16667C1.6665 3.47609 1.78942 3.77283 2.00821 3.99162C2.22701 4.21042 2.52375 4.33333 2.83317 4.33333ZM4.99984 3.16667C4.99984 3.7413 4.77156 4.2924 4.36524 4.69873C3.95891 5.10506 3.40781 5.33333 2.83317 5.33333C2.25853 5.33333 1.70743 5.10506 1.30111 4.69873C0.894777 4.2924 0.666504 3.7413 0.666504 3.16667C0.666504 2.59203 0.894777 2.04093 1.30111 1.6346C1.70743 1.22827 2.25853 1 2.83317 1C3.40781 1 3.95891 1.22827 4.36524 1.6346C4.77156 2.04093 4.99984 2.59203 4.99984 3.16667Z"
                                                                                    fill="currentColor" />
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M6.73016 14.8533C6.63653 14.7596 6.58394 14.6325 6.58394 14.5C6.58394 14.3675 6.63653 14.2404 6.73016 14.1467L7.5435 13.3333H4.8335C4.17046 13.3333 3.53457 13.0699 3.06573 12.6011C2.59689 12.1323 2.3335 11.4964 2.3335 10.8333V5C2.3335 4.86739 2.38617 4.74021 2.47994 4.64645C2.57371 4.55268 2.70089 4.5 2.8335 4.5C2.9661 4.5 3.09328 4.55268 3.18705 4.64645C3.28082 4.74021 3.3335 4.86739 3.3335 5V10.8333C3.3335 11.2312 3.49153 11.6127 3.77284 11.894C4.05414 12.1753 4.43567 12.3333 4.8335 12.3333H7.54283L6.7295 11.52C6.68176 11.4739 6.6437 11.4187 6.61752 11.3576C6.59135 11.2966 6.57759 11.231 6.57704 11.1646C6.5765 11.0982 6.58918 11.0324 6.61435 10.971C6.63952 10.9095 6.67667 10.8537 6.72364 10.8068C6.77061 10.7599 6.82645 10.7228 6.88791 10.6977C6.94937 10.6726 7.01521 10.6599 7.0816 10.6605C7.14799 10.6612 7.2136 10.675 7.27459 10.7012C7.33557 10.7274 7.39073 10.7656 7.43683 10.8133L9.1035 12.48C9.19713 12.5738 9.24972 12.7008 9.24972 12.8333C9.24972 12.9658 9.19713 13.0929 9.1035 13.1867L7.43683 14.8533C7.34308 14.947 7.216 14.9996 7.0835 14.9996C6.951 14.9996 6.82391 14.947 6.73016 14.8533Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </button>
                                                                        <button class="text-[#9D9C9C] hover:text-secondary"
                                                                            aria-label="svg">
                                                                            <svg width="16" height="16"
                                                                                viewBox="0 0 16 16" fill="currentColor"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g clip-path="url(.clip0_656_640)">
                                                                                    <path
                                                                                        d="M7.9999 2.74799L7.2829 2.01099C5.5999 0.280988 2.5139 0.877988 1.39989 3.05299C0.876895 4.07599 0.758895 5.55299 1.71389 7.43799C2.63389 9.25299 4.5479 11.427 7.9999 13.795C11.4519 11.427 13.3649 9.25299 14.2859 7.43799C15.2409 5.55199 15.1239 4.07599 14.5999 3.05299C13.4859 0.877988 10.3999 0.279988 8.7169 2.00999L7.9999 2.74799ZM7.9999 15C-7.33311 4.86799 3.27889 -3.04001 7.82389 1.14299C7.88389 1.19799 7.94289 1.25499 7.9999 1.31399C8.05632 1.25504 8.11503 1.19833 8.17589 1.14399C12.7199 -3.04201 23.3329 4.86699 7.9999 15Z"
                                                                                        fill="currentColor" />
                                                                                </g>
                                                                                <defs>
                                                                                    <clipPath class="clip0_656_640">
                                                                                        <rect width="16"
                                                                                            height="16"
                                                                                            fill="white" />
                                                                                    </clipPath>
                                                                                </defs>
                                                                            </svg>
                                                                        </button>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="flex flex-wrap items-center justify-center mt-[25px]">
                                    <div
                                        class="swiper-button-prev w-[26px] h-[26px] rounded-full bg-primary  text-white hover:bg-secondary static mx-[5px] mt-[0px]">
                                    </div>
                                    <div
                                        class="swiper-button-next w-[26px] h-[26px] rounded-full bg-primary  text-white hover:bg-secondary static mx-[5px] mt-[0px]">
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="mb-[60px]">
                            <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[30px] font-medium">Our
                                Agents<span class="text-secondary">.</span></h3>
                            <div class="grid gap-x-[20px] mb-[-20px]">
                                <!-- single team start -->
                                <div class="text-center group mb-[30px]">
                                    <div class="relative z-[1] rounded-[6px_6px_0px_0px]">
                                        <a href="agent-details.html"
                                            class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#016450] before:w-full before:h-[calc(100%_-_30px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                                            <img src="{{ asset('assets/images/team/person3.png') }}"
                                                class="w-full object-contain block mx-auto" loading="lazy" width="130"
                                                height="154" alt="Albert S. Smith">
                                        </a>
                                    </div>

                                    <div
                                        class="bg-[#FFFDFC] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[10px] pt-[5px] pb-[15px] border-b-[6px] border-primary transition-all duration-700 group-hover:border-secondary">
                                        <h3><a href="agent-details.html"
                                                class="font-lora text-[14px] text-primary hover:text-secondary">Albert S.
                                                Smith</a></h3>
                                        <p class="font-light text-[12px] leading-none capitalize mt-[5px]">Real Estate
                                            Agent</p>
                                    </div>
                                </div>
                                <!-- single team end-->
                            </div>
                        </div>
                    </aside>
                </div>
            </div>

        </div>
    </section>
    <!-- Popular Properties end -->
@endsection
