<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    

  <form action="crud/insert.php" method="post" autocomplete="off">
<div class="container">
      <h1 class="text-center">ADD USER</h1>
    </div>
    <div class="input-group">

      <div class="input-container">

        <input type="text" name="name" placeholder="Name">
        <i class="fa-solid fa-user"></i>

      </div>

      <div class="input-container">

        <input type="text" name="last_name" placeholder="LastName">
        <i class="fa-solid fa-user"></i>

      </div>

      <div class="input-container">

        <input type="email" name="email" placeholder="Email">
        <i class="fa-solid fa-envelope"></i>

      </div>

      <div class="input-container">

        <input type="tel" name="phone" placeholder="Phone">
        <i class="fa-solid fa-phone"></i>

      </div>

      <div class="input-container">

        <input type="number" name="identification" placeholder="Identification">
        <i class="fa-solid fa-passport"></i>

      </div>

      <a href="#">Terminos y condiciones</a>

      <input name="send" type="submit" class="btn" value="Send">


    </div>

  </form>

  <?php 

    include("crud/insert.php");
    
  ?>

</body>
</html>
