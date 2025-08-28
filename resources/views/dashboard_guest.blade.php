<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Hotel System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            flex-direction: column;
        }
        
        .header {
            background-color: #11233B;
            color: #CCD3DB;
            padding: 1.2rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.6rem;
            font-weight: 600;
        }
        
        .logo i {
            color: #CCD3DB;
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
        }
        
        .nav-links a {
            color: #CCD3DB;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: #fff;
        }
        
        .hero {
            background: linear-gradient(rgba(17, 35, 59, 0.8), rgba(17, 35, 59, 0.8)), 
                        url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            padding: 3rem 2rem;
            text-align: center;
            color: #fff;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 300;
        }
        
        .hero p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto 2rem;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1400px;
            margin: 2rem auto;
            padding: 0 1.5rem;
            flex-grow: 1;
        }
        
        .dashboard {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }
        
        .card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(17, 35, 59, 0.1);
            transition: transform 0.3s;
            cursor: pointer;
            width: 380px;
            display: flex;
            flex-direction: column;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-header {
            background-color: #11233B;
            color: #CCD3DB;
            padding: 1.2rem;
            font-size: 1.2rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .card-body {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .btn {
            display: inline-block;
            background-color: #11233B;
            color: #CCD3DB;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            margin-top: auto;
            text-align: center;
        }
        
        .btn:hover {
            background-color: #0d1a2a;
            color: #fff;
        }
        
        .btn-light {
            background-color: #CCD3DB;
            color: #11233B;
        }
        
        .btn-light:hover {
            background-color: #b8c2cd;
        }
        
        .auth-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }
        
        .room-features {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 1.2rem 0;
        }
        
        .feature {
            display: flex;
            align-items: center;
            gap: 8px;
            width: 100%;
            margin-bottom: 0.5rem;
        }
        
        .feature i {
            color: #11233B;
            font-size: 1.1rem;
            min-width: 24px;
        }
        
        .footer {
            background-color: #11233B;
            color: #CCD3DB;
            text-align: center;
            padding: 1.8rem;
            margin-top: auto;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 1.2rem 0;
            flex-wrap: wrap;
        }
        
        .footer-links a {
            color: #CCD3DB;
            text-decoration: none;
        }
        
        .footer-links a:hover {
            text-decoration: underline;
        }
        
        .copyright {
            margin-top: 1.2rem;
            font-size: 0.9rem;
        }
        
        .branch-location {
            margin: 1rem 0;
            padding: 0.8rem;
            border-left: 3px solid #11233B;
            background-color: #f8f9fa;
            border-radius: 0 4px 4px 0;
        }
        
        .gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.6rem;
            margin: 1rem 0;
        }
        
        .gallery img {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-radius: 4px;
            transition: transform 0.3s;
        }
        
        .gallery img:hover {
            transform: scale(1.05);
        }
        
        .comment {
            background-color: #f8f9fa;
            padding: 1rem;
            border-radius: 5px;
            margin: 1rem 0;
        }
        
        .comment-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .rating {
            color: #ffc107;
        }
        
        .view-more {
            color: #11233B;
            text-decoration: none;
            display: block;
            text-align: right;
            margin-top: 1rem;
            font-weight: 500;
        }
        
        .view-more:hover {
            text-decoration: underline;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.2rem;
            margin-top: 1rem;
        }
        
        .social-links a {
            color: #CCD3DB;
            font-size: 1.2rem;
            transition: color 0.3s;
        }
        
        .social-links a:hover {
            color: #fff;
        }
        
        @media (max-width: 1200px) {
            .dashboard {
                justify-content: space-around;
            }
            
            .card {
                width: 350px;
            }
        }
        
        @media (max-width: 900px) {
            .dashboard {
                flex-direction: column;
                align-items: center;
            }
            
            .card {
                width: 100%;
                max-width: 500px;
            }
            
            .nav-links {
                display: none;
            }
        }
        
        @media (max-width: 600px) {
            .hero {
                padding: 2rem 1rem;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .auth-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .gallery {
                grid-template-columns: 1fr;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <i class="fas fa-hotel"></i>
            <span>Smart Hotel</span>
        </div>
        <nav class="nav-links">
            <a href="#">Rooms</a>
            <a href="#">Amenities</a>
            <a href="#">Dining</a>
            <a href="#">Contact</a>
        </nav>
    </header>
    
    <section class="hero">
        <h1>Experience Luxury Across Our Locations</h1>
        <p>Discover our exquisite hotel branches around the world, explore our photo gallery, and share your experience with us.</p>
        <div class="auth-buttons">
            <a href="/login" class="btn"><i class="fas fa-sign-in-alt"></i> Login</a>
            <a href="/signup" class="btn btn-light"><i class="fas fa-user-plus"></i> Create Account</a>
        </div>
    </section>
    
    <div class="container">
        <div class="dashboard">
            <div class="card" onclick="window.location.href='/branches'">
                <div class="card-header">
                    <span><i class="fas fa-map-marker-alt"></i> Our Branches</span>
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="card-body">
                    <p>Discover our luxurious locations around the world</p>
                    <div class="branch-location">
                        <h3>New York City</h3>
                        <div class="feature">
                            <i class="fas fa-map-pin"></i>
                            <span>5th Avenue, Manhattan</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-phone"></i>
                            <span>+1 212-555-7890</span>
                        </div>
                    </div>
                    <div class="branch-location">
                        <h3>Paris</h3>
                        <div class="feature">
                            <i class="fas fa-map-pin"></i>
                            <span>Champs-Élysées</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-phone"></i>
                            <span>+33 1 42 86 13 57</span>
                        </div>
                    </div>
                    <a href="/branches" class="view-more">View all 12 locations →</a>
                </div>
            </div>
            
            <div class="card" onclick="window.location.href='/gallery'">
                <div class="card-header">
                    <span><i class="fas fa-camera"></i> Photo Gallery</span>
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="card-body">
                    <p>Explore our luxurious accommodations and amenities</p>
                    <div class="gallery">
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Luxury Suite">
                        <img src="https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Hotel Pool">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Hotel Restaurant">
                        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Spa Area">
                    </div>
                    <a href="/gallery" class="view-more">View full gallery →</a>
                </div>
            </div>
            
            <div class="card" onclick="window.location.href='/feedback'">
                <div class="card-header">
                    <span><i class="fas fa-comments"></i> Comments & Suggestions</span>
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="card-body">
                    <p>Share your experience or suggestions for improvement</p>
                    
                    <div class="comment">
                        <div class="comment-header">
                            <span>Robert Johnson</span>
                            <span class="rating">★★★★★</span>
                        </div>
                        <p>The spa services were exceptional! Will definitely return.</p>
                    </div>
                    
                    <div class="comment">
                        <div class="comment-header">
                            <span>Sarah Williams</span>
                            <span class="rating">★★★★☆</span>
                        </div>
                        <p>Beautiful room, but the WiFi could be faster in the upper floors.</p>
                    </div>
                    
                    <a href="/feedback" class="btn">Share Your Feedback</a>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Accessibility</a>
                <a href="#">Careers</a>
                <a href="#">Gift Cards</a>
            </div>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="copyright">
                &copy; 2025 Smart Hotel. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        // Simple click handling for the cards
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.addEventListener('click', function() {
                    const url = this.getAttribute('onclick').split("'")[1];
                    window.location.href = url;
                });
            });
        });
    </script>
</body>
</html>