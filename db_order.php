<?php include 'header.php';?>
<style type="text/css">
	
.modal-header{
	padding: 10px;
	border-bottom: 1px solid #e5e5e5;
}
.modal-body {
    position: relative;
    padding: 10px 15px;
}
.modal-footer {
    padding: 10px;
    text-align: center;
    border-top: 1px solid #e5e5e5;
}
.modal-footer button{
    padding: 5px 25px;
    background-color: #006d07;
    color: #fff;
}
.tracking_btn {
    padding: 5px 10px;
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
						<p>List Orders</p>
					</a>
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
				
				<!-- About Product Of a Customer -->
				<div class="about_customer db_order_main_div">
					<div class="cust_address">
						<h4 class="cust_name mb-0">Order ID: <span>OD08842</span></h4>
					</div>
					<div class="db_delivery_add">
						<div class="db_delivery"><h4>Deliver To<span>:</span></h4></div>
						<div class="db_place"><h4>4 Clarke Street South, Abu Dubai</h4></div>
					</div>
					<div class="db_delivery_details mb-15">
						<div class="db_phone"><h4>Mobile No.<span>:</span></h4></div>
						<div class="db_number"><h4>998548547625</h4></div>
					</div>
					<div class="order_status">
						<div class="delivered status_btn"><a href="#">Delivered</a></div>
					</div>
					<div class="db_view_order">
						<div class="view_details_btn"><a href="#">View Details</a></div>
					</div>
				</div>
				<!--2nd part -->				
				<div class="about_customer db_order_main_div">
					<div class="cust_address">
						<h4 class="cust_name mb-0">Order ID: <span>OD08842</span></h4>
					</div>
					<div class="db_delivery_add">
						<div class="db_delivery"><h4>Deliver To<span>:</span></h4></div>
						<div class="db_place"><h4>4 Clarke Street South, Abu Dubai</h4></div>
					</div>
					<div class="db_delivery_details mb-15">
						<div class="db_phone"><h4>Mobile No.<span>:</span></h4></div>
						<div class="db_number"><h4>998548547625</h4></div>
					</div>
					<div class="order_status">
						<div class="delivery status_btn"><a href="#">Out For Delivery</a></div>
					</div>
					<div class="db_view_order">
						<div class="view_details_btn"><a href="#">View Details</a></div>
					</div>
				</div>
				<!--2nd part ends -->
				<!--3rd part -->
				<div class="about_customer db_order_main_div">
					<div class="cust_address">
						<h4 class="cust_name mb-0">Order ID: <span>OD08842</span></h4>
					</div>
					<div class="db_delivery_add">
						<div class="db_delivery"><h4>Deliver To<span>:</span></h4></div>
						<div class="db_place"><h4>4 Clarke Street South, Abu Dubai</h4></div>
					</div>
					<div class="db_delivery_details mb-15">
						<div class="db_phone"><h4>Mobile No.<span>:</span></h4></div>
						<div class="db_number"><h4>998548547625</h4></div>
					</div>
					<div class="order_status">
						<div class="reschedule status_btn"><a href="#">Re-scheduled</a></div>
					</div>
					<div class="db_view_order">
						<div class="view_details_btn"><a href="#">View Details</a></div>
					</div>
				</div>
				<!--3rd part ends -->
				<!--4th part -->
				<div class="about_customer db_order_main_div">
					<div class="cust_address">
						<h4 class="cust_name mb-0">Order ID: <span>OD08842</span></h4>
					</div>
					<div class="db_delivery_add">
						<div class="db_delivery"><h4>Deliver To<span>:</span></h4></div>
						<div class="db_place"><h4>4 Clarke Street South, Abu Dubai</h4></div>
					</div>
					<div class="db_delivery_details mb-15">
						<div class="db_phone"><h4>Mobile No.<span>:</span></h4></div>
						<div class="db_number"><h4>998548547625</h4></div>
					</div>
					<div class="order_status">
						<div class="inprocess status_btn"><a href="#">In-Process</a></div>
					</div>
					<div class="db_view_order">
						<div class="view_details_btn"><a href="#">View Details</a></div>
					</div>
				</div>
				<!--4th part ends-->
			</div>
		</div>
	</div>
<!--  !. [PULSES] Sub categories content -->
<!-- modal box -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-vcenter">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Update Status</h4>
      </div>
      <div class="modal-body">
        <!-- Content Of modal-->
				<div class="radio mb-20 mt-10">
					<input id="radio-1" name="radio" type="radio">
					<label for="radio-1" class="radio-label"><span>On the way</span></label>
				</div>
			  <div class="radio mb-20">
				<input id="radio-2" name="radio" type="radio">
				<label for="radio-2" class="radio-label"><span>Delivered</span></label>
			  </div>
			  <div class="radio mb-20">
				<input id="radio-3" name="radio" type="radio">
				<label for="radio-3" class="radio-label"><span>Cancelled</span></label>
			  </div>

        <!-- Content Of modal-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
      </div>
    </div>

  </div>
  </div>
</div>	

	
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