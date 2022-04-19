<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; //この行を追記

class UserController extends Controller
{
    // ここから追記
    public function show($id)
    {
        $user = User::findorFail($id);

        return view('users.show',compact('user'));
    }

}