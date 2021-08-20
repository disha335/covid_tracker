<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">
	<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#symid">Symptoms</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacorona.php">IndiaCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="worldcoronalive.php">WorldCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../instamojoproject/main.html">Donate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
      
    </ul>
    
  </div>
</nav>

<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/unity.jpg" width="350" height="350">
			</div>
			
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against <br> Cor<span class="corona_rot"><img src="images/corona1.png" height="100" width="100"></span>na Virus</h1>
			</div>
		</div>
		
	</div>
	
</div>

<!--Corona Latest Updates -->

<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">covid-19 updates</h3>
	</div>

	<div class="d-flex justify-content-around align-items-center">
		<div>
			<h1 class="count">1,524,266</h1>
			<p>Passengers screened at airport</p>
		</div>
		<div>
			<h1 class="count">467</h1>
			<p>Active Covid-19 cases</p>
		</div>
		<div>
			<h1 class="count">31</h1>
			<p>Cured/Discharged cases</p>
		</div>
		<div>
			<h1 class="count">6</h1>
			<p>Death cases</p>
		</div>
	</div>

	

	
</section>

<!--About Section -->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid" >

	<div class="section_header text-center mb-5 mt-4">
		<h1><b>About COVID - 19</b></h1>
	</div>
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5">
			<img src="images/aboutcorona.jpg" class="img-fluid">
			
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID -19 (Corona Virus)</h2>
			<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.The new virus and disease were unknown before the outbreak began in China , in December , 2019</p>
			<p>Coronaviruses constitute the subfamily Orthocoronavirinae, in the family Coronaviridae, order Nidovirales, and realm Riboviria. They are enveloped viruses with a positive-sense single-stranded RNA genome and a nucleocapsid of helical symmetry. The genome size of coronaviruses ranges from approximately 26 to 32 kilobases, one of the largest among RNA viruses. They have characteristic club-shaped spikes that project from their surface, which in electron micrographs create an image reminiscent of the solar corona, from which their name derives.</p>
			<p>Coronaviruses are large, roughly spherical particles with unique surface projections.Their size is highly variable with average diameters of 80 to 120 nm. Extreme sizes are known from 50 to 200 nm in diameter.The total molecular mass is on average 40,000 kDa.</p>
		</div>
		
	</div>
</div>


<!--/* Symptoms */-->
<div class="container-fluid pt-5 pb-5" id="symid">
	<div class="section_header text-center mb-5 mt-4">
		<h1><b>Symptoms Of COVID - 19</b></h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid" width="120" height="120">
				<figcaption>cough</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/ruunynose.jpg" class="img-fluid" width="160" height="160">
				<figcaption>runny nose</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/fever.png" class="img-fluid" width="120" height="120">
				<figcaption>fever</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cold.jpg" class="img-fluid" width="170" height="170">
				<figcaption>cold</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/tired.jpg" class="img-fluid" width="120" height="120">
				<figcaption>tiredness</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/dib.png" class="img-fluid" width="120" height="120">
				<figcaption>difficulty in breathing(severe cases)</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>

<!--/* Prevention Against Corona-Virus */-->
<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1><b>6 Steps Prevention Against Corona-Virus</b></h1>
	</div>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/handwash.jpg" class="img-fluid" width="90" height="90">
				
				</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12"><p>Wash your hands regularly for 20 seonds , with soap and water or alcohol-based hand rub</p></div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/mask.png" class="img-fluid" width="90" height="90">
				
				</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12"><p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p></div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/close.jpg" class="img-fluid" width="90" height="90">
				
				</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12"><p>Avoid close contact (1 meter or 3 feet) with people who are unwell . </p></div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/home.png" class="img-fluid" width="90" height="90">
				
				</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12"><p>Stay home and well isolate from others in the household if you feel unwell .</p></div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/news.png" class="img-fluid" width="90" height="90">
				
				</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12"><p>Stay informed by watching news and follow the recommended practices . </p></div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
				<img src="images/diib.jpg" class="img-fluid" width="90" height="90">
				</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12"><p>If you have fever ,  cough and difficulty in breathing , seek medical care early.</p></div>
			</div>
		</div>
		
	</div>	
</div>
</div>

<!--/* Prevention Against Corona-Virus */-->
<div class="container-fluid pt-5 pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1><b>Contact Us ASAP</b></h1>
	</div>

	<div class="container">
		<div class="row">

			<div class="col-lg-8 offset-lg-2 col-12">
				<form action="" method="POST">
<div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter your username" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email"  placeholder="Enter your email" required autocomplete="off">
  </div>
  
  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="Enter your mobile number" autocomplete="off" required>
  </div>

  <div class="form-group">
  	<label>Select Symptoms</label><br>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
  		<label class="custom-control-label" for="customcheckbox1">Cold</label>	
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
  		<label class="custom-control-label" for="customcheckbox2">fever</label>	
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
  		<label class="custom-control-label" for="customcheckbox3">difficulty in breath</label>	
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
  		<label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>	
  	</div>
  	
  </div>
  
  <div class="form-group">
    <label>How are you feeliing ? </label>
    <input type="text" class="form-control" name="msg" placeholder="Enter other symptoms" autocomplete="off" required>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
			</div>
			
		</div>
	</div>
</div>

<!-- top cursor -->

<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
	
</div>

<!-- footer -->
<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		<p>Copyright by team Mightybytes</p>
	</div>
</footer>

<script type="text/javascript">
$('.count').counterUp({
	delay:10,
	time:3000
})

	mybutton=document.getElementById('myBtn');
	window.onscroll=function(){scrollFunction()};
	function scrollFunction(){
		if(document.body.scrollTop>100 || document.documentElement.scrollTop>100){
			mybutton.style.display="block";
		}else{
			mybutton.style.display="none";
		}
	}
	function topFunction(){
		document.body.scrollTop=0;
		document.documentElement.scrollTop=0;
	}




</script>

</body>
</html>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$symp=$_POST['coronasym'];
	$msg=$_POST['msg'];

	$chk="";

	foreach($symp as $chk1){
		$chk .=$chk1.",";
	}

	$insertquery="insert into coronacase(username,email,mobile,symp,message) values('$username','$email','$mobile','$chk','$msg') ";

	$query=mysqli_query($con,$insertquery);

	if($query){
	?>
	<script>
		alert("Insertion Successful");
	</script>
	<?php
}else{
	?>
	<script>
		alert("Not Inserted");
	</script>
	<?php
}


}

?>