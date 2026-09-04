@props(['company'])

<div x-show="modalOpen" 
     class="fixed inset-0 z-50 overflow-y-auto"
     aria-labelledby="modal-title" 
     role="dialog" 
     aria-modal="true"
     x-cloak>
    
    <!-- Backdrop Blur -->
    <div x-show="modalOpen"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="closeModal()"
         class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity"></div>

    <!-- Modal Dialog Center -->
    <div class="flex min-h-full items-center justify-center p-3 sm:p-4 text-center">
        <div x-show="modalOpen"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             @click.away="closeModal()"
             class="relative transform overflow-hidden rounded-3xl bg-white text-left shadow-2xl transition-all sm:my-8 w-full max-w-3xl border border-slate-200">
            
            <!-- Modal Header Bar -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 bg-slate-50/80">
                <div class="flex items-center gap-2">
                    <span class="inline-flex h-2.5 w-2.5 rounded-full bg-blue-600"></span>
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Ficha Técnica Comercial</span>
                </div>

                <!-- Close Button -->
                <button @click="closeModal()"
                        type="button" 
                        class="rounded-xl p-1.5 text-slate-400 hover:text-slate-700 hover:bg-slate-200 transition-colors focus:outline-hidden cursor-pointer"
                        aria-label="Cerrar modal">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Modal Content Body -->
            <template x-if="selectedProduct">
                <div class="p-6 sm:p-8 space-y-6">
                    
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 lg:gap-8 items-start">
                        
                        <!-- Left Column: Large Image Packshot -->
                        <div class="md:col-span-5 flex flex-col gap-3">
                            <div class="bg-slate-50/90 rounded-2xl p-4 sm:p-6 border border-slate-200/80 flex items-center justify-center relative min-h-[260px] sm:min-h-[320px]">
                                <img :src="selectedProduct.imagen" 
                                     :alt="selectedProduct.nombre"
                                     class="max-h-64 sm:max-h-80 w-auto max-w-full object-contain drop-shadow-md select-none transition-transform duration-300">
                                
                                <div class="absolute top-3 left-3">
                                    <span class="text-[10px] font-bold uppercase tracking-wider bg-blue-700 text-white px-2.5 py-1 rounded-md shadow-2xs"
                                          x-text="selectedProduct.categoria"></span>
                                </div>
                            </div>

                            <!-- Laboratorio Pill if confirmed -->
                            <template x-if="selectedProduct.laboratorio">
                                <div class="flex items-center justify-between px-3 py-2 rounded-xl bg-slate-50 border border-slate-200/70 text-xs">
                                    <span class="text-slate-400 font-semibold uppercase text-[10px]">Laboratorio</span>
                                    <span class="font-bold text-slate-800" x-text="selectedProduct.laboratorio"></span>
                                </div>
                            </template>
                        </div>

                        <!-- Right Column: Main Details & Specs -->
                        <div class="md:col-span-7 space-y-5">
                            
                            <!-- Product Title & Main Identification -->
                            <div>
                                <h3 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight leading-tight" 
                                    x-text="selectedProduct.nombre"></h3>
                                <div class="text-sm font-semibold text-blue-700 mt-1 flex items-center gap-2">
                                    <span x-text="selectedProduct.forma_farmaceutica || selectedProduct.tipo"></span>
                                    <span>&bull;</span>
                                    <span x-text="selectedProduct.concentracion"></span>
                                </div>
                            </div>

                            <!-- Structured Spec Blocks Grid -->
                            <div class="grid grid-cols-2 gap-2.5">
                                
                                <!-- Concentración -->
                                <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-200/60">
                                    <span class="block text-[10px] uppercase font-bold text-slate-400 tracking-wider">Concentración</span>
                                    <span class="text-xs sm:text-sm font-bold text-slate-800" x-text="selectedProduct.concentracion"></span>
                                </div>

                                <!-- Forma Farmacéutica -->
                                <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-200/60">
                                    <span class="block text-[10px] uppercase font-bold text-slate-400 tracking-wider">Forma Farmacéutica</span>
                                    <span class="text-xs sm:text-sm font-bold text-slate-800 leading-tight block mt-0.5" x-text="selectedProduct.forma_farmaceutica || selectedProduct.tipo"></span>
                                </div>

                                <!-- Presentación -->
                                <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-200/60">
                                    <span class="block text-[10px] uppercase font-bold text-slate-400 tracking-wider">Presentación</span>
                                    <span class="text-xs sm:text-sm font-bold text-slate-800 leading-tight block mt-0.5" x-text="selectedProduct.presentacion"></span>
                                </div>

                                <!-- Vía de Administración (si está confirmada) -->
                                <template x-if="selectedProduct.via">
                                    <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-200/60">
                                        <span class="block text-[10px] uppercase font-bold text-slate-400 tracking-wider">Vía</span>
                                        <span class="text-xs sm:text-sm font-bold text-slate-800 leading-tight block mt-0.5" x-text="selectedProduct.via"></span>
                                    </div>
                                </template>

                                <!-- Liberación (si está confirmada) -->
                                <template x-if="selectedProduct.liberacion">
                                    <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-200/60">
                                        <span class="block text-[10px] uppercase font-bold text-slate-400 tracking-wider">Liberación</span>
                                        <span class="text-xs sm:text-sm font-bold text-slate-800 leading-tight block mt-0.5" x-text="selectedProduct.liberacion"></span>
                                    </div>
                                </template>

                                <!-- Categoría -->
                                <div class="bg-slate-50 p-2.5 rounded-xl border border-slate-200/60">
                                    <span class="block text-[10px] uppercase font-bold text-slate-400 tracking-wider">Categoría</span>
                                    <span class="text-xs sm:text-sm font-bold text-blue-700 leading-tight block mt-0.5" x-text="selectedProduct.categoria"></span>
                                </div>

                            </div>

                            <!-- Descripción del producto -->
                            <div class="space-y-1.5 pt-1">
                                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-500">Descripción del producto</h4>
                                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal" x-text="selectedProduct.descripcion"></p>
                            </div>

                        </div>

                    </div>

                    <!-- Características -->
                    <div class="pt-4 border-t border-slate-100 space-y-2.5">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-slate-500">Características</h4>
                        <ul class="flex flex-wrap gap-2">
                            <template x-for="(carac, index) in selectedProduct.caracteristicas" :key="index">
                                <li class="inline-flex items-center gap-1.5 text-xs font-medium text-slate-700 bg-blue-50/60 border border-blue-100 px-3 py-1.5 rounded-xl">
                                    <svg class="w-3.5 h-3.5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span x-text="carac"></span>
                                </li>
                            </template>
                        </ul>
                    </div>

                    <!-- Footer: Aviso Informativo y Botón CTA WhatsApp -->
                    <div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                        
                        <!-- Aviso Informativo Discreto -->
                        <div class="text-[11px] text-slate-400 leading-relaxed text-center sm:text-left sm:max-w-xs">
                            Información presentada con fines de catálogo. Para información sobre uso, indicaciones o tratamiento, consulte a un profesional de la salud.
                        </div>

                        <!-- Botón CTA WhatsApp con mensaje solicitado -->
                        <a :href="'https://wa.me/{{ $company['whatsapp_raw'] }}?text=' + encodeURIComponent('Hola, quisiera obtener más información sobre ' + selectedProduct.nombre + ' ' + selectedProduct.concentracion + ' disponible en el catálogo de DISESBA.')"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="w-full sm:w-auto shrink-0 inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold shadow-md hover:shadow-lg transition-all active:scale-95 cursor-pointer">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                            </svg>
                            <span>Consultar por WhatsApp</span>
                        </a>
                    </div>

                </div>
            </template>

        </div>
    </div>
</div>
