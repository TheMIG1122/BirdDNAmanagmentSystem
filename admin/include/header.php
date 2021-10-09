<?php echo '<input type="hidden" id="a_quality_amount" value="'.$quality_a.'"><input type="hidden" id="b_quality_amount" value="'.$quality_b.'">'; ?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="robots" content="noindex, nofollow" />
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/dna.png">
	<title>Quality DNA | Admin Panel</title>
	<!-- Custom CSS -->
	<script src='../assets/js/sweetalert.js'></script>
	<script src='../assets/js/alerts.js'></script>
	<link href="../assets/libs/flaticon/flaticon.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="../assets/css/style.min.css" rel="stylesheet">
	<link href="../assets/css/custom.css" rel="stylesheet">
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
	#main-wrapper[data-layout=vertical][data-sidebartype=full] .page-wrapper {
    margin-left: 185px;
    padding-bottom: 90px;
}
.sidebar-nav ul .sidebar-item {
    width: 185px;
}
.left-sidebar {
    width: 185px;
}
.table td, .table th {
    padding: 0.3rem;
    font-size: 14px;
}
.card-body {
    padding: 0;
}
	</style>
</head>

<body>
	<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">