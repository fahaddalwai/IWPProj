<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSS\viewall.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >

    <div class="header fix">
      <img src="Image\logo.png">
      <form>
        <div class="navbtn">
          <a href="login_donor.php"><input type="button" name="submit" value="Login"></a>
          <a href="registar_donor.php"><input type="button" name="reset" value="Become Donor"></a>
          <i class="fa fa-bars fa-2x " aria-hidden="true" ></i>
        </div>
      </form>
    </div>
      <div class="nav fix">
        <ul>
        <li class="active"><a href="index.php" >Home</a></li>
        <li><a href="blood_tips.php">Blood Tips</a></li>
        <li><a href="">Request Portal &nabla;</a>
          <ul>
            <li><a href="request_blood.php">Request Blood</a></li>
            <li><a href="request_blood.php">Show Pending Request</a></li>
          </ul>
        </li>
        <li><a href="">Event Portal &nabla;</a>
          <ul>
            <li><a href="registar_event.php">Register as a Event</a></li>
            <li><a href="login_event.php">Login as a Event</a></li>
          </ul>
        </li>
        <li><a href="contribute.php">Contribute</a></li>
        <li><a href="">More &nabla;</a>
          <ul>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="get_in_touch.php">Contact Us</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="heading fix"> 
      <label>Recent Event</label>
    </div>
    <div class="eventobox">
      

    <div class="heading fix">	
			<label>Home</label>
		</div>
		<div class="slideshow" onmouseover="arrowshow()" onmouseout="arrowhide()">
			<div class="mySlides fade">
				<img src="https://www.nysenate.gov/sites/default/files/styles/760x377/public/donate_blood_rotator.jpg?itok=SKSv3T7P&timestamp=1444009944">
			</div>
			<div class="mySlides fade">
  				<img src="https://www.sentinelassam.com/wp-content/uploads/2019/06/iStock-690302872.jpg">
			</div>
			<div class="mySlides fade">
				<img src="http://healthstaff.co.za/wp-content/uploads/2018/06/World-Blood-Donor-Day-Quotes-Slogans-Sayings-Images-Whatsapp-Status-FB-DP.jpg">
			</div>
			<div class="mySlides fade">
  				<img src="https://sgc.edu.in/wp-content/uploads/2017/04/BDC.jpg">
			</div>
			<div class="arrow" id="a1">
				<i class="fa fa-chevron-left" aria-hidden="true" onclick="plusSlides(-1)" ></i>
				<i class="fa fa-chevron-right" aria-hidden="true" onclick="plusSlides(1)" ></i>
				<span class="dot" onclick="currentSlide(1)"></span> 
  				<span class="dot" onclick="currentSlide(2)"></span> 
  				<span class="dot" onclick="currentSlide(3)"></span>
  				<span class="dot" onclick="currentSlide(4)"></span>
			</div>
		</div>
		<div class="eventheader">
			<label>RECENT&nbsp;EVENT</label>
		</div>
		<div class="eventobox first">
			<a href="viewall.php">View all</a>
			
		</div>
				<div class="eventobox last">
			<a href="viewall.php">View all</a>
		</div>
		<div class="teacherimage">
			<img src="Image/teacher.png">
		</div>
		<div class="quote">
      			<div class="quoteiconl">
      				<i class="fa fa-quote-left" aria-hidden="true"></i>
      			</div>
      			<section class="quotes">
      				<div class="quote-text"></div>
    			</section>
    			<div class="quoteiconr">
    				<i class="fa fa-quote-right" aria-hidden="true"></i>
    			</div>
		</div>
		<div class="containt">
			<div class="video">
				<iframe width="485" height="206" src="https://www.youtube.com/embed/nzpf3ZxB3p8" frameborder="0"  allowfullscreen></iframe>
			</div>
			<div class="write">
				<h4>Why are platelets so important ?</h4>
				<p>Platelets are tiny cells in your blood that form clots and stop bleeding. For millions of Americans, they are essential to surviving and fighting cancer, chronic diseases, and traumatic injuries. Every 15 seconds someone needs platelets. Platelets must be used within five days and new donors are needed every day. That’s why we need you.</p>
			</div>
		</div>
		<div class="readobox">
			<div class="readibox">
				<i class="fa fa-tint" aria-hidden="true"></i>
				<h4>WHY GIVE BLOOD ?</h4>
				<a href="blood_tips.php"><button> READ MORE</button></a>
			</div>
			<div class="readibox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<h4>Donor Register now !</h4>
				<a href="registar_donor.php"><button>Become Donor</button></a>
			</div>
			<div class="readibox lasti">
				<i class="fa fa-list-alt" aria-hidden="true"></i>
				<h4>Pending Blood Request</h4>
				<a href="pending_request.php"><button>Show details</button></a>
			</div>
      <div class="readibox lasti">
				<i class="fa fa-tint" aria-hidden="true"></i>
				<h4>Health Report</h4>
				<a href="health_report.php"><button>Show details</button></a>
			</div>
      <div class="readibox lasti">
				<i class="fa fa-user" aria-hidden="true"></i>
				<h4>Donor History</h4>
				<a href="donor_page.php"><button>Show details</button></a>
			</div>
      <div class="readibox lasti">
				<i class="fa fa-list-alt" aria-hidden="true"></i>
				<h4>Contribute</h4>
				<a href="contribute.php"><button>Show details</button></a>
			</div>



		</div>
		
  </body>
  
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
	function arrowshow()
	{
		document.getElementById("a1").style.display="block";
		document.getElementById("a2").style.display="block";
	}
	function arrowhide()
	{
		document.getElementById("a1").style.display="none";
		document.getElementById("a2").style.display="block";
	}
	var slideIndex = 1;
	showSlides(slideIndex);
	function plusSlides(n)
	{
  		showSlides(slideIndex += n);
	}
	function currentSlide(n)
	{
  		showSlides(slideIndex = n);
	}
	function showSlides(n)
	{
  		var i;
  		var slides = document.getElementsByClassName("mySlides");
  		 var dots = document.getElementsByClassName("dot");
  		if (n > slides.length) 
  		{
  			slideIndex = 1
  		}    
  		if (n < 1) 
  		{
  			slideIndex = slides.length
  		}
  		for (i = 0; i < slides.length; i++)
  		{
      		slides[i].style.display = "none";  
  		}
  		for (i = 0; i < dots.length; i++)
  		{
   			dots[i].className = dots[i].className.replace(" active", "");
  		}
  		slides[slideIndex-1].style.display = "block";
  		dots[slideIndex-1].className += " active";
	}
	setInterval(function(){plusSlides(1);},5000);
	
const endpoint = 'https://api.whatdoestrumpthink.com/api/v1/quotes/random';
	getQuote();
	setInterval(getQuote,9000);
function getQuote() {
  fetch(endpoint)
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      displayQuote(data.message);
    })
    .catch(function () {
      console.log("An error occurred");
    });
}
function displayQuote(quote) {
  const quoteText = document.querySelector('.quote-text');
  quoteText.textContent = quote;
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
</html>
