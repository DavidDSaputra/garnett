<x-layouts.app>
    <!-- Hero Section -->
    <x-hero-section 
        title="MEMBERDAYAKAN MASA DEPAN DENGAN SURYA" 
        subtitle="Solusi energi terbarukan yang efisien, dan modern untuk kompleks perumahan dan industri."
        link="/contact" />

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
                                    <img src="{{ asset('storage/' . $client->logo_image) }}" alt="{{ $client->name }}" loading="lazy" decoding="async" class="h-full w-auto object-contain hover:scale-110 transition-transform">
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

    <!-- 6 Core Solutions Section (Interactive Accordion) -->
    <section class="py-16 md:py-24 bg-slate-dark text-white relative border-y-8 border-solar-yellow" id="solutions" x-data="{ active: 1 }">
        <!-- Decoration -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-eco-green rounded-full blur-[100px] opacity-20 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="mb-16 text-center md:text-left" data-aos="fade-up">
                <span class="inline-block border-2 border-solar-yellow text-solar-yellow font-black px-4 py-1 text-sm uppercase tracking-widest mb-4">Infrastruktur Inti</span>
                <h2 class="text-4xl md:text-6xl lg:text-7xl font-black uppercase leading-[1.1] tracking-tight mb-6">Sistem <span class="bg-solar-yellow text-slate-dark px-2 shadow-brutal-sm inline-block -rotate-2">Energi</span><br class="hidden md:block">Komprehensif.</h2>
                <p class="text-xl font-medium text-slate-300 max-w-3xl md:mx-0 mx-auto">Kami menyediakan enam pilar solusi energi terbarukan yang dirancang secara presisi. Jelajahi spesifikasi teknis dari setiap arsitektur di bawah ini.</p>
            </div>

            <!-- Interactive Layout -->
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 lg:h-[600px]">
                
                <!-- Left: Navigation Tabs / Accordion Headers -->
                <div class="w-full lg:w-1/3 flex flex-col gap-4 overflow-y-auto pr-2 custom-scrollbar">
                    
                    <!-- Tab 1: On-Grid -->
                    <button @click="active = 1" 
                            class="text-left w-full border-4 p-6 transition-all duration-300 flex items-center justify-between group"
                            :class="active === 1 ? 'border-solar-yellow bg-solar-yellow text-slate-dark shadow-brutal scale-105 z-10' : 'border-slate-600 bg-transparent text-slate-400 hover:border-slate-400 hover:text-white'">
                        <div class="flex items-center gap-4">
                            <span class="font-black text-2xl" :class="active === 1 ? 'text-slate-dark' : 'text-slate-600'">01</span>
                            <h3 class="text-2xl font-black uppercase tracking-wide">On-Grid</h3>
                        </div>
                        <svg class="w-6 h-6 transform transition-transform" :class="active === 1 ? 'rotate-90' : 'group-hover:translate-x-2'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                    </button>

                    <!-- Tab 2: Off-Grid -->
                    <button @click="active = 2" 
                            class="text-left w-full border-4 p-6 transition-all duration-300 flex items-center justify-between group"
                            :class="active === 2 ? 'border-eco-green bg-eco-green text-white shadow-[8px_8px_0px_0px_#FDB813] scale-105 z-10' : 'border-slate-600 bg-transparent text-slate-400 hover:border-slate-400 hover:text-white'">
                        <div class="flex items-center gap-4">
                            <span class="font-black text-2xl" :class="active === 2 ? 'opacity-50' : 'text-slate-600'">02</span>
                            <h3 class="text-2xl font-black uppercase tracking-wide">Off-Grid</h3>
                        </div>
                        <svg class="w-6 h-6 transform transition-transform" :class="active === 2 ? 'rotate-90' : 'group-hover:translate-x-2'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                    </button>

                    <!-- Tab 3: Hybrid -->
                    <button @click="active = 3" 
                            class="text-left w-full border-4 p-6 transition-all duration-300 flex items-center justify-between group"
                            :class="active === 3 ? 'border-white bg-white text-slate-dark shadow-brutal scale-105 z-10' : 'border-slate-600 bg-transparent text-slate-400 hover:border-slate-400 hover:text-white'">
                        <div class="flex items-center gap-4">
                            <span class="font-black text-2xl" :class="active === 3 ? 'text-slate-400' : 'text-slate-600'">03</span>
                            <h3 class="text-2xl font-black uppercase tracking-wide">Hybrid</h3>
                        </div>
                        <svg class="w-6 h-6 transform transition-transform" :class="active === 3 ? 'rotate-90' : 'group-hover:translate-x-2'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                    </button>

                    <!-- Tab 4: EV Charging -->
                    <button @click="active = 4" 
                            class="text-left w-full border-4 p-6 transition-all duration-300 flex items-center justify-between group"
                            :class="active === 4 ? 'border-[#3B82F6] bg-[#3B82F6] text-white shadow-brutal scale-105 z-10' : 'border-slate-600 bg-transparent text-slate-400 hover:border-slate-400 hover:text-white'">
                        <div class="flex items-center gap-4">
                            <span class="font-black text-2xl" :class="active === 4 ? 'opacity-50' : 'text-slate-600'">04</span>
                            <h3 class="text-2xl font-black uppercase tracking-wide">Charger EV</h3>
                        </div>
                        <svg class="w-6 h-6 transform transition-transform" :class="active === 4 ? 'rotate-90' : 'group-hover:translate-x-2'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                    </button>

                    <!-- Tab 5: PJUTS -->
                    <button @click="active = 5" 
                            class="text-left w-full border-4 p-6 transition-all duration-300 flex items-center justify-between group"
                            :class="active === 5 ? 'border-solar-yellow bg-transparent text-solar-yellow shadow-[4px_4px_0px_0px_#FDB813] scale-105 z-10' : 'border-slate-600 bg-transparent text-slate-400 hover:border-slate-400 hover:text-white'">
                        <div class="flex items-center gap-4">
                            <span class="font-black text-2xl" :class="active === 5 ? 'opacity-50' : 'text-slate-600'">05</span>
                            <h3 class="text-2xl font-black uppercase tracking-wide">PJUTS</h3>
                        </div>
                        <svg class="w-6 h-6 transform transition-transform" :class="active === 5 ? 'rotate-90' : 'group-hover:translate-x-2'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                    </button>

                    <!-- Tab 6: Industrial -->
                    <button @click="active = 6" 
                            class="text-left w-full border-4 p-6 transition-all duration-300 flex items-center justify-between group"
                            :class="active === 6 ? 'border-slate-400 bg-slate-800 text-white shadow-brutal scale-105 z-10' : 'border-slate-600 bg-transparent text-slate-400 hover:border-slate-400 hover:text-white'">
                        <div class="flex items-center gap-4">
                            <span class="font-black text-2xl" :class="active === 6 ? 'text-slate-500' : 'text-slate-600'">06</span>
                            <h3 class="text-2xl font-black uppercase tracking-wide">Industri</h3>
                        </div>
                        <svg class="w-6 h-6 transform transition-transform" :class="active === 6 ? 'rotate-90' : 'group-hover:translate-x-2'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                    </button>

                </div>

                <!-- Right: Content Display Area -->
                <div class="w-full lg:w-2/3 border-8 border-slate-600 bg-slate-900 p-8 md:p-12 relative overflow-hidden flex flex-col justify-center min-h-[500px]">
                    <!-- Ambient Backgrounds -->
                    <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 32px 32px;"></div>
                    
                    <!-- Content 1: On-Grid -->
                    <div x-show="active === 1" x-transition.opacity.duration.500ms class="h-full flex flex-col justify-between" style="display: none;">
                        <div class="flex flex-col md:flex-row gap-8 items-start mb-8">
                            <div class="flex-1">
                                <h3 class="text-4xl md:text-5xl font-black uppercase text-solar-yellow leading-none mb-6">On-Grid System</h3>
                                <p class="text-xl font-medium text-slate-300 leading-relaxed max-w-xl">
                                    Infrastruktur surya teringan dengan ROI gila-gilaan. Terintegrasi erat dengan PLN melalui *Net-Metering*. Menekan biaya overhead siang hari menjadi nol tanpa investasi baterai.
                                </p>
                            </div>
                            <div class="w-full md:w-1/2 border-4 border-solar-yellow bg-white p-2 shrink-0 transform rotate-1">
                                <img src="{{ asset('images/cara-kerja-on-grid.jpg') }}" alt="On Grid Diagram" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <a href="/services/on-grid" class="brutal-btn self-start mt-auto">Spesifikasi On-Grid</a>
                    </div>

                    <!-- Content 2: Off-Grid -->
                    <div x-show="active === 2" x-transition.opacity.duration.500ms class="h-full flex flex-col justify-between" style="display: none;">
                        <div class="flex flex-col md:flex-row gap-8 items-start mb-8">
                            <div class="flex-1">
                                <h3 class="text-4xl md:text-5xl font-black uppercase text-eco-green leading-none mb-6">Off-Grid System</h3>
                                <p class="text-xl font-medium text-slate-300 leading-relaxed max-w-xl">
                                    Kemandirian energi absolut di area tak terjangkau utilitas. Dibangun dengan susunan baterai lithium industri tugas berat untuk memastikan pasokan listrik 24/7 di kondisi ekstrem.
                                </p>
                            </div>
                            <div class="w-full md:w-1/2 border-4 border-eco-green bg-white p-2 shrink-0 transform -rotate-1">
                                <img src="{{ asset('images/cara-kerja-off-grid.jpg') }}" alt="Off Grid Diagram" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <a href="/services/off-grid" class="brutal-btn-alt border-eco-green text-eco-green hover:bg-eco-green hover:text-white self-start mt-auto">Opsi Baterai</a>
                    </div>

                    <!-- Content 3: Hybrid -->
                    <div x-show="active === 3" x-transition.opacity.duration.500ms class="h-full flex flex-col justify-between" style="display: none;">
                        <div class="flex flex-col md:flex-row gap-8 items-start mb-8">
                            <div class="flex-1">
                                <h3 class="text-4xl md:text-5xl font-black uppercase text-white leading-none mb-6">Hybrid Architecture</h3>
                                <p class="text-xl font-medium text-slate-300 leading-relaxed max-w-xl">
                                    Konfigurasi kompromi nihil. Gabungan penghematan tagihan PLN di siang hari dan anti-pemadaman (UPS instan) di malam hari berkat unit *smart battery storage*.
                                </p>
                            </div>
                            <div class="w-full md:w-1/2 border-4 border-white bg-white p-2 shrink-0">
                                <img src="{{ asset('images/cara-kerja-hybrid.jpg') }}" alt="Hybrid Diagram" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <a href="/services/hybrid" class="bg-white text-slate-dark border-4 border-white font-black uppercase px-8 py-3 text-lg hover:bg-transparent hover:text-white transition-colors self-start mt-auto">Arsitektur Hybrid</a>
                    </div>

                    <!-- Content 4: EV Charging -->
                    <div x-show="active === 4" x-transition.opacity.duration.500ms class="h-full flex flex-col justify-between" style="display: none;">
                        <div class="flex flex-col md:flex-row gap-8 items-start mb-8">
                            <div class="flex-1">
                                <h3 class="text-4xl md:text-5xl font-black uppercase text-[#3B82F6] leading-none mb-6">E.V. Charging</h3>
                                <p class="text-xl font-medium text-slate-300 leading-relaxed max-w-xl">
                                    Fasilitas komersial stasiun pengisian kendaraan listrik cerdas terhubung inverter surya. Memompa mobil EV dengan 100% daya bebas emisi langsung dari matahari.
                                </p>
                            </div>
                            <div class="w-full md:w-1/2 border-4 border-[#3B82F6] bg-white p-2 shrink-0 transform rotate-2">
                                <img src="{{ asset('images/cara-kerja-ev.jpg') }}" alt="EV Diagram" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <a href="/services/ev-charging" class="bg-[#3B82F6] text-white border-4 border-[#3B82F6] font-black uppercase px-8 py-3 text-lg hover:bg-transparent transition-colors self-start mt-auto">Infrastruktur Charger</a>
                    </div>

                    <!-- Content 5: PJUTS -->
                    <div x-show="active === 5" x-transition.opacity.duration.500ms class="h-full flex flex-col justify-between" style="display: none;">
                        <div class="flex flex-col md:flex-row gap-8 items-start mb-8">
                            <div class="flex-1">
                                <h3 class="text-4xl md:text-5xl font-black uppercase text-solar-yellow leading-none mb-6"><span class="text-transparent" style="-webkit-text-stroke: 1px currentColor;">Smart</span><br>PJUTS</h3>
                                <p class="text-xl font-medium text-slate-300 leading-relaxed max-w-xl">
                                    Penerangan Jalan Umum Tenaga Surya tangguh cuaca. Lampu mandiri yang otomatis memanajemen daya untuk memastikan jalanan terang benderang dari magrib hingga fajar menyingsing.
                                </p>
                            </div>
                            <div class="w-full md:w-1/2 border-4 border-solar-yellow bg-slate-800 p-2 shrink-0">
                                <img src="{{ asset('images/cara-kerja-pjuts.png') }}" alt="PJUTS Diagram" class="w-full h-auto object-contain" style="filter: brightness(1.2);">
                            </div>
                        </div>
                        <a href="/services/pjuts" class="brutal-btn self-start mt-auto text-sm">Lihat Tiang & Lensa</a>
                    </div>

                    <!-- Content 6: Industrial -->
                    <div x-show="active === 6" x-transition.opacity.duration.500ms class="h-full flex flex-col justify-between" style="display: none;">
                        <div class="flex flex-col md:flex-row gap-8 items-start mb-8">
                            <div class="flex-1">
                                <h3 class="text-4xl md:text-5xl font-black uppercase text-slate-300 leading-none mb-6">Skala Industri</h3>
                                <p class="text-xl font-medium text-slate-300 leading-relaxed max-w-xl">
                                    Desain masif bentangan panel surya kelas atas khusus pabrik & manufaktur berat. Dirancang ber-megawatt untuk menghabisi porsi terbesar biaya listrik produksi tahunan.
                                </p>
                            </div>
                            <div class="w-full md:w-1/2 border-4 border-slate-500 bg-white shrink-0 overflow-hidden transform -rotate-2">
                                <img src="{{ asset('images/solar2.png') }}" alt="Industrial Solar" class="w-full h-48 object-cover">
                            </div>
                        </div>
                        <a href="/services/industrial" class="bg-transparent border-4 border-slate-400 text-slate-200 font-black uppercase px-8 py-3 text-lg hover:bg-slate-400 hover:text-slate-900 transition-colors self-start mt-auto">Rancangan Megawatt</a>
                    </div>
                </div>

            </div>
        </div>
        
        <style>
            .custom-scrollbar::-webkit-scrollbar {
                width: 8px;
            }
            .custom-scrollbar::-webkit-scrollbar-track {
                background: #1e293b;
                border-radius: 0;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: #475569;
                border: 2px solid #1e293b;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: #fdb813;
            }
        </style>
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
                        <img src="{{ asset('images/rumah-solar.jpg') }}" alt="Instalasi Rumah Solar" loading="lazy" decoding="async" class="w-full h-auto border-4 border-slate-dark object-cover aspect-video transition-all duration-300">
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
