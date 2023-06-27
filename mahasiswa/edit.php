<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php 
  include '../component/header.php'
  ?>
  <body>  
    <?php 
    include '../component/svgsidebar.php'
    ?>
    

    <?php 
    include '../component/navbar.php'
    ?>
<div class="container-fluid">
  <div class="row">
  <?php 
    include '../component/sidebar.php'
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class=" align-items-center pt-3 pb-2 mb-3 border-bottom">
      <a href="index.php">KEMBALI</a>
          <br/>
          <br/>
          <h3>EDIT DATA MAHASISWA</h3>
        
          <?php
          include 'koneksi.php';
          $id = $_GET['id'];
          $data = mysqli_query($koneksi,"select * from mahasiswa where npm='$id'");
          while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="update.php">
            <div id="liveAlertPlaceholder"></div>

              <table>
                <tr>			
                  <td>Nama</td>
                  <td>
                    <input type="hidden" name="id" value="<?php echo $d['npm']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                  </td>
                </tr>
                <tr>
                  <td>NPM</td>
                  <td><input type="number" name="npm" value="<?php echo $d['npm']; ?>"></td>
                </tr>
                <tr>
                  <td>Program Studi</td>
                  <td><input type="text" name="program_study" value="<?php echo $d['program_study']; ?>"></td>
                </tr>
                <tr>
                  <td>Tempat Lahir</td>
                  <td><input type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>"></td>
                </tr>
                <tr>
                  <td>Tanggal Lahir</td>
                  <td><input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>"></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td class="d-flex gap-5">
                    <div>
                      <input type="radio" value="laki-laki" name="jenis_kelamin">laki-laki
                    </div>
                    <div>
                      <input type="radio" value="perempuan" name="jenis_kelamin">perempuan
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Agama</td>
                  <td><input type="text" name="agama" value="<?php echo $d['agama']; ?>"></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input class="btn btn-primary" id="liveAlertBtn" type="submit" value="SIMPAN"></td>
                </tr>		
              </table>
            </form>
            <?php 
          }
          ?>
      </div>
    </main>
  </div>
</div>
<script src="./assets/dist/js/bootstrap.bundle.min.js.map"></script>
<script src="../assets/dist/js/edit.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="./assets/dist/js/dashboard.js"></script></body>
</html>
