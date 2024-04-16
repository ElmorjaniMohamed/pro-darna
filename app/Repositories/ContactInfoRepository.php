<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use App\Http\Requests\StoreContactInfoRequest;
use App\Http\Requests\UpdateContactInfoRequest;
use App\Repositories\ContactInfoRepositoryInterface;

class ContactInfoController extends Controller
{
    private $contactInfoRepository;

    public function __construct(ContactInfoRepositoryInterface $contactInfoRepository)
    {
        $this->contactInfoRepository = $contactInfoRepository;
    }

    public function index()
    {
        $contactInfos = $this->contactInfoRepository->all();
        return view('contactInfos.index', compact('contactInfos'));
    }

    public function create()
    {
        return view('contactInfos.create');
    }

    public function store(StoreContactInfoRequest $request)
    {
        $this->contactInfoRepository->create($request->validated());
        return redirect()->route('contactInfos.index');
    }

    public function show(ContactInfo $contactInfo)
    {
        return view('contactInfos.show', compact('contactInfo'));
    }

    public function destroy(ContactInfo $contactInfo)
    {
        $this->contactInfoRepository->delete($contactInfo);
        return redirect()->route('contactInfos.index');
    }
}