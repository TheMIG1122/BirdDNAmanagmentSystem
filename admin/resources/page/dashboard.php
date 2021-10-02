<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title">Dashboard</h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
  



  <div class="container">
    <div class="row">
        <div class="col-md-3 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h4 class="m-b-20">Total Samples</h4>
                    <h2 class="text-right custom-icon"><img src="../assets/images/icons/samplesW.png" alt=""><span><?php echo count_row('dna_samples','')?></span></h2>
                    <p class="m-b-0"><a href="index.php?page=search_sample">Expore More <span class="fas fa-angle-right"></span></a></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h4 class="m-b-20">Tested Samples</h4>
                    <h2 class="text-right custom-icon"><img src="../assets/images/icons/testedW.png" alt=""><span><?php echo count_row('dna_samples','WHERE status=1')?></span></h2>
                    <p class="m-b-0"><a href="index.php?page=tested_sample">Expore More <span class="fas fa-angle-right"></span></a></p>
                </div>
            </div>
        </div>
        
        
        <div class="col-md-3 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h4 class="m-b-20">Pending Samples</h4>
                    <h2 class="text-right custom-icon"><img src="../assets/images/icons/pendingW.png" alt=""><span><?php echo count_row('dna_samples','WHERE status=0')?></span></h2>
                    <p class="m-b-0"><a href="index.php?page=pending_sample">Expore More <span class="fas fa-angle-right"></span></a></p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h4 class="m-b-20">Pending Paymentss</h4>
                    <h2 class="text-right custom-icon"><img src="../assets/images/icons/money.png" alt=""><span><?php echo count_total('owners',"WHERE payment_status = 'Credit'","total");?> Rs</span></h2>
                    <p class="m-b-0"><a href="index.php?page=credit_detail">Expore More <span class="fas fa-angle-right"></span></a></p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-xl-3">
            <div class="card fe-male-card order-card">
                <div class="card-block">
                    <h4 class="m-b-20">Fe-Male</h4>
                    <h2 class="text-right custom-icon"><img src="../assets/images/icons/femaleW.png" alt=""><span><?php echo count_row('dna_samples','WHERE result="Fe-Male"')?></span></h2>
                    <p class="m-b-0"><a href="index.php?page=tested_sample&type=Fe-Male">Expore More <span class="fas fa-angle-right"></span></a></p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-xl-3">
            <div class="card male-card order-card">
                <div class="card-block">
                    <h4 class="m-b-20">Male</h4>
                    <h2 class="text-right custom-icon"><img src="../assets/images/icons/maleW.png" alt=""><span><?php echo count_row('dna_samples','WHERE result="Male"')?></span></h2>
                    <p class="m-b-0"><a href="index.php?page=tested_sample&type=Male">Expore More <span class="fas fa-angle-right"></span></a></p>
                </div>
            </div>
        </div>
  </div>
</div>

</div>

</div>