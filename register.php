<?php  session_start();


include_once("lib/header.php");
?>
<p><strong>Welcome,please register</strong></p>


<p>All fields are required</p>

<form method="POST"  action="processregister.php">
	<p>

	<?php
		if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
			echo "<span style ='color:red'>" . $_SESSION['message'] . "</span>";

			session_unset();
		}

	?>
	</p>

	<p>
		<label>first name</label><br/>
		<input
		<?php
		    if(isset($_SESSION['first_name'])){
			    echo "value=" . $_SESSION['first_name'];
		    }    
		?>
		type ="text" name="first_name" placeholder="first name"/>
	</p>
	<p>
		<label>last name</label><br/>
		<input
		<?php
			if(isset($_SESSION['last_name']) && !empty($_SESSION['last_name'])){
				echo "value=" . $_SESSION['last_name'];
			}
		?>
		type="text" name="last_name"  placeholder="last name" />
	</p>

	<p>
		<label>email</label><br/>
		<input
		<?php
			if(isset($_SESSION['email'])){
				echo "value=" . $_SESSION["email"];

			}
		
		?>	
		 type="text" name="email" placeholder="email"/>
	</p>
		
		
		 
		

	<p>
			<label>gender</label><br/>
			<select name="gender" >
				<option value="">select one</option>
				<option
				<?php
					if(isset($_SESSION['gender'])&& $_SESSION['gender']  =='male'){
						echo "selected";

					}
				?>
				
				
				>male</option>
				<option
				<?php
					if(isset($_SESSION['gender'])&& $_SESSION['gender']  =='female'){
						echo "selected";

					}
				?>
				
				
				
				>female</option>
			</select>
	</p>

	<p>
			<label>designation</label><br/>
			<select name="designation" > 
				<option value="">select one</option>
				<option
				<?php
					if(isset($_SESSION['designation'])&& $_SESSION['designation']  =='medical team'){
						echo "selected";

					}
				?>
				
				
				
				>medical team</option>
				<option
				<?php
					if(isset($_SESSION['designation'])&& $_SESSION['designation']  =='patient'){
						echo "selected";

					}
				?>
				
				
				>patient</option>
			</select>
	</p>

	<p>
			<label>department</label><br/>
			<input
			<?php
				if(isset($_SESSION['department'])){
					echo "value=" . $_SESSION['department'];
				}
			?>
			
			
			
			
			 type="text" name="department" placeholder="department"/>
	</p>

	<p>

		<label>password</label><br/>
		<input type="password" name="password" placeholder="password" /> 
		</p>
		
	<p>
			<button type="submit">Register</button>
	</p>

		
<?php
include_once("lib/footer.php");
?>

