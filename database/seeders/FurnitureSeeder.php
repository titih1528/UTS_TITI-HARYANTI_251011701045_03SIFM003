<?php

namespace Database\Seeders;

use App\Models\Furniture;
use Illuminate\Database\Seeder;

class FurnitureSeeder extends Seeder
{
    public function run(): void
    {
        Furniture::truncate();

        $data = [
            [
                'name' => 'Sofa Nordik 3 Dudukan',
                'category' => 'Sofa',
                'material' => 'Kain linen & rangka kayu jati',
                'price' => 4850000,
                'dimensions' => '210 x 90 x 85 cm',
                'image' => 'sofa-nordik.svg',
                'description' => 'Sofa 3 dudukan bergaya Skandinavia dengan busa padat yang nyaman untuk bersantai. Kain linen yang lembut dan mudah dibersihkan cocok untuk ruang keluarga modern.',
            ],
            [
                'name' => 'Sofa Oslo Terracotta',
                'category' => 'Sofa',
                'material' => 'Kain velvet & kaki kayu',
                'price' => 5250000,
                'dimensions' => '200 x 88 x 82 cm',
                'image' => 'sofa-oslo.svg',
                'description' => 'Sofa velvet warna terracotta yang hangat dan elegan. Bantal sandaran empuk dengan jahitan rapi, memberi sentuhan berkelas pada ruang tamu minimalis.',
            ],
            [
                'name' => 'Kursi Makan Scandi',
                'category' => 'Kursi',
                'material' => 'Kayu karet & busa dudukan',
                'price' => 650000,
                'dimensions' => '45 x 50 x 85 cm',
                'image' => 'kursi-scandi.svg',
                'description' => 'Kursi makan ringan dengan sandaran ergonomis. Kaki kayu yang kokoh dan desain simpel mudah dipadukan dengan berbagai model meja makan.',
            ],
            [
                'name' => 'Kursi Santai Lounge',
                'category' => 'Kursi',
                'material' => 'Kain katun tebal & kaki kayu',
                'price' => 1750000,
                'dimensions' => '75 x 80 x 78 cm',
                'image' => 'kursi-lounge.svg',
                'description' => 'Kursi lounge empuk berwarna hijau sage untuk sudut baca atau kamar tidur. Sandaran lengan lebar membuat duduk berjam-jam tetap nyaman.',
            ],
            [
                'name' => 'Meja Makan Kayu Jati',
                'category' => 'Meja',
                'material' => 'Kayu jati solid',
                'price' => 6800000,
                'dimensions' => '180 x 90 x 75 cm',
                'image' => 'meja-makan-jati.svg',
                'description' => 'Meja makan dari kayu jati solid dengan finishing natural yang tahan lama. Muat untuk 6 orang, cocok untuk makan bersama keluarga.',
            ],
            [
                'name' => 'Meja Kopi Bundar Marmer',
                'category' => 'Meja',
                'material' => 'Marmer sintetis & besi hitam',
                'price' => 1950000,
                'dimensions' => '90 x 90 x 42 cm',
                'image' => 'meja-kopi-marmer.svg',
                'description' => 'Meja kopi bundar dengan permukaan bermotif marmer dan kaki besi hitam yang kokoh. Menjadi pusat perhatian di ruang tamu modern.',
            ],
            [
                'name' => 'Lemari Pakaian 3 Pintu',
                'category' => 'Lemari',
                'material' => 'Multiplek & HPL anti gores',
                'price' => 3950000,
                'dimensions' => '150 x 55 x 200 cm',
                'image' => 'lemari-3-pintu.svg',
                'description' => 'Lemari pakaian 3 pintu dengan ruang gantung dan rak lipat yang luas. Permukaan HPL anti gores dan mudah dibersihkan.',
            ],
            [
                'name' => 'Kabinet Laci Minimalis',
                'category' => 'Lemari',
                'material' => 'MDF & finishing cat duco',
                'price' => 2650000,
                'dimensions' => '100 x 45 x 85 cm',
                'image' => 'kabinet-laci.svg',
                'description' => 'Kabinet dengan 4 laci luas untuk menyimpan pakaian, dokumen, atau perlengkapan rumah. Rel laci halus dan tidak mudah macet.',
            ],
            [
                'name' => 'Tempat Tidur Queen Platform',
                'category' => 'Tempat Tidur',
                'material' => 'Kayu mahoni & kain headboard',
                'price' => 5400000,
                'dimensions' => '160 x 200 x 110 cm',
                'image' => 'tempat-tidur-platform.svg',
                'description' => 'Tempat tidur ukuran queen dengan headboard empuk dan rangka platform yang kokoh. Desain rendah membuat kamar terlihat luas dan lapang.',
            ],
            [
                'name' => 'Lampu Lantai Arc',
                'category' => 'Lampu',
                'material' => 'Besi & kap kain',
                'price' => 890000,
                'dimensions' => '40 x 40 x 180 cm',
                'image' => 'lampu-lantai-arc.svg',
                'description' => 'Lampu lantai berlengan melengkung yang menjangkau di atas sofa. Cahaya hangat menciptakan suasana nyaman untuk membaca di malam hari.',
            ],
            [
                'name' => 'Rak Buku Industrial',
                'category' => 'Rak',
                'material' => 'Kayu pinus & rangka besi',
                'price' => 1450000,
                'dimensions' => '90 x 30 x 180 cm',
                'image' => 'rak-buku-industrial.svg',
                'description' => 'Rak buku 4 tingkat bergaya industrial dengan rangka besi yang kuat. Cocok untuk koleksi buku, tanaman hias, dan dekorasi.',
            ],
            [
                'name' => 'Meja Kerja Home Office',
                'category' => 'Meja',
                'material' => 'Particle board & besi',
                'price' => 1850000,
                'dimensions' => '140 x 60 x 75 cm',
                'image' => 'meja-kerja.svg',
                'description' => 'Meja kerja luas dengan laci samping untuk alat tulis. Permukaan lega muat untuk monitor, laptop, dan perlengkapan kerja dari rumah.',
            ],
        ];

        foreach ($data as $item) {
            Furniture::create($item);
        }
    }
}
