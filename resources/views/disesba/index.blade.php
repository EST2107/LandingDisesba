<x-layout :company="$company" :generalWaUrl="$generalWaUrl">
    <!-- Hero Section -->
    <x-hero :company="$company" />

    <!-- Catálogo de Medicamentos (Filtros, Grid, Búsqueda) -->
    <x-catalog :products="$products" :categories="$categories" :company="$company" />

    <!-- Quiénes Somos (Nosotros) -->
    <x-about :about="$about" :company="$company" />

    <!-- Misión y Visión -->
    <x-mission-vision :mission="$mission" :vision="$vision" />

    <!-- Valores y Compromisos Institucionales -->
    <x-values :values="$values" />

    <!-- Contacto y Canales de Atención -->
    <x-contact :company="$company" :generalWaUrl="$generalWaUrl" />
</x-layout>
