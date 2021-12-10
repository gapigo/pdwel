<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CmsCategoryController extends Controller
{
   
    /**
    * @param  $category
    */
    public function editCategory(Category $category){
        // dd($category);
        return view('cms.category.edit', ['category' => $category]);
    }

    /**
    * @param  $product
    */
    public function editService(Product $product){
        // dd($product);
        return view('cms.product.edit', ['Product' => $product]);
    }

    public function createCategory(){
        return view('cms.category.create');
    }

    public function createService(){
        return view('cms.product.create');
    }

    

}
