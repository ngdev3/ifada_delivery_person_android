<?php include 'header.php';?>
<style type="text/css">

.products_wrapper.ticket_wrapper
{
	display: block;
	padding: 15px;
}

</style>
<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header">
			  <li class="menu_icon "><a href="#"  ><img src="assets/img/icon/back.png" id="asdf" alt="menu icon"style="width: 13px;" /></a></li>
				<li class="page_name left">
					<a href="#" class="text-left ">
						<p>Ticket List</p>
					</a>
				</li>
			  <li class="cart_icon">
				  <a href="./view_cart.php"><img src="assets/img/icon/cart_icon.png" alt="cart icon"  />
					<!--<span class="badge">14</span>-->
				  </a>
				  <a href="#"><img src="assets/img/icon/search_icon.png" alt="search icon" /></a>
			  </li>
			</ul>
			<ul class="nav navbar-nav bottom_header">
			  <li class="menu_search_container"><a href="#">
				<!--<img src="assets/img/header/search_icon.png" alt="cart icon" />-->
				<input type="text" class="menu_search" placeholder="Search products brands and more"/>
			  </a></li>
			</ul>
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->

<!--  [PULSES] Sub categories content -->
	<div class="container-fluid mt-55">
		<div class="row">
			<div class="">
				
				
				<!-- ** Ticket Lists In process ** -->
				
				<div class="no-padding item_lists_main">
					<div class="prodcut_main_container">
						<div class="products_wrapper ticket_wrapper">
							<div class="row padding_ticket">
								<div class="col-md-5 col-sm-5 col-xs-5 no-padding">
									<h5>Ticket ID</h5>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4 no-padding complaint_content">
									<h5>CMP001</h5>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 no-padding">
									<input type="button" class="btn btn-default btn_discounts ticket_process_btns ticket_in_process" name="" value="In Process">
								</div>
							</div>
							<div class="row padding_ticket">
								<div class="col-md-5 col-sm-5 col-xs-5 no-padding">
									<h5>Order Number</h5>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 no-padding complaint_content">
									<h5>0D98</h5>
								</div>
								
							</div>
							<div class="row padding_ticket">
								<div class="col-md-5 col-sm-5 col-xs-5 no-padding">
									<h5>Complaint Type</h5>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 no-padding complaint_content">
									<h5>Faulty</h5>
								</div>
								
							</div>
							<div class="row padding_ticket">
								<div class="col-md-5 col-sm-5 col-xs-5 no-padding">
									<h5>Date & Time</h5>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 no-padding complaint_content">
									<h5>27-06-2018  10:27</h5>
								</div>
								
							</div>
							<!-- View button -->
							<div class="row padding_ticket">
								<div class="col-md-12 col-sm-12 col-xs-12 ">
									<div class="view_tkt_btn">
										 <a href="./view_ticket.php"><input type="button" class="btn btn-success" value="View Ticket"></a>
									</div>
								</div>
							</div>
							<!--  view button -->
						</div>
					</div>
				</div>
				<!-- ** !. Ticket Lists In process ** -->
				<!-- **  Ticket Lists Resolved ** -->
				<div class="no-padding item_lists_main">
					<div class="prodcut_main_container">
						<div class="products_wrapper ticket_wrapper">
							<div class="row padding_ticket">
								<div class="col-md-5 col-sm-5 col-xs-5 no-padding">
									<h5>Ticket ID</h5>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4 no-padding complaint_content">
									<h5>CMP001</h5>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 no-padding">
									<input type="button" class="btn btn-default btn_discounts ticket_process_btns ticket_resolved" name="" value="In Process">
								</div>
							</div>
							<div class="row padding_ticket">
								<div class="col-md-5 col-sm-5 col-xs-5 no-padding">
									<h5>Order Number</h5>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 no-padding complaint_content">
									<h5>0D98</h5>
								</div>
								
							</div>
							<div class="row padding_ticket">
								<div class="col-md-5 col-sm-5 col-xs-5 no-padding">
									<h5>Complaint Type</h5>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 no-padding complaint_content">
									<h5>Faulty</h5>
								</div>
								
							</div>
							<div class="row padding_ticket">
								<div class="col-md-5 col-sm-5 col-xs-5 no-padding">
									<h5>Date & Time</h5>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 no-padding complaint_content">
									<h5>27-06-2018  10:27</h5>
								</div>
								
							</div>
							<!-- View button -->
							<div class="row padding_ticket">
								<div class="col-md-12 col-sm-12 col-xs-12 ">
									<div class="view_tkt_btn">
										 <a href="./view_ticket.php"><input type="button" class="btn btn-success" value="View Ticket"></a>
									</div>
								</div>
							</div>
							<!--  view button -->
						</div>
					</div>
				</div>
				<!-- ** !. Ticket Lists Resolved ** -->
				
			</div>
		</div>
	</div>
<!--  !. [PULSES] Sub categories content -->
	

	
<script>

	
$(document).ready(function(){
	$(".cart_icon a:last-child").click(function(){
		//alert();
		$(".bottom_header").slideToggle();
		//$("#banner_slider").toggleClass("search-container")
	});	
});
    </script>	
<?php include 'footer.php';?>