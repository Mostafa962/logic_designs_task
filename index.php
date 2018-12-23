<!DOCTYPE html>
<html>
<head>
	<title>Login Design Task</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<style type="text/css">
		body{
			overflow-x: hidden;
		}
	</style>
</head>
<body>
	<h4>Logic Design Task</h4>
<form method="post" action="" enctype="multipart/form-data" id="form">
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<input type="file" name="file" id="file" required="" class="form-control">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
			<input type="submit"  id="submit" class="btn btn-info" value="send">
		</div>
		</div>
	</div>
</form>
		<div class="files" style="width: 25%">
			<?php
				require_once "process.php";
			?>
		</div><br class="clearBoth" />
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>