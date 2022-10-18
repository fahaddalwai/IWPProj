<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styleregisterevent.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<style type="text/css">
		.error
		{
			color: red;
		}
		.nav > ul > li:nth-child(5)
		{
			color: white;
			background-color: black;
		}
	</style>
</head>
<body>


			<div class="heading fix">	
				<label>Ragister as a Event</label>
			</div>
		<div class="outerbox">
			<div class="fixedbox">
				<span class="content">
					<h4>Hello, Friend!</h4>
					<p>Enter your personal details and start journey with us</p>
				</span>
			</div>
			<div class="scrollbox">
				<div class="registerdonor">
					<form action="registar_event.php" method="post" id="myform">
						<div class="login">
							<h3>Login Details</h3>
							<table>
								<tr>
									<td>
										<label>Full Name:-</label>
										<input type="text" name="user_full_name" required pattern="[A-z ]+$" title="Use only character & whitespace">
									</td>	
									<td>
										<label>Email Id:-</label>
										<input type="email" name="user_email" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid">
									</td>
								</tr>
								<tr>
									<td>
										<label>Password:-</label>
										<input type="password"name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters">
									</td>
									<td>
										<label>Confirm Password:-</label>
										<input type="text" name="confirm_password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters">
									</td>
								</tr>
							</table>
						</div>
						<div class="event">
							<h3>Event Details</h3>
							<table>
								<tr>
									<td>
										<label>Mobile Number:-</label>
										<input type="text" name="user_number" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid">
									</td>
									<td rowspan="2">
										<label>Event Address:-</label>
										<textarea name="event_address" placeholder="---Type---" required></textarea>
									</td>
								</tr>
								<tr>
									<td>
										<label>Event Date:-</label>
										<input type="date" name="event_date" required>
									</td>
								</tr>
								<tr>
									<td>
										<label>Event Time:-</label>
										<input type="time" name="start_time" class="time" required><label class="timelabel">To</label>
										<input type="time" name="end_time" class="time" required>
									</td>
									<td>
										<label>Pincode:-</label>
										<input type="text" name="pincode" required pattern="^[0-9]{6}$" title="Pincode is not valid">
									</td>	
								</tr>
								<tr>
									<td>
										<label>City:-</label>
										<input type="text" name="city" value="Vellore" readonly>
									</td>
									<td>
										<label>State:-</label>
										<input type="text" name="state" value="Gujarat" readonly>
									</td>
								</tr>
							</table>
						</div>
							<div class="other">
							<h3>Other Details(Optional)</h3>
							<table>
								<tr>
									<td>
										<label>Which one is more required ?:-</label>
										<input type="text" list="need" name="need" placeholder="----Select----">
										<datalist id="need">
											<option value="Plasama"></option>
											<option value="Blood"></option>
											<option value="Platelates"></option>	
										</datalist>
										<td rowspan="2">
											<label>Why are you plan this Event ?:-</label>
												<textarea name="other_message" placeholder="---Type---"></textarea>
										</td>
									</td>	
								</tr>
								<tr>
									<td>
										<label>Event Poster:-</label>
										<input type="file" name="event_poster">
									</td>
								</tr>
							</table>
						</div>
						<span>
							<input type="checkbox" name="terms" id="checkbox" required>
						</span><p>I agree to have my contact details broadcasted to the of BloodVault.net</p>
						
						<div class="btn">
							<input type="submit" name="submit" value="Submit Details ">
							<input type="reset" name="reset" value="Reset Details">
						</div>
						</form>
				</div>
			</div>
		</div>
				<!-- Responsive Table-->
			<div class="rregisterdonor">
				<form action="registar_event.php" method="post" id="myform">
				<div class="rlogin">
					<h3>Login Details</h3>
					<table>
						<tr>
							<td>
								<label>Full Name:-</label>
								<input type="text" name="user_full_name" required pattern="[A-z ]+$" title="Use only character & whitespace">
							</td>	
						</tr>
						<tr>
							<td>
								<label>Email Id:-</label>
								<input type="email" name="user_email" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid">
							</td>
						</tr>
						<tr>
							<td>
								<label>Password:-</label>
								<input type="password"name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters">
							</td>
						</tr>
						<tr>	
							<td>
								<label>Confirm Password:-</label>
								<input type="text" name="confirm_password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters">
							</td>
						</tr>
					</table>
				</div>
				<div class="revent">
					<h3>Event Details</h3>
					<table>
						<tr>
							<td>
								<label>Mobile Number:-</label>
								<input type="text" name="user_number" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid">
							</td>
						</tr>
						<tr>
							<td>
								<label>Event Address:-</label>
								<textarea name="event_address" placeholder="---Type---" required></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<label>Event Date:-</label>
								<input type="date" name="event_date" required>
							</td>
						</tr>
						<tr>
							<td>
								<label>Event Time:-</label>
								<input type="time" name="start_time" class="time" required><label class="timelabel">To</label>
								<input type="time" name="end_time" class="time" required>
							</td>
						</tr>
						<tr>
							<td>
								<label>Pincode:-</label>
								<input type="text" name="pincode" required pattern="^[0-9]{6}$" title="Pincode is not valid">
							</td>	
						</tr>
						<tr>
							<td>
								<label>City:-</label>
								<input type="text" name="city" value="Ahmedabad" readonly>
							</td>
						</tr>
						<tr>
							<td>
								<label>State:-</label>
								<input type="text" name="state" value="Gujarat" readonly>
							</td>
						</tr>
					</table>
				</div>
					<div class="rother">
					<h3>Other Details(Optional)</h3>
					<table>
						<tr>
							<td>
								<label>Which one is more required ?:-</label>
								<input type="text" list="need" name="need" placeholder="----Select----">
								<datalist id="need">
									<option value="Plasama"></option>
									<option value="Blood"></option>
									<option value="Platelates"></option>	
								</datalist>
							</td>
						</tr>
						<tr>
							<td >
								<label>Why are you plan this Event ?:-</label>
								<textarea name="other_message" placeholder="---Type---"></textarea>
							</td>	
						</tr>
						<tr>
							<td>
								<label>Event Poster:-</label>
								<input type="file" name="event_poster">
							</td>
						</tr>
					</table>
				</div>
				<span>
					<input type="checkbox" name="terms" id="checkbox" required>
				</span><p>I agree to have my contact details broadcasted to the BloodVault.net</p>
				
				<div class="btn">
					<input type="submit" name="submit" value="Submit Details ">
					<input type="reset" name="reset" value="Reset Details">
				</div>
				</form>
		</div>
		
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
jQuery.validator.addMethod("checkemail", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i.test( value );
}, 'Please enter a valid email address.');






$(document).ready(function () {

    $('#myform').validate({ 
        rules: {
            password:{
            	required:true,
            	minlength:6,
            	maxlength:15,

            },
            confirm_password:{
            	required:true,
            	minlength:6,
            	maxlength:15,
            	equalTo: "#password",


            },  
        },
        messages:{
        	
			password:{
				required:"password is required",
				minlength:"enter password between 7-15",
				maxlength:"enter password between 7-15",
			},
			confirm_password:{
				required:"password is required",
				minlength:"enter password between 7-15",
				maxlength:"enter password between 7-15",
				equalTo:"password must be same",


			},
			
        },
    });

});
</script>

<script type="text/javascript">
	function share()
	{
		var a =document.getElementById("f");
		var b=document.getElementById("g");
		var c=document.getElementById("i");
		var d=document.getElementById("y");
		if (a.style.display === "none")
		{
			a.style.display="block";
			b.style.display="block";
			c.style.display="block";
			d.style.display="block";
		}
		else
		{
			a.style.display="none";
			b.style.display="none";
			c.style.display="none";
			d.style.display="none";
		}
	}
</script>
</html>
		