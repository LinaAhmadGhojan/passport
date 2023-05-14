<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Crypt,Hash};
class UserController extends Controller
{

    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request)
    {



        $this->validate($request, [
            'email' => 'required|email',
        ]);


          $user=User::where('email',$request->email)->first();

          if($user)
          {
          auth()->loginUsingId($user->id);
          return to_route('register.RS4IT');
          }
        else {
                $input=$request->all();
                $input["password"]= Hash::make("0000");
                $input["phone"]="";
                $input["id_country"]=1;
                 $user= User::create($input);
                 auth()->loginUsingId($user->id);
                 return to_route('register.RS4IT');


             }
    }
}
