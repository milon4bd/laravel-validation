<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class validateController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function store(Request $data)
    {
        $data->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'cpassword' => 'required|same:password',
        ], [
            'name.required' => '***',
            'email.required' => '***',
            'password.required' => '***',
            'cpassword.required' => '***',
        ]);
        $user = new User();
        $user->name = $data->name;
        $user->email = $data->email;
        $user->password = Hash::make($data->password);
        $result = $user->save();
        if ($result) {
            return back()->with('message', 'User Insert Successfully');
        } else {
            return back()->with('message', 'User Insert Failed');
        }
    }
}
