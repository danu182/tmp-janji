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
    
    @foreach ($dokter as $sp)
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <p class="d-inline-block border rounded-pill py-1 px-4">Doctors</p>
          <h1>Our Experience Doctors Spesialis {{ $sp->namaSpesialis }}</h1>
        </div>
        <div class="row g-4 justify-content-center">

          {{-- looping nanti disini start --}}

          @php
              $i= 0;
          @endphp
          @forelse ($sp->getDokter as $dok)
          @php
              $i=$i+0.2;
          @endphp
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ $i }}s">
                <div class="team-item position-relative rounded overflow-hidden">
                  <div class="overflow-hidden">
                    <img class="img-fluid" src="{{ asset('img/team-1.jpg') }}" alt="" />
                  </div>
                  <div class="team-text bg-light text-center p-4">
                    <h5>{{ $dok->namaDokter }}</h5>
                    <p class="text-primary">Spesialis {{ $dokter[0]['namaSpesialis'] }}</p>
                    <div class="team-social text-center">
                      {{-- <a class="btn btn-square" href="{{ route('jadwalDokter',$dok->id) }}"
                        ><i class="fab fa-facebook-f"></i
                      ></a> --}}
                      <a href="{{ route('jadwalDokter',$dok->id) }}" class="btn btn-info" >
                        <i class="far fa-calendar-alt" >  Jadwal Praktek</i> 
                      </a>
                      {{-- <a class="btn btn-square" href=""
                        ><i class="fab fa-twitter"></i
                      ></a>
                      <a class="btn btn-square" href=""
                        ><i class="fab fa-instagram"></i
                      ></a> --}}
                    </div>
                  </div>
                </div>
              </div>
          @empty
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden text-center">
                  <div class="overflow-hidden">
                    {{-- <img class="img-fluid" src="{{ asset('img/team-1.jpg') }}" alt="" /> --}}
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                  </div>
                  <div class="team-text bg-light text-center p-4">
                    <h5>Maaf Sementara Belum Ada Dokter</h5>
                    <p class="text-primary">Spesialis {{ $dokter[0]['namaSpesialis'] }}</p>
                    {{-- <div class="team-social text-center">
                      <a class="btn btn-square" href=""
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                      <a class="btn btn-square" href=""
                        ><i class="fab fa-twitter"></i
                      ></a>
                      <a class="btn btn-square" href=""
                        ><i class="fab fa-instagram"></i
                      ></a>
                    </div> --}}
                  </div>
                </div>
              </div>
          @endforelse         
          


          {{-- looping nanti disini end --}}
        </div>
      </div>
    </div>
    @endforeach
    <!-- Team End -->
    
@endsection