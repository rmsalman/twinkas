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
	<div class="right_col" role="main" style="min-height: 1124px;">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>My Referrals</h3>
</div>
</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12">
<div class="">
<div class="x_content"> <br>
<div class="alert alert-info" onclick="$(this).hide()"> <b> <i class="fa fa-smile-o"></i> Hello Dear!</b> Your Downlines will be displayed here. Automatic Delete has been enabled. Downlines that dont meet the criteria will be deleted in no time. Do not force any of them to pay you.</div> <div class="row">
<span id="pageResult">
</span>
<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 profile_details"><div class="alert alert-danger" onclick="$(this).hide()"> <b><i class="fa fa-frown-o"></i> Hello Nora Peter , </b> You are to donate money to your Sponsor.
<span style="font-weight:800; color:#FFF">Discard any call or text from any sponsor forcing you to make payment. Please do not upload your payment details before paying. Its a criminal offence. </span><span style="color:#FFF; font-weight:600"> Time Remaining: 22 Hrs. </span>
If you have donated to your sponsor, please <a class="btn btn-xs btn-default" font-weight:600"="" href="acknowledge"><i class="fa fa-upload"></i> Upload your Payment details </a> </div>		
		<div class="well profile_view" style="border:1px solid red">
			<div class="col-sm-12">
				<h4 class="brief">My Sponsors Information</h4>
				<div class="left col-xs-7">
				  <h2>Fullname: <b>
				James Sunday  <b></b></b></h2><b><b>
				  <p><strong>Account Name: </strong> 
				 James Sunday Audu  </p>
				  <p><strong>Bank: </strong>  
				  First Bank  </p>
				  <p><strong>Account No.: </strong> 
				  3061930943 </p>
				  <p><strong>Donation Type: </strong> Cash or Transfer or Bank Payment </p>
				  <p><strong>Added Note: </strong> Please call me on and after payment. Dont forget to upload the details of your payment. </p>
				  <br>
				  <ul class="list-unstyled">
					<li><i class="fa fa-phone"></i> Phone 1 #: 
						07068164643</li>
					<li><i class="fa fa-phone"></i> Phone 2 #: 
						08132429837</li>
				  </ul>
				</b></b></div><b><b>
				<div class="right col-xs-5 text-center">
									  <img src="https://twinkas.com/uploads/user_images/351347_IMG_20170127_181549.jpg" alt="" class="img-circle img-responsive">
				</div>
			  </b></b></div><b><b>
			  
			  <div class="col-xs-12 bottom text-center">
			   <div class=" col-md-6 col-sm-6 emphasis">
				   <a href="http://facebook.com/" class="btn btn-primary btn-xs"> <i class="fa fa-facebook"></i> Facebook</a>
				   <a href="http://twitter.com/" class="btn bg-blue btn-xs"> <i class="fa fa-twitter"></i> Twitter</a>
				</div>
				<div class=" col-md-6 col-sm-6 emphasis"> 
					<a href="acknowledge" class="btn btn-primary btn-sm"> <i class="fa fa-thumbs-o-up"> </i> Upload Payment Detail </a>				  
				</div>
			  </div>
			</b></b></div><b><b>
		<div style="border:4px double #000; padding:10px">If you have not seen an alert from your downliner before the hours countdown, please click on the "Decline" button to save yourself from being deleted. Note that you must activate 2 of your downliners before you can exit to join again.
												Clicking the decline button will put your account in a pause mode until Twinkas verifies the transaction. You can choose to activate a user after the pause.</div></b></b></div><b><b>					
                    </b></b></div><b><b>
                  </b></b></div><b><b>
                </b></b></div><b><b>
              </b></b></div><b><b>
            </b></b></div><b><b>
          </b></b></div><b><b>
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
	</div>        </b></b></div>
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