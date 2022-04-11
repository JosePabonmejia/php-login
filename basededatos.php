<?php
$server ='localhost';
$username='root';
$password='password';
$database='database_login';

try
{
  $conn = new PDO("mysql:host-$server;dbname-$database;",$username,$password );//si todo esta correcto nos lleva a una base dedatos
}
catch (PDOException $e)
{
  die('Conected fail:' .$e->getMessage());
}

  ?>
