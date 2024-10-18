<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    @csrf
    <div class="col-12 col-sm-6">
        <div class="date" id="date" data-target-input="nearest">
            <input type="date" name="tanggal" id="tanggal" class="form-control border-0" style="height: 55px">
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="date" id="date" data-target-input="nearest">
            <input type="text" name="hari" id="hari" class="form-control border-0" style="height: 55px" >
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <select name="slot" id="slot" class="form-select border-0" style="height: 55px;">
            <option selected>pilih slot</option>
            <!-- Options will be populated here dynamically -->
        </select>
    </div>
    <div class="col-12">
        <button class="btn btn-primary w-100 py-3" type="submit">
            Book Appointment
        </button>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).on("change", "#hari", function() {
    var hari = $(this).val(); // Get the value from the input field

    if (hari) {
        $.ajax({
            url: "{{ route('coba') }}", // Ensure this route exists
            type: "POST",
            data: {
                hari: hari, // Send the day value
                _token: '{{ csrf_token() }}' // Include CSRF token
            },
            dataType: "json",
            success: function(data) {
                console.log(data);
                $('#slot').empty(); // Clear existing options
                $('#slot').append('<option selected>pilih slot</option>'); // Reset the select

                // Loop through the data received and append options
                $.each(data.timeSlots, function(index, timeSlots) {
                    $('#slot').append('<option value="' + timeSlots.id + '">' + timeSlots.start_time + '  </option>');
                });
            },
            error: function(xhr, status, error) {
                console.error("Status:", status);
                console.error("Error:", error);
                console.error("Response:", xhr.responseText);
                alert("An error occurred: " + xhr.status + " " + xhr.statusText);
            }
        });
    } else {
        // If the input is empty, reset the select options
        $('#slot').empty();
        $('#slot').append('<option selected>pilih slot</option>');
    }
});
</script>
</body>
</html>