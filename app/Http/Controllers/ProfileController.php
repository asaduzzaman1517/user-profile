<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Auth;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        // $user = new User();
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->file('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path(), $imageName);
            $user->image = $imageName;
        }
        $user->save();

        $checkUser = Profile::where('user_id', $user->id)->first();
        if ($checkUser != null) {
            $profile = Profile::where('user_id', $user->id)->first();
            $profile->address = $request->address;
            $profile->user_id = $user->id;
            $profile->save();
        }else {
            $profile = new Profile;
            $profile->address = $request->address;
            $profile->user_id = $user->id;
            $profile->save();
        }
        return back();
    }
}
