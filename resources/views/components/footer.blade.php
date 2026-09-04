@props(['company'])

<footer class="bg-slate-900 text-slate-400 text-xs border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16 reveal reveal-up">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10">
            
            <!-- Brand Column -->
            <div class="lg:col-span-4 space-y-4">
                <div class="flex items-center gap-3">
                    <div class="bg-white p-1 rounded-xl">
                        <img src="{{ asset($company['logo']) }}" alt="DISESBA Logo" class="h-10 w-auto object-contain">
                    </div>
                    <div>
                        <span class="text-xl font-black text-white tracking-tight">DISESBA, S.A.</span>
                        <div class="text-[11px] text-blue-400 font-medium">Distribuidora e Importadora</div>
                    </div>
                </div>

                <p class="text-slate-400 text-xs leading-relaxed max-w-sm">
                    Comprometidos con brindar soluciones farmacéuticas confiables y accesibles para el cuidado de la salud en Nicaragua. Suministro seguro para clínicas, centros asistenciales y farmacias.
                </p>

                <div class="text-[11px] text-slate-500">
                    Sede: <span class="text-slate-300 font-semibold">{{ $company['location'] }}</span>
                </div>
            </div>

            <!-- Quick Navigation -->
            <div class="lg:col-span-3 space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-200">Navegación</h4>
                <ul class="space-y-2">
                    <li><a href="#inicio" class="hover:text-white transition-colors">Inicio</a></li>
                    <li><a href="#catalogo" class="hover:text-white transition-colors">Catálogo de Medicamentos</a></li>
                    <li><a href="#nosotros" class="hover:text-white transition-colors">Quiénes Somos</a></li>
                    <li><a href="#mision-vision" class="hover:text-white transition-colors">Misión y Visión</a></li>
                    <li><a href="#contacto" class="hover:text-white transition-colors">Contacto Corporativo</a></li>
                </ul>
            </div>

            <!-- Categories Line -->
            <div class="lg:col-span-2 space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-200">Líneas Esenciales</h4>
                <ul class="space-y-2 text-[11px]">
                    <li>Gastrointestinal</li>
                    <li>Salud masculina</li>
                    <li>Analgésicos y antiinflamatorios</li>
                    <li>Antibióticos</li>
                    <li>Cardiovascular</li>
                </ul>
            </div>

            <!-- Contact & Assistance -->
            <div class="lg:col-span-3 space-y-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-200">Contacto Directo</h4>
                <div class="space-y-2">
                    <p class="text-slate-300 font-medium flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+50584407264" class="hover:text-white transition-colors">{{ $company['phone'] }}</a>
                    </p>
                    <p class="text-slate-300 font-medium flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+50584406341" class="hover:text-white transition-colors">{{ $company['phone_secondary'] }}</a>
                    </p>
                    <p class="text-slate-300 font-medium flex items-center gap-2">
                        <svg class="w-4 h-4 text-blue-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:{{ $company['email'] }}" class="hover:text-blue-400 transition-colors">{{ $company['email'] }}</a>
                    </p>
                    <p class="text-[11px] text-slate-400 pt-1">
                        {{ $company['hours'] }}
                    </p>
                </div>
            </div>

        </div>

        <!-- Legal Disclaimer & Copyright -->
        <div class="mt-12 pt-8 border-t border-slate-800/80 flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] text-slate-500">
            <p>&copy; {{ date('Y') }} DISESBA, S.A. Todos los derechos reservados. Managua, Nicaragua.</p>
            <p class="text-slate-400 text-center sm:text-right">
                Catálogo informativo corporativo. No constituye comercio electrónico ni venta directa al público.
            </p>
        </div>
    </div>
</footer>
