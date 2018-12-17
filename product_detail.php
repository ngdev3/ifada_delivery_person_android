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
						<p>Pulses</p>
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
				<div class="pulses_buttons mb-20 mt-10">
					<div id="" class="owl-carousel owl3 owl-theme">
						<!-- Buttons Items -->
						<div class="item">
							<div class="prod_images">
								<img class="img-responsive" src="assets/img/product/product_detail.png">
							</div>
						</div>
						<div class="item">
							<div class="prod_images">
								<img class="img-responsive" src="assets/img/product/product_detail.png">
							</div>
						</div>
						<div class="item">
							<div class="prod_images">
								<img class="img-responsive" src="assets/img/product/product_detail.png">
							</div>
						</div>
						
						<!-- !. Buttons Items -->
					</div>
				</div>
				<!-- ** !. Buttons ** -->
				
				<!-- ** Product Details Lists ** -->
				
				<div class="no-padding item_lists_main">
					<div class="prodcut_main_container">
						<div class="products_wrapper">
							<div class="col-md-3 col-sm-3 col-xs-3 items_img_div">
								<img class="img-responsive sub_cat_product_img" src="assets/img/all_category/title_product.png">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 sub_product_desc">
								<input type="button" class="btn btn-default btn_discounts" name="" value="6% Off">
								<p class="sub_produt_name">Best Value Arhar Daal</p>
								<p class="sub_product_qty">1 Kg</p>
								<p class="sub_prcing"><strike>AED 190</strike><span id="sub_rrp">AED 100</span></p>
							</div>
								<div class="wislist_sub wishlist-container">
								  <i class="fa heart fa-heart-o un_fill"></i> 
								</div>
								<div class="sub_add_product">
									<div class="add_item_container sub_add_btn">
										<div class="add_item_button sub_add_btn" style="display: none;">
										    <button class="add_item sub_add_btn"><span class="additem_span">+</span></button>
										   <input type="text" value="1" disabled="">
										  
										   <button class="less_item sub_add_btn"><span class="additem_span">-</span></button>
										</div>
										<div class="add_cart_button sub_add_btn">
										   <button class="">Add</button>
										</div>
									</div>
								</div>
						</div>
					</div>
				</div>
				<!-- ** !. Product Details Lists ** -->
				<!-- ** Product Units ** -->
				<div class="product_untis">
					<h5 class="unit_head">Units</h5>
					<div class="unit_container">
						<input type="button" class="btn btn-default marked" name="" value="500 gm">
						<input type="button" class="btn btn-default" name="" value="1 Kg">
					</div>
				</div>
				<!-- ** !. Product Units ** -->
				<!-- ** Product Details ** -->
					<div class="pro_det_sh">
						<div class=" panel-group all_cat_panel_group" id="accordion" role="tablist" aria-multiselectable="true">
						    <div class="all_cat panel panel-default">
						        <div class="panel-heading" role="tab" id="headingOne">
						             <h4 class="prod_det_panel  panel-title prod_details_head">
						        		<a class="all_cat_headbar collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						        			Product Details
						        		</a>
						      		</h4>
						      	</div>
						        <div id="collapseOne" class="panel-collapse collapse col-xs-12 all_cat_below_div" role="tabpanel" aria-labelledby="headingOne">
						            <div class="prod_dec panel-body">
						            	
						            	<!-- Inside -->
						            	<p>Wholesome Pulse</p>
						            	<p>Healthy and Nutiritions</p>
						            	<p>Used in variety of preparations</p>
						            	

						            </div>
						        </div>
						    </div>
						</div>
					</div>
				<!-- ** !. Product Details ** -->
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