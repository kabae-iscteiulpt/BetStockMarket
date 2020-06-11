@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
        <h1>BackOffice for StockMarket</h1>
        <p>Use the layouts to insert or update the stock values!!!</p> 
  </div>
      
    <div class="container">
		<div class="row">
			<div class="col-sm-4">
              <h3>Stock_ID</h3>
                <div class="form-group">
                  <input type="number" class="form-control" id="stockID">
                </div>
                <button type="button" class="btn btn-primary" name="insertButtonBackoffice" style= background-color:steelblue>Insert</button>
                <button type="button" class="btn btn-primary" name="updateButtonBackoffice" style= background-color:steelblue>Update</button>
                <button type="button" class="btn btn-primary" name="deleteButtonBackoffice" style= background-color:steelblue>Delete</button>
			</div>
			<div class="col-sm-4">
                  <h3>Stock_Value</h3>
                  <div class="form-group">
                      <input type="number" class="form-control" id="stockValue">
                  </div>
			</div>
                <div class="col-sm-4">
                  <h3>Company_Symbol</h3>
					<div class="form-group">
                      <input type="number" class="form-control" id="companySymbol">
					</div>
                </div>

		</div> 
  </div>

  <br>
<div class="container">
  <h2>List of stock:</h2>
  
  <table class="table">
	<thead>
		<tr>
		<th>id</th>
		<th>name</th>
		<th>symbol</th>
		<th>stockvaluebefore</th>
		<th>currentstockvalue</th>
		<th>created_at</th>
		<th>updated_at</th>   
		</tr>
    </thead>
    <tbody>
  @foreach($listOfStock as $key => $data)
		<tr>    
		<th>{{$data->id}}</th>
		<th>{{$data->name}}</th>
		<th>{{$data->symbol}}</th>
		<th>{{$data->stockvaluebefore}}</th>
		<th>{{$data->currentstockvalue}}</th>
		<th>{{$data->created_at}}</th>
		<th>{{$data->updated_at}}</th>         
		</tr>
@endforeach
    </tbody>
  </table>
</div>

@endsection