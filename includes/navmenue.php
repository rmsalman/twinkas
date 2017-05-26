<div class="nav_menu">
<nav>
<div class="nav toggle">
<a id="menu_toggle"><i class="fa fa-bars"></i></a>
</div>
<ul class="nav navbar-nav navbar-right">
<li class="">
<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<img src="userpics/<?php echo $rowme['img']?>" alt=""><?php echo $rowme['name']?> <span class=" fa fa-angle-down"></span>
</a>
<ul class="dropdown-menu dropdown-usermenu pull-right">
<li><a href="https://twinkas.com/private/downlines"><i class="fa fa-sort-amount-desc pull-right"></i>My Referrals</a></li>
<li><a href="https://twinkas.com/private/editProfile?pass_info"><i class="fa fa-lock pull-right"></i> Change Password</a></li>
<li><a href="controller/userProcess.php?i=Logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
</ul>
</li>
<li role="presentation" class="dropdown">
<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
<i class="fa fa-exclamation-triangle"></i>
<span class="badge bg-green"> 1</span>
</a>
<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
<li> <a href="My_profile.php?t=picx_info"><i class="fa fa-user"></i> <span>
<span>Update your Profile Picture</span>
<span class="time">now</span>
</span> </a> </li> </ul>
</li>
</ul>
</nav>
</div>