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
