<?php

namespace App\Http\Controllers;

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
        return view('propertyTypes.index', compact('propertyTypes'));
    }

    public function store(StorePropertyTypeRequest $request)
    {
        $this->propertyTypeRepository->create($request->validated());
        return redirect()->route('propertyTypes.index');
    }

    public function update(UpdatePropertyTypeRequest $request, int $id)
    {
        $this->propertyTypeRepository->update($request->validated(), $id);
        return redirect()->route('propertyTypes.index');
    }

    public function destroy(int $id)
    {
        $this->propertyTypeRepository->delete($id);
        return redirect()->route('propertyTypes.index');
    }
}