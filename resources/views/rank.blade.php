@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Rank of all Users</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        Ranks
                    <hr>
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">#Bets</th>
                                <th scope="col">Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>0</td>
                                    <td>{{$user->points}}</td>
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
