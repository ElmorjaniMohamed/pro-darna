<x-layout.default>

    <div class="bg-white dark:bg-gray-800 relative  shadow-md sm:rounded-lg overflow-hidden">
        <div class="relative p-4 bg-white rounded-lg shadow  dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Edit Property</h3>
            </div>
            <!-- Modal body -->
            <form class="space-y-5" method="POST" action="{{ route('properties.update', $property->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="title">Title</label>
                        <input id="title" name="title" type="text" placeholder="Enter Title" class="form-input"
                            value="{{ $property->title }}" required />
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input id="price" name="price" type="number" placeholder="Enter Price" class="form-input"
                            value="{{ $property->price }}" required />
                    </div>
                </div>
                <div>
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="Enter Description" class="form-input" required>{{ $property->description }}</textarea>
                </div>
                <div>
                    <label for="address">Address</label>
                    <input id="address" name="address" type="text" placeholder="Enter Address" class="form-input"
                        value="{{ $property->address }}" required />
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="zipCode">Zip Code</label>
                        <input id="zipCode" name="zipCode" type="number" placeholder="Enter Zip Code"
                            class="form-input" value="{{ $property->zipCode }}" required />
                    </div>
                    <div>
                        <label for="status">Status</label>
                        <select id="status" name="status" class="form-select text-white-dark" required>
                            <option value="high price" {{ $property->status == 'high price' ? 'selected' : '' }}>High
                                Price</option>
                            <option value="low price" {{ $property->status == 'low price' ? 'selected' : '' }}>Low Price
                            </option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="area">Area</label>
                        <input id="area" name="area" type="text" placeholder="Enter Area" class="form-input"
                            value="{{ $property->area }}" required />
                    </div>
                    <div>
                        <label for="nbr_of_bedroom">Number of Bedrooms</label>
                        <input id="nbr_of_bedroom" name="nbr_of_bedroom" type="number"
                            placeholder="Enter Number of Bedrooms" class="form-input"
                            value="{{ $property->nbr_of_bedroom }}" required />
                    </div>
                    <div>
                        <label for="nbr_of_bathroom">Number of Bathrooms</label>
                        <input id="nbr_of_bathroom" name="nbr_of_bathroom" type="number"
                            placeholder="Enter Number of Bathrooms" class="form-input"
                            value="{{ $property->nbr_of_bathroom }}" required />
                    </div>
                    <div>
                        <label for="nbr_of_garage">Number of Garages</label>
                        <input id="nbr_of_garage" name="nbr_of_garage" type="number"
                            placeholder="Enter Number of Garages" class="form-input"
                            value="{{ $property->nbr_of_garage }}" required />
                    </div>
                </div>
                <div>
                    <label for="agency_id">Agency</label>
                    <select id="agency_id" name="agency_id" class="form-select selectize" required>
                        <option value="">Choose Agency</option>
                        @foreach ($agencies as $agency)
                            <option value="{{ $agency->id }}"
                                {{ $property->agency_id == $agency->id ? 'selected' : '' }}>{{ $agency->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="property_type_id">Property Type</label>
                    <select id="property_type_id" name="property_type_id" class="form-select" required>
                        <option value="">Choose Property Type</option>
                        @foreach ($propertyTypes as $propertyType)
                            <option value="{{ $propertyType->id }}"
                                {{ $property->property_type_id == $propertyType->id ? 'selected' : '' }}>
                                {{ $propertyType->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="category_id">Category</label>
                    <select id="category_id" name="category_id" class="form-select" required>
                        <option value="">Choose Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $property->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="relative">
                    <label for="property_amenities">Property Amenities</label>
                    <div class="relative inline-block w-full text-gray-700">
                        <div class="relative">
                            <button id="dropdownBgHoverButton" data-dropdown-toggle="dropdownBgHover"
                                class="text-white w-full bg-primary hover:bg-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-between dark:bg-primary dark:hover:bg-primary"
                                type="button">Select Amenities <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownBgHover"
                                class="z-10 hidden w-full bg-white rounded-lg shadow max-h-40 overflow-y-auto dark:bg-gray-700">
                                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownBgHoverButton">
                                    @foreach ($propertyAmenities as $amenity)
                                        <li>
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input type="checkbox" id="amenity_{{ $amenity->id }}"
                                                    name="property_amenities[]" value="{{ $amenity->id }}"
                                                    class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary dark:focus:ring-primary dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                                    {{ in_array($amenity->id, $property->amenities->pluck('id')->toArray()) ? 'checked' : '' }}>
                                                <label for="amenity_{{ $amenity->id }}"
                                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $amenity->name }}</label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label for="image" class="form-label">Images</label>
                    <input type="file" name="images[]" class="form-input py-0" multiple>
                </div>
                <!-- Existing Images -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($property->media as $image)
                        <div class="relative" id="image-{{ $image->id }}">
                            <img src="{{ asset('storage/' . $image->file_path) }}" alt="Property Image"
                                class="w-full h-56 rounded-lg">
                            <button type="button"
                                class="absolute top-2 right-2 bg-red-500 text-white rounded-full hover:bg-red-600 p-2 px-3 focus:outline-none focus:bg-red-600"
                                onclick="removeImage({{ $property->id }}, {{ $image->id }})">
                                <i class="fa-solid fa-xmark" style="color: #ffffff;"></i>
                            </button>
                        </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary !mt-6">Submit</button>
            </form>
        </div>
    </div>

    <script>
        function removeImage(propertyId, imageId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/property/' + propertyId + '/media/' + imageId,
                        type: 'DELETE',
                        data: {
                           _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
            
                            $('#image-' + imageId).remove();
                        }
                    });
                }
            })
        }
    </script>

</x-layout.default>
