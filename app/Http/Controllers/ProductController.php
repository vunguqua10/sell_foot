<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//Unknow
class ProductController extends Controller
{
    // public function registrationProduct()
    // {
    //     return view('admin.product.addproduct');
    // }
        //Thêm sản phẩm:
        public function addProduct()
    {
        
        $categories = DB::table('categories')->select('*')->get();
        $products = DB::table('products')->select('*')->get();
        return view('admin.product.addproduct', ['categories' => $categories, 'products' => $products]);
    }
    public function customProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required',
            'price' => 'required|numeric|min:4',
            'instock' => 'required|numeric',
            'sold' => [
                'required',
                'numeric',
                function ($attribute, $value, $fail) use ($request) {
                    $instock = $request->input('instock');
                    if ($value >= $instock) {
                        $fail('Số "sold" phải nhỏ hơn số "instock".');
                    }
                }
            ],
            'id_category' => 'required',
            'photo' => 'required',
        ]);
        // Kiểm tra sự tồn tại của sản phẩm
        $file = $request->file('photo');
        $path = 'images';
        $fileName = $file->getClientOriginalName();
        $file->move($path, $fileName);
        $product = new Product($request->all());
        $product->photo = $fileName;
        $product->save();
        return redirect("listproduct");
    }
    public function createProduct(array $data)
    {
        return Product::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'instock' => $data['instock'],
            'sold' => $data['sold'],
            'id_category' => $data['id_category'],
            'photo' => $data['photo'],
        ]);
    }

    public function getDataEdit($id)
    {
        $getData = DB::table('products')->select('*')->where('id', $id)->get();
        $categories = DB::table('categories')->select('*')->get();
        return view('admin.product.editproduct', ['getDataProductById' => $getData, 'categories' => $categories]);
    }

    public function updateProduct(Request $request)
    {
        $file = $request->file('photo');
        $path = 'images';
        $fileName = $file->getClientOriginalName();
        $file->move($path, $fileName);

        $updateData = DB::table('products')->where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'instock' => $request->instock,
            'sold' => $request->sold,
            'id_category' => $request->id_category,
            'photo' => $fileName,
        ]);
        //Thực hiện chuyển trang
        return redirect('listproduct');
    }


    public function deleteProduct($id)
    {
        $deleteData = DB::table('products')->where('id', '=', $id)->delete();
        return redirect('listproduct');
    }


    public function listProduct()
    {
        $products = DB::table('products')->orderBy('products.id', 'desc')->paginate(4);
        return view('admin.product.listproduct', compact('products'));
    }

    public function searchProduct(Request $request)
    {
        $keyword = $request->keyword;
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('shop/shopsearch', compact('products'));
    }
    public function searchProduct_Admin(Request $request)
    {
        $keyword = $request->keyword;
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')->paginate(4);
        return view('admin.product.listproduct', compact('products'));
    }
    public function gallery()
    {
        $products = Product::all();
        return view('gallery/gallery', compact('products'));
    }
}
