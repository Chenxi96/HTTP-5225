<?php
  include('../connect.php');
  include('loginFunction.php');

  if(isset($_POST['createLogin'])) {
    var_dump($_POST);
    $imageFile = uploadImage($_FILES['image']);
    echo $imageFile;
    $query = 'INSERT INTO
              users(name, email, password, image)
              VALUES( "'.$_POST['name'].'", "' . $_POST['email'] .'", "' . md5($_POST['password']) . '", "' . $imageFile . '")';
    $result = mysqli_query($connect, $query);
    
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ontario Public Schools</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
  <div class="container fluid">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h3 class="mt-5 mb-5">Signup</h3>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
          <form method="POST" action="createLogin.php" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="input-group mb-3">
              <input type="file" class="form-control" name="image" id="imageUpload">
              <label class="input-group-text" for="imageUpload">Upload</label>
            </div>
            <button type="submit" class="btn btn-primary" name="createLogin">Create Profile</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>