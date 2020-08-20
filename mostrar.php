<?php 

  session_start();
  require_once'conection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <style>
      #map {
        height: 400px;
        width:100%;
      }

      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
  </style>
</head>
<body>


    <a href="index.php">mapa</a>
    
    <div>
    <div><strong>ingresa la direccion:</strong></div>
    </div>  
    <br>
    <form action="proceso.php" method="post">
        <div class="row">       
            <div class="col-sm-4">  
              <div class="form-group">
                  <input type='text' name='name' class="form-control" placeholder='nombre filial' /><br>
                  <input type='text' name='address' class="form-control" placeholder='Pon la dirección aquí' /><br>
                  <input type='text' name='lat' class="form-control" placeholder='latitud' /><br>
                  <input type='text' name='log' class="form-control" placeholder='longitud' /><br>
                  <input type='text' name='type' class="form-control" placeholder='tipo' /><br>
              </div>
            </div>
            <div class="form-group">
              <input type='submit' value='Localizar' class="btn btn-success" />
            </div>
        </div>
    </form> 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>