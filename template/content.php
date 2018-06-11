<!--content area starts-->
		<div id="content">
			<div>
				<img src="images/pic.jpg" style="width:50%; padding-top:30px; float:left; margin-left: -40px"/> 
			</div>
			<div id="form2">
				<form action="" method="post">
					<h2>Sign Up Here Today </h2>
					<table>
						<tr>
							<td align="right">Name</td>
							<td><input type="text" name="u_name" placeholder="Enter your name" required="" /></td>
						</tr>
						<tr>
							<td align="right">Password</td>
							<td><input type="password" name="u_pass" placeholder="Enter your Password" required="" /></td>
						</tr>
						<tr>
							<td align="right">Email</td>
							<td><input type="email" name="u_email" placeholder="Enter your Email" required=""/></td>
						</tr>
						<tr>
							<td align="right">Country</td>
							<td><select name="u_country" required="">
								<option>Select a Country</option>
								<option>Kenya</option>
								<option>Uganda</option>
								<option>Tanzania</option>
								<option>Ethopia</option>
								<option>Somali</option>
								<option>Sudan</option>
							</select></td>
						</tr>
						<tr>
							<td align="right">Gender</td>
							<td><select name="u_gender" required="">
								<option>Select a Gender</option>
								<option>Male</option>
								<option>Female</option>
							</select></td>	
						</tr>
						<tr>
							<td align="right">Birthday</td>
							<td><input type="date" name="u_birthday"  required=""/></td>
						</tr>
						<tr>
							<td colspan="6">
								<button name="sign_up">Sign Up</button>
							</td>
						</tr>
					</table>
				</form>
				<?php 
				include("user_insert.php");
				?>
			</div>
		</div>
		<!--content area ends-->