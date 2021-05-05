 <?php
include('db.php');
$sql = "SELECT * FROM msg ORDER BY id DESC";

//读取数据库中的数据
$rows = read($sql, $pdo);
$admin=$_GET['dropby'];
 session_start();
    $_SESSION['admin']="$admin"; 

?> 


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="conf/images/bit.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>云端留言板</title>
</head>

<body>
	
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php 
                if (!$admin){
                echo '<li class="nav-item">
                    <a class="nav-link" href="loged.php">login</a>
                </li>';
                }else {
                	echo '<li class="nav-item">
                    <a class="nav-link" href="#"><img src="conf/images/dropby.jpg" alt="Big Boat" class="rounded-circle"></a>
                </li>';
                }
                ?>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <?php echo '</div>' ?>
    <div class="container">

        <div class="jumbotron">
            <h1 class="display-4">我的留言板3.0</h1>
            <p class="lead">这是我的第一个学习作品，来自sodevel.com的十天学会PHP课程以及作者，新版本增加用户注册登录功能</p>
           
        </div>
        <form action="php_register/save_msg.php"."?dropby1=$admin" method="post">
            <div class="row">
                <div class="col-sm-12">
                    <div class='form-group'>
                        <textarea name="content" class='form-control' rows="4" placeholder="留言内容"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                	<?php 
                if (!$admin){
                echo '<div class="form-group">
                        <input type="text" name="username" placeholder=" 用户名">
                    </div>';
                }
                 ?>   
                </div>
                <div class="col-sm-6 d-flex">
                    <div class='form-group ml-auto'>
                        <input type="submit" class="btn btn-primary" value="提交留言">
                    </div>
                </div>
            </div>
        </form>
        <?php foreach ($rows as $row) {

        ?>

            <div class='row'>

                <div class='col-sm-12 '>
                    <div class='border rounded p-2 mb-2'>
                        
                        <div style="float: right;color:dimgrey;font-size:small"><?php echo date('Y-m-d H:i:s', $row['intime']) ?></div>
                        
                        <div class='text-primary'><?php echo $row['id'].'楼',"\t",$row['name']; ?></div>

                        <div style="font-size:20px;padding-top:5px"><?php echo $row['info']; ?></div>
                    </div>
                </div>



            </div>
        <?php } ?>

    </div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</body>

</html>