
<?php
include('operaciones/conexion.php');
$ID=$_GET['id_usuario'];
$seleccionar="SELECT * FROM usuario  WHERE id=$ID";
 $query=mysqli_query($conn,$seleccionar);
 while($raul=mysqli_fetch_array($query)){


 
 ?> 
 
<!---MODAL PARA EDITAR -->



<div class="card-content">
                                             <div class="card-body">
                                                 <form class="form" action="update.php" method="POST">
                                                     <div class="row">
                                                        <input type="hidden" name="txtid" value="<?php echo $raul['id']; ?>">

                                                         <div class="col-md-6 col-12">
                                                             <div class="form-group">

                                                                 <label for="first-name-column">Nombre</label>
                                                                 <input type="text" id="first-name-column" class="form-control" placeholder="First Name" value="<?php echo $raul['nombre']; ?>" name="nombre">
                                                             </div>
                                                         </div>


                                                         <div class="col-md-6 col-12">
                                                             <div class="form-group">
                                                                 <label for="last-name-column">Apellidos</label>
                                                                 <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" value="<?php echo $raul['apellidos']; ?>" name="apellido">
                                                             </div>
                                                         </div>
                                                         <div class="col-md-6 col-12">
                                                             <div class="form-group">
                                                                 <label for="city-column">edad</label>
                                                                 <input type="text" id="city-column" class="form-control" placeholder="City"value="<?php echo $raul['edad']; ?>"  name="edad">
                                                             </div>
                                                         </div>
                                                         <div class="col-md-6 col-12">
                                                             <div class="form-group">
                                                                 <label for="country-floating">telefono</label>
                                                                 <input type="text" id="country-floating" class="form-control" name="telefono" value="<?php echo $raul['telefono']; ?>" placeholder="Country">
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
                                         <?php

}
?>