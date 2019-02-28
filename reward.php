<?php 
  include 'koneksi.php';             
      
        if(isset($_POST['simpan'])){
          $sql = mysqli_query($con, "INSERT INTO tb_reward (kode_reward,skor_reward) values ('$_POST[kode_reward]', '$_POST[skor_reward]')");
          if($sql){
            echo "<script>alert('Berhasil tersimpan');document.location.href='reward.php'</script>";
          }
          
          else{
            echo "<script>alert('Gagal');document.location.href='reward.php'</script>";
          }
        }

        if (isset($_GET['hapus'])) {
        $sql = "DELETE FROM tb_reward WHERE kode_reward = '$_GET[id]' ";
        $query = mysqli_query($con,$sql);
        if($query){
          echo "<script>alert('Berhasil');document.location.href='?menu=reward'</script>";
        }
        else{
          echo "<script>alert('Gagal');document.location.href='?menu=reward'</script>";
        }
      }

      if (isset($_GET['edit'])) {
    $sql = mysqli_query ($con,"SELECT * FROM tb_reward WHERE kode_reward = '$_GET[id]'");
    $edit = mysqli_fetch_array($sql);
  }
  
  if (isset($_POST['update'])) {
    $sql = "UPDATE tb_reward SET kode_reward ='$_POST[kode_reward]', skor_reward='$_POST[skor_reward]' WHERE kode_reward  = '$_GET[id]'";
    $query = mysqli_query($con,$sql);
    if($query){
      echo "<script>alert('Berhasil');document.location.href='reward.php'</script>";
    }
    else{
      echo "<script>alert('Gagal');document.location.href='reward.php'</script>";
    }
  }
  
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>INPUT KODE</title>
  <link href="css/icon.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
      <script src="js/jquery.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href=" css/animate.css">
      <script src="js/wow.min.js"></script>
      <script type="text/javascript">
        new WOW().init();
      </script>

      <style >
          #card2{
            width: 400px;
            height: 200px;
          }
      </style>
</head>
<body>

  <div>
  <h3 class="center light">Input Data Reward</h3>
  <a class="waves-effect waves-light btn orange lighten-1" style="margin-left: 1250px; margin-top: -120px;" href="pilih.php">BACK</a>
</div>
<form method="post">
<section>
  <div class="row">
  <div class="container">
      <div class="col m6 s12">
        <div class="card-panel " style="width:400px; height: 500x; margin-top: 35px; margin-left: -90px;">
          <div class="input-field"> 
            <input type="text" name="kode_reward" value="<?php echo @$edit['kode_reward']?>" required>
            <label for="">Kode Reward</label>
          </div>
          <div class="input-field">
            <input type="text" name="skor_reward"  value="<?php echo @$edit['skor_reward']?>" required>
            <label for="">Skor Reward</label>
          </div>
          
          <div>
            <?php 
              if (isset($_GET['edit'])) { ?>
                <input type="submit" name="update" value="update" class="waves-effect waves-light btn orange lighten-1" id="btn4" style="width: 90px; height: 30px;">  
            <?php } else{ ?>
                <input type="submit" name="simpan" value="simpan" class="waves-effect waves-light btn orange lighten-1" id="btn4" style="width: 90px; height: 30px;">
            <?php } ?>
          </div>
        </div>
        </div>
      </div>

      <div class="col m6 s12">
      <table class="striped responsive-table" style="margin-left: -60px;">
        <thead>
          <tr class="center light black-text">
            
              <th>Kode Reward</th>
              <th>Skor</th>
          </tr>
        </thead>

        <tbody>
          <tr class="center light black-text">
            <?php
          
           $sql = mysqli_query($con,"SELECT * FROM tb_reward");
           while($a=mysqli_fetch_array($sql)) {
            
           ?>
          
            <td><?php echo $a['kode_reward'] ?></td>
            <td><?php echo $a['skor_reward'] ?></td>
            <td>
              <a href="?menu=reward&edit&id=<?php echo $a['kode_reward']?>" class="waves-effect waves-light btn orange lighten-1" id="btn4">Edit</a>
              <a href="?menu=reward&hapus&id=<?php echo $a['kode_reward']?>" class="waves-effect waves-light btn orange lighten-1" id="btn4">Hapus </a>
            </td>
            </td>
          </tr>
          <?php   } ?>
          </tbody>
          </table>
          </div>
          </div>
  </div>
</section>
</form>
<script src="js/materialize.min.js"></script>
    <!-- =========================================================================================== -->
</body>
</html>
