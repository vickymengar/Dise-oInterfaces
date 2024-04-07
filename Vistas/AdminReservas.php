<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Arca - Administración de Reservas</title>
    <link rel="icon" type="image/png" href="../img/Logo.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <!-- Estilos css -->
    <link href="../css/index.css" rel="stylesheet">
</head>

<body>
    <!-- Inicio de la barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-white"><img src="../img/Logo.png"> El Arca</h1>
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="../carta/Menu.pdf" class="nav-item nav-link">Menú</a>
                <a href="./Contacto.php" class="nav-item nav-link">Administrar Reservas</a>
            </div>
            <a href="./Reservas.php" class="btn btn-iniciosesion py-2 px-4">Cerrar sesión</a>
        </div>
    </nav>

    <div class="container-fluid py-5 bg-color hero-header mb-3">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Administración de Reservas</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la barra de navegación -->

    <!-- Inicio de Reservacion -->
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-12 d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <!-- Tabla para mostrar las reservaciones existentes -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Correo Electrónico</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Número de Personas</th>
                                <th>Zona</th>
                                <th>Mesa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Aquí se deben cargar dinámicamente las reservaciones existentes -->
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <!-- Se pueden agregar más filas según las reservaciones existentes -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin de Reservacion-->


    <!-- Inicio de Pie de página -->
    <div class="container-fluid bg-color text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p href="#">&copy; El Arca, todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Inicio de Pie de página -->

    <!-- Volver a arriba -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- Template Javascript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>