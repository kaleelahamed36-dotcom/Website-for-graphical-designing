<?php
include "config.php";
include "header.php";
?>
<div class="wrap">
<div class="wrapper">	
	<div class="main" style="margin-top:-50px">
		<h3 class="style"><a href="" style="color:black">View Order</a></h3>
			<div class="specials-grids">
            
             <table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table">
          <tr><td>Item image</td><td>Item name</td><td>Item Description</td><td>Price</td><td>Qty</td><td>Total Price</td><td>Order date</td></tr>
          <?php
		$stid=$_SESSION['bid'];
		$t=mysql_query("select * from cart where stid=$stid");
		while($w=mysql_fetch_array($t))
		{
$pid=$w['pid'];
$status=$w['status'];
$qty=$w['qty'];
$date=$w['date'];
$u=mysql_query("select * from product where pid=$pid");
		while($y=mysql_fetch_array($u))
		{

		$pimage=$y['pimage'];
$pname=$y['pname'];
$pdescp=$y['pdescp'];
$price=$y['price'];

		?>

          <?php
		  $tot=($qty*$price);
echo "<tr><td><img src='upload/$pimage' height='50px' /></td><td>$pname</td><td>$pdescp</td><td>$price</td><td>$qty</td><td>$tot</td><td>$date</td></tr>";
		  ?>
          
                <?php
				}
				}
				?>
                </table>
               
            
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
            