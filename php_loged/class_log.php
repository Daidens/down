<?php
//封装登录类
class Sin
{
function log($name,$pdo,$passw){

$sql = "SELECT * FROM uinfo WHERE username='{$name}'";
$vuser = read($sql, $pdo);
$care = '登录成功';

if ($vuser){
	
	if ($passw == $vuser[0]['pwd']){
		//给另一个文件一个信号
		
		echo "<script language='javascript'>
alert('登录成功')
location.href='../index.php'
</script>";
		
	}else{
	
		echo '密码错误';
	}
	

		
	
	
}else {
	echo'用户名不存在';
	
}
}

}