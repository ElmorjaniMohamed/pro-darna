<?php

namespace App\Http\Controllers;

use App\Models\Agency;
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
        $agencies = Agency::paginate(5);
        return view('agent.agencies.index', compact('agencies'));
    }

    public function create()
    {
        return view('agent.agencies.create');
    }

    public function store(StoreAgencyRequest $request)
    {
        $this->agencyRepository->create($request->validated());
        return redirect()->route('agencies.index');
    }

    public function edit()
    {
        return view('agent.agencies.edit');
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