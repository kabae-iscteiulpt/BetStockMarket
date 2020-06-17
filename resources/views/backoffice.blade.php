@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
        <h1>BackOffice for StockMarket</h1>
        <p>Use the layouts below to insert or update the stock values!!!</p> 
  </div>
  <form name="form" action="/insertStock" method="POST">
    {{csrf_field()}}
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
            <h3>Stock_ID</h3>
              <div class="form-group">
                <input type="number" class="form-control" name="stockID">
              </div>
        </div>
        <div class="col-sm-4">
            <h3>Stock_Value</h3>
              <div class="form-group">
                <input type="number" class="form-control" name="stockValue">
              </div>
        </div>
        <div class="col-sm-4">
            <h3>Company_Symbol</h3>
              <div class="form-group">
                <input type="text" class="form-control" name="companySymbol">
              </div>
        </div>
      </div> 
              <button type="submit" class="btn btn-primary" name="insertButtonBackoffice" style= background-color:steelblue>Insert</button>
    </div>
  </form>

  <br>
<div class="container">
  <h2>List of stock:</h2>
  
  <table class="table">
	<thead>
		<tr>
    <th>id</th>
		<th>stock_id</th>
		<th>symbol</th>
		<th>stockvaluebefore</th>
		<th>currentstockvalue</th>
		<th>created_at</th>
		<th>updated_at</th>   
    <th>delete</th>
		</tr>
    </thead>
    <tbody>
  @foreach($listOfStock as $key => $data)
		<tr>   
    <th>{{$data->id}}</th> 
		<th>{{$data->stock_id}}</th>
		<th>{{$data->symbol}}</th>
		<th>{{$data->stockvaluebefore}}</th>
		<th>{{$data->currentstockvalue}}</th>
		<th>{{$data->created_at}}</th>
    <th>{{$data->updated_at}}</th>
    <th>
    <form action="/deleteStock/{{$data->id}}" method="GET">
      {{ csrf_field() }}
     
      <th><button type="submit" class="btn btn-danger delete_stock" name="deleteButtonBackoffice">Delete</button></th>
    </form>
    </th>
    </tr>
@endforeach
    </tbody>
  </table>
</div>
@endsection