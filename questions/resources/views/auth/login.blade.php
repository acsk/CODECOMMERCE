@extends('template.appLogin')


@section('content')

    
  
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}

        <div class="form-group">
            <label>Email </label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
        </div>

        <div  class='form-group'>
            <label>Password </label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group">
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div>
            <button type="submit" class="btn btn-success">Login</button>
        </div>
    </form>
   


@endsection