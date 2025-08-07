<?php
include "config.php";
include "header.php";
?>
<div class="wrap">
<div class="wrapper">	
	<div class="main" style="margin-top:-100px">
		<div class="ser-main">
			
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="" style="color:black"> EMPLOYEE LOGIN</a></h3>
		
			<div class="contact-form">
            <form method="post" action="" name="employee_login">
					    	<div>
						    	<span><label>USERNAME</label></span>
						    	<span><input name="username" type="text" class="textbox"></span>
						    </div>
						  <div>
						    	<span><label>PASSWORD</label></span>
						    	<span><input name="password" type="password" class="textbox"></span>
						    </div>
						    
						   <div>
						   		<span><input type="submit" value="login" name="login" ></span>
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
if(isset($_POST['login']))
{
$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	$login_qry="SELECT * FROM employee WHERE susername='$username' and spassword='$password'";
	$result=mysql_query($login_qry)or die("cant access");
	$count=mysql_num_rows($result);
	if($count>0){
	//header("location:buyer.php");
	$n=mysql_fetch_array($result);
	$_SESSION['sid']=$n['sid'];
	echo "<script type='text/javascript'>alert('Employee Logged in success');</script>";
	echo '<meta http-equiv="refresh" content="0;url=employee_profile.php">';
	
	}
	else{
	echo "<script type='text/javascript'>alert('Employee register username or  password incorrect!');</script>";
		}
		
}
include "footer.php";
?>
