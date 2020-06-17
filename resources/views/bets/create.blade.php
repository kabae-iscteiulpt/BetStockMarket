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
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="options">
                          <option value="up">Up</option>
                          <option value="down">Down</option>
                        </select>
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