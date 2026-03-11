<x-layouts.app>
    <div class="pt-24 pb-12 bg-slate-100 border-b-8 border-slate-dark">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
            <div data-aos="fade-up">
                <a href="/blog" class="inline-flex items-center gap-2 font-bold uppercase hover:text-solar-yellow border-b-2 border-currentColor mb-8 group">
                    <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Pusat Info
                </a>
            </div>
            
            <div class="flex items-center gap-4 text-sm font-bold uppercase text-slate-500 mb-6" data-aos="fade-up" data-aos-delay="100">
                <span class="bg-solar-yellow px-3 py-1 text-slate-dark border-2 border-slate-dark shadow-[2px_2px_0px_0px_currentColor]">Berita</span>
                <span>{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('M d, Y') : 'Hari Ini' }}</span>
                <span>/</span>
                <span class="text-eco-green">{{ $post->author ?? 'Tim Garnett' }}</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black uppercase leading-tight tracking-tighter mb-8" data-aos="fade-up" data-aos-delay="200">
                {{ $post->title }}
            </h1>
            
            @if(isset($post->featured_image) && $post->featured_image)
                <div class="w-full aspect-[21/9] border-8 border-slate-dark mb-12 shadow-brutal-lg" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                </div>
            @else
                <!-- Abstract Art Substitute -->
                <div class="w-full aspect-[21/9] border-8 border-slate-dark bg-slate-800 mb-12 shadow-brutal-lg flex items-center justify-center relative overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute inset-0 opacity-20" style="background-image: repeating-linear-gradient(45deg, var(--color-solar-yellow) 25%, transparent 25%, transparent 75%, var(--color-solar-yellow) 75%, var(--color-solar-yellow)), repeating-linear-gradient(45deg, var(--color-solar-yellow) 25%, bg-slate-dark 25%, bg-slate-dark 75%, var(--color-solar-yellow) 75%, var(--color-solar-yellow)); background-position: 0 0, 10px 10px; background-size: 20px 20px;"></div>
                    <span class="font-black text-6xl text-white opacity-50 absolute mix-blend-overlay">GARNETT</span>
                </div>
            @endif
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg prose-slate max-w-none font-medium mb-16">
                @if($post->content)
                    {!! $post->content !!}
                @else
                    <p class="lead text-2xl font-bold border-l-4 border-solar-yellow pl-4 mb-8">
                        {{ $post->excerpt }}
                    </p>
                    <p class="mb-6">
                        Energi terbarukan tidak lagi menjadi alternatif; ini adalah realita brutal dari kelangsungan ekonomi modern. 
                        Ketika perusahaan utilitas terus menaikkan tarif, operasi industri merasakan biaya overhead mereka membengkak. Integrasi susunan fotovoltaik berkinerja tinggi bertindak sebagai pelindung terhadap inflasi dan ketidakstabilan jaringan utama.
                    </p>
                    <h2 class="text-3xl font-black uppercase mt-12 mb-6">Data Tidak Berbohong</h2>
                    <p class="mb-6">
                        Pembacaan telemetri kami di 500+ instalasi komersial menunjukkan kurva ROI rata-rata yang memuncak pada tahun ke-4. 
                        Dengan menghilangkan overhead pemeliharaan kompleks yang terkait dengan generator daya lama, 
                        beban kerja operasional manajer fasilitas dapat dikurangi secara drastis.
                    </p>
                @endif
            </div>
            
            <!-- Share functionality -->
            <div class="border-t-4 border-slate-dark py-8 flex flex-col sm:flex-row items-center justify-between gap-6">
                <span class="font-black uppercase text-xl">Sebarkan Info Ini</span>
                <div class="flex gap-4">
                    <button class="w-12 h-12 border-4 border-slate-dark bg-white hover:bg-solar-yellow hover:-translate-y-1 transition-all shadow-brutal flex items-center justify-center">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </button>
                    <button class="w-12 h-12 border-4 border-slate-dark bg-white hover:bg-solar-yellow hover:-translate-y-1 transition-all shadow-brutal flex items-center justify-center">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </button>
                    <button class="w-12 h-12 border-4 border-slate-dark bg-white hover:bg-solar-yellow hover:-translate-y-1 transition-all shadow-brutal flex items-center justify-center" onclick="navigator.clipboard.writeText(window.location.href); alert('Tautan Disalin ke Papan Klip!')">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Dispatches -->
    <section class="py-24 bg-slate-100 border-t-8 border-slate-dark border-dashed">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-black uppercase mb-12">Info <span class="bg-solar-yellow px-2 inline-block border-2 border-slate-dark transform rotate-2">Terkait</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($relatedPosts as $related)
                    <x-blog-card :post="$related" />
                @empty
                    <p class="font-bold text-slate-500 uppercase">Tidak ada berita terkait yang ditemukan.</p>
                @endforelse
            </div>
        </div>
    </section>

</x-layouts.app>
