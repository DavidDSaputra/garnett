<header 
    x-data="{ isOpen: false, scrolled: false }"
    @scroll.window="scrolled = (window.pageYOffset > 50) ? true : false"
    :class="{'bg-slate-dark/95 backdrop-blur-md shadow-brutal': scrolled, 'bg-transparent': !scrolled}"
    class="fixed w-full top-0 z-50 transition-all duration-300 border-b-4 border-transparent"
    :style="scrolled ? 'border-color: var(--color-slate-dark)' : ''"
>
    <!-- We will use a black background on scroll but keep brutalist border when scrolled -->
    <div :class="{'border-slate-dark bg-white': scrolled, 'border-transparent text-white': !scrolled}" class="transition-colors border-b-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex flex-col justify-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Garnett Logo" class="h-16 md:h-20 w-auto object-contain transition-transform hover:scale-105">
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8 items-center" :class="scrolled ? 'text-slate-dark' : 'text-white'">
                    <a href="/" class="font-bold uppercase hover:text-solar-yellow transition-colors relative group">
                        Beranda
                        <span class="absolute -bottom-1 left-0 w-0 h-1 bg-solar-yellow transition-all group-hover:w-full"></span>
                    </a>
                    <a href="/about" class="font-bold uppercase hover:text-solar-yellow transition-colors relative group">
                        Tentang Kami
                        <span class="absolute -bottom-1 left-0 w-0 h-1 bg-solar-yellow transition-all group-hover:w-full"></span>
                    </a>
                    
                    <!-- Dropdown -->
                    <div class="relative" x-data="{ openServices: false }" @click.away="openServices = false" @mouseleave="openServices = false">
                        <button @mouseover="openServices = true" class="font-bold uppercase hover:text-solar-yellow transition-colors relative group flex items-center gap-1">
                            Layanan
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        
                        <div x-show="openServices" 
                             x-transition.opacity.duration.200ms
                             class="absolute left-0 mt-2 w-56 bg-white border-4 border-slate-dark shadow-brutal text-slate-dark group-hover:block"
                             style="display: none;">
                            <div class="py-2 flex flex-col">
                                <a href="/services" class="px-4 py-2 font-bold uppercase hover:bg-solar-yellow hover:translate-x-2 transition-transform">Semua Layanan</a>
                                <a href="/services/on-grid" class="px-4 py-2 font-bold uppercase hover:bg-solar-yellow hover:translate-x-2 transition-transform">Solar On Grid</a>
                                <a href="/services/off-grid" class="px-4 py-2 font-bold uppercase hover:bg-solar-yellow hover:translate-x-2 transition-transform">Solar Off Grid</a>
                                <a href="/services/hybrid" class="px-4 py-2 font-bold uppercase hover:bg-solar-yellow hover:translate-x-2 transition-transform">Solar Hybrid</a>
                            </div>
                        </div>
                    </div>

                    <a href="/projects" class="font-bold uppercase hover:text-solar-yellow transition-colors relative group">
                        Proyek
                        <span class="absolute -bottom-1 left-0 w-0 h-1 bg-solar-yellow transition-all group-hover:w-full"></span>
                    </a>
                    <a href="/blog" class="font-bold uppercase hover:text-solar-yellow transition-colors relative group">
                        Blog
                        <span class="absolute -bottom-1 left-0 w-0 h-1 bg-solar-yellow transition-all group-hover:w-full"></span>
                    </a>
                    
                    <a href="/contact" class="px-6 py-2 border-4 border-current font-black uppercase hover:bg-solar-yellow hover:text-slate-dark hover:border-slate-dark transition-all transform hover:-translate-y-1 shadow-[4px_4px_0px_0px_currentColor] hover:shadow-brutal-lg">
                        Konsultasi
                    </a>
                </nav>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button @click="isOpen = !isOpen" class="focus:outline-none" :class="scrolled ? 'text-slate-dark' : 'text-white'">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path x-show="!isOpen" stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path x-show="isOpen" stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="isOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-10"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-10"
         class="md:hidden absolute top-full left-0 w-full bg-white border-b-4 border-slate-dark shadow-brutal-lg" 
         style="display: none;">
        <div class="px-4 pt-4 pb-8 space-y-4 flex flex-col items-center justify-center text-slate-dark">
            <a href="/" class="block font-black text-2xl uppercase hover:text-solar-yellow">Beranda</a>
            <a href="/about" class="block font-black text-2xl uppercase hover:text-solar-yellow">Tentang Kami</a>
            <a href="/services" class="block font-black text-2xl uppercase hover:text-solar-yellow">Layanan</a>
            <a href="/projects" class="block font-black text-2xl uppercase hover:text-solar-yellow">Proyek</a>
            <a href="/blog" class="block font-black text-2xl uppercase hover:text-solar-yellow">Blog</a>
            <a href="/contact" class="block font-black text-xl uppercase mt-4 px-8 py-3 border-4 border-slate-dark bg-solar-yellow shadow-brutal w-full text-center">Konsultasi</a>
        </div>
    </div>
</header>
