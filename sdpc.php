<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Scrum Developer Professional Certificate</title>

</head>

<body>

    <header>
        <?php include 'partials/nav.php'?>
    </header>

    <div class="jumbotron jumbotron-fluid mt-5">
        <div class="container">
            <h1 class="display-4 text-center color-jumbo">Scrum Developer Professional Certificate (SDPC)</h1>
        </div>
    </div>

    <!-- section Certifications-->
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 py-3">
                <img class="img-fluid" src="img/certification/cert_sdcp.png" alt="Certification sdpc">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <h3>Introducción:</h3>
                <p>CertiProf® ofrece el programa Scrum Developer Professional Certificate (SDPC) para validar su
                    conocimiento sobre Scrum. Nuestro examen es una prueba en línea de opción múltiple y puede tomarla
                    desde su propia PC desde cualquier lugar del mundo.</p>
                <p> Después de completar el examen de Scrum Developer Professional Certificate, puede esperar obtener
                    una visión general y comprensión sobre cómo entregar un producto de Incremento de “Hecho”
                    potencialmente liberable al final de cada Sprint.</p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <p>Recomendamos que continúe su formación profesional Scrum con el Certificado de Propietario del
                    Producto (SPOPC) o el Certificado Profesional de Scrum Master (SMPC).</p>
                <p> Esto le permitirá cubrir todo
                    el conocimiento del marco de Scrum, definiciones clave y roles. Después de esto, estará listo para
                    embarcarse en un viaje hacia el certificado Scrum Advanced Professional (SAPC).</p>
            </div>

            <div class="col-lg-12">

                <div class="">
                    <h3><strong>Objetivos de Aprendizaje:</strong></h3>
                    <p>
                        - Introducción a los principios y
                        conceptos ágiles.<br />
                        - PM ágil<br />
                        - Proyecto tradicional de PM<br />
                        - Enfoques de gestión<br />
                        - Kanban<br />
                        - Manifiesto<br />
                        - Rol de Scrum<br />
                        - Artefactos Scrum<br />
                        - Planificación de Sprint<br />
                        - Planificación de lanzamiento<br />
                        - Administrar grandes o
                        distribuidos<br />
                        - Equipos Scrum<br />
                        - Planificación de lanzamiento<br />
                        - Proyectos Híbridos - Bimodal
                        IT<br />
                        - Gestión de requerimientos<br />
                        - Visión del producto<br />
                        - Descomposición de Epic<br />
                        - Introducción a historias de
                        usuarios<br />
                        - Definiendo Hecho<br />
                        - Criterios de aceptación<br />
                        - Administrar la cartera de
                        productos<br />
                        - Priorización y Técnicas<br />
                        - Planificación avanzada y
                        métricas<br />
                        - Velocidad<br />
                    </p>
                    <h3><strong>Perfil de audiencia:</strong></h3>
                    <p>- Esta certificación es adecuada para cualquier persona que esté interesada en convertirse en un
                        desarrollador de Scrum.</p>
                    <h3><strong>Pre requisitos:</strong></h3>
                    <p>- No hay requisitos previos formales para esta certificación.</p>
                    <h3><strong>Formación:</strong></h3>
                    <p>- Tipo de curso: Fundamentos<br />
                        - 40 preguntas<br />
                        - Código de Certificación SDPC<br />
                        - Duración: 16 horas.</p>
                    <h3><strong>Examen de Certificación:</strong></h3>
                    <p>- Formato: opción múltiple<br />
                        - Preguntas: 40<br />
                        - Idioma: Inglés / Español<br />
                        - Puntuación del pase: 24/40 o 60%<br />
                        - Duración: 60 minutos máximo.<br />
                        - Libro abierto: No<br />
                        - Entrega: Este examen está disponible en línea o en papel.<br />
                        - Supervisado: será a discreción del Socio
                    </p>
                    <p><span style="color: #ffffff;">Scrum Developer Professional Certificate</span></p>

                </div>
            </div>


        </div>


    </div>
    <!-- end section Contact-->

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