@extends('templatemenu')

@section('contenidomenu')
    <!--  Start -->
    <div class="container-fluid" style="margin: 0px 0;">
        <form action="{{ route('guardar_hotel') }}" id="form-hotel" method="POST">
            @csrf
            <div class="container py-5">
                <h1 class="h2" style="color:#020000">¿Donde te prefieres hospedarte?</h1>
                <br />
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="ecohotel" name="hotel"
                                            value="ecohotel">
                                        <label class="form-check-label text-black-50" for="checkbox3"
                                            style="padding-left: 10px;">
                                            Eco hotel
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="afuera de la ciudad" name="hotel"
                                            value="afuera de la ciudad">
                                        <label class="form-check-label text-black-50" for="checkbox3"
                                            style="padding-left: 10px;">
                                            Afuera de la ciudad
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="centro de la ciudad" name="hotel"
                                            value="centro de la ciudad">
                                        <label class="form-check-label text-black-50" for="checkbox3"
                                            style="padding-left: 10px;">
                                            Centro de la ciudad
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="urbano" name="hotel"
                                            value="urbano">
                                        <label class="form-check-label text-black-50" for="checkbox3"
                                            style="padding-left: 10px;">
                                            Urbano
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="natural" name="hotel"
                                            value="natural">
                                        <label class="form-check-label text-black-50" for="checkbox3"
                                            style="padding-left: 10px;">
                                            Natural
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary" style="border-radius: 4px; margin-left: 2px;">Continuar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
