<!DOCTYPE html>
<html>
<head>
  <title>PILIH</title>

      <link href="css/icon.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
      <script src="js/jquery.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="css/animate.css">
      <script src="js/wow.min.js"></script>
      <script type="text/javascript">

      new WOW().init();
      
      </script>
<!-- CSS -->
      <style>
          #btn3{
            width: 100px;
            height: 50px;
            margin-left: 410px;
            margin-top: 20px;
          }
          #btn1{
              width: 200px;
              height: 100px;
              margin-top: 200px;
              margin-left: 160px;

          }
          #btn2{
            width: 200px;
            height: 100px;
            margin-top: 200px;
            margin-left: 20px;
          }
          #btn4{
            width: 200px;
            height: 100px;
            margin-top: -125px;
            margin-left: 600px;
          }
      </style>

      <script type="text/javascript">
      $(document).ready(function(){
    $('.slider').slider();
  });
 
  </script>
</head>
<body>

  <!-- =================================================================================== -->
<br>
<br>
<br>
<br>
  <!--JADWAL PARALLAX -->
          <div class="parallax-container">
      <div class="parallax"><img src="img/19.jpg"></div>

      <div class="container">
      <div>
         <a class="waves-effect waves-light btn-large orange lighten-1 wow slideInLeft" id="btn1" href="input.php">Kelola Data</a>
         <a class="waves-effect waves-light btn-large orange lighten-1 wow slideInRight" id="btn2" href="edit.php">Input Kode Punishment</a>
         <a class="waves-effect waves-light btn-large orange lighten-1 wow slideInRight" id="btn4" href="reward.php">Input Kode Reward</a>
         <a class="waves-effect waves-light btn-large orange lighten-1 wow fadeInUp" id="btn3" href="login.php">Back</a>
      </div>
      </div>
      </div>
         
    <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
      $(document).ready(function(){
            $('.parallax').parallax();
          });
     </script>
</body>
</html>
