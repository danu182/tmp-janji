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

    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <p class="d-inline-block border rounded-pill py-1 px-4">Perjanjian</p>
          <h1>riwayat Perjanjian mu</h1>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative rounded overflow-hidden">
              <!-- <div class="overflow-hidden">
                <img class="img-fluid" src="img/team-1.jpg" alt="" />
              </div> -->

              <table class="table-responsive table table-hover">
                <thead>
                  <tr>
                    <th>Nama Awal</th>
                    <th>Nama Akhir</th>
                    <th>Email</th>
                    <th>Email</th>
                    <th>Email</th>
                    <th>Email</th>
                    <th>aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Bagus</td>
                    <td>Susilo</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>
                      <a href="#" class="btn btn-warning">Edit</a>
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>

                  <tr>
                    <td>Bagus</td>
                    <td>Susilo</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>
                      <a href="#" class="btn btn-warning">Edit</a>
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>

                  <tr>
                    <td>Bagus</td>
                    <td>Susilo</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>
                      <a href="#" class="btn btn-warning">Edit</a>
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>

                  <tr>
                    <td>Bagus</td>
                    <td>Susilo</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>
                      <a href="#" class="btn btn-warning">Edit</a>
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>

                  <tr>
                    <td>Bagus</td>
                    <td>Susilo</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>bagus@mail.com</td>
                    <td>
                      <a href="#" class="btn btn-warning">Edit</a>
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->
@endsection