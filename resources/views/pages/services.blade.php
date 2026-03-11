<x-layouts.app>
    <div class="pt-24 pb-12 bg-slate-dark text-white border-b-8 border-eco-green">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
            <h1 class="text-6xl md:text-8xl font-black uppercase leading-none tracking-tighter mb-6" data-aos="fade-up">PERFORMA <span class="text-transparent" style="-webkit-text-stroke: 2px var(--color-eco-green);">MENTAH</span></h1>
            <p class="text-xl md:text-2xl font-medium max-w-3xl border-l-8 border-solar-yellow pl-6" data-aos="fade-up" data-aos-delay="100">
                Jelajahi jajaran solusi energi surya kelas industri kami yang dirancang untuk memberikan output maksimal dan kemandirian absolut.
            </p>
        </div>
    </div>

    <!-- Services Grid -->
    <section class="py-24 bg-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($services as $service)
                    <x-service-card 
                        :title="$service->title" 
                        :description="$service->short_description" 
                        link="/services/{{ $service->slug }}" 
                        :icon="$service->icon_image ? asset('storage/' . $service->icon_image) : null" />
                @empty
                    <div class="col-span-full py-12 text-center text-xl font-bold border-4 border-dashed border-slate-300 text-slate-500 uppercase">
                        Belum Ada Layanan yang Tersedia. Tambahkan melalui Dashboard Admin.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Installation Process -->
    <section class="py-24 bg-white border-t-8 border-slate-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16" data-aos="fade-up">
                <div>
                    <h2 class="text-5xl font-black uppercase leading-none tracking-tight">Protokol<br><span class="text-solar-yellow" style="-webkit-text-stroke: 2px var(--color-slate-dark);">Penyebaran</span></h2>
                </div>
            </div>
            
            <div class="space-y-6 max-w-4xl">
                <!-- Step -->
                <div class="flex bg-white brutal-border shadow-brutal p-8 items-center gap-8 group" data-aos="fade-up">
                    <div class="text-7xl font-black text-transparent" style="-webkit-text-stroke: 2px var(--color-slate-dark);">01</div>
                    <div>
                        <h3 class="text-3xl font-black uppercase mb-2">Penilaian Taktis</h3>
                        <p class="font-medium text-lg text-slate-700">Audit lokasi yang komprehensif untuk menentukan penempatan modul optimal, integritas atap, dan pola konsumsi daya.</p>
                    </div>
                </div>
                <!-- Step -->
                <div class="flex bg-solar-yellow brutal-border shadow-brutal p-8 items-center gap-8 group ml-0 md:ml-12" data-aos="fade-up">
                    <div class="text-7xl font-black text-slate-dark">02</div>
                    <div>
                        <h3 class="text-3xl font-black uppercase mb-2">Rekayasa Sistem</h3>
                        <p class="font-medium text-lg text-slate-dark">Menyusun skema struktural dan kelistrikan untuk memastikan hasil maksimal dan kepatuhan terhadap standar.</p>
                    </div>
                </div>
                <!-- Step -->
                <div class="flex bg-white brutal-border shadow-brutal p-8 items-center gap-8 group ml-0 md:ml-24" data-aos="fade-up">
                    <div class="text-7xl font-black text-transparent" style="-webkit-text-stroke: 2px var(--color-slate-dark);">03</div>
                    <div>
                        <h3 class="text-3xl font-black uppercase mb-2">Eksekusi & Instalasi</h3>
                        <p class="font-medium text-lg text-slate-700">Instalasi presisi secara cepat oleh teknisi bersertifikat kami dengan waktu henti operasional minimal.</p>
                    </div>
                </div>
                <!-- Step -->
                <div class="flex bg-eco-green text-white brutal-border border-slate-dark shadow-brutal p-8 items-center gap-8 group ml-0 md:ml-36" data-aos="fade-up">
                    <div class="text-7xl font-black text-white">04</div>
                    <div>
                        <h3 class="text-3xl font-black uppercase mb-2">Aktivasi Sistem</h3>
                        <p class="font-medium text-lg text-white">Sinkronisasi jaringan, pengujian beban akhir, dan penyerahan sistem kepada klien.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-cta-section />
</x-layouts.app>
