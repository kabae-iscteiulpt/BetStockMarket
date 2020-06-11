@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{ route('bets.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div>
                <div class="col-sm-10">
                    <div class="form-group" id="modal-info">
                        <label for="symbol">Betting on:</label>
                        <input type="text" name="symbol" value="">
                    </div>
                </div>
                @if ($errors->has('caption'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$errors->first('caption')}}</strong>
                    </span>
                @endif
                <div class="col-sm-10">
                    <div class="form-group">
                        <label for="amount" class="col-sm-2 col-form-label">Amount:</label>
                        <input type="number" name="amount" class="form-control" id="input" value="1">
                    </div>
                </div>
                <br>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="betRadio" id="gridRadios1" value="up">
                        <label class="form-check-label" for="gridRadios1">
                          Up
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="betRadio" id="gridRadios2" value="down">
                        <label class="form-check-label" for="gridRadios2">
                          Down
                    </label>
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Bet</button>
            </div>
        </form>
    </div>
</div>
@endsection