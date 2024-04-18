<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Repositories\AgencyRepositoryInterface;
use App\Http\Requests\StoreAgencyRequest;
use App\Http\Requests\UpdateAgencyRequest;
use App\Models\Media;
use Intervention\Image\Facades\Image;

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
        $validated = $request->validated();
        dd($validated);
        $agency = $this->agencyRepository->create($validated);
        dd($agency);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            // Save image details into media table
            $media = new Media();
            $media->agency_id = $agency->id;
            $media->file_name = $filename;
            $media->file_type = $image->getClientMimeType();
            $media->file_path = 'images/' . $filename;
            $media->save();
        }

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