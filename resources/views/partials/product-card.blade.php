{{-- Kartu produk, dipakai di beranda, daftar produk, dan produk terkait --}}
<div class="card card-product h-100 border-0 shadow-sm">
    <a href="{{ route('produk.show', $furniture->id) }}" class="img-wrap">
        <img src="{{ asset('assets/images/' . $furniture->image) }}" class="card-img-top"
            alt="{{ $furniture->name }}">
    </a>
    <div class="card-body d-flex flex-column">
        <span class="badge badge-kategori align-self-start mb-2">{{ $furniture->category }}</span>
        <h5 class="card-title fs-6 fw-bold">{{ $furniture->name }}</h5>
        <p class="small text-muted mb-2">{{ $furniture->material }}</p>
        <p class="harga fw-bold fs-5 mt-auto mb-3">{{ $furniture->price_formatted }}</p>
        <a href="{{ route('produk.show', $furniture->id) }}" class="btn btn-navy w-100">Lihat Detail</a>
    </div>
</div>
