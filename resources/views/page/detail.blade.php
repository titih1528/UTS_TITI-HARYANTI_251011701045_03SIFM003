@extends('layouts.app')

@section('title', $furniture->name)

@section('content')

<div class="container py-4">

    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('produk.index') }}">Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $furniture->name }}</li>
        </ol>
    </nav>

    <div class="card border-0 shadow-sm overflow-hidden">
        <div class="row g-0">
            <div class="col-md-6 detail-img">
                <img src="{{ asset('assets/images/' . $furniture->image) }}" class="w-100 h-100" alt="{{ $furniture->name }}">
            </div>
            <div class="col-md-6">
                <div class="p-4 p-lg-5">
                    <span class="badge badge-kategori mb-2">{{ $furniture->category }}</span>
                    <h1 class="fw-bold">{{ $furniture->name }}</h1>
                    <p class="harga fs-2 fw-bold my-3">{{ $furniture->price_formatted }}</p>

                    <p class="text-secondary">{{ $furniture->description }}</p>

                    <table class="table table-borderless table-sm spec-table mb-4">
                        <tbody>
                            <tr><th style="width:35%">Kategori</th><td>{{ $furniture->category }}</td></tr>
                            <tr><th>Material</th><td>{{ $furniture->material }}</td></tr>
                            <tr><th>Dimensi (P x L x T)</th><td>{{ $furniture->dimensions }}</td></tr>
                            <tr><th>Harga</th><td>{{ $furniture->price_formatted }}</td></tr>
                        </tbody>
                    </table>

                    <div class="d-flex gap-2 flex-wrap">
                        <button type="button" class="btn btn-amber btn-lg px-4" data-bs-toggle="modal" data-bs-target="#modalBeli">Beli Sekarang</button>
                        <a href="{{ route('produk.index') }}" class="btn btn-outline-secondary btn-lg">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- PRODUK TERKAIT --}}
    @if ($related->count())
        <h3 class="fw-bold mt-5 mb-3">Produk Terkait</h3>
        <div class="row g-4">
            @foreach ($related as $furniture)
                <div class="col-6 col-lg-3">
                    @include('partials.product-card')
                </div>
            @endforeach
        </div>
    @endif
</div>

{{-- POP-UP BELI SEKARANG --}}
<div class="modal fade" id="modalBeli" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Konfirmasi Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div id="formBeli">
                    <div class="d-flex gap-3 align-items-center mb-3">
                        <img src="{{ asset('assets/images/' . $furniture->image) }}" width="100" class="rounded" alt="{{ $furniture->name }}">
                        <div>
                            <div class="fw-bold">{{ $furniture->name }}</div>
                            <div class="harga fw-bold">{{ $furniture->price_formatted }}</div>
                        </div>
                    </div>
                    <label for="qty" class="form-label">Jumlah</label>
                    <input type="number" id="qty" class="form-control mb-3" min="1" max="10" value="1">
                    <div class="d-flex justify-content-between fw-bold fs-5">
                        <span>Total</span>
                        <span id="total" class="harga"></span>
                    </div>
                </div>
                <div id="sukses" class="text-center py-4 d-none">
                    <h3 class="fw-bold text-success">Pesanan Berhasil!</h3>
                    <p class="text-muted mb-0">Terima kasih sudah membeli {{ $furniture->name }}.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" id="btnKonfirmasi" class="btn btn-amber">Konfirmasi Beli</button>
            </div>
        </div>
    </div>
</div>

<script>
    const harga = {{ $furniture->price }};
    const qty = document.getElementById('qty');
    const total = document.getElementById('total');
    const formBeli = document.getElementById('formBeli');
    const sukses = document.getElementById('sukses');
    const btnKonfirmasi = document.getElementById('btnKonfirmasi');

    function hitungTotal() {
        let jumlah = parseInt(qty.value) || 1;
        total.textContent = 'Rp ' + (harga * jumlah).toLocaleString('id-ID');
    }

    qty.addEventListener('input', hitungTotal);
    hitungTotal();

    btnKonfirmasi.addEventListener('click', function () {
        formBeli.classList.add('d-none');
        sukses.classList.remove('d-none');
        btnKonfirmasi.classList.add('d-none');
    });

    document.getElementById('modalBeli').addEventListener('hidden.bs.modal', function () {
        formBeli.classList.remove('d-none');
        sukses.classList.add('d-none');
        btnKonfirmasi.classList.remove('d-none');
        qty.value = 1;
        hitungTotal();
    });
</script>

@endsection
