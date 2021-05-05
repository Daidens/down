<?php
$name=$_POST['name'];
$passw=$_POST['pass'];
include'../db.php';
include 'class_log.php';


 $Log = new Sin();
$admin = $Log->log($name, $pdo, $passw);

