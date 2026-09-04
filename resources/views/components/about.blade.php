@props(['about', 'company'])

<section id="nosotros" class="py-16 sm:py-24 bg-white relative overflow-hidden border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Brand Presentation Column -->
            <div class="lg:col-span-5 space-y-6 reveal reveal-left">
                <div class="relative">
                    <!-- Accent decorative card -->
                    <div class="rounded-3xl bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900 p-8 sm:p-10 text-white shadow-xl relative overflow-hidden">
                        
                        <div class="absolute -right-12 -bottom-12 w-48 h-48 rounded-full bg-blue-500/20 blur-2xl"></div>

                        <!-- Brand Header in Card -->
                        <div class="flex items-center gap-4 mb-8">
                            <div class="bg-white p-2 rounded-2xl shadow-md">
                                <img src="{{ asset($company['logo']) }}" alt="Logo DISESBA" class="h-12 w-auto object-contain">
                            </div>
                            <div>
                                <h3 class="text-xl font-extrabold tracking-tight">DISESBA, S.A.</h3>
                                <p class="text-xs text-blue-200">Managua, Nicaragua</p>
                            </div>
                        </div>

                        <!-- Highlights List -->
                        <div class="space-y-4 text-xs sm:text-sm text-blue-100">
                            <div class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded-lg bg-blue-700/80 flex items-center justify-center text-white shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span>Distribución responsable y trazable</span>
                            </div>

                            <div class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded-lg bg-blue-700/80 flex items-center justify-center text-white shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span>Alianza estratégica con centros médicos</span>
                            </div>

                            <div class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded-lg bg-blue-700/80 flex items-center justify-center text-white shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span>Compromiso de entrega segura y oportuna</span>
                            </div>
                        </div>

                        <!-- Card Footer Note -->
                        <div class="mt-8 pt-6 border-t border-blue-700/50 flex items-center justify-between text-xs text-blue-200">
                            <span>Sector Farmacéutico Nacional</span>
                            <span class="font-bold text-white">Nicaragua</span>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Right Official Content Column -->
            <div class="lg:col-span-7 space-y-6 reveal reveal-right">
                <div>
                    <span class="inline-block text-xs font-bold uppercase tracking-widest text-blue-700 bg-blue-50 px-3.5 py-1 rounded-full border border-blue-200 mb-3">
                        DISESBA, S.A.
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                        QUIÉNES SOMOS
                    </h2>
                </div>

                <!-- Exact Corporate Text Required by User -->
                <div class="prose prose-slate max-w-none">
                    <p class="text-base sm:text-lg text-slate-700 leading-relaxed font-normal bg-slate-50/80 p-6 sm:p-8 rounded-2xl border-l-4 border-blue-700 border-slate-200">
                        {{ $about['content'] }}
                    </p>
                </div>

                <!-- Secondary Trust Badges -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 flex items-start gap-3">
                        <div class="p-2 rounded-lg bg-blue-100 text-blue-800 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900">Sede Estratégica</h4>
                            <p class="text-xs text-slate-500 mt-0.5">Operaciones logísticas centralizadas en Managua para respuesta rápida.</p>
                        </div>
                    </div>

                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 flex items-start gap-3">
                        <div class="p-2 rounded-lg bg-emerald-100 text-emerald-800 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900">Confianza Médica</h4>
                            <p class="text-xs text-slate-500 mt-0.5">Atención dedicada a clínicas privadas, centros asistenciales y farmacias.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
