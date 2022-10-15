<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    </style>
</head>
<body style="overflow-y: hidden;">
<nav aria-label="breadcrumb" style="height: 5%; top: 0; z-index: 10;">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
      </ol>
    </nav>

    <button type="button" class="btn btn-primary" style="position: fixed;z-index: 10; right: 2%;bottom: 2%;border-radius: 50%; width: 3ch;line-height: 0.1ch;height:3ch;font-size: 5ch;text-align: center;justify-content: center;">+</button>
    <div class="d-block w-100" style="overflow-y: scroll;height: 90vh;">
        <div class="p3 d-flex w-100 h-auto flex-wrap">
            <div class="card" style="width: 12rem; margin: 0 1em 1em 1em;">
              <img src="..." class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Placeholder title</h5>
                <a href="#" class="btn btn-primary">Placeholder btn</a>
              </div>
            </div>
      
            <div class="card" style="width: 12rem; margin: 0 1em 1em 1em;">
              <img src="..." class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Placeholder title</h5>
                <a href="#" class="btn btn-primary">Placeholder btn</a>
              </div>
            </div>
      
            <div class="card" style="width: 12rem; margin: 0 1em 1em 1em;">
              <img src="..." class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Placeholder title</h5>
                <a href="#" class="btn btn-primary">Placeholder btn</a>
              </div>
            </div>
      
            <div class="card" style="width: 12rem; margin: 0 1em 1em 1em;">
              <img src="..." class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Placeholder title</h5>
                <a href="#" class="btn btn-primary">Placeholder btn</a>
              </div>
            </div>
      
            <div class="card" style="width: 12rem; margin: 0 1em 1em 1em;">
              <img src="..." class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Placeholder title</h5>
                <a href="#" class="btn btn-primary">Placeholder btn</a>
              </div>
            </div>
      
            <div class="card" style="width: 12rem; margin: 0 1em 1em 1em;">
              <img src="..." class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Placeholder title</h5>
                <a href="#" class="btn btn-primary">Placeholder btn</a>
              </div>
            </div>
      
            <div class="card" style="width: 12rem; margin: 0 1em 1em 1em;">
              <img src="..." class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Placeholder title</h5>
                <a href="#" class="btn btn-primary">Placeholder btn</a>
              </div>
            </div>
      
            <div class="card" style="width: 12rem; margin: 0 1em 1em 1em;">
              <img src="..." class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Placeholder title</h5>
                <a href="#" class="btn btn-primary">Placeholder btn</a>
              </div>
            </div>
    </div>
   
</body>
</html>
