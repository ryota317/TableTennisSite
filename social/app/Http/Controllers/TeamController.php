<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
class TeamController extends Controller
{
    //

    public function team_search(Request $request){

        $teams = Team::where('prefecture', $request->prefecture)->where('name', 'like', "%$request->team_name%")->get();
        
        return view('team_search',['teams'=> $teams]);
    }

      public function create_team(Request $request){
            
        $team = new Team();
        $team->name = $request->name;
        $team->prefecture = $request->prefecture;
        $team->scale = $request->scale;
        $team->representative = $request->representative;
        $team->practice_time = $request->practice_time;
        $team->explanation = $request->explanation;
        $team->author = $request->session()->get('user')[0];

        $team->save();

        return view('index');
    }
}