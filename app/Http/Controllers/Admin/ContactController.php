<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactshow()
    {
        return view('admin.contact-us.listcontact');
        
   }
//    public function store(Request $request)
//    {
//        // Lưu dữ liệu từ form vào cơ sở dữ liệu
//        $contact = new ContactUs();
//        $contact->name = $request->input('name');
//        $contact->email = $request->input('email');
//        $contact->subject = $request->input('subject');
//        $contact->message = $request->input('message');
//        $contact->save();

//        // Chuyển hướng hoặc thực thi các hành động khác sau khi lưu thành công

//        // Ví dụ: chuyển hướng về trang listcontact-us
//        return redirect()->route('admin.listcontact-us');
//    }
public function store(Request $request)
    {
        // Kiểm tra và xác thực dữ liệu đầu vào
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Tạo bản ghi mới trong cơ sở dữ liệu
        $contactus = Contact::create($validatedData);

        // Đoạn mã sau đây sẽ tạo ra thông báo thành công
        // và chuyển hướng người dùng về trang liên hệ (hoặc trang khác tùy ý)
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
    public function allcontact()
{
    $contactus = Contact::all();
    
    return view('admin.contact-us.listcontact', compact('contactus'));
}
public function deleteContact($id)
    {

        $deleteData = DB::table('contact_us')->where('id', '=', $id)->delete();
        return redirect('listcontact');
    }

}
