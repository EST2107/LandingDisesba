@props(['products', 'categories', 'company'])

<section id="catalogo" class="py-16 sm:py-24 bg-slate-50 relative">
    <!-- Anchor Target Offset Adjustment -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Title -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-12 reveal reveal-up">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-blue-700 bg-blue-100/70 px-3.5 py-1 rounded-full border border-blue-200">
                Portafolio Farmacéutico
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Catálogo de Medicamentos
            </h2>
            <p class="text-base text-slate-600 font-normal leading-relaxed">
                Explore nuestra selección de fármacos esenciales con estándares internacionales de calidad, disponibles para distribución inmediata en clínicas y farmacias.
            </p>
        </div>

        <!-- Filter Controls: Search & Category Tabs -->
        <div class="space-y-6 mb-10 reveal reveal-up delay-70">
            
            <!-- Live Search Bar -->
            <div class="max-w-md mx-auto">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="text"
                           x-model="searchQuery"
                           placeholder="Buscar por nombre, dosis o categoría..."
                           class="w-full pl-10 pr-10 py-3 rounded-xl border border-slate-200 bg-white text-sm text-slate-800 placeholder-slate-400 shadow-2xs focus:outline-hidden focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all">
                    
                    <!-- Clear button -->
                    <button type="button" 
                            x-show="searchQuery.length > 0" 
                            @click="searchQuery = ''"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600"
                            x-cloak>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Category Pills / Tabs -->
            <div class="flex items-center justify-start sm:justify-center gap-2 overflow-x-auto pb-2 scrollbar-none">
                @foreach ($categories as $cat)
                    <button type="button"
                            @click="activeCategory = '{{ $cat }}'"
                            :class="activeCategory === '{{ $cat }}' 
                                ? 'bg-blue-700 text-white shadow-sm border-blue-700' 
                                : 'bg-white text-slate-600 hover:bg-slate-100 hover:text-slate-900 border-slate-200'"
                            class="whitespace-nowrap px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold border transition-all duration-150 focus:outline-hidden">
                        {{ $cat }}
                    </button>
                @endforeach
            </div>

        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <x-product-card :product="$product" :company="$company" :index="$loop->index" />
            @endforeach
        </div>

        <!-- Empty State when filter or search has no matches -->
        <div class="text-center py-16 bg-white rounded-2xl border border-slate-200 mt-6"
             x-show="!document.querySelectorAll('#catalogo .group[style*=\'display: none\']').length === {{ count($products) }}"
             x-cloak>
            <div class="mx-auto w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 mb-3">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h3 class="text-base font-bold text-slate-800">No se encontraron medicamentos</h3>
            <p class="text-xs text-slate-500 mt-1">Pruebe ajustando el término de búsqueda o seleccionando otra categoría.</p>
            <button type="button" 
                    @click="activeCategory = 'Todos'; searchQuery = ''"
                    class="mt-4 px-4 py-2 rounded-lg bg-blue-50 text-blue-700 text-xs font-semibold hover:bg-blue-100 transition-colors">
                Restablecer Filtros
            </button>
        </div>

        <!-- Bottom Assistance Callout -->
        <div class="mt-12 p-6 rounded-2xl bg-gradient-to-r from-blue-900 to-slate-900 text-white flex flex-col sm:flex-row items-center justify-between gap-6 shadow-md reveal reveal-up">
            <div class="space-y-1 text-center sm:text-left">
                <h4 class="text-lg font-bold">¿Necesita una presentación o volumen especial?</h4>
                <p class="text-xs text-blue-200">Podemos gestionar pedidos institucionales y requerimientos hospitalarios personalizados.</p>
            </div>
            <a href="https://wa.me/{{ $company['whatsapp_raw'] }}?text={{ rawurlencode('Hola DISESBA, quisiera consultar por requerimientos institucionales y pedidos por volumen.') }}"
               target="_blank"
               rel="noopener noreferrer"
               class="shrink-0 px-5 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white text-xs font-bold shadow-xs hover:shadow-sm transition-all flex items-center gap-2">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                </svg>
                <span>Cotizar Pedido Institucional</span>
            </a>
        </div>

    </div>
</section>
