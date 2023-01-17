<?php
require_once("connection.php");
$idayi =$_GET["deletewaliid"];

$delete = "DELETE FROM `medicalinfo` WHERE Id = $idayi";
mysqli_query($conn,$delete);
header("location:read.php");


?>