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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar 1 grado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/home.css">
    <!-- https://icons.getbootstrap.com/ -->
  </head>
<body>
    
<div class="container mt-3">
  <div class="row justify-content-md-center">
    <div class="col-md-12">
      <h1 class="text-center mt-3">
        <a href="#">
          <i class="bi bi-arrow-left-circle"></i>
        </a>
        Actualizar Datos
      </h1>
      <hr class="mb-3">
    </div>


    
    <?php
    include('config.php');
    $idAlumno     = (int) filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);
    $sqlAlumnos   = ("SELECT * FROM matricula_individual WHERE id='$idAlumno' LIMIT 1");
    $queryAlumnos = mysqli_query($con, $sqlAlumnos);
    $dataAlumno   = mysqli_fetch_array($queryAlumnos);
    ?>

    <div class="col-md-5 mb-3">
      <h3 class="text-center">1er grado Primaria</h3>
      <form method="POST" action="action_matricula_individual.php?metodo=2" enctype="multipart/form-data">
      <!--- <input type="text" name="id" value="" hidden>--->
      <textarea type="text"   name="id"  class="form-control" value="<?php echo $dataAlumno['id']; ?>"placeholder="descripcion del video" name="namefull" hidden></textarea>
      
      <div class="mb-3">
      <label for="name">Apellido Paterno*</label>
      <input type="text" name="a_p" id="name"  value="<?php echo $dataAlumno['a_paterno']; ?>">
        </div>






        <div class="mb-3">
        <label for="email">Apellido Materno*</label>
        <input type="text" id="email"name="a_m" value="<?php echo $dataAlumno['a_materno']; ?>">
        </div>





        <div class="mb-3">
        <label for="subject">Nombres*</label>
        <input type="text" name="nombress"id="subject"   value="<?php echo $dataAlumno['namefull']; ?>">
        </div>




        <div class="mb-3">
        <label for="subject">Dirección*</label>
        <input type="text" name="direccion"id="subject"   value="<?php echo $dataAlumno['direccion']; ?>">
        </div>




        <div class="mb-3">
        <label for="subject">Colegio de Procedencia*</label>
        <input type="text" name="c_procedencia"id="subject"   value="<?php echo $dataAlumno['procedencia_c']; ?>">
        </div>



        <div class="mb-3">
        <label for="subject">Grado*</label>
        <input type="text"name="grado"id="subject" value="<?php echo $dataAlumno['grado']; ?>">
        </div>







        <div class="mb-3">
        <label for="subject">Dni*</label>
        <input type="number" name="dni"id="subject"  value="<?php echo $dataAlumno['dni']; ?>">
        </div>



        <div class="mb-3">
        <label for="subject">Correo Electronico*</label>
        <input type="email" name="correoo"id="subject"   value="<?php echo $dataAlumno['correo']; ?>">
        </div>







        <div class="mb-3">
        <label for="subject">Fecha de nacimiento*</label>
        <input type="date"  name="f_nacimiento"id="subject"   value="<?php echo $dataAlumno['fecha_nacimiento']; ?>">
        </div>
       

       
        

        <div class="mb-3">
        <label for="subject">Nro de  celular*</label>
        <input type="number" name="celar"id="subject"   value="<?php echo $dataAlumno['celular']; ?>" >
        </div>



        <div class="mb-3">
        <label for="number">Ciclo de Matrícula*</label>
        <input type="text" name="me_matriculo"id="number" value="<?php echo $dataAlumno['me_matriculo']; ?>">
        </div>


        <div class="mb-3">
        <label for="formFile" class="form-label">Foto del video </label>
          <input class="form-control" type="file" name="foto" accept="image/png,image/jpeg">
        </div>



        <div class="d-grid gap-2 col-12 mx-auto">
          <button type="submit" class="btn  btn btn-primary mt-3 mb-2">
            Actualizar datos
            <i class="bi bi-arrow-right-circle"></i>
          </button>
        </div>
        
      </form>
    </div>

    <div class="col-md-5 mb-3">
        <label class="form-label">Foto actual de la galeria</label>
        <br>
        <img src="primaria/<?php echo $dataAlumno['foto']; ?>" alt="foto perfil" class="card-img-top fotoPerfil">
    </div>



  </div>
</div>

<?php
  include('mensajes.php'); 
?>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
$(function(){
  $('.toast').toast('show');
});
</script>

</body>
</html>