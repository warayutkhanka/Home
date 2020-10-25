<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://nickzaahhaahha.github.io/HCI_work6/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<!--
เนื่องจากมีปัญหาการ load font ข้ามเครื่อง ผ่านแฟ้ม all.min.css
จึงเพิ่มการกำหนด font-face และเรียกแฟ้มใน current folder
- https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css
- https://www.farahimpex.com/vendor/jeroennoten/laravel-adminlte/resources/assets/vendor/font-awesome/webfonts/
github.io
- https://nickzaahhaahha.github.io/HCI_work6/
- https://github.com/Nickzaahhaahha/HCI_work6
- https://nickzaahhaahha.github.io/HCI_work6/fontawesome-free/css/all.min.css
- http://thaiall.github.io/www/adminlte/adminlte_github.htm
--> 
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li><li class="nav-item d-none d-sm-inline-block">
	  <a href="http://www.thaiall.com/adminlte-3.0.4/pages/examples/burin1.htm" class="nav-link">Burin1</a>
      </li><li class="nav-item d-none d-sm-inline-block">
	  <a href="http://www.thaiall.com/adminlte/adminlte_fa_font.rar" class="nav-link">font.rar</a>
      </li><li class="nav-item d-none d-sm-inline-block">
	  <a href="http://www.thaiall.com/adminlte/adminlte.htm" class="nav-link">htm</a>
	  </li><li class="nav-item d-none d-sm-inline-block">
	  <a href="https://thaiall.github.io/www/adminlte/adminlte_github.htm" class="nav-link">github.io</a>
	  </li>
    </ul>

    <!-- SEARCH FORM -->
    <form action="http://www.google.com" class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-1 pb-1 mb-1 d-flex">
          <img src="photo.jpg" alt="User Image" style="height:30px;">
        <div class="info">
          <a href="https://github.com/thaiall/mygitfriends" class="d-block">My Git Friends</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <!-- li class="nav-item has-treeview menu-open" -->
		  <li class="nav-item has-treeview menu-close">
            <a href="https://warayutkhanka.github.io/home/" class="nav-link active">
                <i class="fas fa-users"></i>
              <p>
               นายวรายุทธ ขันก๋า
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://warayutkhanka.github.io/home/" class="nav-link">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://upload.facebook.com/profile.php?id=100004114149387" class="nav-link">
                  <i class="fab fa-facebook-f"></i>
                  <p>facebook</p>
                </a>
              </li>      
              <li class="nav-item">
                <a href="https://www.youtube.com/channel/UCFYt2ritCwm38J1HLGNSfRg?view_as=subscriber" class="nav-link">
                  <i class="fab fa-youtube"></i>
                  <p>youtube</p>
                </a>
              </li>         
              <li class="nav-item">
                <a href="me.html" class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>About Me</p>
                </a>
              </li>            
              <li class="nav-item">
                <a href="pyramid.html" class="nav-link">
                  <i class="fa fa-code" aria-hidden="true"></i>
                  <p>pyramid</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="subject.html" class="nav-link">
                  <i class="fas fa-graduation-cap"></i>
                  <p>วิชาที่สนใจ</p>
                </a>
              </li>                            
            </ul>
          </li>
          <li class="nav-item">
            <a href="http://www.thaiall.com/web2" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                /web2
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="https://github.com/warayutkhanka/CPSC331_63_1_PHP/blob/master/PyramidPHP/Nueng_01.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                /My Git Friends
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>		
		
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">  
    <!-- Main content -->
    <section class="content">


<fieldset class="col-12 small-box" style="font-family:kanit;">
<style>
.bigcap{float:left;font-size:60px;line-height:0.5;margin-top:5px;margin-right:5px;margin-left:5px;color:#000088}
</style>
<p>
    <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/carsystem.pdf" class="nav-link">ระบบการจัดการข้อมูลลานจอดรถ</a>
    <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/cosmetic.pdf" class="nav-link">ระบบขายเครื่องสำอางออนไลน์ </a>
    <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/hotel.pdf" class="nav-link">ระบบจองโรงแรม</a>
    <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/otop.pdf" class="nav-link">ระบบการจัดการการขายสินค้า OTOP</a>
    <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/student.pdf" class="nav-link">ระบบวางแผนการเรียนสำหรับนักศึกษาเทียบโอน</a>
    <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/07.pdf" class="nav-link">ระบบบริหารงานร้านขายคุกกี้ถั่วขาว</a>
    <a href="https://www.dpu.ac.th/dpuir/upload/file/it_project/is/03.pdf" class="nav-link">ระบบจัดการการสั่งทำเบเกอรี่ออนไลน์</a>
</p>
</fieldset>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://adminlte.io/themes/v3/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="https://adminlte.io/themes/v3/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="https://adminlte.io/themes/v3/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="https://adminlte.io/themes/v3/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="https://adminlte.io/themes/v3/plugins/moment/moment.min.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="https://adminlte.io/themes/v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://www.masterhook.net/public/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://adminlte.io/themes/v3/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://adminlte.io/themes/v3/dist/js/demo.js"></script>
</body>
</html>