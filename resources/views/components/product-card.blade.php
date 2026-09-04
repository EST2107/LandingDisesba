@props(['product', 'company', 'index' => 0])

<div class="group bg-white rounded-2xl border border-slate-200/90 hover:border-blue-300 hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden relative reveal reveal-up {{ ($index % 4 === 1 ? 'delay-70' : ($index % 4 === 2 ? 'delay-140' : ($index % 4 === 3 ? 'delay-210' : ''))) }}"
     x-show="(activeCategory === 'Todos' || '{{ $product['categoria'] }}' === activeCategory) && 
             ('{{ strtolower($product['nombre']) }}'.includes(searchQuery.toLowerCase()) || 
              '{{ strtolower($product['concentracion']) }}'.includes(searchQuery.toLowerCase()) || 
              '{{ strtolower($product['categoria']) }}'.includes(searchQuery.toLowerCase()))"
     x-transition:enter="transition ease-out duration-200"
     x-transition:enter-start="opacity-0 scale-95"
     x-transition:enter-end="opacity-100 scale-100">

    <!-- Top Badge Header: Category & Pharma Type -->
    <div class="p-4 pb-0 flex items-center justify-between gap-2">
        <span class="inline-block text-[11px] font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-2.5 py-1 rounded-md border border-blue-100">
            {{ $product['categoria'] }}
        </span>

        <span class="text-[11px] font-medium text-slate-500 bg-slate-100 px-2 py-0.5 rounded-sm">
            {{ $product['tipo'] }}
        </span>
    </div>

    <!-- Product Image Frame -->
    <div class="relative p-4 flex items-center justify-center bg-slate-50/90 m-4 rounded-2xl border border-slate-100/90 overflow-hidden cursor-pointer h-52 group/img"
         @click="openModal({{ json_encode($product) }})">
        
        <!-- Subtle Glow Effect on Hover -->
        <div class="absolute inset-0 bg-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

        <img src="{{ asset($product['imagen']) }}" 
             alt="{{ $product['nombre'] }} {{ $product['concentracion'] }}" 
             loading="lazy"
             class="max-h-44 w-auto max-w-full object-contain transition-transform duration-300 group-hover:scale-105 select-none drop-shadow-xs">
        
        <!-- Zoom Overlay Icon on Hover -->
        <div class="absolute bottom-2.5 right-2.5 bg-white/90 backdrop-blur-xs text-slate-700 p-1.5 rounded-lg shadow-xs opacity-0 group-hover:opacity-100 transition-opacity duration-200">
            <svg class="w-4 h-4 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" />
            </svg>
        </div>
    </div>

    <!-- Body Information -->
    <div class="px-5 pb-5 flex-1 flex flex-col justify-between space-y-4">
        <div class="space-y-2">
            <!-- Product Title & Concentration Pill -->
            <div class="flex items-start justify-between gap-2">
                <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-700 transition-colors leading-tight">
                    {{ $product['nombre'] }}
                </h3>
                <span class="shrink-0 text-xs font-extrabold text-blue-800 bg-blue-100/90 px-2.5 py-1 rounded-full border border-blue-200">
                    {{ $product['concentracion'] }}
                </span>
            </div>

            <!-- Presentation Tag -->
            <div class="flex items-center gap-1.5 text-xs text-slate-600 font-medium">
                <svg class="w-3.5 h-3.5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
                <span>{{ $product['presentacion'] }}</span>
            </div>

            <!-- Short Commercial Description -->
            <p class="text-xs text-slate-500 line-clamp-2 leading-relaxed font-normal">
                {{ $product['descripcion'] }}
            </p>
        </div>

        <!-- Action Buttons -->
        <div class="pt-2 border-t border-slate-100 flex items-center gap-2">
            <!-- Button: Ver Ficha Técnica -->
            <button type="button"
                    @click="openModal({{ json_encode($product) }})"
                    class="flex-1 py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 hover:text-slate-900 text-xs font-bold transition-all text-center flex items-center justify-center gap-1.5 focus:outline-hidden">
                <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span>Ver Ficha</span>
            </button>

            <!-- Button: Consultar por WhatsApp -->
            <a href="{{ $product['whatsapp_url'] }}"
               target="_blank"
               rel="noopener noreferrer"
               class="flex-1 py-2.5 px-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition-all text-center flex items-center justify-center gap-1.5 shadow-2xs hover:shadow-xs active:scale-95">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                </svg>
                <span>Consultar</span>
            </a>
        </div>
    </div>
</div>
