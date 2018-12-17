<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>eLogistic | BPBD</title>

  <!-- Memangil link style untuk bootstrap, css, dan fonts google =========================================================-->
  <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/tampilan.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- ====================================================================================================================-->
</head>

<body id="page-top">
  
  <!-- Membuat menu navigasi dan foto profil pengguna di web ==============================================================-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span>
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo base_url(); ?>/assets/img/profil/bpbd.png" alt="">
      </span>
    </a>
      <h3 class="mb-0"><span class="text-head" >BPBD OFFICER</span></h3>
    <br>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#kebutuhan">Info Kebutuhan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#lokasi">Lokasi Bencana</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#pengiriman">Pengiriman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#prosedur">Tata Cara</a>
        </li>
      </ul>
    </div>
    <br><br><br><br>
    <span class="logout"><a href="<?php echo site_url('Bpbd/logout')?>"><i class="fas fa-sign-out-alt"> </i> Logout</a></span>
  </nav>
  <!-- ======================================================================================================================-->
 
  <!-- Membuat menu publikasi BPBD ==========================================================================================-->
  <div class="container-fluid p-0">
    <section class="resume-section" id="kebutuhan">
      <div class="my-auto">
        <h3 class="mb-0">
          <span class="text-primary">PUBLIKASI DATA KEBUTUHAN</span>
        </h3>
        <hr>

        <p class="mb-3">Data kebutuhan dari lokasi</p>
        <div class="col-md-12">  
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Kebutuhan</th>
              <th scope="col">QTY</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Status</th>
              </tr>
          </thead>
          
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Jogja</td>
              <td>Baju</td>
              <td>10pcs</td>
              <td>Untuk anak kecil</td>
              <td>
                <form action="/action_page.php">
                <div class="input-group md-5">
                  <select class="custom-select" id="inputKategori">
                    <option selected>Choose...</option>
                    <option value="open">Donasi di buka</option>
                    <option value="close">Donasi di tutup</option>
                  </select>
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Update</button>
                  </div>
                </div>
              </form>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
    </section>
    <hr class="m-0">
  <!-- ======================================================================================================================-->

  <!-- Membuat menu Lokasi BPBD ============================================================================================-->
    <section class="resume-section" id="lokasi">
      <div class="my-auto">
        <h3 class="mb-0">
          <span class="text-primary">PUBLIKASI LOKASI BENCANA</span>
        </h3>
        <hr>

        <p class="mb-3">Daftar Lokasi Bencana</p>
        <div class="col-md-12">            
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Jenis</th>
              <th scope="col">Alamat</th>
              <th scope="col">Kabupaten/Kota</th>
              <th scope="col">Provinsi</th>
              <th scope="col">Keterangan</th>
              <th scope="col"></th>
              </tr>
          </thead>
          
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Banjir</td>
              <td>jl. Sudirman no.22</td>
              <td>Surabaya</td>
              <td>Jawa Timur</td>
              <td>Lokasi banjir merupakan daerah perkotaan, banyak fasilitas rusak</td>
              <td width="110px;">
                <button class="btn btn-warning" type="button">&#10004</button>
                <button class="btn btn-danger" type="button">&#10006</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
    </section>
    <hr class="m-0">
  <!-- ======================================================================================================================-->

  <!-- Membuat menu Pengiriman logistik BPBD ==================================================================================-->
    <section class="resume-section" id="pengiriman">
      <div class="my-auto">
        <h3 class="mb-0">
          <span class="text-primary">PENGIRIMAN BARANG</span>
        </h3>
        <hr>

        <p class="mb-3">Pilih barang yang akan di kirimkan</p>
        <div class="col-md-12">         
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Donatur</th>
              <th scope="col">Kontak</th>
              <th scope="col">Barang</th>
              <th scope="col">QTY</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Pengiriman</th>
              <th scope="col">Validasi</th>

              </tr>
          </thead>
          
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Indah</td>
              <td>083746728323</td>
              <td>Baju</td>
              <td>10</td>
              <td>Yogyakarta</td>
              <td>Semoga bermanfaat, baju layak pakai</td>
              <td>
                <button class="btn btn-success btn-block" type="button">Kirim</button>
              </td>
              <td>sampai</td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
    </section>
    <hr class="m-0">
  <!-- ======================================================================================================================-->

  <!-- Membuat menu tata cara pengiriman BPBD ===========================================================================================-->
    <section class="resume-section" id="prosedur">
      <div class="my-auto">
        <h3 class="mb-0"><span class="text-primary">TATA CARA PENGIRIMAN BARANG</span></h3>
        <hr> 
        <p class="mb-3">Berikut merupakan tata cara pengiriman dengan eLogistic</p>

        <form action="<?php echo site_url('Bpbd/insertProsedur') ?>" method="POST">
          <table>
            <tr>
              <input class="form-control col-sm-11" type="text" name="prosedur" placeholder="Tuliskan Prosedur">
              <input class="form-control btn-primary col-sm-1" type="submit" name="addProsedur" value="Tambah">
            </tr>
          </table>
        </form>
        
        <br>  
        <hr>  

        <table class="table table-borderless">
          <tbody>
            <?php 
            
            foreach($hasilnya as $r){ ?>
            
            <tr>
              <td width="50px" scope="row"><?php echo "&#10162"?></td>
              <td><?php echo $r['prosedur'] ?></td>
              <td> <a href="<?php echo site_url('Bpbd/editProsedur') ?>">&#9999</a>
              <td> <a href="<?php echo site_url('Bpbd/deleteProsedur/'.$r['id']) ?>" onclick="return confirm('Anda ingin menghapus data?')">&#10006</a></td>
            </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>

      </div>
    </section>
  </div>
  <!-- ======================================================================================================================-->

  <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>/assets/js/resume.js"></script>

</body>

</html>
