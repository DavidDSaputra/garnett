<x-layouts.app>
    <div class="pt-24 pb-12 bg-slate-100 text-slate-dark border-b-8 border-slate-dark relative overflow-hidden">
        <!-- Decoration -->
        <div class="absolute right-0 top-0 w-1/3 h-full bg-solar-yellow -z-10 mix-blend-multiply opacity-20 transform -skew-x-12"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
            <div data-aos="fade-up">
                <a href="/services" class="inline-flex items-center gap-2 font-bold uppercase hover:text-solar-yellow border-b-2 border-currentColor mb-8 group">
                    <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Layanan
                </a>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-black uppercase leading-none tracking-tighter mb-6" data-aos="fade-up" data-aos-delay="100">
                {{ $service->title }}
            </h1>
            <p class="text-xl md:text-2xl font-medium max-w-3xl border-l-8 border-eco-green pl-6" data-aos="fade-up" data-aos-delay="200">
                {{ $service->short_description }}
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
                
                <div class="lg:col-span-2">
                    <div class="prose prose-lg prose-slate max-w-none">
                        @if($service->content)
                            {!! $service->content !!}
                        @else
                            <h2 class="text-3xl font-black uppercase mb-6">Arsitektur Sistem</h2>
                            <p class="font-medium text-lg leading-relaxed mb-6">
                                Sistem {{ $service->title }} dirancang dengan efisiensi brutal. Dengan menanggalkan komponen yang tidak perlu dan murni berfokus pada output daya maksimal dan keandalan, kami memberikan solusi yang mengungguli alternatif konvensional.
                            </p>
                            <p class="font-medium text-lg leading-relaxed mb-6">
                                Tim instalasi kami mengintegrasikan modul fotovoltaik tier-1 bersama dengan inverter tangguh yang mampu menahan kondisi ekstrem sambil mempertahankan efisiensi operasional puncak.
                            </p>
                            
                            <h3 class="text-2xl font-black uppercase mt-12 mb-6 border-b-4 border-solar-yellow pb-2 inline-block">Spesifikasi Teknis</h3>
                            <ul class="space-y-4 font-medium text-lg list-none pl-0">
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-eco-green shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    Modul Monocrystalline PERC Tier 1 (550Wp+)
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-eco-green shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    Inverter String Kelas Industri dengan efisiensi maksimal 98.6%
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-eco-green shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    Struktur pemasangan aluminium anodized yang dinilai mampu menahan beban angin hingga 50m/s
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-eco-green shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    Pemantauan cloud dan telemetri waktu nyata
                                </li>
                            </ul>
                        @endif
                    </div>
                    @if($service->slug === 'pjuts')
                        <div class="mt-16 space-y-16">
                            <!-- Section 1: All-in-One Component -->
                            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                                <div class="w-full md:w-1/2">
                                    <div class="border-4 border-slate-dark shadow-brutal bg-slate-100 p-6 flex justify-center">
                                        <img src="{{ asset('images/pjuts-4.png') }}" alt="Komponen PJUTS Terintegrasi" class="max-h-[300px] object-contain hover:scale-105 transition-transform duration-500">
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2">
                                    <h3 class="text-3xl font-black uppercase mb-4 text-solar-yellow"><span class="text-transparent" style="-webkit-text-stroke: 1px var(--color-slate-dark);">Sistem</span> Terintegrasi (All-in-One)</h3>
                                    <p class="font-medium text-lg leading-relaxed text-slate-700">
                                        Desain revolusioner yang menggabungkan panel surya monokristalin efisiensi tinggi, modul LED cerdas, baterai lithium LiFePO4 tahan lama, dan *smart controller* dalam satu unit terpadu. Tanpa kabel menjuntai, instalasi super cepat, dan perawatan yang jauh lebih minim dibandingkan sistem konvensional.
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Section 2: Residential Area -->
                            <div class="flex flex-col md:flex-row-reverse items-center gap-8 md:gap-12">
                                <div class="w-full md:w-1/2">
                                    <div class="border-4 border-slate-dark shadow-brutal overflow-hidden">
                                        <img src="{{ asset('images/pjuts-1.jpg') }}" alt="PJUTS Kawasan Perumahan" class="w-full h-[300px] object-cover hover:scale-105 transition-transform duration-500">
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2">
                                    <h3 class="text-3xl font-black uppercase mb-4">Penerangan <span class="text-solar-yellow underline decoration-4 underline-offset-4 decoration-slate-dark">Kawasan</span> Pintar</h3>
                                    <p class="font-medium text-lg leading-relaxed text-slate-700">
                                        Dilengkapi dengan sensor gerak (PIR) dan kontrol pencahayaan adaptif. Lampu akan meredup otomatis pada larut malam untuk menghemat baterai, dan akan kembali menyala terang 100% ketika mendeteksi kendaraan atau pejalan kaki yang lewat. Sangat ideal untuk keamanan perumahan dan jalan lingkungan.
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Section 3: Coastal / Extreme Environment -->
                            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                                <div class="w-full md:w-1/2">
                                    <div class="border-4 border-slate-dark shadow-brutal overflow-hidden">
                                        <img src="{{ asset('images/pjuts-2.png') }}" alt="PJUTS Jalan Tepi Pantai" class="w-full h-[300px] object-cover hover:scale-105 transition-transform duration-500">
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2">
                                    <h3 class="text-3xl font-black uppercase mb-4 text-solar-yellow"><span class="text-transparent" style="-webkit-text-stroke: 1px var(--color-slate-dark);">Tangguh</span> di Segala Cuaca</h3>
                                    <p class="font-medium text-lg leading-relaxed text-slate-700">
                                        Dirancang dengan sertifikasi IP65/IP66 tahan air dan debu. Chasis *die-cast aluminium alloy* dengan pelapis anti-korosi membuatnya sangat cocok dioperasikan di lingkungan ekstrem, termasuk area pesisir pantai dengan tingkat kelembapan dan salinitas (garam) tinggi yang rawan karat.
                                    </p>
                                </div>
                            </div>

                            <!-- Section 4: Highway illumination -->
                            <div class="flex flex-col md:flex-row-reverse items-center gap-8 md:gap-12">
                                <div class="w-full md:w-1/2">
                                    <div class="border-4 border-slate-dark shadow-brutal overflow-hidden">
                                        <img src="{{ asset('images/pjuts-3.jpg') }}" alt="PJUTS Jalan Raya Utama" class="w-full h-[300px] object-cover hover:scale-105 transition-transform duration-500">
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2">
                                    <h3 class="text-3xl font-black uppercase mb-4">Skalabilitas <span class="text-solar-yellow underline decoration-4 underline-offset-4 decoration-slate-dark">Jalan Raya</span></h3>
                                    <p class="font-medium text-lg leading-relaxed text-slate-700">
                                        Optik lensa asimetris khusus (*batwing distribution*) memancarkan cahaya merata tanpa menyilaukan mata pengendara. Dirancang untuk memenuhi regulasi pencahayaan jalan tol dan jalan raya utama provinsi, memastikan visibilitas maksimal di luar batas jangkauan ketersediaan listrik PLN.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @elseif($service->slug === 'ev-charging')
                        <div class="mt-16 space-y-16">
                            <!-- Section 1: Urban EV Infrastructure -->
                            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                                <div class="w-full md:w-1/2">
                                    <div class="border-4 border-slate-dark shadow-brutal overflow-hidden">
                                        <img src="{{ asset('images/ev-1.png') }}" alt="Infrastruktur EV Charging Perkotaan" class="w-full h-[350px] object-cover hover:scale-105 transition-transform duration-500">
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2">
                                    <h3 class="text-3xl font-black uppercase mb-4 text-[#3B82F6]"><span class="text-transparent" style="-webkit-text-stroke: 1px var(--color-slate-dark);">Infrastruktur</span> Pengisian Publik</h3>
                                    <p class="font-medium text-lg leading-relaxed text-slate-700">
                                        Stasiun <em>EV Charging</em> komersial yang dirancang dengan estetika modern untuk area perkotaan, pusat perbelanjaan, dan perkantoran elit. Dilengkapi layar sentuh interaktif, kompatibilitas universal (Type 2, CCS), dan kemampuan terhubung dengan sistem pembayaran digital.
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Section 2: Solar Carport EV Charging -->
                            <div class="flex flex-col md:flex-row-reverse items-center gap-8 md:gap-12">
                                <div class="w-full md:w-1/2">
                                    <div class="border-4 border-slate-dark shadow-brutal p-4 bg-slate-50 flex justify-center">
                                        <img src="{{ asset('images/ev-2.png') }}" alt="Solar Carport EV Charging" class="max-h-[350px] object-contain hover:scale-105 transition-transform duration-500">
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2">
                                    <h3 class="text-3xl font-black uppercase mb-4">Pengisian <span class="text-solar-yellow underline decoration-4 underline-offset-4 decoration-slate-dark">Tenaga Surya</span> Berkecepatan Tinggi</h3>
                                    <p class="font-medium text-lg leading-relaxed text-slate-700">
                                        Transformasikan lahan parkir Anda menjadi stasiun <em>Fast Charging</em> bebas emisi. Sistem <em>Solar Carport</em> menangkap energi matahari secara langsung, dan secara tangguh mendistribusikan daya stasiun <em>EV Charger</em> Anda tanpa melulu bergantung pada puncak beban <em>grid</em> kelistrikan PLN.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                
                <div class="lg:col-span-1">
                    <div class="brutal-card p-8 bg-solar-yellow border-8 border-slate-dark sticky top-32 shadow-brutal text-center lg:text-left">
                        <div class="hidden lg:block w-16 h-16 bg-white border-4 border-slate-dark mb-8 flex items-center justify-center shadow-[4px_4px_0px_0px_white]">
                            <svg class="w-8 h-8 text-slate-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-3xl font-black uppercase mb-4 leading-tight">Amankan<br>Masa Depan Energi</h3>
                        <p class="font-bold text-lg mb-8">Berhenti membayar mahal untuk ketergantungan utilitas. Mulai hasilkan listrik Anda sendiri.</p>
                        <a href="/contact" class="brutal-btn w-full bg-slate-dark text-white hover:bg-eco-green">Minta Penawaran</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</x-layouts.app>
