<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user       = User::find(auth()->user()->id);
            $avatars    = array(
                'ghost'                 =>'ghost',
                'ghoul'                 =>'ghoul',
                'marshmallow-monster'   =>'marshmallow-monster',
                'vampire'               =>'vampire',
                'skeleton'              =>'skeleton',
            );
            if($user->avatar)
            {
                foreach (array_keys($avatars, $user->avatar) as $key) {
                    unset($avatars[$key]);
                }
                array_unshift($avatars, $user->avatar);
            }
            return view('profile',compact('user','avatars'));
        }else{
            return redirect('login');
        }

    }

    public function result($id)
    {
        if (Auth::check()) {
            $user       = User::find($id);
            $avatars    = array(
                'ghost'                 =>'ghost',
                'ghoul'                 =>'ghoul',
                'marshmallow-monster'   =>'marshmallow-monster',
                'vampire'               =>'vampire',
                'skeleton'              =>'skeleton',
            );
            if($user->avatar)
            {
                foreach (array_keys($avatars, $user->avatar) as $key) {
                    unset($avatars[$key]);
                }
                array_unshift($avatars, $user->avatar);
            }
            return view('result-profile',compact('user','avatars'));
        }else{
            return redirect('login');
        }

    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        //$this->validate($request, User::rules($update = true, $user->id));

        $user->update([
            'full_name'             => $request->full_name == '' ? $user->full_name:$request->full_name,
            'nickname'              => $request->nickname,
            'avatar'                => $request->avatar,
            'password'              => $request->password == '' ? $user->password: Hash::make($request->password),
            'gender'                => $request->gender,
            'date_of_birth'         => $request->date_of_birth,
            'color'                 => $request->color,
            'category'              => $request->category,
            'note'                  => $request->note,
        ]);

        return redirect()->back()->with('success','Data updated successfully');
    }
}
