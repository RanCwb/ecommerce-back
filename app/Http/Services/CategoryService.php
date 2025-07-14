<?php

namespace App\Http\Services;

use App\Models\Category;

class CategoryService
{
  public function create(array $data): Category
  {
    return Category::create($data);
  }


  public function index()
  {
    if (Category::all()->isEmpty()) {
      throw new \Exception('No categories found');
    }
    return Category::all();
  }
}
