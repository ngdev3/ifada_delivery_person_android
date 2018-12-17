<?php include 'header.php';?>
<style type="text/css">
	

</style>
<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header">
			  <li class="menu_icon "><a href="#"  ><img src="assets/img/icon/back.png" id="asdf" alt="menu icon"style="width: 13px;" /></a></li>
				<li class="page_name left">
					<a href="#" class="text-left ">
						<p>Track Order</p>
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
				<!-- ** Buttons** -->
				<div class="pulses_buttons  tracking_main_container">

					<h5 class="tracking_heading">Tracking No.</h5><h5 class="tracking_number">AWB12349870978</h5>
					<input type="button" class="btn btn-default tracking_btn ticket_process_btns ticket_processed" name="" value="Processed">
					
				</div>
				<!-- ** !. Buttons ** -->
				
				<!-- ** Product Lists ** -->
				
				<div class="">
					<!-- ** bars ** -->
					<div class="prodcut_main_container tracking_barss">
						<div class="order_tacking_bar">
							<ol class="progtrckr" data-progtrckr-steps="5">
								  <li class="progtrckr-todo inprocessed">
								  	<span class="span_date_tarck">27 Oct 2018</span>
								  	<span class="pending_check"><i class="fa fa-check" aria-hidden="true"></i></span>
								  	<span class="span_text"><img class="bar_icons" src="assets/img/order_placed.png">Order Placed</span>
								  </li>
								  <li class="progtrckr-todo">
								  	<span class="span_date_tarck">27 Oct 2018</span>
								  	<span class="pending_check"><i class="fa fa-check" aria-hidden="true"></i></span>
								  	<span class="span_text"><img class="bar_icons" src="assets/img/order_confirmed.png">Order Confirmed</span>
								  </li>
								 <li class="progtrckr-todo">
								 	<span class="span_date_tarck">28 Oct 2018</span>
								 	<span class="pending_check"><i class="fa fa-check" aria-hidden="true"></i></span>
								 	<span class="span_text"><img class="bar_icons" src="assets/img/order_processed.png">Order Processed</span>
								 </li>
								<li class="progtrckr-todo">
									<span class="span_date_tarck">29 Oct 2018</span>
									<span class="pending_check"><i class="fa fa-check" aria-hidden="true"></i></span>
									<span class="span_text"><img class="bar_icons" src="assets/img/out_for_delivery.png">Out for Delivery</span>
								</li>
							</ol>
						</div>
					</div>
					<!-- ** !. bars ** -->
					<!-- ** more details ** -->
					<div class="tracking_more_details">
						<div class="estimate_deliaver">
							<h5>Estimated Delivery Time</h5>
							<p>Tuesday, 28 Oct to 30 Oct</p>
						</div>
						<div class="estimate_deliaver">
							<h5>Billing Address</h5>
							<p>Kamla-Abha Road</p>
							<p>Al-Rajhi Buliding Flat no.22</p>
							<p>Near Kraba Building</p>
						</div>
						<div class="more_methods_opt">
							<div class="more_methods_opt_line">
								<h5 class="opt_line_head">Payment Method</h5>
								<p>:</p>
								<h5 class="opt_line_text">COD</h5>
							</div>
							<div class="more_methods_opt_line">
								<h5 class="opt_line_head">Ordered On</h5>
								<p>:</p>
								<h5 class="opt_line_text">26 Oct 2018 , 10:00</h5>
							</div>
							<div class="more_methods_opt_line">
								<h5 class="opt_line_head">Deliver To</h5>
								<p>:</p>
								<h5 class="opt_line_text">Al-Rajhi Buliding Flat no.22</h5>
							</div>
							<div class="more_methods_opt_line">
								<h5 class="opt_line_head">Mobile Number</h5>
								<p>:</p>
								<h5 class="opt_line_text">7894563582</h5>
							</div>
								
						</div>
					</div>
					<!-- ** more details ** -->
				</div>

				<!-- ** !. Product Lists ** -->
				
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