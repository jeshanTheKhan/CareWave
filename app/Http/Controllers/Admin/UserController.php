<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usertype;

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
        return view('Admin.User.index');
    }
}
