<?php include 'header.php';?>

<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header">
			  <li class="menu_icon "><a href="#"  ><img src="assets/img/icon/back.png" id="asdf" alt="menu icon"style="width: 13px;" /></a></li>
				<li class="page_name left">
					<a href="#" class="text-left ">
						<p>All Categories</p>
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

<!--  All categories content -->
	<div class="container-fluid mt-55">
		<div class="row">
			<div class="container">
				<?php 
				for($i=0; $i<4;$i++){ ?>
					<!-- ** Slides Content ** -->
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 no-padding all_cat_boxsing">
						<div class="panel-group all_cat_panel_group" id="accordion" role="tablist" aria-multiselectable="true">
						    <div class="all_cat panel panel-default">
						        <div class="panel-heading" role="tab" id="headingOne">
						            <h4 class="all_cat_panelt panel-title">
										<a class="all_cat_headbar collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_<?=$i?>" aria-expanded="false" aria-controls="collapseOne">
										  <div class="all_cat_head_img">
											<img class="all_cat_title_img img-responsive" src="assets/img/all_category/title_product.png">
										  </div>
										  <div class="all_cat_headings">
											<h4 class="all_cat_title">Grocery</h4>
											<p class="all_cat_desc">Pulses, Rice & Flour Dry Fruits,</p>
											<h5 class="all_cat_tags">Spices, Breads</h5>
										  </div>
										</a>
									</h4>

						        </div>
						        <div id="collapseOne_<?=$i?>" class="panel-collapse collapse col-xs-12 all_cat_below_div" role="tabpanel" aria-labelledby="headingOne">
						            <div class="all_cat_body panel-body">
						            	
						            	<!-- Product Grid -->
						            	
						            		<!-- == row 1 == -->
						            	<div class="row">
						            		<a href="sub_categories.php"><div class="col-md-4 col-sm-4 col-xs-4 text-center all_cat_odd_bg mt-5">
						            			<img class="all_cat_product_img img-responsive" src="assets/img/all_category/p1.png">
						            			 <p class="all_cat_product_name">Pulses</p>
						            		</div></a>
						            		<a href="sub_categories.php"><div class="col-md-4 col-sm-4 col-xs-4 text-center all_cat_odd_bg mt-5">
						            			<img class="all_cat_product_img img-responsive" src="assets/img/all_category/p2.png">
						            			 <p class="all_cat_product_name">Rice</p>
						            		</div></a>
						            		<a href="sub_categories.php"><div class="col-md-4 col-sm-4 col-xs-4 text-center all_cat_odd_bg mt-5">
						            			<img class="all_cat_product_img img-responsive" src="assets/img/all_category/p3.png">
						            			 <p class="all_cat_product_name">Flour</p>
						            		</div></a>
						            	
						            		<!-- !. == row 1 == -->
						            		<!--  == row 2 == -->
						            	
						            		<a href="sub_categories.php"><div class="col-md-4 col-sm-4 col-xs-4 text-center all_cat_odd_bg mt-5 ">
						            			<img class="all_cat_product_img img-responsive" src="assets/img/all_category/p4.png">
						            			 <p class="all_cat_product_name">Dry Fruits</p>
						            		</div></a>
						            		<a href="sub_categories.php"><div class="col-md-4 col-sm-4 col-xs-4 text-center all_cat_odd_bg mt-5">
						            			<img class="all_cat_product_img img-responsive" src="assets/img/all_category/p5.png">
						            			 <p class="all_cat_product_name">Spices</p>
						            		</div></a>
						            		<a href="sub_categories.php"><div class="col-md-4 col-sm-4 col-xs-4 text-center all_cat_odd_bg mt-5">
						            			<img class="all_cat_product_img img-responsive" src="assets/img/all_category/p6.png">
						            			 <p class="all_cat_product_name">Breads</p>
						            		</div></a>
						            	
						            		<!--  !. == row 2 == -->
						            	</div>
						            
						            	<!-- !. Product Grid -->

						            </div>
						        </div>
						    </div>
    
						</div>
					</div>
				</div>
					<!-- !. ** Slides Content ** -->
				
				<?php	} ?>
				
				
			</div>
		</div>
	</div>
<!--  !. All categories content -->
	

	
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