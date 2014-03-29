<?php
include('header.php');
?>

<div class="slider-wrap">
	<div class="row">
		<div class="16 columns">
			<div class="testimonials" >
					<h2>Testimonials</h2>
					<p class="bolder">
								<fieldset>
									<legend>Submit a Testimonial</legend>
									<form action="testimonial.php" method="POST">
											<label for="name">Name</label>
											<select name="name" id="name">
													<?php
													if(!isset($_SESSION['status']))
{
	echo 'PLEASE LOGIN!!!!!';
	//header('location:index.php');
}
else
{
}

require_once('connect.php');
$s1="SELECT * FROM seniors";
$r1=mysqli_query($con, $s1);
if (!$r1) {
  					printf("Error: %s\n", mysqli_error($con));
    					exit();
				}
while($row=mysqli_fetch_array($r1))
{
	$sname=$row['name'];
	if($row['test10']!='0')
		continue;
		
	echo '<option value="'.$sname.'">'.$sname.'</option>';
}
										echo '</select>
													';
										
										?>	
										<input type="submit" name="submit" value="Write A Testimonial"/>
									</form>
								</fieldset>
					</p>

			</div>
		</div>
	</div>
</div>

<center>
<?php
include('footer.php');
ob_flush();
?>