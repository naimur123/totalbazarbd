
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="foooter.css">

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    
<script>
    $(document).ready(function(){
        $value = $('#cart_val').val();
        if($value > 0){
            $('#place-order').show();
            $('#continue-shoping').hide();
        }else{
            $('#place-order').hide();
            $('#continue-shoping').show();
        }
    });
    function go(ids){
            
				$.ajax({
                    url:'insertCart.php',
                    method:'POST',
                    data:{
                        id:ids,
						qty:1
                    },
                    success:function(data){
                        //alert(data);
                        $('#cart_item').html('('+data+')');
                   }
                });
			}

			function decrease(id){
				var x = document.getElementById(id);				
				var a = parseInt(x.value);	
				if(a>1){
				a = a-1;
				}				
				x.value = a;
				
			}
			function increase(id){
				var x = document.getElementById(id);
				var a = parseInt(x.value);
				a = a+1;
				x.value = a;
			}
</script>

<br/>

<footer>
    <div class="footer" id="footer">
        <div class="container">
			
			<div class="row">
				<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <img src="admin/include/logo.png" alt="Moshla Bazar" height="100px">	
                </div>
				<div class="col-lg-10  col-md-10 col-sm-10 col-xs-12">
                    <p class="lead">Out of the traditional market system, the name of a modern and technologically marketable market is Total Bazar BD'</p>
                </div>
			</div>

			
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6">
                    <h3 class="h3"> Products Category </h3>
                    <ul>
                        <li> <a href="cookings.php"> Cooking </a> </li>
                        <li> <a href="dairyfood.php">  Dairy Food </a> </li>
                        <li> <a href="medicines.php">  Medicine</a> </li>
                        <li> <a href="sport.php"> Sports </a>  </li>
						<li> <a href="bookstationary.php"> Books & Stationary </a> </li>
                    </ul>
                </div>
                
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6">
                    <h3 class="h3"> Customer Service </h3>
                    <ul>
                        <li> <a href="#"> Contact Us </a> </li>
                        <li> <a href="#"> About Us </a> </li>
                        <li> <a href="#"> Privacy Policy </a> </li>
                        <li> <a href="#"> FAQS </a> </li>
						<li> <a href="#"> Terms of Use </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6">
                    <h3 class="h3"> Payment Option </h3>
                    <ul>
                        <li> <img src="include/images/cash.png" alt="Cash on Delivery" height="100x"> &nbsp; &nbsp; <img src="include/images/bkash.png" alt="Bkash" height="100px"></li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3 class="h3"> Be Connected </h3>
                    <ul class="social">
						<li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-lg fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-lg fa-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Copyright &copy; Total Bazar BD. All right reserved. </p>
            <div class="pull-right">
                
            </div>
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>