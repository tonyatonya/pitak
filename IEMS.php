<!DOCTYPE html>
<html lang="en">
<head>
<title>IEMS SYSTEM</title>
<?php include('inc_head.php'); ?>
</head>
<body>
<?php
	//zone name
	$zone = 'ims';
	//building name
	$bname = 'Building 1';
?>
<div class="container-fluid fixarea">
	<?php include('inc_header.php'); ?>
	<div class="right">
		<?php include('inc_rightmenu-amb.php'); ?>
	</div>
	<div class="left">
		<?php include('inc_toptab_iems.php'); ?>
		<div class="middle floorplan building">
			<div class="floorplan-child active expand"><?php include('inc_prehospital.php'); ?></div>
			<div class="floorplan-child expand"><?php include('inc_iems.php'); ?></div>
		</div>
	</div>
</div>
<?php include('inc_report_iems.php'); ?>
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