@extends('layout.loginLayout')

@section('title')
    Login Page
@endsection

@section('header')

@endsection

@section('content')

    <form class="form-signin" method="POST" action="/checkLogin">
        @csrf
        <img src="images/AntarDoc.png" width="200" alt="">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username">
        @error('username')
            <div class="alert-danger">{{ $message }}</div>
        @enderror
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
        @error('password')
            <div class="alert-danger">{{ $message }}</div>
        @enderror
        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; Software Development Project - 2021</p>
    </form>
@endsection

@section('footer')

@endsection
