<?php


    /*  
    1、编写数据库
    2、编写SQL
    3、执行SQL*/
	$time = time();
    $dsn = 'mysql:dbname=test;host=127.0.0.1';
    $pdo = new PDO($dsn,'root','123');
    
    //var_dump($pdo);

    // $sql = "INSERT INTO test (name, info ) VALUES ('Aiden','是一个人名')";
    // $sth = $pdo->prepare($sql);
    // $sth->execute();
    // var_dump($sth);

    // $sql = "SELECT * FROM test";
    // $sth = $pdo->prepare($sql);
    // $sth->execute();

    // $data = $sth->fetchAll();
    // var_dump($data['5']['name']);

    function write($pdo,$sql){
        //将SQL送入prepare方法
        $sth = $pdo->prepare($sql);
    
        //执行SQL
        $sth->execute();
     }

     function read($sql,$pdo){
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $rows = $sth->fetchAll();
        return $rows;
    }
    
