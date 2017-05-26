<?php
session_start();
	require_once 'Model/user.php';
	$objUser =new User();
	$me=$_SESSION['userid'];
	$result=$objUser->myProfile($me);
	$rowme=$result->fetch_array();
?>

<div class="profile">
<div class="profile_pic">
<img src="userpics/<?php echo $rowme['img'];?>" alt="..." style="width: 65px;height: 65px;" class="img-circle profile_img">
</div>
<div class="profile_info">
<span>Welcome Back.</span>
<h2> <?php echo $rowme['name'];?></h2>
</div>
</div>
<br>

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
<div class="menu_section active">
<h3> &nbsp; </h3>
<ul class="nav side-menu" style="">
<li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a>
</li>
<li class=""><a><i class="fa fa-user active"></i> My Profile <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu" >
<li><a href="My_profile.php?t=p"><i class="fa fa-edit"></i><span class="text">Update Profile</span></a></li>
<li><a href="My_profile.php?t=c_info"><i class="fa fa-edit"></i><span class="text">Contact Info.</span></a></li>
<li><a href="My_profile.php?t=b_info"><i class="fa fa-edit"></i><span class="text">Update Bank Info.</span></a></li>
<li><a href="My_profile.php?t=picx_info"><i class="fa fa-edit"></i><span class="text">Update Picture</span></a></li>
</ul>
</li>
<li><a class="" href="My_refferel.php"><i class="fa fa-sort-amount-desc"></i><span class="text">My Refferals</span>
</a></li>
<li><a class="" href="packages.php"><i class="fa fa-sitemap"></i><span class="text">Packages</span></a></li>
<li><a href="invite@refer.php"><i class="fa fa-chain"></i><span class="text">Invitation (Ref link)</span></a></li>
<li><a href="wallet.php"><i class="fa fa-money"></i><span class="text">My Wallet</span></a></li>
<li><a class="" href="switch_account.php"><i class="fa fa-refresh"></i><span class="text">Switch Account</span> </a></li>
<li><a class="" href="Members_testmonies.php"><i class="fa fa-smile-o"></i><span class="text">Testimony</span></a></li>
<li><a class="" href="My_Tickets.php"><i class="fa fa-ticket"></i><span class="text">My Tickets</span> </a></li>
<li><a class="" href="messages.php"><i class="fa fa-envelope"></i><span class="text">Messages</span>
</a></li>
<li><a class="" href="call_center.php"><i class="fa fa-tty"></i><span class="text">Call Center</span> </a></li>
<li><a class="" href="javascript:;"><i class="fa fa-newspaper-o"></i><span class="text">Visit Blog </span></a></li>
<li><a class="" href="admin.php"><i class="fa fa-sign-out"></i><span class="text">Admin</span></a></li>
<li><a class="" href="/?Logout"><i class="fa fa-sign-out"></i><span class="text">Log Out</span></a></li>
</ul>
</div>
</div>

