@props(['post'])

<article class="brutal-card flex flex-col h-full bg-white" data-aos="fade-up">
    @if(isset($post->featured_image) && $post->featured_image)
        <a href="/blog/{{ $post->slug ?? '#' }}" class="block overflow-hidden border-b-4 border-slate-dark h-56 shrink-0 bg-slate-200">
            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title ?? 'Blog Post' }}" loading="lazy" decoding="async" class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
        </a>
    @else
        <a href="/blog/{{ $post->slug ?? '#' }}" class="block overflow-hidden border-b-4 border-slate-dark h-56 shrink-0 bg-slate-200">
            <img src="{{ asset('images/solar2.png') }}" alt="Blog Post" loading="lazy" decoding="async" class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
        </a>
    @endif
    
    <div class="p-6 flex flex-col flex-grow">
        <div class="flex items-center gap-4 text-sm font-bold uppercase text-slate-500 mb-4">
            <span class="bg-solar-yellow px-2 py-1 text-slate-dark border-2 border-slate-dark">Berita</span>
            <span>{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('M d, Y') : 'Hari Ini' }}</span>
        </div>
        
        <a href="/blog/{{ $post->slug ?? '#' }}" class="hover:text-solar-yellow hover:underline transition-colors block mb-4">
            <h3 class="text-2xl font-black uppercase leading-tight line-clamp-2">{{ $post->title ?? 'Masa Depan Energi Terbarukan' }}</h3>
        </a>
        
        <p class="text-slate-700 font-medium mb-6 line-clamp-3 flex-grow">
            {{ $post->excerpt ?? 'Temukan bagaimana energi surya dengan cepat mengubah lanskap operasi industri dan tempat tinggal.' }}
        </p>
        
        <div class="flex items-center justify-between border-t-2 border-slate-200 pt-4 mt-auto">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full border-2 border-slate-dark bg-eco-green flex items-center justify-center text-white font-bold text-xs uppercase overflow-hidden">
                    {{ substr($post->author ?? 'Admin', 0, 1) }}
                </div>
                <span class="font-bold text-sm text-slate-700">{{ $post->author ?? 'Tim Garnett' }}</span>
            </div>
            <a href="/blog/{{ $post->slug ?? '#' }}" class="text-slate-dark font-black hover:text-solar-yellow transition-colors underline decoration-2 underline-offset-4">Baca</a>
        </div>
    </div>
</article>
