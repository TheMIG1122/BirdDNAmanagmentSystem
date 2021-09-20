<?php add_sample(); ?>
<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h4 class="page-title">Add New Sample</h4>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Add Sample</li>
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
                    <form action="#" method="POST" class="form-box">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="alert alert-info text-center">Basic Info</h4>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Owner Name" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Owner Phone Number" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Total" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Discount" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <p><b>Total payable amount : </b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span>
                                    <hr>
                                </span>
                                <h4 class="alert alert-info text-center">Sample Info</h4>
                            </div>
                        </div>
                        <div class="add-samples-div p-3" id="add-samples-box">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Bird ID</th>
                                            <th>Bird Specie</th>
                                            <th>Sample Type</th>
                                            <th>Quality</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="add-samples-box">
                                        <tr>
                                            <td>
                                                <input type="text" name="bird_id[]" class="form-control bird-id-val" required placeholder="Bird ID">
                                            </td>
                                            <td>
                                                <input type="text" name="specie[]" class="form-control" required placeholder="Bird Specie">
                                            </td>
                                            <td>
                                                <input type="text" name="type[]" class="form-control" required placeholder="Sample Type">
                                            </td>
                                            <td>
                                                <select name="quality[]" class="form-control" required>
                                                    <option value="" hidden>Select Quality</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button class="btn btn-success border-0" type="button" id="add-sample-rows"><i class="flaticon-plus"></i></button>
                                                <!-- <button class="btn btn-danger border-0" type="button" id="add-sample-rows"><i class="flaticon-garbage"></i></button> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- <div class="single-sample-form-div">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="bird_id[]" class="form-control bird-id-val" required placeholder="Bird ID">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="specie[]" class="form-control" required placeholder="Bird Specie">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="type[]" class="form-control" required placeholder="Sample Type">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select name="quality[]" class="form-control" required>
                                                <option value="" hidden>Select Quality</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="amount[]" class="form-control" required placeholder="Amount">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div class="add-more-btn-div text-center">
                            <button class="btn btn-success border-0" type="button" id="add-sample-rows"><i class="flaticon-plus"></i></button>
                            <hr>
                        </div> -->
                        <div class="add-more-btn-div">
                            <button class="btn btn-info border-0" name="add_sample">Add Sample</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
  </div>
</div>

</div>

</div>