<?php

include("../config/conection.php");

if(isset($_POST['send'])) {

  if (
    strlen($_POST['name']) >= 1 &&
    strlen($_POST['last_name']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['phone']) >= 1 &&
    strlen($_POST['identification']) >= 1
  ) {

    $name = trim($_POST['name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $identification = trim($_POST['identification']);

    $query = "INSERT INTO `users` (`name`, `last_name`, `email`, `phone`, `identification`) VALUES ('$name','$last_name','$email','$phone','$identification')";

    try {
     $resutl = mysqli_query($conn, $query);
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }


    if($resutl) {
      header("location:../index.php");
    } else {
      ?>
        <h3 class="error">Hubo un error al enviar la información</h3>
      <?php
    }

  }

} else {
  ?> 
    <h3 class="error">Por favor llena todos los campos</h3>
  <?php
}

?>
