@props(['mission', 'vision'])

<section id="mision-vision" class="py-16 sm:py-20 bg-slate-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-14 space-y-2 reveal reveal-up">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-blue-700 bg-blue-100/70 px-3.5 py-1 rounded-full border border-blue-200">
                Propósito Estratégico
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Misión y Visión
            </h2>
            <p class="text-slate-600 text-sm sm:text-base">
                Los pilares fundamentales que guían nuestras operaciones y relaciones comerciales en Nicaragua.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
            
            <!-- Tarjeta Misión -->
            <div class="bg-white rounded-3xl p-8 sm:p-10 border border-slate-200/90 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden flex flex-col justify-between group reveal reveal-left">
                <div class="absolute top-0 left-0 w-2 h-full bg-blue-600"></div>

                <div>
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-700 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>

                    <span class="text-xs font-bold uppercase tracking-widest text-blue-700">Propósito Diario</span>
                    <h3 class="text-2xl font-black text-slate-900 tracking-tight mt-1 mb-4">
                        NUESTRA MISIÓN
                    </h3>

                    <p class="text-slate-700 leading-relaxed font-normal text-base">
                        {{ $mission['content'] }}
                    </p>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-slate-400">
                    <span>DISESBA, S.A.</span>
                    <span class="text-blue-600">Calidad &bull; Disponibilidad &bull; Accesibilidad</span>
                </div>
            </div>

            <!-- Tarjeta Visión -->
            <div class="bg-white rounded-3xl p-8 sm:p-10 border border-slate-200/90 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden flex flex-col justify-between group reveal reveal-right">
                <div class="absolute top-0 left-0 w-2 h-full bg-sky-500"></div>

                <div>
                    <div class="w-14 h-14 rounded-2xl bg-sky-50 text-sky-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>

                    <span class="text-xs font-bold uppercase tracking-widest text-sky-600">Hacia el Futuro</span>
                    <h3 class="text-2xl font-black text-slate-900 tracking-tight mt-1 mb-4">
                        NUESTRA VISIÓN
                    </h3>

                    <p class="text-slate-700 leading-relaxed font-normal text-base">
                        {{ $vision['content'] }}
                    </p>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-slate-400">
                    <span>Liderazgo Farmacéutico</span>
                    <span class="text-sky-600">Innovación &bull; Excelencia &bull; Confianza</span>
                </div>
            </div>

        </div>

    </div>
</section>
