@props([
    'title',
    'description',
    'link',
    'icon' => null
])

<a href="{{ $link }}" class="brutal-card block p-8 group relative overflow-hidden" data-aos="fade-up">
    <!-- Hover color fill effect -->
    <div class="absolute inset-0 bg-solar-yellow translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out py-8 px-8 z-0"></div>
    
    <div class="relative z-10 flex flex-col h-full">
        <div class="text-5xl border-4 border-slate-dark w-20 h-20 flex items-center justify-center bg-white shadow-[4px_4px_0px_0px_currentColor] mb-8 group-hover:scale-110 transition-transform">
            @if($icon)
                <img src="{{ $icon }}" alt="{{ $title }}" class="w-10 h-10 object-contain">
            @else
                <!-- Default Icon -->
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            @endif
        </div>
        
        <h3 class="text-3xl font-black uppercase mb-4 leading-tight group-hover:text-slate-dark">{{ $title }}</h3>
        
        <p class="text-lg font-medium text-slate-700 group-hover:text-slate-900 mb-8 flex-grow">
            {{ Str::limit($description, 120) }}
        </p>
        
        <div class="self-start inline-flex items-center gap-2 font-bold uppercase border-b-4 border-slate-dark pb-1 group-hover:translate-x-4 transition-transform text-lg">
            Lihat 
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </div>
    </div>
</a>
