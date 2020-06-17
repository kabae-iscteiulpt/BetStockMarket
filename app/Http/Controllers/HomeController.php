<?php

namespace App\Http\Controllers;

use App\Charts\UserChart2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // $fetchModeBefore = DB::getFetchMode();
        $user_points = DB::table('users_history')->where('user_id', auth()->user()->id)->select('points')->get()->toArray();
        $points = [];
        foreach($user_points as $point){
            echo 'Este é um ponto: '.print_r($point);
            $points[] = $point;
          }
        // echo print_r($points);
        $created_at = DB::table('users_history')->where('user_id', auth()->user()->id)->select('created_at')->get()->toArray();
        // echo $created_at;
        // DB::setFetchMode($fetchModeBefore);

        $sampleChart = new UserChart2;
        $sampleChart->labels($created_at);
        $sampleChart->dataset('Points', 'line', [1, 100, 50]);
        // $sampleChart->dataset('Points', 'line', $points);
        return view('home', compact('sampleChart'));
    }
}
