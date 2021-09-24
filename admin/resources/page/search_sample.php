<?php $submiter = "";?>
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

<div class="pdf-wrapper">
        <div class="pdf-wrapper-inner">
            <div class="table-outer-most">
                <div class="table-outer">
                    <table>
                        <tbody>
                            <tr class="noborder logo-row">
                                <td colspan="4">
                                    <img src="../assets/images/logo.png" alt="">
                                </td>
                                <td colspan="4" class="align-center">
                                    <span class="text-top">QUALITY DNA LAB</span>
                                    <br>
                                    <span class="text-bottom">Research, Accuracy, Sensitivity</span>
                                </td>
                            </tr>
                            <tr class="noborder submiter">
                                <td colspan="8"><span>SUBMITTER’s INFORMATION</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr class="noborder-f">
                                <td colspan="2"><b>Owner’s Name:</b></td>
                                <td colspan="1">IMRAN BAIG</td>
                                <td colspan="3"></td>
                                <td colspan="1"><b>Receipt Date</b></td>
                                <td colspan="1">12-Sep-21</td>
                            </tr>
                            <tr class="noborder-f pad-f">
                                <td colspan="2"><b>Contact No.</b></td>
                                <td colspan="1">03214584644</td>
                                <td colspan="3"></td>
                                <td colspan="1"><b>Report Date</b></td>
                                <td colspan="1">12-Sep-21</td>
                            </tr>
                            <tr class="noborder dna-report">
                                <td colspan="8">
                                    QUALITY DNA Sexing Report
                                </td>
                            </tr>
                            <tr class="sample-row heading">
                                <td>Sr#</td>
                                <td colspan="2">Specie</td>
                                <td colspan="2">Bird's Name / ID</td>
                                <td>Sample Type</td>
                                <td>DNA-ID</td>
                                <td>DNA Result</td>
                            </tr>
                            <?php echo $samples;?>
                            <tr class="sample-row">
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="sample-row">
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="sample-row">
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="bottom-text">
                        Ali Birds Shop, Chaudhary Canal Birds Market, Fateh Garh Lahore.
                        <br>
                        0322-8432745, 0324-4667726
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>