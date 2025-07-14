<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    public function __construct(private CategoryService $category) {}


    public function store(StoreCategoryRequest $request)
    {
        try {

            $validated = $request->validated();

            $category = $this->category->create($validated);

            return response()->json(['category' => $category], 201);
        } catch (\Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);
        };
    }

    public function index()
    {
        try {
            return response()->json(['categories' => $this->category->index()], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        };
    }
}
