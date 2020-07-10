<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Practice;
class PracticeController extends Controller
{
    //
    public function practice_partner_post(Request $request){

        $practice = new Practice();
        //県
        $practice->prefecture = $request->prefecture;
        //場所
        $practice->place = $request->place;
        //チーム名
        $practice->name = $request->team_name;
        //練習時間
        $practice->practice_time = $request->practice_time;
        //規模
        $practice->scale = $request->scale;
        //レベル
        $practice->level = $request->level;
        //参加費
        $practice->entry_fee = $request->entry_fee;
        //説明
        $practice->explanation = $request->explanation;
        //投稿者
        $practice->contributor = $request->session()->get('user')[0];

        $practice->save();

        return view('index');
    }

    public function practice_info_list(Request $request){
       
        $practice_list = Practice::where('prefecture', $request->prefecture)->get();

        return view('practice_info_list',['practice_list' => $practice_list ]);
    }
}
