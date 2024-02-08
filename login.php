<?php
echo "<h2>Login Page</h2>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
      <!-- Bootstrap CSS v5.2.1 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <style>
            h2{
                text-align:center;
                margin-top: 120px;
            }
        </style>
</head>
<body>
    <div class="container">
        <form action="process.php" method="post">
        <div class="row">
        <div class="col-md-4">
            <label for="" class="form-label">User Name</label>
            <input type="text" class="form-control" id="" value="" required name="user" placeholder="Username">
          </div>
          <div class="col-md-4">
            <label for="" class="form-label">User Name</label>
            <input type="password" class="form-control" id="" value="" required name="pass" placeholder="Password">
          </div>
        </div><br>
        <button class="btn btn-primary" name="btn_login" type="submit">Login</button>
        </form>
    </div>
</body>
</html>