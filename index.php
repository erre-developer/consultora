<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Consultoria PMO</title>

    <style type="text/css">

    #box1 {
        height: 100vh;
        width: 100%;
        background-image: url('img/fondo1.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    section {
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
    }

    .parallax {
        background: #fff fixed 50% 50%;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
    }

    #section1 {
        background-image: url(img/parallax1.svg);
    }

    #section2 {
        background-image: url(img/parallax2.svg);
    }
    </style>
</head>

<body>



    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            <?php include 'partials/nav.php'?>
        </header>

        <!-- section main-->
        <main>

            <div id="box1">


            </div>

            <div class="idsection" id="nosotros"></div>

            <!-- section Contact-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">

                        <h1 class="display-4 miestilo text-primary ">Quienes Somos</h1>

                        <p class="text-justify">Nuestra misión es aportar valor en el desarrollo de las empresas , de
                            cualquier tamaño, mediante el uso de las tecnologías de la información en todos los procesos
                            productivos. Contribuyendo a la generación de riquezas de la empresa y al crecimiento de sus
                            colaboradores y el país.</p>
                        <p class="text-justify">Esta página es un canal de comunicación con todos aquellos interesados
                            en conocer los servicios que ofrecemos en la gestión Integral de Proyectos, la capacitación,
                            Entrenamiento y Gestión de Procesos También un canal de información de temas y noticias
                            relevantes relacionados con la gestión de proyectos. Por último un espacio para el
                            intercambio de ideas y/o debates en torno a las TIC.</p>


                        <a class="btn btn-lg btn-block btn-p my-4" href="#contacto">Contactanos</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <img class="img-fluid my-4" src="img/home1.svg" alt="Home ">
                    </div>
                </div>
            </div>
            <!-- end section Contact-->



            <!-- section Services-->
            <div class="idsection" id="servicio"></div>

            <div class="container">
                <div class="d-flex flex-wrap flex-row-reverse">
                    <div class="col-12 text-center">
                        <h1 class="display-4 miestilo text-primary pb-4">Servicios</h1>
                    </div>
                    <div class="card-deck">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card my-2">
                                <div class="container card-body">
                                    <img class="card-img-top" src="/img/home2.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card my-2">
                                <div class="container card-body">
                                    <img class="card-img-top" src="/img/gestion.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card my-2">
                                <div class="container card-body">
                                    <img class="card-img-top" src="/img/gestion.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card my-2">
                                <div class="container card-body">
                                    <img class="card-img-top" src="/img/plan.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end section Services-->



            <!-- section Certifications-->
            <div class="idsection" id="certifications"></div>

            <div class="container">
                <div class="col-12 text-center">
                    <h1 class="display-4 miestilo text-primary pb-4">Certificaciones</h1>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 py-4">
                        <div class="card">
                            <img class="card-img-top" src="img/certification/sdpc.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Scrum Developer Professional Certificate (SDPC)</h5>
                                <p class="card-text text-justify">Esta certificación le permitirá cubrir todo el
                                    conocimiento del marco de Scrum, definiciones clave y roles. Después de esto, estará
                                    listo para embarcarse en un viaje hacia el certificado Scrum Advanced Professional
                                    (SAPC)</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-p btn-block">Ver Información</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 py-4">
                        <div class="card">
                            <img class="card-img-top" src="img/certification/smpc.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Scrum Master Professional Certificate (SMPC)</h5>
                                <p class="card-text text-justify">Después de completar el examen del Certificado Scrum
                                    Master Professional, puede esperar obtener una visión general y comprensión de la
                                    teoría, las prácticas y las reglas de Scrum.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-p btn-block">Ver Información</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 py-4">
                        <div class="card">
                            <img class="card-img-top" src="img/certification/smfc.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Scrum Foundation Professional Certificate (SFPC)</h5>
                                <p class="card-text text-justify">Esto le permitirá cubrir todo el conocimiento del
                                    marco de Scrum, definiciones clave y roles. Después de esto, estará listo para
                                    embarcarse en un viaje hacia el certificado Scrum Advanced Professional (SAPC).</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-p btn-block">Ver Información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end section Certifications-->

            <!-- section Contact-->
            <div class="idsection" id="contacto"></div>

            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-4 miestilo text-primary pb-4">Contacto</h1>
                    </div>
                        
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <form class="bg-light py-2 px-3" method="POST" action="">


                            <div class="form-group">
                                <h6 class="color-primary" for="name">Nombre</h6>
                                <input class="form-control bg-light shadow-sm" type="text" id="name" name="name"
                                    placeholder="Ingrese su nombre..." required="">
                            </div>

                            <div class="form-group">
                                <h6 class="color-primary" for="email">Email</h6>
                                <input class="form-control bg-light shadow-sm " type="email" id="email" name="email"
                                    placeholder="Ingrese su email..." required="">
                            </div>

                            <div class="form-group">
                                <h6 class="color-primary" for="subject">asunto</h6>
                                <input class="form-control bg-light shadow-sm" type="text" id="subject" name="subject"
                                    placeholder="Ingrese el asunto..." required="">
                            </div>

                            <div class="form-group">
                                <h6 class="color-primary" for="content">Contenido</h6>
                                <textarea class="form-control bg-light shadow-sm" rows="5" name="content"
                                    placeholder="Ingrese su mensaje ...." minlength="10" required=""></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-p btn-lg btn-block">Enviar</button>
                        </form>
                    </div><!-- end div col contact-->

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="container py-3">
                            <div class="row">
                                <div id="map" class="col-12">
                                    <h1>mapa</h1>
                                </div>

                                <div class="col-12">

                                    <h6 class="text-success">Avenida Providencia, 727 - Providencia, Santiago - Chile
                                    </h6>
                                    <h6 class="text-success">Llamar 09 6120 4054</h6>
                                    <h6 class="text-success">contacto@consultoriapmo.com</h6>

                                </div>
                            </div>
                        </div>
                    </div><!-- end div col ubication-->

                </div><!-- end div roww-->
            </div><!-- end div container-->
            <!-- end section Contact-->

        </main>
        <!-- end main-->

        <section class="parallax" id="section1">
        </section>

        <!-- section footer-->
        <footer class="bg-dark text-light shadow py-4 mt-4">
            <div class="container-fluid  pb-3">
                <div class="row align-items-center">
                    <div class="text-center col-12 col-sm-6 col-md-6">
                        <a target="_blank" href="https://www.facebook.com/consultoriapmo">
                            <img src="img/facebook.svg" alt="Facebook" width="40" height="40">
                        </a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCBmxQfuE8ddZAJBGC5_97lQ">
                            <img src="img/youtube.svg" alt="Youtube" width="40" height="40">
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/school/consultoria-pmo">
                            <img src="img/linkedin.svg" alt="Linkedin" width="40" height="40">
                        </a>
                    </div>
                    <div
                        class="text-center miestilofooter col-12 col-sm-6 col-md-6 d-flex flex-column align-items-end ">
                        <a class="text-success" href="index.php#nosotros">Nosotros</a>
                        <a class="text-success" href="index.php#contacto">Contacto</a>
                        <a class="text-success" href="index.php#servicio">Servicio</a>
                        <a class="text-success" href="index.php#contacto">Ubicacion</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center col-12 col-sm-6 col-md-6">
                        <h6>Consultoria <span class="text-primary">PMO</span> | Copyright © 2020</h6>
                    </div>
                    <div class="text-center col-12 col-sm-6 col-md-6">
                        <h6 class="text-success">Desing By <a class="text-success"
                                href="https://www.erredeveloper.cl">erre-developer</a></h6>
                    </div>
                    <div class="text-center col-12 col-sm-6 col-md-6">
                        Iconos diseñados por <a href="https://www.flaticon.es/autores/freepik"
                            title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">
                            www.flaticon.es</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end section footer-->

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(-33.43289856048422, -70.62547230000001),
            zoom: 15,
        };
        var map = new google.maps.Map(document.getElementById("map"), mapProp);
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script>

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