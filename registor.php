<!DOCTYPE html>
<html lang="en" class="login">
<head>
<title>IMS SYSTEM Register</title>
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
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>Registration Form</h2>
			</div>
			<div class="col-xs-6 col-xs-offset-3">
				<p style="text-align: center; color: white;">
					Please register for access to the testing process . After successful registration Registration information will be sent to the registered email address.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3">
				<div class="form">
					<table>
						<tr>
							<th>Account Informatiom</th>
						</tr>
						<tr>
							<td>
								<div class="input-group">
							      <div class="input-group-addon"><span class="icon icon-user"></span></div>
							      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Name">
							    </div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-group">
							      <div class="input-group-addon"><span class="icon icon-mail3"></span></div>
							      <input type="text" class="form-control" id="exampleInputAmount" placeholder="email">
							    </div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-group">
							      <div class="input-group-addon"><span class="icon icon-mobile"></span></div>
							      <input type="text" class="form-control" id="exampleInputAmount" placeholder="mobile number">
							    </div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-group">
							      <div class="input-group-addon"><span class="icon icon-office"></span></div>
							      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Corperation Information">
							    </div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-group">
							      <div class="input-group-addon"><span class="icon icon-user-tie"></span></div>
							      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Position">
							    </div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="input-group">
							      <div class="input-group-addon"><span class="icon icon-shield"></span></div>
							      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Department">
							    </div>
							</td>
						</tr>
						<tr>
							<td><button class="register">Register</button> <button class="cancel">Cancel</button></td>
						</tr>
					</table>
				</div>	
			</div>
		</div>
	</div>
</body>
</html>