<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Scrum Advance Professional Certificate</title>

</head>

<body>

    <header>
        <?php include 'partials/nav.php'?>
    </header>

    <div class="jumbotron jumbotron-fluid mt-5">
        <div class="container">
            <h1 class="display-4 text-center color-jumbo">Scrum Advance Professional Certificate (SAPC)</h1>
        </div>
    </div>

    <!-- section Certifications-->
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 py-3">
                <img class="img-fluid" src="img/certification/cert_sapc.png" alt="Certification smpc">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <h3>Introducción:</h3>
                <p>CertiProf® ofrece el programa Scrum Advance Professional Certificate (SAPC) para validar su
                    conocimiento sobre Scrum. Nuestro examen es una prueba en línea de opción múltiple y puede tomarla
                    desde su propia PC desde cualquier lugar del mundo.</p>
                <p>Después de completar el examen del Certificado Scrum Master Professional, puede esperar obtener una
                    visión general y comprensión de la teoría, las prácticas y las reglas de Scrum.</p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <p>El Certificado Profesional Avanzado de Scrum (SAPC) está dirigido a aquellos que estén interesados
                    ​​en demostrar el conocimiento de las Prácticas de Scrum en su totalidad.
                </p>
                <p>El certificado se otorga a los candidatos que han logrado una gama de certificaciones Scrum y han
                    logrado una base de conocimientos y habilidades superior y completa en las prácticas de Scrum.</p>
            </div>

            <div class="col-lg-12">

                <div class="">
                    <h3><strong>Objetivos de Aprendizaje:</strong></h3>
                    <p>- Sin objetivos de aprendizaje. Este es solo un examen para validar las prácticas de Scrum en su
                        totalidad.</p>
                    <h3><strong>Público Objetivo:</strong></h3>
                    <p>- Esta certificación es apropiada para cualquier persona que esté interesada en convertirse en un
                        profesional de Scrum Advanced.</p>
                    <h3><strong>Pre requisitos:</strong></h3>
                    <p>Para ser elegible para el Certificado Profesional Avanzado (SAPC) debe cumplir o cumplir con los
                        siguientes requisitos de ingreso: Debe haber completado todas las certificaciones del marco
                        Scrum:</p>
                    <P>Debe haber completado todas las certificaciones del marco Scrum:</P>
                    <P><strong>- Certificado profesional de Scrum Foundations o equivalente</strong></P>
                    <P><strong>- Scrum Master Professional Certificate o equivalente</strong></P>
                    <P><strong>- Certificado profesional de propietario de producto Scrum o equivalente</strong></P>
                    <P><strong>- Scrum Developer Professional Certificate o equivalente</strong></P>

                    <p>Debes haber trabajado profesionalmente bajo el marco de Scrum durante al menos dos años. Tenemos
                        su currículum para certificar este requisito.
                        Un ensayo que explica que tiene experiencia utilizando las prácticas del marco Scrum. Este
                        ensayo debe explicar y justificar cómo utilizó el conocimiento teórico de Scrum para lograr los
                        objetivos de un proyecto del mundo real y qué beneficios aportó a su negocio.</p>
                    <p>Una vez que CertiProf haya validado los puntos 1, 2 y 3, procederemos a liberar su examen.</p>
                    <h3><strong>Formación:</strong></h3>
                    <p> - Tipo de curso: Avanzado<br />
                        - Código de certificación: SAPC <br />
                        - Duración: será a discreción del socio</p>
                    <h3><strong>Examen de Certificación:</strong></h3>
                    <p>- Formato: opción múltiple<br />
                        - Preguntas: 60<br />
                        - Idioma: Inglés / Español<br />
                        - Puntuación del pase: 42/60 o 70%<br />
                        - Duración: 60 minutos máximo.<br />
                        - Libro abierto: No<br />
                        - Entrega: Este examen está disponible en línea o en papel.<br />
                        - Supervisado: será a discreción del Socio.</p>
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