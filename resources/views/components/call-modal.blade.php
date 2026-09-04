@props(['company'])

<!-- Mini Modal: Selector de Llamada Directa -->
<div x-show="callModalOpen" 
     class="fixed inset-0 z-50 overflow-y-auto"
     aria-labelledby="modal-call-title" 
     role="dialog" 
     aria-modal="true"
     x-cloak>
    
    <!-- Backdrop Blur -->
    <div x-show="callModalOpen"
         x-transition:enter="ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="callModalOpen = false"
         class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs transition-opacity"></div>

    <!-- Modal Dialog Center -->
    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
        <div x-show="callModalOpen"
             x-transition:enter="ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95 translate-y-2"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="ease-in duration-150"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-95 translate-y-2"
             @click.away="callModalOpen = false"
             class="relative transform overflow-hidden rounded-3xl bg-white text-left shadow-2xl transition-all sm:my-8 w-full max-w-sm border border-slate-200 p-6 space-y-5">
            
            <!-- Header -->
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div>
                        <h3 id="modal-call-title" class="text-sm font-extrabold text-slate-900 tracking-tight">
                            ¿A qué número deseas llamar?
                        </h3>
                        <p class="text-[11px] text-slate-500">Líneas oficiales DISESBA</p>
                    </div>
                </div>

                <!-- Close Button -->
                <button @click="callModalOpen = false"
                        type="button" 
                        class="rounded-xl p-1.5 text-slate-400 hover:text-slate-700 hover:bg-slate-100 transition-colors focus:outline-hidden"
                        aria-label="Cerrar">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Numbers Selector List -->
            <div class="space-y-2.5">
                
                <!-- Option 1: Línea Principal -->
                <a href="tel:+50584407264"
                   @click="callModalOpen = false"
                   class="group flex items-center justify-between p-3.5 rounded-2xl bg-slate-50 hover:bg-blue-50/80 border border-slate-200/80 hover:border-blue-200 transition-all duration-150 active:scale-98">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 group-hover:bg-emerald-200 text-emerald-700 flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <div class="text-sm font-bold text-slate-900 group-hover:text-blue-700 transition-colors">
                                (+505) 8440 7264
                            </div>
                            <span class="inline-block text-[10px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.2 rounded-md">
                                Línea Principal
                            </span>
                        </div>
                    </div>

                    <div class="text-slate-400 group-hover:text-blue-700 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </a>

                <!-- Option 2: Línea Alternativa -->
                <a href="tel:+50584406341"
                   @click="callModalOpen = false"
                   class="group flex items-center justify-between p-3.5 rounded-2xl bg-slate-50 hover:bg-blue-50/80 border border-slate-200/80 hover:border-blue-200 transition-all duration-150 active:scale-98">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-blue-100 group-hover:bg-blue-200 text-blue-700 flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <div class="text-sm font-bold text-slate-900 group-hover:text-blue-700 transition-colors">
                                (+505) 8440 6341
                            </div>
                            <span class="inline-block text-[10px] font-semibold text-blue-700 bg-blue-50 px-2 py-0.2 rounded-md">
                                Línea Alternativa
                            </span>
                        </div>
                    </div>

                    <div class="text-slate-400 group-hover:text-blue-700 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </a>

            </div>

            <!-- Footer Note -->
            <div class="text-[11px] text-slate-400 text-center pt-1 border-t border-slate-100">
                Horario: {{ $company['hours'] }}
            </div>

        </div>
    </div>
</div>
