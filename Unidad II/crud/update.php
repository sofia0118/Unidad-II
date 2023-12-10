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
    $id = trim($_POST['id']);
    echo 'id: ',  $id, "\n";
    $id = trim($_REQUEST['id']);
    echo 'id: ',  $id, "\n";
    

    $query = "UPDATE users SET name='$name', last_name='$last_name', email='$email', phone='$phone', identification='$identification' WHERE id = $id";
    
    try {
     $resutl = mysqli_query($conn, $query);
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
        echo 'Caught exception: ',  $id, "\n";
    }

    if($resutl) {
      header("location:../index.php");
    } else {
      ?>
        <h3 class="error">Hubo un error al actualizar la información</h3>
      <?php
    }

  }

} else {
  ?> 
    <h3 class="error">Por favor llena todos los campos</h3>
  <?php
}

?>
