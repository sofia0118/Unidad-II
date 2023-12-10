<?php

    include("../config/conection.php");

    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id = $id";

    try {
      $resutl = mysqli_query($conn, $query);
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

    if($resutl) {
      header("location:../index.php");
    } else {
      ?>
        <h3 class="error">Hubo un error al eliminar el usuario</h3>
      <?php
    }


?>
