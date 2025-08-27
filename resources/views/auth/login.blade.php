<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandeur Suites - Member Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #CCD3DB;
            color: #11233B;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(rgba(204, 211, 219, 0.9), rgba(204, 211, 219, 0.9)), 
                              url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            padding: 20px;
        }
        
        .login-container {
            display: flex;
            width: 900px;
            height: 550px;
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(17, 35, 59, 0.2);
        }
        
        .login-image {
            flex: 1;
            background: linear-gradient(rgba(17, 35, 59, 0.7), rgba(17, 35, 59, 0.7)), 
                        url('https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 40px;
            color: #fff;
        }
        
        .hotel-tagline {
            font-size: 1.8rem;
            font-weight: 300;
            margin-bottom: 20px;
            line-height: 1.4;
        }
        
        .hotel-features {
            list-style: none;
        }
        
        .hotel-features li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 1rem;
        }
        
        .hotel-features i {
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .login-form {
            flex: 1;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .logo i {
            font-size: 2.5rem;
            color: #11233B;
            margin-right: 10px;
        }
        
        .logo-text {
            font-size: 1.8rem;
            font-weight: 600;
            color: #11233B;
        }
        
        .welcome-text {
            margin-bottom: 30px;
        }
        
        .welcome-text h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #11233B;
        }
        
        .welcome-text p {
            color: #666;
            line-height: 1.6;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #11233B;
        }
        
        .form-group input {
            width: 100%;
            padding: 15px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #11233B;
            box-shadow: 0 0 0 2px rgba(17, 35, 59, 0.2);
        }
        
        .password-wrapper {
            position: relative;
        }
        
        .password-wrapper i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #777;
        }
        
        .btn-login {
            background-color: #11233B;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            margin-top: 10px;
        }
        
        .btn-login:hover {
            background-color: #0a1727;
        }
        
        .signup-link {
            text-align: center;
            margin-top: 25px;
            color: #666;
        }
        
        .signup-link a {
            color: #11233B;
            text-decoration: none;
            font-weight: 500;
        }
        
        .signup-link a:hover {
            text-decoration: underline;
        }
        
        .error-message {
            background-color: #ffebee;
            color: #d32f2f;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .error-message i {
            margin-right: 10px;
        }
        
        @media (max-width: 900px) {
            .login-container {
                flex-direction: column;
                width: 100%;
                height: auto;
            }
            
            .login-image {
                display: none;
            }
            
            .login-form {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-image">
            <h3 class="hotel-tagline">Experience Luxury Reimagined</h3>
            <ul class="hotel-features">
                <li><i class="fas fa-concierge-bell"></i> 24/7 Concierge Service</li>
                <li><i class="fas fa-wifi"></i> High-Speed Internet</li>
                <li><i class="fas fa-swimming-pool"></i> Infinity Pool & Spa</li>
                <li><i class="fas fa-utensils"></i> Award-Winning Restaurants</li>
                <li><i class="fas fa-map-marker-alt"></i> Prime City Center Location</li>
            </ul>
        </div>
        
        <div class="login-form">
            <div class="logo">
                <i class="fas fa-hotel"></i>
                <span class="logo-text">Smart Hotel</span>
            </div>
            
            <div class="welcome-text">
                <h2>Welcome Back</h2>
                <p>Sign in to access your account and manage your bookings, preferences, and exclusive member benefits.</p>
            </div>
            
            @if(session('error'))
                <div class="error-message">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>{{ session('error') }}</span>
                </div>
            @endif
            
            <form method="POST" action="/login">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                </div>
                
                <div class="form-group">
                    <label for="login_password">Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="login_password" name="password" placeholder="Enter your password" required>
                        <i class="fa fa-eye" id="toggleLogin" onclick="togglePassword('login_password', 'toggleLogin')"></i>
                    </div>
                </div>
                
                <button type="submit" class="btn-login">Sign In</button>
            </form>
            
            <div class="signup-link">
                <p>No account? <a href="/signup">Create one here</a></p>
            </div>
        </div>
    </div>

    <script>
    function togglePassword(inputId, iconId) {
        const input = document.getElementById(inputId);
        const icon = document.getElementById(iconId);

        if(input.type === "password") {
            input.type = "text";
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = "password";
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
    </script>
</body>
</html>