<?php
include "config.php";
include "header.php";
?>
<div class="wrap">
<div class="wrapper">	
	<div class="main" style="margin-top:-50px">
		<div class="ser-main">
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="" style="color:black">ITEM INFO</a></h3>
		
			<div class="contact-form">
            
				  	
					  <form method="POST" action="" name="add_product" enctype="multipart/form-data">
                                <div>
						    	<span><label>Category</label></span>
						    	<span><input name="cat" type="text" class="textbox"></span>
						    </div>
						     <div>
						    	<span><label>Item name</label></span>
						    	<span><input name="pname" type="text" class="textbox"></span>
						    </div>
							
                             <div>
						    	<span><label>Item Description</label></span>
						    	<span><input name="pdescp" type="text" class="textbox"></span>
						    </div>                                                     
                            <div>
						    	<span><label>Item type</label></span>
						    	<span><input name="pname" type="text" class="textbox"></span>
						    </div>                                                       
						    <div>
						     	<span><label>Item image</label></span>
						    	<span><input name="pimg" type="file" class="textbox"></span>
						    </div>
                             <div>
						    	<span><label>Amount</label></span>
						    	<span><input name="price" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Quantity</label></span>
						    	<span><input name="qty" type="text" class="textbox"></span>
						    </div>
						    
						   <div>
						   		<span><input type="submit" value="Add Product" name="submit" ></span>
						  </div>
						
					</form>

				    </div>
			
		</div>
		
		
		<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
</div>
 <?php
if(isset($_POST['submit']))
{
$pimage=$_FILES['pimg']['name'];
$pname=mysql_real_escape_string($_POST['pname']);
$cat=$_POST['cat'];
$pdescp=mysql_real_escape_string($_POST['pdescp']);
$price=$_POST['price'];
$qty=$_POST['qty'];
$sid=$_SESSION['sid'];
mysql_query("insert into product(pname,pdescp,cat,price,qty,pimage,sid)values('$pname','$pdescp','$cat','$price','$qty','$pimage','$sid')")or die(mysql_error());
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimage");
echo "<script type='text/javascript'>alert('Item added Successful');</script>";
echo '<meta http-equiv="refresh" content="0;url=add_products.php">';
}
include "footer.php";
?>
            