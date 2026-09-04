<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DisesbaLandingController extends Controller
{
    /**
     * Muestra la landing page corporativa de DISESBA con su catálogo de productos.
     */
    public function index(): View
    {
        $company = config('disesba.company');
        $about = config('disesba.about');
        $mission = config('disesba.mission');
        $vision = config('disesba.vision');
        $values = config('disesba.values');
        $products = config('disesba.products');

        // Extraer categorías únicas para los filtros
        $categories = collect($products)->pluck('categoria')->unique()->values()->all();
        array_unshift($categories, 'Todos');

        // Generar enlace dinámico de WhatsApp para cada producto con mensaje exacto solicitado
        $productsWithWa = array_map(function ($product) use ($company) {
            // Compatibilidad para tarjetas existentes
            $product['tipo'] = $product['forma_farmaceutica'];

            $message = "Hola, quisiera obtener más información sobre " . $product['nombre'] . " " . $product['concentracion'] . " disponible en el catálogo de DISESBA.";
            $product['whatsapp_url'] = "https://wa.me/" . $company['whatsapp_raw'] . "?text=" . rawurlencode($message);
            return $product;
        }, $products);

        // Enlace general de consulta a WhatsApp
        $generalWaMessage = "Hola DISESBA, quisiera recibir más información comercial sobre su catálogo de medicamentos y opciones de distribución.";
        $generalWaUrl = "https://wa.me/" . $company['whatsapp_raw'] . "?text=" . rawurlencode($generalWaMessage);

        return view('disesba.index', [
            'company' => $company,
            'about' => $about,
            'mission' => $mission,
            'vision' => $vision,
            'values' => $values,
            'categories' => $categories,
            'products' => $productsWithWa,
            'generalWaUrl' => $generalWaUrl,
        ]);
    }
}
