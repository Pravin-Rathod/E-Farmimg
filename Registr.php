<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3>Seller's Registration Form</h3>
			<form action="registration.php" method="POST" target="_blank">
				<table align="center" cellpadding="10">
					<tr>
						<td> Name:</td>
						<td><input type="text" placeholder=" Enter name" maxlength="100" name="name" required/></td>
					</tr>
					<tr>
						<td>Shop Address</td>
						<td><input type="text-area" placeholder=" enter Address" maxlength="100" name="address" required/></td>
					</tr>
					<tr>
						<td>Mobile No:</td>
						<td><input type="text" placeholder=" Enter Mobile no:" maxlength="10" name="mobile" required/></td>
					</tr>
					<tr>
						<td>Suplier_Products:</td>
						<td>
							<select name="product">
								<option >Select</option>
								<option value="Dairy">Dairy</option>
								<option value="Vegitables">Vegitables</option>
								<option value=" Flowers">Flowers</option>
								<option value=" Pulses">Pulses</option>
								<option value=" Plants">Plants</option>
								<option value=" Fruits">Fruits</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="Submit">
							<input type="reset" value="Reset">
						</tr>
					</table>
					<hr>
				</form>
			</div>
		</div>
	</div>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "e_farming";
				// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "SELECT * FROM shop_entry";
		if($result = mysqli_query($conn, $sql)){
		if(mysqli_num_rows($result) > 0){
			echo "<div class='container'>";
						echo "<h1 class='text-center text-info'>Authorised Seller </h1>";
					echo  "<table class=' table table-responsive table-bordered'>";
								echo "<thead>";
										echo "<tr>";
											echo "<th class='text-primary '>Sr.No</th>";
											echo "<th class='text-primary'>Name</th>";
											echo "<th class='text-primary'>Address</th>";
											echo "<th class='text-primary'>mobile-no</th>";
											echo "<th class='text-primary'>Product</th>";
									echo "</tr>";
								echo "</thead>";
							while($row = mysqli_fetch_array($result)){
							echo "<tr>";
									echo "<th>" . $row['id'] . "</th>";
									echo "<th>" . $row['Seller_Name'] . "</th>";
									echo "<th>" . $row['Shop_Address'] . "</th>";
									echo "<th>" . $row['Mobile_No'] . "</th>";
									echo "<th>" . $row['Product_Name'] . "</th>";
							echo "</tr>";
							}
					echo "</table>";
			echo "</div>";
		
		
		// Free result set
		mysqli_free_result($result);
		} else{
		echo "No records matching your query were found.";
		}
		}
		else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
			}
		
		
		// Close connection
		mysqli_close($conn);
	?>