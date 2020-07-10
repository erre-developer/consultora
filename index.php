<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Consultoria PMO</title>

    <style>
    #box1 {
        height: 100vh;
        background-image: url('img/fondo.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .parallax {
        /* background-image: url("img/parallax2.png");*/
        min-height: 450px;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    #section1 {
        background-image: url('img/parallax.png');
        width: 100%;
    }

    #section2 {
        background-image: url('img/parallax2.jpg');
        width: 100%;
    }
    
    </style>
</head>

<body>

    <header>
        <?php include 'partials/nav.php'?>
    </header>

    <div id="box1"></div>

    <div class="idsection" id="nosotros"></div>

    <!-- section Contact-->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">

                <h1 class="display-4 miestilo color-primary ">Quienes Somos</h1>

                <p class="text-justify">Nuestra misión es aportar valor en el desarrollo de las empresas , de
                    cualquier tamaño, mediante el uso de las tecnologías de la información en todos los procesos
                    productivos. Contribuyendo a la generación de riquezas de la empresa y al crecimiento de sus
                    colaboradores y el país.</p>
                <p class="text-justify">Esta página es un canal de comunicación con todos aquellos interesados
                    en conocer los servicios que ofrecemos en la gestión Integral de Proyectos, la capacitación,
                    Entrenamiento y Gestión de Procesos También un canal de información de temas y noticias
                    relevantes relacionados con la gestión de proyectos. Por último un espacio para el
                    intercambio de ideas y/o debates en torno a las TIC.</p>


                <a class="btn btn-lg btn-block btn-p my-4" href="#contacto">Contáctanos</a>
            </div>
            <div class="col-lg-6 col-md-12">
                <img class="img-fluid my-4" src="img/home1.svg" alt="Home ">
            </div>
            <div class="col-lg-12 col-md-12 partner my-5">
                <h1 class="display-4 miestilo color-primary">Consultoria PMO</h1>
                <p>Somor partner asociados de CertiProf. Ello ofrece una amplia gama esencial de certificados
                    profesionales para particulares y empresas. Su instituto es uno de
                    los proveedores líderes que no solo tiene como objetivo participar en el mercado local de los EE.
                    UU., Sino también expandirse a otras regiones de América Latina. </p>
                <center>
                    <img class="responsive-img" src="img/certification/CP-Partner.png" alt="Partener">
                </center>
            </div>
        </div>
    </div>
    <!-- end section Contact-->

    <!-- secction Parallax-->
    <div class="parallax" id="section2"></div>

    <!-- section Services-->
    <div class="idsection" id="servicio"></div>

    <div class="container mb-5">
        <div class="d-flex flex-wrap">
            <div class="col-12 text-center">
                <h1 class="display-4 miestilo color-primary pb-4">Servicios</h1>
            </div>
            <div class="card-deck">


                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card my-2">
                        <div class="container card-body">
                            <img class="card-img-top img-card" src="img/home2.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title color-primary">Gestión de Proyecto</h5>
                                <p class="card-text">Prestamos apoyo en la Gestión de Proyectos según Metodología PMBoK.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card my-2">
                        <div class="container card-body">
                            <img class="card-img-top img-card" src="img/home6.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title color-primary">Capacitaciones</h5>
                                <p class="card-text">Área de Capacitación orientada a desarrollar Talleres
                                    con certificaciones internacionales en diferentes Metodologías o Marcos de Trabajo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card my-2">
                        <div class="container card-body">
                            <img class="card-img-top img-card" src="img/home4.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title color-primary">Estrategia de Sourcing</h5>
                                <p class="card-text">Ayudamos a las organizaciones a definir el catalogo de servicios TI
                                    y a definir cuales externalizar.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card my-2">
                        <div class="container card-body">
                            <img class="card-img-top img-card" src="img/home5.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title color-primary">Licitaciones de servicios TI</h5>
                                <p class="card-text">Necesitan evaluar sus actuales Servicios TI o su renovación.
                                    Participamos en los proceso de RFI, RFP, Negociación y transición.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="card my-2">
                        <div class="container card-body">
                            <img class="card-img-top img-card" src="img/home7.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title color-primary">Plan estratégico TI</h5>
                                <p class="card-text">Acompañamos a tu organización en definir el plan estratégico TI y
                                    un Road Map para su implementación .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section Services-->

    <!-- secction Parallax-->
    <div class="parallax" id="section1"></div>


    <!-- section Certifications-->
    <div class="idsection" id="certifications"></div>

    <div class="container">
        <div class="col-12 text-center">
            <h1 class="display-4 miestilo color-primary pb-4">Certificaciones</h1>
        </div>

        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 py-4">
                <div class="card">
                    <img class="card-img-top" src="img/certification/smfc.jpg" alt="Card image cap" whith="100"
                        heigth="200">
                    <div class="card-body">
                        <h5 class="card-title color-primary">Scrum Foundation Professional Certificate (SFPC)</h5>
                        <p class="card-text text-justify">Esto le permitirá cubrir todo el conocimiento del marco Scrum,
                            las definiciones clave y los roles. Después de esto, estará listo para embarcarse en un
                            viaje hacia el certificado Scrum Advanced Professional (SAPC).</p>
                    </div>
                    <div class="card-footer">
                        <a href="sfpc.php" class="btn btn-p btn-block">Ver Información</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 py-4">
                <div class="card">
                    <img class="card-img-top" src="img/certification/sdpc.jpg" alt="Card image cap" whith="100"
                        heigth="200">
                    <div class="card-body">
                        <h5 class="card-title color-primary">Scrum Developer Professional Certificate (SDPC)</h5>
                        <p class="card-text text-justify">Esto le permitirá cubrir todo el conocimiento del marco Scrum,
                            las definiciones clave y los roles. Después de esto, estará listo para embarcarse en un
                            viaje hacia el certificado Scrum Advanced Professional (SAPC).</p>
                    </div>
                    <div class="card-footer">
                        <a href="sdpc.php" class="btn btn-p btn-block">Ver Información</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 py-4">
                <div class="card">
                    <img class="card-img-top" src="img/certification/spopc.jpg" alt="Card image cap" whith="100"
                        heigth="200">
                    <div class="card-body">
                        <h5 class="card-title color-primary">Scrum Product Owner Professional Certificate (SPOPC)</h5>
                        <p class="card-text text-justify">Después de completar el examen de Product Owner Professional,
                            puede esperar obtener una visión general y comprensión sobre cómo maximizar el valor del
                            producto y el trabajo del Equipo de Desarrollo.</p>
                    </div>
                    <div class="card-footer">
                        <a href="spopc.php" class="btn btn-p btn-block">Ver Información</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 py-4">
                <div class="card">
                    <img class="card-img-top" src="img/certification/smpc.jpg" alt="Card image cap" whith="100"
                        heigth="200">
                    <div class="card-body">
                        <h5 class="card-title color-primary">Scrum Master Professional Certificate (SMPC)</h5>
                        <p class="card-text text-justify">Después de completar el examen del Certificado Scrum
                            Master Professional, puede esperar obtener una visión general y comprensión de la
                            teoría, las prácticas y las reglas de Scrum.</p>
                    </div>
                    <div class="card-footer">
                        <a href="smpc.php" class="btn btn-p btn-block">Ver Información</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 py-4">
                <div class="card">
                    <img class="card-img-top" src="img/certification/sapc.jpg" alt="Card image cap" whith="100"
                        heigth="200">
                    <div class="card-body">
                        <h5 class="card-title color-primary">Scrum Advance Professional Certificate (SAPC)</h5>
                        <p class="card-text text-justify">El Certificado Profesional Avanzado de Scrum (SAPC) está
                            dirigido a aquellos que estén interesados ​​en demostrar el conocimiento de las Prácticas de
                            Scrum en su totalidad.</p>
                    </div>
                    <div class="card-footer">
                        <a href="sapc.php" class="btn btn-p btn-block">Ver Información</a>
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
                <h1 class="display-4 miestilo color-primary pb-4">Contacto</h1>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <form class="bg-light py-2 px-3" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

                    <div class="form-group">
                        <h6 class="color-primary" for="name">Nombre</h6>
                        <input class="form-control bg-light shadow-sm" type="text" id="name" name="txtName"
                            placeholder="Ingrese su nombre..." required="">
                    </div>

                    <div class="form-group">
                        <h6 class="color-primary" for="email">Email</h6>
                        <input class="form-control bg-light shadow-sm " type="email" id="email" name="txtEmail"
                            placeholder="Ingrese su email..." required="">
                    </div>

                    <div class="form-group">
                        <h6 class="color-primary" for="subject">asunto</h6>
                        <input class="form-control bg-light shadow-sm" type="text" id="subject" name="txtSubject"
                            placeholder="Ingrese el asunto..." required="">
                    </div>

                    <div class="form-group">
                        <h6 class="color-primary" for="content">Contenido</h6>
                        <textarea class="form-control bg-light shadow-sm" rows="5" name="txtContent"
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
                            <h6 class="text-success"><span><img src="fonts/ubicacion.svg" alt="" width="25" height="25"></span>
                                 Avenida Providencia, 727 - Providencia, Santiago - Chile
                            </h6>
                            <h6 class="text-success"><span><img src="fonts/llamada.svg" alt="" width="25" height="25"></span>
                                 Llamar +56-9-6120 4054
                            </h6>
                            <h6 class="text-success"><span><img src="fonts/email.svg" alt="" width="25" height="25"></span>
                                 contacto@consultoriapmo.com
                            </h6>

                        </div>
                    </div>
                </div>
            </div><!-- end div col ubication-->

        </div><!-- end div roww-->
    </div><!-- end div container-->
    <!-- end section Contact-->

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //Datos
            $nombre = $_POST["txtName"];
            $correo = $_POST["txtEmail"];
            $asunto = $_POST["txtSubject"];
            $mensaje = $_POST["txtContent"];

            $para = 'richardfoncea@gmail.com';
            $titulo = $asunto;
            $mensaje = " Nombre: " . $nombre . "\n Email: " . $correo . "\n"
                    . "------------------------------------------------------------------------------------\n Mensaje: " . $mensaje;
            $cabeceras = 'From: ' . $correo;

            $comprobar = mail($para, $titulo, $mensaje, $cabeceras);

            if ($comprobar) {
                echo "
                    
                        <script language='JavaScript'>
                        var men = 'Mensaje Enviado Correctamente, nos pondremos en contacto contigo';
                        alert(men);
                        </script>";
            } else {
                echo "
                        <script language='JavaScript'>
                        var men = 'Error no se pudo enviar mensaje';
                        alert(men);
                        </script>";
            }
        }
    ?>


    <!-- section footer-->
    <?php include 'partials/footer.php'?>
    <!-- end section footer-->


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