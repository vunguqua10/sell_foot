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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
      
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = md5($request->input('password'));
        $user->save();
    
        return redirect("listUser");
    }
    public function createUser(array $data)
    {
        return Product::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }

    public function getDataEdit($id)
    {
        $getData = DB::table('users')->select('*')->where('id', $id)->get();
        return view('admin.user.editUser', ['getDataUserById' => $getData]);
    }

    public function updateUser(Request $request, $id)
    {
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);

    $user = User::find($id);
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = md5($request->input('password'));
    $user->save();

    return redirect("listUser");
}


    public function deleteUser($id)
    {
        $deleteData = DB::table('users')->where('id', '=', $id)->delete();
        return redirect('listUser');
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
