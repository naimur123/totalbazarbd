<?php
	if( ! ini_get('date.timezone') )
    {
        date_default_timezone_set('GMT');
    }
// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;
?>

<!DOCTYPE html>
<html lang="en">
<head>


   
	<script type="text/javascript">
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
	
	<script type="text/javascript">
		function validateForm() {
    var coupon = document.forms["myformcoupon"]["txtcoupon"].value;
   	
    if (coupon == "") {
        alert("Please insert your coupon code");
        return false;
    }
}
</script>
		

</head>




<body>

<?php
	include('header.php');
?>


<div class="container" align="center">
		
			<div class="row">
			
			<div class="col-md-1">
			
			</div>
			
			<div class="col-md-10">
						
				<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>Product</th>
			<th>Product Name</th>
            <th>Price(TK)</th>
			<th>Unit</th>
            <th>Quantity</th>
            <th>Subtotal(TK)</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><img src="admin/items/upload/<?php echo $item['name']; ?>"  class="img-responsive " style="width:50px; height: 40px"/></td>
			<td><?php echo $item["prdname"]; ?></td>
            <td><?php echo $item["price"]; ?></td>
			<td><?php echo $item["unit"]; ?></td>
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo $item["subtotal"]; ?></td>
            <td>
                <!--<a href="cartAction.php?action=updateCartItem&id=" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>-->
                <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="6"><p>Your cart is empty.....</p></td>
        <?php } ?>		
    </tbody>
	
    </table>
		</div>
						
			</div>
			
			<div class="col-md-1">
			
			</div>
			
		</div>	
			
			<div class="row">
				<form method="post" name="myformcoupon" onsubmit="return validateForm()">
				<div class="col-md-2">
					
				</div>
				
				<div class="col-md-4">
				
					<?php
						if(isset($errMSG)){
						?>
						<div class="alert alert-danger">
							<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
						</div>
					<?php
					}
					else if(isset($successMSG)){
					?>
					<div class="alert alert-success">
						<strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
					</div>
					<?php
					}
					?>  
					
					<div class="form-group">
					
						<b>Discount Code</b> <input type="text" name="txtcoupon" id="txtcoupon" class="form-group"/>&nbsp;<button name="btn_coupon" id="btn_coupon" class="btn btn-success" width="250px" type="submit"><b>Apply Coupon</b></button>
					
					</div>	
					
					
					
				</div>
				
				<div class="col-md-3">
										
					<table class="table table-striped table-hover table-bordered">
						
						<tbody>
							
							<tr>
								<td><b>Sub Total</b></td>
								<td name="subtotal"><?php if($cart->total_items() > 0){ ?>
										<?php echo $cart->total(); ?>						
										<?php } ?>
								</td>
							</tr>

							<tr>
								<td><b>Shipping Charge</b></td>
								<?php
								//$con = mysqli_connect("localhost", "root", "", "totalbazarbd");
								$con = mysqli_connect("localhost", "totalbazarbd_totalbazarwebsite", "Total@1010", "totalbazarbd_totalbazarbd");
								$res = mysqli_query($con, "SELECT shippingcost FROM shipping_fee WHERE active='1'");
								$row = mysqli_fetch_assoc($res);
								$value = $row["shippingcost"];
								?>
								<td><?php echo $value ?></td>
							</tr>
							
							<tr>
								<td><b>Total</b></td>
								
								<td name="total"><?php if($cart->total_items() > 0){ ?>
										<?php $to = $cart->total(); if($value){echo $to+$value;}?>
										<?php } ?>
								</td>
							</tr>
								
							
						</thead>
					
					</table>
					
				</div>

				<div class="col-md-3">
						
				
				</div>
				</form>
			</div>
			
			<div class="row">
				
				<div class="col-md-1">
								
				</div>
				
				<div class="col-md-6">
					
					<a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
				
				</div>
				
				<div class="col-md-2">
				
				</div>
				
				<div class="col-md-2">
					
					<a href="checkout.php" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a>
				
				</div>
				
				<div class="col-md-1">
									
				</div>
				
			</div>
			
		</div>


<div class="container-fluid">


</div>

<br/>

<br/>

<br/>
<br/>

<br/>
<br/>

<br/>


<?php include('footer.php');?>