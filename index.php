<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
    <?php require 'partials/header.php'; ?>
    <br>
    <div class="container">
        <div class="card text-center bg-transparent border-secondary text-dark">
            <img class="opacity-50 rounded" src="images/banner2.jpeg" alt="fondo">
            <div class="card-img-overlay d-flex align-items-center">
                <div>
                    <h1 class="card-title fs-2 text-uppercase text-dark">Materiales para proyectos exitosos</h5>
                        <h2 class="card-text fs-4 text-dark">Somos una empresa dedicada a la comercialización de productos del
                            sector industrial y de construcción.</h2>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col m-1 bg-warning rounded pt-4">
                    <h3 class="text-center">Seguridad industrial</h3>
                    <span class="fas fa-headphones fa-6x w-100 text-center pt-3"></span>
                    <ul class="m-5">
                        <li>Cascos y accesorios</li>
                        <li>Lentes de seguridad</li>
                        <li>Cubrebocas y respiradores</li>
                        <li>Protección para manos</li>
                        <li>Protección para soldar</li>
                        <li>Kits anticaídas</li>
                        <li>Señalamientos de seguridad</li>
                    </ul>
                </div>
                <div class="col m-1 bg-warning rounded pt-4">
                    <h3 class="text-center">Herramientas generales</h3>
                    <span class="fas fa-wrench fa-6x w-100 text-center pt-3"></span>
                    <ul class="m-5">
                        <li>Albañilería y carpintería</li>
                        <li>Jardinería</li>
                        <li>Electricidad</li>
                        <li>Herrería</li>
                        <li>Plomería</li>
                        <li>Mecánica</li>
                        <li>Pintura y acabados</li>
                    </ul>
                </div>
                <div class="col m-1 bg-warning rounded pt-4">
                    <h3 class="text-center">Máquinas eléctricas</h3>
                    <span class="fas fa-bolt fa-6x w-100 text-center pt-3"></span>
                    <ul class="m-5">
                        <li>Compresores</li>
                        <li>Bombas eléctricas</li>
                        <li>Esmeriladoras</li>
                        <li>Sierras circulares</li>
                        <li>Máquinas de soldar</li>
                        <li>Taladros</li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <section>
            <h2 class="text-center">Marcas</h2>
            <br>
            <div class="container">
                <div class="row row-cols-auto justify-content-md-center">
                    <div class="col m-auto mt-4">
                        <img class="marcas" src="images/fiero logo.png" alt="Fiero">
                    </div>
                    <div class="col m-auto mt-4">
                        <img class="marcas" src="images/Truper expert.png" alt="Truper expert">
                    </div>
                    <div class="col m-auto mt-4">
                        <img class="marcas" src="images/Truper.png" alt="Truper">
                    </div>
                    <div class="col m-auto mt-4">
                        <img class="marcas" src="images/foset logo.png" alt="Foset">
                    </div>
                    <div class="col m-auto mt-4">
                        <img class="marcas" src="images/Logo-Pretul.jpg" alt="Pretul">
                    </div>
                    <div class="col m-auto mt-4">
                        <img class="marcas" src="images/Klintec logo.png" alt="Klintec">
                    </div>
                    <div class="col m-auto mt-4">
                        <img class="marcas" src="images/Linde group.jpg" alt="The Linde group">
                    </div>
                    <div class="col m-auto mt-4">
                        <img class="marcas" src="images/infra-logo.png" alt="Infra">
                    </div>
                    <div class="col m-auto mt-4">
                        <img class="marcas" src="images/MSA.png" alt="MSA">
                    </div>
                    <div class="col m-auto mt-4">
                        <img class="marcas" src="images/normagrup_logo.png" alt="Normagrup">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <br>

    <?php require 'partials/footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6c35e6223b.js" crossorigin="anonymous"></script>

</body>

</html>