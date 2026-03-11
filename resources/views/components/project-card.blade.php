@props(['project'])

<a href="/projects/{{ $project->slug ?? '#' }}" class="brutal-card block group" data-aos="zoom-in">
    <div class="relative h-64 border-b-4 border-slate-dark overflow-hidden bg-slate-200">
        @if(isset($project->featured_image) && $project->featured_image)
            <img src="{{ asset('storage/' . $project->featured_image) }}" alt="{{ $project->title ?? 'Project' }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
        @else
            <img src="https://images.unsplash.com/photo-1592833159057-6cb562349e59?q=80&w=2069&auto=format&fit=crop" alt="Project" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
        @endif
        
        <div class="absolute top-4 right-4 bg-eco-green text-white font-bold px-3 py-1 border-2 border-slate-dark text-sm uppercase">
            {{ $project->type ?? 'Industri' }}
        </div>
    </div>
    
    <div class="p-6 bg-white group-hover:bg-solar-yellow transition-colors duration-300">
        <h3 class="text-2xl font-black uppercase mb-2 line-clamp-2 leading-tight">{{ $project->title ?? 'Proyek Instalasi Solar Panel' }}</h3>
        
        <div class="flex items-center gap-2 text-slate-700 font-bold mb-4">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            {{ $project->location ?? 'Jakarta, Indonesia' }}
        </div>
        
        <div class="flex justify-between items-end border-t-4 border-slate-dark pt-4">
            <div>
                <span class="block text-sm font-bold text-slate-500 uppercase">Kapasitas</span>
                <span class="block text-xl font-black uppercase">{{ $project->system_capacity ?? '150 kWp' }}</span>
            </div>
            
            <div class="w-10 h-10 border-2 border-slate-dark flex items-center justify-center bg-white group-hover:bg-slate-dark group-hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
            </div>
        </div>
    </div>
</a>
