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
		<?php include('inc_toptab.php'); ?>
		<div class="middle contents">
			<div class="content-child active">1</div>
			<div class="content-child">2</div>
			<div class="content-child">3</div>
			<div class="content-child">4</div>
		</div>
		<div class="bottom"></div>
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