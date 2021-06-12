<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liste()
    {
        $role = Role::get();
        return view('user.role', compact('role'));
    }


    public function role()
    {
        $userrole = UserRole::all();
        $role = Role::get();
        $user = User::get();
        return view('user.userRole', compact('role', 'userrole', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {

        $request->validate([
            'user_id' => 'required|unique:user_roles',
            'role_id' => 'required',


        ]);

        $user  = new User();

        $role  = new Role();

        $userRole = new UserRole();
        $userRole->user_id = $request->user_id;
        $userRole->role_id = $request->role_id;
        $userRole->save();
        Flashy::message('Role assigné');
        return redirect()->route('userrole.list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'label' => 'required|regex:/^[\pL\s\-]+$/u|unique:roles,label',

        ]);
        $role  = new Role();
        $role->label = request('label');
        $role->save();
        Flashy::message('Région ajouté');
        return redirect()->route('role.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
