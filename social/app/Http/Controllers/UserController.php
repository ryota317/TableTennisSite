<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\User;
class UserController extends Controller
{
    //


    //ユーザ新規登録
    public function signUp(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->prefecture = $request->prefecture;
        $user->email = $request->email;
        $user->password = $request->pass;
        $user->save();
        
        return view('/sign_up_result');
    }

    //ユーザ認証
    public function signIn(Request $request){
       
        //sessionがセットされていれば
        if ($request->session()->has('user')) {
            
            //ログインに飛ばす
            //todo session
            $s_id = $request->session()->regenerate();
            return view('index',  [
                "id" => $s_id
            ]);            
        }else{

            //sessionがセットされていなければ
            $user = User::where('email', $request->email)->where('password', $request->pass)->first();
            
            if($user === NULL){
                return view('sign_in_page', [
                    'sign_in_failure'=> 'ログイン失敗'
                ]);
            }else{

                $request->session()->regenerate();
                $request->session()->push('user', $user->id);
                $request->session()->push('user', $user->name);
                $request->session()->push('user', $user->email);
                return view('index'); 
            }
        }
    }

       public function sign_out(Request $request){

        $request->session()->flush();

        return view('index'); 
       }


       public function profile(Request $request){

            if ($request->session()->has('user')) {
              return view('profile');
              }else{
              return view('sign_in_page');
             }
        }

    public function create_team(Request $request){
         if ($request->session()->has('user')) {
             return view('create_team');
         }else{
             return view('sign_in_page');
         } 
    }

    public function practice_partner(Request $request){
        if ($request->session()->has('user')) {
             return view('practice_partner');
        }else{
           return view('sign_in_page');
         } 
    }
}