@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo-shadow.png') !!}" alt="" width="72" height="57">
    
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
                @if($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password"required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="contactFirstName" value="{{ old('contactFirstName') }}" placeholder="Firstname" required="required" autofocus>
            <label for="floatingName">First Name</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="contactLastName" value="{{ old('contactLastName') }}" placeholder="Lastname" required="required" autofocus>
            <label for="floatingName">Last Name</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone Number" required="required" autofocus>
            <label for="floatingName">Phone number</label>
        </div>

        <h1 class="h3 mb-3 fw-normal">Company Details</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="customerName" value="{{ old('customerName') }}" placeholder="Company Name" required="required" autofocus>
            <label for="floatingName">Company Name</label>
            @if ($errors->has('customerName'))
                <span class="text-danger text-left">{{ $errors->first('customerName') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="addressLine1" value="{{ old('addressLine1') }}" placeholder="Address Line 1" required="required" autofocus>
            <label for="floatingName">Address Line 1</label>
            @if ($errors->has('addressLine1'))
                <span class="text-danger text-left">{{ $errors->first('addressLine1') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="addressLine2" value="{{ old('addressLine2') }}" placeholder="Address Line 2" required="required" autofocus>
            <label for="floatingName">Address Line 2</label>
            @if ($errors->has('addressLine2'))
                <span class="text-danger text-left">{{ $errors->first('addressLine2') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="country" value="{{ old('country') }}" placeholder="Country" required="required" autofocus>
            <label for="floatingName">Country</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="state" value="{{ old('state') }}" placeholder="State" required="required" autofocus>
            <label for="floatingName">State</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="City" required="required" autofocus>
            <label for="floatingName">City</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="postalCode" value="{{ old('postalCode') }}" placeholder="Postal Code" required="required" autofocus>
            <label for="floatingName">Postal Code</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        @include('auth.partials.copy')
    </form>
@endsection
