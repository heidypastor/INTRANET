<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\User;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        // return $request;
        auth()->user()->update($request->except('Avatar'));

            if ($request->hasFile('Avatar')){
            $file = $request->file('Avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            
            auth()->user()->update(['Avatar' => '/images/'.$name]);

        /*auth()->user()->update($request->all());*/
            }

            return back()->withStatus(__('Profile successfully updated.'));
    }
    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }


    public function updatecolor($id, $color)
    {
        
        // return back()->withStatus(__('Profile successfully updated.'));
        // if ($request->ajax()) {
        //     $user = User::where('id', $id)-first();
        //     return $request;
        //     return response()->json($municipio);
        // }
        /*$user = User::where('id', $id)->first();*/
        switch ($color) {
            case 'primary':
                $NuevoColor = 0;
                break;
            case 'blue':
                $NuevoColor = 1;
                break;
            case 'green':
                $NuevoColor = 2;
                break;
            case 'red':
                $NuevoColor = 3;
                break;
            case 'yellow':
                $NuevoColor = 4;
                break;
            default:
                $NuevoColor = 2;
                break;
        }
        /*$user->save();*/
        auth()->user()->update(['ColorUser' => $NuevoColor]);


        return response()->json($user->ColorUser);
    }
}
