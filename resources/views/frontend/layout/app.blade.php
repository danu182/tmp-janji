
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link
      href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    @include('frontend.component.spinner')
    <!-- Spinner End -->


    <!-- Topbar Start -->

    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('frontend.component.navbar')
    <!-- Navbar End -->

    @yield('content')

    <!-- Appointment Start -->

    <!--  <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p class="d-inline-block border rounded-pill py-1 px-4">
              Appointment
            </p>
            <h1 class="mb-4">Make An Appointment To Visit Our Doctor</h1>
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
              <form>
                <div class="row g-3">
                  <div class="col-12 col-sm-6">
                    <input
                      type="text"
                      class="form-control border-0"
                      placeholder="Your Name"
                      style="height: 55px"
                    />
                  </div>
                  <div class="col-12 col-sm-6">
                    <input
                      type="email"
                      class="form-control border-0"
                      placeholder="Your Email"
                      style="height: 55px"
                    />
                  </div>
                  <div class="col-12 col-sm-6">
                    <input
                      type="text"
                      class="form-control border-0"
                      placeholder="Your Mobile"
                      style="height: 55px"
                    />
                  </div>
                  <div class="col-12 col-sm-6">
                    <select class="form-select border-0" style="height: 55px">
                      <option selected>Choose Doctor</option>
                      <option value="1">Doctor 1</option>
                      <option value="2">Doctor 2</option>
                      <option value="3">Doctor 3</option>
                    </select>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="date" id="date" data-target-input="nearest">
                      <input
                        type="text"
                        class="form-control border-0 datetimepicker-input"
                        placeholder="Choose Date"
                        data-target="#date"
                        data-toggle="datetimepicker"
                        style="height: 55px"
                      />
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="time" id="time" data-target-input="nearest">
                      <input
                        type="text"
                        class="form-control border-0 datetimepicker-input"
                        placeholder="Choose Date"
                        data-target="#time"
                        data-toggle="datetimepicker"
                        style="height: 55px"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <textarea
                      class="form-control border-0"
                      rows="5"
                      placeholder="Describe your problem"
                    ></textarea>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">
                      Book Appointment
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> 

     -->
    <!-- Appointment End -->

    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <p class="d-inline-block border rounded-pill py-1 px-4">
            Testimonial
          </p>
          <h1>What Say Our Patients!</h1>
        </div>
        <div
          class="owl-carousel testimonial-carousel wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="testimonial-item text-center">
            <img
              class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
              src="img/testimonial-1.jpg"
              style="width: 100px; height: 100px"
            />
            <div class="testimonial-text rounded text-center p-4">
              <p>
                Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                clita erat magna elitr erat sit sit erat at rebum justo sea
                clita.
              </p>
              <h5 class="mb-1">Patient Name</h5>
              <span class="fst-italic">Profession</span>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img
              class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
              src="img/testimonial-2.jpg"
              style="width: 100px; height: 100px"
            />
            <div class="testimonial-text rounded text-center p-4">
              <p>
                Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                clita erat magna elitr erat sit sit erat at rebum justo sea
                clita.
              </p>
              <h5 class="mb-1">Patient Name</h5>
              <span class="fst-italic">Profession</span>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img
              class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
              src="img/testimonial-3.jpg"
              style="width: 100px; height: 100px"
            />
            <div class="testimonial-text rounded text-center p-4">
              <p>
                Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                clita erat magna elitr erat sit sit erat at rebum justo sea
                clita.
              </p>
              <h5 class="mb-1">Patient Name</h5>
              <span class="fst-italic">Profession</span>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Testimonial End -->

    <!-- Footer Start -->
    @include('frontend.component.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
