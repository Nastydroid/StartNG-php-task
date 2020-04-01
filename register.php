<?php
include_once("lib/header.php");
?>
<p><strong>Welcome,please register</strong></p>
<p>All fields are required</p>
<form method="POST"  action="processregister.php">
	<p>
		<label>first name</label><br/>
		<input type="text" name="first_name" placeholder="first name" >
	</p>

	<p>
		<label>last name</label><br/>
		<input type="text" name="last_name" placeholder="last name" required>
		</p>

		<p>
		<label>email</label><br/>
		<input type="text" name="email" placeholder="email" required> 
		</p> 

		<p>
			<label>gender</label><br/>
			<select name="gender" >
				<option value="">select one</option>
				<option>male</option>
				<option>female</option>
			</select>
		</p>

		<p>
			<label>designation</label><br/>
			<select name="designation" > 
				<option value="">select one</option>
				<option>medical team</option>
				<option>patient</option>
			</select>
		</p>

		<p>
			<label>department</label><br/>
			<input type="text" name="department" placeholder="department" required/>
		</p>

		<p>

		<label>password</label><br/>
		<input type="password" name="password" placeholder="password" required /> 
		</p>
		
		<p>
			<button type="submit">Register</button>
		</p>

		
<?php
include_once("lib/footer.php");
?>

