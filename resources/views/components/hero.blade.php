@props(['company'])

<section id="inicio" class="relative overflow-hidden bg-gradient-to-b from-blue-50/60 via-white to-slate-50 pt-10 pb-16 lg:pt-16 lg:pb-24">
    <!-- Ambient Background Gradients -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-blue-100/40 blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 rounded-full bg-sky-100/50 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Text Content -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left reveal reveal-up">
                
                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100/80 border border-blue-200 text-blue-800 text-xs sm:text-sm font-semibold shadow-2xs">
                    <span class="flex h-2 w-2 rounded-full bg-blue-600 animate-pulse"></span>
                    <span>Distribución Farmacéutica Certificada en Nicaragua</span>
                </div>

                <!-- Main Title -->
                <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    Soluciones farmacéuticas <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 via-sky-600 to-blue-800">confiables</span> para el cuidado de la salud
                </h1>

                <!-- Subtitle -->
                <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto lg:mx-0 font-normal leading-relaxed">
                    Abastecemos a clínicas, farmacias, hospitales y profesionales de la salud con medicamentos de alta calidad, trazabilidad rigurosa y distribución ágil y segura desde Managua hacia todo el territorio nacional.
                </p>

                <!-- Actions / CTAs -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                    <a href="#catalogo" 
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-xl bg-blue-700 hover:bg-blue-800 text-white font-bold text-sm shadow-md hover:shadow-lg transition-all active:scale-95 duration-150 group">
                        <span>Ver Catálogo de Productos</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>

                    <a href="#contacto" 
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-white hover:bg-slate-100 text-slate-700 font-bold text-sm border border-slate-300 shadow-xs transition-all active:scale-95 duration-150">
                        <span>Contáctanos</span>
                    </a>
                </div>

                <!-- Trust Metrics / Highlights -->
                <div class="pt-8 border-t border-slate-200/80 grid grid-cols-3 gap-4 sm:gap-6 text-left">
                    <div class="space-y-1">
                        <div class="text-2xl sm:text-3xl font-black text-blue-700">100%</div>
                        <div class="text-xs sm:text-sm font-medium text-slate-500 leading-snug">Calidad Farmacopeica (USP/BP)</div>
                    </div>
                    <div class="space-y-1">
                        <div class="text-2xl sm:text-3xl font-black text-slate-900">+10</div>
                        <div class="text-xs sm:text-sm font-medium text-slate-500 leading-snug">Líneas Esenciales en Stock</div>
                    </div>
                    <div class="space-y-1">
                        <div class="text-2xl sm:text-3xl font-black text-emerald-600">Nacional</div>
                        <div class="text-xs sm:text-sm font-medium text-slate-500 leading-snug">Distribución Rápida y Segura</div>
                    </div>
                </div>

            </div>

            <!-- Right Visual Composition -->
            <div class="lg:col-span-5 relative flex items-center justify-center reveal reveal-right delay-140">
                <div class="relative w-full max-w-lg lg:max-w-none">
                    
                    <!-- Decorative Backdrop Glow -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-500/10 via-sky-400/15 to-transparent rounded-3xl filter blur-2xl"></div>

                    <!-- Clean Pharmaceutical Graphic Illustration -->
                    <div class="relative rounded-3xl bg-white/80 p-3 sm:p-6 backdrop-blur-xs border border-white shadow-xl">
                        <img src="{{ asset('images/hero-pharma.svg') }}" 
                             alt="DISESBA Distribución Farmacéutica" 
                             class="w-full h-auto object-contain drop-shadow-sm select-none">
                    </div>

                    <!-- Floating Verified Badge Bottom -->
                    <div class="absolute -bottom-4 -left-4 sm:bottom-4 sm:-left-6 bg-white/95 backdrop-blur-md px-4 py-3 rounded-2xl border border-slate-200 shadow-lg flex items-center gap-3">
                        <div class="p-2 rounded-xl bg-blue-50 text-blue-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-bold text-slate-900">Registro y Respaldo Oficial</div>
                            <div class="text-[11px] text-slate-500">Sede en Managua, Nicaragua</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
