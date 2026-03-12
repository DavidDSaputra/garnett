<x-layouts.app>
    <!-- Hero Section -->
    <x-hero-section 
        title="MEMBERDAYAKAN MASA DEPAN DENGAN SURYA" 
        subtitle="Solusi energi terbarukan yang efisien, dan modern untuk kompleks perumahan dan industri."
        link="/contact" />

    <!-- Garnett Banner -->
    <section class="border-b-8 border-slate-dark bg-slate-100">
        <img src="{{ asset('images/garnett-sun.png') }}" alt="Garnett Solar Technology" class="w-full h-auto object-contain max-h-[300px] md:max-h-[500px]">
    </section>

    <!-- Trusted Clients Scrolling Marquee -->
    <section class="py-12 border-b-8 border-slate-dark bg-white overflow-hidden relative">
        <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-white to-transparent z-10"></div>
        <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-white to-transparent z-10"></div>
        
        <div x-data="{}" x-init="$nextTick(() => { 
                let content = $refs.content;
                let clone = content.cloneNode(true);
                clone.setAttribute('aria-hidden', true);
                $refs.container.appendChild(clone);
            })" class="flex overflow-hidden w-full relative">
            <div x-ref="container" class="flex w-fit items-center animate-[marquee_20s_linear_infinite]">
                <div x-ref="content" class="flex w-max shrink-0 items-center justify-around gap-16 px-8">
                    <h3 class="text-xl md:text-2xl font-black uppercase text-slate-300">Dipercaya Oleh</h3>
                    @if(isset($clients) && $clients->count() > 0)
                        @foreach($clients as $client)
                            <div class="h-16 md:h-20 w-auto min-w-[12rem] flex items-center justify-center shrink-0">
                                @if($client->logo_image)
                                    <img src="{{ asset('storage/' . $client->logo_image) }}" alt="{{ $client->name }}" class="h-full w-auto object-contain hover:scale-110 transition-transform">
                                @else
                                    <span class="font-black text-slate-400 uppercase tracking-widest">{{ $client->name }}</span>
                                @endif
                            </div>
                        @endforeach
                    @else
                        @for($i = 1; $i <= 6; $i++)
                            <div class="h-12 w-48 bg-slate-200 border-2 border-slate-dark flex items-center justify-center font-bold text-slate-500 uppercase tracking-widest shrink-0">Perusahaan {{ $i }}</div>
                        @endfor
                    @endif
                </div>
            </div>
        </div>
        
        <style>
            @keyframes marquee {
                from { transform: translateX(0); }
                to { transform: translateX(-50%); }
            }
            .animate-\[marquee_20s_linear_infinite\] {
                animation: marquee 20s linear infinite;
            }
            .gap-16 { gap: 4rem; }
        </style>
    </section>

    <!-- Renewable Energy Info Section -->
    <section class="py-16 md:py-24 bg-solar-yellow text-slate-dark border-y-8 border-slate-dark relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, black 1px, transparent 0); background-size: 24px 24px;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black uppercase leading-none tracking-tight mb-6">Energi <span class="bg-slate-dark text-white px-3 mt-2 -rotate-2 inline-block shadow-brutal-sm">Masa Depan</span></h2>
                    <p class="text-xl font-medium mb-8 text-slate-800">Transisi ke energi surya bukan sekadar tren, melainkan langkah krusial untuk kelestarian bumi. Energi matahari adalah sumber daya tak terbatas yang menekan emisi karbon secara drastis.</p>
                    <div class="inline-flex flex-col space-y-4">
                        <div class="flex items-center gap-4 bg-white border-4 border-slate-dark p-4 shadow-brutal-sm hover:translate-x-2 transition-transform">
                            <div class="bg-eco-green p-2 border-2 border-slate-dark text-white shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            </div>
                            <span class="font-bold uppercase tracking-widest text-sm md:text-base">Matahari Bersinar Bebas Tiada Batas</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white border-4 border-slate-dark p-4 shadow-brutal-sm hover:translate-x-2 transition-transform">
                            <div class="bg-slate-dark p-2 border-2 border-slate-dark text-white shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <span class="font-bold uppercase tracking-widest text-sm md:text-base">Nol Emisi Karbon. Ramah Lingkungan.</span>
                        </div>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="bg-white border-8 border-slate-dark p-8 shadow-brutal transform rotate-2 hover:rotate-0 transition-transform duration-300">
                        <h3 class="text-2xl font-black uppercase mb-4 text-eco-green border-b-4 border-slate-dark pb-2 inline-block">Fakta Surya</h3>
                        <div class="flex flex-col gap-2 mb-6">
                            <p class="text-5xl md:text-6xl font-black text-slate-dark">1 Jam</p>
                            <p class="text-xl font-bold uppercase tracking-widest text-slate-500">Sinar Matahari</p>
                        </div>
                        <p class="text-lg font-medium leading-relaxed text-slate-700">Energi dari cahaya matahari yang menyinari bumi dalam satu jam penuh mampu memenuhi seluruh kebutuhan energi manusia secara global selama **satu tahun penuh**. Potensi masif yang menunggu untuk dioptimalkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6 Core Solutions Section -->
    <section class="py-16 md:py-24 bg-slate-dark text-white relative border-y-8 border-solar-yellow">
        <!-- Decoration -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-eco-green rounded-full blur-[100px] opacity-20 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="mb-16" data-aos="fade-up">
                <span class="inline-block border-2 border-white bg-transparent text-white font-black px-4 py-1 text-sm uppercase tracking-widest mb-4">6 Pilar Utama</span>
                <h2 class="text-4xl md:text-6xl lg:text-7xl font-black uppercase leading-none tracking-tight mb-6">Sistem <span class="text-solar-yellow">Energi</span><br class="hidden md:block">Komprehensif.</h2>
                <p class="text-xl font-medium text-slate-300 max-w-3xl">Kami menyediakan enam pilar solusi energi terbarukan yang dirancang secara brutal untuk menjawab setiap tantangan kelistrikan, dari perumahan hingga skala industri berat.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- 1. On-Grid -->
                <div class="bg-white border-4 border-slate-dark p-8 group hover:-translate-y-2 transition-transform shadow-[8px_8px_0px_0px_#FDB813]" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-16 h-16 bg-slate-dark text-solar-yellow flex items-center justify-center border-4 border-slate-dark mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black uppercase mb-4 text-slate-dark">Solar<br>On-Grid</h3>
                    <p class="text-slate-600 font-medium mb-6">Sistem solar terhubung jaringan. Mengimbangi tagihan listrik dan memberikan ROI langsung tanpa baterai. Ideal untuk area dengan listrik PLN yang stabil.</p>
                    <a href="/services/on-grid" class="inline-flex items-center text-slate-dark font-black uppercase tracking-widest group-hover:text-eco-green transition-colors border-b-2 border-slate-dark pb-1">
                        Pelajari <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

                <!-- 2. Off-Grid -->
                <div class="bg-white border-4 border-slate-dark p-8 group hover:-translate-y-2 transition-transform shadow-[8px_8px_0px_0px_#1F7A63]" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-slate-dark text-eco-green flex items-center justify-center border-4 border-slate-dark mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black uppercase mb-4 text-slate-dark">Solar<br>Off-Grid</h3>
                    <p class="text-slate-600 font-medium mb-6">Kemandirian energi absolut. Sistem terpisah dari jaringan listrik utama, menggunakan baterai berkapasitas tinggi untuk daya 24 jam nonstop di lokasi terpencil.</p>
                    <a href="/services/off-grid" class="inline-flex items-center text-slate-dark font-black uppercase tracking-widest group-hover:text-eco-green transition-colors border-b-2 border-slate-dark pb-1">
                        Pelajari <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

                <!-- 3. Hybrid -->
                <div class="bg-white border-4 border-slate-dark p-8 group hover:-translate-y-2 transition-transform shadow-[8px_8px_0px_0px_#FFFFFF]" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-slate-dark text-white flex items-center justify-center border-4 border-slate-dark mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black uppercase mb-4 text-slate-dark">Solar<br>Hybrid</h3>
                    <p class="text-slate-600 font-medium mb-6">Dua keunggulan dalam satu. Kurangi tagihan dengan daya dari PLN, dengan baterai cadangan cerdas untuk terus menyala saat terjadi pemadaman.</p>
                    <a href="/services/hybrid" class="inline-flex items-center text-slate-dark font-black uppercase tracking-widest group-hover:text-eco-green transition-colors border-b-2 border-slate-dark pb-1">
                        Pelajari <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

                <!-- 4. EV Charging -->
                <div class="bg-white border-4 border-slate-dark p-8 group hover:-translate-y-2 transition-transform shadow-[8px_8px_0px_0px_#FDB813]" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-slate-dark text-solar-yellow flex items-center justify-center border-4 border-slate-dark mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black uppercase mb-4 text-slate-dark">Pengisian<br>EV</h3>
                    <p class="text-slate-600 font-medium mb-6">Stasiun pengisian mobil listrik komersial berkecepatan tinggi yang terintegrasi surya, memaksimalkan surplus daya bersih untuk mobilitas masa depan.</p>
                    <a href="/services/ev-charging" class="inline-flex items-center text-slate-dark font-black uppercase tracking-widest group-hover:text-eco-green transition-colors border-b-2 border-slate-dark pb-1">
                        Pelajari <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

                <!-- 5. PJUTS -->
                <div class="bg-white border-4 border-slate-dark p-8 group hover:-translate-y-2 transition-transform shadow-[8px_8px_0px_0px_#1F7A63]" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-slate-dark text-eco-green flex items-center justify-center border-4 border-slate-dark mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black uppercase mb-4 text-slate-dark">Penerangan<br>PJUTS</h3>
                    <p class="text-slate-600 font-medium mb-6">Penerangan Jalan Umum bertenaga surya. Komponen standar tinggi untuk bertahan di cuaca ekstrem dengan visibilitas sempurna malam ke malam.</p>
                    <a href="/services/pjuts" class="inline-flex items-center text-slate-dark font-black uppercase tracking-widest group-hover:text-eco-green transition-colors border-b-2 border-slate-dark pb-1">
                        Pelajari <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

                <!-- 6. Industrial -->
                <div class="bg-white border-4 border-slate-dark p-8 group hover:-translate-y-2 transition-transform shadow-[8px_8px_0px_0px_#FFFFFF]" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 bg-slate-dark text-white flex items-center justify-center border-4 border-slate-dark mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black uppercase mb-4 text-slate-dark">Sistem<br>Industri</h3>
                    <p class="text-slate-600 font-medium mb-6">Pembangkit tenaga surya kapasitas raksasa (megawatt) khusus untuk manufter dan pabrik guna menekan biaya overhead kelistrikan secara masif.</p>
                    <a href="/services/industrial" class="inline-flex items-center text-slate-dark font-black uppercase tracking-widest group-hover:text-eco-green transition-colors border-b-2 border-slate-dark pb-1">
                        Pelajari <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Solar Benefits Section -->
    <section class="py-16 md:py-24 bg-slate-100 border-y-4 border-slate-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black uppercase leading-none tracking-tight mb-8">Mengapa <span class="bg-solar-yellow px-2 inline-block -rotate-2 border-4 border-slate-dark shadow-brutal mt-2">Solar Panel?</span></h2>
                    
                    <div class="space-y-8">
                        <div class="flex gap-6 group">
                            <div class="w-16 h-16 shrink-0 bg-white border-4 border-slate-dark flex items-center justify-center shadow-brutal group-hover:-translate-y-1 transition-transform">
                                <span class="font-black text-2xl">01</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-black uppercase mb-2">Penghematan Energi</h3>
                                <p class="text-lg font-medium text-slate-600">Kurangi secara drastis atau hilangkan tagihan listrik bulanan Anda. Lindungi diri Anda dari kenaikan biaya energi.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-6 group">
                            <div class="w-16 h-16 shrink-0 bg-white border-4 border-slate-dark flex items-center justify-center shadow-brutal group-hover:-translate-y-1 transition-transform">
                                <span class="font-black text-2xl mt-1">02</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-black uppercase mb-2">Investasi Jangka Panjang</h3>
                                <p class="text-lg font-medium text-slate-600">Tingkatkan nilai properti Anda dengan sistem yang menguntungkan diri sendiri dan memberikan ROI hingga 20% per tahun.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-6 group">
                            <div class="w-16 h-16 shrink-0 bg-solar-yellow border-4 border-slate-dark flex items-center justify-center shadow-brutal group-hover:-translate-y-1 transition-transform">
                                <span class="font-black text-2xl mt-1">03</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-black uppercase mb-2">Kemandirian Energi</h3>
                                <p class="text-lg font-medium text-slate-600">Bebaskan diri dari jaringan listrik utama. Hasilkan daya Anda sendiri yang bersih dan terbarukan langsung dari atap Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2" data-aos="fade-left">
                    <div class="relative p-4 bg-white border-8 border-slate-dark shadow-brutal-lg transform rotate-2 hover:rotate-0 transition-transform duration-500">
                        <img src="{{ asset('images/rumah-solar.jpg') }}" alt="Instalasi Rumah Solar" class="w-full h-auto border-4 border-slate-dark object-cover aspect-video transition-all duration-300">
                        <div class="absolute -bottom-8 -left-8 bg-eco-green text-white p-6 border-4 border-slate-dark shadow-brutal">
                            <span class="block text-4xl font-black">25+</span>
                            <span class="block text-sm font-bold uppercase tracking-widest">Tahun Garansi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Installation Process Toolbar -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black uppercase leading-none tracking-tight mb-6">Layanan <span class="text-transparent" style="-webkit-text-stroke: 2px var(--color-slate-dark);">Kami</span></h2>
            </div>
            
            <div class="relative">
                <!-- Connecting Line -->
                <div class="absolute top-1/2 left-0 w-full h-2 bg-slate-200 -translate-y-1/2 hidden md:block z-0"></div>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative z-10">
                    <div class="bg-white border-4 border-slate-dark p-6 shadow-brutal hover:-translate-y-2 transition-transform" data-aos="fade-up" data-aos-delay="0">
                        <div class="w-12 h-12 bg-solar-yellow text-slate-dark font-black flex items-center justify-center text-2xl mb-6 border-2 border-slate-dark">1</div>
                        <h3 class="text-xl font-black uppercase mb-2">Consulting</h3>
                        <p class="font-medium text-slate-600">Menganalisis kebutuhan listrik Anda secara mendalam untuk merancang strategi energi yang paling brutal dan efisien.</p>
                    </div>
                    
                    <div class="bg-white border-4 border-slate-dark p-6 shadow-brutal hover:-translate-y-2 transition-transform" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-12 h-12 bg-solar-yellow text-slate-dark font-black flex items-center justify-center text-2xl mb-6 border-2 border-slate-dark">2</div>
                        <h3 class="text-xl font-black uppercase mb-2">Energy Storage</h3>
                        <p class="font-medium text-slate-600">Integrasi sistem baterai industri berkapasitas tinggi untuk memastikan cadangan daya 24 jam penuh tanpa putus.</p>
                    </div>
                    
                    <div class="bg-white border-4 border-slate-dark p-6 shadow-brutal hover:-translate-y-2 transition-transform" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-12 h-12 bg-solar-yellow text-slate-dark font-black flex items-center justify-center text-2xl mb-6 border-2 border-slate-dark">3</div>
                        <h3 class="text-xl font-black uppercase mb-2">Hybrid System</h3>
                        <p class="font-medium text-slate-600">Penggabungan sumber daya kelistrikan utama dan surya secara presisi tinggi untuk keandalan maksimal.</p>
                    </div>
                    
                    <div class="bg-white border-4 border-slate-dark p-6 shadow-brutal hover:-translate-y-2 transition-transform" data-aos="fade-up" data-aos-delay="300">
                        <div class="w-12 h-12 bg-solar-yellow text-slate-dark font-black flex items-center justify-center text-2xl mb-6 border-2 border-slate-dark">4</div>
                        <h3 class="text-xl font-black uppercase mb-2">Maintenance</h3>
                        <p class="font-medium text-slate-600">Pemeliharaan berkala teknis dan respons cepat untuk memastikan sistem Anda selalu beroperasi pada performa puncak.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="py-16 md:py-24 bg-slate-100 border-t-8 border-slate-dark border-dashed relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12" data-aos="fade-up">
                <div>
                    <h2 class="text-4xl md:text-5xl font-black uppercase leading-none tracking-tight">Instalasi <br class="hidden md:block">Unggulan</h2>
                </div>
                <a href="/projects" class="hidden md:inline-flex items-center gap-2 font-bold uppercase border-b-4 border-slate-dark pb-1 hover:text-solar-yellow hover:border-solar-yellow transition-colors text-lg">
                    Lihat Semua Proyek 
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @if(isset($projects) && $projects->count() > 0)
                    @foreach($projects as $project)
                        <x-project-card :project="$project" />
                    @endforeach
                @else
                    <x-project-card :project="(object)['title' => 'Factory Roof Array', 'slug' => '#', 'type' => 'Industrial', 'system_capacity' => '500 kWp', 'location' => 'Surabaya']" />
                    <x-project-card :project="(object)['title' => 'Residential Villa', 'slug' => '#', 'type' => 'Residential', 'system_capacity' => '10 kWp', 'location' => 'Bali']" />
                    <x-project-card :project="(object)['title' => 'Hospital Ground Mount', 'slug' => '#', 'type' => 'Commercial', 'system_capacity' => '250 kWp', 'location' => 'Jakarta']" />
                @endif
            </div>
            
            <div class="mt-12 text-center md:hidden">
                <a href="/projects" class="brutal-btn inline-block">Lihat Semua Proyek</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Slider -->
    <x-testimonial-slider :testimonials="$testimonials ?? collect([])" />

    <!-- Latest Blog Articles Section -->
    <section class="py-16 md:py-24 bg-white border-t-4 border-slate-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block border-2 border-slate-dark bg-solar-yellow text-slate-dark font-black px-4 py-1 text-sm uppercase tracking-widest mb-4 shadow-brutal">Edukasi</span>
                <h2 class="text-4xl md:text-5xl font-black uppercase leading-none tracking-tight">Wawasan Solar</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @if(isset($posts) && $posts->count() > 0)
                    @foreach($posts as $post)
                        <x-blog-card :post="$post" />
                    @endforeach
                @else
                    <x-blog-card :post="(object)['title' => 'Benefits of Solar Panels for Industrial Use', 'slug' => '#', 'published_at' => now(), 'excerpt' => 'An in-depth look at how large-scale solar arrays can slash operational costs for factories.', 'author' => 'Garnett Engineering']" />
                    <x-blog-card :post="(object)['title' => 'Difference Between On Grid and Off Grid', 'slug' => '#', 'published_at' => now()->subDays(2), 'excerpt' => 'Which system is right for you? We break down the technical differences and cost benefits.', 'author' => 'System Design Team']" />
                    <x-blog-card :post="(object)['title' => 'How Solar Panels Perform in the Rain', 'slug' => '#', 'published_at' => now()->subDays(5), 'excerpt' => 'Are your panels useless during monsoon season? The truth about solar panel efficiency in overcast conditions.', 'author' => 'Garnett Engineering']" />
                @endif
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <x-cta-section />

</x-layouts.app>
