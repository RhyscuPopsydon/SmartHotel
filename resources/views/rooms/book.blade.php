@extends('layouts.app')

@section('content')
<div class="container" style="max-width:500px; margin:auto; padding:20px; background:#fff3e0; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.1);">
    <h2 style="text-align:center; margin-bottom:20px;">Reserve Room {{ $room->room_number }}</h2>

    <form id="bookingForm" method="POST" action="{{ route('rooms.storeBooking', $room->id) }}">
        @csrf

        <div style="margin-bottom:10px;">
            <label>Name:</label>
            <input type="text" value="{{ $user->name }}" readonly style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <label>Email:</label>
            <input type="email" value="{{ $user->email }}" readonly style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <label>Mobile:</label>
            <input type="text" value="{{ $user->contact_number }}" readonly style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <label>Check-in Date:</label>
            <input type="date" id="check_in_date" name="check_in_date" required style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <label>Check-out Date:</label>
            <input type="date" id="check_out_date" name="check_out_date" required style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <label>Check-in Time:</label>
            <input type="time" name="check_in_time" required style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <label>Notes (Optional):</label>
            <textarea name="notes" rows="3" placeholder="Enter any special requests or notes..." style="width:100%; padding:8px; resize:none;"></textarea>
        </div>

        <button type="button" id="confirmBookingBtn" style="width:100%; padding:10px; background:#ffb74d; border:none; border-radius:5px; cursor:pointer;">
            Confirm Booking
        </button>
    </form>
</div>

<!-- Booking Confirmation Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius:10px;">
      <div class="modal-header" style="background:#ffb74d;">
        <h5 class="modal-title" id="bookingModalLabel">Booking Confirmed</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Thank you for your booking. Kindly Wait for the confirmation of your booking.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="closeModalBtn" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Script para i-block ang same day at past dates -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    let today = new Date();
    today.setDate(today.getDate() + 1); // bukas palang pwede

    let yyyy = today.getFullYear();
    let mm = String(today.getMonth() + 1).padStart(2, '0');
    let dd = String(today.getDate()).padStart(2, '0');

    let minDate = `${yyyy}-${mm}-${dd}`;

    document.getElementById("check_in_date").setAttribute("min", minDate);
    document.getElementById("check_out_date").setAttribute("min", minDate);

    const bookingForm = document.getElementById('bookingForm');
    const confirmBtn = document.getElementById('confirmBookingBtn');

    confirmBtn.addEventListener('click', function() {
        // Check if form is valid
        if (bookingForm.checkValidity()) {
            // Show modal
            var bookingModal = new bootstrap.Modal(document.getElementById('bookingModal'));
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

@endsection
