<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styleotpform.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
		<div class="header fix">
			<img src="Image\logo.png">
			<form>
				<div class="navbtn">
					<i class="fa fa-bars fa-2x " aria-hidden="true" onclick="openNav()"></i>
				</div>
			</form>
		</div>
			<div class="nav fix">
				<ul>
			<li><a href="donor_page.php" >Donor History</a></li>
			<li><a href="health_report.php">Health Report</a></li>
			<li><a href="pending_request_donor.php">Pending Request</a></li>
			<li><a href="d_blood_tips.php">Blood Tips</a></li>
			<li><a href="d_contribute.php">Contribute</a></li>
			<li class="active"><a href="">More &nabla;</a>
					<ul>
						<li><a href="d_about_us.php">About Us</a></li>
						<li><a href="d_get_in_touch.php">Contact Us</a></li>
					</ul>
			</li>
		</ul>
		</div>
		<div id="mySidenav" class="sidenav">
  		<a  class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="update_donor.php" class="a"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
  		<a href="delete_donor.php" class="b"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
		<i class="fa fa-id-card-o" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder
		</i>
		<i class="fa fa-user" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder
		</i>
		<i class="fa fa-envelope" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder
		</i>
		<i class="fa fa-phone" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder
		</i>
		<i class="fa fa-calendar" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder
		</i>
		<i class="fa fa-venus-mars" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder
		</i>
		<i class="fa fa-tint" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder
		</i>
		<i class="fa fa-location-arrow" aria-hidden="true" style="color:white;">
			&nbsp;Placeholder
		</i>
		<div class="btn btn1" >
			<a href="login_donor.php"><input type="button" name="Signout" value="Sign Out"></a>
		</div>
	</div>
		<div class="heading fix">
			<label>OTP Form</label>	
		</div>			
   		<div class="outerbox">
			<div class="image">
				<i class="fa fa-mobile" aria-hidden="true"></i>
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
			</div>
			<div class="content">
				<h2>PLEASE ENTER</h2><br>
				<h6>THE VALIDATION CODE THAT</h6><br>
				<h6>GET FROM SMS & EMAIL</h6>
			</div>
			<div id="divOuter" class="formbox">
				<div id="divInner">
					<form action="update_donor_process.php" method="post">
						<input id="partitioned"  autocomplete="off" type="number" name="otpno" maxlength="4" required/>
				</div>
			</div>
			<div class="button">
				<span class="btn">
					<input type="submit" name="submit" value="Sucess">
				</span>
				<p>didn't get code <input type="submit" name="submit" id="re" value="Resend"></p>
					</form>
			</div>
		</div>
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
            fname: {
                required: true,
             	lettersonly:true,
               
            },
            lname:{
            	  required: true,
            	  lettersonly:true,

            },
            email:{
            	required:true,
            	email:true,
            	checkemail:true,
            },
            password:{
            	required:true,
            	minlength:7,
            	maxlength:15,

            },
            confirm_password:{
            	required:true,
            	minlength:7,
            	maxlength:15,
            	equalTo: "#password",


            },
            contect_no:{
            	required:true,
            	minlength:10,
            	maxlength:10,
            	digits:true,
            },
            img:{
            	required:true,
            	// uploadfile:true,
            	accept: "jpg,png,jpeg,gif",
            },
        
        },
        messages:{
        	fname:{
        		required:"firstname is required",
        		lettersonly:"enter letters only",
        	},
        	
        	lname:{
        		required:"last name is required",
        		lettersonly:"enter letters only",
        	},
        	email:{
        		required:"email required",
        		email:"enter valid email",
        		checkemail:"enter proper email",

        	},
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
			contect_no:{
				required:"contect no is required",
				minlength:"enter contect number 10digits",
				maxlength:"enter contect number 10digits",
				digits:"enter 10 digits",


			},
        	img:{
        		required:"upload image",
        		// uploadfile:"upload image",
        		accept:"upload image only jpg,jpeg,png ",


        	},
        },
    });

});
</script>

		
<script type="text/javascript">
	var obj = document.getElementById('partitioned');
	obj.addEventListener('keydown', stopCarret); 
	obj.addEventListener('keyup', stopCarret); 
	function stopCarret() 
	{
		if (obj.value.length > 3){
			setCaretPosition(obj, 3);
		}
	}
	function setCaretPosition(elem, caretPos) 
	{
	    if(elem != null)
	    {
	        if(elem.createTextRange) 
	        {
	            var range = elem.createTextRange();
	            range.move('character', caretPos);
	            range.select();
	        }
	        else 
	        {
	            if(elem.selectionStart) 
	            {
	                elem.focus();
	                elem.setSelectionRange(caretPos, caretPos);
	            }
	            else
	                elem.focus();
	        }
	    }
	}
	
		function openNav()
		{
  			document.getElementById("mySidenav").style.display = "block";
		}
		function closeNav()
		{
  			document.getElementById("mySidenav").style.display = "none";
		}
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
</body>
</html>