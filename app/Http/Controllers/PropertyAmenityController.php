<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyAmenityRequest;
use App\Http\Requests\UpdatePropertyAmenityRequest;
use App\Repositories\PropertyAmenityRepositoryInterface;

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
        return view('propertyAmenities.index', compact('propertyAmenities'));
    }

    public function store(StorePropertyAmenityRequest $request)
    {
        $this->propertyAmenityRepository->create($request->validated());
        return redirect()->route('propertyAmenities.index');
    }

    public function update(UpdatePropertyAmenityRequest $request, int $id)
    {
        $this->propertyAmenityRepository->update($request->validated(), $id);
        return redirect()->route('propertyAmenities.index');
    }

    public function destroy(int $id)
    {
        $this->propertyAmenityRepository->delete($id);
        return redirect()->route('propertyAmenities.index');
    }
}