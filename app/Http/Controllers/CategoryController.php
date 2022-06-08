<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
// use\App\Product;
// use App\Http\Controllers\Product;
// use App\Http\Controllers\CategoryController\Product;
// class CategoryController extends Product

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories=Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $categories=Category::all();
        return view('categories.create', compact('categories'));
    }


    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'name' => 'required',
        ]);

        //creat a new product
        Category::create($request->all());

        //redirect the user and send friendly message
        return redirect()->route('categories.index')->with('success','categories created successfully');
    }

    
    public function show(Category $category)
    { 
        return view('categories.show', compact('category')); 
    }

    
    public function edit(Category $category)
    { 
    
        return view('categories.edit', compact('category'));
    }
        

    
    public function update(Request $request, Category $category)
    {
        // validate the input
        $request->validate([
            'name' => 'required',           
            'is_active' => 'required|boolean',
        ]);

        //update category
        $category->update($request->all());

        //redirect the user and send friendly message
        return redirect()->route('categories.index')->with('success','category updated successfully');
    }

   
    public function destroy(Category $category)
    {
        
        $products = Product::where('category_id',$category->id)->count();
        if($products > 0){
            return redirect()->route('categories.index')->with('status','category could not deleted');
        //  return route('categories.index');
       }
       else{
        
        $category->delete();
        return redirect()->route('categories.index')->with('status','category updated successfully');
        // return route('categories.index');
       }



        // return 'error';
      //delete the product
      $category->delete();

      //redirect the user with a success message
       return redirect()->route('categories.index')->with('success','Category deleted successfully');  
    }
    public function changeStatus(Category $category)
    {
        $category->is_active = !$category->is_active;

        $category->update();

        return redirect()->route('categories.index')->with('status','Category active status has been changed successfully !');
    }
}
