<x-common.success-message />
<x-layout.default>
    <!-- Start block -->
    <section class="bg-none p-3 sm:p-5 antialiased">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-900 relative shadow-md sm:rounded-lg overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                    placeholder="Search" required="">
                            </div>
                        </form>
                    </div>
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <a href="{{ route('categories.create') }}"
                            class="flex items-center justify-center text-white bg-primary hover:bg-primary focus:ring-4  font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary dark:hover:bg-primary">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add Category
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table id="categoryTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-4">name</th>
                                <th scope="col" class="px-4 py-3">Create at</th>
                                <th scope="col" class="px-4 py-3">Update at</th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="border-b dark:border-gray-700" id="{{ 'category_' . $category->id }}">
                                    <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $category->name }}
                                    </td>
                                    </td>
                                    <td class="px-4 py-3 max-w-[12rem] truncate">{{ $category->created_at }}
                                    </td>
                                    <td class="px-4 py-3">{{ $category->updated_at }}</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <ul class="flex items-center justify-center gap-2">
                                            <li>
                                                <a href="{{ route('categories.edit', $category->id) }}"
                                                    x-tooltip="Edit">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        class="w-4.5 h-4.5 text-success">
                                                        <path
                                                            d="M15.2869 3.15178L14.3601 4.07866L5.83882 12.5999L5.83881 12.5999C5.26166 13.1771 4.97308 13.4656 4.7249 13.7838C4.43213 14.1592 4.18114 14.5653 3.97634 14.995C3.80273 15.3593 3.67368 15.7465 3.41556 16.5208L2.32181 19.8021L2.05445 20.6042C1.92743 20.9852 2.0266 21.4053 2.31063 21.6894C2.59466 21.9734 3.01478 22.0726 3.39584 21.9456L4.19792 21.6782L7.47918 20.5844L7.47919 20.5844C8.25353 20.3263 8.6407 20.1973 9.00498 20.0237C9.43469 19.8189 9.84082 19.5679 10.2162 19.2751C10.5344 19.0269 10.8229 18.7383 11.4001 18.1612L11.4001 18.1612L19.9213 9.63993L20.8482 8.71306C22.3839 7.17735 22.3839 4.68748 20.8482 3.15178C19.3125 1.61607 16.8226 1.61607 15.2869 3.15178Z"
                                                            stroke="currentColor" stroke-width="1.5" />
                                                        <path opacity="0.5"
                                                            d="M14.36 4.07812C14.36 4.07812 14.4759 6.04774 16.2138 7.78564C17.9517 9.52354 19.9213 9.6394 19.9213 9.6394M4.19789 21.6777L2.32178 19.8015"
                                                            stroke="currentColor" stroke-width="1.5" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <button type="button" data-id="{{ $category->id }}" class="deleteButton">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        class="w-5 h-5 text-danger">
                                                        <path d="M20.5001 6H3.5" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round" />
                                                        <path
                                                            d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                        <path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round" />
                                                        <path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round" />
                                                        <path opacity="0.5"
                                                            d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                            stroke="currentColor" stroke-width="1.5" />
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div id="placeResult" class="hidden">
                        <div class="flex justify-center">
                            <p class="text-center text-xl text-slate-400 dark:text-slate-200 p-10">
                                No result found for: <b><span id="searchStringPlaceholder"></span></b>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Pagination links -->
                <div id="paginationContainer" class="mt-4 px-3 pb-3">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->

    <script>
        $(document).ready(function() {
            $("#categoryTable").on("click", ".deleteButton", function() {
                const categoryId = $(this).data("id");

                if (categoryId) {
                    const csrfToken = $('meta[name="csrf-token"]').attr('content');

                    Swal.fire({
                        title: "Are you sure?",
                        text: "Once deleted, you won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: `/admin/categories/${categoryId}`,
                                type: "DELETE",
                                headers: {
                                    'X-CSRF-TOKEN': csrfToken
                                },
                                success: function(response) {
                                    if (response.status === "success") {
                                        // Category deleted successfully
                                        Swal.fire({
                                            title: "Deleted!",
                                            text: "Category has been deleted.",
                                            icon: "success",
                                            timer: 1500,
                                        });

                                        // Optionally, you can also remove the category from the UI
                                        $(`#category_${categoryId}`).remove();
                                    } else {
                                        // Error deleting category
                                        Swal.fire({
                                            title: "Failed!",
                                            text: "Unable to delete category.",
                                            icon: "error",
                                        });
                                    }
                                },
                                error: function(error) {
                                    // Error handling AJAX request
                                    Swal.fire({
                                        title: "Failed!",
                                        text: "Unable to delete category.",
                                        icon: "error",
                                    });
                                },
                            });
                        }
                    });
                }
            });
        });
    </script>
</x-layout.default>
