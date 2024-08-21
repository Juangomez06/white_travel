@extends('templatemenu')

@section('contenidomenu')
    <div class="container-fluid" style="margin: 0px 0;">
        <form action="{{ route('guardar_sitio') }}" id="form-sites" method="POST">
            @csrf

            <div class="container py-5">
                <h1 class="h2" style="color:#020000">Selecciona qué te gustaría visitar, tanto dentro como fuera de la
                    ciudad.
                </h1>
                <br />
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="arqueologico" name="destino"
                                            value="arqueologico">
                                        <label class="form-check-label text-black-50" for="checkbox1"
                                            style="padding-left: 10px;">
                                            Arqueología
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="cultural" name="destino"
                                            value="cultural">
                                        <label class="form-check-label text-black-50" for="checkbox2"
                                            style="padding-left: 5px;">
                                            Cultural
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="patrimonio" name="destino"
                                            value="patrimonio">
                                        <label class="form-check-label text-black-50" for="checkbox3"
                                            style="padding-left: 10px;">
                                            Patrimonio
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="religioso" name="destino"
                                            value="religioso">
                                        <label class="form-check-label text-black-50" for="checkbox4"
                                            style="padding-left: 10px;">
                                            Religión
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="publico" name="destino"
                                            value="publico">
                                        <label class="form-check-label text-black-50" for="checkbox5"
                                            style="padding-left: 10px;">
                                            Publico
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="museo" name="destino"
                                            value="museo">
                                        <label class="form-check-label text-black-50" for="checkbox6"
                                            style="padding-left: 10px;">
                                            Museo
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="historia" name="destino"
                                            value="historia">
                                        <label class="form-check-label text-black-50" for="checkbox6"
                                            style="padding-left: 10px;">
                                            Historia
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="natural" name="destino"
                                            value="natural">
                                        <label class="form-check-label text-black-50" for="checkbox6"
                                            style="padding-left: 10px;">
                                            Parque natural
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="termales" name="destino"
                                            value="termales">
                                        <label class="form-check-label text-black-50" for="checkbox6"
                                            style="padding-left: 10px;">
                                            Termales
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="pueblo" name="destino"
                                            value="pueblo">
                                        <label class="form-check-label text-black-50" for="checkbox6"
                                            style="padding-left: 10px;">
                                            Pueblo
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary"
                        style="border-radius: 4px; margin-left: 2px;">Continuar</button>
                </div>
            </div>

        </form>
    </div>
@endsection
