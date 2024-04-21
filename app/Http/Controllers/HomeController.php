<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::latest()->get();
        return view('home', compact('properties'));
    }

    public function properties()
    {
        $properties = Property::latest()->get();
        return view('pages.properties', compact('properties'));
    }
}