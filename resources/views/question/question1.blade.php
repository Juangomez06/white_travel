@extends('templatemenu')

@section('contenidomenu')
    <!--  Start -->
    <div class="container py-5">

        <h1 class="h2" style="color:#020000">Hola, selecciona el tipo de comida que te gusta.</h1>
        <br />
        <p style="color:#454545"> Esto nos ayudará a recomendarte lo que más te gusta</p>

        <form action="{{ route('guardar_comida') }}" id="form_food" method="POST">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-radio">
                                    <input class="form-radio-input" type="radio" id="restaurante" name="comida" value="restaurante">
                                    <label class="form-radio-label text-black-50" for="radio1">
                                        Restaurante
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-radio">
                                    <input class="form-radio-input" type="radio" id="cafe" name="comida" value="cafe">
                                    <label class="form-radio-label text-black-50" for="radio2">
                                        Café
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-radio">
                                    <input class="form-radio-input" type="radio" id="batidos" name="comida" value="batidos">
                                    <label class="form-radio-label text-black-50" for="radio3">
                                        Batidos
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-radio">
                                    <input class="form-radio-input" type="radio" id="latina" name="comida" value="latina">
                                    <label class="form-radio-label text-black-50" for="radio4">
                                        Comida típica
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-radio">
                                    <input class="form-radio-input" type="radio" id="Bar" name="comida" value="Bar">
                                    <label class="form-radio-label text-black-50" for="radio5">
                                        Bar
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-radio">
                                    <input class="form-radio-input" type="radio" id="granizados" name="comida" value="granizados">
                                    <label class="form-radio-label text-black-50" for="radio6">
                                        Granizados
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-radio">
                                    <input class="form-radio-input" type="radio" id="comidas_rapidas" name="comida" value="comidas_rapidas">
                                    <label class="form-radio-label text-black-50" for="radio7">
                                        Comidas rápidas
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                {{-- <a class="btn btn-primary me-md-2" href="{{ route('login.login') }}" style="border-radius: 4px;">Volver</a> --}}
                <button type="submit" class="btn btn-primary" style="border-radius: 4px; margin-left: 2px;">Continuar</button>
            </div>
        </form>



    @endsection
