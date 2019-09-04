
@extends('layouts.app')

@section('content')
@foreach($customers as $customer)

<div class="container py-5">
<div class="card-header">{{ __('Edit My Profile') }}</div><br>

    <div class="row">
        <div class="col-md-10 mx-auto">
        <h1> {{ Auth::user()->fname }} {{ Auth::user()->lname }}</h1><br>
        <form class="form-horizontal" method="POST" action="{{ route('update.profile') }}">
            {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">First name</label>
                        <input type="text" class="form-control" id="inputFirstname" placeholder="First name" value="{{ $customer->fname }}" name="fname">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputLastname">Last name</label>
                        <input type="text" class="form-control" id="inputLastname" placeholder="Last name" value="{{ $customer->lname }}" name="lname">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="inputAddressLine1">NIC</label>
                        <input type="text" class="form-control" id="inputAddressLine1" placeholder="NIC Number" value="{{ $customer->nic }}" name="nic">
                    </div>
                    <div class="col-sm-4">
                        <label for="inputAddressLine2">Email</label>
                        <input type="text" class="form-control" id="inputAddressLine2" placeholder="Email" value="{{ $customer->email}}" name="email">
                    </div>

                    <div class="col-sm-4">
                        <label for="inputAddressLine2">Phone Number</label>
                        <input type="text" class="form-control" id="inputAddressLine2" placeholder="Phone Number" value="{{ $customer->phoneNo}}" name="phoneNo">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="inputCity">No</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="No" value="{{ $customer->no }}" name="no">
                    </div>
                    <div class="col-sm-4">
                        <label for="inputState">Street</label>
                        <input type="text" class="form-control" id="inputState" placeholder="Street" value="{{ $customer->street }}" name="street">
                    </div>
                    <div class="col-sm-5">
                        <label for="inputPostalCode">City</label>
                        <input type="text" class="form-control" id="inputPostalCode" placeholder="City" value="{{ $customer->city }}" name="city">
                    </div>
                </div>
                <br>
               
                <button type="submit" class="btn btn-primary">
                                        Update Profile
                                    </button>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection