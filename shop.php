<?php
include "config.php";
include "header.php";
?>
<div class="wrap">
<div class="wrapper">	
	<div class="main" style="margin-top:-50px">
		<h3 class="style"><a href="" style="color:black">Order</a></h3>
			<div class="specials-grids">
            
             <?php
		$t=mysql_query("select * from product");
		while($w=mysql_fetch_array($t))
		{
		$pimage=$w['pimage'];
$pname=$w['pname'];
$pdescp=$w['pdescp'];
$price=$w['price'];
$qty=$w['qty'];
$cat=$w['cat'];
$subcat=$w['subcat'];
$pid=$w['pid'];
		?>
        <div class="special-grid">
						  <div class="gallery img_style">
							 <img src="upload/<?php echo $pimage; ?>" title="<?php echo $pimage; ?>"></a>
						  </div>
							<h3 class="style"><a href="#" style="color:black"><?php echo $pname; ?></a></h3>
							<p><?php echo $pdescp; ?></p><br />
							<p>Rs.<?php echo $price; ?></p><br />
                            <a href="addtocart.php?pid=<?php echo $pid; ?>"><input type="button" value="Order" class="add_cart" /></a></p>
						</div>
                  <?php
				  }
				  ?>
            
            <div class="clear"> </div>
            </div>
		
		<div class="clear"></div>

	</div>
	<div class="clear"></div>
</div>
</div>
 <?php
include "footer.php";
?>
            