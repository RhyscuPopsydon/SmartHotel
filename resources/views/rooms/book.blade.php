<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve Room {{ $room->room_number }} - Grand Ocean Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #CCD3DB;  /* Silver */
            --secondary: #11233B; /* Navy blue */
            --accent: #d4af37;
            --light: #f8f5f0;
            --dark: #2c3e50;
        }
        
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            padding: 20px;
        }
        
        .booking-container {
            max-width: 600px;
            margin: 40px auto;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3);
            animation: fadeIn 0.8s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .booking-header {
            background: var(--secondary); /* Navy blue */
            color: white;
            padding: 25px;
            text-align: center;
            position: relative;
        }
        
        .booking-header::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            background: var(--secondary); /* Navy blue */
            border-radius: 50%;
        }
        
        .booking-header h2 {
            margin: 0;
            font-weight: 600;
            letter-spacing: 1px;
        }
        
        .booking-header p {
            margin: 5px 0 0;
            opacity: 0.9;
            font-size: 0.95rem;
        }
        
        .booking-body {
            padding: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
            font-size: 0.9rem;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
            background: #f9f9f9;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary); /* Silver */
            box-shadow: 0 0 0 3px rgba(204, 211, 219, 0.4); /* Lighter silver shadow */
        }
        
        .form-control[readonly] {
            background-color: #f0f0f0;
            color: #666;
        }
        
        textarea.form-control {
            min-height: 100px;
            resize: vertical;
        }
        
        .input-icon {
            position: absolute;
            right: 15px;
            top: 38px;
            color: var(--secondary); /* Navy blue */
        }
        
        .btn-book {
            background: linear-gradient(135deg, var(--primary), #a8b4c4); /* Silver gradient */
            color: var(--secondary); /* Navy blue text */
            border: none;
            padding: 15px;
            border-radius: 8px;
            width: 100%;
            font-size: 1.1rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(204, 211, 219, 0.6); /* Silver shadow */
        }
        
        .btn-book:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 20px rgba(204, 211, 219, 0.8); /* Brighter silver shadow */
            background: linear-gradient(135deg, #d5dbe3, #b8c2cf); /* Lighter silver gradient */
            color: #0a1a2d; /* Darker navy blue text */
        }
        
        .room-details {
            background: var(--light);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            border-left: 4px solid var(--primary); /* Silver */
        }
        
        .room-icon {
            background: var(--secondary); /* Navy blue */
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.2rem;
        }
        
        .room-info h4 {
            margin: 0;
            color: var(--secondary); /* Navy blue */
        }
        
        .room-info p {
            margin: 5px 0 0;
            color: #666;
        }
        
        .modal-content {
            border-radius: 15px;
            overflow: hidden;
            border: none;
        }
        
        .modal-header {
            background: var(--secondary); /* Navy blue */
            color: white;
            border-bottom: none;
            padding: 20px;
        }
        
        .modal-title {
            font-weight: 600;
        }
        
        .modal-body {
            padding: 30px;
            text-align: center;
            font-size: 1.1rem;
        }
        
        .modal-icon {
            font-size: 4rem;
            color: var(--primary); /* Silver */
            margin-bottom: 20px;
        }
        
        .modal-footer {
            border-top: none;
            padding: 20px;
            justify-content: center;
        }
        
        .btn-modal {
            background: var(--secondary); /* Navy blue */
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 6px;
            font-weight: 500;
        }
        
        .btn-modal:hover {
            background: #0a1a2d; /* Darker navy blue */
            color: white;
        }
        
        @media (max-width: 576px) {
            .booking-container {
                margin: 20px auto;
            }
            
            .booking-body {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="booking-container">
        <div class="booking-header">
            <h2><i class="fas fa-calendar-check me-2"></i>Reserve Your Stay</h2>
            <p>Room {{ $room->room_number }} - {{ $room->classification }}</p>
        </div>
        
        <div class="booking-body">
            <div class="room-details">
                <div class="room-icon">
                    <i class="fas fa-door-open"></i>
                </div>
                <div class="room-info">
                    <h4>Room {{ $room->room_number }}</h4>
                    <p>{{ $room->classification }} | {{ $room->capacity }} Guests | ₱{{ number_format($room->price, 2) }}/night</p>
                </div>
            </div>
            
            <form id="bookingForm" method="POST" action="{{ route('rooms.storeBooking', $room->id) }}">
                @csrf
                
                <div class="form-group">
                    <label for="name"><i class="fas fa-user me-1"></i> Full Name</label>
                    <input type="text" class="form-control" id="name" value="{{ $user->name }}" readonly>
                    <i class="fas fa-user input-icon"></i>
                </div>
                
                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope me-1"></i> Email Address</label>
                    <input type="email" class="form-control" id="email" value="{{ $user->email }}" readonly>
                    <i class="fas fa-envelope input-icon"></i>
                </div>
                
                <div class="form-group">
                    <label for="mobile"><i class="fas fa-phone me-1"></i> Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" value="{{ $user->contact_number }}" readonly>
                    <i class="fas fa-phone input-icon"></i>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="check_in_date"><i class="fas fa-calendar-day me-1"></i> Check-in Date</label>
                            <input type="date" class="form-control" id="check_in_date" name="check_in_date" required>
                            <i class="fas fa-calendar-day input-icon"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="check_out_date"><i class="fas fa-calendar-day me-1"></i> Check-out Date</label>
                            <input type="date" class="form-control" id="check_out_date" name="check_out_date" required>
                            <i class="fas fa-calendar-day input-icon"></i>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="check_in_time"><i class="fas fa-clock me-1"></i> Check-in Time</label>
                    <input type="time" class="form-control" id="check_in_time" name="check_in_time" required>
                    <i class="fas fa-clock input-icon"></i>
                </div>
                
                <div class="form-group">
                    <label for="notes"><i class="fas fa-sticky-note me-1"></i> Special Requests</label>
                    <textarea class="form-control" id="notes" name="notes" placeholder="Please let us know if you have any special requests or requirements..."></textarea>
                </div>
                
                <button type="button" id="confirmBookingBtn" class="btn-book">
                    <i class="fas fa-check-circle me-2"></i> Confirm Reservation
                </button>
            </form>
        </div>
    </div>

    <!-- Booking Confirmation Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Reservation Confirmed</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <p>Thank you for your reservation request!</p>
                    <p>Your booking for <strong>Room {{ $room->room_number }}</strong> has been received and is being processed.</p>
                    <p class="mb-0">We will send a confirmation to <strong>{{ $user->email }}</strong> shortly.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-modal" id="closeModalBtn">Continue</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Set minimum dates for check-in/check-out
            let today = new Date();
            today.setDate(today.getDate() + 1); // Start from tomorrow
            
            let yyyy = today.getFullYear();
            let mm = String(today.getMonth() + 1).padStart(2, '0');
            let dd = String(today.getDate()).padStart(2, '0');
            
            let minDate = `${yyyy}-${mm}-${dd}`;
            
            document.getElementById("check_in_date").setAttribute("min", minDate);
            document.getElementById("check_out_date").setAttribute("min", minDate);
            
            // Update check-out date min when check-in date changes
            document.getElementById("check_in_date").addEventListener("change", function() {
                document.getElementById("check_out_date").setAttribute("min", this.value);
            });
            
            const bookingForm = document.getElementById('bookingForm');
            const confirmBtn = document.getElementById('confirmBookingBtn');
            const bookingModal = new bootstrap.Modal(document.getElementById('bookingModal'));

            confirmBtn.addEventListener('click', function() {
                // Check if form is valid
                if (bookingForm.checkValidity()) {
                    // Show modal
                    bookingModal.show();
                } else {
                    // Trigger HTML5 validation messages
                    bookingForm.reportValidity();
                }
            });

            // Submit form when modal is closed
            document.getElementById('closeModalBtn').addEventListener('click', function() {
                bookingForm.submit();
            });
        });
    </script>
</body>
</html>