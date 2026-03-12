<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class NewBlogPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Masa Depan Ketahanan Energi: Peran PLTS Skala Besar di Indonesia',
                'slug' => 'peran-plts-skala-besar-di-indonesia',
                'excerpt' => 'Transisi menuju energi terbarukan berskala besar bukan sekadar janji, ini adalah realitas ketahanan utilitas masa depan.',
                'content' => '<p class="mb-4 text-lg">Transisi menuju energi terbarukan kini menjadi fokus utama berbagai industri, dan <a href="https://garnettpersada.com/" class="text-solar-yellow hover:underline font-bold">Garnett Persada</a> hadir sebagai pionir dalam merancang sistem pembangkit listrik tenaga surya yang efisien dan andal. Instalasi PLTS berskala besar mulai mendominasi lanskap energi nasional, tidak hanya karena komitmen lingkungan, namun juga karena rasionalisasi ekonomi yang sangat masuk akal bagi skala utilitas masa depan.</p>

<h2 class="text-3xl font-black uppercase mt-12 mb-6">Mengapa PLTS Skala Besar Menjadi Solusi Utama?</h2>
<p class="mb-4">Pada level fundamental, eksistensi dan <a href="/blog/peran-plts-skala-besar-di-indonesia" class="font-bold border-b-2 border-eco-green hover:text-eco-green transition-colors">peran PLTS skala besar di Indonesia</a> sangat krusial dalam memangkas defisit ketergantungan bahan bakar fosil yang mencemari karbon. Pembangkit fotovoltaik utilitas ini mencakup hamparan super luas panel surya yang dirancang khusus untuk memanen paparan radiasi (irradiance) matahari dengan output jutaan watt (megawatt), memastikan rantai pasok industri tidak mandek.</p>

<h3 class="text-2xl font-black uppercase mt-10 mb-4 border-l-4 border-slate-dark pl-4">Efisiensi Konstruksi dan Integrasi Jaringan Terpusat</h3>
<p class="mb-4">Berbeda dari instalasi atap perumahan kecil, pembangkit skala utilitas membutuhkan manajemen lahan dan kontur pembumian yang teramat cermat. Arsitektur pemasangan modern mengadopsi struktur tracking mekanik untuk memaksa modul silikon monocrystalline terus berhadapan tegak lurus mengikuit bujur matahari (solar tracker). Hal presisi semacam ini melipatgandakan produktivitas ekstraksi energi hingga 25% melampaui kemampuan tata letak statis miring biasa.</p>

<h4 class="text-xl font-bold uppercase mt-8 mb-2">Keberlanjutan Sistem dengan Penyimpanan Kapasitas Ekstrem Baterai LiFePO4</h4>
<p class="mb-4">Ancaman utama fluktuasi cuaca tak dipungkiri sering membayangi laju produksi surya pada siang bolong mendung. Isu ini langsung dinetralisir lewat penyuntikan pasokan bank penyimpanan energi, selengkapnya Anda bisa memahami kapabilitas canggih tersebut dalam ulasan mengenai <a href="/blog/sistem-penyimpanan-energi-baterai" class="font-bold underline text-solar-yellow underline-offset-4 decoration-slate-dark">sistem penyimpanan energi baterai</a> yang menjadi tameng wajib bagi infrastruktur surya raksasa penguasa kawasan hijau masa ini.</p>',
                'author' => 'Ahmad Teknisi Utama',
                'published_at' => now(),
                'featured_image' => 'blog/post-1.png'
            ],
            [
                'title' => 'Panduan Lengkap Sistem Penyimpanan Energi Baterai (BESS) untuk Rumah',
                'slug' => 'sistem-penyimpanan-energi-baterai',
                'excerpt' => 'Menyimpan listrik sisa siang hari demi keamanan energi dan proteksi kelistrikan sepanjang malam tanpa henti.',
                'content' => '<p class="mb-4 text-lg">Menghadapi pemadaman jaringan grid luar yang acapkali terjadi mendadak, solusi kemandirian daya mutlak dari <a href="https://garnettpersada.com/" class="text-solar-yellow hover:underline font-bold">Garnett Persada</a> dengan sangat tangkas memikat perhatian pengembang perumahan atau pemilik vila modern yang enggan bertoleransi terhadap aliran listrik yang terputus sekejap mata. Penggunaan Sistem Penyimpanan Energi Baterai cerdas mengubah tatanan hidup, memungkinkan fasilitas terputus dari rantai utilitas usang.</p>

<h2 class="text-3xl font-black uppercase mt-12 mb-6">Cara Kerja Komponen Penyimpan Daya (Battery Energy Storage) Kecepatan Ekstra</h2>
<p class="mb-4">Secara struktur fundamental, penerapan teknologi <a href="/blog/sistem-penyimpanan-energi-baterai" class="font-bold border-b-2 border-eco-green hover:text-eco-green transition-colors">sistem penyimpanan energi baterai</a> difokuskan untuk mencegat arus fotovoltaik (PV) berlebih di siang terik yang merembes sia-sia andai tak terserap beban rumah. Seluruh limpahan voltase dari kanopi surya dikonversi menjadi energi kimia padat dalam rak bank storage canggih untuk kemudian diluncurkan menembus kabel rumah tatkala senja merayap perlahan.</p>

<h3 class="text-2xl font-black uppercase mt-10 mb-4 border-l-4 border-slate-dark pl-4">Revolusi Kimiawi Lithium Iron Phosphate (LiFePO4) Anti Usang</h3>
<p class="mb-4">Arsitektur Baterai timbal-asam dan Gel kuno sudah tergerus habis. Generasi terobosan berbahan dasar Lithium Iron Phosphate jauh melampaui keruntuhan korosif pesaing lawasnya; ia stabil di suhu ruang ekstrem, kebal terbakar liar, dan tidak kehabisan siklus memori daya hingga menembus angka pemakaian 6.000 (life cycle) putaran pengosongan dalam di atas 80% DoD *(Depth of Discharge)*.</p>

<h4 class="text-xl font-bold uppercase mt-8 mb-2">Sinkronisasi Jantung Performa pada Rangka Atap Tingkat Dua</h4>
<p class="mb-4">Modul baterai bertumpuk ini mampu merapat indah di panel dinding fasad atau berdampingan dengan unit kondensor listrik utama rumah perbukitan off-grid tanpa kesan semrawut industri. Kombinasinya dijamin amat mematikan apabila Anda mengeksekusi pemasangannya sesuai taklimat dalam <a href="/blog/panduan-instalasi-plts-atap-arsitektur" class="font-bold underline text-solar-yellow underline-offset-4 decoration-slate-dark">panduan instalasi PLTS atap</a>, yang mana sirkuit atas murni berfungsi mengisi ulang bank baterai menakjubkan ini secara real-time kapanpun mentari bersinar tajam.</p>',
                'author' => 'Budi Supervisor',
                'published_at' => now(),
                'featured_image' => 'blog/post-2.jpg'
            ],
            [
                'title' => 'Panduan Instalasi PLTS Atap Estetis pada Arsitektur Rumah Modern',
                'slug' => 'panduan-instalasi-plts-atap-arsitektur',
                'excerpt' => 'Tidak hanya efisiensi watt-peak tinggi, penataan sudut kemiringan atap menjadi ujung tombak arsitektur ramah lingkungan masa kini.',
                'content' => '<p class="mb-4 text-lg">Keputusan masif beralih memeluk erat pembangkit daya panel surya bukan taktik kuno yang mengabaikan wajah perwajahan fasad bangunan eksklusif, dan pada celah sinilah dedikasi murni <a href="https://garnettpersada.com/" class="text-solar-yellow hover:underline font-bold">Garnett Persada</a> menyingkapkan taktik agung merepresentasikan tata letak fungsional tanpa mengkhianati kaidah kecantikan industri arsitektur mewah. Menerapkan disiplin estetik ke presisi enjinering fotovoltaik brutal menempatkan pemasangan array atap kami ke puncak performa ekstrem, mencetak efisiensi tinggi serta harmonis dipandang dari jalan lingkar luar properti.</p>

<h2 class="text-3xl font-black uppercase mt-12 mb-6">Ilmu Desain Orientasi Sudut Pitch Pada Jurang Bidang Miring Bangunan</h2>
<p class="mb-4">Menyiapkan konfigurasi optimal seputar <a href="/blog/panduan-instalasi-plts-atap-arsitektur" class="font-bold border-b-2 border-eco-green hover:text-eco-green transition-colors">panduan instalasi PLTS atap</a> mengikat kencang pada perburuan paparan insolasi azimuth ekuator sejati. Perluasan bidang area miring bernuansa skandinavia sekalipun ditata akurat melawan rute perjalanan titik zenit matahari; di negeri kitalah atap miring 10 sampai 15 derajat disimpulkan sebagai gerbang paling menakutkan bagi gelombang panas untuk ditangkap utuh lembaran wafer monokristalin gelap.</p>

<h3 class="text-2xl font-black uppercase mt-10 mb-4 border-l-4 border-slate-dark pl-4">Tulang Punggung Rangka Aluminium Anodized Super Agresif Penahan Badai</h3>
<p class="mb-4">Sekedar terlihat mempesona belum menyentuh inti jaminan garansi. Struktur penahan (*mounting bracket system*) dibuat mengandalkan profil logam tebal anti oksida dengan jepitan klem tersembunyi ber-rating spesifikasi penahan traksi angin siklon pesisir hingga benturan kecepatan 50 meter per detik dengan mutlak mematri pondasi rel-rel aluminium utuh.</p>

<h4 class="text-xl font-bold uppercase mt-8 mb-2">Simfoni Aliran Tenaga Searah Melibas Celah Penyaluran AC Induk</h4>
<p class="mb-4">Modul surya perkasa di punggung hunian hanya bagaikan bongkahan benda mati bisu meretas voltase searah yang tidak dapat menggerakkan motor pendingin runanga (AC). Rantai listrik murni ini harus terlebih dahulu dijinakkan, diarahkan dengan cerdas dan direkonsiliasikan ke fasa sinkron oleh kecanggihan <a href="/blog/teknologi-inverter-hybrid-terbaru" class="font-bold underline text-solar-yellow underline-offset-4 decoration-slate-dark">teknologi inverter hybrid terbaru</a> yang bertindak sebagai jenderal lapangan penguasa seluruh skema utilitas listrik modern bangunan elit Anda.</p>',
                'author' => 'Reza Arsitek Surya',
                'published_at' => now(),
                'featured_image' => 'blog/post-3.jpg'
            ],
            [
                'title' => 'Mengoptimalkan Efisiensi Daya Listrik Melalui Teknologi Inverter Hybrid Generasi Terbaru',
                'slug' => 'teknologi-inverter-hybrid-terbaru',
                'excerpt' => 'Mengungkap rahasia di balik sirkuit intervensi pembebanan puncak canggih untuk mengawal stabilisasi frekuensi dan sinkronisasi jala-jala off-grid mandiri.',
                'content' => '<p class="mb-4 text-lg">Mempertahankan dominasi arus pengaliran bolak-balik tanpa jeda yang tak terkendali di antara beban jaringan utilitas tiang PLN negara, deretan surya atap menderu, serta tandon cadangan setrom menuntut kehadiran akal komputasi sentral super responsif, dan titik temu arsitektur logis kelistrikan brutal inilah yang disodorkan <a href="https://garnettpersada.com/" class="text-solar-yellow hover:underline font-bold">Garnett Persada</a> guna melindungi infrastruktur kritis dari mati padam yang bisa menjungkirbalikkan operasional bisnis seketika.</p>

<h2 class="text-3xl font-black uppercase mt-12 mb-6">Fajar Era Kemandirian Energi Sinkron (Micro-Grid Automatiton Era)</h2>
<p class="mb-4">Rahasia efisiensi sadis dari penunjang <a href="/blog/teknologi-inverter-hybrid-terbaru" class="font-bold border-b-2 border-eco-green hover:text-eco-green transition-colors">teknologi inverter hybrid terbaru</a> masa depan bersemayam murtad pada kesanggupannya memutuskan hubungan (islanding switch bypass) saat utilitas luar rontok menjadi sekadar beban padam tak berarti dalam durasi tak kentara di bawah sepuluh milidetik; mempertahankan sistem komputasi berfasa tinggi (tiga fasa) beroperasi dingin total tanpa berkedip apalagi mereset instrumen pabrik krusial nan bernominal selangit.</p>

<h3 class="text-2xl font-black uppercase mt-10 mb-4 border-l-4 border-slate-dark pl-4">Kemurnian Modulasi Gelombang Sinus Sintetis Tingkat Presisi Laboratorium</h3>
<p class="mb-4">Alat cerdik ini mencacah dan mereka ulang hantaman asupan panel fotovoltaik direct-current kasar menjadi balutan aliran bolak-balik berpotongan bentuk gelombang purna presisi (Pure Sine Wave) membuang residu kotoran dengung magnetik THD hingga menekan kerugian konversi semata pada rasio mikroskopis, menghasilkan daya kerja sangat optimal memutar rasio trafo beban berat motor kompresor iklim bangunan korporat.</p>

<h4 class="text-xl font-bold uppercase mt-8 mb-2">Resistensi Dinding Isolator Logam Kelas Industri Menahan Paparan Ekstrem</h4>
<p class="mb-4">Diplot menantang embun garam pekat tepi ombak pesisir atau gigitan dingin bekunya suhu dataran puncak hutan alpine, balok elektronik beringas ini mengandalkan pelat cangkang penukar suhu tanpa kipas bising dan sambungan tanah (earth bound) pelucut trajektori busur petir tajam, menuntun para *solar expert* senantiasa menetapkan mandat ketaatan baku di atas <a href="/blog/standar-keselamatan-pemasangan-panel-surya" class="font-bold underline text-solar-yellow underline-offset-4 decoration-slate-dark">standar keselamatan pemasangan panel surya</a> untuk mengeliminir ancaman konsleting di seluruh dinding perbukitan instalasi bebas malapetaka kelalaian pekerja.</p>',
                'author' => 'Hendra Ahli Kelistrikan',
                'published_at' => now(),
                'featured_image' => 'blog/post-4.jpg'
            ],
            [
                'title' => 'Eksklusif: Standar Keselamatan Ahli dan Mutu Prosedur Pemasangan Panel Surya Tingkat Industri Mumpuni',
                'slug' => 'standar-keselamatan-pemasangan-panel-surya',
                'excerpt' => 'Mitigasi fatalitas di batas nol pada puncak tertinggi. Pelajari disiplin pengeksekusian daya tegangan tinggi ribuan volt mematikan oleh tangan dingin teknokrat lapangan handal kami.',
                'content' => '<p class="mb-4 text-lg">Sekadar anggapan remeh bahwa memasang kaca raksasa penangkap listrik ribuan joule searah bernuansa panas mendidih di kemiringan gedung tinggi bisa selesai asal baut kencang sama naifnya bertaruh di tengah badai guruh, itu sebabnya personel <a href="https://garnettpersada.com/" class="text-solar-yellow hover:underline font-bold">Garnett Persada</a> tak sedikit pun menawar pelampung hidup berbalut lanyard tali tunggal pengait atap anti anjlok serta pengintaian prosedur K3 tersertifikat kental setiap membentangkan karpet modul bertenaga brutal menangkis insiden maut setrum dari sirkuit berliku.</p>

<h2 class="text-3xl font-black uppercase mt-12 mb-6">Filosofi Proteksi Kabel Anti Perambatan Nyala Api Terbakar Paripurna</h2>
<p class="mb-4">Merapalkan <a href="/blog/standar-keselamatan-pemasangan-panel-surya" class="font-bold border-b-2 border-eco-green hover:text-eco-green transition-colors">standar keselamatan pemasangan panel surya</a> pada pakem global menghalalkan kewajiban tanpa kompromi memakai selubung logam pelindung anti-UV tebal bagi saluran utama silang sentuh, menancapkan grounding kabel kuning-hijau menghujam keras menusuk pasak lempengan tembaga purna murni agar ohm impedansi jatuh miskin pada batas di bawah lima menelan setiap amarah residu percikan liar agar api korslet sirna pada awal embrio pijar.</p>

<h3 class="text-2xl font-black uppercase mt-10 mb-4 border-l-4 border-slate-dark pl-4">Doktrin Komisioning Inspeksi Eksekusi Sinar Lazer Sebelum Jantung Dinyalakan</h3>
<p class="mb-4">Saklar utama sirkuit panel utilitas pemutus mustahil didongkrak tajam menembakkan listrik menuju panel distribusi tanpa melewatu perlakuan militer pengecekan Megger meter dan *thermal imaging drons*, memastikan tidak secuilpun pin sambungan konektor MC4 mengendur yang beresiko melumer menghanguskan baris rentetan kaca berhutan konduktor seribu watt per kawat di bawah panggung teater ekosistem daya brutal buatan manusia.</p>

<h4 class="text-xl font-bold uppercase mt-8 mb-2">Aplikasi Fatalis Tanggung Jawab Mega Proyek Raksasa Utilitas Publik</h4>
<p class="mb-4">Regulasi proteksi nyawa absolut yang dicambuk paksa ke punggung personil instalatir komando rumah tunggal tak ayal menjadi landasan yang lebih brutal diproyeksikan manakala tim lapangan menyerbu hamparan savana luas tak bertuan dalam rangka merakit instalasi bertenaga magis memicu ledakan performa <a href="/blog/peran-plts-skala-besar-di-indonesia" class="font-bold underline text-solar-yellow underline-offset-4 decoration-slate-dark">peran PLTS skala besar di indonesia</a> agar menembus urat nadi kelistrikan negara tanpa menebar maut pada nyawa sehelai rambut pun di hamparan tanah lapang tapak suci solar energy kita.</p>',
                'author' => 'Tim Eksekusi K3 garnett',
                'published_at' => now(),
                'featured_image' => 'blog/post-5.jpg'
            ]
        ];

        foreach ($posts as $postData) {
            Post::updateOrCreate(
                ['slug' => $postData['slug']],
                $postData
            );
        }
    }
}
