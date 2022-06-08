<?php 
require_once 'db.php';

	$id =$_GET['id'];

	mysqli_query($connect, "DELETE FROM `task` WHERE `task`.`id` = '$id'");

	header('Location:../index.php');
?>