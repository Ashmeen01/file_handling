<!doctype html>
<html lang="en">

<head>
  <title>Registration Page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>

    body{
        background-color: skyblue;
    }
    form{
        /* width: 56%;
         */
         margin-left: 40px;
         height: 100vh;
         diplay:flex;
         flex-direction: column;
         align-items:center;
         justify-content:center;
         margin:2rem;

    }

    .form-control{
        width: 30%;
    }
</style>
</head>

<body>
  <header>
    <!-- place navbar here -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs bg-dark" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
      </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab"> home </div>
      <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"> profile </div>
      <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab"> messages </div>
    </div>
  </header>
  <main>
    <form action="process.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="" class="form-label">Name</label>
      <input type="text"
        class="form-control" name="fname" id="" aria-describedby="helpId" placeholder="Enter Full Name">
      <small id="helpId" class="form-text text-muted">Full Name</small>
    </div> 
    <div class="mb-3">
      <label for="" class="form-label">Username</label>
      <input type="text"
        class="form-control" name="user" id="" aria-describedby="helpId" placeholder="Enter Username">
      <small id="helpId" class="form-text text-muted">Username</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Email</label>
      <input type="text"
        class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Enter Email Address">
      <small id="helpId" class="form-text text-muted">Email Address</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Password</label>
      <input type="password"
        class="form-control" name="pass" id="" aria-describedby="helpId" placeholder="Enter Password">
      <small id="helpId" class="form-text text-muted">Enter a Strong Password</small>
    </div>
        <div class="mb-3">
          <label for="" class="form-label">Choose file</label>
          <input type="file" class="form-control" name="image" id="" placeholder="Upload Recent Picture" aria-describedby="fileHelpId">
          <div id="fileHelpId" class="form-text">Help text</div>
        </div>
        <button class="btn btn-primary" type="submit" name="btn">Register</button>
</form>
    </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>