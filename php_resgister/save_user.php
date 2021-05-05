<?php




$username = $_POST['regname'];
$pwd = $_POST['regpass'];
		

//验证注册信息
include 'verify_up.php';		

//验证注册信息中的用户名(已连接数据库)
include 'match_user.php';



 
 //写入数据到数据库
$sql = "INSERT INTO uinfo (username, pwd ,intime) VALUES ('{$username}','{$pwd}','{$time}')";
write($pdo, $sql);
echo "<script language='javascript'>
alert('注册成功')
location.href='../loged.php'
</script>";
//die;
//header('location:../loged.php');