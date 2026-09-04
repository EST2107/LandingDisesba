@props(['company'])

<header class="sticky top-0 z-40 w-full bg-white/95 backdrop-blur-md border-b border-slate-100 shadow-xs transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Brand / Logo -->
            <a href="#inicio" class="flex items-center gap-3.5 group">
                <div class="relative overflow-hidden rounded-xl border border-slate-200 bg-white p-1 shadow-xs transition-transform group-hover:scale-105 duration-200">
                    <img src="{{ asset($company['logo']) }}" alt="DISESBA Logo" class="h-10 sm:h-12 w-auto object-contain">
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center gap-1.5">
                        <span class="text-xl sm:text-2xl font-black tracking-tight text-slate-900 group-hover:text-blue-700 transition-colors">DISESBA</span>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-blue-700 bg-blue-50 px-2 py-0.5 rounded-full border border-blue-100">S.A.</span>
                    </div>
                    <span class="text-[11px] font-medium text-slate-500 tracking-wide hidden sm:inline">Distribuidora de Medicamentos</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
                <a href="#inicio" class="hover:text-blue-700 transition-colors py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-700 hover:after:w-full after:transition-all">
                    Inicio
                </a>
                <a href="#catalogo" class="hover:text-blue-700 transition-colors py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-700 hover:after:w-full after:transition-all">
                    Catálogo
                </a>
                <a href="#nosotros" class="hover:text-blue-700 transition-colors py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-700 hover:after:w-full after:transition-all">
                    Nosotros
                </a>
                <a href="#mision-vision" class="hover:text-blue-700 transition-colors py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-700 hover:after:w-full after:transition-all">
                    Misión y Visión
                </a>
                <a href="#contacto" class="hover:text-blue-700 transition-colors py-1 relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-blue-700 hover:after:w-full after:transition-all">
                    Contacto
                </a>
            </nav>

            <!-- Actions Right -->
            <div class="hidden lg:flex items-center gap-4">
                <!-- Phone Info Pill with Call Selector -->
                <button type="button"
                        @click="callModalOpen = true" 
                        class="flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-blue-700 transition-colors bg-slate-50 hover:bg-slate-100 px-3 py-2 rounded-lg border border-slate-200 cursor-pointer focus:outline-hidden"
                        aria-label="Llamar a DISESBA">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>Llamar: {{ $company['phone'] }}</span>
                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- WhatsApp Button -->
                <a href="https://wa.me/{{ $company['whatsapp_raw'] }}?text={{ rawurlencode('Hola DISESBA, me comunico desde su sitio web. Quisiera información comercial sobre su catálogo.') }}"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold tracking-wide shadow-sm hover:shadow-md transition-all active:scale-95 duration-150">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                    <span>Contactar</span>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex items-center md:hidden gap-2">
                <a href="https://wa.me/{{ $company['whatsapp_raw'] }}" 
                   class="p-2 rounded-lg bg-emerald-50 text-emerald-600 hover:bg-emerald-100"
                   aria-label="WhatsApp">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                    </svg>
                </a>

                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        type="button" 
                        class="p-2.5 rounded-xl text-slate-600 hover:text-slate-900 hover:bg-slate-100 focus:outline-hidden"
                        aria-label="Abrir menú">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu Drawer -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden border-b border-slate-200 bg-white px-4 pt-2 pb-6 space-y-3 shadow-lg"
         x-cloak>
        <a @click="mobileMenuOpen = false" href="#inicio" class="block py-2.5 px-3 rounded-lg text-base font-semibold text-slate-800 hover:bg-blue-50 hover:text-blue-700">
            Inicio
        </a>
        <a @click="mobileMenuOpen = false" href="#catalogo" class="block py-2.5 px-3 rounded-lg text-base font-semibold text-slate-800 hover:bg-blue-50 hover:text-blue-700">
            Catálogo de Medicamentos
        </a>
        <a @click="mobileMenuOpen = false" href="#nosotros" class="block py-2.5 px-3 rounded-lg text-base font-semibold text-slate-800 hover:bg-blue-50 hover:text-blue-700">
            Nosotros
        </a>
        <a @click="mobileMenuOpen = false" href="#mision-vision" class="block py-2.5 px-3 rounded-lg text-base font-semibold text-slate-800 hover:bg-blue-50 hover:text-blue-700">
            Misión y Visión
        </a>
        <a @click="mobileMenuOpen = false" href="#contacto" class="block py-2.5 px-3 rounded-lg text-base font-semibold text-slate-800 hover:bg-blue-50 hover:text-blue-700">
            Contacto
        </a>

        <div class="pt-3 border-t border-slate-100 space-y-2">
            <div class="text-xs text-slate-500 font-medium px-3 space-y-1">
                <div>Atención Telefónica: <a href="tel:+50584407264" class="font-bold text-slate-800 hover:text-blue-700">{{ $company['phone'] }}</a></div>
                <div>Teléfono Alternativo: <a href="tel:+50584406341" class="font-bold text-slate-800 hover:text-blue-700">{{ $company['phone_secondary'] }}</a></div>
            </div>
            <a href="https://wa.me/{{ $company['whatsapp_raw'] }}" 
               class="flex items-center justify-center gap-2 w-full py-3 rounded-xl bg-emerald-600 text-white font-bold text-sm shadow-sm">
                <span>Escríbenos por WhatsApp</span>
            </a>
        </div>
    </div>
</header>
