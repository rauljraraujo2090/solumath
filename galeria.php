
<?php 
  include('admin/src/crud/config.php');
  $query = "select * from galerias";
  $resultado = mysqli_query($con,$query);
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<link rel="stylesheet" href="estilos.css">



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





<?php
    include('includes/header.php');
?>
 <br>
 <br>
 <div class="container">
 <div class="row">
        
         <section id="pinBoot">
         <?php foreach($resultado as $row){ ?>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm white-panel">
               <a href="admin/src/crud/img_galerias/<?php echo $row['foto']; ?>" class="fancylight popup-btn" data-fancybox-group="light">
               <img src="admin/src/crud/img_galerias/<?php echo $row['foto']; ?>" class="img-fluid"  alt="..."> 
               
               </a>
            </div>

            


            


           
           
            <!-- Animate css
            <div class="item selfie col-lg-3 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/female-friends-sitting-car-hood-taking-self-portrait_23-2147855623.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/female-friends-sitting-car-hood-taking-self-portrait_23-2147855623.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" alt="">
               </a>
            </div>
            -->

            <?php }?>
</section>
            </div>
         </div>
        
      </div>




      <style>

body{
	margin:0;
	padding:0;
}
/* .container{
	width:90%
	margin:10px auto;
} */
.portfolio-menu{
	text-align:center;
}
.portfolio-menu ul li{
	display:inline-block;
	margin:0;
	list-style:none;
	padding:10px 15px;
	cursor:pointer;
	-webkit-transition:all 05s ease;
	-moz-transition:all 05s ease;
	-ms-transition:all 05s ease;
	-o-transition:all 05s ease;
	transition:all .5s ease;
}

.portfolio-item{
	/*width:100%;*/
}
.portfolio-item .item{
	/*width:303px;*/
	float:left;
	margin-bottom:10px;
}

      </style>
        
        <?php
    include('includes/footer.php');
?>
      <script>

// $('.portfolio-item').isotope({
        //  	itemSelector: '.item',
        //  	layoutMode: 'fitRows'
        //  });
        $('.portfolio-menu ul li').click(function(){
         	$('.portfolio-menu ul li').removeClass('active');
         	$(this).addClass('active');
         	
         	var selector = $(this).attr('data-filter');
         	$('.portfolio-item').isotope({
         		filter:selector
         	});
         	return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
         	enabled : true
         }
         });
         });

      </script>



<!-- script de headery footer -->
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









<script src="estilo.js">
</script>


 
      