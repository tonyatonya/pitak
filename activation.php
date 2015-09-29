<!DOCTYPE html>
<html lang="en" class="login">
<head>
<title>IMS SYSTEM Activation Account</title>
<?php include('inc_head.php'); ?>
</head>
<body style="background:none;" class="registor">
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
	<div class="container" style="margin-top: 80px;">
		<div class="row">
			<div class="col-xs-12">
				<h2>Activation Complete</h2>
			</div>
			<div class="col-xs-6 col-xs-offset-3">
				<p style="text-align: center; color: white;">
					Thank you for activation your account
				</p>
			</div>
		</div>
	</div>
</body>
</html>