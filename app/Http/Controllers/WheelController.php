<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WheelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function wheel(Request $request){
        if ($request->ajax()) {

            $value = $request->get('value');

            $id = DB::table('people')->where('name',$value)->value('id');
            $user = Auth::user()->id;

            $form_data = array(
                'choosed' => 1,
            );
            $form_data1 = array(
                'choosed' => 1,
                'wheel' => $value,
            );

            Person::whereId($id)->update($form_data);
            User::whereId($user)->update($form_data1);

            $output =  'hi';//DB::table('users')->where('id',1)->count();

            $data = array(
                'content' => $output,
            );
            echo json_encode($data);
        }
    }
}
