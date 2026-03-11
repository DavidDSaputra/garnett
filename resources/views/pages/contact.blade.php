<x-layouts.app>
    <div class="pt-24 pb-12 bg-slate-dark text-white border-b-8 border-eco-green">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 text-center">
            <h1 class="text-6xl md:text-8xl font-black uppercase leading-none tracking-tighter mb-6" data-aos="zoom-in">TRANSMISI <span class="text-transparent" style="-webkit-text-stroke: 2px var(--color-eco-green);">DIMULAI</span></h1>
            <p class="text-xl md:text-2xl font-medium max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Hubungi secara langsung dengan Komando Teknik Garnett.
            </p>
        </div>
    </div>

    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-16">
                
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <h2 class="text-5xl font-black uppercase mb-8 border-b-4 border-solar-yellow pb-4 inline-block">Minta<br>Konsultasi</h2>
                    
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="font-bold uppercase tracking-widest text-sm">Designasi (Nama)</label>
                                <input type="text" class="w-full border-4 border-slate-dark p-4 font-medium focus:outline-none focus:ring-4 focus:ring-solar-yellow bg-slate-50" placeholder="Budi Santoso">
                            </div>
                            <div class="space-y-2">
                                <label class="font-bold uppercase tracking-widest text-sm">Corp / Entitas</label>
                                <input type="text" class="w-full border-4 border-slate-dark p-4 font-medium focus:outline-none focus:ring-4 focus:ring-solar-yellow bg-slate-50" placeholder="PT Pabrik">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="font-bold uppercase tracking-widest text-sm">Tautan Komunikasi (Email)</label>
                                <input type="email" class="w-full border-4 border-slate-dark p-4 font-medium focus:outline-none focus:ring-4 focus:ring-solar-yellow bg-slate-50" placeholder="budi@example.com">
                            </div>
                            <div class="space-y-2">
                                <label class="font-bold uppercase tracking-widest text-sm">Frekuensi (Telepon)</label>
                                <input type="tel" class="w-full border-4 border-slate-dark p-4 font-medium focus:outline-none focus:ring-4 focus:ring-solar-yellow bg-slate-50" placeholder="+62 812 3456 7890">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="font-bold uppercase tracking-widest text-sm">Kebutuhan Sistem / Pertanyaan</label>
                            <textarea rows="5" class="w-full border-4 border-slate-dark p-4 font-medium focus:outline-none focus:ring-4 focus:ring-solar-yellow bg-slate-50 resize-none" placeholder="Kami membutuhkan sistem 500kWp untuk..."></textarea>
                        </div>
                        
                        <button type="submit" class="brutal-btn w-full text-2xl tracking-widest">
                            KIRIM
                        </button>
                    </form>
                </div>
                
                <div class="w-full lg:w-1/2 flex flex-col justify-between" data-aos="fade-left">
                    <div class="brutal-card p-12 bg-slate-100 border-8 border-slate-dark mb-8">
                        <h3 class="text-3xl font-black uppercase mb-8 border-l-8 border-eco-green pl-4">Kantor Pusat</h3>
                        <ul class="space-y-8 text-xl font-bold">
                            <li class="flex items-start gap-4">
                                <div class="w-12 h-12 shrink-0 bg-solar-yellow border-4 border-slate-dark flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                </div>
                                <span class="pt-2">123 Solar Street, Industrial Park Phase 2, Jakarta, Indonesia 12345</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-12 h-12 shrink-0 bg-solar-yellow border-4 border-slate-dark flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <span class="pt-2">+62 812 3456 7890</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="h-64 border-4 border-slate-dark bg-slate-300 relative overflow-hidden group">
                        <!-- Placeholder Map -->
                        <div class="absolute inset-0 flex items-center justify-center font-black uppercase text-4xl text-slate-400">Data Peta</div>
                        <div class="absolute inset-0 bg-solar-yellow/20 group-hover:bg-transparent transition-colors"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</x-layouts.app>
