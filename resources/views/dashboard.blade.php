@extends("theme.default")

@section("title", "Dashboard")

@section("content")
@session("success")
    <div class="alert alert-succes">{{$value}}</div>
@endsession
<h1> Hi {{auth()->user()->name}}</h1>

<a href="{{ route('logout') }}">Log out</a>

@endsection