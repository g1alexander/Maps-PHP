<?php 

  session_start();
  ob_start();

  require_once'conection.php';

  if($_POST){
    // data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $lat = $_POST['lat'];
    $log = $_POST['log'];
    $type = $_POST ['type'];
  
    // insert database
    $sql = "INSERT INTO markers VALUES(NULL, '$name', '$address', $lat, $log, '$type')";
    
    $result = mysqli_query($connection, $sql);
    if(mysqli_insert_id($connection)){
      $_SESSION['correct'] = "<span style='color:green';> todo correcto</span>";
      header('Location: index.php');

    }
  
  }

?>