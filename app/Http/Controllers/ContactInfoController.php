<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use App\Http\Requests\StoreContactInfoRequest;
use App\Http\Requests\UpdateContactInfoRequest;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactInfos = ContactInfo::all();
        return view('contactInfos.index', compact('contactInfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contactInfos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactInfoRequest $request)
    {
        ContactInfo::create($request->validated());
        return redirect()->route('contactInfos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactInfo $contactInfo)
    {
        return view('contactInfos.show', compact('contactInfo'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactInfo $contactInfo)
    {
        $contactInfo->delete();
        return redirect()->route('contactInfos.index');
    }
}