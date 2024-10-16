@extends('frontend.layout.app')

@section('content')


<!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Feature</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Feature</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Feature Start -->
    
@foreach  ($jadwal as $jd)
    <div class="container-fluid bg-primary overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Jadawl Praktek</p>
                        <h1 class="text-white mb-1">{{ $jd['namaDokter'] }}</h1>
                        <h4 class="text-light mb-4"> Spesialis {{ $jd['get_spesialisasi']['namaSpesialis'] }}</h4>
                        <p class="text-white mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <div class="row g-4">
                            {{-- loopong jadwal strat --}}
                            @forelse ($jd['get_jadwal'] as $getjdwal)
                                <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-user-md text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">{{ $getjdwal['hari'] }}</p>
                                        @foreach ($getjdwal['jadwals'] as $jam)
                                            <h5 class="text-white mb-0">{{ date('H:i', strtotime($jam['start_time'] ))}}-{{ date('H:i', strtotime($jam['end_time'] ))}}  </h5>
                                        @endforeach
                                        {{-- <h5 class="text-white mb-0">{{ $hari->start_time }} - {{ $hari->end_time }}  </h5> --}}
                                    </div>
                                    
                                </div>
                            </div>
                            @empty
                                <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-user-md text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p>maaf sementara belum tersedia jadwal</p>
                                        {{-- <p class="text-white mb-2">{{ $hari->hari }}</p>
                                        <h5 class="text-white mb-0">{{ $hari->start_time }} - {{ $hari->end_time }}  </h5> --}}
                                    </div>
                                </div>
                            </div>
                            @endforelse
                            <a href="{{ route('bookingDokter',$jd['id']) }}" class="btn btn-warning">booking</a>
                            
                            {{-- loopong jadwal end --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/feature.jpg') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
    
<!-- Feature End -->



@endsection