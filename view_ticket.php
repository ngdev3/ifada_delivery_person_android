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
						<p>View Ticket</p>
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
				
				<div class="no-padding item_lists_main tickets_view_details">
					<div class="prodcut_main_container">
						<div class="products_wrapper ticket_wrapper">
							<div class="tickets_date">
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
										<h5>Date & Time</h5>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 no-padding complaint_content">
										<h5>27-06-2018  10:27</h5>
									</div>
									
								</div>
							</div>
							<div class="tickets_deatils">
								<div class="row padding_ticket">
									<div class="col-md-5 col-sm-5 col-xs-5 no-padding">
										<h5>Order Number</h5>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 no-padding complaint_content">
										<h5>0D948</h5>
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
										<h5>Description</h5>
									</div>
									<div class="col-md-7 col-sm-7 col-xs-7 no-padding complaint_content">
										<h5 style="text-align: justify; line-height: 1.4em">Lorem Ipsum s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</h5>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- ** !. Ticket Lists In process ** -->

				<!-- TICKETS Q/A -->
				<div class="row padding products_wrapper ticket_wrapper">

					<div class="col-md-12 col-sm-12 col-xs-12 padding_container">
						<h4 class="ticket_logs_heading">Ticket Logs</h4>
					</div>
					<div class="row padding_container">
						<div class="col-md-12 col-xs-12 col-sm-12 ticket_wrapper chat_window">
							<div class="chat_window_start">
								<ul class="chat_start">
									<li class="chat_thread by_support">
										<h5>Support Team</h5>
										<p class="chat_desc">Lorem Ipsum Dummy Test?</p>
										<small class="chat_time">23 OCT 2018, 10:30</small>

									</li>
									<li class="chat_thread by_user">
										<h5>Adam Zampa</h5>
										<p class="chat_desc">Thankyou for Lorem</p>
										<small class="chat_time">23 OCT 2018, 13:19</small>

									</li>
									<li class="chat_thread by_user">
										<h5>Adam Zampa</h5>
										<p class="chat_desc">When i will get the Lorems??</p>
										<small class="chat_time">23 OCT 2018, 15:45</small>

									</li>
									<li class="chat_thread by_support">
										<h5>Support Team</h5>
										<p class="chat_desc">You will get Sooon. Delivery boy will reach soon.</p>
										<small class="chat_time">23 OCT 2018, 16:05</small>

									</li>
								</ul>
								<div class="send_box">
									<input type="text" class="reply_input" name="" placeholder="Reply....">
									<button class="sned_chat_btn"><i class="fa fa-paper-plane send_chect_icon" aria-hidden="true"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- !. TICKETS Q/A -->
				
				
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
    <script type="text/javascript">
    	$(document).ready(function(){
    		$(".send_chect_icon").click(function(){
    			var date1=new Date();

    			var months=["JAN","FEB","MAR","APR","MAY","JUN","JUL",
					"AUG","SEP","OCT","NOV","DEC"];
					var valdate =date1.getDate()+" "+months[date1.getMonth()]+" "+date1.getFullYear();

    			var currentdate = new Date(); 
    			var datetime = valdate + ", " + currentdate.getHours() + ":" + currentdate.getMinutes(); 
    			var chatval = $(".reply_input").val();
    			$(".chat_start").append("<li class='chat_thread by_user'><h5>Adam Zampa</h5><p class='chat_desc'>"+chatval+"</p><small class='chat_time'>"+datetime+"</small></li>");
    			$(".reply_input").val("");

    		});
    		
    		$('.reply_input').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        var date1=new Date();

    			var months=["JAN","FEB","MAR","APR","MAY","JUN","JUL",
					"AUG","SEP","OCT","NOV","DEC"];
					var valdate =date1.getDate()+" "+months[date1.getMonth()]+" "+date1.getFullYear();

    			var currentdate = new Date(); 
    			var datetime = valdate + ", " + currentdate.getHours() + ":" + currentdate.getMinutes(); 
    			var chatval = $(".reply_input").val();
    			$(".chat_start").append("<li class='chat_thread by_user'><h5>Adam Zampa</h5><p class='chat_desc'>"+chatval+"</p><small class='chat_time'>"+datetime+"</small></li>");
    			$(".reply_input").val("");
    }
});
    	});
    </script>
<?php include 'footer.php';?>
