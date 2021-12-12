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
    public function editCategory(Request $request, Category $category){
        // dd($category);
        $request->session()->put('category',$category);
        // dd($request);
        
        return view('cms.category.edit', ['category' => $category]);
    }

    /**
    * @param  $product
    */
    public function editService(Product $product){
        // dd($product);
        
        return view('cms.product.edit', ['product' => $product]);
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
        // dd($product);
        // return redirect('cms');
        return redirect('edit/categoria/'.$product->category_id);
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

    public function createService(Request $request){
        $category = $request->session()->get('category');
        // dd($category);
        if ($category)
            return view('cms.product.create', ['category' => $category]);
        return redirect()->route('cms.home');
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

    public function updateService(Request $request){
        // dd($request);
        // dd($request->category_id);
        // dd($request->product);
        if($request->id == 0)
            $product =  new Product;
        else
            $product =  Product::find($request->id);

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->exclusive = $request->exclusive;
        $product->save();
        // dd($request);
        // return view('cms.home');
        // return route('cms.home');
        // return redirect()->route('cms.home');
        return redirect('edit/categoria/'.$request->category_id);
    }
    
    

}
