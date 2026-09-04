@props(['values'])

<section class="py-16 sm:py-20 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-12 space-y-2 reveal reveal-up">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-blue-700 bg-blue-50 px-3.5 py-1 rounded-full border border-blue-200">
                Principios Institucionales
            </span>
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                Nuestros Valores y Compromisos
            </h2>
            <p class="text-slate-600 text-sm">
                Garantizamos una distribución responsable basada en los más altos estándares éticos y comerciales.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Valor 1: Confianza -->
            <div class="p-6 rounded-2xl bg-slate-50 hover:bg-blue-50/50 border border-slate-200/80 hover:border-blue-200 transition-all duration-200 group flex flex-col justify-between reveal reveal-up">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-800 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors">
                        Confianza
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Relaciones sólidas y transparentes con centros médicos, farmacias e instituciones de salud en todo el territorio.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-200/60 text-[11px] font-semibold text-blue-700">
                    Socio comercial seguro
                </div>
            </div>

            <!-- Valor 2: Calidad -->
            <div class="p-6 rounded-2xl bg-slate-50 hover:bg-blue-50/50 border border-slate-200/80 hover:border-blue-200 transition-all duration-200 group flex flex-col justify-between reveal reveal-up delay-70">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-sky-100 text-sky-800 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors">
                        Calidad
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Fármacos elaborados bajo estrictos estándares farmacopeicos internacionales (USP/BP) y trazabilidad certificada.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-200/60 text-[11px] font-semibold text-sky-700">
                    Estándares USP / BP
                </div>
            </div>

            <!-- Valor 3: Distribución Segura -->
            <div class="p-6 rounded-2xl bg-slate-50 hover:bg-blue-50/50 border border-slate-200/80 hover:border-blue-200 transition-all duration-200 group flex flex-col justify-between reveal reveal-up delay-140">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors">
                        Distribución Segura
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Cadena de custodia, conservación y entrega oportuna en Managua y todos los departamentos de Nicaragua.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-200/60 text-[11px] font-semibold text-emerald-700">
                    Cobertura nacional
                </div>
            </div>

            <!-- Valor 4: Compromiso con la Salud -->
            <div class="p-6 rounded-2xl bg-slate-50 hover:bg-blue-50/50 border border-slate-200/80 hover:border-blue-200 transition-all duration-200 group flex flex-col justify-between reveal reveal-up delay-210">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-rose-100 text-rose-800 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors">
                        Compromiso con la Salud
                    </h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Dedicación continua para facilitar el acceso a tratamientos vitales y mejorar el bienestar de las familias nicaragüenses.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-200/60 text-[11px] font-semibold text-rose-700">
                    Bienestar comunitario
                </div>
            </div>

        </div>

    </div>
</section>
