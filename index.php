<?php
error_reporting(1);
	session_start();
	require_once 'Model/user.php';
	require_once 'Model/restrictions.php';
	$objRestriction =new restrictions();
	$objRestriction->loginrestriction();
	$objUser =new User();

?>

<!DOCTYPE html>
<!-- saved from url=(0037)/ -->
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
 
 
<div class="right_col" role="main" style="min-height: 1108px;">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>Dashboard</h3>
</div>
</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<b style="font-size:18px; color:red">Twinkas Notice Board:</b><br>
<h5><b> More update!</b>
We want to bring to your notice that the 300% Seasonal Bonanza which runs indefinitely is for only new registration. Old members will get their normal 200% effective from 13:00GMT, 28th February 2017. All registered accounts during the bonanza will benefit. You are free to create the bonanza accounts. Account recycling policy will be implemented 6th of march, 2017.
<br> However, you will be giving the opportunity to delete any idle/dormant account before the implementation as any idle account after 48 hours will result to the blockage of all the accounts connected to you, whether the rest of the accounts are awaiting payment or not. We will also help in removing dormant accounts. Always refresh this page for new information. <br> For the interest of brevity, we encourage you to discard any media propaganda and fake info from failed platforms, which has been a hurdle to the scheme through member-to-member interactions and involvements. Nevertheless, in as much as you have trusted the platform, we all need to join hands and work so effortlessly towards moving the platform forward. - Keep calm and trust TwinKAS
</h5> </div>
</div>
</div>
<div class="row top_tiles">
<a href="wallet.php">
<div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="tile-stats">
<div class="icon"><i class="fa fa-money"></i></div>
<div class="count" style="font-size:32px"> Pending Wallet</div>
<h3 style="color:red">Click Here</h3>
<p>Unactivated Money. Pending Users</p>
</div>
</div>
</a>
<a href="wallet.php">
<div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="tile-stats">
<div class="icon"><i class="fa fa-money"></i></div>
<div class="count" style="font-size:32px"> Current Wallet</div>
<h3 style="color:green">N<?php echo $rowme['cash']?></h3>
<p>Current Amount in my Wallet</p>
</div>
</div>
</a>
<a href="https://twinkas.com/private/downlines">
</a><div class="animated flipInY col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="https://twinkas.com/private/downlines">
</a><div class="tile-stats"><a href="https://twinkas.com/private/downlines">
<div class="icon"> </div>
<div class="count" style="font-size:30px"> Useful Module</div>
</a><center><a href="https://twinkas.com/private/downlines">
</a><a class="btn btn-sm btn-default" style="" href="#"><i class="fa fa-bolt"></i> Invite Member via Referral</a>
<a class="btn btn-sm btn-default" style="" href="call_center.php"><i class="fa fa-tty"></i> Call Twinkas </a>
</center>
<p>Invite Members and Populate Wallet</p>
</div>
</div>

</div>
<span id="pinDiv"> </span>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel" style="box-shadow: 2px 2px 20px white; -o-box-shadow:4px 4px 20px white; -moz-box-shadow:4px 4px 20px white">
<div class="x_title">
<h2>Dashboard</h2>
<span class="nav navbar-right panel_toolbox">
<b style="font-size:16px">
</b>
</span>
<div class="clearfix"></div>
</div>
<div class="x_content">
<div class="col-md-3 col-sm-3 col-xs-12"><center>
<div class="profile_img">
<div id="crop-avatar">
 
<img class="img-responsive avatar-view" style="border:1px solid #000" src="userpics/<?php echo $rowme['img'];?>" alt="Avatar" title="Change the avatar">
</div>
</div>
<h3><?php echo $rowme['name'];?></h3>
<ul class="list-unstyled user_data">
<li class="m-top-xs"> <i class="fa fa-phone user-profile-icon"></i> <?php echo $rowme['phone']?> </li>
<li> <i class="fa fa-user user-profile-icon"></i> <?php echo $rowme['name']?> </li>
<li><i class="fa fa-envelope user-profile-icon"></i> <?php echo $rowme['email']?> </li>
</ul>
<a href="My_Profile.php?t=p" class="btn btn-primary btn-sm"><i class="fa fa-edit m-right-xs"></i> Edit my Basic Info</a>
<a href="My_Profile.php?t=c_info" class="btn btn-primary btn-sm"><i class="fa fa-envelope-o m-right-xs"></i> Edit my Contact Info</a>
</center> </div>
<div class="col-md-6 col-sm-9 col-xs-12 profile_details">
<div class="alert alert-danger" onclick="$(this).hide()"> <b><i class="fa fa-frown-o"></i> Hello Nora Peter , </b> No Sponsor has being assigned to you yet. Please join a package. <a class="btn btn-xs btn-default" font-weight:600"="" href="packages.php"><i class="fa fa-user"></i> Get a Sponsor Now!!!</a></div><div class="well profile_view" style="padding:6px 12px">
					Its either you are just a newly registered member or you have either exited your current package or you have being removed from your current package. The available actions for you are shown below.<hr>
					<center><a class="btn btn-md btn-primary" href="packages.php"><i class="fa fa-sitemap"></i> Join a Package and get a Sponsor!</a>
					<a class="btn btn-sm btn-success" href="#"><i class="fa fa-child"></i> Register a New Member - Referral </a> </center>
				</div><br>
				<a href="/?wipe" class="btn btn-danger btn-block"><i class="fa fa-trash m-right-xs"></i> Delete this Dormant Account </a>
				<br><ul class="list-unstyled timeline">
										<li> <div class="block">
											<div class="tags">
											  <a href="javascript:;" class="tag">
												<span>Added Note</span>
											  </a>
											</div>
											<div class="block_content">
											  <h2 class="title">Pick a Sponsor and get Activated.</h2>
											</div>
										  </div>
										</li>
									</ul>						
						<center> <!-- craft holding downliners --></center>
						
                      </div>
					 
					 <div class="col-md-3 col-sm-12 col-xs-12">
                      <div>
                        <div class="x_title">
                          <h2>My Referrals</h2>
                          <div class="clearfix"></div>
                        </div>
                        <ul class="list-unstyled top_profiles scroll-view">
							Your Referrals will be displayed here when you have: <br><br>
											<li><i class="fa fa-check"></i> Joined a Package</li>
											<li><i class="fa fa-check"></i> Paid your Sponsor</li>
											<li><i class="fa fa-check"></i> Gotten activated</li>
											<li><i class="fa fa-check"></i> Referrals have being assigned</li> 
											<br>
											<center><font color="red"><b> If you cannot see your sponsor or your referrals and you are 100% sure that you have been activated, Please try the button below to get this fixed. </b></font></center>
											<br><a class="btn btn-primary btn-block" href="switch_account.php"><i class="fa fa-refresh"></i> Switch Accounts Now!!!</a>						<span id="dashMsg"></span>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>		  
			 <div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel" style="box-shadow: 2px 2px 20px white; -o-box-shadow:4px 4px 20px white; -moz-box-shadow:4px 4px 20px white">
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