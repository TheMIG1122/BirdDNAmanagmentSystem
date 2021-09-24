<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title">Tested Samples</h4>
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
            <div class="card p-4">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button class="btn btn-success" style="margin-top:28px" type="button">Download as PDF</button>
                                </div>
                            </div>
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
                                        <th><?php echo ($_POST['type'] == 'owner') ? "User Info" : "Amount" ;?></th>
                                        <th>BirdID</th>
                                        <th>Specie</th>
                                        <th>Sample Type</th>
                                        <th>Gender Result</th>
                                        <th>Quality</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <div class="tbody">
                                    <?php get_search_samples(); ?>
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