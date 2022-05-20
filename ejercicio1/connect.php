<?php

  $host = 'localhost';
  $dbname = 'prueba';
  $user = 'root';
  $pass = '';

  
  //CONEXION A LA BASE DE DATOS PRUEBA
  try{

    $name = $_POST['nombre'];
    $lastname = $_POST['apellido'];
    $id = $_POST['identificador'];

    $connect = new PDO("mysql:host=$host;dbname=prueba", $user, $pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['registrar'])){

      $sql = "INSERT INTO `empleados`(`id`,`nombre`, `apellido`) VALUES (NULL, '$name', '$lastname')";
      $connect->exec($sql);
      echo "Se insertó exitosamente el registro";
  
    }

    if(isset($_POST['eliminar'])){
      $sql = "DELETE FROM `empleados` WHERE `id` = '$id'";
      $connect->exec($sql);
      echo "Se ha eliminado exitosamente el registro";
    }

    

  }catch(PDOException $error){

    echo "No se pudo conectar a la base".$error;

  }


  




?>