
  /*Swal.fire({
   title:'<a href="#">EXAMEN DE MATEMATICA</a>',
    text:"dale clik para matricularte ",
    imageUrl:"https://www.unc.edu.pe/wp-content/uploads/2022/03/admision.jpeg",
    width:600,
    Heigh:500,
    imageWidth:500,
    imageHeight:400,
   
  });
  
  Swal.fire({
  
    imageUrl:"https://www.unc.edu.pe/wp-content/uploads/2022/03/admision.jpeg",
    width:600,
    Heigh:600,
    imageWidth:550,
    imageHeight:550,
    showConfirmButton: false
  
   
   
  });

   */



  Swal.fire({
    imageUrl:"https://www.unc.edu.pe/wp-content/uploads/2022/03/admision.jpeg",
    width:600,
    Heigh:600,
    imageWidth:550,
    imageHeight:550,
    showCancelButton: true,
    confirmButtonUrl:"https://stackoverflow.com/questions/42408044/remove-ok-button-from-sweet-alert-dialog",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Ahora no",
    confirmButtonText: "Inscribirse Ahora"
  }).then((result) => {
    if (result.isConfirmed) {
      
         window.open('matricula_individual.php');
      
    }
  });
 

