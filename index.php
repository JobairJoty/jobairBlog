<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheet/navigation.css">
<link rel="stylesheet" type="text/css" href="stylesheet/index_section.css">
<style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
  </style>

</head>
<body>
<header>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Jobair Joty</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="index.php?id=work">Work</a></li>
          <li><a href="index.php?id=skill">Skill</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Education</a></li>
          <li><a href="#">Location</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        
      </div>
    </div>
  </nav>
  
</header>

<section>
  <div id="first">
    <div  class="card" id="slide">
      <img src="images/home_jobair.jpg">
    </div>
    <div class="card" id="recent_blog"> 
      <a href="#">CromeCast</a><br>
      <a href="#">How to fix fix.dll on starup</a><br>
      <a href="#">CromeCast</a><br>
      <a href="#">How to fix fix.dll on starup</a><br>
      <a href="#">CromeCast</a><br>
      <a href="#">How to fix fix.dll on starup</a><br>
      <a href="#">CromeCast</a><br>
      <a href="#">How to fix fix.dll on starup</a><br>
      <a href="#">CromeCast</a><br>
      <a href="#">How to fix fix.dll on starup</a><br>
      <a href="#">CromeCast</a><br>
      <a href="#">How to fix fix.dll on starup</a><br>
      <a href="#">CromeCast</a><br>
      <a href="#">How to fix fix.dll on starup</a><br>
      <a href="#">How to fix fix.dll on starup</a><br>
    </div>

  </div>
  

  <div id="second">
      <div id="information">
      <div class="card" id="work" onclick="work()">
        <img src="images/work.png" width="60px">
            <div>
                <h4><b>Work</b></h4> 
            </div>
      </div>
    <div class="card" id="skill" onclick="skill()">
      <img src="images/skill.png" width="60px">
          <div>
              <h4><b>Skill</b></h4> 
          </div>
    </div>
    <div class="card" id="about" onclick="about()">
      <img src="images/about.png" width="60px">
          <div>
              <h4><b>About</b></h4> 
          </div>
    </div>
    <div class="card" id="education" onclick="education()">
      <img src="images/education.png" width="60px">
          <div>
              <h4><b>Education</b></h4> 
          </div>
    </div>
    <div class="card" id="location" onclick="Location()">
      <img src="images/location.png" width="60px">
          <div>
              <h4><b>Location</b></h4> 
          </div>
    </div>
    <div class="card" id="contract" onclick="contact()">
      <img src="images/contact.png" width="60px">
          <div>
              <h4><b>Contract</b></h4> 
          </div>
    </div>
    </div>
  </div>
</section>

<footer>
  Copyright &copy; | All rights reserved.
</footer>



<script type="text/javascript">
  function work() {
     location.href = "work.php";
  }
  function skill() {
     location.href = "skill.php";
  }
  function about() {
     location.href = "about.php";
  }
  function education() {
     location.href = "education.php";
  }
  function Location() {
     location.href = "location.php";
  }
  function contact() {
     location.href = "contact.php";
  }
</script>
<!-- <script type="text/javascript" src="scripts/navigation.js"></script>
 -->
</body>
</html>
<?php 
  if(!empty($_GET['id'])) {
      $id = $_GET['id'];

      if($id) {
          include($id.'.php');
      }
  }

 ?>