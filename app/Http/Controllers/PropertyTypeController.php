<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use App\Repositories\PropertyTypeRepositoryInterface;
use App\Http\Requests\StorePropertyTypeRequest;
use App\Http\Requests\UpdatePropertyTypeRequest;

class PropertyTypeController extends Controller
{
    private $propertyTypeRepository;

    public function __construct(PropertyTypeRepositoryInterface $propertyTypeRepository)
    {
        $this->propertyTypeRepository = $propertyTypeRepository;
    }

    public function index()
    {
        $propertyTypes = $this->propertyTypeRepository->all();
        return view('admin.propertyTypes.index', compact('propertyTypes'));
    }

    public function create()
    {
        return view('admin.propertyTypes.create');
    }

    public function store(StorePropertyTypeRequest $request)
    {
        $this->propertyTypeRepository->create($request->validated());
        return redirect()->route('propertyTypes.index')->with('success', 'Property type created successfully');
    }

    public function edit(PropertyType $propertyType)
    {
        return view('admin.propertyTypes.edit', compact('propertyType'));
    }

    public function update(UpdatePropertyTypeRequest $request, PropertyType $propertyType)
    {
        $this->propertyTypeRepository->update($request->validated(), $propertyType->id);
        return redirect()->route('propertyTypes.index')->with('success', 'Property type updated successfully');
    }

    public function destroy($id)
    {
        try {
            $this->propertyTypeRepository->delete($id);
            return response()->json(['status' => 'success']);
            
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to delete category: ' . $e->getMessage()], 500);
        }
    }
}