<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class NewTestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'Rio Gunawan', 
                'company_name' => 'Manufaktur Logam Utama', 
                'rating' => 5, 
                'feedback' => 'Beban overhead pabrik kami sangat masif. Instalasi PV megawatt dari Garnett Persada menekan biaya kami secara brutal dan stabil. Investasi terbaik tahun ini.'
            ],
            [
                'client_name' => 'dr. Anita', 
                'company_name' => 'Klinik Medika Terpadu', 
                'rating' => 5, 
                'feedback' => 'Sistem hybrid yang dipasang menjamin peralatan medis kami tak pernah kehilangan daya sedetikpun saat PLN padam. Eksekusi teknisi sangat presisi dan bersih.'
            ],
            [
                'client_name' => 'Hasanuddin', 
                'company_name' => 'Perkebunan Sawit', 
                'rating' => 4, 
                'feedback' => 'Kami sangat mengandalkan sistem off-grid di pedalaman bertenaga baterai LiFePO4 rancangan Garnett. Solusi tanpa tanding untuk camp logistik kami yang terisolasi.'
            ],
            [
                'client_name' => 'Andi Wijaya', 
                'company_name' => 'SPBU & Rest Area Tol', 
                'rating' => 5, 
                'feedback' => 'Tiang PJUTS dan stasiun EV Charging langsung mereduksi beban gardu kami. Pencahayaannya sangat terang menembus hujan badai di jalan tol semalaman.'
            ]
        ];

        foreach ($testimonials as $test) {
            Testimonial::create($test);
        }
    }
}
