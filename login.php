<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>

   <link href="css/icon.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
      <script src="js/jquery.js"></script>
      <link rel="stylesheet" type="text/css" href=" css/animate.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- ==========================================koneksi================================================-->
      <?php
        include "koneksi.php"; 

        if(isset($_POST['login'])){
        $sql = mysqli_query($con,"SELECT * FROM tb_user WHERE username = '$_POST[user]' AND password = '$_POST[pass]'");
        $tampil = mysqli_fetch_array($sql);
        $cek = mysqli_num_rows($sql);
        if($cek > 0){

          echo "<script>alert('Selamat datang $_POST[user]');document.location.href='pilih.php'</script>";
        }else{
          echo "<script>alert('Username atau Password salah!');document.location.href='login.php'</script>";
        }
      }
      ?>
    <!-- =====================================CSS=================================================== -->
      <style>
          #y{
            margin-top: 100px;
            margin-left: 500px;
          }
          #btn4{
            width: 120px;
            height: 35px;
          }
      </style>

</head>
<body>
<div>
  <h3 class="center light">LOGIN</h3>
</div>
  <!--JADWAL PARALLAX -->
      <form align="center" method="post">
        <div class="card-panel " style="width:300px; height: 250px; margin-top: 125px; margin-left: 540px;">
          <div class="input-field"> 
            <input type="text" name="user" autocomplete="off" required></input>
            <label for="user">Username</label>
          </div>
          <div class="input-field">
            <input type="password" name="pass" autocomplete="off" required></input>
            <label for="pass">password</label>
          </div>
          <div>
            <input type="submit" name="login" value="login" class="waves-effect waves-light btn orange lighten-1" style="margin-left: 100px;" id="btn4">
          </div>
        </div>
      </div>
      </form>
</div>
  <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
      $(document).ready(function(){
            $('.parallax').parallax();
          });
     </script>
</body>
</html>