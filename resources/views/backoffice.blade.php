<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bet On Stock Market') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
             <div class="jumbotron text-center">
        <h1>BackOffice for StockMarket</h1>
        <p>Use the layouts below to insert or update the stock values!!!</p> 
  </div>
  <form name="form" action="/insertStock" method="POST">
    {{csrf_field()}}
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
            <h3>Name</h3>
              <div class="form-group">
                <input type="text" class="form-control" name="nameCompany">
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
		<th>name</th>
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
		<th>{{$data->name}}</th>
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
        </main>
    </div>
</body>
</html>
