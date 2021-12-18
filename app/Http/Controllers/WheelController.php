<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WheelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(\Illuminate\Support\Facades\Auth::user()->user_id != Null)
        {
            $user = \App\Models\User::findOrFail(auth()->user()->user_id);
            return view('result',compact('user'));
        }else{
            $users = User::all();
            return view('wheel',compact('users'));
        }
    }

    public function wheel(Request $request){
        if ($request->ajax()) {

            $value = $request->get('value');
            $user = auth()->user()->id;

            $form_data = array(
                'choosed' => 1,
                'user_id' => $value,
            );

            User::whereId($user)->update($form_data);

            $data = array(
                'content' => '',
            );
            echo json_encode($data);
        }
    }
}
