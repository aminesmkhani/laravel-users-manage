<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.list',compact('roles'));
    }


    public function store(Request $request)
    {
        $this->validateForm($request);

        Role::create($request->only('name', 'fa_name'));

        return back()->with('success', true);
    }


    public function validateForm($request)
    {
        return $request->validate([
           'name'   => ['required'],
            'fa_name'   => ['required']
        ]);
    }

    public function edit(Role $role)
    {
        dd($role);
    }
}
