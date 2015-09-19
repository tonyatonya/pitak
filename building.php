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
				<?php include('inc_bottommenu.php'); ?>
				<div class="content-area">
					<div class="line-top"></div>
						<div class="content-frame status-all">
							<?php include('inc_pressure.php');?>
							<?php include('inc_temp.php');?>
							<div class="status-child active hour" data-panel-name="hour">
								<div class="graph-row">
									<div class="graph-child">
										<div class="pivot-name">Medical Air</div>
										<table class="status-tb">
											<tr>
												<td class="active" data-pump-active="A">
													Pump A 
													<div class="status"></div>
												</td>
												<td>
													<ul>
														<li>30000 Hr.</li>
														<li>S/N : XA123455</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td class="active" data-pump-active="B">
													Pump B 
													<div class="status"></div>
												</td>
												<td>
													<ul>
														<li>30000 Hr.</li>
														<li>S/N : XA123455</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td data-pump-active="C">
													Pump C 
													<div class="status"></div>
												</td>
												<td>
													<ul>
														<li>30000 Hr.</li>
														<li>S/N : XA123455</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td data-pump-active="D">
													Pump D 
													<div class="status"></div>
												</td>
												<td>
													<ul>
														<li>30000 Hr.</li>
														<li>S/N : XA123455</li>
													</ul>
												</td>
											</tr>
										</table>
										<div class="pump-sw">
											<span class="active" data-pump-sw="auto">Auto</span> /
											<span data-pump-sw="manual">Manual</span>
										</div>
									</div>
									<div class="graph-child">
										<div class="pivot-name">Surgical Air </div>
										<table class="status-tb">
											<tr>
												<td class="active" data-pump-active="A">
													Pump A 
													<div class="status"></div>
												</td>
												<td>
													<ul>
														<li>30000 Hr.</li>
														<li>S/N : XA123455</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td class="active" data-pump-active="B">
													Pump B 
													<div class="status"></div>
												</td>
												<td>
													<ul>
														<li>30000 Hr.</li>
														<li>S/N : XA123455</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td data-pump-active="C">
													Pump C 
													<div class="status"></div>
												</td>
												<td>
													<ul>
														<li>30000 Hr.</li>
														<li>S/N : XA123455</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td data-pump-active="D">
													Pump D 
													<div class="status"></div>
												</td>
												<td>
													<ul>
														<li>30000 Hr.</li>
														<li>S/N : XA123455</li>
													</ul>
												</td>
											</tr>
										</table>
										<div class="pump-sw">
											<span class="active" data-pump-sw="auto">Auto</span> /
											<span data-pump-sw="manual">Manual</span>
										</div>
									</div>
									<div class="graph-child">
										<div class="pivot-name">Vacuum</div>
										<table class="status-tb">
											<tr>
												<td class="active" data-pump-active="A">
													Pump A 
													<div class="status"></div>
												</td>
												<td>
													<ul>
														<li>30000 Hr.</li>
														<li>S/N : XA123455</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td class="active" data-pump-active="B">
													Pump B 
													<div class="status"></div>
												</td>
												<td>
													<ul>
														<li>30000 Hr.</li>
														<li>S/N : XA123455</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td data-pump-active="C">
													Pump C 
													<div class="status"></div>
												</td>
												<td>
													<ul>
														<li>30000 Hr.</li>
														<li>S/N : XA123455</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td></td>
												<td></td>
											</tr>
										</table>
										<div class="pump-sw">
											<span class="active" data-pump-sw="auto">Auto</span> /
											<span data-pump-sw="manual">Manual</span>
										</div>
									</div>
									<div class="graph-child">
										<div class="pivot-name">E-Vac</div>
										<table class="status-tb">
											<tr>
												<td class="active" data-pump-active="A">
													Pump A 
													<div class="status"></div>
												</td>
												<td>
													<ul>
														<li>30000 Hr.</li>
														<li>S/N : XA123455</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td class="active" data-pump-active="B">
													Pump B 
													<div class="status"></div>
												</td>
												<td>
													<ul>
														<li>30000 Hr.</li>
														<li>S/N : XA123455</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
											</tr>
										</table>
										<div class="pump-sw">
											<span class="active" data-pump-sw="auto">Auto</span> /
											<span data-pump-sw="manual">Manual</span>
										</div>
									</div>
								</div>
							</div>
							<div class="status-child" data-panel-name="gasflow">gasflow</div>
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