<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
<style>
button{
	background:#2894ff;
	color:white;
	border:1px;
    width:220px;
	height:30px;
}
p {
	margin-bottom:20px;
	}
label{
	font-family: "Microsoft YaHei" ! important;
}

.xiaobiankuang{
	border:2px
}
</style>
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
	<form  action="manager-connect.php" method="post" style='text-align:center'>
    <p align="center"><label >读者号：</label><input type="text" name="RNO" class="xiaobiankuang"></p>
    <p align="center"><label>姓&nbsp;名：</label><input type="text" name="RNAME" class="xiaobiankuang"></p>
	<p align="center"><label>性&nbsp;别：</label><input type="text" name="RSEX" class="xiaobiankuang"></p>
	<p align="center"><label>职&nbsp;业：</label><input type="text" name="RWORK" class="xiaobiankuang"></p>
	<button type:"submit" >增加该读者信息</button>
	</form>
	<form  action="manager2-connect.php" method="post" style='text-align:center'>
	<p align="center"><label >读者号：</label><input type="text" name="RNO" class="xiaobiankuang"></p>
	<button type:"submit" >删除该读者信息</button>
	</form>
	<div class="row-fluid">
		<div class="span12">
			<h2 align="center" color="#00ffff">
				<em><strong><em>welcome to fzu library!</em></strong></em>
			</h2>
		</div>
	</div>
</div>
</body>
</html>