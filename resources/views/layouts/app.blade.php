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
</body>
</html>
