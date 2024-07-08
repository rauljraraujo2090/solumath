        <?php
        include("operaciones/conexion.php");
        ?>

        
    <?php 

session_start();
error_reporting(0);
$varsesion=$_SESSION['usuarios'];

if($varsesion==null or $varsesion=''){
 
echo "usted no tiene autorizacion";
die();

}
?>


        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sobre sulemath

            </title>

            <link rel="shortcut icon" href="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2033%2034'%20fill-rule='evenodd'%20stroke-linejoin='round'%20stroke-miterlimit='2'%20xmlns:v='https://vecta.io/nano'%3e%3cpath%20d='M3%2027.472c0%204.409%206.18%205.552%2013.5%205.552%207.281%200%2013.5-1.103%2013.5-5.513s-6.179-5.552-13.5-5.552c-7.281%200-13.5%201.103-13.5%205.513z'%20fill='%23435ebe'%20fill-rule='nonzero'/%3e%3ccircle%20cx='16.5'%20cy='8.8'%20r='8.8'%20fill='%2341bbdd'/%3e%3c/svg%3e" type="image/x-icon">
            <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">

            <link rel="stylesheet" href="assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

            <link rel="stylesheet" crossorigin href="./assets/compiled/css/table-datatable-jquery.css">
            <link rel="stylesheet" crossorigin href="./assets/compiled/css/app.css">
            <link rel="stylesheet" crossorigin href="./assets/compiled/css/app-dark.css">
        </head>

        <body>



            <script src="assets/static/js/initTheme.js"></script>
            <div id="app">

                <?php


                include('includes/header.php');
                ?>


                <div id="main">
                    <header class="mb-3">
                        <a href="#" class="burger-btn d-block d-xl-none">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                    </header>



                    <div class="page-heading">
                        <div class="page-title">
                            <div class="row">
                                <div class="col-12 col-md-6 order-md-1 order-last">
                                    <h3>¿Qué Se Dice De Solumath?</h3>
                                    
                                </div>
                               
                            </div>
                        </div>






                        <!------MODAL----->



                        <div class="col-md-6 col-12">
                            <div class="card">





                                <!--Basic Modal -->
                                <div class="modal fade text-left" id="defaultsss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Registrar</h5>
                                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">




                                                <section id="multiple-column-form">
                                                    <div class="row match-height">
                                                        <div class="col-12">
                                                            <div class="card">

                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <form class="form" method="POST" action="crud/action_sobre_sulemath.php" enctype="multipart/form-data">
                                                                            <input type="text" name="metodo" value="1" hidden>
                                                                            <div class="row">

                                                                            

                                                                                
                                                                                                                 

                                                                                <div class="col-md-12 col-12">
                                                                                    <div class="form-group">
                                                                                        <label for="country-floating">foto del video</label>
                                                                                        <input type="file" name="foto" accept="image/png,image/jpeg" required id="country-floating" class="form-control" placeholder="Country">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-12 col-12">
                                                                                    <div class="form-group">
                                                                                        <label for="first-name-column">video</label>
                                                                                        <input type="text" id="first-name-column"accept="jpg/png,image/jpeg" class="form-control" placeholder="Ingrese el linck del video " name="movie">
                                                                                    </div>
                                                                                </div>


                                                                                <div class="col-12 d-flex justify-content-end">
                                                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Registrar</button>
                                                                                    <!-----  <button type="reset" class="btn btn-light-secondary me-1 mb-1">Cancelar </button>---->
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>



                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Cancelar</span>
                                                </button>
                                                <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Aceptar</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---FIN--->

                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">

                                <div class="card-body">
                                    <!---<p class="text-muted">Use the <code>.icon</code> and <code>.icon-left</code> classes.</p>--->
                                    <div class="buttons">

                                        <button type="button" class="btn icon icon-left btn-primary" data-bs-toggle="modal" data-bs-target="#defaultsss"><i data-feather="user"></i>
                                            Agregar
                                        </button>
                                        <!----
                                    <a href="#" ata-bs-toggle="modal"
                                    data-bs-target="#default"class="btn icon icon-left btn-primary"><i data-feather="user"></i> Agregar Usuarios</a>
                                    
                                    
                                --->

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- Basic Tables start -->
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    Lista 
                                </h5>
                            </div>

                            <?php
                            include('crud/config.php');
                            $sqlAlumnos   = ("SELECT * FROM sobre_sulemath ORDER BY id DESC");
                            $queryAlumnos = mysqli_query($con, $sqlAlumnos);
                            $totalAlumnos = mysqli_num_rows($queryAlumnos);

                            ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table tag" id="table1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                               
                                                <th scope="col">photo</th>
                                                <th scope="col">video</th>
                                                
                                                <th scope="col">Acciones</th> 

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
              $conteo =1;
              while ($dataAlumno = mysqli_fetch_array($queryAlumnos)) { ?>
                                                 <tr>
                  <td><?php echo  $conteo++ .')'; ?></td>
                 
                  <td><?php echo $dataAlumno['foto']; ?></td>
                  <td><?php echo $dataAlumno['videos']; ?></td>
                  
                  
                  <td>
                  <a href="crud/detalles_sobre_solumath.php?id=<?php echo $dataAlumno['id']; ?>" class="btn btn-warning mb-2"   title="Ver datos del alumno <?php echo $dataAlumno['namefull']; ?>">
                  <i class="bi bi-tv"></i> Ver</a>
                   
                    <a href="crud/eliminar_sobre_solumath.php?Id=<?php echo $dataAlumno['id']; ?>&metodo=3&namePhoto=<?php echo $dataAlumno['foto']; ?>" class="btn btn-danger mb-2" title="Borrar galeria <?php echo $dataAlumno['namefull']; ?>">
                    <i class="bi bi-trash"></i> Borrar</a>
                  </td>
                </tr>

                                            <?php }



                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </section>








                    <!---MODAL PARA EDITAR -->

                    <div class="col-md-6 col-12">
                        <div class="card">





                            <!--Basic Modal -->
                            <div class="modal fade text-left" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel1">Editar Usuarios</h5>
                                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">




                                            <section id="multiple-column-form">
                                                <div class="row match-height">
                                                    <div class="col-12">
                                                        <div class="card">

                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <form class="form" action="operaciones/update.php" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-12">
                                                                                <div class="form-group">

                                                                                    <label for="first-name-column">Nombre</label>
                                                                                    <input type="text" id="first-name-column" class="form-control" placeholder="First Name" value="<?php echo $raul['nombre']; ?>" name="nombre">
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-md-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label for="last-name-column">Apellidos</label>
                                                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="apellido">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label for="city-column">edad</label>
                                                                                    <input type="text" id="city-column" class="form-control" placeholder="City" name="edad">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label for="country-floating">telefono</label>
                                                                                    <input type="text" id="country-floating" class="form-control" name="telefono" placeholder="Country">
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-12 d-flex justify-content-end">
                                                                                <button type="submit" class="btn btn-primary me-1 mb-1">Actualizar</button>
                                                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Cancelar </button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Cancelar</span>
                                            </button>
                                            <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Aceptar</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!--FIN MODAL EDITAR -->


                    <!-- Basic Tables end -->

                </div>

                <?php
                include('includes/footer.php');
                ?>
            </div>
            </div>







            <script src="assets/static/js/components/dark.js"></script>
            <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


            <script src="assets/compiled/js/app.js"></script>



            <script src="assets/extensions/jquery/jquery.min.js"></script>
            <script src="assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
            <script src="assets/static/js/pages/datatables.js"></script>

        </body>

        </html>