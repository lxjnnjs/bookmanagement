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
					 <button class="btn btn-small btn-block" type="button"><a href="login.html">�ǳ�</a></button>
				</div>
			</div>
			<h3 class="text-center">
				<strong><tt><strong>ͼ�����ϵͳ</strong></tt></strong>
			</h3>
			<div class="row-fluid">
				<div class="col-xs-3 span3" >
					 <button class="btn btn-large btn-block" type="button" ><a href="main-gly.php">��ҳ</a></button>
				</div>
				<div class="col-xs-3 span3">
					 <button class="btn btn-large btn-block" type="button"><a href="personinfo-gly.php">���߸�����Ϣ</a></button>
				</div>
				<div class="col-xs-3 span3">
					 <button class="btn btn-large btn-block" type="button"><a href="bookinfo-gly.php">ͼ����Ϣ</a></button>
				</div>
				<div class="col-xs-3 span3">
					 <button class="btn btn-large btn-block" type="button"><a href="borrowinfo-gly.php">������Ϣ</a></button>
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

    //SELECT ���ݿ�

    $result=mssql_select_db('BookManagement',$con);
    $RNO=$_POST['RNO'];
    $result = mssql_query("SELECT * FROM Reader");
	$sql="DELETE FROM Reader WHERE RNO='$RNO'";
	$sql = iconv('utf-8', 'gbk', $sql);
	mssql_query($sql,$con);
echo "���º������Ϣ���£�";
$result = mssql_query("SELECT * FROM Reader");
echo "<table border='1'>
<tr>
<th>���߱��</th>
<th>����</th>
<th>�Ա�</th>
<th>ְҵ</th>
</tr>";

while($row = mssql_fetch_array($result))
{
	echo "<tr>";
    echo "<td>" . $row['RNO'] . "</td>";
	echo "<td>" . $row['RNAME'] . "</td>";
	echo "<td>" . $row['RSEX'] . "</td>";
	echo "<td>" . $row['RWORK'] . "</td>";
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