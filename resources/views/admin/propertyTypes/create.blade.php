<x-layout.default>
    <div class="bg-white dark:bg-gray-800 relative  shadow-md sm:rounded-lg overflow-hidden">
        <div class="relative p-4 bg-white rounded-lg shadow  dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div
                class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add Property Type</h3>
            </div>
            <!-- Modal body -->
            <form action="{{ route('propertyTypes.store') }}" method="POST" >
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="title"
                            class="form-input"
                            placeholder="Name" required="">
                        <x-common.error-message-input name="name" />
                    </div>
                </div>
                <button type="submit" class="btn btn-primary !mt-6">
                    Create
                </button>
            </form>
        </div>
    </div>
</x-layout.default>
