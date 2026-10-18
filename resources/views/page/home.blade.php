@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

{{-- HERO --}}
<section class="hero">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-7 text-center text-lg-start py-5 hero-text">
                <span class="badge badge-hero mb-3">Koleksi Terbaru</span>
                <h1 class="display-4 fw-bold text-white">Interior Cantik dengan Furnitur <span class="text-amber">Modern</span> &amp; Minimalis</h1>
                <p class="lead text-white-50 my-4">Temukan sofa, meja, lemari, dan perlengkapan rumah berkualitas dengan harga bersahabat.</p>
                <a href="{{ route('produk.index') }}" class="btn btn-amber btn-lg px-4">Buka Katalog</a>
                <a href="{{ route('tentang') }}" class="btn btn-outline-light btn-lg px-4 ms-2">Tentang Kami</a>
            </div>
        </div>
    </div>
</section>

{{-- KATEGORI --}}
<section class="container py-5">
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <h2 class="fw-bold mb-0">Kategori Populer</h2>
            <p class="text-muted mb-0">Pilih sesuai kebutuhan ruanganmu</p>
        </div>
        <a href="{{ route('produk.index') }}" class="link-navy">Lihat semua</a>
    </div>
    <div class="row g-3 row-cols-2 row-cols-md-4 row-cols-lg-7">
        @foreach ($categories as $cat)
            <div class="col">
                <a href="{{ route('produk.index', ['kategori' => $cat->category]) }}" class="card card-kategori text-center text-decoration-none border-0 shadow-sm h-100">
                    <img src="{{ asset('assets/images/' . $cat->image) }}" class="card-img-top" alt="{{ $cat->category }}">
                    <div class="card-body py-2">
                        <span class="fw-semibold">{{ $cat->category }}</span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>

{{-- KEUNGGULAN --}}
<section class="strip py-4">
    <div class="container">
        <div class="row text-center text-white g-3">
            <div class="col-md-4"><div class="fw-bold fs-5">Material Pilihan</div><small class="text-white-50">Kayu solid &amp; bahan berkualitas</small></div>
            <div class="col-md-4"><div class="fw-bold fs-5">Desain Minimalis</div><small class="text-white-50">Cocok untuk rumah modern</small></div>
            <div class="col-md-4"><div class="fw-bold fs-5">Harga Terjangkau</div><small class="text-white-50">Kualitas premium, harga ramah</small></div>
        </div>
    </div>
</section>

{{-- PRODUK PILIHAN --}}
<section class="container py-5">
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <h2 class="fw-bold mb-0">Produk Pilihan</h2>
            <p class="text-muted mb-0">Furnitur terbaru di katalog kami</p>
        </div>
        <a href="{{ route('produk.index') }}" class="link-navy">Lihat semua</a>
    </div>
    <div class="row g-4">
        @foreach ($featured as $furniture)
            <div class="col-6 col-lg-3">
                @include('partials.product-card')
            </div>
        @endforeach
    </div>
</section>

{{-- FAQ --}}
<section class="container pb-5">
    <h2 class="fw-bold text-center mb-4">Pertanyaan Umum</h2>
    <div class="accordion shadow-sm" id="faq">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#f1">Bagaimana cara memesan furnitur?</button>
            </h2>
            <div id="f1" class="accordion-collapse collapse show" data-bs-parent="#faq">
                <div class="accordion-body">Pilih produk di katalog, buka halaman detail, lalu klik tombol "Beli Sekarang".</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#f2">Apakah bisa dikirim ke luar kota?</button>
            </h2>
            <div id="f2" class="accordion-collapse collapse" data-bs-parent="#faq">
                <div class="accordion-body">Bisa. Ongkos kirim menyesuaikan ukuran barang dan lokasi tujuan.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#f3">Apakah ada garansi?</button>
            </h2>
            <div id="f3" class="accordion-collapse collapse" data-bs-parent="#faq">
                <div class="accordion-body">Semua produk bergaransi rangka selama 1 tahun.</div>
            </div>
        </div>
    </div>
</section>

@endsection
