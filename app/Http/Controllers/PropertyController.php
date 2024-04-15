<?php

namespace App\Http\Controllers;

use App\Repositories\PropertyRepositoryInterface;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;

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
        return view('properties.index', compact('properties'));
    }

    public function store(StorePropertyRequest $request)
    {
        $this->propertyRepository->create($request->validated());
        return redirect()->route('properties.index');
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