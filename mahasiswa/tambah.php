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
        <br/>
        
        <!-- start input edit  -->
<div class="container">
  <h3 class="pb-3">TAMBAH DATA MAHASISWA</h3>
  <div class="container d-flex justify-content-between">
    <form method="post" action="tambah_aksi.php">
      <table>
        <tr class="mb-3">			
          <td>Nama</td> 
          <td><input type="text" class="form-control" name="nama"></td>
        </tr>
        <tr class="pb-3">
          <td>NPM</td>
          <td><input type="number" name="npm" class="form-control"  ></td>
        </tr>
        <tr class="pb-3">
          <td>Program Studi</td>
          <td><input type="text" class="form-control"  name="program_study"></td>
        </tr>
        <tr class="pb-3">
          <td>Tempat Lahir</td>
          <td><input type="text" class="form-control" name="tempat_lahir"></td>
        </tr>
        <tr class="pb-3">
          <td>Tanggal Lahir</td>
          <td><input type="date" name="tanggal_lahir" class="form-control" ></td>
        </tr>
        <tr class="pb-3">
          <td>Jenis Kelamin</td>
          <td><input type="radio" value="laki-laki" name="jenis_kelamin">laki-laki
                  <input type="radio" value="perempuan" name="jenis_kelamin">perempuan
                  </td>
        </tr>
        <tr class="pb-3">
          <td>agama</td>
          <td><input type="text" class="form-control" name="agama"></td>
        </tr>
        <tr class="pb-3">
          <td>alamat</td>
          <td><input type="text" class="form-control" name="alamat"></td>
        </tr>
        <tr class="pb-3">
          <td></td>
          <td><input type="submit" value="SIMPAN" class="btn btn-success "></td>
        </tr>		
      </table>
    </form>
    <a href="index.php">KEMBALI</a>

  </div>
  </div>

  <!-- end  input edit -->
      </div>
    </main>
  </div>
</div>
<script src="./assets/dist/js/bootstrap.bundle.min.js.map"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="./assets/dist/js/dashboard.js"></script></body>
</html>
