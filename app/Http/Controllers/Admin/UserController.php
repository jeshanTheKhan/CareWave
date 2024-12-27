<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usertype;
use App\Models\User;
use Hash;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
    // Index User Type
    public function indextype(){
        return view('Admin.UserType.index');
    }
    // Save User Type
    public function savetype(Request $req){
        $store=New Usertype();
        $store->type=$req->user;

        $store->save();
        if($store){
            $notification = array(
                'message' => 'User Added Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Add!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);
    }
    // Update Usertype Status
    public function usertypeUpdateStatus(Request $request, $id)
    {
    
        $data = Usertype::find($id);

 
        $data->status = $request->input('status');
        $data->save();  

  
        return redirect()->back()->with('status', 'Status updated successfully!');
    }

    // User-Type Table
    public function tabletype(){
        $data=Usertype::all();
        return view('Admin.UserType.table',compact('data'));
    }
    // Load User-type Edit Page
    public function editusertype($id){
        $data=Usertype::find($id);
        return view('Admin.UserType.edit',compact('data'));
    }
    // Update User Type
    public function updatetype(Request $req){
    $store=Usertype::find($req->c_id);
    $store->type = $req->user ? $req->user : $store->user;

    $store->save();
    if($store){
        $notification = array(
            'message' => 'User Update Successfully',
            'alert-type' => 'success'
        );
    }
    else{
        $notification = array(
            'message' => 'Failed To Update!!',
            'alert-type' => 'error'
        );
    }
    return redirect()->back()->with($notification);
}

 // Delete User Type
 public function delusertype($id){
    $result = Usertype::find($id);


    // Delete the database entry
    $result->delete();
    
    $notification = array(
        'message' => 'User-Type Deleted Successfully',
        'alert-type' => 'error'
    );
    
    return redirect()->back()->with($notification);
}

    //Index
    public function index(){
        $user=Usertype::all();
        return view('Admin.User.index',compact('user'));
    }
    // Save User 
    public function save(Request $req){
        $store=New User();
        $store->name=$req->fname;
        $store->lastName=$req->lastname;
        $store->user_role=$req->usertype;
        $store->email =$req->email;
        $store->password=Hash::make($req->password);

        $store->save();
        if($store){
            $notification = array(
                'message' => 'User Added Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Add!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);
    }
    // User Table
    public function table(){
        $data=User::all();
        return view('Admin.User.table',compact('data'));
    }
    // Update Usertype Status
    public function updatestatus(Request $request, $id)
    {
    
        $data = User::find($id);

 
        $data->status = $request->input('status');
        $data->save();  

  
        return redirect()->back()->with('status', 'Status updated successfully!');
    }
     // Load User-type Edit Page
     public function view($id){
        $user=Usertype::all();
        $data=User::find($id);
        return view('Admin.User.edit',compact('user','data'));
    }
    public function update(Request $req){
        $store=User::find($req->c_id);
        $store->name = $req->header1 ?? $store->name;
        $store->lastName = $req->header2 ?? $store->lastName;
        $store->user_role = $req->user ?? $store->user_role;
        $store->email = $req->email ?? $store->email;
        $store->password = $req->password ? Hash::make($req->password) : $store->password;
        
        $store->save();
        if($store){
            $notification = array(
                'message' => 'User Update Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Update!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->route('admin.all.user')->with($notification);
    }
    public function delete($id){
        $result = User::find($id);
    
    
        // Delete the database entry
        $result->delete();
        
        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'error'
        );
        
        return redirect()->back()->with($notification);
    }
    
}
