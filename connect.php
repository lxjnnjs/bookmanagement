<?php
   
$serverName = "localhost";
$uid = "sa";
$pwd = "xw19961029";

$connectionInfo = array("UID"=>$uid,"PWD"=>$pwd,"Database"=>"BookManagement");

$con = mssql_connect($serverName, $uid, $pwd);
    if(!$con){
     die('Could not connect' );
    }
	else echo '���ӳɹ�';

    //SELECT ���ݿ�

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
               echo "<script language='javascript'>alert('���ߵ�¼�ɹ�!');window.location='main.php';</script>";
          }
          if($username == trim($row['username']) &&
              $passwd == trim($row['passwd']) && $row['flag']==2){
              echo "<script language='javascript'>alert('����Ա��¼�ɹ�!');window.location='main-gly.php';</script>";
          }
         

      }

      echo "<script language='javascript'>alert('��������û���������������������룡');window.location='login.html';</script>";
 ?>
