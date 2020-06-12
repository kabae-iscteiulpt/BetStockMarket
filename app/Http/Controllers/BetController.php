<?php

namespace App\Http\Controllers;

use App\Bet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class BetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = DB::table('stocks')->get();
        return view('bets.index', [
            'stocks' => $stocks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'amount' => 'required',
            'symbol' => 'required', // minimo = 1 e máximo = max_user_points
            'options' => 'required',
        ]);
        // (int)$request->get('amount');
        // auth()->user()->bets()->create($data);
        $bet = new Bet;
        $user = auth()->user();
        $bet->amount = (int)$request->get('amount');
        $bet->symbol = $request->input('symbol');
        $bet->bet_option = $request->input('options');
        $bet->user_id = $user->id;

        $bet->save();
        
        $newPoints = $user->points - (int)$request->get('amount');
        $user->points = $newPoints;
        $user->save();

        return redirect()->route('bets.index')
                        ->with('success','Bet created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function show(Bet $bet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function edit(Bet $bet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bet $bet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bet $bet)
    {
        //
    }
}
