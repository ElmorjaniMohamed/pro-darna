@extends('components.layout.app')

@section('content')
    <!-- Hero section start -->
    <section
        class="bg-no-repeat bg-center bg-cover bg-[#E9F1FF] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]"
        style="background-image: url('assets/images/breadcrumb/bg-1.png');">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="max-w-[600px]  mx-auto text-center text-white relative z-[1]">
                        <div class="mb-5"><span class="text-base block">Our Properties</span></div>
                        <h1
                            class="font-lora mb-5 text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                            Properties</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

     <!-- Addvanced search tab start -->
     <div class="mt-[80px] lg:mt-[120px] xl:mt-[-160px] relative z-[2] pl-[40px] lg:pl-[50px] xl:pl-[0px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12 relative">
                    <ul
                        class="tab-nav search-tab inline-flex px-[15px] sm:px-[30px] py-[22px] border-l border-t border-r border-solid border-[#016450] border-opacity-25 rounded-tl-[15px] rounded-tr-[15px] bg-white">
                        <li data-tab="buy" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1 active"><button
                                class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-32px] before:w-0 before:h-[2px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">buy</button>
                        </li>
                        <li data-tab="sell" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1"><button
                                class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-32px] before:w-0 before:h-[2px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">sell</button>
                        </li>
                        <li data-tab="rent" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1"><button
                                class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-32px] before:w-0 before:h-[2px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">rent</button>
                        </li>
                        <li data-tab="co-living" class="md:mr-[0px] my-1"><button
                                class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-32px] before:w-0 before:h-[2px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">Co-living</button>
                        </li>
                    </ul>

                    <button
                        class="tab-toggle-btn px-[10px] py-[15px] absolute bottom-[-56px] left-[-45px] border-l border-t border-b border-solid border-[#016450] bg-white text-primary border-opacity-25 rounded-tl-[10px] rounded-bl-[10px]"
                        aria-label="svg icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 22V11" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M19 7V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 22V17" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 13V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5 22V11" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5 7V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3 11H7" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17 11H21" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 13H14" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="col-span-12 selectricc-border-none">
                    <div id="buy"
                        class="tab-content bg-white border border-solid border-[#016450] border-opacity-25 rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px] active">
                        <form action="#">
                            <div class="advanced-searrch flex flex-wrap items-center -mb-[45px]">

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/location.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="location"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Location</label>
                                        <input id="location" type="text" placeholder="Choose location"
                                            class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full">
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/property.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="property"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                            Type</label>
                                        <select name="property" id="property"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">Duplex House</option>
                                            <option value="1">Duplex House 1</option>
                                            <option value="2">Duplex House 2</option>
                                            <option value="3">Duplex House 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="price"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Price
                                            Range</label>
                                        <select name="price" id="price"
                                            class="nice-select appearance-none bg-transparent text-body text-tiny font-light cursor-pointer">
                                            <option selected value="0">1500 USD</option>
                                            <option value="1">1600 USD</option>
                                            <option value="2">1700 USD</option>
                                            <option value="3">1800 USD</option>
                                        </select>
                                    </div>

                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/area.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>

                                    <div class="flex-1">
                                        <label for="property-size"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                            Size</label>
                                        <select name="property-size" id="property-size"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">2500 Sqft</option>
                                            <option value="1">2600 Sqft</option>
                                            <option value="2">2700 Sqft</option>
                                            <option value="3">2800 Sqft</option>
                                        </select>
                                    </div>
                                    <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
                                        <img src="assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto"
                                            width="40" height="40" alt="svg icon">
                                        <span class="hidden">Search Properties</span>
                                    </button>
                                </div>

                            </div>



                            <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/location.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="bedrooms10"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bedrooms</label>
                                        <select name="property" id="bedrooms10"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">Bedrooms</option>
                                            <option value="1">kitchen</option>
                                            <option value="2">dinning rooms</option>
                                            <option value="3">Duplex House 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/property.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="property9"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bathrooms</label>
                                        <select name="property" id="property9"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">Duplex House</option>
                                            <option value="1">Duplex House 1</option>
                                            <option value="2">Duplex House 2</option>
                                            <option value="3">Duplex House 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="garage"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Garage</label>
                                        <select name="garage" id="garage"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">2 Garage</option>
                                            <option value="1">2 Garage</option>
                                            <option value="2">3 Garage</option>
                                            <option value="3">4 Garage</option>
                                        </select>
                                    </div>

                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <button class="search-properties-btn">
                                        Search Properties
                                    </button>
                                </div>

                            </div>


                        </form>
                    </div>


                    <div id="sell"
                        class="tab-content bg-white border border-solid border-[#016450] border-opacity-25 rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]">
                        <form action="#">
                            <div class="advanced-searrch flex flex-wrap items-center -mb-[45px]">

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/location.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="location2"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Location</label>
                                        <input id="location2" type="text" placeholder="Choose location"
                                            class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full">
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/property.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="property2"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                            Type</label>
                                        <select name="property" id="property2"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">Apartments</option>
                                            <option value="1">Duplex House 1</option>
                                            <option value="2">Duplex House 2</option>
                                            <option value="3">Duplex House 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="price2"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Price
                                            Range</label>
                                        <select name="price" id="price2"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">100 USD</option>
                                            <option value="1">600 USD</option>
                                            <option value="2">700 USD</option>
                                            <option value="3">800 USD</option>
                                        </select>
                                    </div>

                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/area.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>

                                    <div class="flex-1">
                                        <label for="property-size2"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                            Size</label>
                                        <select name="property-size" id="property-size2"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">500 Sqft</option>
                                            <option value="1">600 Sqft</option>
                                            <option value="2">700 Sqft</option>
                                            <option value="3">800 Sqft</option>
                                        </select>
                                    </div>
                                    <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
                                        <img src="assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto"
                                            width="40" height="40" alt="svg icon">
                                        <span class="hidden">Search Properties</span>
                                    </button>
                                </div>

                            </div>


                            <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/location.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="bedrooms"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bedrooms</label>
                                        <select name="property" id="bedrooms"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">Bedrooms</option>
                                            <option value="1">kitchen</option>
                                            <option value="2">dinning rooms</option>
                                            <option value="3">Duplex House 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/property.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="property3"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bathrooms</label>
                                        <select name="property" id="property3"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">Duplex House</option>
                                            <option value="1">Duplex House 1</option>
                                            <option value="2">Duplex House 2</option>
                                            <option value="3">Duplex House 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="garage2"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Garage</label>
                                        <select name="garage" id="garage2"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">2 Garage</option>
                                            <option value="1">2 Garage</option>
                                            <option value="2">3 Garage</option>
                                            <option value="3">4 Garage</option>
                                        </select>
                                    </div>

                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <button class="search-properties-btn">
                                        Search Properties
                                    </button>
                                </div>

                            </div>


                        </form>
                    </div>

                    <div id="rent"
                        class="tab-content bg-white border border-solid border-[#016450] border-opacity-25 rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]">
                        <form action="#">
                            <div class="advanced-searrch flex flex-wrap items-center -mb-[45px]">

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/location.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="location7"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Location</label>
                                        <input id="location7" type="text" placeholder="Choose location"
                                            class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full">
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/property.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="property8"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                            Type</label>
                                        <select name="property" id="property8"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">Duplex House</option>
                                            <option value="1">Duplex House 1</option>
                                            <option value="2">Duplex House 2</option>
                                            <option value="3">Duplex House 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="price7"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Price
                                            Range</label>
                                        <select name="price" id="price7"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">1500 USD</option>
                                            <option value="1">1600 USD</option>
                                            <option value="2">1700 USD</option>
                                            <option value="3">1800 USD</option>
                                        </select>
                                    </div>

                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/area.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>

                                    <div class="flex-1">
                                        <label for="property-size9"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                            Size</label>
                                        <select name="property-size" id="property-size9"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">2500 Sqft</option>
                                            <option value="1">2600 Sqft</option>
                                            <option value="2">2700 Sqft</option>
                                            <option value="3">2800 Sqft</option>
                                        </select>
                                    </div>
                                    <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
                                        <img src="assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto"
                                            width="40" height="40" alt="svg icon">
                                        <span class="hidden">Search Properties</span>
                                    </button>
                                </div>

                            </div>



                            <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/location.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="bedrooms6"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bedrooms</label>
                                        <select name="property" id="bedrooms6"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">Bedrooms</option>
                                            <option value="1">kitchen</option>
                                            <option value="2">dinning rooms</option>
                                            <option value="3">Duplex House 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/property.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="property7"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bathrooms</label>
                                        <select name="property" id="property7"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">Duplex House</option>
                                            <option value="1">Duplex House 1</option>
                                            <option value="2">Duplex House 2</option>
                                            <option value="3">Duplex House 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="garage20"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Garage</label>
                                        <select name="garage" id="garage20"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">2 Garage</option>
                                            <option value="1">2 Garage</option>
                                            <option value="2">3 Garage</option>
                                            <option value="3">4 Garage</option>
                                        </select>
                                    </div>

                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <button class="search-properties-btn">
                                        Search Properties
                                    </button>
                                </div>

                            </div>


                        </form>
                    </div>
                    <div id="co-living"
                        class="tab-content bg-white border border-solid border-[#016450] border-opacity-25 rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]">
                        <form action="#">
                            <div class="advanced-searrch flex flex-wrap items-center -mb-[45px]">

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/location.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="location6"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Location</label>
                                        <input id="location6" type="text" placeholder="Choose location"
                                            class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full">
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/property.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="property6"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                            Type</label>
                                        <select name="property" id="property6"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">Apartments</option>
                                            <option value="1">Duplex House 1</option>
                                            <option value="2">Duplex House 2</option>
                                            <option value="3">Duplex House 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="price6"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Price
                                            Range</label>
                                        <select name="price" id="price6"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">5500 USD</option>
                                            <option value="1">5600 USD</option>
                                            <option value="2">5700 USD</option>
                                            <option value="3">5800 USD</option>
                                        </select>
                                    </div>

                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/area.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>

                                    <div class="flex-1">
                                        <label for="property-size4"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Property
                                            Size</label>
                                        <select name="property-size" id="property-size4"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">3500 Sqft</option>
                                            <option value="1">3600 Sqft</option>
                                            <option value="2">3700 Sqft</option>
                                            <option value="3">3800 Sqft</option>
                                        </select>
                                    </div>
                                    <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
                                        <img src="assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto"
                                            width="40" height="40" alt="svg icon">
                                        <span class="hidden">Search Properties</span>
                                    </button>
                                </div>

                            </div>



                            <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/location.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="bedrooms4"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bedrooms</label>
                                        <select name="property" id="bedrooms4"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">Bedrooms</option>
                                            <option value="1">kitchen</option>
                                            <option value="2">dinning rooms</option>
                                            <option value="3">Duplex House 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/property.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="property4"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Bathrooms</label>
                                        <select name="property" id="property4"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">Duplex House</option>
                                            <option value="1">Duplex House 1</option>
                                            <option value="2">Duplex House 2</option>
                                            <option value="3">Duplex House 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <div class="mr-4 self-start shrink-0">
                                        <img src="assets/images/icon/dollar-circle.svg" width="24" height="24"
                                            alt="svg icon">
                                    </div>
                                    <div class="flex-1">
                                        <label for="garage4"
                                            class="font-lora block capitalize text-primary text-[17px] xl:text-[24px] leading-none mb-1">Garage</label>
                                        <select name="garage" id="garage4"
                                            class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                            <option selected value="0">2 Garage</option>
                                            <option value="1">2 Garage</option>
                                            <option value="2">3 Garage</option>
                                            <option value="3">4 Garage</option>
                                        </select>
                                    </div>

                                </div>

                                <div
                                    class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                    <button class="search-properties-btn">
                                        Search Properties
                                    </button>
                                </div>

                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Addvanced search tab end -->

    <!-- Popular Properties start -->
    <section class="popular-properties py-[80px] lg:py-[120px]">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div
                        class="flex lg:justify-between lg:flex-row flex-col-reverse justify-start items-start lg:items-center mb-10">
                        <div class="flex flex-row items-center">
                            <ul class="grid-tab-menu flex flex-wrap">
                                <li data-grid="grid" class="mr-[10px] leading-none active flex">
                                    <button class="leading-none capitalize transition-all text-[16px] ease-out">
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_901_7333)">
                                                <path
                                                    d="M4.37474 0H0.874735C0.391831 0 0 0.391831 0 0.874735V4.37474C0 4.85764 0.391831 5.24947 0.874735 5.24947H4.37474C4.85764 5.24947 5.24947 4.85764 5.24947 4.37474V0.874735C5.25053 0.391831 4.85764 0 4.37474 0Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M4.37474 7.87474H0.874735C0.391831 7.87474 0 8.26657 0 8.75053V12.2505C0 12.7334 0.391831 13.1253 0.874735 13.1253H4.37474C4.85764 13.1253 5.24947 12.7334 5.24947 12.2505V8.75053C5.25053 8.26657 4.85764 7.87474 4.37474 7.87474Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M4.37474 15.7505H0.874735C0.391831 15.7505 0 16.1424 0 16.6253V20.1253C0 20.6082 0.391831 21 0.874735 21H4.37474C4.85764 21 5.24947 20.6082 5.24947 20.1253V16.6253C5.25053 16.1424 4.85764 15.7505 4.37474 15.7505Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M12.2497 0H8.74973C8.26683 0 7.875 0.391831 7.875 0.874735V4.37474C7.875 4.85764 8.26683 5.24947 8.74973 5.24947H12.2497C12.7326 5.24947 13.1245 4.85764 13.1245 4.37474V0.874735C13.1245 0.391831 12.7326 0 12.2497 0Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M12.2497 7.87474H8.74973C8.26683 7.87474 7.875 8.26657 7.875 8.74948V12.2495C7.875 12.7324 8.26683 13.1242 8.74973 13.1242H12.2497C12.7326 13.1242 13.1245 12.7324 13.1245 12.2495V8.75054C13.1245 8.26657 12.7326 7.87474 12.2497 7.87474Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M12.2497 15.7505H8.74973C8.26683 15.7505 7.875 16.1424 7.875 16.6253V20.1253C7.875 20.6082 8.26683 21 8.74973 21H12.2497C12.7326 21 13.1245 20.6082 13.1245 20.1253V16.6253C13.1245 16.1424 12.7326 15.7505 12.2497 15.7505Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M20.1247 0H16.6247C16.1418 0 15.75 0.391831 15.75 0.874735V4.37474C15.75 4.85764 16.1418 5.24947 16.6247 5.24947H20.1247C20.6076 5.24947 20.9995 4.85764 20.9995 4.37474V0.874735C20.9995 0.391831 20.6076 0 20.1247 0Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M20.1247 7.87474H16.6247C16.1418 7.87474 15.75 8.26657 15.75 8.74948V12.2495C15.75 12.7324 16.1418 13.1242 16.6247 13.1242H20.1247C20.6076 13.1242 20.9995 12.7324 20.9995 12.2495V8.75054C20.9995 8.26657 20.6076 7.87474 20.1247 7.87474Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M20.1247 15.7505H16.6247C16.1418 15.7505 15.75 16.1424 15.75 16.6253V20.1253C15.75 20.6082 16.1418 21 16.6247 21H20.1247C20.6076 21 20.9995 20.6082 20.9995 20.1253V16.6253C20.9995 16.1424 20.6076 15.7505 20.1247 15.7505Z"
                                                    fill="currentcolor" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_901_7333">
                                                    <rect width="21" height="21" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </li>
                                <li data-grid="list" class="leading-none flex">
                                    <button
                                        class="leading-none capitalize text-primary hover:text-secondary transition-all text-[16px] ease-out">
                                        <svg width="25" height="19" viewBox="0 0 25 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.7525 18.6641H7.03597C6.34482 18.6641 5.78906 18.1017 5.78906 17.4052C5.78906 16.71 6.34611 16.1462 7.03597 16.1462H23.7525C24.4411 16.1462 24.9994 16.71 24.9994 17.4052C24.9994 18.103 24.4411 18.6641 23.7525 18.6641Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M23.7525 10.7602H7.03597C6.34482 10.7602 5.78906 10.1965 5.78906 9.5013C5.78906 8.80608 6.34611 8.24236 7.03597 8.24236H23.7525C24.4411 8.24236 24.9994 8.80608 24.9994 9.5013C24.9994 10.1965 24.4411 10.7602 23.7525 10.7602Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M23.7525 2.85378H7.03597C6.34482 2.85378 5.78906 2.29005 5.78906 1.59483C5.78906 0.899617 6.34611 0.335892 7.03597 0.335892H23.7525C24.4411 0.335892 24.9994 0.899617 24.9994 1.59483C24.9994 2.29005 24.4411 2.85378 23.7525 2.85378Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M3.35001 1.69248C3.35001 2.62594 2.60084 3.38235 1.67629 3.38235C0.749175 3.38235 0 2.62594 0 1.69248C0 0.759011 0.749175 0 1.67629 0C2.60084 0 3.35001 0.759011 3.35001 1.69248Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M3.35001 9.5013C3.35001 10.4348 2.60084 11.1912 1.67629 11.1912C0.750464 11.1912 0 10.4348 0 9.5013C0 8.56783 0.749175 7.80882 1.67629 7.80882C2.60084 7.80752 3.35001 8.56653 3.35001 9.5013Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M3.35001 17.3088C3.35001 18.2423 2.60084 18.9987 1.67629 18.9987C0.750464 18.9987 0 18.2423 0 17.3088C0 16.3754 0.749175 15.6163 1.67629 15.6163C2.60084 15.6163 3.35001 16.3754 3.35001 17.3088Z"
                                                fill="currentcolor" />
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                            <div class="ml-3">
                                <span class="text-primary">Sort by:</span>
                                <select id="sort" class="sort">
                                    <option value="latest">Latest</option>
                                    <option value="oldest">Oldest</option>
                                    <option value="price_high">Price high to low</option>
                                    <option value="price_low">Price low to high</option>
                                </select>
                            </div>
                        </div>
                        <ul id="categories" class="all-properties flex flex-wrap lg:pt-[10px]">
                            <li value="all" class="mr-[30px] md:mr-[45px] mb-4 lg:mb-0 leading-none active">
                                <button
                                    class="leading-none capitalize text-primary hover:text-secondary transition-all text-[16px] ease-out">All
                                    Properties</button>
                            </li>
                            @foreach ($categories as $category)
                                <li value="{{ $category->id }}" class="mr-[30px] md:mr-[45px] mb-4 lg:mb-0 leading-none">
                                    <button
                                        class="leading-none capitalize text-primary hover:text-secondary transition-all text-[16px] ease-out">{{ $category->name }}</button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="grid grid-tab-content active">
                        <div class="col-span-12">
                            <div class="all-properties active">
                                <div id="properties" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">
                                    @include('pages.pagination')
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 mt-[50px] gap-[30px]">
                            <div class="col-span-12">
                                {{ $properties->appends(['sort' => $sort])->links('vendor.pagination.custom') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Popular Properties end -->

    <script>
        $(document).ready(function() {
            $('#sort').on('change', function() {
                fetchProperties(1);
            });

            $('#categories li').on('click', function() {
                fetchProperties(1);
            });

            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetchProperties(page);
            });

            function fetchProperties(page) {
                var sort = $('#sort').val();
                var category = $('#categories .active').val();
                if (category === 'all') {
                    category = '';
                }
                $.ajax({
                    url: '/sort-properties',
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        page: page,
                        sort: sort,
                        category: category
                    },
                    success: function(data) {
                        $('#properties').html(data.view);
                        $('.pagination').html(data.pagination);
                    },

                });

            }
        });
    </script>
@endsection
