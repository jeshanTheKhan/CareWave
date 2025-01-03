<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $req){      
        $store = User::find(Auth::user()->id);
        $store->name = $req->name;
        $store->lastName = $req->lastName;
        $store->phone = $req->phoneNumber;
        $store->state = $req->state;
        $store->zipcode = $req->zipCode;
        $store->address = $req->address;

        $store->save();
        if($store){
            $notification = array(
                'message' => 'Profile Upgrade Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Upgrade!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);

    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
