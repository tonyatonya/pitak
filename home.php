<!DOCTYPE html>
<html lang="en">
<head>
<title>IMG SYSTEM</title>
<?php include('inc_head.php'); ?>
</head>
<body>
<div class="container-fluid fixarea">
	<?php include('inc_header.php'); ?>
	<div class="right">
		<?php include('inc_rightmenu.php'); ?>
	</div>
	<div class="left">
		
		<div class="middle floorplan homeplan" style="background-image:url(images/floorplan/home.jpg);"></div>
		<div class="bottom home">
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
			var _content = $(".contents .content-child");
			menuBtn.click(function(){
				_index = $(this).parent().index();
				_content.each(function(){
					if($(this).hasClass("active")==true){
						$(this).hide().removeClass("active");
					}
				})
				_content.eq(_index).show().addClass("active");
			});
		})
	</script>
</body>
</html>