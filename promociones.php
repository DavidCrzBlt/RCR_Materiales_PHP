<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
    <?php require 'partials/header.php'; ?>
    <br>
    <div class="container">
        <h1>Promociones del mes de agosto</h1>
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">PROMO TRUPER AGOSTO <span class="text-muted">¡Te va a encantar!</span></h2>
                <a type="button" class="btn btn-warning btn-lg fw-bold" href="documents/PromoTruperAgosto.pdf" target="_blank" rel="noopener noreferrer">Descarga el PROMOTRUPER</a>
            </div>
            <div class="col-md-5 promoimagenes">
                <img src="images_promociones/PromoTruper.jpg" alt="PromoTruper Mensual">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Ofertas de verano</h2>
                <p class="lead">Este mes tenemos descuentos en productos de plomería y de limpieza</p>
                <a type="button" class="btn btn-warning btn-lg fw-bold" href="documents/Promociones verano.pdf" target="_blank" rel="noopener noreferrer">Consulta nuestras ofertas</a>
            </div>
            <div class="col-md-5 promoimagenes">
                <img src="images_promociones/PromoRCR.png" alt="PromoRCR Mensual">
            </div>
        </div>
    </div>
    <br>

    <?php require 'partials/footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>