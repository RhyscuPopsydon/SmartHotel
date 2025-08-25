<!DOCTYPE html>
<html>
<head>
    <title>Smart Hotel - Dashboard</title>
</head>
<body>
    <h1>Welcome, {{ session('user_name') }}</h1>
    <p>Your role: {{ session('role') }}</p>

    <a href="/logout"><button>Logout</button></a>
</body>
</html>
