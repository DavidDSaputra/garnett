@props(['testimonials'])

<section class="py-16 md:py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 md:mb-16" data-aos="fade-up">
            <div>
                <span class="inline-block bg-eco-green text-white font-black px-3 py-1 text-sm uppercase tracking-wider mb-4 border-2 border-slate-dark shadow-[2px_2px_0px_0px_currentColor] transform -rotate-2">Pernyataan Mereka</span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black uppercase leading-none tracking-tight">Ulasan <span class="text-transparent" style="-webkit-text-stroke: 2px var(--color-slate-dark);">Klien</span></h2>
            </div>
            <div class="hidden md:block w-32 h-2 bg-solar-yellow"></div>
        </div>

        <div class="!pb-12 !pt-8 !px-4 -mx-4 -mt-8" data-aos="fade-up" data-aos-delay="100">
            <swiper-container 
                init="true"
                loop="true" 
                autoplay-delay="5000" 
                slides-per-view="1" 
                space-between="30" 
                pagination="true" 
                pagination-clickable="true"
                breakpoints='{"768": {"slidesPerView": 2}, "1024": {"slidesPerView": 3}}'
                class="mb-16 pb-12 w-full h-full overflow-visible"
                style="--swiper-pagination-color: var(--color-solar-yellow); --swiper-pagination-bullet-inactive-color: var(--color-slate-dark); --swiper-pagination-bullet-inactive-opacity: 0.3; --swiper-pagination-bullet-width: 16px; --swiper-pagination-bullet-height: 16px; overflow: visible;"
            >
                @forelse($testimonials as $testimonial)
                    <swiper-slide class="pt-8 h-auto">
                        <div class="brutal-card p-8 relative h-[90%] flex flex-col group">
                            <!-- Quote Icon Overhang -->
                            <div class="absolute -top-6 left-8 w-12 h-12 bg-solar-yellow border-4 border-slate-dark flex items-center justify-center text-slate-dark shadow-brutal group-hover:-translate-y-2 transition-transform">
                                <span class="font-heading font-black text-4xl leading-none pt-2">"</span>
                            </div>
                            
                            <div class="flex text-solar-yellow mb-6 mt-2">
                                @for($i = 0; $i < ($testimonial->rating ?? 5); $i++)
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                @endfor
                            </div>
                            
                            <p class="text-lg font-medium text-slate-700 mb-8 flex-grow">
                                "{{ $testimonial->feedback ?? 'Garnett telah sepenuhnya mengubah operasi industri kami. Biaya energi kami turun 60%.' }}"
                            </p>
                            
                            <div class="flex items-center gap-4 border-t-4 border-slate-dark pt-4">
                                @if(isset($testimonial->avatar) && $testimonial->avatar)
                                    <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="{{ $testimonial->client_name }}" loading="lazy" decoding="async" class="w-14 h-14 border-2 border-slate-dark object-cover grayscale">
                                @else
                                    <div class="w-14 h-14 border-2 border-slate-dark bg-slate-200 flex items-center justify-center font-bold text-xl uppercase">
                                        {{ substr($testimonial->client_name ?? 'C', 0, 1) }}
                                    </div>
                                @endif
                                <div>
                                    <h4 class="font-black uppercase text-lg leading-tight">{{ $testimonial->client_name ?? 'Budi Santoso' }}</h4>
                                    <span class="text-eco-green font-bold text-sm uppercase">{{ $testimonial->company_name ?? 'PT Pabrik' }}</span>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                @empty
                    @for($j = 1; $j <= 4; $j++)
                    <swiper-slide class="pt-8 h-auto">
                        <div class="brutal-card p-8 relative h-[90%] flex flex-col group">
                            <div class="absolute -top-6 left-8 w-12 h-12 bg-solar-yellow border-4 border-slate-dark flex items-center justify-center text-slate-dark shadow-brutal group-hover:-translate-y-2 transition-transform">
                                <span class="font-heading font-black text-4xl leading-none pt-2">"</span>
                            </div>
                            
                            <div class="flex text-solar-yellow mb-6 mt-2">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                @endfor
                            </div>
                            
                            <p class="text-lg font-medium text-slate-700 mb-8 flex-grow">
                                "Tingkat profesionalisme dan efisiensi sistem solar panel Garnett tidak tertandingi di industri ini."
                            </p>
                            
                            <div class="flex items-center gap-4 border-t-4 border-slate-dark pt-4 mt-auto">
                                <div class="w-14 h-14 border-2 border-slate-dark bg-slate-200 flex items-center justify-center font-bold text-xl uppercase">
                                    C{{ $j }}
                                </div>
                                <div>
                                    <h4 class="font-black uppercase text-lg leading-tight">Klien {{ $j }}</h4>
                                    <span class="text-eco-green font-bold text-sm uppercase">Perusahaan Global</span>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    @endfor
                @endforelse
            </swiper-container>
        </div>
    </div>
</section>
<!-- Include custom swiper styles inline for this component -->
<style>
    .swiper-pagination-bullet {
        width: 16px;
        height: 16px;
        background-color: var(--color-slate-dark) !important;
        opacity: 0.3;
        border-radius: 0;
        border: 2px solid transparent;
        transition: all 0.3s ease;
    }
    .swiper-pagination-bullet-active {
        opacity: 1;
        background-color: var(--color-solar-yellow) !important;
        border-color: var(--color-slate-dark);
        transform: scale(1.2);
    }
</style>
