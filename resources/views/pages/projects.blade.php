<x-layouts.app>
    <div class="pt-24 pb-12 bg-white text-slate-dark border-b-8 border-solar-yellow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
            <div data-aos="fade-up">
                <a href="/projects" class="inline-flex items-center gap-2 font-bold uppercase hover:text-solar-yellow border-b-2 border-currentColor mb-8 group">
                    <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Portofolio
                </a>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-black uppercase leading-none tracking-tighter mb-4" data-aos="fade-up" data-aos-delay="100">
                JARINGAN DAYA <br><span class="text-eco-green">INDUSTRI</span>
            </h1>
        </div>
    </div>

    <section class="py-24 bg-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-4xl font-black uppercase">Log Proyek</h2>
                
                <!-- Simple Filters mapping -->
                <div class="hidden md:flex gap-4">
                    <button class="brutal-btn bg-black text-white px-6 py-2">SEMUA</button>
                    <button class="brutal-btn bg-white px-6 py-2">INDUSTRI</button>
                    <button class="brutal-btn bg-white px-6 py-2">KOMERSIAL</button>
                    <button class="brutal-btn bg-white px-6 py-2">PERUMAHAN</button>
                </div>
            </div>

            <!-- Mobile filters -->
            <div class="flex overflow-x-auto gap-4 mb-8 md:hidden pb-4">
                <button class="px-6 py-2 border-4 border-slate-dark font-black uppercase bg-slate-dark text-white shrink-0">SEMUA</button>
                <button class="px-6 py-2 border-4 border-slate-dark font-black uppercase bg-white shrink-0">INDUSTRI</button>
                <button class="px-6 py-2 border-4 border-slate-dark font-black uppercase bg-white shrink-0">KOMERSIAL</button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($projects as $project)
                    <x-project-card :project="$project" />
                @empty
                    <div class="col-span-full py-12 text-center text-xl font-bold border-4 border-dashed border-slate-300 text-slate-500 uppercase">
                        Belum Ada Proyek yang Diunggah.
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-layouts.app>
