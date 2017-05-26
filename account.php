<?php
session_start();
error_reporting(1);
require_once 'model/packages.php';
$referedBy="";
$pkg;
$objgroups=new groups();
    if ($_GET['pkg']) {
        $pkg=$_GET['pkg'];
        $_SESSION['pkg']=$pkg;
    }
    else{
        $pkg=$_SESSION['pkg'];
    }


    if (!isset($_SESSION['referedBy'])) {
        $referedBy="None";
    }
    else
    {
        $referedBy=$_SESSION['referedBy'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Account | Twinkas</title>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<meta name="keywords" content="Twinkas, Get Rich, Best Foundation, Donation, Fund raising, Giving and Receiving, Charity, Community, MMM, MLM, Wealth Creation, Financial Freedon, Time Freedom, Making Money, Money Making Machine"/>
<meta name="description" content="Login to "get-rich-quicker" to grow your charity on the recent largest giving and receiving TwinKAS platform">
	<meta name="author" content="Twinkas Nigeria">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- favicon -->
	<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"4bf6ec24181cd67131fd896dcc18008a",petok:"b879e93de4f53dbe1886f729087271b41020a379-1489128206-1800",zone:"twinkas.com",rocket:"0",apps:{"abetterbrowser":{"ie":"6","opera":"0","chrome":"0","safari":"0","firefox":"4.0"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=f2befc48d1/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link href="https://twinkas.com/img/fav.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	
	<meta property="og:url"           content="https://www.twinkas.com" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Twinkas Nigeria" />
	<meta property="og:description"   content="" />
	<meta property="og:image"         content="https://twinkas.com/img/fav.ico" />	
      <link rel="stylesheet" href="css/twinkas.css">
    <link rel="stylesheet" href="fonts/font.css">
	<link rel="stylesheet" href="css/pwd_style.css">

</head>
<body>
    <div id="all">
        <header>
			<div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">Contact us: <a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="630a0d050c2317140a0d0802104d000c0e">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></p>
                            <p class="hidden-md hidden-lg">
								<a href="#" ><i class="fa fa-envelope" style="color:#FFF"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="http://facebook.com/twinkasng" target="_blank" class="external facebook" ><i class="fa fa-facebook"></i></a>
                               <a href="https://twinkas.com/contact" class="email" ><i class="fa fa-envelope"></i></a>
                            </div>

                            <div class="login">
                                <a href="https://twinkas.com/account?signin"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in to Twinkas</span></a>
												<a href="https://twinkas.com/account"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Join Twinkas</span></a>                            </div>

                        </div>
                    </div>
                </div>
            </div>
<!-- *** NAVBAR *** -->

	<div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">
		<div class="navbar navbar-default yamm" role="navigation" id="navbar">

			<div class="container">
				<div class="navbar-header">

					<a class="navbar-brand home" href="https://twinkas.com/home">
						<img src="https://twinkas.com/img/logo.png" style="margin-top:-6px; width:150px" alt="TwinKAS" class="hidden-xs hidden-sm">
						<img src="https://twinkas.com/img/logo-small.png" style="margin-top:-9px" alt="TwinKAS" class="visible-xs visible-sm"><span class="sr-only">TwinKAS</span>
					</a>
					<div class="navbar-buttons">
						<button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-align-justify"></i>
						</button>
					</div>
				</div>
				<!--/.navbar-header -->

				<div class="navbar-collapse collapse" id="navigation">

					<ul class="nav navbar-nav navbar-right">
					   <li class=""> <a href="https://twinkas.com/home" style="text-decoration:none" data-toggle=" "> <i class="fa fa-home"></i>Home </a> </li>
					   
						<li class="dropdown">
							<a href="javascript: void(0)" class="dropdown-toggle" style="text-decoration:none" data-toggle="dropdown"> <i class="fa fa-info-circle"></i>About </a> </a>
							<ul class="dropdown-menu">
								<li><a href="https://twinkas.com/about"><i class="fa fa-edit"></i> About TwinKAS</a> </li>
								<li><a href="https://twinkas.com/about-twinkas"> <i class="fa fa-recycle"></i> How it Works</a> </li>
								<li><a href="https://twinkas.com/about-wallet"> <i class="fa fa-suitcase"></i> TwinKAS E-Wallet</a> </li>
							</ul>
						</li>
					   
					   <li class=""> <a href="https://twinkas.com/testimonials" style="text-decoration:none" data-toggle=""> <i class="fa fa-trophy"></i>Testimonies </a> </li>
					   <li class=""> <a href="https://twinkas.com/blog" style="text-decoration:none" data-toggle=" "> <i class="fa fa-newspaper-o"></i>Blog </a> </li>
					   <li class=""> <a href="https://twinkas.com/faq" style="text-decoration:none" data-toggle=" "> <i class="fa fa-question-circle"></i>FAQ </a> </li>
					   
						 <li class="dropdown">
							<a href="javascript: void(0)" class="dropdown-toggle" style="text-decoration:none" data-toggle="dropdown"> <i class="fa fa-user"></i>Account </a> </a>
							<ul class="dropdown-menu">
								<li><a href="https://twinkas.com/account"><i class="fa fa-edit"></i> Join us Now</a> </li>
								<li><a href="https://twinkas.com/account?signin"> <i class="fa fa-sign-in"></i> Log In</a> </li>
							</ul>
						</li>
					   <li class=""> <a href="contact" style="text-decoration:none" data-toggle=" "> <i class="fa fa-envelope"></i>Contact </a> </li>
					</ul>

				</div>
				<!--/.nav-collapse -->

				</div>
				<!--/.nav-collapse -->

			</div>
		</div>
		<!-- /#navbar -->

	</div>		</header>
        </div>
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 style="color:#FFF">Sign Up</h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
		<div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box">

                        <?php
                            $resultpkg=$objgroups->fetchpkg($pkg);
                            $rowpkg=$resultpkg->fetch_array();
                        ?>
                            <h2 class="text-uppercase">Sign Up 
							(<?php echo $rowpkg['name']?>
									- N<?php echo number_format($rowpkg['price']);?>)</h2>
                            <p></p>
                            <p class="text-muted"> This process should not take more than one minute. You are only given 24 hours to pay up the stipulated amount above if you get a sponsor.<br />
								If you do not wish to belong to the group above, please <a href="account?clsLX">Click Here</a></p>

                            <form action="controller/userProcess.php" method="post" id="signupForm">

								<div class="form-group">
                                    <label for="name-login">Referrals Name</label>
                                    <?php

                                    ?>
                                    <input type="hidden" name="group_id" value="<?php echo $pkg;?>">
                                    <input type="hidden" name="referhide" value="<?php echo $referedBy ;?>">
                                    <input type="text" class="form-control" value="Referred By: <?php echo $referedBy;?>" readonly name="referal"/>
                                </div>								
								<div class="form-group">
                                    <label for="email-login">Title</label>
                                    <select class="form-control" name="title_text">
										<option value="">-- Select Title --</option>
										<option value="29" >Advocate</option><option value="14" >Ambassador</option><option value="8" >Barrister</option><option value="22" >Bishop</option><option value="33" >Brigadier</option><option value="34" >Captain</option><option value="40" >Chancellor</option><option value="9" >Coloniel</option><option value="17" >Councillor</option><option value="28" >Dame</option><option value="7" >Doctor</option><option value="39" >Elder</option><option value="10" >Engineer</option><option value="18" >Envagelist</option><option value="37" >Eze</option><option value="32" >General</option><option value="16" >Governor</option><option value="13" >Governor</option><option value="30" >Justice</option><option value="25" >King</option><option value="27" >Lord</option><option value="11" >Madam</option><option value="5" >Master</option><option value="6" >Miss</option><option value="1" >Mr.</option><option value="4" >Mrs</option><option value="36" >Oba</option><option value="38" >Obi</option><option value="35" >Officer</option><option value="21" >Pastor</option><option value="31" >Pope</option><option value="19" >Prelate</option><option value="15" >President</option><option value="23" >Prince</option><option value="24" >Princess</option><option value="3" >Professor</option><option value="2" >Provost</option><option value="26" >Queen</option><option value="20" >Reverend</option><option value="12" >Senator</option>									</select>
                                </div>
								
                                <div class="form-group">
                                    <label for="name-login">Fullname</label>
                                    <input type="text" class="form-control" name="fullname_text" placeholder="Enter your fullname">
                                </div>
                                <div class="form-group">
                                    <label for="email-login">Gender</label>
                                    <select class="form-control" name="gender_text">
										<option value="">-- Select Sex --</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
                                </div> 
								<div class="form-group">
                                    <label for="email-login">Resident State</label>
                                    <select class="form-control" name="state_text">
										<option value="">-- Select State --</option>
										<option value="1" >Abia</option><option value="2" >Abuja</option><option value="3" >Adamawa</option><option value="4" >Akwa-ibom</option><option value="5" >Anambra</option><option value="6" >Bauchi</option><option value="7" >Bayelsa</option><option value="8" >Benue</option><option value="9" >Borno</option><option value="10" >Cross-River</option><option value="11" >Delta</option><option value="12" >Ebonyi</option><option value="13" >Edo</option><option value="14" >Ekiti</option><option value="15" >Enugu</option><option value="17" >Gombe</option><option value="18" >Imo</option><option value="16" >International</option><option value="19" >Jigawa</option><option value="21" >Kaduna</option><option value="20" >Kano</option><option value="22" >Kastina</option><option value="23" >Kebbi</option><option value="24" >Kogi</option><option value="25" >Kwara</option><option value="26" >Lagos</option><option value="27" >Nasarawa</option><option value="28" >Niger</option><option value="29" >Ogun</option><option value="30" >Ondo</option><option value="31" >Osun</option><option value="32" >Oyo</option><option value="33" >Plateau</option><option value="34" >Rivers</option><option value="35" >Sokoto</option><option value="36" >Taraba</option><option value="37" >Yobe</option><option value="38" >Zamfara</option>									</select>
                                </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box">
                            <p class="lead">Critical Information</p>

                                <div class="form-group">
                                    <label for="email">Contact Mobile <small>(080x, 070x Format)</small> <span class="phoneMSG"></span></label>
                                    <input type="text" class="form-control mobile_text" maxlength="20" name="mobile_text" placeholder="Enter your Mobile number in the 080x, 070x Format">
									
                                </div>
                                <div class="form-group">
                                    <label for="email">Email <span class="emailMSG"></span></label>
                                    <input type="text" class="form-control email_text" name="email_text" placeholder="Enter your Email address">
									
                                </div>
                                <div class="form-group">
                                    <label for="email">Choose Username [Uneditable] No Spaces <span class="usernameMSG"></span></label>
                                    <input type="text" class="form-control username_text" name="username_text" placeholder="Enter your Unique Username. No spaces">
								 </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password1" name="password1"  placeholder="Please enter your password">
									<span id="pwdMeter" class="neutral" style="float:right; margin:-30px 0 0 0; display:none">Very Weak</span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Confirm Password</label>
                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Please confirm your password">
									<span style="float:right" id="password_match_span"></span>
                                </div>
                                <div class="form-group">
                                    										<label>Captcha. What is the answer to 3 X 3 = ?</label>
										<input type="text" name="captcha_answer" placeholder="Your Answer" class="form-control">
										<input name="captcha_answer_raw" type="hidden" value="9" />
                                </div>
                                <div class="">
									<input type="hidden" name="refererID" value="" />
									<input type="hidden" name="refererID_bringer" value="0" />
									<input type="hidden" name="pkID" value="U1duMW9SVUNZTExrM2R5RDhhZ2lGQT09" />
									<input type="hidden" name="payTO" value="" />
									<input type="hidden" name="token" value="hjtU6349BTI8Tcurtyfugv77" />
                                    <button type="submit" class="btn btn-template-main signupBotton" name="btnManage" value="register"><i class="fa fa-edit"></i> Create Account</button>
									<span id="ingnix_registration_message"></span>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->        </div>
        <!-- /#content -->

	<div id="get-it">
            <div class="container" >
                <div class="col-md-8 col-sm-12">
                    <h3>Twinkas - Givers are Receivers</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="account" class="btn btn-template-transparent-primary"> Create your Account </a>
                </div>
            </div>
        </div>
		
        <footer id="footer">
            <div class="container" >
                <div class="col-md-3 col-sm-6">
                    <h4>Core Value</h4>
                    <p>The wellbeing of the populace are our long-term lead. The commitment of our members sets us stand out from the crowd, while we develop people for the enduring liability in a real-time process.</p>
                    <hr class="hidden-md hidden-lg hidden-sm">
                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <h4>Quick Links</h4>
                    <div class="blog-entries">
						<div class="item same-height-row clearfix">
							<div class="name same-height-always">
								<h5><a href="https://twinkas.com/account?signin">Log In</a></h5>
								<h5 style="margin-top:6px"><a href="https://twinkas.com/account">Register</a></h5>
								<h5 style="margin-top:6px"><a href="https://twinkas.com/about-twinkas">How Twinkas Works</a></h5>
								<h5 style="margin-top:6px"><a href="https://twinkas.com/testimonials">Testimonies</a></h5>
							</div>
						</div>
                    </div>
                    <hr class="hidden-md hidden-lg">
                </div>

                <div class="col-md-3 col-sm-6">
                    <h4>Contact</h4>
                    <p>Villa 0101, 27th Street, Sector 24, <br />Al mushrif area, UAE  </p>
                    <p>Send us an Email: <a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="c3aaada5ac83b7b4aaada8a2b0eda0acae">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script>  </p>

                    <hr class="hidden-md hidden-lg hidden-sm">
                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
					<h4>Commodo Secured</h4>
					 <img src="https://twinkas.com/img/comodo_secure.png" />

                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2017. Twinkas. 
					<a href="https://twinkas.com/terms-and-condition"> Terms and Condition</a> | 
					<a href="https://twinkas.com/notice"> Notice </a> | 
					<a href="https://twinkas.com/upgrade"> Upgrade </a> </p>
                    <p class="pull-right">Template by <a style="color:#FFF" href="https://bootstrapious.com/free-templates">Bootstrapious</a> </p>

                </div>
            </div>
        </div>
	    </div>
     <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/front.js"></script>
	<script src="js/config.js"></script>
	<script src="js/jquery.pwdMeter.js"></script>
	<script src="js/frontend.js"></script>	
</body>
</html>