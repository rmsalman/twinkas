<?php
error_reporting(1);
	session_start();

  require_once 'Model/restrictions.php';
  $objRestriction =new restrictions();
  $objRestriction->loginrestriction();

	require_once 'Model/user.php';
	$objUser =new User();
	$me=$_SESSION['userid'];
	$result=$objUser->myProfile($me);
	$rowme=$result->fetch_array();
	$t=$_GET['t'];
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
 
 
<!--RIGHT COLUMN-->
	<div class="right_col" role="main" style="min-height: 776px;">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>My Profile</h3>
</div>
</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>Edit my Profile <small> </small></h2>
<ul class="nav navbar-right panel_toolbox">
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">
<div class="col-md-9 col-sm-9 col-xs-12">
<div class="" role="tabpanel" data-example-id="togglable-tabs">
<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
<li role="presentation" <?php if($t=="p")echo 'class="active"';?>><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Personal</a> </li>
<li role="presentation" <?php if($t=="c_info")echo 'class="active"';?>><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Contact</a> </li>
<li role="presentation" <?php if($t=="b_info")echo 'class="active"';?>><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Bank</a> </li>
<li role="presentation" <?php if($t=="picx_info")echo 'class="active"';?>><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile Picture</a> </li>
<li role="presentation" ><a href="#tab_content5" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Password</a> </li>
</ul>
<div id="myTabContent" class="tab-content"><br>
<div role="tabpanel" class="tab-pane <?php if($t=="p")echo "active in fade";?> " id="tab_content1" aria-labelledby="home-tab">

<form role="form" action="controller/userProcess.php"  method="post">
<input type="hidden" name="mid" value="<?php echo $_SESSION['userid'];?>">
<div class="form-group">
<label class="control-label">Title</label>
	<select class="form-control" name="title_text">
		<option value="">-Select Title-</option>
		<option <?php if($rowme['title']=="29")echo'selected';?> value="29">Advocate</option>
		<option <?php if($rowme['title']=="14")echo'selected';?> value="14" <?php if($rowme['title']=="14")echo'selected';?>>Ambassador</option>
		<option <?php if($rowme['title']=="8")echo'selected';?> value="8">Barrister</option><option value="22">Bishop</option>
		<option <?php if($rowme['title']=="33")echo'selected';?> value="33" <?php if($rowme['title']=="33")echo'selected';?>>Brigadier</option>
		<option <?php if($rowme['title']=="34")echo'selected';?> value="34">Captain</option>
		<option <?php if($rowme['title']=="40")echo'selected';?> value="40">Chancellor</option>
		<option <?php if($rowme['title']=="9")echo'selected';?> value="9" <?php if($rowme['title']=="9")echo'selected';?>>Coloniel</option>
		<option <?php if($rowme['title']=="17")echo'selected';?> value="17">Councillor</option>
		<option <?php if($rowme['title']=="28")echo'selected';?> value="28">Dame</option>
		<option <?php if($rowme['title']=="7")echo'selected';?> value="7">Doctor</option>
		<option <?php if($rowme['title']=="39")echo'selected';?> value="39">Elder</option>
		<option <?php if($rowme['title']=="10")echo'selected';?> value="10">Engineer</option>
		<option <?php if($rowme['title']=="18")echo'selected';?> value="18">Envagelist</option>
		<option <?php if($rowme['title']=="37")echo'selected';?> value="37">Eze</option>
		<option <?php if($rowme['title']=="32")echo'selected';?> value="32">General</option>
		<option <?php if($rowme['title']=="16")echo'selected';?> value="16">Governor</option>
		<option <?php if($rowme['title']=="13")echo'selected';?> value="13">Governor</option>
		<option <?php if($rowme['title']=="30")echo'selected';?> value="30">Justice</option>
		<option <?php if($rowme['title']=="25")echo'selected';?> value="25">King</option>
		<option <?php if($rowme['title']=="27")echo'selected';?> value="27">Lord</option>
		<option <?php if($rowme['title']=="11")echo'selected';?> value="11">Madam</option>
		<option <?php if($rowme['title']=="5")echo'selected';?> value="5">Master</option>
		<option <?php if($rowme['title']=="6")echo'selected';?> value="6" >Miss</option>
		<option <?php if($rowme['title']=="1")echo'selected';?> value="1">Mr.</option>
		<option <?php if($rowme['title']=="4")echo'selected';?> value="4">Mrs</option>
		<option <?php if($rowme['title']=="38")echo'selected';?> value="38">Obi</option>
		<option <?php if($rowme['title']=="35")echo'selected';?> value="35">Officer</option>
		<option <?php if($rowme['title']=="21")echo'selected';?> value="21">Pastor</option>
		<option <?php if($rowme['title']=="31")echo'selected';?> value="31">Pope</option>
		<option <?php if($rowme['title']=="19")echo'selected';?> value="19">Prelate</option>
		<option <?php if($rowme['title']=="15")echo'selected';?> value="15">President</option>
		<option <?php if($rowme['title']=="23")echo'selected';?> value="23">Prince</option>
		<option <?php if($rowme['title']=="24")echo'selected';?> value="24">Princess</option>
		<option <?php if($rowme['title']=="3")echo'selected';?> value="3">Professor</option>
		<option <?php if($rowme['title']=="2")echo'selected';?> value="2">Provost</option>
		<option <?php if($rowme['title']=="26")echo'selected';?> value="26">Queen</option>
		<option <?php if($rowme['title']=="20")echo'selected';?> value="20">Reverend</option>
		<option <?php if($rowme['title']=="12")echo'selected';?> value="12">Senator</option>
	</select> 
</div>
<div class="form-group">
<label class="control-label">Date of Birth</label>
<input type="text" placeholder="Enter your date of Birth (DD-MM-YYYY)" class="form-control" name="dob_text" value="<?php echo $rowme['dob'];?>"> </div>
<div class="form-group">
<label class="control-label">Name</label>
<input type="text" name="fullname_text" class="form-control" value="<?php echo $rowme['name'];?>"> </div>
<div class="form-group">
<label class="control-label">Sex</label>
<input type="text" class="form-control" value="<?php if($rowme['gender']=="m"){echo "Male";}else{echo"Female";}?>" readonly=""> </div>
<div class="margiv-top-10">
<button class="btn btn-primary" type="submit" name="btnManage" value="updateP"><i class="fa fa-save"></i> Save Changes </button>

</div>
</form>


</div>
<div role="tabpanel" class="tab-pane <?php if($t=="c_info")echo "active in fade";?>" id="tab_content2" aria-labelledby="profile-tab">

<form action="controller/userProcess.php" method="post" id="">
<input type="hidden" name="cid" value="<?php echo $rowme['id'];?>">
<div class="form-group">
<label class="control-label">Email</label>
<input type="text" class="form-control" value="<?php echo $rowme['email'];?>" readonly="">
</div><div class="form-group">
<label class="control-label">Mobile 1</label>
<input type="text" maxlength="20" class="form-control" readonly="" name="mobile1_text" value="<?php echo $rowme['phone'];?>">
</div><div class="form-group">
<label class="control-label">Mobile 2</label>
<input type="text" maxlength="20" class="form-control" name="mobile2_text" value="<?php echo $rowme['mbl2'];?>" placeholder="Please enter your Alternative Contact mobile">
</div><div class="form-group">
<label class="control-label">Address</label>
<textarea class="form-control" rows="2" name="address_text"  placeholder="Your House address not P.O.Box">
<?php echo $rowme['addr'];?>
</textarea>
</div><div class="form-group">
<label class="control-label">Facebook Link <i class="fa fa-facebook btn btn-sm btn-primary"></i></label>
<input type="text" class="form-control" value="<?php echo $rowme['fb'];?>" name="fb_text" placeholder="Please enter your Facebook Contact link">
</div><div class="form-group">
<label class="control-label">Twitter Link <i class="fa fa-twitter btn btn-sm bg-green"></i> <small>use the # if its null</small></label>
<input type="text" class="form-control" value="<?php echo $rowme['tw'];?>" name="tw_text" placeholder="Please enter your Twitter Contact link">
</div><div class="margiv-top-10">
<button type="submit" class="btn btn-primary updateContactForm_button" name="btnManage" value="updateC"><i class="fa fa-save"></i> Save Changes </button>
</div><table class="table table-bordered table-striped">

</table>

</form>

</div>
<div role="tabpanel" class="tab-pane <?php if($t=="b_info")echo "active in fade";?>" id="tab_content3" aria-labelledby="profile-tab">
<div class="alert alert-info" onclick="$(this).hide()"> <b> <i class="fa fa-smile-o"></i> Hello <?php echo $rowme['name']?> !</b> Please note that bank details are to be edited Once. An Error here may render this account useless</div> 

<form action="#" method="post" id="">
<div class="form-group">
<label class="control-label">Bank</label>
<select class="form-control" name="bank_text" readonly="" disabled="disabled">
<option value="">-Select Bank-</option>
<option value="11">Access Bank</option><option value="6">Afri Bank</option><option value="21">Citi Bank</option><option value="18">Diamond Bank</option><option value="8">Eco Bank</option><option value="13">FCMB</option><option value="17">Fidelity</option><option value="1">First Bank</option><option value="4">GTB</option><option value="14">Heritage Bank</option><option value="15">Keystone</option><option value="19" selected="selected">Skye Bank</option><option value="20">Stanbic IBTC Bank</option><option value="22">Standard Chartered</option><option value="7">Sterling Bank</option><option value="9">UBA</option><option value="5">Union Bank</option><option value="12">Unity Bank</option><option value="10">WEMA Bank</option><option value="16">Zenith Bank</option>
</select> </div>
<div class="form-group">
<label class="control-label">Account Name</label>
<input type="text" class="form-control" name="acc_name_text" readonly="" disabled="disabled" placeholder="Please enter your Account name" value="Udo Nora Peter">
</div>
<div class="form-group">
<label class="control-label">Account Number</label>
<input type="text" class="form-control" maxlength="10" readonly="" disabled="disabled" name="acc_no_text" placeholder="Please enter your Account number" value="2020598971">
</div>
<div class="form-group">
<label class="control-label">Description</label>
<textarea class="form-control" rows="2" name="description_text" readonly="" disabled="disabled" placeholder="What your downliners sees as added Information">Please call me on and after payment. Dont forget to upload the details of your payment.</textarea>
</div>
<div class="margiv-top-10">
</div>
 
</form>


</div>
<div role="tabpanel" class="tab-pane  <?php if($t=="picx_info")echo "active in fade";?>" id="tab_content4" aria-labelledby="profile-tab">
<p> The image uploaded here is subject to verification. Please upload images that shows your face. Your account can be blocked because of incorrect photos</p>

<form action="controller/userProcess.php" role="form" method="post" enctype="multipart/form-data" class="ngnix_transfer" id="">
<input type="hidden" name="iid" value="<?php echo $rowme['id'];?>">
<div class="form-group">
<div class="fileinput fileinput-new" data-provides="fileinput">
<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
<img src="userpics/<?php echo $rowme['img']; ?>" alt=""> </div>
<div>
<span class="btn default btn-file">
<input type="file" name="profileimg"> </span>
</div>
</div>
</div>
<div class="margin-top-10">
<button type="submit" class="btn btn-success" name="btnManage" value="chngPic"><i class="fa fa-save"></i> Upload Avatar </button>
</div>
</form>


</div>
<div role="tabpanel" class="tab-pane  fade" id="tab_content5" aria-labelledby="profile-tab">

<form action="controller/userProcess.php" method="post" id="">
<input type="hidden" value="<?php echo $rowme['id'];?>" name="pid">
<div class="form-group">
<label class="control-label">Current Password</label>
<input type="password" name="old_pwd" class="form-control" placeholder="Enter your old password"> </div>
<div class="form-group">
<label class="control-label">New Password</label>
<input type="password" name="new_pwd1" id="password1" placeholder="Enter your new password" class="form-control">
<span id="pwdMeter" class="neutral" style="float:right; margin:-30px 0 0 0; display:none">Very Weak</span> </div>
<div class="form-group">
<label class="control-label">Re-type New Password</label>
<input type="password" name="new_pwd2" id="password2" placeholder="Confirm your new password" class="form-control"> </div>
<span style="float:right" id="password_match_span"></span>
<div class="margin-top-10">
<button type="submit" class="btn btn-primary updatePasswordForm_button" name="btnManage" value="Cpswrd"><i class="fa fa-save"></i> Change Password </button>
</div>
</form>

</div>
</div>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
<div class="profile_img">
<div id="crop-avatar">
 
<img style="border:4px double #000" class="img-responsive avatar-view" src="userpics/<?php echo $rowme['img'];?>" alt="Avatar" title="Change the avatar">
</div>
</div>
<h3><?php echo $rowme['name'];?> </h3>
<ul class="list-unstyled user_data">
<li> <i class="fa fa-user user-profile-icon"></i> Username: <?php echo $rowme['name'];?> </li>
<li class="m-top-xs"> <i class="fa fa-phone user-profile-icon"></i> <?php echo $rowme['phone'];?> </li>
<li><i class="fa fa-envelope user-profile-icon"></i> <?php echo $rowme['email'];?> </li>
</ul>
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