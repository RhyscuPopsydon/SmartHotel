<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .password-wrapper {
            position: relative;
            display: inline-block;
        }
        .password-wrapper i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Signup</h2>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form name="signupForm" method="POST" action="/signup" onsubmit="return validateSignup()">
        @csrf
        <input type="text" name="name" placeholder="Full Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="contact_number" placeholder="Contact Number" required><br><br>

        <div class="password-wrapper">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <i class="fa fa-eye" id="togglePassword" onclick="togglePassword('password', 'togglePassword')"></i>
        </div><br><br>

        <div class="password-wrapper">
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
            <i class="fa fa-eye" id="toggleConfirm" onclick="togglePassword('password_confirmation', 'toggleConfirm')"></i>
        </div><br><br>

        <button type="submit">Signup</button>
    </form>

    <p>Already have an account? <a href="/login">Login</a></p>

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

        if(!name || !email || !contact || !password || !confirm){
            alert("All fields are required.");
            return false;
        }

        if(password !== confirm){
            alert("Passwords do not match.");
            return false;
        }

        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if(!email.match(emailPattern)){
            alert("Invalid email format.");
            return false;
        }

        return true;
    }
    </script>
</body>
</html>
