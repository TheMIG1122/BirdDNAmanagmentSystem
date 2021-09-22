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
                    <input type="hidden" name="amount" id="amount-val" class="form-control">
                    <input type="hidden" name="discount" id="discount-val" class="form-control">
                    <input type="hidden" name="total" id="total-val" class="form-control">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="alert alert-info text-center">Basic Info</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Owner Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Phone Number</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Number" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Discount (%)</label>
                                    <input type="number" min="1" max="50" class="form-control" placeholder="Discount" id="discount_value" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <p><b>Amount : <span id="amount_div">0</span> Rs </b>
                                <br><b>Discount amount : <span id="discount_amount">0</span> Rs </b>
                                <br><b>Total payable amount : <span id="total_amount">0</span> Rs </b></p>
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
                        <div class="add-samples-div p-3" id="add-samples">
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
                                                <select name="quality[]" class="form-control select_quality" required>
                                                    <option value="" hidden>Select Quality</option>
                                                    <option value="0">A</option>
                                                    <option value="1">B</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button class="btn btn-success border-0 add-sample-rows" type="button" id="add-sample-rows"><i class="flaticon-plus"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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