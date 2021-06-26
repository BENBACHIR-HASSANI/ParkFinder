<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BalanceController extends Controller
{

        public function balance(Request $request, $id){


                $user=User::find($id);
                $user->balance=$request->input('inc_sold');
                $user->update();
                $users= User::all()->where('username', Auth::user()->username);

                return view('balance')->with('users',$users);


            //return view('balance', ['User'=>$users]);



        }

}
