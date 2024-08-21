@extends('templatemenu')

@section('titulo')

@section('contenidomenu')

    <!-- Lugares Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3" style="margin-top: -4%">
            <div class="text-center mb-3 pb-3">
                <h3 class="text-black-50" style="letter-spacing: 3px;">Explora los mejores lugares de Popayán
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid"
                            src="https://popayan.travel/wp-content/uploads/2022/09/Turismo-en-Popayan-11.jpg" alt=""
                            style="width: 350px; height: 218px;">
                        <a class="destination-overlay text-white text-decoration-none" href="https://es.wikipedia.org/wiki/Parque_Caldas">
                            <h5 class="text-white">Parque Cáldas</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://i.pinimg.com/736x/05/38/96/053896aa02a386e3c69d402f2a135806.jpg"
                            alt="" style="width: 350px; height: 218px;">
                        <a class="destination-overlay text-white text-decoration-none" href="https://www.parquesnacionales.gov.co/nuestros-parques/pnn-purace/">
                            <h5 class="text-white">Parque Natural Puracé</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid"
                            src=" https://cdnx.jumpseller.com/blesscard/image/19258299/WhatsApp_Image_2021-09-23_at_11.27.51_PM.jpeg.jpeg?1632457809"
                            alt="" style="width: 350px; height: 218px;">
                        <a class="destination-overlay text-white text-decoration-none" href="http://simco.museoscolombianos.gov.co/Home/Museo?personaJuridicaId=456">
                            <h5 class="text-white">Museo Nacional Guillermo León Valencia</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid"
                            src="https://www.proclamadelcauca.com/wp-content/uploads/2020/09/El-Morro-de-Tulcan-en-Popayan-es-Patrimonio-Arqueologico-de-la-Nacion.jpg"
                            alt="" style="width: 350px; height: 218px;">
                        <a class="destination-overlay text-white text-decoration-none" href="https://es.wikipedia.org/wiki/Morro_del_Tulc%C3%A1n">
                            <h5 class="text-white">Pirámide Morro del Tulcán</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid"
                            src="https://d14j9vfj10qgpp.cloudfront.net/media/4ca4c4b2-8845-44fe-823f-45b3b2f5827d.jpg"
                            alt="" style="width: 350px; height: 218px;">
                        <a class="destination-overlay text-white text-decoration-none" href="https://es.wikipedia.org/wiki/Santuario_de_Bel%C3%A9n_(Popay%C3%A1n)">
                            <h5 class="text-white" style="text-align: center">Santuario de belén </h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid"
                            src="https://d14j9vfj10qgpp.cloudfront.net/media/52d1f8a4-f7b0-43a7-a5aa-0386738cc9d4.jpg"
                            alt="" style="width: 350px; height: 218px;">
                        <a class="destination-overlay text-white text-decoration-none" href="https://colombia.travel/es/popayan/rincon-payanes">
                            <h5 class="text-white">Pueblito Patojo</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100"
                            src="https://i.pinimg.com/originals/f0/e4/ab/f0e4abce10532cb8fd7943db5ff2bd40.jpg"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h3 class="text-primary text-uppercase" style="letter-spacing: 5px;">Parque Caldas</h3>
                        <p class="text-muted">Ubicado en el Centro Histórico de la Ciudad, lugar donde convergen todos
                            los edificios principales y representativos de la ciudad. En este lugar fueron ejecutados
                            algunos patriotas durante el Régimen del terror de Pablo Morillo a excepción de Agustín
                            Agualongo quien murió bajo las órdenes de Simón Bolívar:</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="https://live.staticflickr.com/4358/35967135633_3d7cd5464a_b.jpg"
                                    alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="https://live.staticflickr.com/4039/4183363613_5256bde046_b.jpg"
                                    alt="">
                            </div>
                        </div>
                        <a href="https://es.wikipedia.org/wiki/Parque_Caldas" class="btn btn-primary mt-1">Conoce más</a>
                    </div>
                </div>
            </div>
            <div class="about-text bg-white p-4 p-lg-5 my-lg-5 text-center">
                <h3 class="text-primary text-uppercase" style="letter-spacing: 5px;">Parque Natural Puracé</h3>
                <p class="text-muted">Declarado por la UNESCO como Reserva de la Biosfera en 1979, el Parque Nacional
                    Natural Puracé es una zona volcánica y lo refleja tanto en sus numerosas fuentes azufradas como en su
                    nombre, que en lengua quechua significa “montaña de fuego”. Allí nacen los principales ríos de Colombia:
                    Magdalena, Cauca, Patía y Caquetá</p>
                <div class="row mb-4">
                    <div class="col-6">
                        <img class="img-fluid" src="https://viajandox.com.co/uploads/attractive_371.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid"
                            src="https://old.parquesnacionales.gov.co/portal/wp-content/uploads/2013/07/Purace_-_Camino_de_azufre_1_-_Foto__Pedro_Prado_z.jpg"
                            alt="">
                    </div>
                </div>
                <a href="https://www.parquesnacionales.gov.co/nuestros-parques/pnn-purace/"
                    class="btn btn-primary mt-1">Conoce más</a>
            </div>
        </div>
    </div>

    <!-- About End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5 bg-light " style="padding-top: -7%">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3 text-muted">
                <h1>Más lugares</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100"
                                src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/c2/6c/ac/alrededores.jpg?w=1200&h=-1&s=1" alt="">
                        </div>
                        <div class="bg-white p-4">
                            <a class="h5 m-0 text-decoration-none"
                                href="http://simco.museoscolombianos.gov.co/Home/Museo?personaJuridicaId=456">Museo
                                Nacional Guillermo León
                                Valencia</a>
                            <div class="d-flex mb-2">
                                <div class="d-flex mb-2">
                                    <p class="text-muted text-decoration-none" href=""
                                        style="text-align: justify;">El museo cuenta con una
                                        colección de fotos de su vida personal y política, objetos como el pasaporte,
                                        cédula, entre otros; insignias y condecoraciones del Dr. Valencia, dispuestas en
                                        cuatro salas de exhibición. Fue catalogado como museo desde 1972.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-80" style="max-height: 90%; max-width: 100%"
                                src="https://www.proclamadelcauca.com/wp-content/uploads/2020/09/El-Morro-de-Tulcan-en-Popayan-es-Patrimonio-Arqueologico-de-la-Nacion.jpg"
                                alt="">
                        </div>
                        <div class="bg-white p-4">
                            <a class="h5 m-0 text-decoration-none"
                                href="https://es.wikipedia.org/wiki/Morro_del_Tulc%C3%A1n">El Morro - Tulcán</a>
                            <div class="d-flex mb-2">
                                <div class="d-flex mb-2">
                                    <p class="text-muted text-decoration-none" style="text-align: justify;"
                                        href="">Principal sitio arqueológico de Popayán. Este consiste en una
                                        pequeña loma no natural en forma de pirámide truncada, en la cual se encontraron
                                        elementos de la época precolombina, aproximadamente entre los años 500 - 1600 a. C
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" style="max-height: 90%; max-width: 100%"
                                src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Iglesia_belen.jpg"
                                alt="">
                        </div>
                        <div class="bg-white p-4">
                            <a class="h5 m-0 text-decoration-none"
                                href="https://es.wikipedia.org/wiki/Santuario_de_Bel%C3%A9n_(Popay%C3%A1n)">Santuario de
                                Belén</a>
                            <div class="d-flex mb-2">
                                <div class="d-flex mb-2">
                                    <p class="text-muted text-decoration-none" href=""
                                        style="text-align: justify;">Fue construida en 1681 y
                                        hasta ella se sube por un camino de escaleras empedradas a lo largo del cual se
                                        levantan esculturas alusivas a las estaciones de la pasión de Cristo. Este santuario
                                        está dedicado al Santo Ecce Homo y alberga detalles de la sillería colonial típica
                                        española.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    <div class="container-fluid py-5" style="margin-top: -5%">
        <div class="container pt-5">
            <div class="about-text bg-white p-4 p-lg-5 my-lg-5 text-center">
                <h3 class="text-primary text-uppercase" style="letter-spacing: 5px;">Pueblito Patojo</h3>
                <p class="text-muted" style="text-align: justify;">Una réplica en miniatura de Popayán. Eso es el Rincón
                    Payanés, también llamado
                    Pueblito Patojo, que cuenta con copias pequeñas de los monumentos más representativos de la capital del
                    Cauca, entre los que figuran el Puente del Humilladero, la Torre del Reloj, la Capilla de La Ermita y el
                    Puente Chiquito. Allí se prueban platos típicos de la región y se pueden comprar artesanías y libros.
                </p>
                <div class="row mb-4">
                    <div class="col-6">
                        <img class="img-fluid" src="https://locationcolombia.com/wp-content/uploads/2022/04/3001512.jpg"
                            alt="">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid"
                            src="https://www.civitatis.com/f/colombia/popayan/tour-privado-popayan-589x392.jpg"
                            alt="">
                    </div>
                </div>
                <a href="https://colombia.travel/es/popayan/rincon-payanes" class="btn btn-primary mt-1">Conoce más</a>
            </div>
        </div>
    </div>

    <!-- Packages End -->

@endsection
