@props(['stats'])

<section class="py-12 md:py-20 bg-slate-dark border-y-8 border-solar-yellow" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-4 border-4 border-solar-yellow p-4 sm:p-8 bg-slate-dark relative overflow-hidden shadow-[8px_8px_0px_0px_var(--color-solar-yellow)]">
            
            <!-- Pattern -->
            <div class="absolute inset-0 opacity-10 flex items-center justify-center pointer-events-none">
                <div class="w-full h-1 bg-solar-yellow"></div>
                <div class="absolute w-1 h-full bg-solar-yellow"></div>
            </div>

            @forelse($stats as $stat)
                <div class="text-center relative z-10 p-4 transform transition-transform hover:scale-105" 
                     x-data="{ count: 0, target: {{ preg_replace('/[^0-9]/', '', $stat->value ?? '0') ?: '0' }} }"
                     x-intersect="
                        const updateCount = () => {
                            const increment = target / 50;
                            if (count < target) {
                                count += increment;
                                setTimeout(updateCount, 40);
                            } else {
                                count = target;
                            }
                        };
                        updateCount();
                     ">
                    <div class="w-16 h-16 mx-auto bg-solar-yellow border-4 border-white text-slate-dark flex items-center justify-center mb-4 transform -rotate-3 hover:rotate-6 transition-transform">
                        @if($stat->icon)
                            {!! $stat->icon !!}
                        @else
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        @endif
                    </div>
                    <div class="text-3xl sm:text-4xl md:text-5xl font-black text-white mb-2 uppercase flex items-center justify-center" style="text-shadow: 2px 2px 0px var(--color-eco-green);">
                        <span x-text="Math.floor(count)">0</span>{{ preg_replace('/[0-9]/', '', $stat->value ?? '') }}
                    </div>
                    <div class="text-sm md:text-base font-bold text-solar-yellow uppercase tracking-widest">{{ $stat->title }}</div>
                </div>
            @empty
                <!-- Fallback Mock Data -->
                @php
                    $mockStats = [
                        ['title' => 'Instalasi', 'value' => '500+'],
                        ['title' => 'Kapasitas Terpasang (kWp)', 'value' => '2500'],
                        ['title' => 'Pengurangan CO2 (Ton)', 'value' => '120'],
                        ['title' => 'Klien Puas', 'value' => '300+']
                    ];
                @endphp
                @foreach($mockStats as $index => $stat)
                    <div class="text-center relative z-10 p-4 transform transition-transform hover:scale-105"
                         x-data="{ count: 0, target: {{ preg_replace('/[^0-9]/', '', $stat['value']) }} }"
                         x-intersect="
                            let c = 0;
                            let i = setInterval(() => {
                                c += target / 40;
                                if(c >= target) { c = target; clearInterval(i); }
                                count = c;
                            }, 50);
                         ">
                        <div class="w-16 h-16 mx-auto bg-solar-yellow border-4 border-white text-slate-dark flex items-center justify-center mb-4 transform -rotate-3 hover:rotate-6 transition-transform">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div class="text-3xl sm:text-4xl md:text-5xl font-black text-white mb-2 uppercase flex items-center justify-center" style="text-shadow: 2px 2px 0px var(--color-eco-green);">
                            <span x-text="Math.floor(count)">0</span>{{ preg_replace('/[0-9]/', '', $stat['value']) }}
                        </div>
                        <div class="text-sm md:text-base font-bold text-solar-yellow uppercase tracking-widest">{{ $stat['title'] }}</div>
                    </div>
                @endforeach
            @endforelse
        </div>
    </div>
</section>
