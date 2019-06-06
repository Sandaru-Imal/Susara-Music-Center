@extends('layout.main')

@section('title', 'Shopping Cart')

@section('content')
  @if(Session::has('cart'))
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
                @foreach($instruments as $instrument)
                    <ul class="list-group">
                      <li class="list-group-item">
                        <span class="badge">{{ $instrument['qty'] }}</span>
                        <strong>{{ $instrument['item']['title'] }}</strong>
                        <span class="label label-success">price</span>
                        <!-- <span class="label label-success">{{ $instrument['price'] }}</span> -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action <span class="caret"></span>
                          </button>
                            <ul class="dropdown-menu">
                              <li><a href="#">Reduce by 1</a></li>
                              <li><a href="#">Reduce all</a></li>
                            </ul>
                        </div>
                      </li>
                    </ul>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
                @foreach($instruments as $instrument)
                    <ul class="list-group">
                      <li class="list-group-item">
                        <span class="badge">{{ $instrument['qty'] }}</span>
                        <strong>{{ $instrument['item']['title'] }}</strong>
                        <span class="label label-success">price</span>
                        <!-- <span class="label label-success">{{ $instrument['price'] }}</span> -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action <span class="caret"></span>
                          </button>
                            <ul class="dropdown-menu">
                              <li><a href="#">Reduce by 1</a></li>
                              <li><a href="#">Reduce all</a></li>
                            </ul>
                        </div>
                      </li>
                    </ul>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
          <strong>Total:</strong>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <button type="button" class="btn btn-success">CheckOut</button>
        </div>
    </div>
  @else
      <div class="row">
          <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
              <h2>No items in Cart!</h2>
          </div>
      </div>
  @endif
@endsection
