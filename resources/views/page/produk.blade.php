@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')

<section class="page-header">
    <div class="container">
        <h1 class="fw-bold text-white mb-1">Katalog Furniture</h1>
        <p class="text-white-50 mb-0">Temukan furnitur yang cocok untuk rumahmu</p>
    </div>
</section>

<div class="container py-4">

    {{-- FILTER --}}
    <form method="GET" action="{{ route('produk.index') }}" class="card border-0 shadow-sm p-3 mb-4">
        <div class="row g-2">
            <div class="col-md-5">
                <input type="text" name="q" value="{{ request('q') }}" class="form-control" placeholder="Cari nama atau bahan...">
            </div>
            <div class="col-6 col-md-3">
                <select name="kategori" class="form-select">
                    <option value="">Semua Kategori</option>
                    @foreach ($categories as $kat)
                        <option value="{{ $kat }}" {{ request('kategori') == $kat ? 'selected' : '' }}>{{ $kat }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 col-md-2">
                <select name="urut" class="form-select">
                    <option value="">Urutkan</option>
                    <option value="termurah" {{ request('urut') == 'termurah' ? 'selected' : '' }}>Termurah</option>
                    <option value="termahal" {{ request('urut') == 'termahal' ? 'selected' : '' }}>Termahal</option>
                </select>
            </div>
            <div class="col-md-2 d-grid">
                <button type="submit" class="btn btn-navy">Terapkan</button>
            </div>
        </div>
    </form>

    {{-- DAFTAR PRODUK --}}
    @if ($furnitures->count())
        <p class="text-muted small">Menampilkan {{ $furnitures->count() }} dari {{ $furnitures->total() }} produk</p>
        <div class="row g-4">
            @foreach ($furnitures as $furniture)
                <div class="col-6 col-md-4 col-lg-3">
                    @include('partials.product-card')
                </div>
            @endforeach
        </div>
        <div class="mt-4 d-flex justify-content-center">
            {{ $furnitures->links('pagination::bootstrap-5') }}
        </div>
    @else
        <div class="text-center py-5">
            <h4 class="fw-bold">Produk tidak ditemukan</h4>
            <p class="text-muted">Coba kata kunci atau kategori lain.</p>
            <a href="{{ route('produk.index') }}" class="btn btn-navy">Tampilkan Semua</a>
        </div>
    @endif
</div>

@endsection
