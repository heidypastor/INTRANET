<?php

namespace App\Http\Controllers;

use App\User;
use App\Cargo;
use App\Areas;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $users)
    {
        $users = User::with('roles')->get();
        /*return $users;*/
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if (auth()->user()->can('createUser')) {
            $roles = Role::where('name', '!=', 'Super Admin')->get();
            $permisos = Permission::all();
            $cargos = Cargo::all();
            $areas = Areas::all();

            return view('users.create', compact(['roles', 'permisos', 'cargos', 'areas']));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para crear Usuarios');
        }
        
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->email_verified_at = now();
        $user->password= Hash::make($request->get('password'));
        $user->ColorUser= 2;
        $user->Avatar= 'images/robot400x400.gif';
        $user->save();


        $user->cargos()->sync($request->input('Cargos'));
        $user->syncRoles($request->input('roles'));
        $user->syncPermissions($request->input('PermisosDirectos'));


        return redirect()->route('user.index')->withStatus(__('User successfully created.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
       $roles = Role::where('name', '!=', 'Super Admin')->get();
       $permisos = Permission::all();
       $cargos = Cargo::all();
       $areas = Areas::all();

       
       return view('users.edit', compact(['user', 'roles', 'permisos', 'cargos', 'areas']));
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User  $user)
    {
        // return $request;
        $hasPassword = $request->get('password');
        $user->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$hasPassword ? '' : 'password']
        ));

        $user->cargos()->sync($request->input('Cargos'));
        $user->syncRoles($request->input('roles'));
        $user->syncPermissions($request->input('PermisosDirectos'));


        return redirect()->route('user.index')->withStatus(__('User successfully updated.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User  $user)
    {
        if ($user->id == 1) {
            return abort(403);
        }

        $user->delete();

        return redirect()->route('user.index')->withStatus(__('User successfully deleted.'));
    }
}
