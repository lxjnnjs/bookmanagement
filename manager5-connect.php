<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=gbk">
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
</head>
<body>
<div id="formbackground" style="position:absolute; z-index:-1;"><img src="6.jpg" height="100%" width="100%"/></div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="row-fluid">
				<div class="col-xs-6 span9">
				</div>
				<div class="col-xs-6 span3">
					 <button class="btn btn-small btn-block" type="button"><a href="login.html">登出</a></button>
				</div>
			</div>
			<h3 class="text-center">
				<strong><tt><strong>图书管理系统</strong></tt></strong>
			</h3>
			<div class="row-fluid">
				<div class="col-xs-3 span3" >
					 <button class="btn btn-large btn-block" type="button" ><a href="main-gly.php">主页</a></button>
				</div>
				<div class="col-xs-3 span3">
					 <button class="btn btn-large btn-block" type="button"><a href="personinfo-gly.php">读者个人信息</a></button>
				</div>
				<div class="col-xs-3 span3">
					 <button class="btn btn-large btn-block" type="button"><a href="bookinfo-gly.php">图书信息</a></button>
				</div>
				<div class="col-xs-3 span3">
					 <button class="btn btn-large btn-block" type="button"><a href="borrowinfo-gly.php">借阅信息</a></button>
				</div>
			</div>
		</div>
	</div>
<?php
   
$serverName = "localhost";
$uid = "sa";
$pwd = "xw19961029";

$connectionInfo = array("UID"=>$uid,"PWD"=>$pwd,"Database"=>"BookManagement");

$con = mssql_connect($serverName, $uid, $pwd);
    if(!$con){
     die('Could not connect' );
    }

    //SELECT 数据库

    $result=mssql_select_db('BookManagement',$con);
    $BNO=$_POST['BNO'];
    $GCL=$_POST['GCL'];
	$KCL=$_POST['KCL'];
	$TLIMIT=$_POST['TLIMIT'];
    
	$sql="insert into Bborrow VALUES('$BNO','$GCL','$KCL','$TLIMIT')";
	$sql = iconv('utf-8', 'gbk', $sql);
	mssql_query($sql,$con);
	$result = mssql_query("SELECT * FROM Bborrow");
echo "更新后图书借阅信息如下：";

echo "<table border='1'>
<tr>
<th>图书编号</th>
<th>馆藏量</th>
<th>库存量</th>
<th>借阅期限</th>
</tr>";

while($row = mssql_fetch_array($result))
{
	echo "<tr>";
    echo "<td>" . $row['BNO'] . "</td>";
	echo "<td>" . $row['GCL'] . "</td>";
	echo "<td>" . $row['KCL'] . "</td>";
	echo "<td>" . $row['TLIMIT'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mssql_close($con);
 ?>

</div>
</body>
</html>
</div>
</body>
</html>