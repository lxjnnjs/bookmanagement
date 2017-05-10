<?php
   
$serverName = "localhost";
$uid = "sa";
$pwd = "xw19961029";

$connectionInfo = array("UID"=>$uid,"PWD"=>$pwd,"Database"=>"BookManagement");

$con = mssql_connect($serverName, $uid, $pwd);
    if(!$con){
     die('Could not connect' );
    }
	else echo '连接成功';

    //SELECT 数据库

    $result=mssql_select_db('BookManagement',$con);
    $username=$_POST['username'];
    $passwd=$_POST['password'];
    $_SESSION['sno']=$username;
    var_dump($_SESSION['sno']);
    $result = mssql_query("SELECT * FROM users");

    while($row = mssql_fetch_array($result))
      {

		  
          if($username == trim($row['username']) &&
              $passwd == trim($row['passwd']) && $row['flag']==1){
               echo "<script language='javascript'>alert('读者登录成功!');window.location='main.php';</script>";
          }
          if($username == trim($row['username']) &&
              $passwd == trim($row['passwd']) && $row['flag']==2){
              echo "<script language='javascript'>alert('管理员登录成功!');window.location='main-gly.php';</script>";
          }
         

      }

      echo "<script language='javascript'>alert('您输入的用户名或密码错误，请重新输入！');window.location='login.html';</script>";
 ?>
