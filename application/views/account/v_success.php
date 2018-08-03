

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Halaman Login</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
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
                <a class="navbar-brand" href="http://localhost/belajar"><span>Damiu Skripsi</span></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                <li class="">
                        <a href="http://localhost/belajar">
                            <i class="material-icons">home</i> Beranda
                        </a>
                    </li>    
                <li class="">
                        <a href="http://localhost/belajar/register">
                            <i class="material-icons">person_add</i> Daftar
                        </a>
                    </li>
                    <li class="active">
                        <a href="http://localhost/belajar/login">
                            <i class="material-icons">fingerprint</i> Masuk
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" filter-color="black" data-image="https://demos.creative-tim.com/material-dashboard-pro/assets/img/login.jpg">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
            <div class="container" >
                
<div class="section">
     <div class="row" style="padding-top:0px">
        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
          <div class="card card-login card-hidden">
            <div class="card-header text-center" data-background-color="green">
            <h4 class="card-title"><?php echo $message; ?></h4>
</div>
<div class="footer text-center"><br>
<a href="http://localhost/belajar/login"><button type="submit" class="btn btn-success btn-wd" style="width:84%">Masuk</button></a>
    </div>
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