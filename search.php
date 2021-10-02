<?php require_once 'resources/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Quality DNA Lab</title>
  <meta name="description" content="Quality DNA Lab is Offering all Kind of Birds DNA services in affordable price. We are having Imported Equipment's for Birds DNA testing with 99.9% Accuracy of Results. Quality of Service is our First Priority.">

  <meta name="robots" content="no-index, no-follow" />

  <meta content="Quality DNA Lab, Birds DNA, Birds DNA Lab, Quality, Ali Birds, Ali Birds Shop, Lahore DNA Lab, Bird DNA, Birds DNA Testing,Birds Sampling" name="keywords">

  <!-- Favicons -->
  <link href="assets/images/dna.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="front_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="front_assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="front_assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="front_assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="front_assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="front_assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="front_assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.6.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top bg-white">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/images/logo.png" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
			<li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="search.php">Search</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
	<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    <div class="conrainer">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-5">
            <div class="card p-4 mt-5">
                <div class="row">
                    <div class="col-12">
                        <h4 class="alert alert-info text-center">Search Record</h4>
                    </div>
                    <div class="col-12">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Search By Customer Phone Number</label>
                                        <input type="text" class="form-control" placeholder="Phone Number" aria-label="Recipient's username" aria-describedby="basic-addon2" required value="<?php echo (isset($_POST['phone'])) ? $_POST['phone'] : '' ; ?>" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Search By Bird ID</label>
                                        <input type="text" class="form-control" placeholder="ID" aria-label="Recipient's username" aria-describedby="basic-addon2" value="<?php echo (isset($_POST['dna'])) ? $_POST['dna'] : '' ; ?>" name="dna">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label style='opacity : 0'>.</label>
                                        <button class="btn btn-success form-control" name='search_sample'>Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12">
                        <p class='mt-4'><?php echo get_owner_details_search(); ?><br><?php echo get_total_bar_search();?></p>
                    </div>
                </div>

                <?php if(isset($_POST['search_sample'])) { ?>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered middle-aligned">
                                <thead>
                                    <tr>
                                        <th style="width:10px">Sr</th>
                                        <th>Basic Information</th>
                                        <th>Bird ID</th>
                                        <th>Specie</th>
                                        <th>Sample Type</th>
                                        <th>Gender Result</th>
                                        <th>Dates</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <div class="tbody">
                                    <?php $samples = get_search_samples('true'); ?>
                                </div>
                            </table>
                        </div>
                    </div>
                <?php } ?>
            </div>
            </div>
        </div>
    </div>