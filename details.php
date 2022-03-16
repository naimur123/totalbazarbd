<?php
	if( ! ini_get('date.timezone') )
    {
        date_default_timezone_set('GMT');
    }
	include("pageurl.php");
	include ('include/config/dbConfig.php');
	include("header.php");
?>

<style>	
		.tkinline{
		display:inline;
</style>

<div class="container-fluid">

	<div class="row">
	
	<div class="col-sm-1">

	</div>

	<div class="col-sm-10">
	<div class="row">
		<div class="col-md-12" align="center" style="background-color:gray">
			<h4 class="h4" style="color:#fff"> Product Details </h4>
		</div>
	</div>
	
	<br/>
	
	<div class="row">		
    <div  class="list-group list-group-horizontal">    
		<?php
        //get rows query
		$id = $_GET['id'];
		$productName = array();
        $query = $db->query("SELECT * FROM products where id="."'".$id."'"." ORDER BY products_name");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
				array_push($productName,$row["products_name"]);
        ?>
		
		<div class="item col-sm-5">
			
			<img src="admin/items/upload/<?php echo $row['name']; ?>"  class="img-responsive" style="width:100%; height: 300px"/>
		
		</div>


        <div class="item col-sm-5">
							<h3 class="h3" name="prdname"  style="font-weight:bold;padding-top:10px;height:35px;">Item Name: <?php echo $row["products_name"]; ?></h3>	
							<h3 class="h3" style="padding-top:5px;">Item Qty: <?php echo $row["quantity"]; ?></h3>
							<h4 class="h4  tkinline">Item Price: <?php if($row['hot_deals']){echo '<del><h4 class="h4 tkinline"> TK '.$row["price"].'</h4></del> <h4 class="h4 tkinline" style="color:red"> TK ' .$row["hotdeal_price"].'</h4>'; } else if($row['offer_item']){echo '<del><h4 class="h4 tkinline"> TK '.$row["price"].'</h4></del> <h4 class="h4 tkinline" style="color:red"> TK ' .$row["offer_price"].'</h4>'; } else {echo '<h4 class="h4 tkinline"> TK '.$row["price"].'</h4>';}?></h4>

							<a class="btn btn-default" name="product_code" style="width:100%" href="cartAction.php?action=addToCart&id=<?php echo $row["id"];?>&pageurl=<?php echo curPageURL();?>"><p style="color:#FF7067;font-weight:bold"><span class="glyphicon glyphicon-shopping-cart" style="color:#FF7067;font-weight:bold" ></span> Add to Cart</p></a>
       
        </div>
		
		
        
		
		
		
    </div>
	
	</div>
	<br/>
	<div class="row">
		<div class="col-md-12" align="left" style="background-color:gray">
			<h4 class="h4" style="color:#fff">Item Description</h4>
		</div>
		
		<div class="item col-sm-12">
			<br/>
			
			<p class="lead"><?php echo $row["description"]; ?></p>
		
		</div>
		
	</div>
	
	<?php } }else{ ?>
			<p class="lead" style="color:red"><b>Product Details Not Available!</b></p>
        <?php } ?>
	
	<br/>
	
	
	
	<div class="row">
		<div class="col-md-12" align="center" style="background-color:gray">
			<h5 class="h5" style="color:#fff"></h5>
		</div>
	</div>
	
	<br/>
	
	<br/>
	
	</div>
	
	
	<div class="col-sm-1">
	
	
	</div>
	
	</div>
	
</div>

<?php include('footer.php');?>

