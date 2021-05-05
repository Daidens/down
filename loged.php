﻿<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="conf/css/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="conf/css/style.css">
	<link rel="icon" href="conf/images/user.ico" type="image/x-icon" />

</head>

<body>

	<div class="materialContainer">
		<div class="box">
			<div class="title">登录</div>
			<form action="php_loged/rece_d.php" method="post">
			<div class="input">
				<label for="name">用户名</label>
				<input type="text" name="name" id="name">
				<span class="spin"></span>
			</div>
			<div class="input">
				<label for="pass">密码</label>
				<input type="password" name="pass" id="pass">
				<span class="spin"></span>
			</div>
			<div class="button login">
				<button>
					<span>登录</span>
					<i class="fa fa-check"></i>
				</button>
			</div>
			</form>
			<a href="javascript:" class="pass-forgot">忘记密码？</a>
		</div>

		<div class="overbox">
			<div class="material-button alt-2">
				<span class="shape"></span>
			</div>
			<div class="title">注册</div>
			
			
			<form action="php_register/save_user.php" method="post">
				<div class="input">
					<label for="regname">用户名</label>
					<input type="text" name="regname" id="regname">
					<span class="spin"></span>
				</div>
				<div class="input">
					<label for="regpass">密码</label>
					<input type="password" name="regpass" id="regpass">
					<span class="spin"></span>
				</div>
				<div class="input">
					<label for="reregpass">确认密码</label>
					<input type="password" name="reregpass" id="reregpass">
					<span class="spin"></span>
				</div>
				<div class="button">
					<button>
						<span>注册</span>
					</button>
				</div>
			</form>
		</div>

	</div>

	<script src="conf/js/jquery.min.js"></script>
	<script src="conf/js/index.js"></script>

</body>

</html>