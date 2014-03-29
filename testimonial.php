<?php
require_once('connect.php');
if(isset($_POST['name'])&&isset($_POST['test']) && ($_POST['submit']=='Submit Testimonial'))
	{ 
		$name=$_POST['name'];
		$message=mysqli_real_escape_string($con, $_POST['test']);
		//$username=$_POST['username'];
		$username="Audi";
		//echo $name.'<br/>'.$message.'<br/>'.$username;die();
		$s3="SELECT * FROM seniors WHERE name='$name'";
		$r3=mysqli_query($con, $s3);
		$row=mysqli_fetch_array($r3);
		$i=1;
		while($i<=10)
		{
			$check='test'.$i;
			if($row[$check]=='0')
				break;
			$i++;
		}
	
		$s4="UPDATE seniors SET test$i='$message', s$i='$username' WHERE name='$name'";
		//echo $s4;die();
		mysqli_query($con, $s4);
		header('location:test.php');
}

include('header.php');
?>
<div class="slider-wrap">
	<div class="row">
		<div class="wrapper">
			<div class="testimonials" >
					<h2>Testimonials</h2>
					<p class="bolder">
									<form action="testimonial.php" method="POST" style="margin-top: 0px;padding-top:5px">
											<label for="name">Our Very Own</label>
											<?php
												require_once('connect.php');
												if(!empty($_POST['name']) && isset($_POST['name']))
												{
													$name=$_POST['name'];
													echo '<input type="text" readonly="readonly" size="10" value="'.$name.'" name="name"/>';
													$s2="SELECT * FROM seniors WHERE name='$name'";
													$r2=mysqli_query($con, $s2);
													$row=mysqli_fetch_array($r2);
													if($row['place'])
														echo '
																	<label for="place">Belonging To</label>
																	<input type="text" readonly="readonly" size="10" value="'.$row['place'].'" />';
													if($row['dob'])																	
														echo '
																	<label for="dob">Born On</label>
																	<input type="text" readonly="readonly" size="30" value="'.$row['dob'].'" />';
													if($row['company'])																	
														echo '
																	<label for="company">Placed In</label>
																	<input type="text" readonly="readonly" size="30" value="'.$row['company'].'" />';
												}
												else{
													header('location:test.php');
												}
											?>	
											<label for="test">Testimonial Message (Please don't exceed 5000 Characters OR Mail to us the Testimonial at aditya@eclectika.org)</label>
											<textarea rows="20" cols="30" required="required" name="test" id="test" maxlength="5000"  style="color:black;">
											</textarea>
										<input type="submit" name="submit" value="Submit Testimonial" />
									</form>
					</p>

			</div>
		</div>
	</div>
</div>

<center>
<p class="bold" style="color:red;">
Developed by IT 6th Sem Students for our Beloved Seniors!
</p>
</center>
</body>
</html>