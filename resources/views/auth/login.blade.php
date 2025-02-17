@extends("theme.default")

@section("title", "Login")

@section("content")
<h1>Login</h1>
<form action="{{ route('login.post') }}" method="post">
    @csrf
    @session("error")
    <div class="alert alert-danger">
        <span>
            <li>{{ $value }}</li>
        </span>
    </div>
    @endsession
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value="{{ old('email')}}" placeholder="Type your email">
    @error("email")
    <div class="alert alert-danger">
        <span>
            <li>{{ $message }}</li>
        </span>
    </div>
    @enderror
    <br><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" placeholder="Type your password">
    @error("password")
    <div class="alert alert-danger">
        <span>
            <li>{{ $message }}</li>
        </span>
    </div>
    @enderror
    <br><br>
    <button type="submit">Login</button>
</form>
<a href="{{ route('register') }}">Register now</a>
@endsection