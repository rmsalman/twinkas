<?php
error_reporting(1);
session_start();
require_once 'Model/restrictions.php';
$objRestriction =new restrictions();
require_once 'Model/user.php';
$objuser =new User();
$objRestriction->loginrestriction();



require_once 'Model/connect.php';

$id = $me=$_SESSION['userid'];
$cash = "SELECT cash, group_id  from users  where id = '$id'";
$cash_result = mysqli_query($conn, $cash);
if (mysqli_num_rows($cash_result) > 0) {
    while($cashrow = mysqli_fetch_assoc($cash_result)) {
    	$cashamnt = $cashrow['cash'];
    }}


?>
<!DOCTYPE html>
<!-- saved from url=(0037)/ -->
<html lang="en" class=" ">
	<head>
		<?php require_once'includes/external_files.php'; ?>


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">

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
			
			
			<div class="right_col" role="main" style="min-height: 816px;">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3><i class="fa fa-money"></i> My Wallet. <small> <a class="btn btn-sm btn-primary" style="" href="https://twinkas.com/twink/leonora&amp;redirect"><i class="fa fa-bolt"></i> Invite Member via Referral</a> </small></h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>All my Referred Log. (
									<font color="green">Can Receive</font> ) </h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
									</li>
									<li><a class="close-link"><i class="fa fa-close"></i></a>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
					

							<div class="row">
								<div class="col-md-9 col-sm-9 col-xs-12">

									

<div id="datatable_wrapper">
	

<table id="datatable" class="table">
	
<thead>
	<tr>
		<th>id</th>
		<th>Group (Price)</th>
		<th>Status</th>
		<th>Expected Income</th>
		<th>Fullname (Sex)</th>
		<th>Mobile(Email)</th>
	</tr>
</thead>
<tbody><?php
require_once 'Model/connect.php';
session_start();
$id=$_SESSION['userid'];


  $myEmail = $rowme['email'];



$sql = "SELECT w.*, g.name, g.price, u.name as user_name, u.gender, u.status, u.phone, u.email
		FROM wallet w
		LEFT JOIN groups g
		ON w.group_id= g.id
		RIGHT JOIN users u
		ON w.referal_user = u.email
		where user_id = '$myEmail'";
$result = mysqli_query($conn, $sql);
$Pending;
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
?>
	<tr>
		<td><?= $row["id"]?></td>
		<td><?= $row["name"]?> (N<?= $row["price"]?>)</td>
		<td>
	<?php
if($row['status']){
	echo '	<span class="label label-primary" style="width:100%; padding:5px"><i class="fa fa-check"></i> Credited </span>
		';
}else {
	echo '	<span class="label label-danger" style="width:100%; padding:5px"><i class="fa fa-cross"></i> Pending </span>
		';
		$Pending=$Pending+$row["price"];
}
	?>	
		</td>
		<td>N<?= $row["price"] * 0.025?></td>
		<td><?= $row["user_name"]?> (<?php if($row["gender"] == 'm'){echo 'male';}else {echo 'famale';} ?>)</td>
		<td><?= $row["phone"]?> (<?= $row["email"]?>)</td>
	</tr>
<?php
    }
} else {
    echo "<tr><td colspan='6' align='center'><strong>0 results</strong></td></tr>";
}
?></table>

</div>	

								</div>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<div class="row top_tiles">
										<a href="https://twinkas.com/private/wallet">
											<div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="tile-stats">
													<div class="icon"><i class="fa fa-money"></i></div>
													<div class="count" style="font-size:32px"> Pending</div>
													<h3 style="color:red">N<?php echo $Pending * 0.025; ?></h3>
													<p>Unactivated Money. Pending Users</p>
												</div>
											</div>
										</a>
										<a href="https://twinkas.com/private/wallet">
											<div class="animated flipInY col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="tile-stats">
													<div class="icon"><i class="fa fa-money"></i></div>
													<div class="count" style="font-size:32px"> Current</div>
													<h3 style="color:green">N<?= $cashamnt; ?></h3>
													<p>Current Amount in my Wallet</p>
												</div>
											</div>
										</a>
									</div>
									<a href="wallet" class="btn btn-primary btn-sm btn-block"> <i class="fa fa-bolt"></i> My Referrals </a><a href="wallet-log" class="btn btn-default btn-sm btn-block"> <i class="fa fa-table"></i> Transfer Log </a> </div>
								</div>
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
	<!--Start of Tawk.to Script-->

	<!--End of Tawk.to Script-->
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



<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>

	
<script>
	   $(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>


</body></html>