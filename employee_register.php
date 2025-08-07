<?php
include "config.php";
include "header.php";
?>
<div class="wrap">
<div class="wrapper">	
	<div class="main" style="margin-top:-100px">
		<div class="ser-main">
		
		
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="" style="color:black">Employee registration</a></h3>
		
			<div class="contact-form">
            
				  	
					  <form method="post" action="" name="employee_register">
                                <div>
						    	<span><label>USERNAME</label></span>
						    	<span><input name="username" type="text" class="textbox"></span>
						    </div>
						    <div>
								<span><label>PASSWORD</label></span>
								<span><input name="password" type="password" class="textbox" pattern="[!@#$%^&*(),.?\":{}|<>]+" title="Password must contain only special characters"></span>
							</div>
							
                             <div>
						    	<span><label>DATE</label></span>
						    	<span><input name="date" type="text" class="textbox"></span>
						    </div>
						    <div>
								<span><label>MOBILE NO</label></span>
								<span>
									<input name="mobileno" type="text" class="textbox" pattern="[0-9]{10}" title="Mobile number must be exactly 10 digits" required>
								</span>
							</div>
                             <div>
						    	<span><label>ADDRESS</label></span>
						    	<span><input name="address" type="text" class="textbox"></span>
						    </div>
						    
						    <div>
						     	<span><label>PIN CODE</label></span>
						    	<span><input name="pinno" type="text" class="textbox"></span>
						    </div>
                            <div>
						     	<span><label>DISTRICT</label></span>
						    	<span><input name="dist" type="text" class="textbox"></span>
						    </div>                            	    
						   <div>
						   		<span><input type="submit" value="Register" name="register" ></span>
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
if(isset($_POST['register']))
{

	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	$date=mysql_real_escape_string($_POST['date']);
	$mobileno=mysql_real_escape_string($_POST['mobileno']);
	$address=mysql_real_escape_string($_POST['address']);
	$pinno=mysql_real_escape_string($_POST['pinno']);
	$dist=mysql_real_escape_string($_POST['dist']);
		
	mysql_query("insert into employee(susername,spassword,date,mobileno,address,pinno,dist) 
	values('$username','$password','$date','$mobileno','$address','$pinno','$dist')");

echo "<script type='text/javascript'>alert('Employee register created');</script>";
echo '<meta http-equiv="refresh" content="0;url=employee_login.php">';
}
include "footer.php";
?>
