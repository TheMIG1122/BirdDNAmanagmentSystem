<?php require_once 'resources/config.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/dna.png">
	<title>Bird DNA | Admin Panel</title>
	<!-- Custom CSS -->
	<script src='assets/js/sweetalert.js'></script>
	<script src='assets/js/alerts.js'></script>
	<link href="assets/libs/flaticon/flaticon.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="assets/css/style.min.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">
	<style>
		html {
			scroll-behavior: smooth;
		}
		@media (min-width: 992px){
			.container {
				max-width: 1130px;
				width: 100% !important;
			}
		}
		.page-breadcrumb {
			padding: 20px;
		}
		.order-card {
			color: #fff;
		}

		.bg-c-blue {
			background: linear-gradient(45deg,#4099ff,#73b4ff);
		}

		.bg-c-green {
			background: linear-gradient(45deg,#2ed8b6,#59e0c5);
		}

		.bg-c-yellow {
			background: linear-gradient(45deg,#FFB64D,#ffcb80);
		}

		.bg-c-pink {
			background: linear-gradient(45deg,#FF5370,#ff869a);
		}


		.card {
			border-radius: 5px;
			-webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
			box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
			border: none;
			margin-bottom: 30px;
			-webkit-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out;
		}

		.card .card-block {
			padding: 25px;
		}

		.order-card i {
			font-size: 26px;
		}

		.f-left {
			float: left;
		}

		.f-right {
			float: right;
		}
		.card-block a {
			font-size: 16px;
			color: #fff !important;
		}
		a {
		cursor: pointer !important;
	}
	</style>
</head>

<body>
	<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    <div class="conrainer">
        <div class="row justify-content-center">
            <div class="col-md-10">
            <div class="card p-4 mt-5">
                <div class="row">
                    <div class="col-12">
                        <h4 class="alert alert-info text-center">Search Record</h4>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-4">
                                <form action="#" method="POST">
                                    <input type="hidden" name="type" value="owner">
                                    <div class="form-group">
                                        <label>Search Throug Owner Phone Number</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Phone Number" aria-label="Recipient's username" aria-describedby="basic-addon2" required value="<?php echo (isset($_POST['phone'])) ? $_POST['phone'] : '' ; ?>" name="phone">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="submit" name="search_sample">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form action="#" method="POST">
                                <input type="hidden" name="type" value="dna">
                                    <div class="form-group">
                                        <label>Search Throug DNA ID</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="ID" aria-label="Recipient's username" aria-describedby="basic-addon2" required value="<?php echo (isset($_POST['dna'])) ? $_POST['dna'] : '' ; ?>" name="dna">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="submit" name="search_sample">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="form-group">
                                    <button class="btn btn-success" style="margin-top:28px" type="button">Download as PDF</button>
                                </div>
                            </div> -->
                        </div>
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
                                        <th>BirdID</th>
                                        <th>Specie</th>
                                        <th>Sample Type</th>
                                        <th>Gender Result</th>
                                        <th>Quality</th>
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