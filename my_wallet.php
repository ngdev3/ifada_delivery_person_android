<?php include 'header.php';?>
<style>
    .ty_main .enter-user-name {
        margin-top: 80px;
        
        margin-bottom: 55px;
        font-size: 20px;
    }

    .wallet-balance {
        
        font-size: 17px;
        margin-bottom: 35px;
        color: #51a900;
        text-align: left;
    }

    .wallet-balance span {
        border-bottom: 0px solid #51a900;
    }

    .add-balance-money {
        color: #93989B;
        
    }

    .add-balance-money {
        margin-bottom: 10px;
    }


    .wallet {
        padding-left: 15px;
        padding-right: 15px;
    }

    .choose-payment h5 {
        margin-top: 25px;
        
        font-size: 15px;
        font-weight: 300;
        text-align: center;
        line-height: 22px;
        margin-bottom: 25px;
        text-transform: uppercase;
        color: #585858;
    }

    label.amount-label-balance {
        float: left;
        width: 23%;
        
        font-weight: 300;
        padding-top: 6px;
    }

    

    .card-header h6 {
        margin-top: 0px;
    }

    .card-header button {
        padding: 0px;
        color: #000000;
        letter-spacing: 0.5px;
    }

    .card-header {
        border-radius: 0;
        box-shadow: none;
        padding: 12px 15px;
        background-color: rgba(0, 0, 0, 0.08);
    }

    div#accordionExample {
        border: 1px solid #ebebeb;
        clear: both;
        overflow: hidden;
    }
    .card-body{
        padding: 15px 15px;
        overflow: hidden;
    }
    div#collapseOne {
        font-size: 13px;
        width: 100%;
        float: left;
        border: 1px solid #ebebeb;
    }

    .btn-link:focus,
    .btn-link:hover {
        color: #000;
    }

    .credit-card {
        float: left;
        width: 100%;
        margin: 7px 0 15px 0;
    }

    .choose-payment form {
        margin-top: 0px;
        width: 100%;
    }

    .checkout-cc {
        width: 11%;
        float: left;
    }

    .Add-Payment {
        float: right;
        width: 89%;
    }

    .add-pay {
        margin-top: 17px;
        overflow: hidden;
        clear: both; 
    }

    .add-pay button {
        background: #51a900;
        border: 1px solid #51a900;
        color: #fff;
        padding: 7px 14px;
        border-radius: 5px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        display: block;
    }
	.form-control:focus {
    border-color: #006d07;}
</style>

<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header">
			  
				<li class="menu_icon back_icon"><a href="#"  ><img style="width:13px;" src="assets/img/icon/back.png" id="asdf" alt="menu icon" /></a></li>
			  <li class="logo_name"><a class="text-left back">My Wallet</a></li>
			  
			</ul>
			
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
 <div class="ty_main wallet mt-70">
        <!--<div style="margin-top: 80px;
        font-family: Montserrat-Light;
        font-size: 20px;">{{usedata.username}}</div>
        <div class="enter-user-name" style="margin-top: 14px;">{{usedata.phone_no}}</div> -->
		
		
		
		<div class="wallet_bal">
			<div class="bal_heading">
				<p><img src="assets/img/icon/wallet.png"/></p>
				<p>Wallet balance</p>
			</div>
			<div class="bal_amt">
				<div class="bal_amt_wrapper">
					<p>₹ 400</p>
				</div>
			</div>
		</div>
		
		
		
        <div class="add-balance-money"><span>Add Money</span></div>
       


	   <div class="choose-payment">
            <!-- <h5>Choose a Payment Method for add money</h5> -->
            <form method="post" name="profileForm" class="form-label" novalidate>
			
			
				<div class="credit-card">
                    <div class="accordion1" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                                <h6 class="mb-0">
                                    <button class="btn btn-link" type="button" ><i class="fa fa-credit-card"
                                            aria-hidden="true"></i>&nbsp;&nbsp;Credit or Debit Card</button>
                                </h6>
                            </div>

                            <div id="collapseOne" class="collapse in show1" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body show">
                                    <!-- <div class="checkout-cc"><input type="checkbox" ng-model="creditpay" name="creditpay" required></div> -->

                                    <div class="pretty p-icon p-curve p-pulse">
                                            <input type="checkbox" ng-model="creditpay" name="creditpay" required>
                                            <div class="state p-info-o">
                                                <i class="icon fa fa-check"></i>
                                                <label>ccAvenue</label>
                                            </div>
                                        </div>

                                    <!-- <div class="Add-Payment"><i class="fa fa-cc" aria-hidden="true"></i>&nbsp;Checkout
                                        with
                                        ccAvenue</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="amount-input-wallet">
                    <input type="number" class="form-control required" ng-model="amount" name="amount" required id="amount"
                        placeholder="Enter Amount" >
                    <span id="amount_id"></span>
					<button type="submit" class="add-round-pay-off" ng-click="update_profile('profileForm')">Add Money</button>
                </div>

                
                    <!--<div class="add-pay"><button type="submit" class="add-round-pay-off" ng-click="update_profile('profileForm')">Add
                            Payment&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></div>-->
            </form>
        </div>
		<div class="point_hist" style="margin: 20px 0px 5px 0px;">
    	<p style="border-bottom: 2px solid #006d07;text-align:left;border-top:0px;">Your Wallet History</p>
    </div>
	<div class="redeem_table_div">
		<table class="table redeem_table">
			<thead class="">
				<tr>
					<td scope="col">Date</td>
					<td scope="col">Earn By</td>
					<td scope="col">Amount</td>
					<td scope="col">CR/DR</td>
				</tr>
			</thead>
			<tbody>
				<tr>
				  <th style="text-align:center;font-weight:400;">12/12/2018</th>
				  <td>paytm</td>
				  <td>200</td>
				  <td>larry</td>
				</tr>
				<tr>
				  <th style="text-align:center;font-weight:400;">12/12/2018</th>
				  <td>paytm</td>
				  <td>200</td>
				  <td>larry</td>
				</tr>
				<tr>
				  <th style="text-align:center;font-weight:400;">12/12/2018</th>
				  <td>paytm</td>
				  <td>200</td>
				  <td>larry</td>
				</tr>
				
			</tbody>
		</table>
	</div>
    </div>
<script>

    $('.digit1 input').keyup(function(){
        if($(this).val().length==$(this).attr("maxlength")){
            $(this).next().focus();
        }
    });

</script>	
<?php include 'footer.php';?>