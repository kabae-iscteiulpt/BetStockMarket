<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

class BackOfficeController extends Controller
{
    
    /**
     * Create a new controller instance.
     * And validate if user is authenticated.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Method to show the backoffice view with thw list of stocks.
     *
     * @return backoffice view
     */
    public function index(Request $request)
    {

    $stocks = DB::select('select * from stocks');
    return view('backoffice', ['listOfStock' => $stocks]);

    }

    /**
     * Method to insert the stock into table stock.
     *
     * @return backoffice view
     */
    public function insertStock(Request $request){

        if (isset($_POST['insertButtonBackoffice'])) {

            $nameCompany =$request->input('nameCompany');
            $stock_value =$request->input('stockValue');
            $companySymbol =$request->input('companySymbol');
           
            if($nameCompany!=null&&$stock_value!=null&&$companySymbol!=null){
            $date = new DateTime();

            $data = array('name'=>$nameCompany,'symbol'=>$companySymbol,'stockvaluebefore'=>$stock_value,
            'currentstockvalue'=>$stock_value,'created_at'=>$date,'updated_at'=>$date);
            DB::table('stocks')->insert($data);
        }
            return redirect()->route('backoffice');
            
        } else {

            return redirect()->route('backoffice');

        }
    

    }  

}
