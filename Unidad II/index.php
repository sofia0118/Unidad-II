<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container table">
      <h1 class="text-center">LIST OF USERS</h1>
    </div>

    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Identification</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

          <?php

            require("config/conection.php");

            $sql = $conn -> query("SELECT * FROM users");

            while ($result = $sql->fetch_assoc()) {
              ?>
                <tr>
                  <th scope="row"><?php echo $result['id'] ?></th>
                  <th scope="row"><?php echo $result['name'] ?></th>
                  <th scope="row"><?php echo $result['last_name'] ?></th>
                  <th scope="row"><?php echo $result['email'] ?></th>
                  <th scope="row"><?php echo $result['phone'] ?></th>
                  <th scope="row"><?php echo $result['identification'] ?></th>
                  <th>
                    <a href="edit.php?id=<?php echo $result['id']?>" class="btn btn-warning">Edit</a>
                    <a href="crud/delete.php?id=<?php echo $result['id']?>" class="btn btn-danger">Delete</a>
                  </th>
                </tr>
              <?php
            }

          ?>
          
        </tbody>
      </table>
      
      <div class="container">
        <a href="add.php" class="btn btn-success">Add</a>
      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
