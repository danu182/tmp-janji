@extends('frontend.layout.app')

@section('content')

 <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
      <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
          <h1 class="display-4 text-white mb-5">
            Good Health Is The Root Of All Heppiness
          </h1>
          <div class="row g-4">
            <div class="col-sm-4">
              <div class="border-start border-light ps-4">
                <h2 class="text-white mb-1" data-toggle="counter-up">123</h2>
                <p class="text-light mb-0">Expert Doctors</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="border-start border-light ps-4">
                <h2 class="text-white mb-1" data-toggle="counter-up">1234</h2>
                <p class="text-light mb-0">Medical Stuff</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="border-start border-light ps-4">
                <h2 class="text-white mb-1" data-toggle="counter-up">12345</h2>
                <p class="text-light mb-0">Total Patients</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="owl-carousel header-carousel">
            <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="img/carousel-1.jpg" alt="" />
              <div class="owl-carousel-text">
                <h1 class="display-1 text-white mb-0">Cardiology</h1>
              </div>
            </div>
            <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="img/carousel-2.jpg" alt="" />
              <div class="owl-carousel-text">
                <h1 class="display-1 text-white mb-0">Neurology</h1>
              </div>
            </div>
            <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="img/carousel-3.jpg" alt="" />
              <div class="owl-carousel-text">
                <h1 class="display-1 text-white mb-0">Pulmonary</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Header End -->

    <!-- About Start -->

    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <p class="d-inline-block border rounded-pill py-1 px-4">Services</p>
          <h1>Layanan Unggulan kami</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-5">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                style="width: 65px; height: 65px"
              >
                <i class="fa fa-heartbeat text-primary fs-4"></i>
              </div>
              <h4 class="mb-3">Poli kandungan</h4>
              <p class="mb-4">
                Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                sed diam stet diam sed stet.
              </p>
              <a class="btn" href=""
                ><i class="fa fa-plus text-primary me-3"></i>Read More</a
              >
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light rounded h-100 p-5">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                style="width: 65px; height: 65px"
              >
                <i class="fa fa-x-ray text-primary fs-4"></i>
              </div>
              <h4 class="mb-3">poli Penyakit dalam</h4>
              <p class="mb-4">
                Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                sed diam stet diam sed stet.
              </p>
              <a class="btn" href=""
                ><i class="fa fa-plus text-primary me-3"></i>Read More</a
              >
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light rounded h-100 p-5">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                style="width: 65px; height: 65px"
              >
                <i class="fa fa-brain text-primary fs-4"></i>
              </div>
              <h4 class="mb-3">Poli anak</h4>
              <p class="mb-4">
                Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                sed diam stet diam sed stet.
              </p>
              <a class="btn" href=""
                ><i class="fa fa-plus text-primary me-3"></i>Read More</a
              >
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light rounded h-100 p-5">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                style="width: 65px; height: 65px"
              >
                <i class="fa fa-brain text-primary fs-4"></i>
              </div>
              <h4 class="mb-3">Poli bedah umum</h4>
              <p class="mb-4">
                Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                sed diam stet diam sed stet.
              </p>
              <a class="btn" href=""
                ><i class="fa fa-plus text-primary me-3"></i>Read More</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Feature Start -->
    {{-- <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
      <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
          <div
            class="col-lg-6 feature-text py-5 wow fadeIn"
            data-wow-delay="0.1s"
          >
            <div class="p-lg-5 ps-lg-0">
              <p
                class="d-inline-block border rounded-pill text-light py-1 px-4"
              >
                Features
              </p>
              <h1 class="text-white mb-4">Why Choose Us</h1>
              <p class="text-white mb-4 pb-2">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo erat amet
              </p>
              <div class="row g-4">
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <div
                      class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                      style="width: 55px; height: 55px"
                    >
                      <i class="fa fa-user-md text-primary"></i>
                    </div>
                    <div class="ms-4">
                      <p class="text-white mb-2">Experience</p>
                      <h5 class="text-white mb-0">Doctors</h5>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <div
                      class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                      style="width: 55px; height: 55px"
                    >
                      <i class="fa fa-check text-primary"></i>
                    </div>
                    <div class="ms-4">
                      <p class="text-white mb-2">Quality</p>
                      <h5 class="text-white mb-0">Services</h5>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <div
                      class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                      style="width: 55px; height: 55px"
                    >
                      <i class="fa fa-comment-medical text-primary"></i>
                    </div>
                    <div class="ms-4">
                      <p class="text-white mb-2">Positive</p>
                      <h5 class="text-white mb-0">Consultation</h5>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <div
                      class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                      style="width: 55px; height: 55px"
                    >
                      <i class="fa fa-headphones text-primary"></i>
                    </div>
                    <div class="ms-4">
                      <p class="text-white mb-2">24 Hours</p>
                      <h5 class="text-white mb-0">Support</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-6 pe-lg-0 wow fadeIn"
            data-wow-delay="0.5s"
            style="min-height: 400px"
          >
            <div class="position-relative h-100">
              <img
                class="position-absolute img-fluid w-100 h-100"
                src="img/feature.jpg"
                style="object-fit: cover"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Feature End -->

    <!-- Team / klini spesialis Start -->
    {{-- <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <p class="d-inline-block border rounded-pill py-1 px-4">Doctors</p>
          <!-- <h1>Our Experience Doctors</h1> -->
          <h1>KLInik Spesiali Kami</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative rounded overflow-hidden">
              <div class="overflow-hidden">
                <img class="img-fluid" src="img/team-1.jpg" alt="" />
              </div>
              <div class="team-text bg-light text-center p-4">
                <h5>Interna</h5>
                <p class="text-primary">Klinik Penyakit dalam</p>
                <div class="team-social text-center">
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item position-relative rounded overflow-hidden">
              <div class="overflow-hidden">
                <img class="img-fluid" src="img/team-2.jpg" alt="" />
              </div>
              <div class="team-text bg-light text-center p-4">
                <h5>Sarah</h5>
                <p class="text-primary">Klinik Saraf</p>
                <div class="team-social text-center">
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item position-relative rounded overflow-hidden">
              <div class="overflow-hidden">
                <img class="img-fluid" src="img/team-3.jpg" alt="" />
              </div>
              <div class="team-text bg-light text-center p-4">
                <h5>Anak</h5>
                <p class="text-primary">Klinik Anak</p>
                <div class="team-social text-center">
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item position-relative rounded overflow-hidden">
              <div class="overflow-hidden">
                <img class="img-fluid" src="img/team-4.jpg" alt="" />
              </div>
              <div class="team-text bg-light text-center p-4">
                <h5>Bedah Umum</h5>
                <p class="text-primary">KLinik Bedah Umum</p>
                <div class="team-social text-center">
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item position-relative rounded overflow-hidden">
              <div class="overflow-hidden">
                <img class="img-fluid" src="img/team-4.jpg" alt="" />
              </div>
              <div class="team-text bg-light text-center p-4">
                <h5>Mata</h5>
                <p class="text-primary">KLinik Mata</p>
                <div class="team-social text-center">
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item position-relative rounded overflow-hidden">
              <div class="overflow-hidden">
                <img class="img-fluid" src="img/team-4.jpg" alt="" />
              </div>
              <div class="team-text bg-light text-center p-4">
                <h5>Ortopedi</h5>
                <p class="text-primary">KLinik Ortopedi</p>
                <div class="team-social text-center">
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item position-relative rounded overflow-hidden">
              <div class="overflow-hidden">
                <img class="img-fluid" src="img/team-4.jpg" alt="" />
              </div>
              <div class="team-text bg-light text-center p-4">
                <h5>kandungan</h5>
                <p class="text-primary">KLinik kandungan</p>
                <div class="team-social text-center">
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Team / klini spesialis End -->
    
@endsection