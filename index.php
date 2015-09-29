<!DOCTYPE html>
<html lang="en" class="login">
<head>
<title>IMG SYSTEM</title>
<?php include('inc_head.php'); ?>
<style>
	ul{
		margin: 0;
		padding: 0;
		margin-top: 80px;
		list-style: none;
	}
	ul li{
		padding-top: 15px;
		padding-bottom: 15px;
	}
	ul li a{
		cursor: pointer;
		width: 100%;
		display: block;
		-moz-transition: all 0.1s ease-in;
		-webkit-transition: all 0.1s ease-in;
		-o-transition: all 0.1s ease-in;
		transition: all 0.1s ease-in;
	}
	ul li a:hover{
		opacity: 0.5;
		-moz-transition: all 0.1s ease-in;
		-webkit-transition: all 0.1s ease-in;
		-o-transition: all 0.1s ease-in;
		transition: all 0.1s ease-in;
	}
</style>
</head>
<body style="background:none;">
<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-4 memberzone">
				<div class="holdcenter" style="display: inline; float:left">
					<table >
						<tr>
							<td><img src="images/companylogo.png" alt="companylogo" width="114" height="40" /></td>
						</tr>
					</table>
				</div>
				<img src="images/leftheader.png" alt="leftheader"  class="trail" />
				</div>
			<div class="col-xs-4 systemname">
				<?php
					if($zone == 'img'){ 
						$system_logo = 'systemlogo';
					}elseif($zone == 'ims'){
						$system_logo = 'systemlogo-iems';
					}else{
						$system_logo = 'systemlogo-ims';
					}
				?>
				<img src="images/<?php echo $system_logo; ?>.png" alt="systemlogo" width="227" height="50" />
			</div>
			<div class="col-xs-4 corpname">
				<div class="holdcenter" style="display: inline; float:right">
					<?php echo $system_logo; ?>
				</div>
				<img src="images/rightheader.png" alt="rightheader" class="trail"/>
			</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2" style="text-align: center;">
			<ul>
				<li>
					<a href="signin.php">
						<img src="images/iemsbanner.png" alt="iemsbanner" width="761" height="256">
					</a>
				</li>
				<li>
					<a href="signin.php">
						<img src="images/imgsbanner.png" alt="imgsbanner" width="761" height="256">
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>