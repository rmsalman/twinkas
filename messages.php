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


$user = "SELECT * FROM users where id = '$id'";
$usersql  = mysqli_query($conn, $user );
if (mysqli_num_rows($usersql ) > 0) {
	$Cntsentuser  = mysqli_fetch_assoc($usersql);
	$userEmail  =  $Cntsentuser['email'];
}



$COUNT = "SELECT COUNT('id') as Cnt FROM messages m where m.msg_to = '$userEmail'";
$resultCOUNT = mysqli_query($conn, $COUNT);
if (mysqli_num_rows($resultCOUNT) > 0) {
	$Cnt = mysqli_fetch_assoc($resultCOUNT);
	$cnt =  $Cnt['Cnt'];
}else {
	$cnt ="";
}


$COUNTsent = "SELECT COUNT('id') as Cnt FROM messages m where m.msg_from = '$userEmail'";
$resultCOUNTsent  = mysqli_query($conn, $COUNTsent );
if (mysqli_num_rows($resultCOUNTsent ) > 0) {
	$Cntsent  = mysqli_fetch_assoc($resultCOUNTsent );
	$cntsent  =  $Cntsent ['Cnt'];
}else {
	$cntsent = "";
}







?>
<!DOCTYPE html>
<!-- saved from url=(0037)/ -->
<html lang="en" class=" ">
	<head>
		<?php require_once'includes/external_files.php'; ?>
		<style>
			input.form-control.input-sm {
    max-width: 90% !important;
}
		</style>
	</head>
	<body class="nav-md"><span id="alertSh"></span>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
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
			
			
			<!--RIGHT COLUMN-->
			<div class="right_col" role="main" style="min-height: 776px;">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3><i class="fa fa-envelope"></i> Messaging <small> messages you have received</small></h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Twinkas Inbox<small>User Mail</small></h2>
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
								<div class="col-sm-3 col-xs-12">
									<button id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</button>
									<a href="messages.php">
										<div class="mail_list">
											<div class="right" style="margin:10px 0 5px 0">
												<h3>Inbox (<?=$cnt?>)
												<!-- <span class="badge bg-red pull-right">
												0 </span> -->
												</h3> </div>
											</div>
										</a>
										<a href="?sent">
											<div class="mail_list">
												<div class="right" style="margin:10px 0 5px 0"> <h3>Sent (<?= $cntsent; ?>)</h3> </div>
											</div>
										</a>
										
									</div>
									
									
									<div class="col-sm-9 col-xs-12 mail_view">
										<div class="inbox-body">

<?php 
if(isset($_GET['sent'])){
?>
										<table  class="table datatable">
												
												<thead>
													<tr>
														<th>id</th>
														<th>To</th>
														<th>Message</th>
														<th>Date</th>
													</tr>
												</thead>
												<tbody><?php
								$sql = "SELECT m.*, u.email, u.name 
										FROM messages m
										LEFT JOIN users u
										on m.msg_to = u.email
										where m.msg_from = '$userEmail'";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
													while($row = mysqli_fetch_assoc($result)) {
													?>
													<tr>
														<td><?= $row["id"]?></td>
														<td><?= $row["email"]?>(<?= $row["name"]?>)</td>
														<td><?= $row["msg_body"]?></td>
														<td><?= $row["created_at"]?></td>
													</tr>
													<?php
													}
													} else {
													echo "<tr><td colspan='6' align='center'><strong>0 results</strong></td></tr>";
													}
												?></table>


<?php



}else {
	?>
<table id="datatable" class="table datatable">
												
												<thead>
													<tr>
														<th>id</th>
														<th>From</th>
														<th>Message</th>
														<th>Date</th>
													</tr>
												</thead>
												<tbody><?php
								$sql = "SELECT m.*, u.email, u.name 
										FROM messages m	
										LEFT JOIN users u
										on m.msg_from = u.email
										where m.msg_to = '$userEmail'";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
													while($row = mysqli_fetch_assoc($result)) {
													?>
													<tr>
														<td><?= $row["id"]?></td>
														<td><?= $row["email"]?>(<?= $row["name"]?>)</td>
														<td><?= $row["msg_body"]?></td>
														<td><?= $row["created_at"]?></td>
													</tr>
													<?php
													}
													} else {
													echo "<tr><td colspan='6' align='center'><strong>0 results</strong></td></tr>";
													}
												?></table>
	<?php
}
?>


											
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel" style="box-shadow: 2px 2px 20px ; -o-box-shadow:4px 4px 20px ; -moz-box-shadow:4px 4px 20px ">
							<div class="x_title">
								<h2>All Menus Displayed </h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<a class="btn btn-default btn-sm" href="index.php"><i class="fa fa-home"></i> Dashboard</a>
								<a class="btn btn-success btn-sm" href="packages.php"><i class="fa fa-sitemap"></i><span class="text"> Packages</span></a>
								<a class="btn btn-danger btn-sm" href="invite@refer.php"><i class="fa fa-chain"></i><span class="text"> Invitation (Ref link)</span></a>
								<a class="btn btn-success btn-sm" href="wallet.php"><i class="fa fa-money"></i><span class="text"> My Wallet</span></a>
								<a class="btn btn-success btn-sm" href="switch_account.php"><i class="fa fa-refresh"></i><span class="text"> Switch Account</span> </a>
								<a class="btn btn-primary btn-sm" href="Members_testmonies.php"><i class="fa fa-smile-o"></i><span class="text"> Testimony</span></a>
								<a class="btn btn-success btn-sm" href="My_Tickets.php"><i class="fa fa-ticket"></i><span class="text"> My Tickets</span> </a>
								<a class="btn btn-default btn-sm" href="call_center.php"><i class="fa fa-tty"></i><span class="text"> Call Center</span> </a>
								<a class="btn btn-danger btn-sm" href="https://twinkas.com/blog"><i class="fa fa-newspaper-o"></i><span class="text"> Visit Blog </span></a>
								<a class="btn btn-danger btn-sm" href="/?Logout"><i class="fa fa-sign-out"></i><span class="text">Log Out</span></a>
							</div>
							<font color="red">Red</font> buttons will take out of the portal while <font color="green">Green</font> buttons are for portal actions
						</div>
					</div>
				</div> </div>
				<!--RIGHT COLUMN-->
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
		<div class="compose col-md-6 col-xs-12" id="composer" style="display: block;">
<form action="compare.php" method="POST" class="msg_form" id="sendForm">
<div class="compose-header">
New Message
<button type="button" class="close compose-close">
<span>×</span>
</button>
</div>
<div class="compose-body">
<input required="required" class="form-control" placeholder="To: (Email Address)" type="text" name="mainl_to" id="to_mail">
<input class="form-control" placeholder="Heading: (Hello my dear)" type="text" name="msg_head" id="heading_text">
<textarea class="form-control"  name="msg_body" id="" cols="30" rows="10" name="msg_body" class="textarea"></textarea>
	<div class="compose-footer">
		<button id="send" class="btn btn-sm btn-success" name="send_msg" type="submit"><i class="fa fa-send"></i> Send Message</button>
	</div>
</form>
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
		<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/wysihtml5/0.3.0/wysihtml5.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>

<link rel="stylesheet" href="assets/js/bootstrap-wysihtml5.css">

<script src="assets/js/bootstrap-wysihtml5.js"></script>


		
		<script>
		$(document).ready( function () {
		$('.datatable').DataTable();
		} );


		$('.textarea').wysihtml5({
	"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
	"emphasis": true, //Italics, bold, etc. Default true
	"lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
	"html": false, //Button which allows you to edit the generated HTML. Default false
	"link": true, //Button to insert a link. Default true
	"image": true, //Button to insert an image. Default true,
	"color": false //Button to change color of font  
});



$('#composer').hide();


$('button.close.compose-close').click(function(){
$('#composer').hide(1000);
});



$('button#compose').click(function(){
$('#composer').toggle(1000);
});


		</script>
	</body></html>