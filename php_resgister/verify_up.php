<?php
function var_up($p1, $p2,$p3){
if($p2 <> $p3){
			exit('错误：密码长度不符合<a href="javascript:history.back(-1);">返回重试<a/>');
		
}
if(trim($p1)=='' or trim($p2) == ''){
    		echo '注册内容不能为空';
   			 exit;
}
if(strlen($p1)<2){
			echo '用户名长度过短';
			exit;
}
if (strlen($p2)<6){
			echo '密码长度不小于六位';
			exit;
}
$str = " ,.，。《》<>/?{}【】[]\|、=-+——（）()!@#$%^&￥……&*！~·`？;:；：";

for ($i=0;$i<strlen($p1);$i++){
	for ($j=0;$j<strlen($str);$j++){
			if ($p1[$i]==$str[$j]){
				echo '用户名不能为特殊字符和中文字符(除下划线)';
				exit;
			}
	}
			
}
}
var_up($username,$pwd,$_POST['reregpass']);



