<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackOfficeController extends Controller
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


   public function index(Request $request)
   {
    $stocks = DB::select('select * from stocks');
    
    return view('backoffice', ['listOfStock' => $stocks]);

        //return view('backoffice');
    
    }

    public function showListOfStock(){
        $stocks = DB::select('select * from stock');
    
        return view('backoffice', ['listOfStock' => $stocks]);
    }


    public function insertButton(){

        

    }

    public function updateButton(){

    }

}
