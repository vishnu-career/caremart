<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Student Form</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Bootstrap -->
  <link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url('vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?php echo base_url('vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="<?php echo base_url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>"
    rel="stylesheet">
  <!-- JQVMap -->
  <link href="<?php echo base_url('vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="<?php echo base_url('vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url('build/css/custom.min.css') ?>" rel="stylesheet">

  <!---vvv-->
  <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <!-- bootstrap-wysiwyg -->
  <link href="<?php echo base_url('vendors/google-code-prettify/bin/prettify.min.css') ?>" rel="stylesheet">
  <!-- Select2 -->
  <link href="<?php echo base_url('vendors/select2/dist/css/select2.min.css') ?>" rel="stylesheet">
  <!-- Switchery -->
  <link href="<?php echo base_url('vendors/switchery/dist/switchery.min.css') ?>" rel="stylesheet">
  <!-- starrr -->
  <link href="<?php echo base_url('vendors/starrr/dist/starrr.css') ?>" rel="stylesheet">



  <!-- Font Awesome -->


  <!-- Datatables -->

  <link href="<?php echo base_url('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') ?>"
    rel="stylesheet">
  <link href="<?php echo base_url('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') ?>"
    rel="stylesheet">
  <link href="<?php echo base_url('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Hello!!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url('images/img.jpg') ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Vishnu</h2>
              </div>
            </div>


            <br />


            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('DetailsShow') ?>">Scroll Images</a></li>
                      <li><a href="<?php echo base_url('product_list') ?>">Product</a></li>
                      <li><a href="<?php echo base_url('tour') ?>">Acheiver's Tour</a></li>
                      <li><a href="<?php echo base_url('awards') ?>">Awards & Rewards</a></li>
                    </ul>
                  </li>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url('images/img.jpg') ?>" alt="">Vishnu
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="<?php echo base_url('logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>



        <!-- page content -->
        <div class="right_col" id="heads" role="main">
          <!-- top tiles -->

          <?php echo $this->renderSection('content') ?>

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <!-- jQuery -->
  <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js') ?>"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url('vendors/fastclick/lib/fastclick.js') ?>"></script>
  <!-- NProgress -->
  <script src="<?php echo base_url('vendors/nprogress/nprogress.js') ?>"></script>
  <!-- Chart.js -->
  <script src="<?php echo base_url('vendors/Chart.js/dist/Chart.min.js') ?>"></script>
  <!-- gauge.js -->
  <script src="<?php echo base_url('vendors/gauge.js/dist/gauge.min.js') ?>"></script>
  <!-- bootstrap-progressbar -->
  <script src="<?php echo base_url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url('vendors/iCheck/icheck.min.js') ?>"></script>
  <!-- Skycons -->
  <script src="<?php echo base_url('vendors/skycons/skycons.js') ?>"></script>
  <!-- Flot -->
  <script src="<?php echo base_url('vendors/Flot/jquery.flot.js') ?>"></script>
  <script src="<?php echo base_url('vendors/Flot/jquery.flot.pie.js') ?>"></script>
  <script src="<?php echo base_url('vendors/Flot/jquery.flot.time.js') ?>"></script>
  <script src="<?php echo base_url('vendors/Flot/jquery.flot.stack.js') ?>"></script>
  <script src="<?php echo base_url('vendors/Flot/jquery.flot.resize.js') ?>"></script>
  <!-- Flot plugins -->
  <script src="<?php echo base_url('vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
  <script src="<?php echo base_url('vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/flot.curvedlines/curvedLines.js') ?>"></script>
  <!-- DateJS -->
  <script src="<?php echo base_url('vendors/DateJS/build/date.js') ?>"></script>
  <!-- JQVMap -->
  <script src="<?php echo base_url('vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
  <script src="<?php echo base_url('vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
  <script src="<?php echo base_url('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="<?php echo base_url('vendors/moment/min/moment.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?php echo base_url('build/js/custom.min.js') ?>"></script>


  <!---ddd-->
  <!-- jQuery -->

  <!-- Bootstrap -->



  <!-- Datatables -->
  <script src="<?php echo base_url('vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>"></script>
  <script src="<?php echo base_url('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/jszip/dist/jszip.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/pdfmake/build/pdfmake.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/pdfmake/build/vfs_fonts.js') ?>"></script>

  <!-- bootstrap-wysiwyg -->
  <script src="<?php echo base_url('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') ?>"></script>
  <script src="<?php echo base_url('vendors/jquery.hotkeys/jquery.hotkeys.js') ?>"></script>
  <script src="<?php echo base_url('vendors/google-code-prettify/src/prettify.js') ?>"></script>
  <!-- jQuery Tags Input -->
  <script src="<?php echo base_url('vendors/jquery.tagsinput/src/jquery.tagsinput.js') ?>"></script>
  <!-- Switchery -->
  <script src="<?php echo base_url('vendors/switchery/dist/switchery.min.js') ?>"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url('vendors/select2/dist/js/select2.full.min.js') ?>"></script>
  <!-- Parsley -->
  <script src="<?php echo base_url('vendors/parsleyjs/dist/parsley.min.js') ?>"></script>
  <!-- Autosize -->
  <script src="<?php echo base_url('vendors/autosize/dist/autosize.min.js') ?>"></script>
  <!-- jQuery autocomplete -->
  <script src="<?php echo base_url('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') ?>"></script>
  <!-- starrr -->
  <script src="<?php echo base_url('vendors/starrr/dist/starrr.js') ?>"></script>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  </body>
</html>
