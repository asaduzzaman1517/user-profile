<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class PageEdit extends Controller
{
    public function editPage()
    {
        $myName = User::where('id', Auth::user()->id)->with('address')->first();
        return view('edit.edit', compact('myName'));
    }
}
