@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Smart Hotel - Dashboard</title>
</head>
<body>
    <h1>Welcome, {{ session('user_name') }}</h1>
    <p>Your role: {{ session('role') }}</p>

    <!-- Book Now button -->
    <a href="/rooms"><button>Book Now</button></a>
</body>
</html>
@endsection

