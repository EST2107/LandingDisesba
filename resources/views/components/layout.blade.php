<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>{{ $title ?? 'DISESBA, S.A. | Distribuidora de Medicamentos en Nicaragua' }}</title>
    <meta name="description" content="Distribuidora e importadora de medicamentos en Nicaragua. Soluciones farmacéuticas confiables para clínicas, farmacias y centros médicos. Calidad, disponibilidad y entrega segura.">
    <meta name="keywords" content="DISESBA, distribuidora medicamentos Nicaragua, farmacéutica Managua, venta medicamentos clínicas, omeprazol, sildenafil, ibuprofeno, azithromycin, amoxicilina">
    <meta name="author" content="DISESBA, S.A.">
    
    <!-- Open Graph / Meta Social -->
    <meta property="og:title" content="DISESBA, S.A. | Distribución Farmacéutica Confiable">
    <meta property="og:description" content="Soluciones farmacéuticas de alta calidad con distribución eficiente en Nicaragua.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/logodisesba.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logodisesba.jpg') }}">

    <!-- Google Fonts: Plus Jakarta Sans & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-sky-500 selection:text-white"
      x-data="{
          mobileMenuOpen: false,
          callModalOpen: false,
          activeCategory: 'Todos',
          searchQuery: '',
          selectedProduct: null,
          modalOpen: false,
          openModal(product) {
              this.selectedProduct = product;
              this.modalOpen = true;
              document.body.style.overflow = 'hidden';
          },
          closeModal() {
              this.modalOpen = false;
              document.body.style.overflow = 'auto';
          }
      }"
      @keydown.escape.window="closeModal(); callModalOpen = false">

    <!-- Header -->
    <x-header :company="$company" />

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Modal de Ficha Técnica Comercial -->
    <x-product-modal :company="$company" />

    <!-- Mini Modal: Selector de Llamada -->
    <x-call-modal :company="$company" />

    <!-- Botón Flotante de WhatsApp -->
    <x-floating-whatsapp :url="$generalWaUrl" :company="$company" />

    <!-- Footer -->
    <x-footer :company="$company" />

</body>
</html>
