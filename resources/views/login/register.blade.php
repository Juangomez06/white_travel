<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>White Travel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap 5 JavaScript and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 0px 0;">
        <div class="container py-5" style="margin-top: 5%">
            <p class="h1 text-center text-white">Regístrate en White Travel</p>
            <div class="col-md-auto" style="background-color: #8d8d8d3f; padding:30px;">
                <div class="card bg-transparent">
                    <div class="card-body rounded-bottom bg-white p-5 bg-transparent text-center">
                        <form method="POST" action="{{ route('register_post') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01" lang="es">Nombre completo</label>
                                    <input type="text" class="form-control" id="validationDefault01" name="name"
                                        placeholder="Nombre completo" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault02" lang="es">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" id="validationDefault02" name="birthday"
                                        placeholder="dd/mm/aa" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault03" lang="es">Email</label>
                                    <input type="email" class="form-control" id="validationDefault03" name="email"
                                        placeholder="Email" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault04" lang="es">Contraseña</label>
                                    <input type="password" class="form-control" id="validationDefault04" name="password"
                                        placeholder="Contraseña" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault05" lang="es">Teléfono móvil</label>
                                    <input type="text" class="form-control" id="validationDefault05" name="phone"
                                        placeholder="Teléfono"
                                        onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                                </div>
                            </div>
                            <a class="btn btn-primary" href="{{ route('login.login') }}">
                                Volver
                            </a>
                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#registroExitosoModal">
                                Registrarme
                            </button>
                        </form>


                    </div>
                </div>
            </div>
            <!-- footer -->
            <footer class="text-center text-white mt-5">
                <p>White Travel© 2024 </p>
                <nav>
                    <a href="#">Términos de uso</a>
                    <a href="#">Privacidad</a>
                    <a href="#">Política de cookies</a>
                    <a href="#">Centro de ayuda</a>
                </nav>
            </footer>
        </div>


    </div>

</body>

</html>
