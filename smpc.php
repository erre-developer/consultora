<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Scrum Master Professional Certificate</title>

</head>

<body>

    <header>
        <?php include 'partials/nav.php'?>
    </header>

    <div class="jumbotron jumbotron-fluid mt-5">
        <div class="container">
            <h1 class="display-4 text-center color-jumbo">Scrum Master Professional Certificate (SMPC)</h1>
        </div>
    </div>

    <!-- section Certifications-->
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 py-3">
                <img class="img-fluid" src="img/certification/cert_smpc.png" alt="Certification smpc">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <h3>Introducción:</h3>
                <p>CertiProf® ofrece el programa Scrum Master Professional Certificate (SMPC) para validar su
                    conocimiento sobre Scrum. Nuestro examen es una prueba en línea de opción múltiple y puede tomarla
                    desde su propia PC desde cualquier lugar del mundo.</p>
                <p>Después de completar el examen del Certificado Scrum Master Professional, puede esperar obtener una
                    visión general y comprensión de la teoría, las prácticas y las reglas de Scrum.</p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <p>Le recomendamos que continúe su formación profesional Scrum con el Certificado de Propietario del
                    Producto (SPOPC), seguido del Certificado de Desarrollador Profesional (SDPC).</p>
                <p>Esto le permitirá cubrir todo el conocimiento del marco de Scrum, definiciones clave y roles. Después
                    de esto, estará listo para embarcarse en un viaje hacia el certificado Scrum Advanced Professional
                    (SAPC).</p>
            </div>

            <div class="col-lg-6">

                <div class="">
                    <h3><strong>Objetivos de Aprendizaje:</strong></h3>
                    <p>1. Introducción a Agile y Scrum<br />
                        2. Prácticas de Scrum<br />
                        3. Planificación de Scrum<br />
                        4. Eventos Scrum<br />
                        5. Monitoreo de proyectos Scrum<br />
                        6. Conceptos básicos de Scrum<br />
                        7. Rol Scrum Master</p>
                    <h3><strong>Público Objetivo:</strong></h3>
                    <p>Esta certificación es adecuada para cualquier persona que esté interesada en convertirse en un
                        Scrum Master.</p>
                    <h3><strong>Pre requisitos:</strong></h3>
                    <p>No hay requisitos formales para esta certificación.</p>
                    <h3><strong>Formación:</strong></h3>
                    <p> Tipo de curso: Fundamentos<br />
                        Código de certificación: SMPC <br />
                        Duración: 16 horas</p>
                    <h3><strong>Examen de Certificación:</strong></h3>
                    <p>Formato: opción múltiple<br />
                        Preguntas: 40<br />
                        Idioma: Inglés / Español / Alemán / Portugués<br />
                        Puntuación del pase: 24/40 o 60%<br />
                        Duración: 60 minutos máximo.<br />
                        Libro abierto: No<br />
                        Entrega: Este examen está disponible en línea o en papel.<br />
                        Supervisado: será a discreción del Socio.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- section footer-->
    <?php include 'partials/footer.php'?>
    <!-- end section footer-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
    $(window).scroll(function() {
        if ($("#menu").offset().top > 100) {
            $("#menu").addClass("bg-prueba");
        } else {
            $("#menu").removeClass("bg-prueba");
            $("#menu").addClass("bg-dark");
        }
    });
    </script>

</body>

</html>