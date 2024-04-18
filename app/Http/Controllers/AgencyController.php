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
        $agency = $this->agencyRepository->create($validated);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('storage/images/agencies/' . $filename);
            $path = $image->storeAs('images/agencies', $filename, 'public');

            // Save image details into media table
            $media = new Media();
            $media->agency_id = $agency->id;
            $media->file_name = $filename;
            $media->file_type = $image->getClientMimeType();
            $media->file_path = $path;
            $media->save();
            // dd($media);
        }

        return redirect()->route('agencies.index');
    }

    public function edit(Agency $agency)
    {
        return view('agent.agencies.edit', compact('agency'));
    }

    public function update(UpdateAgencyRequest $request, Agency $agency)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('images/agencies', $filename, 'public');

            // Update image details in media table
            $media = $agency->media->first();
            if ($media) {
                $media->file_name = $filename;
                $media->file_type = $image->getClientMimeType();
                $media->file_path = $path;
                $media->save();
            }
        }

        $this->agencyRepository->update($validated, $agency->id);

        return redirect()->route('agencies.index');
    }

    public function destroy(int $id)
    {
        $this->agencyRepository->delete($id);
        return redirect()->route('agencies.index');
    }
}