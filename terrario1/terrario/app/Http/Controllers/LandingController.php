<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $features = [
            [
                'code' => 'TERR-01',
                'title' => 'Ecosistema cerrado',
                'description' => 'Un ciclo de agua autosuficiente dentro del frasco. Se riega solo, literalmente.',
                'featured' => true,
            ],
            [
                'code' => 'TERR-02',
                'title' => 'Kit de armado guiado',
                'description' => 'Sustrato, carbón activado, musgo vivo y la planta ya seleccionada para tu tipo de luz.',
                'featured' => false,
            ],
            [
                'code' => 'TERR-03',
                'title' => 'Ficha de cuidado',
                'description' => 'Cada envío llega con la ficha de la especie: origen, luz, humedad y frecuencia de revisión.',
                'featured' => false,
            ],
            [
                'code' => 'TERR-04',
                'title' => 'Soporte por foto',
                'description' => 'Envíanos una foto del frasco y un botánico te responde en menos de 24 horas.',
                'featured' => false,
            ],
        ];

        $testimonials = [
            [
                'name' => 'Camila Restrepo',
                'role' => 'Diseñadora, Medellín',
                'quote' => 'Llevo ocho meses sin regarlo y el helecho sigue igual de verde que el primer día.',
                'avatar' => 'CR',
                'variant' => 'default',
            ],
            [
                'name' => 'Julián Osorio',
                'role' => 'Estudiante de arquitectura',
                'quote' => 'La ficha de la especie me enseñó más de botánica que cualquier video de internet.',
                'avatar' => 'JO',
                'variant' => 'quote',
            ],
            [
                'name' => 'Mariana Zuluaga',
                'role' => 'Ingeniera de sistemas',
                'quote' => 'Es el único ser vivo en mi apartamento que no depende de mi memoria.',
                'avatar' => 'MZ',
                'variant' => 'default',
            ],
        ];

        $plans = [
            [
                'code' => 'FICHA-N01',
                'name' => 'Brote',
                'price' => '69.000',
                'period' => 'pago único',
                'items' => ['Frasco de 500 ml', '1 especie de bajo mantenimiento', 'Ficha de cuidado impresa'],
                'featured' => false,
            ],
            [
                'code' => 'FICHA-N02',
                'name' => 'Vivero',
                'price' => '129.000',
                'period' => 'pago único',
                'items' => ['Frasco de 1.2 L', '2 especies compatibles', 'Ficha + soporte por foto', 'Herramientas de armado'],
                'featured' => true,
            ],
            [
                'code' => 'FICHA-N03',
                'name' => 'Bosque',
                'price' => '39.000',
                'period' => 'mensual · suscripción',
                'items' => ['Una especie nueva cada mes', 'Rotación curada por temporada', 'Soporte prioritario', 'Envío incluido'],
                'featured' => false,
            ],
        ];

        return view('landing', compact('features', 'testimonials', 'plans'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        // Aquí iría el envío real (mail, base de datos, etc.)
        return back()->with('status', 'Mensaje enviado. Te escribimos en menos de un día.');
    }
}
