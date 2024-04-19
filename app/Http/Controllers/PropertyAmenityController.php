<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyAmenityRequest;
use App\Http\Requests\UpdatePropertyAmenityRequest;
use App\Repositories\PropertyAmenityRepositoryInterface;
use App\Models\PropertyAmenity;

class PropertyAmenityController extends Controller
{
    private $propertyAmenityRepository;

    public function __construct(PropertyAmenityRepositoryInterface $propertyAmenityRepository)
    {
        $this->propertyAmenityRepository = $propertyAmenityRepository;
    }

    public function index()
    {
        $propertyAmenities = $this->propertyAmenityRepository->all();
        return view('admin.propertyAmenities.index', compact('propertyAmenities'));
    }

    public function create()
    {
        return view('admin.propertyAmenities.create');
    }

    public function store(StorePropertyAmenityRequest $request)
    {
        $this->propertyAmenityRepository->create($request->validated());
        return redirect()->route('propertyAmenities.index');
    }

    public function edit(PropertyAmenity $propertyAmenity)
    {
        return view('admin.propertyAmenities.edit', compact('propertyAmenity'));
    }

    public function update(UpdatePropertyAmenityRequest $request, int $id)
    {
        $this->propertyAmenityRepository->update($request->validated(), $id);
        return redirect()->route('propertyAmenities.index');
    }

    public function destroy($id)
    {
        try {
            $this->propertyAmenityRepository->delete($id);
            return response()->json(['status' => 'success']);
            
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to delete category: ' . $e->getMessage()], 500);
        }
    }
}