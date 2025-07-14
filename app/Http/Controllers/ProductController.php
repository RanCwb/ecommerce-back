<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;

class ProductController extends Controller
{

    public function __construct(private ProductService $product) {}

    public function index()
    {
        try {
            return response()->json(['products' => $this->product->index()], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        };
    }
}
