<?php
error_reporting(1);
session_start();
require_once 'Model/restrictions.php';
$objRestriction =new restrictions();
$objRestriction->loginrestriction();
?>



<!DOCTYPE html>
<!-- saved from url=(0037)/ -->
<html lang="en" class=" ">
	<head>
		<?php require_once'includes/external_files.php'; ?>
	
	<style>
	@media screen and (min-width: 1200px ){
		
			.style_wd {
  			  width: 20%;
			}
			ul.list-unstyled.text-left {
    min-height: 250px;
}
		}
	</style>
	</head>
	<body class="nav-md"><span id="alertSh"></span>
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href=index.php class="site_title"><i class="fa fa-info-circle"></i> <span>TwinKas </span></a>
					</div>
					<div class="clearfix"></div>
					
					<?php
						/*including sidebar */
						require_once'includes/sidebar.php';
					?>
					<div class="sidebar-footer hidden-small">
						<a href="" data-toggle="tooltip" data-placement="top" title="Settings" style="color:#FFF">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a>
						<a href="" data-toggle="tooltip" data-placement="top" title="FullScreen" style="color:#FFF">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
						</a>
						<a href="" data-toggle="tooltip" data-placement="top" title="Lock" style="color:#FFF">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
						</a>
						<a href="?Logout" data-toggle="tooltip" data-placement="top" title="Logout" style="color:#FFF">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
				</div>
			</div>
			
			<div class="top_nav">
				<?php include_once'includes/navmenue.php';?>
			</div>
			
			
			<div class="right_col" role="main" style="min-height: 796px;">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3><i class="fa fa-sitemap"></i> Twinkas Packages</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 styled_wd">
							<div class="alert alert-info" onclick="$(this).hide()"> <b> <i class="fa fa-smile-o"></i> Hello!</b> Please do not Join if you dont have money to pay your sponsor. Packages may be Withdrawn in some cases. You can always check back. Getting a Sponsor may take some time. Please be Patient</div> </div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
									<div class="x_title">
										<h2>Packages we have</h2>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">
<?php
require_once 'Model/connect.php';
$sql = "SELECT * FROM `groups`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
?>
										<div class="col-lg-2 col-sm-6 col-xs-12 style_wd">
											<div class="pricing">
												<div class="title">
													<h2><?= $row['name'];?></h2>
													<h1>N<?= $row['price'];?></h1>
												</div>
												<div class="x_content">
													<div class="">
														<div class="pricing_features">
															<?= $row['body'];?>
														</div>
													</div>
													<div class="pricing_footer" id="footer_1">
<form action="compare.php" method="POST">
<input type="hidden" name="group" value="<?= $row['id'];?>">
<?php
$id = $me=$_SESSION['userid'];
$cash = "SELECT cash, group_id  from users  where id = '$id'";
$cash_result = mysqli_query($conn, $cash);
if (mysqli_num_rows($cash_result) > 0) {
    while($cashrow = mysqli_fetch_assoc($cash_result)) {

    	if($cashrow['group_id'] == $row['id']){
    		echo '<button class="alert alert-primary" disabled="disabled" style="pointer-event:none;"> <b><i class="fa fa-frown-o"></i>Selected!</b></button>';
    	}else{
?>
<?=($row['price'] > $cashrow['cash'] ? '<button class="alert alert-danger" disabled="disabled" style="pointer-event:none;"> <b><i class="fa fa-frown-o"></i> Active Now!</b></button>' : '<button type="submit" class="alert alert-success" name="group_submit"> <b><i class="fa fa-smile-o"></i> Active Now!</b></button>');?>				
<?php }}}?>
</form>
													</div>
													<div class="packageLoader_1"></div>
												</div>
											</div>
										</div> 
<?php }} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /page content -->
<!-- footer content -->
<footer>
	<div class="pull-right">
		<a href="http://twinkas.com/">TwinKAS</a> and <a href="https://colorlib.com/">Gentelella</a>
	</div>
	
	
	<style type="text/css" rel="stylesheet">
		#fixedFooter img {
			position: fixed; right:0px; bottom: 0px; padding:2px; border:1px solid #000; background: #FFF; font-size:10px; width:30px;
		}
	</style>
	<div id="fixedFooter">
		<img src="./Dashboard _ Twinkas_files/favicon.png">
	</div>
</footer>
<!-- /footer content -->
</div>

<!-- jQuery -->
<script src="./Dashboard _ Twinkas_files/jquery.min.js.download"></script>
<!-- Bootstrap -->
<script src="./Dashboard _ Twinkas_files/bootstrap.min.js.download"></script>
<!-- FastClick -->
<script src="./Dashboard _ Twinkas_files/fastclick.js.download"></script>
<!-- NProgress -->
<script src="./Dashboard _ Twinkas_files/nprogress.js.download"></script>
<!-- Skycons -->
<script src="./Dashboard _ Twinkas_files/skycons.js.download"></script>
<!-- Custom Theme Scripts -->
<script src="./Dashboard _ Twinkas_files/custom.min.js.download"></script>
<script src="./Dashboard _ Twinkas_files/config.js.download"></script>
<script src="./Dashboard _ Twinkas_files/jquery.pwdMeter.js.download"></script>
<script src="./Dashboard _ Twinkas_files/frontend.js.download"></script>
<!-- Counter Down Scripts -->
<script src="./Dashboard _ Twinkas_files/jquery.countdown.js.download"></script>


</body></html>