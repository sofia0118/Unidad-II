<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    
    

  <form action="crud/update.php?id=<?php echo $_REQUEST["id"] ?>" method="POST" autocomplete="off">
    <div class="container">
      <h1 class="text-center">EDIT USER</h1>
    </div>
    <?php

      require("config/conection.php");

      $sql = $conn -> query("SELECT * FROM users WHERE id =".$_REQUEST["id"]);
      $result = $sql->fetch_assoc();

    ?>

    <div class="input-group">
      
      <input value="<?php echo $result["id"] ?>" type="Hidden" name="id" placeholder="Id">


      <div class="input-container">

        <input value="<?php echo $result['name']?>" type="text" name="name" placeholder="Name">
        <i class="fa-solid fa-user"></i>

      </div>

      <div class="input-container">

        <input value="<?php echo $result['last_name']?>" type="text" name="last_name" placeholder="LastName">
        <i class="fa-solid fa-user"></i>

      </div>

      <div class="input-container">

        <input value="<?php echo $result['email']?>" type="email" name="email" placeholder="Email">
        <i class="fa-solid fa-envelope"></i>

      </div>

      <div class="input-container">

        <input value="<?php echo $result['phone']?>" type="tel" name="phone" placeholder="Phone">
        <i class="fa-solid fa-phone"></i>

      </div>

      <div class="input-container">

        <input value="<?php echo $result['identification']?>" type="number" name="identification" placeholder="Identification">
        <i class="fa-solid fa-passport"></i>

      </div>

      <a href="#">Terminos y condiciones</a>

      <input name="send" type="submit" class="btn" value="Send">


    </div>

  </form>

  <?php 

    include("crud/update.php");
    
  ?>

</body>
</html>
