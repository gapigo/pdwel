<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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

    /**
    * @param  $category
    */
    // public function deleteCategory(Category $category){
    //     // dd($category);
    //     return view('cms.category.edit', ['category' => $category]);
    // }

    /**
    * @param  $category
    */
    public function deleteCategory(Category $category){
        $category->delete();
        // dd('Ola mundo');
        return redirect('cms');
    }

    public function deleteService(Product $product){
        $product->delete();
        // dd('Ola mundo');
        return redirect('cms');
    }

    // /**
    // * @param  $product
    // */
    // public function deleteService(Product $product){
    //     // dd($product);
    //     return view('cms.product.edit', ['Product' => $product]);
    // }

    public function createCategory(){
        return view('cms.category.create');
    }

    public function createService(){
        return view('cms.product.create');
    }

    public function updateCategory(Request $request){
        // dd($request);
        if($request->id == 0)
            $category =  new Category;
        else
            $category =  Category::find($request->id);
        if ($request->file('image'))
            // Salva imagem
            $image_path = $request->file('image')->store('public/category_thumbs');
        else
            $image_path = $category->image;
        $category->name = $request->name;
        $category->image = $image_path;
        $category->description = $request->description;
        $category->save();
        // dd($request);
        // return view('cms.home');
        // return route('cms.home');
        return redirect()->route('cms.home');
    }
    
    

}
