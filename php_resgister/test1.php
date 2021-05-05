<?php setcookie("user","Alex Porter", time()+3600)



?>






<html>
<head>
<meta charset="utf-8"> 
<title>W3Cschool教程(w3cschool.cn)</title> 
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("a").click(function(){
    $(this).hide();
  });
});
</script>
</head>
<body>

<?php 
//if (isset($_COOKIE["user"]))
//echo "Welcome " . $_COOKIE["user"] . "!";
//else 
//echo "Welcom guest!";
//
//echo "<br>";
print_r($_COOKIE);
?>
<p>点我消失!</p>
<a href="#">login</a>


</body>
</html>


