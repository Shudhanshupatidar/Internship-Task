<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
  
            $name = $request->input('name');
            $email = $request->input('email');
            $mobile = $request->input('mobile');

            Users::create(
                [
                    'name' => $name,
                    'email' => $email,
                    'mobile' => $mobile,
                ]
                );    
                
                return redirect()->back()->with('message', 'User Added !!');         
    }
}
