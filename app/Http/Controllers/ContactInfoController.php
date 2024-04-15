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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactInfo $contactInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactInfo $contactInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactInfoRequest $request, ContactInfo $contactInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactInfo $contactInfo)
    {
        //
    }
}
