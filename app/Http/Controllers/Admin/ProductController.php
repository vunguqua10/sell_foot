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
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'instock' => 'required',
            'sold' => 'required',
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
        return redirect()->route('product.listProduct')->with('success','Thêm sản phẩm thành công');;
    }

}
