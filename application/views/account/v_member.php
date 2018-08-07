<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="http://localhost/belajar/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="http://localhost/belajar/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard DAMIU
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="http://localhost/belajar/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="http://localhost/belajar/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="http://localhost/belajar/assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Damiu Skripsi
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="/">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./laporan.html">
              <i class="material-icons">library_books</i>
              <p>Laporan Pembeli</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./profil.html">
              <i class="material-icons">person</i>
              <p>Profil Saya</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./ubah.html">
              <i class="material-icons">lock</i>
              <p>Ubah Password</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./saran.html">
              <i class="material-icons">mail</i>
              <p>Kotak Saran</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href='http://localhost/belajar/login/logout'>
              <i class="material-icons">exit_to_app</i>
              <p>Keluar</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
          Selamat datang, <?php echo ucfirst($this->session->userdata('username')); ?>!
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="mau cari apa cuy ...?">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
	  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form>
				  <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Nama Lengkap</label>
													<input type="text" class="form-control" name="name" value="<?php echo ucfirst($this->session->userdata('nama')); ?>">
													
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input type="text" class="form-control" name="email" value="<?php echo ucfirst($this->session->userdata('email')); ?>">
												</div>
	                                        </div>
										</div>
										<div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Nomor HP</label>
													<input type="text" class="form-control" name="email" value="<?php echo ucfirst($this->session->userdata('nomorhp')); ?>">
												</div>
	                                        </div>
										</div>
										<div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Jabatan</label>
													<input type="text" class="form-control" name="email" value="<?php echo ucfirst($this->session->userdata('jabatan')); ?>">
												</div>
	                                        </div>
	                                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray"><?php echo ucfirst($this->session->userdata('jabatan')); ?></h6>
                  <h4 class="card-title"><?php echo ucfirst($this->session->userdata('nama')); ?></h4>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

      <footer class="footer">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Ini adalah website untuk skripsi
          
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="http://localhost/belajar/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="http://localhost/belajar/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="http://localhost/belajar/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="http://localhost/belajar/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="http://localhost/belajar/assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="http://localhost/belajar/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="http://localhost/belajar/assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="http://localhost/belajar/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>