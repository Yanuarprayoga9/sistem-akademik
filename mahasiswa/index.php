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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
           <a href="tambah.php" id="tambahMhs"  class="btn btn-outline-secondary hover">+ TAMBAH MAHASISWA</a>         
          </div>
        </div>
      </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm text-center">
          <thead>
            <tr class="pb-2">
              <th >NO</th>
              <th >Nama</th>
              <th >NPM</th>
              <th >Program Studi</th>
              <th>Jenis Kelamin</th>
              <th >Tempat Lahir</th>
              <th >Tanggal Lahir</th>
              <th >Agama</th>
              <th >Alamat</th>
              <th >OPSI</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from mahasiswa");
            while($d = mysqli_fetch_array($data)){
              ?>
              <tr scope="row">
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['npm']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['program_study']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['tempat_lahir']; ?></td>
                <td><?php echo $d['tanggal_lahir']; ?></td>
                <td><?php echo $d['agama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td class="d-flex gap-2 text-light">
                  <a href="edit.php?id=<?php echo $d['npm']; ?> " class="btn btn-warning" >EDIT</a>
                  
                  <button href="hapus.php?id=<?php echo $d['npm']; ?>" class="btn btn-danger"  id="hapusBtn" data-toggle="modal" data-target="#exampleModal">HAPUS</button>
                </td>
              </tr>
              <?php 
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script src="./assets/dist/js/bootstrap.bundle.min.js.map"></script>
<script src="../assets/dist/js/hapusAlert.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="./assets/dist/js/dashboard.js"></script></body>
</html>
