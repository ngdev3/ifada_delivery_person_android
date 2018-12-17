<?php include 'header.php';?>

<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header">
			  <li class="menu_icon "><a href="#"  ><img src="assets/img/icon/back.png" id="asdf" alt="menu icon"style="width: 13px;" /></a></li>
				<li class="page_name left">
					<a href="#" class="text-left ">
						<p>Wishlist</p>
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
			<div class="mt-10 mycart_itemslist">
				<?php 
				for($i=0; $i<3;$i++){ ?>
				<!-- ** Product Lists ** -->
				
				<div class="no-padding item_lists_main deleted_item">
					<div class="prodcut_main_container">
						<div class="products_wrapper">
							<div class="col-md-3 col-sm-3 col-xs-3 items_img_div">
								<a href="product_detail.php"><img class="img-responsive sub_cat_product_img" src="assets/img/all_category/title_product.png"></a>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 sub_product_desc">
								<input type="button" class="btn btn-default btn_discounts" name="" value="6% Off">
								<a href="product_detail.php"><p class="sub_produt_name">Best Value Arhar Daal</p></a>
								<p class="sub_product_qty">1 Kg</p>
								<p class="sub_prcing"><strike>AED 190</strike><span id="sub_rrp">AED 100</span></p>
							</div>
								<div class="wislist_sub wishlist-container cart_remove">
								  <i class="fa heart fa-trash delete_item"></i> 
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
				<!-- ** !. Product Lists ** -->
				<?php	} ?>
				
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