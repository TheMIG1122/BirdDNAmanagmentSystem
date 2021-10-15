<?php $sample = get_record("dna_samples","WHERE id={$_GET['dna_id']}"); extract($sample); update_sample(); ?>
<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title">Edit Sample</h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Edit Sample</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
  



  <div class=" ">
    <div class=" ">
        <div class="col-md-12 col-xl-12">
            <div class="card p-2">
                <div class="card-body">
                    <form action="#" method="POST" class="form-box">
                        <input type="hidden" name='dna_id' value="<?php echo $_GET['dna_id']?>">
                        <input type="hidden" name="tested" value="<?php echo (isset($_GET['tested'])) ? 'tested' : ''; ?>">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="alert alert-info text-center">Sample Info</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bird ID</label>
                                    <input type="text" name="bird_id" class="form-control" required value='<?php echo $bird_id;?>'>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Bird Specie</label>
                                    <input type="text" name="specie" class="form-control" required value='<?php echo $specie;?>'>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Sample Type</label>
                                <select name="type" class='form-control'>
                                        <option value="">Select</option>
                                        <?php echo generate_sample_type_dropdown($type) ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Result</label>
                                    <select name="result" class='form-control'>
                                        <option value="">Select</option>
                                        <?php echo generate_result_dropdown($result) ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="add-more-btn-div">
                            <button class="btn btn-info border-0 w-100 btn-lg" id="submit-button" name="update_sample">Update Sample</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
  </div>
</div>

</div>

</div>