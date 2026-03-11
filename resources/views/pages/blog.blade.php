<x-layouts.app>
    <div class="pt-24 pb-12 bg-white text-slate-dark border-b-8 border-slate-dark relative">
        <!-- Background Decor -->
        <div class="absolute right-0 bottom-0 w-64 h-64 bg-slate-100 flex items-center justify-center opacity-50 -z-10 mt-12 mb-12">
            <svg class="w-48 h-48 text-slate-200" fill="currentColor" viewBox="0 0 24 24"><path d="M19 12h-2v8h2v-8zm-4 2h-2v6h2v-6zm-4-4h-2v10h2v-10zm-4 3h-2v7h2v-7zm13-9H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM4 2v2h16V2H4z"/></svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">
            <h1 class="text-6xl md:text-8xl font-black uppercase leading-none tracking-tighter mb-6" data-aos="fade-up">PUSAT <span class="bg-solar-yellow px-4 mx-2 shadow-[4px_4px_0px_0px_currentColor] transform -rotate-2 inline-block">INFO</span></h1>
            <p class="text-xl md:text-2xl font-medium max-w-2xl mt-8" data-aos="fade-up" data-aos-delay="100">
                Wawasan industri, pengarahan teknis, dan berita perkembangan instalasi dari Korps Insinyur Garnett.
            </p>
        </div>
    </div>

    <section class="py-24 bg-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($posts as $post)
                    <x-blog-card :post="$post" />
                @empty
                    <div class="col-span-full py-12 text-center text-xl font-bold border-4 border-dashed border-slate-300 text-slate-500 uppercase">
                        Belum Ada Berita yang Dikirim.
                    </div>
                @endforelse
            </div>
            
            <div class="mt-16 flex justify-center">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
</x-layouts.app>
