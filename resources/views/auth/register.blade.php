@extends("theme.default")

@section("title", "Register")

@section("content")
<h1>Register</h1>
<form action="{{ route('register.post') }}" method="post">
    @csrf
    <label for="name">Full name:</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Type your name">
    @error("name")
    <span class="alert alert-danger">
        <!-- <span> -->
        <li>{{ $message }}</li>
        <!-- </span> -->
    </span>
    @enderror
    <br><br>
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
    <label for="password_confirmation">Password confirm:</label><br>
    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Retype your password">
    @error("password_confirmation")
    <div class="alert alert-danger">
        <span>
            <li>{{ $message }}</li>
        </span>
    </div>
    @enderror
    <br><br>
    <button type="submit">Rigister</button>
</form>
<a href="{{ route('login') }}">Login</a>
@endsection