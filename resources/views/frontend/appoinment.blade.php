@extends('frontend.layout.app')


@section('content')
      <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Doctors</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb text-uppercase mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Doctors
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->
    <!-- Appoinment Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p class="d-inline-block border rounded-pill py-1 px-4">
              Appointment
            </p>
            <h1 class="mb-4">
              Make An Appointment To Visit Our Doctor Andika SPOG
            </h1>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
              diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
              lorem sit clita duo justo magna dolore erat amet
            </p>
            <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
              <div
                class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                style="width: 55px; height: 55px"
              >
                <i class="fa fa-phone-alt text-primary"></i>
              </div>
              <div class="ms-4">
                <p class="mb-2">Call Us Now</p>
                <h5 class="mb-0">+012 345 6789</h5>
              </div>
            </div>
            <div class="bg-light rounded d-flex align-items-center p-5">
              <div
                class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                style="width: 55px; height: 55px"
              >
                <i class="fa fa-envelope-open text-primary"></i>
              </div>
              <div class="ms-4">
                <p class="mb-2">Mail Us Now</p>
                <h5 class="mb-0">info@example.com</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="bg-light rounded h-100 d-flex align-items-center p-5">
              
              {{-- lopping di start --}}

              <form method="POST" action="">
                @csrf
                <input name="doctorId" type="hidden" value="{{ $dokter->id }}"/>
                    <div class="row g-3">
                      <div class="col-12 col-sm-6">
                        <input name="name"
                          type="text"
                          class="form-control border-0"
                          placeholder="Your Name"
                          style="height: 55px"
                          value="karno"
                        />
                      </div>
                      <div class="col-12 col-sm-6">
                        <input name="email"
                          type="email"
                          class="form-control border-0"
                          placeholder="Your Email"
                          style="height: 55px"
                          value="karno@gmail.com"
                        />
                      </div>
                      <div class="col-12 col-sm-6">
                        <input name="Nip"
                          type="Nip"
                          class="form-control border-0"
                          placeholder="Your Nip"
                          style="height: 55px"
                          value="12345678"
                        />
                      </div>
                      <div class="col-12 col-sm-6">
                        <input
                        name="hp"
                          type="text"
                          class="form-control border-0"
                          placeholder="Your Mobile"
                          style="height: 55px"
                          value="90900"
                        />
                      </div>
                      <div class="col-12 col-sm-6">
                      <input name="namaDokter"
                          type="text"
                          class="form-control border-0"
                          placeholder="Your Dokter"
                          style="height: 55px" readonly 
                          value="{{ $dokter->namaDokter }}"
                        />
                      </div>

                      
                      <div class="col-12 col-sm-6">
                        <div class="date" id="date" data-target-input="nearest">
                            <input type="date" name="tanggal" id="tanggal" class="form-control border-0" style="height: 55px">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="date" id="date" data-target-input="nearest">
                            <input type="text" name="hari" id="hari" class="form-control border-0"  style="height: 55px">
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
                    </div>
                  </form>
        
              
            {{-- lopping di end --}}
              
              


            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      $(document).on("change", "#tanggal", function() {
        var tanggal = $(this).val();

        $.ajax({
            url: "{{ route('cekHari') }}", // Make sure this matches your route
            type: "POST",
            data: {
                tanggal: tanggal,
                _token: '{{ csrf_token() }}'// Include CSRF token
            },
            dataType: "json",
            success: function(data) {
                console.log(data);
                $('#hari').val(data.hari); // Update the 'hari' field
            },
            error: function(xhr, status, error) {
                console.error("Status:", status);
                console.error("Error:", error);
                console.error("Response:", xhr.responseText); // Log the response text
                alert("An error occurred: " + xhr.status + " " + xhr.statusText); // Show status code
            }
        });
    });


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


{{-- <script>
$(document).on("change", "#hari", function() {
    var hari = $(this).val(); // Get the value from the input field

    if (hari) {
        $.ajax({
            url: "{{ route('getSlotJadwal') }}", // Ensure this route exists
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
                $.each(data.slot, function(index, slot) {
                    $('#slot').append('<option value="' + slot.id + '">' + slot.name + '</option>');
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
</script> --}}
    <!-- Appoinment End -->
@endsection