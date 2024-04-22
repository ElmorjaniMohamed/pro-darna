<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function properties(Request $request)
    {
        $sort = 'latest';
        $properties = Property::latest()->paginate(6);
        $categories = Category::all();

        return view('pages.properties', compact('properties', 'sort', 'categories'));
    }

    public function sort(Request $request)
    {
        $sort = $request->input('sort', 'latest');
        $category = $request->input('category');

        $properties = Property::query()
            ->when($sort === 'latest', function ($query) {
                return $query->latest();
            })
            ->when($sort === 'oldest', function ($query) {
                return $query->oldest();
            })
            ->when($sort === 'price_high', function ($query) {
                return $query->orderBy('price', 'desc');
            })
            ->when($sort === 'price_low', function ($query) {
                return $query->orderBy('price', 'asc');
            });

        if ($category) {
            $properties->where('category_id', $category);
        }

        $properties = $properties->paginate(6);

        $categories = Category::all();

        if ($request->ajax()) {
            $view = view('pages.pagination', compact('properties', 'categories'))->render();
            $pagination = $properties->appends(['sort' => $sort, 'category' => $category])->links('vendor.pagination.custom')->toHtml();

            return response()->json(['view' => $view, 'pagination' => $pagination]);
        }

        return view('pages.properties', compact('properties', 'sort', 'categories'));
    }

    function propertiesDetails($id)
    {
        $property = Property::findOrFail($id);
        $properties = Property::all();

        return view('pages.properties-details', compact('property', 'properties'));
    }



}