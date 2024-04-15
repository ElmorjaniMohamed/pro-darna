<?php

namespace App\Http\Controllers;

use App\Repositories\AgencyRepositoryInterface;
use App\Http\Requests\StoreAgencyRequest;
use App\Http\Requests\UpdateAgencyRequest;

class AgencyController extends Controller
{
    private $agencyRepository;

    public function __construct(AgencyRepositoryInterface $agencyRepository)
    {
        $this->agencyRepository = $agencyRepository;
    }

    public function index()
    {
        $agencies = $this->agencyRepository->all();
        return view('agencies.index', compact('agencies'));
    }

    public function store(StoreAgencyRequest $request)
    {
        $this->agencyRepository->create($request->validated());
        return redirect()->route('agencies.index');
    }

    public function update(UpdateAgencyRequest $request, int $id)
    {
        $this->agencyRepository->update($request->validated(), $id);
        return redirect()->route('agencies.index');
    }

    public function destroy(int $id)
    {
        $this->agencyRepository->delete($id);
        return redirect()->route('agencies.index');
    }
}