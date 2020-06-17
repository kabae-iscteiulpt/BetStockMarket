<?php 

namespace App\Http\Controllers;
use App\Charts\UserChart2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{

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
        $user_points = DB::table('users_history')->where('user_id', auth()->user()->id)->select('points')->get()->toArray();
        $points = json_decode(json_encode($user_points), true);
        $points2 = [];
        for( $i= 0; $i < count($points); $i++){
            $points2[$i] = (int)$points[$i]['points'];
        }

        $created_at = DB::table('users_history')->where('user_id', auth()->user()->id)->select('created_at')->get()->toArray();
        $dates = json_decode(json_encode($created_at), true);
        $dates2 = [];
        for( $i= 0; $i < count($dates); $i++){
            $dates2[$i] = $dates[$i]['created_at'];
        }

        //Adicionar items a ultima posição do array
        array_push($points2, auth()->user()->points);
        array_push($dates2, 'Now');

        $sampleChart = new UserChart2;
        $sampleChart->labels($dates2);
        $sampleChart->dataset('Points', 'line', $points2);
        return view('profile', compact('sampleChart'));
    }
}

?>