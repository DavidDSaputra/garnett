@props([
    'title' => 'MEMBERDAYAKAN MASA DEPAN DENGAN SURYA',
    'subtitle' => 'Solusi energi terbarukan yang efisien, dan modern untuk kompleks perumahan dan industri.',
    'image' => null,
    'ctaText' => 'Konsultasi Gratis',
    'ctaLink' => '/contact'
])

<div class="relative min-h-screen flex items-center justify-center pt-32 pb-16 px-4 sm:px-6 lg:px-8 bg-slate-dark text-white overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0 bg-slate-200">
        <img src="{{ $image ?? asset('images/solar-factory.jpg') }}" alt="Solar Panels" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-slate-dark/50 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-dark/80 via-transparent to-transparent"></div>
    </div>
    
    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 z-0 opacity-20" style="background-image: radial-gradient(var(--color-solar-yellow) 2px, transparent 2px); background-size: 32px 32px;"></div>

    <div class="relative z-10 max-w-7xl mx-auto w-full" data-aos="fade-up">
        <div class="max-w-4xl">
            <!-- Brutalist Badge -->
            <div class="inline-block bg-solar-yellow text-slate-dark font-black px-4 py-2 text-xl uppercase tracking-widest border-4 border-slate-dark shadow-brutal mb-8 transform -rotate-2">
                ENERGI TERBARUKAN
            </div>
            
            <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-black uppercase leading-[1.1] md:leading-[0.9] tracking-tighter mb-8" style="text-shadow: 4px 4px 0px var(--color-eco-green);">
                {{ $title }}
            </h1>
            
            <p class="text-lg sm:text-xl md:text-2xl font-medium max-w-2xl mb-12 border-l-8 border-solar-yellow pl-4 md:pl-6 leading-relaxed">
                {{ $subtitle }}
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6">
                <a href="{{ $ctaLink }}" class="brutal-btn text-lg md:text-xl text-center w-full sm:w-auto">
                    {{ $ctaText }}
                </a>
                <a href="/projects" class="brutal-btn-alt text-lg md:text-xl text-center w-full sm:w-auto">
                    Lihat Proyek
                </a>
            </div>
        </div>
    </div>
    
    <!-- Scroll Down Indicator -->
    <div class="absolute bottom-12 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center animate-bounce">
        <span class="font-bold uppercase tracking-widest text-sm mb-2">Gulir Ke Bawah</span>
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
    </div>
</div>
