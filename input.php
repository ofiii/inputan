<?php 
  include 'koneksi.php';

  $sql = "SELECT * FROM query_siswa";
   $query = mysqli_query($con,$sql);

  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Punishment/Reward</title>
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
<!-- ====================================ISIAN======================================= -->
<body>

	<div>
  <h3 class="center light">Kelola Data Punishment/Reward</h3>
  <a class="waves-effect waves-light btn orange lighten-1" style="margin-left: 1250px; margin-top: -120px;" href="pilih.php">BACK</a>
</div>

  <!--JADWAL PARALLAX -->
        <form align="center" method="post">
        <?php
              if(isset($_POST['simpan'])){
          $sql = mysqli_query($con, "INSERT INTO tb_input SET nis='$_POST[nis]', namasiswa='$_POST[namasiswa]', rombel='$_POST[rombel]',rayon='$_POST[rayon]',kode_reward='$_POST[kode_reward]',kode_punishment='$_POST[kode_punishment]'");
          if($sql){
            $get_reward_where =mysqli_query($con,"SELECT * FROM tb_reward WHERE kode_reward ='$_POST[kode_reward]'");
            $get_punishment_where =mysqli_query($con,"SELECT * FROM tb_punishment WHERE kode_punishment ='$_POST[kode_reward]'");
            echo "<script>alert('Berhasil tersimpan');document.location.href='input.php'</script>";
          }
          else{
            echo "<script>alert('Gagal');document.location.href='input.php'</script>";
          }
        }

        if (isset($_GET['hapus'])) {
        $sql = "DELETE FROM tb_input WHERE nis = '$_GET[id]' ";
        $query = mysqli_query($con,$sql);
        if($query){
          echo "<script>alert('Berhasil');document.location.href='?menu=input'</script>";
        }
        else{
          echo "<script>alert('Gagal');document.location.href='?menu=input'</script>";
        }
      }

      if (isset($_GET['edit'])) {
    $sql = mysqli_query ($con,"SELECT * FROM tb_input WHERE nis = '$_GET[id]'");
    $edit = mysqli_fetch_array($sql);
  }
  
  if (isset($_POST['update'])) {
    $sql = "UPDATE tb_input SET nis='$_POST[nis]', namasiswa='$_POST[namasiswa]', rombel='$_POST[rombel]',rayon='$_POST[rayon]',kode_reward='$_POST[kode_reward]',kode_punishment='$_POST[kode_punishment]' WHERE nis = '$_GET[id]'";
    $query = mysqli_query($con,$sql);
    if($query){
      echo "<script>alert('Berhasil');document.location.href='input.php'</script>";
    }
    else{
      echo "<script>alert('Gagal');document.location.href='input.php'</script>";
    }
  }

        ?>
<form method="post">
<section>
  <div class="row">
  <div class="container">
      <div class="col m6 s12">
        <div class="card-panel " style="width:400px; height: 500x; margin-top: 25px; margin-left: -150px;">
          <div class="input-field"> 

            <input type="text" name="nis" value="<?php echo @$edit['nis']?>"></input>
            <label for="user">NIS</label>
          </div>
          <div class="input-field">
            <input type="text" name="namasiswa" value="<?php echo @$edit['namasiswa']?>"></input>
            <label for="">Nama Siswa</label>
          </div>
          <div class="input-field">
            <input type="text" name="rombel" value="<?php echo @$edit['rombel']?>" ></input>
            <label for="">Rombel</label>
          </div>
          <div class="input-field">
            <input type="text" name="rayon" value="<?php echo @$edit['rayon']?>"></input>
            <label for="">Rayon</label>
          </div>
          <div>
            <label >Reward</label>
              <select name="kode_reward" class="browser-default" value="<?php echo @$edit['kode_reward']?>">
                <option value="" disabled selected>Pilih Reward</option>
                <?php
                $get_reward =mysqli_query($con,"SELECT * FROM tb_reward");

                foreach ($get_reward as $v_get_reward) {
                  echo '<option value ="'.$v_get_reward['kode_reward'].'">'.$v_get_reward['kode_reward'] .'</option>';
                }
                 ?>
              </select>
          </div>
          <div>
            <label >Punishment</label>
              <select name="kode_punishment" class="browser-default" value="<?php echo @$edit['kode_punishment']?>">
                <option value="" disabled selected>Pilih Punishment</option>
                <?php
                $get_punishment =mysqli_query($con,"SELECT * FROM tb_punishment");

                foreach ($get_punishment as $v_get_punishment) {
                  echo '<option value ="'.$v_get_punishment['kode_punishment'].'">'.$v_get_punishment['kode_punishment'] .'</option>';
                }
                 ?>
               </select>
          </div>
          <div>
            <?php 
              if (isset($_GET['edit'])) { ?>
                <input class="waves-effect waves-light btn orange lighten-1" id="btn4" type="submit" name="update" value="update" style="width: 90px; height: 30px;">  
            <?php } else{ ?>
                <input class="waves-effect waves-light btn orange lighten-1" id="btn4" type="submit" name="simpan" value="simpan" style="width: 90px; height: 30px;">
            <?php } ?>
          </div>
        </div>
        </div>
      </div>

      <div class="col m6 s12">
      <table class="striped responsive-table" style="margin-left: -150px;">
        <thead>
          <tr class="center light black-text">
              <th>NIS</th>
              <th>Nama Siswa</th>
              <th>Rombel</th>
              <th>Rayon</th>
              <th>Kode Reward</th>
              <th>Skor Reward</th>
              <th>Total Reward</th>
              <th>Kode Punishment</th>
              <th>Skor Punishment</th>
              <th>Total Punishment</th>
          </tr>
        </thead>

        <tbody>
          <tr class="center light black-text">
            <?php   
            foreach ($query as $a) {  

           ?>
            <td><?php echo $a['nis'] ?></td>
            <td><?php echo $a['namasiswa'] ?></td>
            <td><?php echo $a['rombel'] ?></td>
            <td><?php echo $a['rayon'] ?></td>
            <td><?php echo $a['kode_reward'] ?></td>
            <td><?php echo $a['skor_reward'] ?></td>
            <td><?php echo $a['skor_reward'] ?></td>
            <td><?php echo $a['kode_punishment'] ?></td>
            <td><?php echo $a['skor_punishment'] ?></td>
            <td><?php echo $a['skor_punishment'] ?></td>
            <td>
              <a href="?menu=input&edit&id=<?php echo $a['nis']?>" class="waves-effect waves-light btn orange lighten-1" id="btn4">Edit</a>
              <a href="?menu=input&hapus&id=<?php echo $a['nis']?>" class="waves-effect waves-light btn orange lighten-1" id="btn4">Hapus </a>
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