<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\Hotel;
use App\Models\Restaurant;
use App\Models\Touristic_place;


class questionController extends Controller
{

    public function question1()
    {
        return view('question.question1');
    }

    public function question2()
    {
        return view('question.question2');
    }

    public function question3()
    {
        return view('question.question3');
    }

    public function mostrar_recomendation(){
        return view('recomendation.recomendation');
    }

    public function guardarComida(Request $request)
    {
        $comidaSeleccionada = $request->input('comida');
        Log::debug("comida ".var_export($comidaSeleccionada,true));

        session(['comidaSeleccionada' => $comidaSeleccionada]);

        return redirect()->route('question2');
    }

    public function guardarHotel(Request $request)
    {
        $hotelSeleccionado = $request->input('hotel');
        Log::debug("hotel ".var_export($hotelSeleccionado,true));

        session(['hotelSeleccionado' => $hotelSeleccionado]);

        return redirect()->route('question3');
    }

    public function guardarSitio(Request $request)
    {
        $sitioSeleccionado = $request->input('destino');
        Log::debug("sitio ".var_export($sitioSeleccionado,true));

        session(['sitioSeleccionado' => $sitioSeleccionado]);

        return redirect()->route('recomendation');
    }

    public function recomendation(Request $request)
    {
        $comidaSeleccionada = session('comidaSeleccionada');
        $hotelSeleccionado = session('hotelSeleccionado');
        $sitioSeleccionado = session('sitioSeleccionado');

        // Realizar la consulta utilizando el operador LIKE para hoteles
        $hoteles = Hotel::where('category_hotel', 'like', '%' . $hotelSeleccionado . '%')->get();
        Log::debug("busqueda_hotel " . var_export($hoteles, true));

        // Realizar la consulta utilizando el operador LIKE para restaurantes

        $restaurantes = Restaurant::where('category_restaurant', 'like', '%' . $comidaSeleccionada . '%')->get();
        Log::debug("busqueda_restaurante " . var_export( $restaurantes, true));


        // Realizar la consulta utilizando el operador LIKE para sitio turistico

        $sitios = Touristic_place::where('category_touristic_place', 'like', '%' . $sitioSeleccionado . '%')->get();
        Log::debug("busqueda_sitios_turisticos" . var_export( $sitios, true));

        // Log de las variables seleccionadas
        Log::debug("comida " . var_export($comidaSeleccionada, true));
        Log::debug("hotel " . var_export($hotelSeleccionado, true));
        Log::debug("sitio " . var_export($sitioSeleccionado, true));

        // log para variables encontradas hoteles, restaurantes
        Log::debug("Cantidad de hoteles encontrados: " . count($hoteles));
        Log::debug("Cantidad de restaurantes encontrados: " . count($restaurantes));
        Log::debug("Cantidad de restaurantes encontrados: " . count($sitios));

        return view('recomendation.recomendation', compact('hoteles','restaurantes','sitios'));

    }

}
