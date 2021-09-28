<?php pay_cash(); ?>

<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title">Pending Samples</h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Credit Detail</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
  



  <div class="container">
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card p-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Owner Name</th>
                                    <th>Phone Number</th>
                                    <th>Sample Qty</th>
                                    <th>Amount</th>
                                    <th>Received Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                <?php pending_credit(); ?>
                                <!-- <tr>
                                    <td>1</td>
                                    <td>#23A34</td>
                                    <td>Green Fisher</td>
                                    <td>Feather</td>
                                    <td class="text-center">
                                        <a href="#" class="btn-sm btn-info border-0">Owner Detail</a> 
                                        <a href="#" class="btn-sm btn-success border-0">Add Result</a>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>

</div>

</div>