<?php

namespace App\Http\Controllers;

use  App\Http\Requests\AdminAddUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    public function index()
    {

        return view('admin.users.index');

    }

    public function create()
    {
        return view('admin.users.add');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
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

    public function update(User $user, Request $request)
    {
        $user->fill($request->all())->save();
        return redirect('adminpanel/users')->withFlashMessage('successful operation');
    }

    public function UpdatePassword(User $user, Request $request)
    {
        $userUpdated = $user->find($request->user_id);
        $password = bcrypt($request->password);
        $userUpdated->fill(['password' => $password])->save();
        return redirect('adminpanel/users')->withFlashMessage('successful operation');


    }

    public function destroy(User $user)
    {
        if($user->admin != 1) {
            $user->delete();
        }
        return redirect('adminpanel/users')->withFlashMessage('successful operation');
    }

    public function anyData(User $user)
    {

        $users = $user->all();

        return Datatables::of($users)
            ->editColumn('name', function ($model) {
                return '<a href="'.url('/adminpanel/users/' . $model->id . '/edit').'">'.$model->name.'</a>';
            })



        ->editColumn('admin', function ($model) {
        return $model->admin == 0 ? '<span class="badge badge-info">' . 'user' . '</span>' : '<span class="badge badge-warning">' . 'admin' . '</span>';
    })


        ->editColumn('control', function ($model) {
            $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
            if($model->admin != 1){
                $all .= '<a href="' . url('/adminpanel/users/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
            }
            return $all;
        })
            ->rawColumns(['name','admin','control'])
        ->make(true);

    }
}
