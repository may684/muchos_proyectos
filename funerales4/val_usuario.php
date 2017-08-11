<?php

  session_start();

  if ($_SESSION['tipo_user'] != 'a' or $_SESSION['tipo_user'] !='u')
  { 
    if($_SESSION['status_user'] != "ACTIVO")
      {
        
    echo $_SESSION['tipo_user'];
    echo $_SESSION['status_user'];
        echo '<script>';
          echo 'window.location="index.php";';
        echo '</script>';
      } 
    
  }
?>

