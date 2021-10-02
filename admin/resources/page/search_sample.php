<?php $submiter = "";?>
<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title">Search Samples</h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">All</li>
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
                                        <input type="text" class="form-control bird-id-val-t" placeholder="ID" aria-label="Recipient's username" aria-describedby="basic-addon2" value="<?php echo (isset($_POST['dna'])) ? $_POST['dna'] : '' ; ?>" name="dna">
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
                        <p><?php echo get_owner_details_search(); ?><br><?php echo get_total_bar_search();?></p>
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
                                        <th>DNA ID</th>
                                        <th>BirdID</th>
                                        <th>Specie</th>
                                        <th>Sample Type</th>
                                        <th>Gender Result</th>
                                        <th>Quality</th>
                                        <th>Dates</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <div class="tbody">
                                    <?php $samples = get_search_samples(); ?>
                                </div>
                            </table>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
  </div>
</div>

</div>

</div>