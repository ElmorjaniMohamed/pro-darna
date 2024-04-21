<x-layout.default>
    <!-- Start coding here -->
<div class="bg-none relative shadow-md sm:rounded-lg overflow-hidden">
    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-900 sm:p-5">
        <!-- Modal header -->
        <div
            class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Update Type</h3>
        </div>
        <!-- Modal body -->
        <form action="{{ route('propertyTypes.update', $propertyType->id) }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                <div>
                    <label for="title"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" name="name" id="name" value="{{$propertyType->name}}"
                        class="form-input"
                        placeholder="Name" required="">
                    <x-common.error-message-input name="name" />
                </div>
            </div>
            <button type="submit" class="btn btn-primary !mt-6">
                Update
            </button>
        </form>
    </div>
</div>
</x-layout.default>