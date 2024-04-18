<x-layout.default>
    <form class="space-y-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label for="gridEmail">Email</label>
                <input id="gridEmail" type="email" placeholder="Enter Email" class="form-input" />
            </div>
            <div>
                <label for="gridPassword">Password</label>
                <input id="gridPassword" type="Password" placeholder="Enter Password" class="form-input" />
            </div>
        </div>
        <div>
            <label for="gridAddress1">Address</label>
            <input id="gridAddress1" type="text" placeholder="Enter Address" value="1234 Main St" class="form-input" />
        </div>
        <div>
            <label for="gridAddress2">Address2</label>
            <input id="gridAddress2" type="text" placeholder="Enter Address2" value="Apartment, studio, or floor" class="form-input" />
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="md:col-span-2">
                <label for="gridCity">City</label>
                <input id="gridCity" type="text" placeholder="Enter City" class="form-input" />
            </div>
            <div>
                <label for="gridState">State</label>
                <select id="gridState" class="form-select text-white-dark">
                    <option>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div>
                <label for="gridZip">Zip</label>
                <input id="gridZip" type="text" placeholder="Enter Zip" class="form-input" />
            </div>
        </div>
        <div>
            <label class="flex items-center mt-1 cursor-pointer">
                <input type="checkbox" class="form-checkbox" />
                <span class="text-white-dark"">Check me out</span>
            </label>
        </div>
        <button type="submit" class="btn btn-primary !mt-6">Submit</button>
    </form>
</x-layout.default>
