
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD DATA PASIEN</title>
        <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>assets/css/plugins/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>assets/css/plugins/simple-line-icons.css"/>
        <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>assets/css/plugins/animate.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php  echo base_url() ?>assets/css/plugins/fullcalendar.min.css"/>
        <link href="<?php  echo base_url() ?>assets/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?php  echo base_url() ?>assets/img/logo-rs.png">
    </head>

    <body class="dashboard">
        <!-- start: Header -->
        <!-- <nav class="navbar navbar-default header navbar-fixed-top">
            <div class="col-md-12 nav-wrapper">
                <div class="navbar-header" >
                    <a href="index.html" class="navbar-brand"> 
                        <img src="<?php echo base_url()?>uploads/logo-rs.png" alt="Logo" width="40" height="40">
                    </a>
                    <ul class="nav navbar-nav search-nav">
                        <li>
                            <div class="search">
                                <?php echo anchor('Auth/logout',' <span class="fa fa-sign-out icon-sign-out" style="font-size:23px;"></span>');?>
                                <div class="form-group form-animate-text">
                                    <span class="bar"></span>
                                    <label><b style="color:white;">Logout</b></label>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right user-nav">
                        <li class="user-name"><span><?php echo $this->session->userdata('username') ?></span></li>
                       <img src="<?php echo base_url()?>assets/img/avatar.jpg" class="img-circle avatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                     </ul>
                </div>
            </div>
        </nav> -->

		<nav class="navbar navbar-expand-lg navbar-dark bg-light">
  <a class="navbar-brand" href="#">CRUD Data Pasien</a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div> -->
</nav>
        <!-- end: Header -->

        <div class="container-fluid mimin-wrapper">

            <!-- start:Left Menu -->
            <div id="left-menu">
                <div class="sub-left-menu scroll">
                    <ul class="nav nav-list">
                        <li class="ripple"><a href="<?php echo site_url('dashboard') ?>"><span class="fa fa-home"></span>Dashborad</a></li>
                        <li class="ripple"><a href="<?php echo site_url('pendaftaran') ?>"><span class="fa fa-user"></span>Pendaftaran</a></li>
                       </ul>
                </div>
            </div>
            <!-- end: Left Menu -->
        </div>

            <!-- start: content -->
            <div id="content">
                <?php echo $contents  ?>
            </div>
            <!-- end: content -->
        <!-- start: Mobile -->
        
        <!-- start: Javascript -->
        <script src="<?php  echo base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/jquery.ui.min.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/bootstrap.min.js"></script>
       <script src="<?php  echo base_url() ?>assets/js/plugins/jquery.datatables.min.js"></script>
       <script src="<?php  echo base_url() ?>assets/js/plugins/datatables.bootstrap.min.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/plugins/moment.min.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/plugins/jquery.vmap.min.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/plugins/maps/jquery.vmap.world.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/plugins/jquery.vmap.sampledata.js"></script>
        <script src="<?php  echo base_url() ?>assets/js/main.js"></script>
        <script type="text/javascript">
            
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
        </script>
        <script type="text/javascript">
    	</script>
        <!-- end: Javascript -->
    </body>
</html>
