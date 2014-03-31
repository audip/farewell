<?php
require('connect.php');
ob_start();
session_start();
include('head.php');
?>
        <div id="content" class="content">
     	<table>
		<tr>		
			<th>Name</th>
			<th>Testimonial</th>
			<th>Contributor</th>
		</tr>
<?php	
	require('connect.php');
	$str1="SELECT * FROM seniors";
	$res1=mysqli_query($con, $str1);
	while($row=mysqli_fetch_array($res1))
	{
				$i=1;
				echo '<tr>
											<td colspan="3">'.$row['name'].'</td>
									</tr>';
				while($i<=15)
				{
						echo '
									
									<tr>
											<td>'.$i.'</td>
											<td>'.$row['test'.$i].'</td>
											<td style="text-transform:capitalize">'.$row['s'.$i].'</td>		
									<tr>
											<td colspan="3">&nbsp;</td>
									</tr>		
									</tr>
									';
						$i++;
					}
					echo '<tr>
											<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
											<td colspan="3">&nbsp;</td>
									</tr>';
	}

?>
	</table>
            </div>
            <div id="footer" class="footer">
                <h5 style="color:white;">&copy; TEAM IT | All Rights Are Reserved.</h5>
            </div>
        </div>
    </div>
</body>
</html>

<?php ob_flush(); ?>