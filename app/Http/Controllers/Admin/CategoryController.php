<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    public function listCategory()
    {
        
       // $categories = Category::paginate(4);
       $categories = Category::orderBy('id','DESC')->paginate(5);
        return view('admin.category.listcategory', compact('categories'));
    }
    public function getCategory()
    {
        
        $categories = Category::paginate(4);
        return view('shop.shop', compact('categories'));
    }
     //them loai san pham
     public function addCategory()
     {
         return view('admin.category.addCategory');
     }
     //post loai san pham
     function post_addCategory(Request $request){
        $this->validate($request, [
            'cate_name' => 'required|unique:categories,cate_name'
        ], [
            'cate_name.required' => 'Tên danh mục không được để trống',
            'cate_name.unique' => 'Tên danh mục đã có trong CSDL'
        ]);
    
        $categories = new Category();
        $categories->cate_name = $request->input('cate_name');
        $categories->save();
    
        return redirect()->route('category.listCategory')->with('success', 'Thêm danh mục thành công');
    }
    
    //Sửa loại sản phẩm:
    function editCategory($id)
    {
        $getData = DB::table('categories')->select('*')->where('id', $id)->get();
        return view('admin.category.editcategory')->with('getDataCategoryById', $getData);
    }
    //Post sửa loại sản phâm lên:
    public function updateCategory(Request $request)
    { 
    $validatedData = $request->validate([
        'cate_name' => 'required',
    ]);

    $category = Category::find($request->id);
    if (!$category) {
        // Xử lý khi không tìm thấy danh mục
    }

    $category->cate_name = $request->cate_name;
    $category->save();

    return redirect()->route('category.listCategory');
    }
    //xóa loại sản phẩm:
    // function delCategory($id)
    // {
    //     $category = Category::where('id',$id)->get();
    //     if($category->count() == 0 ){
    //         Category::find($id)->delete();
    //          //Quay lại trang trước đó
    //         return redirect()->back()->with('success','Xóa danh mục thành công');
    //     }else{
    //         //return redirect()->back()->with('error','Không thể xóa danh mục vì vẫn còn sản phẩm');
    //     }    
    // }
    public function delCategory($id)
    {
       
        $deleteData = DB::table('categories')->where('id', '=', $id)->delete();
        return view('admin.category.listcategory');
    }
    public function searchCategory(Request $request)
    {
        $keyword = $request->keyword;
        $categories = Category::where('cate_name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        return view('admin.category.listcategory', compact('categories'));
    }
}
