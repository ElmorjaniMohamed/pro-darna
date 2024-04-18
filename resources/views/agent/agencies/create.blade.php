<x-layout.default>

    <div class="bg-white dark:bg-gray-800 relative  shadow-md sm:rounded-lg overflow-hidden">
        <div class="relative p-4 bg-white rounded-lg shadow  dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add Agency</h3>
            </div>
            <!-- Modal body -->
            <form class="space-y-5" method="POST" action="{{ route('agencies.store') }}" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="gridName">Name</label>
                        <input id="gridName" name="name" type="text" placeholder="Enter Name"
                            class="form-input" />
                        @error('name')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="gridEmail">Email</label>
                        <input id="gridEmail" name="email" type="email" placeholder="Enter Email"
                            class="form-input" />
                        @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="gridDescription">Description</label>
                    <textarea id="mde-autosave" name="description" class="form-input"></textarea>
                    @error('description')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="gridAddress">Address</label>
                    <input id="gridAddress" name="address" type="text" placeholder="Enter Address"
                        class="form-input" />
                    @error('address')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <div>
                        <label for="gridPhone">Phone</label>
                        <input id="gridPhone" name="phone" type="text" placeholder="Enter Phone"
                            class="form-input" />
                        @error('phone')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="gridZipCode">Zip Code</label>
                        <input id="gridZipCode" name="zipCode" type="text" placeholder="Enter Zip Code"
                            class="form-input" />
                        @error('zipCode')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="gridNumberOfAgent">Number of Agents</label>
                        <input id="gridNumberOfAgent" name="numbre_of_agent" type="number"
                            placeholder="Enter Number of Agents" class="form-input" />
                        @error('numbre_of_agent')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="gridWebsite">Website</label>
                        <input id="gridWebsite" name="webSite" type="text" placeholder="Enter Website URL"
                            class="form-input" />
                        @error('webSite')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="gridImage">Image</label>
                    <input id="gridImage" name="image" type="file" class="form-input py-0" />
                    @error('image')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary !mt-6">Create</button>
            </form>
        </div>
    </div>

    <!-- script -->
    <script>
        const easymde1 = new EasyMDE({
            element: document.getElementById('mde-autosave'),
            autosave: {
                enabled: true,
                delay: 1000,
                uniqueId: 'mde-autosave-demo'
            },
            initialValue: `Enter Description`,
        });
    </script>
</x-layout.default>
