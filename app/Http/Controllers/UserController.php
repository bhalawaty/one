<?php

namespace App\Http\Controllers;

use  App\Http\Requests\AdminAddUserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        $user= $user->all();
        return view('admin.users.index', compact('user'));

    }

    public function create()
    {
        return view('admin.users.add');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    public function store(AdminAddUserRequest $request, User $user)
    {
        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('adminpanel/users')->withFlashMessage('successful operation');
    }
    public function update(User $user ,Request $request){

    }
}
