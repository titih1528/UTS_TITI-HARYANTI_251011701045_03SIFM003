@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<section class="page-header">
    <div class="container">
        <h1 class="fw-bold text-white mb-1">Hubungi Kami</h1>
        <p class="text-white-50 mb-0">Ada pertanyaan tentang produk? Kami siap membantu</p>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-3">Informasi Toko</h4>
                    <p class="mb-2"><strong>Alamat:</strong><br>Jl. Puspitek Raya No. 10, Serpong, Tangerang Selatan</p>
                    <p class="mb-2"><strong>Telepon / WhatsApp:</strong><br>0812-3456-7890</p>
                    <p class="mb-2"><strong>Email:</strong><br>furnio@gmail.com</p>
                    <p class="mb-0"><strong>Jam Buka:</strong><br>Senin - Sabtu, 09.00 - 20.00</p>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-3">Kirim Pesan</h4>
                    <form id="formKontak">
                        <div id="notifKontak" class="alert alert-success d-none">Pesan terkirim! Terima kasih, kami akan segera menghubungi kamu.</div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama kamu" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="email@gmail.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pesan</label>
                            <textarea name="pesan" rows="4" class="form-control" placeholder="Tulis pesanmu..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-navy px-4">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('formKontak').addEventListener('submit', function (e) {
        e.preventDefault();                       
        document.getElementById('notifKontak').classList.remove('d-none');
        this.reset();                             
    });
</script>

@endsection
