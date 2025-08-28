<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist Dashboard - Smart Hotel System</title>
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
            align-items: center;
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
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            color: #CCD3DB;
        }
        
        .user-info span {
            padding: 0.5rem 1rem;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
        }
        
        .container {
            max-width: 1400px;
            margin: 2rem auto;
            padding: 0 1.5rem;
            flex-grow: 1;
        }

        .page-header {
            background: linear-gradient(135deg, #11233B, #1a3454);
            color: #CCD3DB;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(17, 35, 59, 0.2);
        }

        .page-header h1 {
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
            font-weight: 300;
        }

        .page-header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .quick-actions {
            background: #fff;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(17, 35, 59, 0.1);
        }

        .quick-actions h3 {
            color: #11233B;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.3rem;
        }

        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: #11233B;
            color: #CCD3DB;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn:hover {
            background-color: #0d1a2a;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(17, 35, 59, 0.3);
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #11233B;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #138496;
        }

        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(17, 35, 59, 0.1);
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
        }

        .stat-card i {
            font-size: 2.5rem;
            color: #11233B;
            margin-bottom: 1rem;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #11233B;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #666;
            font-size: 0.9rem;
        }

        .reservations-section {
            background: #fff;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(17, 35, 59, 0.1);
            margin-bottom: 2rem;
        }

        .section-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 2rem;
            border-bottom: 2px solid #CCD3DB;
            padding-bottom: 1rem;
        }

        .section-header h2 {
            color: #11233B;
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .filters {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.7rem 1.5rem;
            border: 2px solid #11233B;
            background: transparent;
            color: #11233B;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 500;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: #11233B;
            color: #CCD3DB;
        }

        .reservations-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        .reservations-table th,
        .reservations-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        .reservations-table th {
            background-color: #f8f9fa;
            color: #11233B;
            font-weight: 600;
            position: sticky;
            top: 0;
        }

        .reservations-table tr:hover {
            background-color: #f8f9fa;
        }

        .status-badge {
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }

        .status-confirmed {
            background-color: #d4edda;
            color: #155724;
        }

        .status-checkedin {
            background-color: #cce5ff;
            color: #004085;
        }

        .status-checkedout {
            background-color: #f8d7da;
            color: #721c24;
        }

        .action-btns {
            display: flex;
            gap: 0.5rem;
        }

        .btn-sm {
            padding: 0.4rem 0.8rem;
            font-size: 0.8rem;
            border-radius: 5px;
        }

        .search-bar {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            align-items: center;
        }

        .search-input {
            flex: 1;
            padding: 0.8rem;
            border: 2px solid #CCD3DB;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s;
        }

        .search-input:focus {
            border-color: #11233B;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 2rem;
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            border-bottom: 2px solid #CCD3DB;
            padding-bottom: 1rem;
        }

        .close {
            color: #aaa;
            font-size: 2rem;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s;
        }

        .close:hover {
            color: #000;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #11233B;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #CCD3DB;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #11233B;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .footer {
            background-color: #11233B;
            color: #CCD3DB;
            text-align: center;
            padding: 1.8rem;
            margin-top: auto;
        }

        @media (max-width: 1200px) {
            .dashboard-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-cards {
                grid-template-columns: 1fr 1fr;
            }
            
            .reservations-table {
                font-size: 0.9rem;
            }
            
            .reservations-table th,
            .reservations-table td {
                padding: 0.5rem;
            }
            
            .action-btns {
                flex-direction: column;
            }
            
            .search-bar {
                flex-direction: column;
                align-items: stretch;
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
            <a href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="/rooms"><i class="fas fa-bed"></i> Rooms</a>
            <a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
            <div class="user-info">
                <span><i class="fas fa-user"></i> Receptionist</span>
                <span><i class="fas fa-user-tag"></i> Front Desk</span>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="page-header">
            <h1><i class="fas fa-concierge-bell"></i> Receptionist Dashboard</h1>
            <p>Manage reservations, check-ins, check-outs, and provide exceptional customer service</p>
        </div>

        <!-- Success/Error Messages -->
        <div id="alertContainer"></div>

        <!-- Stats Cards -->
        <div class="stats-cards">
            <div class="stat-card">
                <i class="fas fa-calendar-check"></i>
                <div class="stat-number">24</div>
                <div class="stat-label">Today's Arrivals</div>
            </div>
            <div class="stat-card">
                <i class="fas fa-calendar-times"></i>
                <div class="stat-number">18</div>
                <div class="stat-label">Today's Departures</div>
            </div>
            <div class="stat-card">
                <i class="fas fa-users"></i>
                <div class="stat-number">89</div>
                <div class="stat-label">Active Guests</div>
            </div>
            <div class="stat-card">
                <i class="fas fa-door-open"></i>
                <div class="stat-number">15</div>
                <div class="stat-label">Available Rooms</div>
            </div>
        </div>

        <!-- Dashboard Grid -->
        <div class="dashboard-grid">
            <!-- Quick Actions -->
            <div class="quick-actions">
                <h3><i class="fas fa-bolt"></i> Quick Actions</h3>
                <div class="action-buttons">
                    <button class="btn btn-success" onclick="openModal('newBookingModal')">
                        <i class="fas fa-plus"></i> New Booking
                    </button>
                    <button class="btn btn-info" onclick="openModal('walkInModal')">
                        <i class="fas fa-walking"></i> Walk-in Guest
                    </button>
                    <button class="btn btn-warning" onclick="openModal('roomStatusModal')">
                        <i class="fas fa-door-open"></i> Update Room Status
                    </button>
                </div>
            </div>

            <!-- Today's Check-ins -->
            <div class="quick-actions">
                <h3><i class="fas fa-sign-in-alt"></i> Today's Check-ins</h3>
                <div class="action-buttons">
                    <div style="max-height: 200px; overflow-y: auto;">
                        <div style="padding: 0.5rem; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
                            <span>John Doe - Room 101</span>
                            <button class="btn btn-sm btn-success" onclick="checkIn(1)">Check-in</button>
                        </div>
                        <div style="padding: 0.5rem; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
                            <span>Sarah Johnson - Room 205</span>
                            <button class="btn btn-sm btn-success" onclick="checkIn(2)">Check-in</button>
                        </div>
                        <div style="padding: 0.5rem; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
                            <span>Mike Wilson - Room 308</span>
                            <button class="btn btn-sm btn-success" onclick="checkIn(3)">Check-in</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Today's Check-outs -->
            <div class="quick-actions">
                <h3><i class="fas fa-sign-out-alt"></i> Today's Check-outs</h3>
                <div class="action-buttons">
                    <div style="max-height: 200px; overflow-y: auto;">
                        <div style="padding: 0.5rem; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
                            <span>Emma Davis - Room 102</span>
                            <button class="btn btn-sm btn-warning" onclick="checkOut(4)">Check-out</button>
                        </div>
                        <div style="padding: 0.5rem; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
                            <span>Robert Brown - Room 207</span>
                            <button class="btn btn-sm btn-warning" onclick="checkOut(5)">Check-out</button>
                        </div>
                        <div style="padding: 0.5rem; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
                            <span>Lisa Anderson - Room 310</span>
                            <button class="btn btn-sm btn-warning" onclick="checkOut(6)">Check-out</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reservations Management -->
        <div class="reservations-section">
            <div class="section-header">
                <h2><i class="fas fa-clipboard-list"></i> Reservations Management</h2>
            </div>

            <!-- Search and Filters -->
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search by guest name, room number, or booking ID..." id="searchInput">
                <button class="btn" onclick="searchReservations()">
                    <i class="fas fa-search"></i> Search
                </button>
            </div>

            <div class="filters">
                <button class="filter-btn active" onclick="filterReservations('all')">All</button>
                <button class="filter-btn" onclick="filterReservations('pending')">Pending</button>
                <button class="filter-btn" onclick="filterReservations('confirmed')">Confirmed</button>
                <button class="filter-btn" onclick="filterReservations('checkedin')">Checked-in</button>
                <button class="filter-btn" onclick="filterReservations('checkedout')">Checked-out</button>
            </div>

            <!-- Reservations Table -->
            <div style="overflow-x: auto;">
                <table class="reservations-table" id="reservationsTable">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Guest Name</th>
                            <th>Room</th>
                            <th>Check-in</th>
                            <th>Check-out</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="reservationsTableBody">
                        <tr>
                            <td>#BK001</td>
                            <td>John Doe</td>
                            <td>101 - Standard Room</td>
                            <td>2025-08-27</td>
                            <td>2025-08-30</td>
                            <td><span class="status-badge status-confirmed">Confirmed</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="btn btn-sm btn-success" onclick="checkIn(1)">Check-in</button>
                                    <button class="btn btn-sm btn-warning" onclick="editReservation(1)">Edit</button>
                                    <button class="btn btn-sm btn-danger" onclick="cancelReservation(1)">Cancel</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#BK002</td>
                            <td>Sarah Johnson</td>
                            <td>205 - Deluxe Room</td>
                            <td>2025-08-27</td>
                            <td>2025-08-29</td>
                            <td><span class="status-badge status-pending">Pending</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="btn btn-sm btn-info" onclick="confirmReservation(2)">Confirm</button>
                                    <button class="btn btn-sm btn-warning" onclick="editReservation(2)">Edit</button>
                                    <button class="btn btn-sm btn-danger" onclick="cancelReservation(2)">Cancel</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#BK003</td>
                            <td>Emma Davis</td>
                            <td>102 - Standard Room</td>
                            <td>2025-08-26</td>
                            <td>2025-08-27</td>
                            <td><span class="status-badge status-checkedin">Checked-in</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="btn btn-sm btn-warning" onclick="checkOut(3)">Check-out</button>
                                    <button class="btn btn-sm btn-info" onclick="viewDetails(3)">Details</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- New Booking Modal -->
    <div id="newBookingModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2><i class="fas fa-plus"></i> New Booking</h2>
                <span class="close" onclick="closeModal('newBookingModal')">&times;</span>
            </div>
            <form id="newBookingForm">
                <div class="form-row">
                    <div class="form-group">
                        <label>Guest Name</label>
                        <input type="text" id="guestName" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" id="phoneNumber" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email">
                    </div>
                    <div class="form-group">
                        <label>Room Type</label>
                        <select id="roomType" required>
                            <option value="">Select Room</option>
                            <option value="standard">Standard Room</option>
                            <option value="deluxe">Deluxe Room</option>
                            <option value="suite">Suite</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Check-in Date</label>
                        <input type="date" id="checkinDate" required>
                    </div>
                    <div class="form-group">
                        <label>Check-out Date</label>
                        <input type="date" id="checkoutDate" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Special Requests</label>
                    <textarea id="specialRequests" rows="3" placeholder="Any special requests or notes..."></textarea>
                </div>
                <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                    <button type="submit" class="btn btn-success" style="flex: 1;">
                        <i class="fas fa-save"></i> Create Booking
                    </button>
                    <button type="button" class="btn btn-secondary" onclick="closeModal('newBookingModal')" style="flex: 1;">
                        <i class="fas fa-times"></i> Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Walk-in Modal -->
    <div id="walkInModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2><i class="fas fa-walking"></i> Walk-in Guest</h2>
                <span class="close" onclick="closeModal('walkInModal')">&times;</span>
            </div>
            <form id="walkInForm">
                <div class="form-row">
                    <div class="form-group">
                        <label>Guest Name</label>
                        <input type="text" id="walkInGuestName" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" id="walkInPhone" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>ID/Passport Number</label>
                        <input type="text" id="idNumber" required>
                    </div>
                    <div class="form-group">
                        <label>Available Room</label>
                        <select id="availableRoom" required>
                            <option value="">Select Available Room</option>
                            <option value="101">101 - Standard Room</option>
                            <option value="205">205 - Deluxe Room</option>
                            <option value="308">308 - Suite</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Number of Nights</label>
                        <input type="number" id="numberOfNights" min="1" required>
                    </div>
                    <div class="form-group">
                        <label>Number of Guests</label>
                        <input type="number" id="numberOfGuests" min="1" required>
                    </div>
                </div>
                <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                    <button type="submit" class="btn btn-success" style="flex: 1;">
                        <i class="fas fa-check"></i> Check-in Now
                    </button>
                    <button type="button" class="btn btn-secondary" onclick="closeModal('walkInModal')" style="flex: 1;">
                        <i class="fas fa-times"></i> Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Room Status Modal -->
    <div id="roomStatusModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2><i class="fas fa-door-open"></i> Update Room Status</h2>
                <span class="close" onclick="closeModal('roomStatusModal')">&times;</span>
            </div>
            <div style="max-height: 400px; overflow-y: auto;">
                <table class="reservations-table">
                    <thead>
                        <tr>
                            <th>Room</th>
                            <th>Current Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>101</td>
                            <td><span class="status-badge status-confirmed">Occupied</span></td>
                            <td>
                                <select onchange="updateRoomStatus(101, this.value)">
                                    <option value="occupied">Occupied</option>
                                    <option value="cleaning">Cleaning</option>
                                    <option value="maintenance">Maintenance</option>
                                    <option value="available">Available</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td><span class="status-badge status-pending">Cleaning</span></td>
                            <td>
                                <select onchange="updateRoomStatus(102, this.value)">
                                    <option value="occupied">Occupied</option>
                                    <option value="cleaning" selected>Cleaning</option>
                                    <option value="maintenance">Maintenance</option>
                                    <option value="available">Available</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td><span class="status-badge status-confirmed">Available</span></td>
                            <td>
                                <select onchange="updateRoomStatus(103, this.value)">
                                    <option value="occupied">Occupied</option>
                                    <option value="cleaning">Cleaning</option>
                                    <option value="maintenance">Maintenance</option>
                                    <option value="available" selected>Available</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="copyright">
                &copy; 2025 Smart Hotel System. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        // Sample data for reservations
        let reservationsData = [
            {
                id: 1,
                bookingId: '#BK001',
                guestName: 'John Doe',
                room: '101 - Standard Room',
                checkin: '2025-08-27',
                checkout: '2025-08-30',
                status: 'confirmed'
            },
            {
                id: 2,
                bookingId: '#BK002',
                guestName: 'Sarah Johnson',
                room: '205 - Deluxe Room',
                checkin: '2025-08-27',
                checkout: '2025-08-29',
                status: 'pending'
            },
            {
                id: 3,
                bookingId: '#BK003',
                guestName: 'Emma Davis',
                room: '102 - Standard Room',
                checkin: '2025-08-26',
                checkout: '2025-08-27',
                status: 'checkedin'
            },
            {
                id: 4,
                bookingId: '#BK004',
                guestName: 'Mike Wilson',
                room: '308 - Suite',
                checkin: '2025-08-25',
                checkout: '2025-08-27',
                status: 'checkedout'
            },
            {
                id: 5,
                bookingId: '#BK005',
                guestName: 'Lisa Anderson',
                room: '210 - Deluxe Room',
                checkin: '2025-08-28',
                checkout: '2025-08-31',
                status: 'confirmed'
            }
        ];

        let currentFilter = 'all';

        // Modal functions
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'block';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        }

        // Show alert messages
        function showAlert(message, type = 'success') {
            const alertContainer = document.getElementById('alertContainer');
            const alert = document.createElement('div');
            alert.className = `alert alert-${type}`;
            alert.innerHTML = message;
            alertContainer.appendChild(alert);
            
            setTimeout(() => {
                alert.remove();
            }, 5000);
        }

        // Check-in function
        function checkIn(bookingId) {
            const reservation = reservationsData.find(r => r.id === bookingId);
            if (reservation) {
                reservation.status = 'checkedin';
                renderReservations();
                showAlert(`${reservation.guestName} has been successfully checked in to ${reservation.room}`);
            }
        }

        // Check-out function
        function checkOut(bookingId) {
            const reservation = reservationsData.find(r => r.id === bookingId);
            if (reservation) {
                reservation.status = 'checkedout';
                renderReservations();
                showAlert(`${reservation.guestName} has been successfully checked out from ${reservation.room}`);
            }
        }

        // Confirm reservation
        function confirmReservation(bookingId) {
            const reservation = reservationsData.find(r => r.id === bookingId);
            if (reservation) {
                reservation.status = 'confirmed';
                renderReservations();
                showAlert(`Reservation ${reservation.bookingId} has been confirmed`);
            }
        }

        // Cancel reservation
        function cancelReservation(bookingId) {
            if (confirm('Are you sure you want to cancel this reservation?')) {
                const index = reservationsData.findIndex(r => r.id === bookingId);
                if (index !== -1) {
                    const reservation = reservationsData[index];
                    reservationsData.splice(index, 1);
                    renderReservations();
                    showAlert(`Reservation ${reservation.bookingId} has been cancelled`, 'danger');
                }
            }
        }

        // Edit reservation
        function editReservation(bookingId) {
            showAlert('Edit functionality would open a detailed form for this reservation', 'info');
        }

        // View details
        function viewDetails(bookingId) {
            showAlert('Details view would show comprehensive guest and booking information', 'info');
        }

        // Update room status
        function updateRoomStatus(roomNumber, status) {
            showAlert(`Room ${roomNumber} status updated to ${status}`, 'success');
        }

        // Filter reservations
        function filterReservations(filter) {
            currentFilter = filter;
            
            // Update filter button states
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            renderReservations();
        }

        // Search reservations
        function searchReservations() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            renderReservations(searchTerm);
        }

        // Render reservations table
        function renderReservations(searchTerm = '') {
            const tbody = document.getElementById('reservationsTableBody');
            let filteredData = reservationsData;

            // Apply status filter
            if (currentFilter !== 'all') {
                filteredData = filteredData.filter(r => r.status === currentFilter);
            }

            // Apply search filter
            if (searchTerm) {
                filteredData = filteredData.filter(r => 
                    r.guestName.toLowerCase().includes(searchTerm) ||
                    r.bookingId.toLowerCase().includes(searchTerm) ||
                    r.room.toLowerCase().includes(searchTerm)
                );
            }

            tbody.innerHTML = '';

            if (filteredData.length === 0) {
                tbody.innerHTML = '<tr><td colspan="7" style="text-align: center; padding: 2rem; color: #666;">No reservations found</td></tr>';
                return;
            }

            filteredData.forEach(reservation => {
                const row = document.createElement('tr');
                
                const statusClass = `status-${reservation.status}`;
                const statusText = reservation.status.charAt(0).toUpperCase() + reservation.status.slice(1);
                
                let actionButtons = '';
                
                switch(reservation.status) {
                    case 'pending':
                        actionButtons = `
                            <button class="btn btn-sm btn-info" onclick="confirmReservation(${reservation.id})">Confirm</button>
                            <button class="btn btn-sm btn-warning" onclick="editReservation(${reservation.id})">Edit</button>
                            <button class="btn btn-sm btn-danger" onclick="cancelReservation(${reservation.id})">Cancel</button>
                        `;
                        break;
                    case 'confirmed':
                        actionButtons = `
                            <button class="btn btn-sm btn-success" onclick="checkIn(${reservation.id})">Check-in</button>
                            <button class="btn btn-sm btn-warning" onclick="editReservation(${reservation.id})">Edit</button>
                            <button class="btn btn-sm btn-danger" onclick="cancelReservation(${reservation.id})">Cancel</button>
                        `;
                        break;
                    case 'checkedin':
                        actionButtons = `
                            <button class="btn btn-sm btn-warning" onclick="checkOut(${reservation.id})">Check-out</button>
                            <button class="btn btn-sm btn-info" onclick="viewDetails(${reservation.id})">Details</button>
                        `;
                        break;
                    case 'checkedout':
                        actionButtons = `
                            <button class="btn btn-sm btn-info" onclick="viewDetails(${reservation.id})">Details</button>
                        `;
                        break;
                }

                row.innerHTML = `
                    <td>${reservation.bookingId}</td>
                    <td>${reservation.guestName}</td>
                    <td>${reservation.room}</td>
                    <td>${reservation.checkin}</td>
                    <td>${reservation.checkout}</td>
                    <td><span class="status-badge ${statusClass}">${statusText}</span></td>
                    <td><div class="action-btns">${actionButtons}</div></td>
                `;
                
                tbody.appendChild(row);
            });
        }

        // Form submissions
        document.getElementById('newBookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const guestName = document.getElementById('guestName').value;
            const roomType = document.getElementById('roomType').value;
            const checkinDate = document.getElementById('checkinDate').value;
            const checkoutDate = document.getElementById('checkoutDate').value;
            
            // Create new booking
            const newBooking = {
                id: reservationsData.length + 1,
                bookingId: `#BK${String(reservationsData.length + 1).padStart(3, '0')}`,
                guestName: guestName,
                room: `${Math.floor(Math.random() * 300) + 100} - ${roomType.charAt(0).toUpperCase() + roomType.slice(1)} Room`,
                checkin: checkinDate,
                checkout: checkoutDate,
                status: 'confirmed'
            };
            
            reservationsData.push(newBooking);
            renderReservations();
            closeModal('newBookingModal');
            showAlert(`New booking created for ${guestName}`, 'success');
            
            // Reset form
            this.reset();
        });

        document.getElementById('walkInForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const guestName = document.getElementById('walkInGuestName').value;
            const selectedRoom = document.getElementById('availableRoom').value;
            const numberOfNights = document.getElementById('numberOfNights').value;
            
            // Create new walk-in booking and check-in immediately
            const checkinDate = new Date().toISOString().split('T')[0];
            const checkoutDate = new Date(Date.now() + numberOfNights * 24 * 60 * 60 * 1000).toISOString().split('T')[0];
            
            const newWalkIn = {
                id: reservationsData.length + 1,
                bookingId: `#BK${String(reservationsData.length + 1).padStart(3, '0')}`,
                guestName: guestName,
                room: `${selectedRoom} - Available Room`,
                checkin: checkinDate,
                checkout: checkoutDate,
                status: 'checkedin'
            };
            
            reservationsData.push(newWalkIn);
            renderReservations();
            closeModal('walkInModal');
            showAlert(`Walk-in guest ${guestName} checked in successfully to room ${selectedRoom}`, 'success');
            
            // Reset form
            this.reset();
        });

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            renderReservations();
            
            // Set today's date as minimum for date inputs
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('checkinDate').min = today;
            document.getElementById('checkoutDate').min = today;
            
            // Update checkout date when checkin changes
            document.getElementById('checkinDate').addEventListener('change', function() {
                const checkinDate = new Date(this.value);
                const nextDay = new Date(checkinDate);
                nextDay.setDate(nextDay.getDate() + 1);
                document.getElementById('checkoutDate').min = nextDay.toISOString().split('T')[0];
            });
        });

        // Enter key search functionality
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchReservations();
            }
        });
    </script>
</body>
</html>