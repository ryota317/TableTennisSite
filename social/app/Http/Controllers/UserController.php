<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\User;
class UserController extends Controller
{
    //

    public function index(){
        $users = new User();
        var_dump($users);

    //     // $image = new Image();

    //     // $images = Image::where('title',  'like', "%{$search_word}%")->paginate(10);

    //     // $image = DB::table('images')->where('path', $path)->first();

    //     // $image->save();
    }


//TODO requestバリデーション



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
       

        //session処理


        $user = User::where('email', $request->email)->where('password', $request->pass)->first();
        

        if($user === NULL){
            return view('sign_in_page', [
                'sign_in_failure'=> 'ログイン失敗'
            ]);
        }else{
            //todo session
            return view('index');
        }
    }
}
