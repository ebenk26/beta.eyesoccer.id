<!DOCTYPE html>
<html lang="en">

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>EyeMarket - EyeSoccer</title>
      <link rel="stylesheet" href="<?=base_url()?>assets/eyemarket/user/node_modules/font-awesome/css/font-awesome.min.css" />
      <link rel="stylesheet" href="<?=base_url()?>assets/eyemarket/user/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
      <link rel="stylesheet" href="<?=base_url()?>assets/eyemarket/user/style.css"/>
      <link rel="shortcut icon" href="<?=base_url()?>img/tab_icon.png"/>
  </head>
  <body>
      <div class=" container-scroller">
        <!--Navbar-->
        <nav class="navbar bg-primary-gradient col-lg-12 col-12 p-0 fixed-top navbar-inverse d-flex flex-row">
            <div class="bg-white text-center navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="<?= base_url(); ?>eyemarket"><img src="<?=base_url()?>assets/eyemarket/eyemarket_icon.png" style="width: 40px;" /></a>
                <a class="navbar-brand brand-logo-mini" href="<?= base_url(); ?>eyemarket"><img src="<?=base_url()?>assets/eyemarket/eyemarket_icon.png"  alt=""></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center" style="padding-bottom: 6px;padding-top: 10px;">
                <button class="navbar-toggler navbar-toggler hidden-md-down align-self-center mr-3" type="button" data-toggle="minimize">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <form class="form-inline mt-2 mt-md-0 hidden-md-down">
                    <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
                </form>
                <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
                    <li class="nav-item">
                        <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="<?=base_url()?>assets/eyemarket/user/images/face.jpg" alt=""></a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right hidden-lg-up align-self-center" type="button" data-toggle="offcanvas">
                  <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!--End navbar-->
        <div class="container-fluid">
            <div class="row row-offcanvas row-offcanvas-right">
                <nav class="bg-white sidebar sidebar-fixed sidebar-offcanvas" id="sidebar">
                <div class="user-info">
                    <img src="<?=base_url()?>assets/eyemarket/user/images/face.jpg" alt="">
                    <p class="name"><?= $nama_lengkap; ?></p>
                </div>
                    <ul class="nav">
                        <li class="nav-item" id="profile">
                            <a class="nav-link" href="<?= base_url() ?>eyemarket/user/<?= $id_member; ?>">
                                <!-- <i class="fa fa-dashboard"></i> -->
                                <img src="<?=base_url()?>assets/eyemarket/user/images/icons/1.png" alt="">
                                <span class="menu-title">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item" id="pesanan">
                            <a class="nav-link" href="<?= base_url() ?>eyemarket/pesanan/<?= $id_member; ?>">
                                <img src="<?=base_url()?>assets/eyemarket/user/images/icons/2.png" alt="">
                                <span class="menu-title">Pesanan</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- SIDEBAR ENDS -->
                
                <div class="content-wrapper">
            <?php
                if ($this->session->flashdata('sukses') == TRUE)
                {
            ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <?php echo $this->session->flashdata('sukses'); ?>
                    </div>
            <?php        
                }
            ?>

            <?php
                if ($this->session->flashdata('gagal') == TRUE)
                {
            ?>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <?php echo $this->session->flashdata('gagal'); ?>
                    </div>
            <?php        
                }
            ?>
                    
                    <?= $content; ?>

                </div>
                <footer class="footer">
                    <div class="container-fluid clearfix">
                      <span class="float-right">
                          <a href="#">EyeMarket</a> &copy; 2017
                      </span>
                    </div>
                </footer>
            </div>
        </div>

      </div>

      <script src="<?=base_url()?>assets/eyemarket/user/node_modules/jquery/dist/jquery.min.js"></script>
      <script src="<?=base_url()?>assets/eyemarket/user/node_modules/tether/dist/js/tether.min.js"></script>
      <script src="<?=base_url()?>assets/eyemarket/user/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="<?=base_url()?>assets/eyemarket/user/node_modules/chart.js/dist/Chart.min.js"></script>
      <script src="<?=base_url()?>assets/eyemarket/user/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
      <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script> -->
      <script src="<?=base_url()?>assets/eyemarket/user/js/off-canvas.js"></script>
      <script src="<?=base_url()?>assets/eyemarket/user/js/hoverable-collapse.js"></script>
      <script src="<?=base_url()?>assets/eyemarket/user/js/misc.js"></script>
      <script src="<?=base_url()?>assets/eyemarket/user/js/jquery.chained.js"></script>
      <script src="<?=base_url()?>assets/eyemarket/user/js/jquery.chained.remote.js"></script>
      <!-- <script src="<?=base_url()?>assets/eyemarket/user/js/chart.js"></script> -->
      <!-- <script src="<?=base_url()?>assets/eyemarket/user/js/maps.js"></script> -->

    <script type="text/javascript">
        $(document).ready(function()
        {
            $("#<?= $active; ?>").addClass("active");

            // $("#kota").chained("#provinsi");

            // $("#kecamatan").chained("#kota");

            // $("#kota").chained("#provinsi");
            // $("#kecamatan").chained("#kota");

            $("#series").remoteChained({
                parents : "#provinsi",
                url : "/EyeMarket/getProvinsi"
            });
        });
    </script>

  </body>

</html>
