<!DOCTYPE html>
<html>
<head>
    <title>Smart Hotel</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f8f8f8; margin: 0; padding: 0; }
        .navbar { background: #333; padding: 15px; color: white; }
        .navbar a { color: white; margin-right: 15px; text-decoration: none; }
        .container { padding: 20px; }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="/dashboard">Dashboard</a>
        <a href="/rooms">Rooms</a>
        <a href="/logout">Logout</a>
    </div>

    <div class="container">
        @yield('content')
    </div>
    
    @if(session('success'))
    <div style="background:#d4edda;color:#155724;padding:10px;border-radius:5px;margin-bottom:10px;">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div style="background:#f8d7da;color:#721c24;padding:10px;border-radius:5px;margin-bottom:10px;">
        {{ session('error') }}
    </div>
@endif
</body>
</html>
