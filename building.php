<!DOCTYPE html>
<html lang="en">
<head>
<title>IMG SYSTEM</title>
<?php include('inc_head.php'); ?>
</head>
<body>
<?php 
	//building name
	$bname = 'Syamindra'
?>
<div class="container-fluid fixarea">
	<?php include('inc_header.php'); ?>
	<div class="right">
		<?php include('inc_rightmenu.php'); ?>
	</div>
	<div class="left">
		<?php include('inc_toptab.php'); ?>
		<div class="middle floorplan building">
			<div class="floorplan-child active" style="background-image:url(images/floorplan/_0000_manifold.jpg);"></div>
			<div class="floorplan-child" style="background-image:url(images/floorplan/_0001_equipment.jpg); "></div>
			<div class="floorplan-child">Pre</div>
			<div class="floorplan-child">Status</div>
			<div class="floorplan-child" style="background-image:url(images/floorplan/_0002_er.jpg); "></div>
			<div class="floorplan-child" style="background-image:url(images/floorplan/_0003_generalcase.jpg); "></div>
			<div class="floorplan-child" style="background-image:url(images/floorplan/_0004_icu.jpg); "></div>
			<div class="floorplan-child" style="background-image:url(images/floorplan/_0005_or.jpg);"></div>
		</div>
		<div class="bottom building">
			<div class="left-section">
				<div class="bottombar">
					<span>
						<div class="title-bar">
						<div class="trail"></div>
						<div class="title-text">
							<span>
								OVER VIEW
								<div class="systemtime">23 AUG 2016    11:01 AM</div>
							</span>
						</div>
					</div>
					</span>
				</div>
				<div class="content-area">
					<div class="line-top"></div>
					<div class="content-frame">
						<div class="table-list">
							<div class="container-fluid">
								<?php for($i=0;$i<10;$i++){ ?>
								<div class="col-xs-4">
									<table class="status-tb">
										<tr><th colspan="2">Syamindra <div class="status-ball"></div></th></tr>
										<?php for($j=0;$j<7;$j++){ ?>
										<tr>
											<td>Medical Air</td>
											<td>4 x 15 HP</td>
										</tr>
										<?php } ?>
									</table>
								</div>
								<?php } ?>
							</div>
						</div>
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
	<script type="text/javascript">
		$(document).ready(function(){
			var menutab = $(".menutab");
			var menuBtn = $(".menutab li a"); 
			var _index = 0;
			var _content = $(".floorplan .floorplan-child");
			menuBtn.click(function(){
				_index = $(this).parent().index();
				_content.each(function(){
					if($(this).hasClass("active")==true){
						$(this).fadeOut().removeClass("active");
					}
				})
				_content.eq(_index).fadeIn().addClass("active");
			});
			
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