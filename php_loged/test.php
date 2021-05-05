<?php
    session_start();
    $_SESSION['val']='123';
    echo $_SESSION['val'];
?>
<?php
    session_start();
    echo $_SESSION['val'];    //直接输出全局变量val.
?>
<?php
    setcookie("user", "SUVLLIAN", time()+3600);
    //创建一个名为user的cookie变量，它的值是Alex Porter。它将在一个小时以后过期，也就是不能访问了
    echo $_COOKIE['user'];    //还要刷新一下页面才可以生效
?>