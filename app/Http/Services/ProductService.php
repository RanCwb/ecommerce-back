<?php

namespace App\Http\Services;


use App\Models\Product;


class ProductService
{
  public function create(array $data): Product
  {
    return Product::create($data);
  }


  public function index()
  {
    if (Product::all()->isEmpty()) {
      throw new \Exception('No products found');
    }
    return Product::paginate(15);
  }
}
