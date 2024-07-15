<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula Individual</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="logo_ventana.png">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- All min css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php
    include('includes/header.php');
    ?>

    <!-- Fullscreen search area start here -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fullscreen search area end here -->
    <main>



        <br>
        <br>






        <center>


            <div class="col-lg-6 ps-2 ps-lg-5">
                <div class="section-header mb-40">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">


                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Matricula Individual</h2>
                    <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">Para matricular estudiantes por grupos click en el siguiente boton</p>
                </div>
                <a class="wow fadeInUp btn-one mt-0" data-delay="1s" href="matricula_grupalcopy.php">Matricula Grupal <i class="fa-regular fa-arrow-right-long"></i></a>

            </div>


        </center>




        <style>
            .primaria {
                text-align: justify;


            }
        </style>
































        <!-- data-background="assets/images/bg/testimonial-bg.png" -->

        <section class="testimonial-area bg-image pt-120 pb-120">

            <div class="container">
                <div class="row g-4">

                    <div class="col-lg-12 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="talk-us__item">
                            <div class="section-header mb-30">
                                <h5 class="text-white">
                                    <svg width="28" height="12" viewBox="0 0 28 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.75" y="0.75" width="18.5" height="10.5" rx="5.25" stroke="white" stroke-width="1.5" />
                                        <rect x="8" width="20" height="12" rx="6" fill="white" />
                                    </svg>
                                    Matrícula Individual


                                </h5>
                                <center>
                                    <h2 class="text-white">¡Datos del Estudiante!</h2>
                                </center>
                                <!---- <p class="text-white">Déjanos tus datos para que una asesora se comunique contigo.</p>---->
                            </div>
                            <form action="admin/src/crud/action_matricula_individual.php" method="POST" enctype="multipart/form-data">
                                <input type="text" name="metodo" value="1" hidden>
                                <div class="row g-6">
                                    <div class="col-sm-6">
                                        <label for="name">Apellido Paterno*</label>
                                        <input type="text" name="a_p" id="name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="email">Apellido Materno*</label>
                                        <input type="text" id="email" name="a_m" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="subject">Nombres*</label>
                                        <input type="text" name="nombress" id="subject" required>
                                    </div>



                                    <div class="col-sm-6">
                                        <label for="subject">Dirección*</label>
                                        <input type="text" name="direccion" id="subject" required>
                                    </div>




                                    <div class="col-sm-12">
                                        <label for="subject">Colegio de Procedencia*</label>
                                        <input type="text" name="c_procedencia" id="subject" required>
                                    </div>




                                    <div class="col-sm-6">
                                        <label for="subject">Grado*</label>
                                        <input type="text" name="grado" id="subject" required>
                                    </div>



                                    <div class="col-sm-6">
                                        <label for="subject">Dni*</label>
                                        <input type="number" name="dni" id="subject" required>
                                    </div>


                                    <div class="col-sm-12">
                                        <label for="subject">Correo Electronico*</label>
                                        <input type="email" name="correoo" id="subject" required>
                                    </div>


                                    <div class="col-sm-6">
                                        <label for="subject">Fecha de nacimiento*</label>
                                        <input type="date" name="f_nacimiento" id="subject" required>
                                    </div>



                                    <div class="col-sm-6">
                                        <label for="subject">Nro de celular*</label>
                                        <input type="number" name="celar" id="subject" required>
                                    </div>


                                    <div class="col-sm-12">
                                    <label for="text">Ciclo de Matrícula*</label>
                                    <select type="text" name="me_matriculo" id="number" required class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option selected>Seleccione el ciclo</option>
                                        <option value="1">Ciclo A</option>
                                        <option value="2">Ciclo B</option>
                                        <option value="3">Ciclo C</option>
                                    </select>
                                    </div>

                                    <!----
                                    <div class="col-sm-12">
                                        <label for="number">Ciclo de Matrícula*</label>
                                        <input type="text" name="me_matriculo" id="number" required>
                                    </div>
--->
                                    <div class="col-sm-12">
                                        <label for="number">Baucher de Pago*</label>
                                        <input type="file" name="foto" accept="jpg/png,image/jpeg" id="number" required>
                                    </div>






                                </div>
                                <button type="submit">Matricularme</button>
                            </form>
                        </div>
                    </div>



                    <br>
                    <br>
                    <br>
                    <?php
                    include('yape.php');
                    ?>


                </div>
            </div>
        </section>
        <!-- Testimonial area end here -->





















    </main>


    <!-- Footer area start here -->
    <?php
    include('includes/footer.php');
    ?>

    <!-- Footer area end here -->

    <?php
    include('whatsap.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    </script>
    <!-- Jquery 3.7.0 Min Js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap min Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Mean menu Js -->
    <script src="assets/js/meanmenu.js"></script>
    <!-- Swiper bundle min Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Counterup min Js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Wow min Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Pace min Js -->
    <script src="assets/js/pace.min.js"></script>
    <!-- Magnific popup min Js -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Nice select min Js -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Isotope pkgd min Js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Waypoints Js -->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!-- Script Js -->
    <script src="assets/js/script.js"></script>
</body>

</html>