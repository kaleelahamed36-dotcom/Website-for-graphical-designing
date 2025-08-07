<?php
include "config.php";
include "header.php";
?>
<div class="wrap">
<div class="wrapper">	
	<div class="main" style="margin-top:-50px">
		<h3 class="style"><a href="" style="color:black">View Product</a></h3>
			<div class="specials-grids">
            
             <table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table">
          <tr><td>Category</td><td>Item name</td><td>Item Description</td><td>Item image</td><td>Price</td><td>Quantity</td><td>Action</td></tr>
          <?php
		  $sid=$_SESSION['sid'];
		  if($sid!='')
		  {
		$u=mysql_query("select * from product where sid='$sid'");
		}
		else
		{
		$u=mysql_query("select * from product");
		}
		while($y=mysql_fetch_array($u))
		{

		$pimage=$y['pimage'];
$pname=$y['pname'];
$pdescp=$y['pdescp'];
$price=$y['price'];
$pid=$y['pid'];
$qty=$y['qty'];
$cat=$y['cat'];

		
echo "<tr><td>$cat</td><td>$pname</td><td>$pdescp</td><td><img src='upload/$pimage' width='100px'/></td><td>$price</td><td>$qty</td><td><a href='view_product.php?pid=$pid'>Delete</a></td></tr>";
				}
				?>
                </table>
               
            
            <div class="clear"> </div>
            </div>

	</div>
	<div class="clear"></div>
</div>
</div>
<?php
if($_GET['pid']!='')
{
$pid=$_GET['pid'];
mysql_query("delete from product where pid='$pid'");
echo "<script type='text/javascript'>alert('Item deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_product.php">';
}
include "footer.php";
?>
