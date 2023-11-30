<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function listProduct()
    {
        
        $product = Product::orderby('id','DESC')->paginate(5); //SELECT * FROM Product limit(0,5)
        //return view('index',['data'=>$product]);
        return view('admin.product.listProduct',['data'=>$product]);
    }
      //Thêm sản phẩm:
    function addProduct()
    {
        $categories = DB::table('categories')->get();
        $id = DB::table('categories')->pluck('type_name', 'id');
        return view('admin.product.addproduct', ['categories' => $categories, 'id' => $id]);
    }
   
    
    //Post thêm sản phâm lên:
    function post_addProduct(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required',
            'price' => 'required|min:4|max:7|numeric',
            'instock' => 'required|numeric',
            'sold' => 'required|numeric',
            'id_category' => 'required',
            'photo' => 'required',
        ]);
        
        $file = $request->file('photo');
        $path = 'uploads';
        $fileName = $file->getClientOriginalName();
        $file->move($path, $fileName);
        $product = new Product($request->all());
        $product->photo = $fileName;
        $product->save();
        Product::create($request->all());
        return redirect()->route('product.listproduct')->with('success','Thêm sản phẩm thành công');;
    }
    public function searchProduct_admin(Request $request)
    {
        $keyword = $request->keyword;
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')->paginate(4);
        return view('admin.product.listproduct', compact('products'));
    }

}
