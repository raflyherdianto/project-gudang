@extends('homepage.layouts.main')

@section('container')
    <section class="py-5 text-center container"
        style="background-image: url(/img/architecture-g407eabb77_1920.jpg); background-size: cover">
        <div class="row py-lg-5">
            <div class="col-lg-8 col-md-8 mx-auto mt-5">
                <h1 class="fw-light text-white"><strong>Welcome to Our Website!</strong></h1>
                <p class="fw-light text-white"><strong>CV Tiga Putra Mandiri is the leading distributor of specialty building materials in
                    the East Java Indonesia. Extensive range of plywood &amp; panel,
                    we make use of high grade raw materials secured from trusted vendors of the industry and also utilize
                    technologically advanced machines and equipments.
                    Due to our optimum quality products and ethical business policies, we have successfully become a
                    preferred choice of our valued clients.</strong>
                </p>
                <p>
                    <a href="mailto:tigaputramandiri90@gmail.com" class="btn btn-primary my-2">Send Email</a>
                </p>
            </div>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Our Product</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-4">
                @foreach ($barangs as $barang)
                    <div class="col">
                        <div class="card shadow-sm">

                            <div class="bd-placeholder-img card-img-top" width="100%" height="225" role="img"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                @if ($barang->gambar)
                                    <img src="{{ asset('storage/' . $barang->gambar) }}" class="img-fluid" alt="">
                                @else
                                    <img src="/img/portfolio/{{ $barang->kode_barang }}.jpg" class="img-fluid"
                                        alt="">
                                @endif
                            </div>
                            <div class="card-body">
                                <h4 class="card-text">{{ $barang->nama }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
