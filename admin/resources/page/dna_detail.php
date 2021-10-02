<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title">Credit Detail</h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Detail</li>
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
                    <?php echo get_owner_details($_GET['owner_id']); ?><br>
                    <a href="#" class='btn btn-success border-0 pay-cash mb-3' data-ownerid='<?php echo $_GET['owner_id']?>' data-cashamount='<?php echo $_GET['cashamount']?>'>Pay Cash</a>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>DNA ID</th>
                                    <th>Bird ID</th>
                                    <th>Specie</th>
                                    <th>Sample Type</th>
                                    <th>Quality</th>
                                    <th>DNA Result</th>
                                    <th>Received Date</th>
                                </tr>
                            </thead>
                            <div class="tbody">
                                <?php dna_detail(); ?>
                                <!-- <tr>
                                    <td>1</td>
                                    <td>#23A34</td>
                                    <td>Green Fisher</td>
                                    <td>Feather</td>
                                    <td>
                                        <span class="gender-result male">
                                            <i class="fas fa-mars"></i> Male
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn-sm btn-info border-0">Owner Detail</a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>#23A34</td>
                                    <td>Green Fisher</td>
                                    <td>Feather</td>
                                    <td>
                                        <span class="gender-result female">
                                        <i class="fas fa-venus"></i> Fe-Male
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn-sm btn-info border-0">Owner Detail</a> 
                                    </td>
                                </tr> -->
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