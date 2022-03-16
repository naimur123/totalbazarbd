<?php
	if( ! ini_get('date.timezone') )
    {
        date_default_timezone_set('GMT');
    }
    				if(!isset($_SESSION)) 
					{ 
						session_start(); 
					} 
	require_once  'Cart.php';
	$cart = new Cart;
?>

<!DOCTYPE html>
<html>

<head>
	<title>Total Bazar BD</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<link rel="stylesheet" href="include/css/menunavbar.css" />
	<link rel="stylesheet" href="include/css/footer.css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	
<style type="text/css">



  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0;
      width: 100%;
      z-index: 9999 !important;
	  
.navbar-login-session
{
    padding: 10px;
    padding-bottom: 0px;
    padding-top: 0px;
}

.icon-size
{
    font-size: 87px;
}
.navbar-login
{
    width: 305px;
    padding: 10px;
    padding-bottom: 0px;
}

  }

.icon-bar {
	padding:0px;
    margin:0px;
    position:fixed;
    right:-0px;
    top:330px;
    width: 60px;
	height: 40px;
    z-index: 1100;
	
}

.icon-bar a {
  list-style-type:none;
    
    color:#efefef;
    padding:0px;
    margin:0px 0px 1px 0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
}

/* Formatting search box */
    
.result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting search box */
    
.result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
		background-color: white;
		color:black;
		
    }
    .result p:hover{
		font-weight:bold;
        background: white;
		
		color: #ff8000;
    }
    
    
    
    

  </style>
  
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
  
<script type="text/javascript">
		function validateForm() {
    var searchvalue = document.forms["myformsearchvalue"]["query"].value;
   	
    if (searchvalue == "") {
        alert("Please insert your search item");
        return false;
    }
}
</script>

</head>

<body style="width:100%;overflow-x: hidden;" >

<div class="icon-bar">
		
		<a href="viewCart.php" style="text-decoration:none;">
		<div align="center" ><img src="bagt.jpg" alt="My Bag" style="width:60px;height:70px;"></div>
		
		<p class="pv" style="color:black;">
			
		<b style="color:black;"> My Cart </b> <br/>
		
		<b style="color:black;">&nbsp;&nbsp;&nbsp;&nbsp;      (<p class=" pv" id="itemcountnumber" style="color:black;"> <b>
		
		<?php if($cart->total_items() > 0){
				//get cart items from session
				$cartItems = $cart->contents();
			
				$totat_cart_items = 0;
				foreach($cartItems as $item)
				{	
					$totat_cart_items += $item["qty"]; 
				}
				echo $totat_cart_items ;
			}?> </b>)</b></p></a>
</div>


<div class="container-fluid" style="background-color:##E9E6E2;height:60px;padding:5px" !important>
	
	<div class="row" >
		
	<div class="col-md-3" align="center">
		<img src="admin/include/logo.png" alt="Total Bazar" height="60px">	
    </div>
	
	<div class="col-md-6 pv" align="center" style="padding-top:12px;" >
	    <p class="pv" style="color:#08B066;font-weight: bold"><h4><span class="glyphicon glyphicon-earphone" style="color:#EE3232;font-weight: bold" height="40px"> </span> 01977868484, 01977868411</h4></p>
	</div>

	<div class="col-md-3 pv" align="center" style="padding-top:12px;"> 		
    
        
		
			
			
		<?php
					 if(!isset($_SESSION)) 
					{ 
						session_start(); 
					} 
					 if (isset($_SESSION['full_name'])) {
					 ?>
					 
			<div class="pull-right" height="40px">
                <ul class="nav pull-right">
                    <li class="dropdown" ><button class="btn btn-default pv"><a style="text-decoration:none;" href="#" class="dropdown-toggle pv" data-toggle="dropdown"><b>Welcome, User </b><b class="caret"></b></a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <ul class="dropdown-menu" style="padding:20px">
                            <li><b><p><?php echo htmlspecialchars($_SESSION['full_name']); ?></p></b></li>
                            <li><b><p hidden><?php echo htmlspecialchars($_SESSION['userid']); ?></p></b></li>
							<li><b><p><a href="myinfo.php" style="text-decoration:none;">My Information</a></p></b></li>
							<li><b><p><a href="orderHistory.php" style="text-decoration:none;">My Order</a></p></b></li>
                            
                            <li class="divider"></li>
                            <li><p><a href="logout.php" style="text-decoration:none;"><span class="glyphicon glyphicon-log-out" ></span><b>&nbsp; Logout</b></span></a></p></li>
                        </ul>
                    </li>
                </ul>
	
              </div>

					 <?php

					 } else {
					   ?>
							<button type="button" style="background-color:#08B066" class="btn btn-outline-default"><p class="pv" ><a href="login.php" style="text-decoration:none;color:white" height="40px"><span class="glyphicon glyphicon-user" style="color:white;font-weight: bold;"></span>&nbsp;<b> Sign In </b></a></button></p>
					   <?php
					 }
		?>

  </div>
  



<nav class="navbar navbar-default navbar-custom" data-spy="affix" data-offset-top="197" style="width:100%">   
            
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="index.php"><img src="include/images/Home-button.png" height="30px" alt="Home"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				    
                <ul class="nav navbar-nav "> 

							<li style="">
                				<a href="hotdeals.php"  style="color:#ffffff;">Hot Deal</a>					
                			</li>
							
							<li>
                				<a href="offers.php"  style="color:#ffffff;">Offer</a>					
                			</li>
							
							<li class="dropdown">
                				<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff;">Daily Bazar<span class="caret"></span></a>
                				<ul class="dropdown-menu">
										<li><a href="cookings.php" style="color: #ffffff;">Cooking</a></li>
										<li><a href="freshfishmeat.php" style="color: #ffffff;">Fresh Fish & Meat</a></li>
										<li><a href="freshfruitvegetable.php" style="color: #ffffff;">Fruits & Vegetables</a></li>
								</ul>
                			</li>
							
							<li class="dropdown">
                				<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff;">Food<span class="caret"></span></a>
                				<ul class="dropdown-menu">
										<li><a href="babyfood.php" style="color: #ffffff;">Baby Zone</a></li>
										<li><a href="beverage.php" style="color: #ffffff;">Beverages</a></li>
										<li><a href="breakfasts.php" style="color: #ffffff;">Breakfast</a></li>
										<li><a href="dairyfood.php" style="color: #ffffff;">Dairy Food</a></li>
										<li><a href="fastfoods.php" style="color: #ffffff;">Fast Food</a></li>
										<li><a href="organic.php" style="color: #ffffff;">Organic & Traditional Food</a></li>
										<li><a href="snack.php" style="color: #ffffff;">Snacks</a></li>
								</ul>
                			</li>
							
							
                			
                			<li>
                				<a href="bookstationary.php" style="color: #ffffff;">Books & Stationary</a>								
                			</li>
							
							<li>
                				<a href="medicines.php" style="color: #ffffff;">Medicine</a>								
                			</li>
                            
							<li class="dropdown">
                				<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff;">Appliances<span class="caret"></span></a>	
									<ul class="dropdown-menu">
									    <li><a href="Electronics.php" style="color: #ffffff;">Electronics</a></li>
										<li><a href="ElectricalItem.php" style="color: #ffffff;">Electrical Item</a></li>
										<li><a href="Furniture.php" style="color: #ffffff;">Furniture</a></li>
										<li><a href="KitchenAppliance.php" style="color: #ffffff;">Kitchen Appliances</a></li>
										<li><a href="carvehicles.php" style="color: #ffffff;">Car & Vehicles</a></li>
									</ul>
                			</li>
							
							<li class="dropdown">
                				<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff;">Fashion & Beauty<span class="caret"></span></a>	
									<ul class="dropdown-menu">
										<li><a href="cosmetic.php" style="color: #ffffff;">Cosmetics</a></li>
										<li><a href="#" style="color: #ffffff;">Men</a></li>
										<li><a href="#" style="color: #ffffff;">Women</a></li>
										<li><a href="#" style="color: #ffffff;">Kids</a></li>
									</ul>
                			</li>
                			
                			<li class="dropdown">
                				<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff;">Household<span class="caret"></span></a>	
									<ul class="dropdown-menu">
										<li><a href="AmateurAccessories.php" style="color: #ffffff;">Amateur Accessories</a></li>
										<li><a href="AirFreshners.php" style="color: #ffffff;">Air Freshners</a></li>
										<li><a href="CleaningItems.php" style="color: #ffffff;">Cleaning Items</a></li>
										<li><a href="kitchenAccessories.php" style="color: #ffffff;">kitchen Accessories</a></li>
										<li><a href="PestControl.php" style="color: #ffffff;">Pest Control</a></li>
									    <li><a href="PlasticProducts.php" style="color: #ffffff;">Plastic Products</a></li>
										<li><a href="Shoecare.php" style="color: #ffffff;">Shoe care</a></li>
										<li><a href="ToiletItems.php" style="color: #ffffff;">Toilet Items</a></li>
									    <li><a href="WashingItems.php" style="color: #ffffff;">Washing Items</a></li>
									</ul>
                			</li>

							<li class="dropdown">
                				<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff;">Builders<span class="caret"></span></a>	
									<ul class="dropdown-menu">
										<li><a href="BricksSilica.php" style="color: #ffffff;">Bricks & Silica</a></li>
										<li><a href="CementPaint.php" style="color: #ffffff;">Cement & Paints</a></li>
										<li><a href="GlassInteriorItems.php" style="color: #ffffff;">Glass & Interior Items</a></li>
										<li><a href="Hardware.php" style="color: #ffffff;">Hardware</a></li>
										<li><a href="MetalItem.php" style="color: #ffffff;">Metal & Steal Items</a></li>
										<li><a href="StoneCeramics.php" style="color: #ffffff;">Stone & Ceramics</a></li>
										<li><a href="SanitaryBathroomFittings.php" style="color: #ffffff;">Sanitary & Bathroom Fittings</a></li>

									</ul>
                			</li>
							
							<li>
                				<a href="sport.php"  style="color: #ffffff;">Sports & Athletics</a>						
                			</li>							
							
							<li style="">
                				<a href="requestorder.php"  style="color: #ffffff;">Request</a>						
                			</li>
                </ul>   
				</div>
			
</nav>

</div>

<div class="container">
	
	<div class="row">
		<div class="col-md-3">
		
		</div>
		
		<div class="col-md-6">
			<form action="search.php" method="GET" name="myformsearchvalue" onsubmit="return validateForm()">
		<div class="input-group" style="border: 3px solid #2E89EA;padding:0px;">
		
		<div class="search-box">
			<input type="text" class="form-control input-lg" style="color:green;font-weight:bold;font-family:Courier;" placeholder="Search Your Items"  type="text" name="query">
			<div class="result" align="left"></div>
		</div>
		
      <div class="input-group-btn">
        <button class="btn btn-block btn-lg" type="submit" style="background-color:#2E89EA;color:#fff;border: 0px solid;font-family:Courier;"  value="Search"><b>Search</b></button>
      </div>
    </div>
		</form>
		</div>
		
		<div class="col-md-3">
		
		</div>
	</div>
	
	<br/>

</div>




<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b0d8f7b10b99c7b36d46df8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


