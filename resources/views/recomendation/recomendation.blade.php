@extends('templatemenu')

@section('contenidomenu')
    <!--  Start -->
    <div class="container py-5">
        <h1 class="h2" style="color:#020000">Hola, te puedes hospedar en alguno de estos hoteles.</h1>
        <br />

        <style>
            .img-fluid {
                width: 100%;
                height: 300px;
            }
        </style>


        <div class="container text-center">
            <div class="row">
                @foreach ($hoteles as $hotel)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2" style="border-radius: 10px;">
                            <img class="img-fluid" style="border-radius: 10px;" src="{{ $hotel->link_img }}" alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0">
                                        <a href="{{ $hotel->link_maps }}" class="fa fa-map-marker-alt text-primary mr-2">
                                        </a>
                                        <a href="{{ $hotel->link_maps }}" class="text-dark">{{ $hotel->address_hotel }}
                                        </a>
                                    </small>
                                    <span class="mx-1">|</span>

                                    <small class="m-0">
                                        <a href="{{ $hotel->link_reserva }}" class="m-0 d-inline-block">
                                            <i class="fab fa-whatsapp text-primary mr-1 align-middle"
                                                style="font-size: 1.4em;"></i>
                                            <span class="text-dark align-middle">Reservar ahora</span>
                                        </a>
                                    </small>
                                </div>
                                <a class="h5 text-decoration-none" href="{{ $hotel->link_reserva }}">
                                    {{ $hotel->name_hotel }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <h1 class="h2" style="color:#020000">Te recomiendo estos centros gastronomicos.</h1>
            <br /><br /><br />

            <div class="row">
                @foreach ($restaurantes as $restaurante)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2" style="border-radius: 10px;">
                            <img class="img-fluid" style="border-radius: 10px;" src="{{ $restaurante->link_img }}" alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0">
                                        <a href="{{ $restaurante->link_maps }}"
                                            class="fa fa-map-marker-alt text-primary mr-2">
                                        </a>
                                        <a href="{{ $restaurante->link_maps }}" class="text-dark">Dirección
                                        </a>
                                    </small>
                                    <span class="mx-1">|</span>

                                    <small class="m-0">
                                        <a href="{{ $restaurante->link_reserva }}" class="m-0 d-inline-block">
                                            <i class="fab fa-whatsapp text-primary mr-1 align-middle"
                                                style="font-size: 1.4em;"></i>
                                            <span class="text-dark align-middle">Reservar ahora</span>
                                        </a>
                                    </small>
                                </div>
                                <a class="h5 text-decoration-none" href="{{ $restaurante->link_reserva }}">
                                    {{ $restaurante->name_restaurant }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <h1 class="h2" style="color:#020000">Puedes visitar estos sitios turisticos. asd</h1>
            <br /><br /><br />

            <div class="row">
                @foreach ($sitios as $sitio)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2" style="border-radius: 10px;">
                            <img class="img-fluid" style="border-radius: 10px;" src="{{ $sitio->link_img }}" alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0">
                                        <a href="{{ $sitio->link_maps }}" class="fa fa-map-marker-alt text-primary mr-2">
                                        </a>
                                        <a href="{{ $sitio->link_maps }}" class="text-dark">Dirección
                                        </a>
                                    </small>
                                    <span class="mx-1">|</span>

                                    <small class="m-0">
                                        <a href="{{ $sitio->link_maps }}" class="m-0 d-inline-block">
                                            <span
                                                class="text-dark align-middle">{{ $sitio->address_touristic_place }}</span>
                                        </a>
                                    </small>
                                </div>
                                <a class="h5 text-decoration-none" href="{{ $sitio->link_maps }}">
                                    {{ $sitio->name_touristic_place }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
