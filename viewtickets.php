<?php
error_reporting(1);
session_start();
  require_once 'Model/restrictions.php';
  $objRestriction =new restrictions();
  $objRestriction->loginrestriction();
		require_once'Model/tickets.php';
		$objtickets =new tickets();
		$id=$_SESSION['userid']; //session id of logged in user
		$resultTickets=$objtickets->viewmytickets($id);
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
	<div class="right_col" role="main" style="min-height: 874px;">
<div class="">
<div class="page-title">
<div class="title_left">
<h3><i class="fa fa-ticket.my"></i> My Submitted Tickets. <small> <a href="My_Tickets.php" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create Ticket </a></small></h3>
</div>
</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12">
<div class="x_panel">
<div class="x_content">
<div class="row">
<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable" class="table table-bordered dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="datatable_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Ticket ID: activate to sort column descending" style="width: 37px;">Ticket ID</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 28px;">Date</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Heading: activate to sort column ascending" style="width: 51px;">Heading</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Ticket: activate to sort column ascending" style="width: 601px;">Ticket</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending" style="width: 38px;">Image</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 55px;">Status</th></tr>
</thead>
<tbody>
<?php
	while ($rowtickets=$resultTickets->fetch_array()) {
?>
<tr role="row" class="odd">
<td class="sorting_1"> <?php echo "#".$rowtickets['id'];?> </td>
<td> <!--Sat, 4th Mar. 2017 @ 12:52pm--> <?php echo $rowtickets['date']?> </td>
<td> <?php echo $rowtickets['ticketTitle'];?> </td>
<td> <?php echo $rowtickets['complain'];?> </td>
<td><img style="cursor:pointer; width:40px" class="fancybox fancybox.image" href="#" src="tickets/<?php echo $rowtickets['screenshot'];?>"></td>
<td><span class="label label-danger" style="width:100%; padding:10px"><i class="fa fa-times"></i> Not Noted </span></td>
</tr>
<?php } ?>
</tbody>
</table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div></div>
</div>
<div class="row">
<div class="col-md-4">
<p class="category-pagination-sign">3 result found.<br>
Showing Page 1 of 1. <br>
Page is Grouped in 20</p>
</div>
<div class="col-md-8">
<nav>
<ul class="pagination category-pagination pull-right">
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
<a class="btn btn-default btn-sm" href=index.php><i class="fa fa-home"></i> Dashboard</a>
<a class="btn btn-success btn-sm" href="https://twinkas.com/private/packages"><i class="fa fa-sitemap"></i><span class="text"> Packages</span></a>
<a class="btn btn-danger btn-sm" href="https://twinkas.com/private/invite@refer"><i class="fa fa-chain"></i><span class="text"> Invitation (Ref link)</span></a>
<a class="btn btn-success btn-sm" href="https://twinkas.com/private/wallet"><i class="fa fa-money"></i><span class="text"> My Wallet</span></a>
<a class="btn btn-success btn-sm" href="https://twinkas.com/private/accountSwitch"><i class="fa fa-refresh"></i><span class="text"> Switch Account</span> </a>
<a class="btn btn-primary btn-sm" href="https://twinkas.com/private/testimonies"><i class="fa fa-smile-o"></i><span class="text"> Testimony</span></a>
<a class="btn btn-success btn-sm" href="https://twinkas.com/private/ticket"><i class="fa fa-ticket"></i><span class="text"> My Tickets</span> </a>
<a class="btn btn-default btn-sm" href="https://twinkas.com/private/callcenter"><i class="fa fa-tty"></i><span class="text"> Call Center</span> </a>
<a class="btn btn-danger btn-sm" href="https://twinkas.com/blog"><i class="fa fa-newspaper-o"></i><span class="text"> Visit Blog </span></a>
<a class="btn btn-danger btn-sm" href="?Logout"><i class="fa fa-sign-out"></i><span class="text">Log Out</span></a>
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