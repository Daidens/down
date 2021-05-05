<?php
include'../db.php';

$sql = "SELECT * FROM uinfo WHERE username='{$username}'";
$vuser = read($sql, $pdo);
if ($vuser){
	echo '用户名已存在';
		exit;
}
