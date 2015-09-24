<!DOCTYPE html>
<html lang="en">
<head>
<title>IMG SYSTEM</title>
<?php include('inc_head.php'); ?>
</head>
<body>
<?php 
	//building name
	$bname = 'Building 1';
?>
<div class="container-fluid fixarea">
	<?php include('inc_header.php'); ?>
	<div class="right">
		<?php include('inc_rightmenu.php'); ?>
		<?php include('inc_rightmenu-amb.php'); ?>
	</div>
	<div class="left">
		<?php include('inc_toptab.php'); ?>
		<div class="middle floorplan building">
			<div class="floorplan-child active">
				<?php include('inc_manifold.php'); ?>
			</div>
			<div class="floorplan-child">
				<?php include('inc_equipment.php'); ?>
			</div>
			<div class="floorplan-child"><?php include('inc_prehospital.php'); ?></div>
			<div class="floorplan-child"><?php include('inc_iems.php'); ?></div>
			<div class="floorplan-child">
				<?php include('inc_er.php'); ?>
			</div>
			<div class="floorplan-child"><?php include('inc_or.php'); ?></div>
			<div class="floorplan-child"><?php include('inc_icu.php'); ?></div>
			<div class="floorplan-child"><?php include('inc_general.php'); ?></div>
		</div>
		<div class="bottom building">
			<div class="left-section">
				<?php include('inc_bottommenu.php'); ?>
				<div class="content-area">
					<div class="line-top"></div>
						<div class="content-frame status-all">
							<?php include('inc_pressure.php');?>
							<?php include('inc_temp.php');?>
							<?php include('inc_hour.php');?>
							<?php include('inc_gasflow.php'); ?>
						</div>
					<div class="line-bottom"></div>
				</div>
			</div>
			<div class="right-section">
				<div class="bottombar">
					<span>
						<div class="title-bar">
						<div class="trail"></div>
						<div class="title-text">
							<span>
								MEDICAL GAS SYSTEMS STATUS
							</span>
						</div>
					</div>
					</span>
				</div>
				<div class="content-area">
					<div class="line-top"></div>
					<div class="content-frame">
						<?php include('inc_mstatus.php'); ?>
					</div>
					<div class="line-bottom"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('inc_report.php'); ?>
	<script type="text/javascript" src="js/mainjs.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			//intital building name
			var bname = '<?php echo($bname); ?>';
			$(".right-tab > ul > li ").each(function(){
				var _bname =  $(this).attr('data-building');
				if(_bname == bname){
					$(this).addClass("active");
				}
			})
		})
	</script>
</body>
</html>