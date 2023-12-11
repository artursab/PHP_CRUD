<?php 

if(isset($_GET["id"])) {
  $id = $_GET["id"];

$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "myshop";

$connection = new mysqli($server_name, $user_name, $password, $database);

  $sql = "DELETE FROM clients WHERE id = $id";
  $connection->query($sql);

  header("location: ./index.php");
  exit;
}