<?php

namespace App\Http\Controllers;

use App\Repositories\PropretyRepositoryInterface;
use App\Http\Requests\StorePropretyRequest;
use App\Http\Requests\UpdatePropretyRequest;

class PropretyController extends Controller
{
    private $propretyRepository;

    public function __construct(PropretyRepositoryInterface $propretyRepository)
    {
        $this->propretyRepository = $propretyRepository;
    }

    public function index()
    {
        $propreties = $this->propretyRepository->all();
        return view('propreties.index', compact('propreties'));
    }

    public function store(StorePropretyRequest $request)
    {
        $this->propretyRepository->create($request->validated());
        return redirect()->route('propreties.index');
    }

    public function update(UpdatePropretyRequest $request, int $id)
    {
        $this->propretyRepository->update($request->validated(), $id);
        return redirect()->route('propreties.index');
    }

    public function destroy(int $id)
    {
        $this->propretyRepository->delete($id);
        return redirect()->route('propreties.index');
    }
}