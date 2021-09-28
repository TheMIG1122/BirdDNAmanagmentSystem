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
                    <input type="hidden" name="quantity" id="quantity-val" class="form-control" value="1">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="alert alert-info text-center">Customer Info</h4>
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
                                    <input type="text" name="phone" class="form-control" placeholder="Number" id="phone-number-value" maxlength="11" required title="Please enter 11 digit number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Quality</label>
                                    <select name="quality" class="form-control select_quality" required>
                                        <option value="0">A</option>
                                        <option value="1">B</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Payment Status</label>
                                    <select name="payment_status" class="form-control" required>
                                        <option value="Cash">Cash</option>
                                        <option value="Credit">Credit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Extra Amount</label>
                                    <input type="number" max="50" class="form-control" placeholder="Amount" name='extra_amount' id="extra_amount_value">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Discount (%)</label>
                                    <input type="number" max="50" class="form-control" placeholder="Discount" id="discount_value">
                                </div>
                            </div>
                            <div class="col-12">
                                <p><b>Amount : <span id="amount_div">500</span> Rs </b>
                                <br><b>Extra Amount : <span id="extra_amount_div">0</span> Rs </b>
                                <br><b>Discount amount : <span id="discount_amount">0</span> Rs </b>
                                <br><b>Total payable amount : <span id="total_amount">500</span> Rs </b></p>
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
                                            <th style=""></th>
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
                                                <select name="type[]" class="form-control" required>
                                                    <option value="Feather">Feather</option>
                                                    <option value="Blood">Blood</option>
                                                </select>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <p class="text-center">
                            <button class="btn btn-success border-0 add-sample-rows" type="button" id="add-sample-rows"><i class="flaticon-plus"></i></button>
                        </p>
                        <div class="add-more-btn-div">
                            <button class="btn btn-info border-0 w-100" id="submit-button" name="add_sample">Add Sample</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
  </div>
</div>

</div>

</div>