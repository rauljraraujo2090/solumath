
<?php 
  include('admin/src/crud/config.php');
  $query = "select * from quinto_secundaria";
  $resultado = mysqli_query($con,$query);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>5 Secundaria</title>
        <!-- Favicon img -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
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
        <!-- Header area end here -->
                 <!-- Page banner area start here -->
   <section class="banner__inner-page bg-image pt-180 pb-180 bg-image" data-background="assets/images/banner/banner-inner-pageee.png">
                <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <img src="assets/images/banner/inner-banner-shape2.png" alt="shape">
                </div>
                <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <img src="assets/images/banner/inner-banner-shape1.png" alt="shape">
                </div>
                <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <img class="sway__animationX" src="assets/images/banner/inner-banner-shape3.png" alt="shape">
                </div>
                <div class="container">
                    <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">5º grado Secundaria</h2>
                    <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <a href="index.php">Inicio</a>
                        <span>
                            <i class="fa-regular fa-angles-right mx-2"></i>
                            5º grado Secundaria
                        </span>
                    </div>
                </div>
            </section>
            <!-- Page banner area end here -->
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
            



<!-- Service area start here -->
<section class="service-single-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                    <?php foreach($resultado as $row){ ?>
                        <div class="service-single__left-item">
                        
                            <div class="image mb-50">
                                <img src="admin/src/crud/primaria/<?php echo $row['foto']; ?>" alt="image">
                                <div class="service-single__video-btn">
                                    <div class="video-btn video-pulse wow fadeIn" data-wow-delay="200ms"
                                        data-wow-duration="1500ms">
                                        <a class="video-popup autoplay" href="<?php echo $row['videos']; ?>"><i
                                                class="fa-solid fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="title mb-30">¿Que aprenderas en este curso ?</h3>
                            <p id="namefull" class="mb-20"><?php echo $row['namefull']; ?></pc>
                            <br>
                            <?php
include('btn_informacion.php');
?>
                            
                            
                           
                        </div>
                        <?php }?>
                    </div>
                    <?php
include('header_secundaria.php');
?>




<style>


#namefull{

    text-align: justify;
}
</style>



                </div>
            </div>
        </section>
        <!-- Service area end here -->




            
            <!-- Team area end here -->
        </main>
        <!-- Footer area start here -->
        <?php
include('includes/footer.php');
?>

        <!-- Footer area end here -->
       
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
