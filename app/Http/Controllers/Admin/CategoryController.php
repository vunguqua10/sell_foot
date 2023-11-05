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
        
        $categories = DB::table('categories')->paginate(4);
        return view('admin.category.listcategory', ['data'=>$categories]);
    }
     //them loai san pham
     public function addCategory()
     {
         return view('admin.category.addCategory');
     }
     //post loai san pham
     function post_addCategory(Request $request){
        $this->validate($request, [
            'type_name' => 'required|unique:categories,type_name'
        ], [
            'type_name.required' => 'Tên danh mục không được để trống',
            'type_name.unique' => 'Tên danh mục đã có trong CSDL'
        ]);
    
        $categories = new Category();
        $categories->type_name = $request->input('type_name');
        $categories->save();
    
        return redirect()->route('category.listCategory')->with('success', 'Thêm danh mục thành công');
    }
    //Sửa loại sản phẩm:
    function editCategory($id)
    {
       $typebyid = Category::find($id);
       return view('admin.category.listCategory',['typebyid'=>$typebyid]);
    }
    //Post sửa loại sản phâm lên:
    function post_edittype($id,Request $request){
        $this -> validate($request,[
            'type_name' => 'required'
        ],['type_name.required' => 'Tên danh mục không được để trống']);
        $request -> offsetUnset('_token');
       Category::where(['id'=>$id])->update($request->all());
        return redirect()->route('admin.category.listCategory')->with('success','Sửa danh mục thành công');
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
}
