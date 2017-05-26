<?php
error_reporting(1);
session_start();
require_once 'Model/restrictions.php';
$objRestriction =new restrictions();
$objRestriction->loginrestriction();
?>
<?php



require_once 'Model/connect.php';
session_start();
$id=$_SESSION['userid'];

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
						
<table id="datatable" class="table datatable">
												
												<thead>
													<tr>
														<th>id</th>
														<th>Name</th>
														<th>Email</th>
														<th>Phone</th>
														<th>Current sh</th>
														<th>Group ID</th>
														<th>Status</th>
														<th>Actions</th>
														<th>Cash</th>
													</tr>
												</thead>
												<tbody><?php
								$sql = "SELECT * from users";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
													while($row = mysqli_fetch_assoc($result)) {
													?>
													<tr>
														<td><?= $row["id"]?></td>
														<td><?= $row["name"]?></td>
														<td><?= $row["email"]?></td>
														<td><?= $row["phone"]?></td>
														<td><?= $row["cash"]?></td>
														<td><?= $row["group_id"]?></td>
														<td><?= $row["status"]?></td>
														<td>
														<?php if($row["status"] == 0){
															?>
															<a class="btn btn-success" href="compare.php?change_status=1&id=<?= $row['id']; ?>&status=1">Active</a>
															<?php
															}else{?>
															<a class="btn btn-danger" href="compare.php?change_status=1&id=<?= $row['id']; ?>&status=0">InActive</a>
															<?php }?>
														</td>
														<td><form action="controller/userProcess.php" method="post"><input type="hidden" name="upcid" value="<?= $row["email"]?>" name=""><input type="text" name="newCash" value="<?php echo $row["cash"];?>" placeholder="update cash" class="form-control"><button type="submit" name="btnManage" value="updateCash" class="btn btn-primary navbar-btn">Update</button></form></td>
													</tr>
													<?php
													}
													} else {
													echo "<tr><td colspan='6' align='center'><strong>0 results</strong></td></tr>";
													}
												?></table>
	<?php

?>


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
	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/wysihtml5/0.3.0/wysihtml5.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>

<link rel="stylesheet" href="assets/js/bootstrap-wysihtml5.css">

<script src="assets/js/bootstrap-wysihtml5.js"></script>


		
		<script>
		$(document).ready( function () {
		$('.datatable').DataTable();
		} );

</script>

</body></html>