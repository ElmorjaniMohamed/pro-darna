<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = Category::paginate(6);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $this->categoryRepository->create($request->validated());
        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $this->categoryRepository->update($request->validated(), $category);
        return redirect()->route('admin.categories.index');
    }

    public function destroy(Category $category, int $id): JsonResponse
    {
        
        if ($category->ajax()) {

            $category = Category::find($id);
    
            if ($category) {
    
                $this->categoryRepository->delete($category);
                return response()->json(['status' => 'success', 'message' => 'Category deleted successfully']);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Category not found'], 404);
            }
        } else {
    
            return response()->json(['status' => 'error', 'message' => 'Unauthorized'], 401);
        }
    }


}