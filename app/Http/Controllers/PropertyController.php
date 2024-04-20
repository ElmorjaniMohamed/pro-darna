<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Repositories\PropertyRepositoryInterface;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Models\Agency;
use App\Models\PropertyType;
use App\Models\PropertyAmenity;
use App\Models\Category;

class PropertyController extends Controller
{
    private $propertyRepository;

    public function __construct(PropertyRepositoryInterface $propertyRepository)
    {
        $this->propertyRepository = $propertyRepository;
    }

    public function index()
    {
        $properties = $this->propertyRepository->all();
        $propertyTypes = PropertyType::all();
        $categories = Category::all();
        return view('agent.properties.index', compact('properties', 'propertyTypes', 'categories'));
    }

    public function create()
    {
        $agencies = Agency::all();
        $propertyTypes = PropertyType::all();
        $propertyAmenities = PropertyAmenity::all();
        $categories = Category::all();
        return view('agent.properties.create', compact('agencies', 'propertyTypes', 'propertyAmenities', 'categories'));
    }

    public function store(StorePropertyRequest $request)
    {
        $property = $this->propertyRepository->create($request->validated());

        if ($request->has('property_amenities')) {
            foreach ($request->property_amenities as $amenity) {
                $property->amenities()->attach($amenity);
            }
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('images/properties', $filename, 'public');

                // Create a new media record for each image
                $property->media()->create([
                    'file_name' => $filename,
                    'file_type' => $image->getClientMimeType(),
                    'file_path' => $path,
                ]);
            }
        }

        return redirect()->route('properties.index');
    }

    public function edit(Property $property)
    {
        return view('agent.properties.edit', compact('property'));
    }

    public function update(UpdatePropertyRequest $request, int $id)
    {
        $this->propertyRepository->update($request->validated(), $id);
        return redirect()->route('properties.index');
    }

    public function destroy(int $id)
    {
        $this->propertyRepository->delete($id);
        return redirect()->route('properties.index');
    }
}