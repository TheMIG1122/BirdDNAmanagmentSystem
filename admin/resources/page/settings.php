<?php update_setting(); extract(get_record('settings'," WHERE id = 1")); ?>
<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title">Settings</h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Settings</li>
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
                    <form action="#" method="POST" class="form-box">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="alert alert-info text-center">Basic Settings</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Quality A Amount</label>
                                    <input type="text" name="quality_a" class="form-control" placeholder="Amount" required value="<?php echo $quality_a; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Quality B Amount</label>
                                    <input type="text" name="quality_b" class="form-control" placeholder="Amount" id="phone-number-value" maxlength="11" required  value="<?php echo $quality_b; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Lab No.</label>
                                    <input type="text" name="lab_no" class="form-control" placeholder="Lab No." id="phone-number-value" maxlength="11" required  value="<?php echo $lab_no; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="add-more-btn-div">
                            <button class="btn btn-info border-0 w-100 btn-lg" id="submit-button" name="update_setting">Update Setting</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
  </div>
</div>

</div>

</div>