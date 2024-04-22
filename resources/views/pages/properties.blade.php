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
                            class="font-lora text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                            Properties</h1>
                        <p class="text-base mt-5 max-w-[500px] mx-auto text-center">Huge number of propreties availabe here
                            for buy and sell also you can find here co-living property as you like</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->
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
                            <div class="all-properties properties-tab-content active">
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
                    }
                });

            }
        });
    </script>
@endsection
