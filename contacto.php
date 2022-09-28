<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
    <?php require 'partials/header.php'; ?>
    <br>
    <div class="container">
        <br>
        <div class="container row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 text-center rounded bg-warning">
                <form id="contactForm" action="email_contacto.php" method="post" class="p-3">
                    <legend>Solicita tu presupuesto</legend>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nombre completo" aria-label="Nombre completo" aria-describedby="basic-addon1" id="nombre" name="nombre" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Empresa" aria-label="Empresa" aria-describedby="basic-addon2" id="empresa" name="empresa" required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Teléfono" placeholder="Teléfono" name="telefono" id="telefono" pattern="[0-9]{10}">
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Correo electrónico" aria-label="Correo electrónico" id="email" name="email" required>
                    </div>

                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea" placeholder="Mensaje" id="mensaje" name="mensaje" required></textarea>
                    </div>
                    <br>
                    <input type="submit" id="submit" value="Contáctanos" class="btn btn-secondary container-fluid">
                </form>
            </div>
        </div>

        <div class="row p-3">
            <section class="text-center col-md-4 offset-md-1">
                <h2 class="display-2 fs-2">Horarios de atención</h2>
                <br>
                <p class="fs-4">
                    Lunes a Viernes de 9:00 a 19:00 <br>
                    Sábados de 9:00 a 13:30
                </p>
            </section>
            <section class="text-center col-12 col-md-6">
                <h2 class="display-2 fs-2">Ubicación</h2>
                <br>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15064.424840443973!2d-99.5610859!3d19.2777469!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x533e83f4b890c619!2sFerreter%C3%ADa%20RCR!5e0!3m2!1ses-419!2smx!4v1650384055507!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </div>
    </div>
    <br>

    <?php require 'partials/footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>