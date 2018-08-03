<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="http://localhost/belajar/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="http://localhost/belajar/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>
     Halaman Login | Tutorial Simple Login Register CodeIgniter @ http://recodeku.blogspot.com
   </title>
 </head>
 <body>
 <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">belajar CI</a>
      <ul class="right hide-on-med-and-down">
		<li><a href="http://localhost/belajar/">Home</a></li>
		<li><a href="http://localhost/belajar/login">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
	  <li>
          <div class="user-view">
            <div class="background">
              <img src="https://gaewithphp.appspot.com/asset/img/office.jpg">
            </div>
            <a href="#user"><img class="circle" src="https://gaewithphp.appspot.com/asset/img/yuna.jpg"></a>
            <a href="#name"><span class="white-text name">John Doe</span></a>
            <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
          </div>
        </li>

	  <li><a href="#">Home</a></li>
		<li><a href="#">Login</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>
<div class="container" >
<div class="section">
     <h2>Pendaftaran Akun</h2>
			<div class="col-md-6">
			<?php echo form_open('register'); ?>
            <div class="form-group">
			    <label for="formGroupExampleInput">Nama Lengkap</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="<?php echo set_value('name'); ?>"/>
                <p> <?php echo form_error('name'); ?> </p>
            </div>

            <div class="form-group">
			    <label for="formGroupExampleInput2">Username</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="username" value="<?php echo set_value('username'); ?>"/>
                <p> <?php echo form_error('username'); ?> </p>
            </div>
            <div class="form-group">
			    <label for="formGroupExampleInput3">Email</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="email" value="<?php echo set_value('email'); ?>"/>
                <p> <?php echo form_error('email'); ?> </p>
            </div>
            <div class="form-group">
			    <label for="formGroupExampleInput4">password</label>
                <input type="password" class="form-control" id="formGroupExampleInput" name="password" value="<?php echo set_value('password'); ?>"/>
                <p> <?php echo form_error('password'); ?> </p>
            </div>
            <div class="form-group">
			    <label for="formGroupExampleInput5">Konfirmasi Password</label>
                <input type="password" class="form-control" id="formGroupExampleInput" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
                <p> <?php echo form_error('password_conf'); ?> </p>
            </div>
            <button type="submit" class="btn btn-outline-primary" name="btnSubmit">Daftar Sekarang</button>	
            <?php echo form_close();?>
                </div>
                </div>
</div>
      
 


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="http://localhost/belajar/assets/js/materialize.js"></script>
  <script src="http://localhost/belajar/assets/js/init.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 </body>
 </html>