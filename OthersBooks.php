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
	

	<div class="col-sm-12">
	
	<br/>
	<div class="row">
		<div class="col-md-12" align="center" style="background-color:gray">
			<h4 class="h4" style="color:#fff">Others Books</h4>
		</div>
	</div>
	
	<br/>
	
	<div class="row">		
    <div  class="list-group list-group-horizontal">    
		<?php
        //get rows query
        $limitStart ="";
        if(!isset($_GET['pageNo']) || $_GET['pageNo'] == 1 || $_GET['pageNo'] <=0 ){
            $limitStart = 0;
        }else{
            $limitStart = ($_GET['pageNo']-1)*18;
        }
        
        
        $query = $db->query("SELECT * FROM `products` WHERE `prdsubcategory` ='Others Books' and status='1' ORDER BY products_name LIMIT $limitStart ,18");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>

        <div class="item col-xs-6 col-sm-2" style="padding:5px" !important>
					
					<div class="row" align="center">
						<div class="col-sm-12">
							<img src="admin/items/upload/<?php echo $row['name']; ?>"  class="img-responsive " style="width:100%; height: 150px"/>
		
							<a name="product_details" style="text-decoration:none;" href="details.php?id=<?php echo $row["id"];?>"><h5 class="h5"  style="font-weight:bold;padding-top:10px;height:45px;"><?php echo $row["products_name"]; ?></h5></a> 
							<h5 class="h5" style="padding-top:5px;"><?php echo $row["quantity"]; ?></h5>
							<h4 class="h4  tkinline"><?php if($row['hot_deals']){echo '<del><h4 class="h4 tkinline"> TK '.$row["price"].'</h4></del> <h4 class="h4 tkinline" style="color:red"> TK ' .$row["hotdeal_price"].'</h4>'; } else if($row['offer_item']){echo '<del><h4 class="h4 tkinline"> TK '.$row["price"].'</h4></del> <h4 class="h4 tkinline" style="color:red"> TK ' .$row["offer_price"].'</h4>'; } else {echo '<h4 class="h4 tkinline"> TK '.$row["price"].'</h4>';}?></h4>
							<a class="btn btn-default" name="product_code" style="width:100%" href="cartAction.php?action=addToCart&id=<?php echo $row["id"];?>&pageurl=<?php echo curPageURL();?>"><p style="color:#FF7067;font-weight:bold"><span class="glyphicon glyphicon-shopping-cart" style="color:#FF7067;font-weight:bold" ></span> Add to Cart</p></a>

						</div>
                    </div>
					<br/>            
        </div>
		
        <?php } 
            
        } 
        else{ ?>
			<p class="lead" style="color:red"><b>Others Books NOT AVAILABLE!</b></p>
        <?php } ?>
		
    </div>
	
	</div>
	
	<?php
	// Pagination List Here
	    $query = $db->query("SELECT * FROM `products` WHERE `prdsubcategory` ='Others Books' and status='1'");
	    $count = $query->num_rows /18;
	    $loop = round($query->num_rows /18);
	    if($loop < $count){
	        $loop +=1;
	    }
	    if($loop >1){
	?>
	<div class="row text-center">
	    <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="disabled">
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <?php
                    for($i=1;$i<$loop;$i++){
                ?>
                <li <?php if(!isset($_GET['pageNo']) && $i==1 ){echo 'class="active"';}elseif(isset($_GET['pageNo']) && $_GET['pageNo']== $i) {echo 'class="active"';} ?>><a href="?pageNo=<?=$i?>"><?=$i?></a></li>
                <?php } ?>
                <li class="disabled">
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
            </ul>
        </nav>
	</div>
	<?php } ?>
	
	<div class="row">
		<div class="col-md-12" align="center" style="background-color:gray">
			<h5 class="h5" style="color:#fff"></h5>
		</div>
	</div>
	
	<br/>
	
	<br/>
	
	</div>
	
	</div>
	
</div>

<?php include('footer.php');?>