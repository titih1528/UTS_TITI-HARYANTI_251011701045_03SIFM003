<footer class="footer-furnio mt-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-5">
                <h4 class="fw-bold">Furnio<span class="dot">.</span></h4>
                <p class="text-white-50 mb-0">Katalog furnitur modern dan minimalis untuk membuat rumah lebih nyaman, rapi, dan berkarakter.</p>
            </div>
            <div class="col-6 col-md-3">
                <h6 class="text-uppercase text-white-50 small">Menu</h6>
                <ul class="list-unstyled mb-0">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('produk.index') }}">Produk</a></li>
                    <li><a href="{{ route('tentang') }}">Tentang</a></li>
                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-4">
                <h6 class="text-uppercase text-white-50 small">Kategori</h6>
                <ul class="list-unstyled mb-0">
                    @foreach (['Sofa', 'Kursi', 'Meja', 'Lemari'] as $k)
                        <li><a href="{{ route('produk.index', ['kategori' => $k]) }}">{{ $k }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <hr class="border-secondary mt-4">
        <p class="text-white-50 small text-center mb-0">&copy; {{ date('Y') }} Furnio &mdash; Katalog Furniture | UTS Rekayasa Web, Universitas Pamulang</p>
    </div>
</footer>
