@extends('layouts.app')

@section('title', 'Tentang')

@section('content')

<section class="page-header">
    <div class="container">
        <h1 class="fw-bold text-white mb-1">Tentang Furnio</h1>
        <p class="text-white-50 mb-0">Katalog furnitur modern untuk rumah impianmu</p>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="fw-bold">Tentang Website</h4>
                    <p class="text-secondary">Furnio adalah website katalog furnitur yang dibuat menggunakan Laravel, Blade Template, dan Bootstrap. Seluruh data produk berasal dari database MySQL yang diisi melalui seeder.</p>
                    <p class="text-secondary mb-0">Website ini dibuat untuk memenuhi tugas Ujian Tengah Semester mata kuliah Rekayasa Web, Program Studi Sistem Informasi, Universitas Pamulang.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h4 class="fw-bold">Identitas</h4>
                    
                    <table class="table table-borderless spec-table mb-0">
                        <tr><th>Nama</th><td>Titi Haryanti</td></tr>
                        <tr><th>NIM</th><td>251011701045</td></tr>
                        <tr><th>Kelas</th><td>03SIFM003</td></tr>
                        <tr><th>Mata Kuliah</th><td>Rekayasa Web</td></tr>
                        <tr><th>Dosen</th><td>Afif Efendi</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
