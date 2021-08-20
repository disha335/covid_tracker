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
    <h3 class="text-uppercase text-center"><b>covid-19 updates of the world</b></h3>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-stripped text-center" id="tbval" >
      <tr>
        <th>Country</th>
        <th>Total Confirmed</th>
        <th>Total Recovered</th>
        <th>Total Deaths</th>
        <th>New Confirmed</th>
        <th>New Recovered</th>
        <th>New Deaths</th>
      </tr>
      
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

function fetch(){
  $.get("https://api.covid19api.com/summary",
    function(data){
      //console.log(data['Countries'].length)
      var tbval=document.getElementById('tbval');
      for(var i=1;i<(data['Countries'].length);i++){
        var x=tbval.insertRow();
        x.insertCell(0);
        tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
        tbval.rows[i].cells[0].style.background='#0099ff';
        tbval.rows[i].cells[0].style.color='#fff';
        x.insertCell(1);
        tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
        tbval.rows[i].cells[1].style.background='#ff99ff';

        x.insertCell(2);
        tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
        tbval.rows[i].cells[2].style.background='#ff9966';

        x.insertCell(3);
        tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
        tbval.rows[i].cells[3].style.background='#4bb7d8';

        x.insertCell(4);
        tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
        tbval.rows[i].cells[4].style.background='#999966';

        x.insertCell(5);
        tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
        tbval.rows[i].cells[5].style.background='#ffcc66';

        x.insertCell(6);
        tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
        tbval.rows[i].cells[6].style.background='#cc99ff';
      }

    }

    );
}

</script>

</body>
</html>

