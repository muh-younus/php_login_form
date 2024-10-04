<?php

include("connection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

 


<nav class="navbar navbar-expand-lg bg-primary text-white bg-body-dark">
  <div class="container-fluid text-primary">
    <a class="navbar-brand" href="#">Login Form</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" action="" method="post">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" name="submit" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>





<div class="container p-5">

<h1>Login Form</h1>

<form name="form" action="login.php" onsubmit="return isvalid()"  method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="email" class="form-control" name="username" id="username" aria-describedby="emailHelp">
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<script>
function isvalid(){

  var user = document.form.username.value;
  var pass = document.form.password.value;
  if(user.length=="" && pass.length==""){

    alert("Username and password field is empty");
    return false;
  }

  else{

    if(user.length==""){

      alert("username is empty");
    }
    if(pass.length==""){

      alert("password is empty");
      return false;
    }
  }
}

</script>
    
</body>
</html>