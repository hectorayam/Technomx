<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;



use Illuminate\Http\Request;

class SubcategoryController extends Controller
{

    public function index(){

        $subcategories =  Subcategory::all();

        return view('subcategories.index',compact('subcategories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('subcategories.create',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
              'name' => 'required',
            ],
              [
                'name.required' => 'El campo nombre no puede estar vacio',
                'price.required' => 'El campo descripcion no puede estar vacio',
            ]);

        $sb = new Subcategory;
        $sb->name =  $request->name;
        $sb->category_id = $request->category_id;
        $sb->save();

        return redirect()->back()->with('succes','Tarea creada correctamente');
    }

    public function edit(Subcategory $subcategory){
        
        $categories = Category::all()->except($subcategory->category->id);
        return view('subcategories.edit', compact('subcategory','categories'));

       
    }

    public function update(Request $request, Subcategory $subcategory){

        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;

        $subcategory->update();
    
        return redirect()->route('subcategory.index');
    }

}
