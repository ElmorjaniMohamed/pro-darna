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
use App\Http\Requests\MessageRequest;
use App\Mail\MessageReceived;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;


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
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('images/properties', $filename, 'public');

                $property->media()->create([
                    'file_name' => $filename,
                    'file_type' => $image->getClientMimeType(),
                    'file_path' => $path,
                ]);
            }
        }

        return redirect()->route('properties.index')->with('success', 'Property created successfully');
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

        return redirect()->route('properties.index')->with('success', 'Property updated successfully');
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
 
        if ($property->media->contains($media)) {

            $media->delete();
            
            Storage::delete($media->file_path);
        }

        return response()->json(['message' => 'Image removed successfully']);
    }

    public function message(MessageRequest $request, Property $property)
    {
        $validated = $request->validated();

        // Create a new message and associate it with the property
        $message = new Message($validated);
        $message->property()->associate($property);
        $message->save();

        // Send an email to the agent with the user's contact information and message
        Mail::to($property->agent->email)->send(new MessageReceived($message));

        return back()->with('success', 'Your message has been sent successfully');
    }
}