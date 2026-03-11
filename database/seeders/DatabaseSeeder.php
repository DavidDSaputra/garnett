<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Project;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\Client;
use App\Models\Statistic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin Garnett',
            'email' => 'admin@garnett.co.id',
            'password' => bcrypt('password'),
        ]);

        // Services
        $services = [
            ['title' => 'Solar On-Grid', 'slug' => 'on-grid', 'short_description' => 'Sistem solar terhubung grid untuk mengimbangi tagihan listrik dengan ROI langsung.', 'content' => '<p>Sistem solar on-grid ideal untuk area dengan jaringan listrik yang stabil. Sistem ini mengurangi biaya listrik secara drastis tanpa perlu perawatan baterai yang kompleks.</p>'],
            ['title' => 'Solar Off-Grid', 'slug' => 'off-grid', 'short_description' => 'Kemandirian energi total dengan penyimpanan baterai untuk lokasi tanpa akses grid.', 'content' => '<p>Lepaskan diri dari jaringan listrik sepenuhnya. Sistem off-grid kami menggabungkan panel berefisiensi tinggi dengan baterai industri untuk pasokan listrik 24/7.</p>'],
            ['title' => 'Solar Hybrid', 'slug' => 'hybrid', 'short_description' => 'Sistem terhubung jaringan dengan cadangan baterai untuk daya tanpa henti.', 'content' => '<p>Dapatkan yang terbaik dari kedua dunia. Kurangi tagihan dengan daya dari grid saat tersedia, dan tetap menyala saat terjadi pemadaman berkat cadangan baterai.</p>'],
            ['title' => 'Pengisian EV', 'slug' => 'ev-charging', 'short_description' => 'Stasiun pengisian daya EV komersial berkecepatan tinggi terintegrasi surya.', 'content' => '<p>Infrastruktur masa depan, ditenagai sepenuhnya oleh matahari. Pengisi daya kendaraan listrik yang kami sediakan dioptimalkan untuk memaksimalkan surplus daya surya Anda.</p>'],
            ['title' => 'Penerangan PJUTS', 'slug' => 'pjuts', 'short_description' => 'Penerangan jalan umum bertenaga surya untuk daya tahan dan kinerja konsisten.', 'content' => '<p>Sistem PJUTS kami menggunakan komponen standar militer untuk bertahan di cuaca ekstrem sambil menerangi infrastruktur penting.</p>'],
            ['title' => 'Sistem Industri', 'slug' => 'industrial', 'short_description' => 'Pembangkit listrik tenaga surya skala megawatt raksasa untuk pabrik.', 'content' => '<p>Potong biaya operasional pabrik Anda dengan sumber tegangan stabil berskala besar yang kami rancang khusus untuk menahan beban berat kelistrikan industri.</p>'],
        ];
        foreach ($services as $svc) { Service::create($svc); }

        // Projects
        $projects = [
            ['title' => 'Pabrik Tekstil Jakarta', 'slug' => 'jakarta-textile-mill', 'type' => 'Industri', 'system_capacity' => '1.2 MWp', 'location' => 'Jakarta, Indonesia', 'description' => 'Instalasi brutal 1.2 megawatt di atas atap pabrik tekstil yang berusia 50 tahun.'],
            ['title' => 'Resor Bali Off-Grid', 'slug' => 'bali-resort-off-grid', 'type' => 'Komersial', 'system_capacity' => '500 kWp', 'location' => 'Bali, Indonesia', 'description' => 'Kemandirian jaringan total untuk resor mewah jarak jauh.'],
            ['title' => 'Pusat Logistik Surabaya', 'slug' => 'surabaya-logistics-hub', 'type' => 'Industri', 'system_capacity' => '850 kWp', 'location' => 'Surabaya, Indonesia', 'description' => 'Memberi daya fasilitas gudang raksasa murni dengan tenaga surya.'],
        ];
        foreach ($projects as $prj) { Project::create($prj); }

        // Posts
        $posts = [
            ['title' => 'Mengapa Solar Panel Industri adalah Kebutuhan Mendesak', 'slug' => 'industrial-solar-necessity', 'excerpt' => 'Ketidakstabilan jaringan dan kenaikan biaya menuntut tindakan segera.', 'content' => '<p>Era listrik murah sudah berakhir. Beralih ke tenaga surya.</p>', 'author' => 'Insinyur Utama', 'published_at' => now()],
            ['title' => 'Memaksimalkan Hasil dengan Monocrystalline PERC', 'slug' => 'maximizing-yield-perc', 'excerpt' => 'Rincian teknis dari panel yang kami pasang.', 'content' => '<p>Efisiensi adalah segalanya. Inilah mengapa kami menggunakan PERC.</p>', 'author' => 'Admin Sistem', 'published_at' => now()->subDays(2)],
        ];
        foreach ($posts as $post) { Post::create($post); }

        // Testimonials
        $testimonials = [
            ['client_name' => 'Budi Santoso', 'company_name' => 'PT Indo Karya', 'rating' => 5, 'feedback' => 'Garnett memasang sistem 500kWp dan tagihan energi kami turun 60%. Sangat efisien.'],
            ['client_name' => 'Sarah Wijaya', 'company_name' => 'Resor Eco Bali', 'rating' => 5, 'feedback' => 'Kemandirian energi total tercapai. Sistem off-grid berfungsi tanpa cacat.'],
        ];
        foreach ($testimonials as $test) { Testimonial::create($test); }

        // Statistics
        $statistics = [
            ['title' => 'Total Kapasitas (MWp)', 'value' => '50+', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>'],
            ['title' => 'Instalasi', 'value' => '120+', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>'],
            ['title' => 'Penghapusan CO2 (Ton)', 'value' => '15k', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'],
            ['title' => 'Waktu Aktif', 'value' => '99%', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>'],
        ];
        foreach ($statistics as $stat) { Statistic::create($stat); }

        // Clients
        $clients = [
            ['name' => 'Indo Jaya', 'is_active' => true],
            ['name' => 'Bali Eco', 'is_active' => true],
            ['name' => 'Metro Logistics', 'is_active' => true],
        ];
        foreach ($clients as $client) { Client::create($client); }
    }
}
