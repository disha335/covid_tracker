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
        <a class="nav-link" href="indiacorona.php">WorldCoronaLive</a>
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

<section class="corona_update container-fluid">
  <div class="my-5">
    <h3 class="text-uppercase text-center"><b>covid-19 updates of the India</b></h3>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-stripped text-center">
      <tr>
        <th class="text-capitalize">Last Updated Time</th>
        <th>State</th>
        <th>Confirmed Cases</th>
        <th>Active Cases</th>
        <th>Recovered Cases</th>
        <th>Deaths</th>
      </tr>

      <?php $data = file_get_contents('https://api.covid19india.org/data.json');
      $coranalive = json_decode($data, true); 
      $statescount = count($coranalive['statewise']);


      $i=1; 
      while($i < $statescount){

      ?>

      <tr>
        <td style="background-color:rgb(204, 255, 102)"><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
        <td style="background-color:rgb(255, 153, 51)"><?php echo $coranalive['statewise'][$i]['state'] ?></td>
        <td style="background-color:rgb(0, 204, 255);"><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
        <td style="background-color: rgb(255, 204, 204);"><?php echo $coranalive['statewise'][$i]['active'] ?></td>
        <td style="background-color:rgb(204, 102, 255) "><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
        <td style="background-color:rgb(153, 255, 153)"><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>
      </tr>

      <!--echo $coranalive['statewise'][$i]['lastupdatedtime']."<br>";
      echo $coranalive['statewise'][$i]['state'] . "<br>";
      echo $coranalive['statewise'][$i]['confirmed'] . "<br>";
      echo $coranalive['statewise'][$i]['active'] . "<br>";
      echo $coranalive['statewise'][$i]['recovered'] . "<br>";
      echo $coranalive['statewise'][$i]['deaths'] . "<br>"; -->
      <?php
      $i++;
}


?>
      
    </table>
  </div> 
</section>

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

