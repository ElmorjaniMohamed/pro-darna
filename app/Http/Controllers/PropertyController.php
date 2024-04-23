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
use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    private $propertyRepository;

    public function __construct(PropertyRepositoryInterface $propertyRepository)
    {
        $this->propertyRepository = $propertyRepository;
    }

    public function index()
    {
        $agentId = auth()->user()->id;

        $properties = Property::where('user_id', $agentId)->get();

        return view('properties.index', compact('properties'));
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
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('images/properties', $filename, 'public');

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
        $agencies = Agency::all();
        $propertyTypes = PropertyType::all();
        $propertyAmenities = PropertyAmenity::all();
        $categories = Category::all();
        return view('agent.properties.edit', compact(
            'property',
            'agencies',
            'propertyTypes',
            'propertyAmenities',
            'categories'
        )
        );
    }

    public function update(UpdatePropertyRequest $request, int $id)
    {
        $this->propertyRepository->update($request->validated(), $id);

        $property = Property::find($id);

        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('images/properties', $filename, 'public');

                $property->media()->create([
                    'file_name' => $filename,
                    'file_type' => $image->getClientMimeType(),
                    'file_path' => $path,
                ]);
            }
        }

        return redirect()->route('properties.index');
    }

    public function destroy($id)
    {
        try {
            $property = Property::find($id);

            foreach ($property->media as $media) {
                Storage::delete($media->file_path);
                $media->delete();
            }

            $property->delete();

            return response()->json(['status' => 'success']);

        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to delete property: ' . $e->getMessage()], 500);
        }
    }

    public function removeImage(Property $property, Media $media)
    {
        // Check if the media belongs to the property
        if ($property->media->contains($media)) {
            // Delete the media
            $media->delete();

            // Delete the image file
            Storage::delete($media->file_path);
        }

        return response()->json(['message' => 'Image removed successfully']);
    }
}