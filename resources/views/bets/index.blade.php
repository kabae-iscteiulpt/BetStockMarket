@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        Stocks
                    <hr>
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Symbol</th>
                                <th scope="col">Yesterday</th>
                                <th scope="col">Today</th>
                                <th scope="col">Bet</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stocks as $stock)
                                <tr class='clickable-row'>
                                    <td>{{$stock->name}}</td>
                                    <td class="symbol" data-symbol-id="s-id">{{$stock->symbol}}</td>
                                    <td>{{$stock->stockvaluebefore}}</td>
                                    <td>{{$stock->currentstockvalue}}</td>
                                    <td><a class="btn btn-primary" href="{{ route('bets.create') }}">Bet</a></td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="chart-container">
                <canvas id="mycanvas"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
