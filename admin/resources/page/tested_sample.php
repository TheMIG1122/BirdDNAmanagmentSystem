<?php delete_sample();?>
<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title">Tested Samples</h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Tested</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
  



  <div class="container">
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card p-2">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>DNA ID</th>
                                    <th>Owner Name</th>
                                    <th>Bird ID</th>
                                    <th>Specie</th>
                                    <th>Type</th>
                                    <th>Gender</th>
                                    <th>Quality</th>
                                    <th>Payment</th>
                                    <th style="width:180px">Dates</th>
                                    <th>Action</th>
                                    <th style="width:80px">Action</th>
                                </tr>
                            </thead>
                            <div class="tbody">
                                <?php get_tested_samples(); ?>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>

</div>

</div>