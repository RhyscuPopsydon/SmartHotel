<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandeur Suites - Member Registration</title>
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
        
        .signup-container {
            display: flex;
            width: 900px;
            height: 600px;
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(17, 35, 59, 0.2);
        }
        
        .signup-image {
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
        
        .signup-form {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow-y: auto;
        }
        
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
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
            margin-bottom: 25px;
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
            margin-bottom: 15px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: #11233B;
            font-size: 0.9rem;
        }
        
        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 0.95rem;
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
        
        .btn-signup {
            background-color: #11233B;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            margin-top: 10px;
        }
        
        .btn-signup:hover {
            background-color: #0a1727;
        }
        
        .btn-signup:disabled {
            background-color: #7a8a9c;
            cursor: not-allowed;
        }
        
        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 0.9rem;
        }
        
        .login-link a {
            color: #11233B;
            text-decoration: none;
            font-weight: 500;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        .alert {
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            font-size: 0.9rem;
        }
        
        .alert-success {
            background-color: #e9f7ef;
            color: #2a7d2a;
        }
        
        .alert-error {
            background-color: #ffebee;
            color: #d32f2f;
        }
        
        .alert i {
            margin-right: 10px;
        }
        
        .form-row {
            display: flex;
            gap: 15px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        .terms-container {
            margin: 15px 0;
            display: flex;
            align-items: flex-start;
        }
        
        .terms-checkbox {
            margin-right: 10px;
            margin-top: 3px;
        }
        
        .terms-label {
            font-size: 0.85rem;
            color: #666;
            line-height: 1.4;
        }
        
        .terms-link {
            color: #11233B;
            cursor: pointer;
            text-decoration: underline;
            font-weight: 500;
        }
        
        .terms-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        
        .terms-content {
            background-color: #fff;
            width: 80%;
            max-width: 700px;
            max-height: 80vh;
            border-radius: 10px;
            padding: 30px;
            overflow-y: auto;
            position: relative;
        }
        
        .terms-close {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 1.5rem;
            cursor: pointer;
            color: #777;
        }
        
        .terms-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #11233B;
            padding-right: 30px;
        }
        
        .terms-text {
            font-size: 0.85rem;
            line-height: 1.6;
            color: #555;
        }
        
        .terms-text h3 {
            margin: 15px 0 8px 0;
            color: #11233B;
            font-size: 1.1rem;
        }
        
        .terms-text p {
            margin-bottom: 10px;
        }
        
        .terms-text ul {
            margin: 10px 0;
            padding-left: 20px;
        }
        
        .terms-text li {
            margin-bottom: 5px;
        }
        
        @media (max-width: 900px) {
            .signup-container {
                flex-direction: column;
                width: 100%;
                height: auto;
            }
            
            .signup-image {
                display: none;
            }
            
            .signup-form {
                padding: 30px;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .terms-content {
                width: 95%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <div class="signup-image">
            <h3 class="hotel-tagline">Experience Luxury Reimagined</h3>
            <ul class="hotel-features">
                <li><i class="fas fa-concierge-bell"></i> 24/7 Concierge Service</li>
                <li><i class="fas fa-wifi"></i> High-Speed Internet</li>
                <li><i class="fas fa-swimming-pool"></i> Infinity Pool & Spa</li>
                <li><i class="fas fa-utensils"></i> Award-Winning Restaurants</li>
                <li><i class="fas fa-map-marker-alt"></i> Prime City Center Location</li>
            </ul>
        </div>
        
        <div class="signup-form">
            <div class="logo">
                <i class="fas fa-hotel"></i>
                <span class="logo-text">Grandeur Suites</span>
            </div>
            
            <div class="welcome-text">
                <h2>Create Account</h2>
                <p>Join our exclusive membership to enjoy personalized services, special rates, and member-only benefits.</p>
            </div>
            
            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i> Please correct the following errors:
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form name="signupForm" method="POST" action="/signup" onsubmit="return validateSignup()">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                </div>
                
                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" id="contact_number" name="contact_number" placeholder="Enter your contact number" required>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="password-wrapper">
                            <input type="password" id="password" name="password" placeholder="Create a password" required>
                            <i class="fa fa-eye" id="togglePassword" onclick="togglePassword('password', 'togglePassword')"></i>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <div class="password-wrapper">
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                            <i class="fa fa-eye" id="toggleConfirm" onclick="togglePassword('password_confirmation', 'toggleConfirm')"></i>
                        </div>
                    </div>
                </div>
                
                <div class="terms-container">
                    <input type="checkbox" id="terms" name="terms" class="terms-checkbox" required>
                    <label for="terms" class="terms-label">
                        I have read and agree to the <span class="terms-link" onclick="openTerms()">Terms and Conditions</span> and Privacy Policy
                    </label>
                </div>
                
                <button type="submit" class="btn-signup" id="signup-button">Create Account</button>
            </form>
            
            <div class="login-link">
                <p>Already have an account? <a href="/login">Sign In</a></p>
            </div>
        </div>
    </div>

    <div class="terms-modal" id="terms-modal">
        <div class="terms-content">
            <span class="terms-close" onclick="closeTerms()">&times;</span>
            <h2 class="terms-title">Terms and Conditions</h2>
            <div class="terms-text">
                <p>Last updated: August 26, 2023</p>
                
                <h3>1. Membership Eligibility</h3>
                <p>To create an account with Grandeur Suites, you must be at least 18 years of age and possess the legal authority to enter into binding contracts.</p>
                
                <h3>2. Account Registration</h3>
                <p>You agree to provide accurate, current, and complete information during the registration process and to update such information to keep it accurate, current, and complete.</p>
                
                <h3>3. Privacy Policy</h3>
                <p>Your personal information will be used in accordance with our Privacy Policy, which explains how we collect, use, and protect your personal data.</p>
                
                <h3>4. Member Responsibilities</h3>
                <p>You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account.</p>
                
                <h3>5. Booking and Cancellation Policies</h3>
                <p>All reservations are subject to availability and our booking policies. Cancellation policies vary by rate type and dates of stay.</p>
                
                <h3>6. Loyalty Program</h3>
                <p>Participation in our loyalty program is subject to additional terms and conditions which may change from time to time.</p>
                
                <h3>7. Intellectual Property</h3>
                <p>All content on this website, including text, graphics, logos, and images, is the property of Grandeur Suites and protected by intellectual property laws.</p>
                
                <h3>8. Limitation of Liability</h3>
                <p>Grandeur Suites shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our services.</p>
                
                <h3>9. Governing Law</h3>
                <p>These terms shall be governed by and construed in accordance with the laws of the jurisdiction in which the hotel is located.</p>
                
                <h3>10. Changes to Terms</h3>
                <p>We reserve the right to modify these terms at any time. All changes will be effective immediately upon posting to the website.</p>
                
                <p>By creating an account, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions.</p>
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

    function validateSignup() {
        const form = document.forms["signupForm"];
        const name = form["name"].value;
        const email = form["email"].value;
        const contact = form["contact_number"].value;
        const password = form["password"].value;
        const confirm = form["password_confirmation"].value;
        const terms = form["terms"].checked;

        if(!name || !email || !contact || !password || !confirm){
            alert("All fields are required.");
            return false;
        }

        if(password !== confirm){
            alert("Passwords do not match.");
            return false;
        }

        if(!terms) {
            alert("You must accept the Terms and Conditions to create an account.");
            return false;
        }

        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if(!email.match(emailPattern)){
            alert("Invalid email format.");
            return false;
        }

        return true;
    }

    function openTerms() {
        document.getElementById('terms-modal').style.display = 'flex';
    }

    function closeTerms() {
        document.getElementById('terms-modal').style.display = 'none';
    }

    // Close modal if user clicks outside the content
    window.onclick = function(event) {
        const modal = document.getElementById('terms-modal');
        if (event.target === modal) {
            closeTerms();
        }
    }
    </script>
</body>
</html>