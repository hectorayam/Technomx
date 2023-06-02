<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Synonym;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;




use function PHPUnit\Framework\returnSelf;

class ProductController extends Controller
{

    public function index(){

        $products =  Product::all()->except('image');

        return view('products.index',compact('products'));
    }

    public function create(){

        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('products.create',compact('categories','subcategories'));
    }


    
 public function store(Request $request){
        $request->validate([
              'name' => 'required',
              'slug' => 'required|not_regex:/^.+\s.+$/i',
            'price'=> 'required|numeric|min:0.01|max:999999'
          ],
            [
              'name.required' => 'El campo nombre no puede estar vacio',
              'slug.required' =>'La url no debe estar vacia',
              'slug.not_regex' =>'La url no debe llevar espacio en vez pon -',
              'price.required' => 'Precio no puede estar vacio',
              'price.max' => 'El precio es execivo',
              'price.min' => 'Vas a regalar el producto'
            ]);
            if($request->has('image')){
                $image = $request->file('image');
                $imageName='-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('images'),$imageName);
                $url= $imageName;
            }
            else{
                $url= Null;
            }
            if($request->input('status')==true){
                $status = "1";
            }else{
                $status ="0";
            }

             Product::create([
                'name'=> $request->name,
                'slug'=>$request->slug,
                'price' => $request->price,
                'subcategory_id'=>$request->subcategory_id,
                'description' => $request->description,
                'specification'=>$request->specification,
                'image'=>$url,
                'status'=>$status,
            ]);
        return redirect()->back()->with('succes','Producto creado correctamente');
    }

    
    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show', compact('product'));
    }

    public function search(Request $request){
        $search = $request->input('query');
         $synonyms = Product::where('keyword','like','%'.$request->input('query').'%')->get();
        
         return view('products.search',compact('synonyms','search'));
    }



    public function edit(Product $product){
        
        $subcategories = Subcategory::all()->except($product->subcategory->id);
        return view('products.edit', compact('product','subcategories'));

       
    }

    public function update(Request $request, Product $product){
        $request->validate([
            'name' => 'required',
            'slug' => 'required|not_regex:/^.+\s.+$/i',
            'price'=> 'required|numeric|min:0.01|max:999999'
          ],
            [
              'name.required' => 'El campo nombre no puede estar vacio',
              'slug.not_regex' =>'La url no debe llevar espacio en vez pon -',
              'price.required' => 'Precio no puede estar vacio',
              'price.max' => 'El precio es execivo',
              'price.min' => 'Vas a regalar el producto'
          ]);
        $request->validate([
            'name' => 'required',
          ],
            [
              'name.required' => 'El campo nombre no puede estar vacio',
              'price.required' => 'El campo descripcion no puede estar vacio',
          ]);
          if($request->has('image')){
            $image = $request->file('image');
            $imageName='-image-'.time().rand(1,1000).'.'.$image->extension();
            $image->move(public_path('images'),$imageName);
            $url= $imageName;
          
          }
          else{
              $url = $product->image;
          }
          $product->name = $request->name;
          $product->slug = $request->slug;
          $product->price = $request->price;
          $product->subcategory_id = $request->subcategory_id;
          $product->description = $request->description;
          $product->specification = $request->specification;
          $product->keyword= $request->keyword;
          $product->image = $url;
          if($request->input('status')==true){
                $product->status = "1";
            }else{
                $product->status ="0";
            }
          $product->update();



       
          return redirect()->route('product.index');
    }

    public function destroy(Product $product)
        {
            $product->delete();

            return back();
        }
}

