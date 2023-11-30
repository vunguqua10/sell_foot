<?php

namespace App\Http\Controllers;
//use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//Unknow
class UserController extends Controller
{
    // public function registrationProduct()
    // {
    //     return view('admin.product.addproduct');
    // }
        //Thêm sản phẩm:
        public function addUser()
    {
        $users = DB::table('users')->select('*')->get();
        return view('admin.user.addUser', ['users' => $users]);
    }
    public function customUser(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users|min:3|max:12',
            'email' => 'required|email|unique:users,email|min:6|max:20',
            'password' => 'required|min:6',
        ]);
      
        $data = $request->all();
        $check = $this->createUser($data);
    
        return redirect('admin/listUser');
    }
    public function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    function editUser($id)
    {
        $getData = DB::table('users')->select('*')->where('id', $id)->get();
        return view('admin.user.editUser')->with('getDataUserById', $getData);
    }

//     public function updateUser(Request $request, $id)
//     {
//     $request->validate([
//         'name' => 'required',
//         'email' => 'required|email|unique:users',
//         'password' => 'required|min:6',
//     ]);

//     $data = $request->all();
//     $check = $this->createUser($data);
//     $data->save();

//     return redirect('admin/listUser');
// }
public function updateUser(Request $request)
{
   
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email|min:6|max:20',
        'password' => 'required|min:6',
    ]);
    $user = User::find($request->input('id'));
    if (!$user) {
        // Xử lý khi không tìm thấy người dùng
        return redirect()->route('user.listUser')->with('error', 'Không tìm thấy người dùng');
    }
    $user = User::find($request->id);
   
   
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();

    return redirect()->route('user.listUser')->with('success', 'Cập nhật người dùng thành công');
   
}


    public function deleteUser($id)
    {
        $deleteData = DB::table('users')->where('id', '=', $id)->delete();
        return redirect('admin/listUser');
    }


    public function listUser()
    {
        $users = DB::table('users')->paginate(3);
        return view('admin.user.listUser', compact('users'));
    }

    public function searchUser(Request $request)
    {
        $keyword = $request->keyword;
        $users = User::where('name', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('shop/shop', compact('users'));
    }
    public function searchUserAdmin(Request $request)
    {
        $keyword = $request->keyword;
        $users = User::where('name', 'LIKE', '%' . $keyword . '%')->paginate(4);
        return view('admin.user.listUser', compact('users'));
    }
      
}
