<x-layout.default>
    <x-slot name="title">Edit Agency</x-slot>

    <div class="bg-white dark:bg-gray-800 relative  shadow-md sm:rounded-lg overflow-hidden">
        <div class="relative p-4 bg-white rounded-lg shadow  dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Edit Agency</h3>
            </div>
            <!-- Modal body -->
            <form class="space-y-5" method="POST" action="{{ route('agencies.update', $agency->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="gridName">Name</label>
                        <input id="gridName" name="name" type="text" value="{{ $agency->name }}"
                            class="form-input" />
                        <x-common.error-message-input name="name" />
                    </div>
                    <div>
                        <label for="gridEmail">Email</label>
                        <input id="gridEmail" name="email" type="email" value="{{ $agency->email }}"
                            class="form-input" />
                        <x-common.error-message-input name="email" />
                    </div>
                </div>
                <div>
                    <label for="gridDescription">Description</label>
                    <textarea id="mde-autosave" name="description" class="form-input">{{ $agency->description }}</textarea>
                    <x-common.error-message-input name="description" />
                </div>
                <div>
                    <label for="gridAddress">Address</label>
                    <input id="gridAddress" name="address" type="text" value="{{ $agency->address }}"
                        class="form-input" />
                    <x-common.error-message-input name="address" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div>
                        <label for="gridPhone">Phone</label>
                        <input id="gridPhone" name="phone" type="text" value="{{ $agency->phone }}"
                            class="form-input" />
                        <x-common.error-message-input name="phone" />
                    </div>
                    <div>
                        <label for="gridZipCode">Zip Code</label>
                        <input id="gridZipCode" name="zipCode" type="text" value="{{ $agency->zipCode }}"
                            class="form-input" />
                        <x-common.error-message-input name="zipCode" />
                    </div>
                    <div>
                        <label for="gridNumberOfAgent">Number of Agents</label>
                        <input id="gridNumberOfAgent" name="number_of_agent" type="number"
                            value="{{ $agency->number_of_agent }}" class="form-input" />
                        <x-common.error-message-input name="number_of_agent" />
                    </div>
                    <div>
                        <label for="gridWebsite">Website</label>
                        <input id="gridWebsite" name="webSite" type="text" value="{{ $agency->webSite }}"
                            class="form-input" />
                        <x-common.error-message-input name="webSite" />
                    </div>
                </div>
                <div>
                    <label for="gridImage">Image</label>
                    @if ($agency->media->isNotEmpty())
                    @endif
                    <input id="gridImage" name="image" type="file" class="form-input py-0" />

                    <div class="px-2 py-4 flex justify-center items-center">
                        <img src="{{ asset('storage/' . $agency->media->first()->file_path) }}" alt="Agency Image"
                            class="w-80 h-44 rounded-md">
                    </div>
                    <x-common.error-message-input name="image" />
                </div>
                <button type="submit" class="btn btn-primary !mt-6">Update</button>
            </form>
        </div>
    </div>

</x-layout.default>
