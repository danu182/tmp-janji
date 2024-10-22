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
              

              <form method="POST" action="{{ route('test') }}">
                @csrf
                @method('POST')

                 @if ($errors->any())
                  <div class="alert alert-danger">
                    <h5><i class="fas fa-exclamation-triangle"> ada kesalahan dalan pengisian</i></h5>
                      <ul>
                          @foreach ($errors->all() as $message)
                              <li>{{ $message }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
                
            <input name="dokterId" type="hidden" value="{{ $dokter->id }}"/>
                    <div class="row g-3">
                      <div class="col-12 col-sm-6">
                        <label for="nama">nama</label>
                        <input name="name"
                          type="text"
                          class="form-control border-0"
                          placeholder="Your Name"
                          style="height: 55px"
                          value="karno"
                        />
                      </div>
                      <div class="col-12 col-sm-6">
                        <label for="email">email</label>
                        <input name="email"
                          type="email"
                          class="form-control border-0"
                          placeholder="Your Email"
                          style="height: 55px"
                          value="karno@gmail.com"
                        />
                        @error('email')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="col-12 col-sm-6">
                        <label for="Nip">email</label>
                        <input name="Nip"
                          type="Nip"
                          class="form-control border-0"
                          placeholder="Your Nip"
                          style="height: 55px"
                          value="12345678"
                        />
                        @error('nip')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="col-12 col-sm-6">
                        <label for="emaul">hp</label>
                        <input
                        name="hp"
                          type="text"
                          class="form-control border-0"
                          placeholder="Your Mobile"
                          style="height: 55px"
                          value="90900"
                        />
                        @error('hp')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="col-12 col-sm-6">
                        <label for="namaDokter">email</label>
                      <input name="namaDokter"
                          type="text"
                          class="form-control border-0"
                          placeholder="Your Dokter"
                          style="height: 55px" readonly 
                          value="{{ $dokter->namaDokter }}"
                        />
                        @error('namaDokter')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>

                      
                      <div class="col-12 col-sm-6">
                        <label for="tanggal">tanggal</label>
                        <div class="date" id="date" data-target-input="nearest">
                            <input type="date" name="tanggal" id="tanggal" class="form-control border-0" style="height: 55px"   >
                        </div>
                        @error('tanggal')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6">
                      <label for="hari">email</label>
                        <div class="date" id="date" data-target-input="nearest">
                            <input type="text" name="hari" id="hari" class="form-control border-0"  style="height: 55px" readonly>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                      <label for="slot">pilh jam</label>
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
      var tanggal = $(this).val(); // Get the value from the input field
      var dokterId = $("input[name='dokterId']").val(); // Get the dokterId value

      if (tanggal) {
          $.ajax({
              url: "{{ route('AmbilSlotJam') }}", // Ensure this route exists
              type: "POST",
              data: {
                  tanggal: tanggal, // Send the day value
                  dokterId: dokterId, // Include dokterId
                  _token: '{{ csrf_token() }}' // Include CSRF token
              },
              dataType: "json",
              success: function(data) {
                  console.log(data);
                  $('#slot').empty(); // Clear existing options
                  $('#hari').val(data.hari)
                  $('#slot').append('<option selected>pilih slot</option>'); // Reset the select

                  // Loop through the data received and append options
                  $.each(data.timeSlots, function(index, timeSlots) {
                      // $('#slot').append('<option value="' + timeSlots.id + '">' + timeSlots.start_time + ' - ' + timeSlots.end_time + '</option>');
                      $('#slot').append('<option value="' + timeSlots.start_time + '">' + timeSlots.start_time +  '</option>');
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
          $('#slot').append('<option selected readonly>pilih slot</option>');
      }
  });

  


    </script>

    <!-- Appoinment End -->
@endsection