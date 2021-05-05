<?php

session_start();
$tusername =   $_SESSION['admin']; 

$content = $_POST['content'];
if ($tusername){
	$username = $tusername;
}else {
	$username = $_POST['username'];
}



if(trim($content)=='' or trim($username) == ''){
    echo '用户名和留言内容不能为空';
    exit;
}
if($username == 'admin'||$username == 'root'||$username == '领导人'){
    echo '用户名不能为敏感词';
    exit;
}

//链接到数据库
include('../db.php');



//编写SQL
 $sql = "INSERT INTO msg (name, info ,intime) VALUES ('{$username}','{$content}','{$time}')";
//echo $sql;  //测试语句是否正确

//将数据写入数据库
 write($pdo,$sql);

 //跳转回首页
 if ($tusername){
	header("location:../index.php?dropby=$username");
}else {
	header("location:../index.php");
}
 
 
