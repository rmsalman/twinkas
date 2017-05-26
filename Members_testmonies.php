<?php
error_reporting(1);
session_start();
	 require_once 'Model/restrictions.php';
	 $objRestriction =new restrictions();
	 $objRestriction->loginrestriction();
	require_once'Model/testimonies.php';
	$objtestimonies =new testimonies();
	$id=$_SESSION['userid'];//session id


	/*pagination*/
	$total=$objtestimonies->alltestmonies();
	$TotalRecords=$total->num_rows;
	
	$RecordPerPage=10;	
	$TotalPages=ceil($TotalRecords/$RecordPerPage);
	if(empty($_GET['s']))
	{
		$start=0;
	}
	else
	{
		$start=$_GET['s'];
	}
	$resultT=$objtestimonies->alltestmonieswithLimit($start,$RecordPerPage);
?>
<!DOCTYPE html>
<html lang="en" class=" ">
<head>
<?php require_once'includes/external_files.php'; ?>
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
 
 
<!--RIGHT COLUMN-->
	<div class="right_col" role="main" style="min-height: 1165px;">
<div class="">
<div class="page-title">
<div class="title_left">
<h3><i class="fa fa-smile-o"></i> Members Testimonies<small> (from all users)</small></h3>
</div>
</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12">
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content">
<form action="controller/testimoniesProcess.php" name="testimony_form" method="POST">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
</button>
<?php //check for my testimonies

	$resultmytestimony=$objtestimonies->mytestimonies($id);
	$row=$resultmytestimony->fetch_array();
	if ($resultmytestimony->num_rows==1) {
		echo '<h4 class="modal-title" id="myModalLabel2">Edit my Testmimony</h4>';
	}
	else{
		echo '<h4 class="modal-title" id="myModalLabel2">Add Testmimony</h4>';
	}
?>
</div>
<div class="modal-body">
<input type="hidden" name="uesr" value="<?php echo $id;?>">
<p><textarea placeholder="" rows="6" class="form-control" name="testimony_text"> <?php echo $row['testimony'];?> </textarea></p>
<p><select name="rating_text" class="form-control">
<option value="">--Select Rating--</option>
<option <?php if($row['rating']=="5")echo'selected';?> value="5">5</option>
<option <?php if($row['rating']=="4")echo'selected';?> value="4">4</option>
<option <?php if($row['rating']=="3")echo'selected';?> value="3">3</option>
<option <?php if($row['rating']=="2")echo'selected';?> value="2">2</option>
<option <?php if($row['rating']=="1")echo'selected';?> value="1">1</option>
</select></p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
<?php //check for my testimonies
	$resultmytestimony=$objtestimonies->mytestimonies($id);
	if ($resultmytestimony->num_rows==1) {
		echo '<button type="submit" name="btnManage" value="update" class="btn btn-primary"><i class="fa fa-plus"></i> Save Edit</button>';
	}
	else{
		echo '<button type="submit" name="btnManage" value="add" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>';
	}
?>
</div>
</form>
</div>
</div>
</div>
<div class="x_panel">
<div class="x_title">
<h2>Members Testimonies
<?php //check for my testimonies
	$resultmytestimony=$objtestimonies->mytestimonies($id);
	if ($resultmytestimony->num_rows==1) {
		echo '&nbsp;&nbsp;&nbsp;<a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-edit"></i> Edit Testimony </a>';
	}
	else{
		echo '&nbsp;&nbsp;&nbsp;<a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-edit"></i> Add Testimony </a>';
	}
?>
</h2>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
<li><a class="close-link"><i class="fa fa-close"></i></a> </li>
</ul>
<div class="clearfix"></div>
</div>
<br>
<div class="x_content">
<div class="row">
<table class="table table-striped projects">
<thead>
<tr>
<th style="width: 1%">#</th>
<th style="width: 20%">User</th>
<th style="width: 10%">Image</th>
<th style="width: 10%">Rating</th>
</tr>
</thead>
<tbody>
<?php 
	$counter=1;
	while ($rowtestimonies=$resultT->fetch_array()) {
		$uid=$rowtestimonies['id'];
		$u=$objUser->userImgandName($uid);
		$ud=$u->fetch_array();
?>
<tr>
<td><?php echo $counter?></td>
<td><?php echo $ud['name']?><br> <small>Wednesday, 7th December 2016</small> </td>
<td>
<ul class="list-inline">
<li> <img src="userpics/<?php echo $ud['img']?>" class="avatar" alt="Avatar"> </li>
</ul>
</td>
<td class="project_progress">
<?php
	$r=$rowtestimonies['rating'];
	if ($r=="1") {
		echo '<div class="progress progress_sm"> <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="100" aria-valuenow="98" style="width: 20%;"></div> </div><small>20% Rating</small>';
	}elseif ($r=="2") {
		echo '<div class="progress progress_sm"> <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="100" aria-valuenow="98" style="width: 40%;"></div> </div><small>40% Rating</small>';
	}elseif ($r=="3") {
		echo '<div class="progress progress_sm"> <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="100" aria-valuenow="98" style="width: 60%;"></div> </div><small>60% Rating</small>';
	}elseif ($r=="4") {
		echo '<div class="progress progress_sm"> <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="100" aria-valuenow="98" style="width: 80%;"></div> </div><small>80% Rating</small>';
	}elseif ($r=="5") {
		echo '<div class="progress progress_sm"> <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="100" aria-valuenow="98" style="width: 100%;"></div> </div><small>100% Rating</small>';
	}
?>
</td>
<td><?php echo $rowtestimonies['testimony']?></td>
</tr>
<?php $counter++;} ?>
 </tbody>
</table>
</div>
<div class="row">
<div class="col-md-4">
<p class="category-pagination-sign">4831 result found.
Showing Page 1 of 484. <br>
Page is Grouped in 10</p>
</div>
<div class="col-md-8">
<nav>
<ul class="pagination category-pagination pull-right">

<select class="form-control" style="padding:8px; margin-left:4px" onchange="location=this.value">
<opt
</select>
	<li class="last"><a href="testimonies?stream=1"><i class="fa fa-long-arrow-right"></i></a> </li>
</ul>
</nav>
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
 
  <script type="text/javascript"> //<![CDATA[ 
	var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
	document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
	//]]>
	</script><script src="./Dashboard _ Twinkas_files/trustlogo.js.download" type="text/javascript"></script>

  <script language="JavaScript" type="text/javascript">
		TrustLogo("https://twinkas.com/img/comodo_secure.png", "CL1", "none");
		</script><a href="javascript:if(window.open(&#39;https://secure.comodo.com/ttb_searcher/trustlogo?v_querytype=W&amp;v_shortname=CL1&amp;v_search=/&amp;x=6&amp;y=5&#39;,&#39;tl_wnd_credentials&#39;+(new Date()).getTime(),&#39;toolbar=0,scrollbars=1,location=1,status=1,menubar=1,resizable=1,width=374,height=660,left=60,top=120&#39;)){};tLlB(tLTB);" onmouseover="tLeB(event,&#39;https://secure.comodo.com/ttb_searcher/trustlogo?v_querytype=C&amp;v_shortname=CL1&amp;v_search=/&amp;x=6&amp;y=5&#39;,&#39;tl_popupCL1&#39;)" onmousemove="tLXB(event)" onmouseout="tLTC(&#39;tl_popupCL1&#39;)" ondragstart="return false;"><img src="./Dashboard _ Twinkas_files/comodo_secure.png" border="0" onmousedown="return tLKB(event,&#39;https://secure.comodo.com/ttb_searcher/trustlogo?v_querytype=W&amp;v_shortname=CL1&amp;v_search=/&amp;x=6&amp;y=5&#39;);" oncontextmenu="return tLLB(event);"></a><!----><div id="tl_popupCL1" name="tl_popupCL1" style="position:absolute;z-index:0;visibility: hidden;background-color: transparent;overflow:hidden;" onmouseover="tLoB(&#39;tl_popupCL1&#39;)" onmousemove="tLpC(&#39;tl_popupCL1&#39;)" onmouseout="tLpB(&#39;tl_popupCL1&#39;)">&nbsp;</div>
  <div class="clearfix"></div>
</footer>
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/58402ccffccdfa3ec849b769/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
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
	<script src="./Dashboard _ Twinkas_files/config.js.download"></script>
	<script src="./Dashboard _ Twinkas_files/jquery.pwdMeter.js.download"></script>
	<script src="./Dashboard _ Twinkas_files/frontend.js.download"></script>
	<!-- Counter Down Scripts -->
    <script src="./Dashboard _ Twinkas_files/jquery.countdown.js.download"></script>
	<script type="text/javascript">
		
		$("#dublinVarID").countdown("0", function(event) {
			$(this).text( event.strftime('%-Hh, %Mm, %Ss') );
		  });
		  
		$("#sponsorReveal").countdown("0", function(event) {
			$(this).text( event.strftime('%-Hh, %Mm, %Ss') );
		  }).on('finish.countdown', function(e){
			 self.location = "dashboard";
		  });
		
		
		$('.selfExitBttn').on('click', function(i){
			hrefLink = $(this).attr('href');
			$('#dashMsg').html('<center>Processing...' + loading_combiner+ '</center>');
			groupTableJQ = '';
			myIDenc = 'YVBPek1yYTJCR0lwYzZaYUtsUVlNQT09';
			 /* $('.updateContactForm_button').attr('disabled', 'disabled'); */
				$.post(hrefLink, { groupTableJQ:groupTableJQ, myIDenc:myIDenc }, function(response) {
					$('#dashMsg').html(response);
				}).error(function(jqXHR, textStatus, errorThrown) {
					$('#dashMsg').html('<pre>' + textStatus + '! Network Error!</pre>');
				});
			return false;	
		});
		
	</script>
  

</body></html>