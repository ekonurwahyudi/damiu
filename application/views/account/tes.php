

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Vestifarm</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <meta name="keywords" content="investasi, investasi menguntungkan, investasi peternakan, investasi pertanian, agribisnis, agrikultur, investasi agrikultur, bagi hasil" />
    <meta name="theme-color" content="#43a047">
    <meta name="description" content="Vestifarm | Dashboard">
    <meta property="og:site_name" content="vestifarm.com" />
    <meta property="og:url" content="https://www.vestifarm.com/dashboard" />
    <meta property="og:title" content="Vestifarm | Dashboard" />
    <meta property="og:description" content="Vestifarm | Dashboard" />
    <meta property="og:image" content="https://www.vestifarm.com/asset_general/images/vesti-custom3.png" />
    <meta property="og:type" content="website" />
    
    <!-- Bootstrap core CSS     -->
    <link href="https://vestifarm.com/dashboard/asset_template/creative-tim/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="https://vestifarm.com/dashboard/asset_template/creative-tim/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="https://vestifarm.com/dashboard/asset_template/creative-tim/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!--   Core JS Files   -->
    <script src="https://vestifarm.com/dashboard/asset_template/creative-tim/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="https://vestifarm.com/dashboard/asset_template/creative-tim/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://vestifarm.com/dashboard/asset_template/creative-tim/js/material.min.js" type="text/javascript"></script>
    
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



      ga('create', 'UA-97440587-1', 'auto');

      ga('send', 'pageview');
    </script>
</head>

<body class="off-canvas-sidebar">
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://vestifarm.com"><img src="https://vestifarm.com/dashboard/asset_general/img/logo/vesti_login.png" style="width:150px"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="https://vestifarm.com/dashboard/login/register">
                            <i class="material-icons">person_add</i> Register
                        </a>
                    </li>
                    <li class="active">
                        <a href="https://vestifarm.com/dashboard/login">
                            <i class="material-icons">fingerprint</i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" filter-color="black" data-image="https://vestifarm.com/dashboard/asset_general/img/bg_login/bg1.jpg">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="row" style="padding-top:0px">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                      
                                <div class="card card-login card-hidden">
                                    <div class="card-header text-center" data-background-color="green">
                                        <h4 class="card-title">Login</h4>
                                        <div class="social-line">
                                            <a href="#" class="btn btn-just-icon btn-simple">
                                                <img src="https://vestifarm.com/dashboard/asset_general/img/login_form/sapi.png" style="width:22px">
                                            </a>
                                            <a href="#" class="btn btn-just-icon btn-simple">
                                                <img src="https://vestifarm.com/dashboard/asset_general/img/login_form/udang.png" style="width:24px">
                                            </a>
                                            <a href="#" class="btn btn-just-icon btn-simple">
                                                <img src="https://vestifarm.com/dashboard/asset_general/img/login_form/brokoli.png" style="width:17px">
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                 // Cetak jika ada notifikasi
            if($this->session->flashdata('sukses')) {
              echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
                 }
             ?>
			<?php echo form_open('login'); ?>
                                    <div class="card-content">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email address</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput" name="username" value="<?php echo set_value('username'); ?>"/>
                <p> <?php echo form_error('username'); ?> </p>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" id="formGroupExampleInput" name="password" value="<?php echo set_value('password'); ?>"/>
                                                <p> <?php echo form_error('password'); ?> </p>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="footer text-center"><br>
                                        <button type="submit" class="btn btn-success btn-wd" style="width:84%" name="btnSubmit">Sign In</button>


                                        <center><a href="https://www.facebook.com/v2.2/dialog/oauth?client_id=268416913603452&amp;state=ff2a74d3acc801420e979a208978da54&amp;response_type=code&amp;sdk=php-sdk-5.4.4&amp;redirect_uri=https%3A%2F%2Fvestifarm.com%2Fdashboard%2Flogin%2Ffb_login&amp;scope=email" class="btn btn-facebook pull-center" style="margin-top:0px;width:84%">Sign in with Facebook</a></center>
                                    </div>
                                    <div class="footer" style="margin-top:10px;padding-left:30px;padding-right:30px;padding-bottom:0px;">
                                        <style>
                                            .ggtxt{
                                                color:gray;
                                                cursor: pointer;
                                            }
                                            .ggtxt:hover{
                                                color:black
                                            }
                                        </style>
                                        <span onclick="forgot_pass()" class="text-left ggtxt">Forgot Password?</span>
                                        <span onclick="no_verf_email()" class="text-align:right ggtxt" style="margin-left:11px;display:none">Didn't get verification email?</span>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
    
<div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
          <div class="modal-dialog modal-notice">
                  <div class="modal-content">
                          <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                 <h5 class="modal-title" id="myModalLabel" style="margin-top:-7px">Forgot password?</h5>
                          </div>
                         
                         <div class="modal-body">
                                <form method="post" action="https://vestifarm.com/dashboard/login/recovery">
                                <div class="instruction">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br><p>Silakan masukkan email anda yang sudah terdaftar.</p><br>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email address</label>
                                                        <input type="email" name="email" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                <center><button type="submit" class="btn btn-success">Submit</button></center>
                                </form> 
                               </div>
                               <div class="modal-footer text-right" style="padding-right:30px">
                                     <a href="#" data-dismiss="modal" style="color:red">Tutup</a>
                               </div>
                  </div>
          </div>
</div>

<div class="modal fade" id="verdModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
          <div class="modal-dialog modal-notice">
                  <div class="modal-content">
                          <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                 <h5 class="modal-title" id="myModalLabel" style="margin-top:-7px">Didn't get verification email?</h5>
                          </div>
                         
                         <div class="modal-body">
                                <form method="post" action="https://vestifarm.com/dashboard/login/no_email_verf">
                                <div class="instruction">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br><p>Silakan masukkan email anda yang sudah terdaftar.</p><br>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email address</label>
                                                        <input type="email" name="email" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                <center><button type="submit" class="btn btn-success">Submit</button></center>
                                </form> 
                               </div>
                               <div class="modal-footer text-right" style="padding-right:30px">
                                     <a href="#" data-dismiss="modal" style="color:red">Tutup</a>
                               </div>
                  </div>
          </div>
</div>

<script>
    function forgot_pass(){
        $("#forgotModal").modal("show");
        $(".modal-backdrop").removeClass("modal-backdrop");
    }
    
    function no_verf_email(){
        $("#verdModal").modal("show");
        $(".modal-backdrop").removeClass("modal-backdrop");
    }
</script>                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="https://vestifarm.com">
                                    Beranda
                                </a>
                            </li>
                            <li>
                                <a href="https://vestifarm.com/produk">
                                    Produk Layanan
                                </a>
                            </li>
                            <li>
                                <a href="https://vestifarm.com/blog">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        2016
                        <a href="#">PT. Vestifarm Agro Indonesia</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
 
<!-- Forms Validations Plugin -->
<script src="https://vestifarm.com/dashboard/asset_template/creative-tim/js/jquery.validate.min.js"></script>
<!-- Promise Library for SweetAlert2 working on IE -->
<script src="https://vestifarm.com/dashboard/asset_template/creative-tim/js/es6-promise-auto.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="https://vestifarm.com/dashboard/asset_template/creative-tim/js/moment.min.js"></script>
<script src="https://vestifarm.com/dashboard/asset_template/creative-tim/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="https://vestifarm.com/dashboard/asset_template/creative-tim/js/bootstrap-notify.js"></script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="https://vestifarm.com/dashboard/asset_template/creative-tim/js/sweetalert2.js"></script>
<script src="https://vestifarm.com/dashboard/asset_template/creative-tim/js/jquery.tagsinput.js"></script>    
<!-- Material Dashboard javascript methods -->
<script src="https://vestifarm.com/dashboard/asset_template/creative-tim/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="https://vestifarm.com/dashboard/asset_template/creative-tim/js/demo.js"></script>
<script type="text/javascript">
    $().ready(function() {
        checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700);
        
            });

function checkFullPageBackgroundImage() {
        $page = $('.full-page');
        image_src = $page.data('image');

        if (image_src !== undefined) {
            image_container = '<div class="full-page-background" style="background-image: url(' + image_src + ') "/>'
            $page.append(image_container);
        }
    }    
    
function alert_bt(msg,types,icon){
        var icon_s = "warning";
        if(icon!=undefined){
            icon_s = icon;
        }
        $.notify({
            icon: icon_s,
            message: msg 
        },{
            // settings
            type: types,
            placement: {
                from: "top",
                align: "right"
            }
        });
    }
    
function alert_sweet_confirm(text,title,confirm_text){
        var rets = false;
        swal({
                title: "",
                text: text,
                type: 'warning',
                showConfirmButton: false,
                showCancelButton: true,
                cancelButtonClass: 'btn btn-danger',
                cancelButtonText: confirm_text,
                buttonsStyling: false
            },function(isConfirm){
                if(isConfirm){
                    rets = true;
                }
            });
        return rets;
    }    
        
    function alert_sweet_success(text,title,confirm_text){
        swal({
                title: "",
                text: text,
                timer:5000,
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success",
                type: "success"
            });
    } 
</script>

</html>