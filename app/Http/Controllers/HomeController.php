<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(Auth::check()){
            $profile_status = 'true';
        }else{
            $profile_status = 'false';
        }
//dd($profile_status);
      return redirect ('/index')->with('profile_status' , $profile_status);
    }
    public function update(Request $request, $id){

        if($request->new_password==$request->confirmation){
            $user=User::find($id);
            $user->password=Hash::make($request->input('new_password'));
            $user->update();
            return redirect('profile')->with('status','Your data change success');

        }
        else{
            return back()->with('status', 'Your password confimation is not similare to your password');
        }

    }

}
