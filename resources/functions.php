<?php

function last_id()
{
	global $connection;
	return mysqli_insert_id($connection);
}

function set_message($msg)
{
	if(!empty($msg)) {
		$_SESSION['message'] = $msg;
	} else {
		$msg = "";
	}
}

function set_error_message($msg)
{
	if(!empty($msg)) {
		$_SESSION['error_message'] = $msg;
	} else {
		$msg = "";
	}
}

function display_message()
{
	if(isset($_SESSION['message']))
	{
$message = <<<DELIMETER
<div class="alert alert-success text-center" id="SuccessAlert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <i class="icofont icofont-close-line-circled"></i>
    </button>
    <span id="Success">{$_SESSION['message']}</span>
</div>
DELIMETER;
echo $message;
unset($_SESSION['message']);
	}
}

function display_error_message()
{
	if(isset($_SESSION['error_message']))
	{
$message = <<<DELIMETER
<div class="alert alert-danger text-center" id="SuccessAlert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <i class="icofont icofont-close-line-circled"></i>
    </button>
    <span id="Success">{$_SESSION['error_message']}</span>
</div>
DELIMETER;
echo $message;
unset($_SESSION['error_message']);
	}
}

function redirect($location)
{
	header("Location: {$location}");
}

function query($sql)
{
	global $connection;
	return mysqli_query($connection, $sql);
}

function confirm($result)
{
	global $connection;
	if(!$result)
	{
		die('QUERY FAILED'. mysqli_error($connection));
	}
}

function escape_string($string)
{
	global $connection;
	return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result)
{
	return mysqli_fetch_array($result);
}

function sweetalert($type,$message,$url)
{
	echo "<script> custom_alert('{$type}','{$message}','{$url}'); </script>";
}

function num_rows($result)
{
	return mysqli_num_rows($result);
}

function remove_charecter($string,$index)
{
	return substr($string, 0, -($index));
}

function get_page()
{
	if (isset($_GET['page'])) { 
		$page = $_GET['page'];
		$filename = "resources/page/".$page.".php";
		if (file_exists($filename)) {
			include $filename;
		}
	} else {
		include('resources/page/dashboard.php');
	}
}

function check_field($table,$field,$value)
{
	$sql = "SELECT * FROM {$table} WHERE {$field} = '{$value}'";
	$query = query($sql);
	confirm($query);
	$count = num_rows($query);
	return ($count > 0) ? false : true ;
}

function select_field($table,$field,$value,$select)
{
	$sql = "SELECT {$select} FROM {$table} WHERE {$field} = '{$value}'";
	$query = query($sql);
	confirm($query);
	$data = fetch_array($query);
	return $data[$select];
}

function insert_data_return($table,$data)
{
	$count = count($data);
	$fields = "";
	$values = "";
	foreach($data as $index => $value) {
		$fields .= $index.",";
		$values .= "'".$value."',";
	}
	$fields = substr($fields,0,-1);
	$values = substr($values,0,-1);
	$sql = "INSERT INTO {$table} ( {$fields} ) VALUES ( {$values} )";
	$query = query($sql);
	confirm($query);
	return last_id($query);
}

function insert_data($table,$data)
{
	$count = count($data);
	$fields = "";
	$values = "";
	foreach($data as $index => $value) {
		$fields .= $index.",";
		$values .= "'".$value."',";
	}
	$fields = substr($fields,0,-1);
	$values = substr($values,0,-1);
	$sql = "INSERT INTO {$table} ( {$fields} ) VALUES ( {$values} )";
	$query = query($sql);
	confirm($query);
}

function update_data($table,$data,$where)
{
	$count = count($data);
	$string = "";
	$update = "";
	if (isset($data['updated_at'])) {
		$update = ',updated_at=CURRENT_TIMESTAMP ';
		unset($data['updated_at']);
	}
	foreach($data as $index => $value) {
		$string .= $index."='".$value."',";
	}
	$string = substr($string,0,-1);
	$string .= $update;
	$sql = "UPDATE {$table} SET {$string} WHERE {$where}";
	$query = query($sql);
	confirm($query);
}


function birdID($length = 25) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function create_gender_div($gender)
{
	$div = "";
	if ( $gender == "Male" ) {
		$div = '<span class="gender-result male"><i class="flaticon-mars"></i> Male</span>';
	} else if ( $gender == "Fe-Male" ) {
		$div = '<span class="gender-result female"><i class="flaticon-female"></i> Female</span>';
	} else if ( $gender == "Rejected" ) {
		$div = '<span class="text-danger">Rejected</span>';
	} else {
		$div = '<span class="text-danger">Pending</span>';
	}

	return $div;
}

function genrate_payment_div($payment_status)
{
	$div = "";
	if ( $payment_status == "Cash" ) {
		$div = '<span class="text-success">Paid</span>';
	} else if ( $payment_status == "Credit" ) {
		$div = '<span class="text-danger">Not Paid</span>';
	} else {
		$div = '<span class="text-danger">--</span>';
	}

	return $div;
}

function get_record($table,$where)
{
	$sql = "SELECT * FROM {$table} {$where}";
	$query = query($sql);
	confirm($query);
	$data = fetch_array($query);
	return $data;
}

function convert_date($date)
{
	return date("d-M-Y", strtotime($date));
}

function count_row($table,$where)
{
	$sql = "SELECT id FROM {$table} {$where}";
	$query = query($sql);
	confirm($query);
	return num_rows($query);
}

function count_total($table,$where,$field)
{
	$sql = "SELECT SUM({$field}) AS Total FROM {$table} {$where}";
	$query = query($sql);
	confirm($query);
	$data = fetch_array($query);
	return $data['Total'];
}

function generate_sample_type_dropdown($type="")
{
	$types = ['Feather','Blood'];
	$dropdown = "";
	for ($i=0; $i < count($types); $i++) {
		$selected = ($types[$i] == $type) ? 'selected' : '' ;
		$dropdown .= "<option value='{$types[$i]}' {$selected}>{$types[$i]}</option>";
	}
	return $dropdown;
}

function generate_result_dropdown($result="")
{
	$results = ['Male','Fe-Male','Rejected'];
	$dropdown = "";
	for ($i=0; $i < count($results); $i++) {
		$selected = ($results[$i] == $result) ? 'selected' : '' ;
		$dropdown .= "<option value='{$results[$i]}' {$selected}>{$results[$i]}</option>";
	}
	return $dropdown;
}

function calculate_total_amount($where)
{
	$sql = "SELECT amount,quantity,extra_amount,discount FROM owners {$where}";
	$query = query($sql);
	confirm($query);
	$count = num_rows($query);
	$total = 0;
	if($count > 0) {
		while ($data = fetch_array($query)) {
			extract($data);
			$subTotal = ((intval($quantity)*intval($amount)) + intval($extra_amount)) - intval($discount);
			$total = $subTotal+$total;
		}
	} else {
		$total = 0;
	}

	return $total;
}

function get_total_amount_id($owner_id)
{
	$sql = "SELECT amount,quantity,extra_amount,discount FROM owners {$where}";
	$query = query($sql);
	confirm($query);
	$count = num_rows($query);
	$total = 0;
	if($count > 0) {
		while ($data = fetch_array($query)) {
			extract($data);
			$subTotal = ((intval($quantity)*intval($amount)) + intval($extra_amount)) - intval($discount);
			$total = $subTotal+$total;
		}
	} else {
		$total = 0;
	}

	return $total;
}

function validate_bird_id_search($user,$db)
{
	$user = str_replace("-","",strtolower($user));
	$db = str_replace("-","",strtolower($db));
	$user = str_replace(" ","",$user);
	$db = str_replace(" ","",$db);
	return ($user == $db) ? true : false ;
}
/*

// Admin Functions

*/

function validate_admin_login_page()
{
	if (isset($_SESSION['admin_id'])) {
		redirect("admin");
	}
}


function validate_admin_login()
{
	if (!isset($_SESSION['admin_id'])) {
		redirect("../login.php");
	}
}

function admin_login()
{
	if (isset($_POST['admin_login'])) {
		extract($_POST);
		$password = md5($password);
		$query=query("SELECT * FROM login_details WHERE username='{$username}' AND password='{$password}'");
		confirm($query);
		$num = num_rows($query);
		if ($num == 1 ) {
			$data=fetch_array($query);
			$id = $data["admin_id"];
			extract($data);
			$_SESSION['admin_id'] = $id;
			$_SESSION['username'] = $username;
			redirect("admin/index.php");
		} else {
			set_error_message("Please Enter Correct Information.");
		}
	}
}

// Dashboard Functions

# Add Sample into DB

function add_sample()
{
	if(isset($_POST['add_sample'])) {
		extract($_POST);
		$data = array (
			'owner_name'=> $name,
			'owner_phone'=> $phone,
			'quality'=> $quality,
			'quantity'=> $quantity,
			'payment_status' => $payment_status,
			'amount' => $amount,
			'extra_amount' => $extra_amount,
			'discount' => $discount,
			'total' => $total
		);
		$owner_id = insert_data_return('owners',$data);
		$count = count($bird_id);
		for ( $i=0; $i<$count; $i++ ) {
			$bird_id[$i] = str_replace(" ","-",$bird_id[$i]);
			$data = array (
				'bird_id' => strtoupper($bird_id[$i]),
				'specie' => $specie[$i],
				'type' => $type[$i],
				'owner_id' => $owner_id
			);

			insert_data('dna_samples',$data);
		}

		sweetalert('success','Sample added successfuly.','index.php?page=add_sample');

	}
}

function update_sample_result()
{
	if (isset($_POST['update_sample'])) {
		extract($_POST);
		$data = array (
			'status' => 1,
			'result' => $result,
			'updated_at' => true
		);
		update_data('dna_samples',$data,'id = '.$id);
		sweetalert('success','Sample result added successfuly.','index.php?page=pending_sample');
	}
}

function update_sample()
{
	if (isset($_POST['update_sample'])) {
		extract($_POST);
		$data = array (
			'bird_id' => $bird_id,
			'specie' => $specie,
			'type' => $type
		);

		if ($result != '' && $tested == '') {
			$data['updated_at'] = true;
			$data['status'] = 1;
			$data['result'] = $result;
		} elseif ($tested != '') {
			$data['updated_at'] = true;
			$data['status'] = 1;
			$data['result'] = $result;
		}
		$redirect_url = ($tested != '') ? 'tested_sample' : 'pending_sample' ;
		update_data('dna_samples',$data,'id = '.$dna_id);
		sweetalert('success','Sample updated successfuly.','index.php?page='.$redirect_url);
	}
}

function get_pending_samples()
{
	global $var;
	$sql = "SELECT * FROM dna_samples WHERE status = 0 ORDER BY id DESC";
	$query = query($sql);
	confirm($query);
	$sr = 1;
	while ( $data = fetch_array($query) ) {
		extract($data);
		$owner = get_record( 'owners',"WHERE id = {$owner_id}" );
		extract($owner);
		$payment_status = genrate_payment_div($payment_status);
		$quality = "<b>{$var['add_sample']['quality_text'][$owner['quality']]}</b>";
		$received_date = convert_date($data['created_at']);
		$reported_date = convert_date($data['updated_at']);
		$total_amount = calculate_total_amount(" WHERE id = {$owner_id}");
$row = <<<DELIMETER
<tr>
	<td>{$data['id']}</td>
	<td>{$owner_name}</td>
	<td><b>{$bird_id}</b></td>
	<td>{$specie}</td>
	<td>{$type}</td>
	<td class="text-center">{$quality}</td>
	<td>{$payment_status}</td>
	<td>{$received_date}</td>
	<td class="text-center">
		<a href="index.php?page=edit_sample&dna_id={$data['id']}" class="d-block mt-1 btn-sm btn-primary border-0">Edit</a>
		<a href="#" data-URL="index.php?page=pending_sample&dna_id={$data['id']}&qty={$quantity}&owner_id={$owner['id']}&delete=true" class="d-block mt-1 btn-sm btn-danger border-0 delete-sample">Delete</a>

	</td>
	<td class="text-center">
		<a href="#" class="d-block mt-1 btn-sm btn-info border-0 show-owner-detail" data-name="{$owner_name}" data-phone="{$owner_phone}" data-quality="{$quality}" data-quantity="{$quantity}" data-payment_status="{$owner['payment_status']}" data-total="{$total_amount}" style="display: inline-block;">Customer Detail</a> 
		<a href="#" class="d-block mt-1 btn-sm btn-success border-0 add-sample-result" data-sampleID="{$data['id']}" style="display: inline-block;">Add Result</a>
	</td>
</tr>
DELIMETER;
		echo $row;
		$sr++;
	}
}

function get_tested_samples()
{
	global $var;
	if (isset($_GET['type'])) {
		$sql = "SELECT * FROM dna_samples WHERE result = '{$_GET['type']}' ORDER BY updated_at DESC";
	} else {
		$sql = "SELECT * FROM dna_samples WHERE status =  1 ORDER BY updated_at DESC";
	}
	$query = query($sql);
	confirm($query);
	$sr = 1;
	while ( $data = fetch_array($query) ) {
		extract($data);
		$owner = get_record( 'owners',"WHERE id = {$owner_id}" );
		extract($owner);
		$card_btn = "<span class='text-danger'>Pending</span>";
		if ($result != "") {
			$card_btn = '<a href="../dna_card.php?sample_id='.$data['id'].'" target="_blank" class="btn-sm btn-primary mt-1 border-0 d-block"><i class="icofont icofont-print"></i> Print Card</a>';
		}
		$result = create_gender_div($result);
		$payment_div = genrate_payment_div($payment_status);
		$received_date = convert_date($data['created_at']);
		$reported_date = convert_date($data['updated_at']);
		$dates = "<b>Received Date: </b>".$received_date." <b><br>Reported Date: </b>".$reported_date;
$row = <<<DELIMETER
<tr>
	<td>{$data['id']}</td>
	<td>{$owner_name}</td>
	<td><b>{$bird_id}</b></td>
	<td>{$specie}</td>
	<td>{$type}</td>
	<td>{$result}</td>
	<td class="text-center"><b>{$var['add_sample']['quality_text'][$quality]}</b></td>
	<td>{$payment_div}</td>
	<td>{$dates}</td>
	<td class="text-center">
	<a href="index.php?page=edit_sample&dna_id={$data['id']}&tested=true" class="btn-sm btn-primary border-0 d-block mt-1">Edit</a>
	<a href="#" data-URL="index.php?page=tested_sample&dna_id={$data['id']}&qty={$quantity}&owner_id={$owner['id']}&delete=true" class="d-block mt-1 btn-sm btn-danger border-0 delete-sample">Delete</a>
	</td>

	<td class="text-center">
	<a href="#" class="btn-sm btn-info border-0 show-owner-detail d-block" data-name="{$owner_name}" data-phone="{$owner_phone}" data-quality="{$var['add_sample']['quality_text'][$quality]}" data-quantity="{$quantity}" data-payment_status="{$payment_status}" data-total="{$total}"  style="display: inline-block;">Customer Detail</a>
		{$card_btn}
	
	</td>

</tr>
DELIMETER;
		echo $row;
		$sr++;
	}
}

function get_rejected_samples()
{
	global $var;
	$sql = "SELECT * FROM dna_samples WHERE result = 'Rejected' ORDER BY updated_at DESC";
	$query = query($sql);
	confirm($query);
	$sr = 1;
	while ( $data = fetch_array($query) ) {
		extract($data);
		$owner = get_record( 'owners',"WHERE id = {$owner_id}" );
		extract($owner);
		$result = create_gender_div($result);
		$payment_div = genrate_payment_div($payment_status);
		$received_date = convert_date($data['created_at']);
		$reported_date = convert_date($data['updated_at']);
		$dates = "<b>Received Date: </b>".$received_date." <b><br>Reported Date: </b>".$reported_date;
$row = <<<DELIMETER
<tr>
	<td>{$data['id']}</td>
	<td>{$owner_name}</td>
	<td><b>{$bird_id}</b></td>
	<td>{$specie}</td>
	<td>{$type}</td>
	<td>{$result}</td>
	<td class="text-center"><b>{$var['add_sample']['quality_text'][$quality]}</b></td>
	<td>{$payment_div}</td>
	<td>{$dates}</td>
	<td class="text-center">
		<a href="#" data-URL="index.php?page=rejected_samples&dna_id={$data['id']}&qty={$quantity}&owner_id={$owner['id']}&delete=true" class="d-block mt-1 btn-sm btn-danger border-0 delete-sample">Delete</a>
	</td>

	<td class="text-center">
		<a href="#" class="btn-sm btn-info border-0 show-owner-detail d-block" data-name="{$owner_name}" data-phone="{$owner_phone}" data-quality="{$var['add_sample']['quality_text'][$quality]}" data-quantity="{$quantity}" data-payment_status="{$payment_status}" data-total="{$total}"  style="display: inline-block;">Customer Detail</a>
	</td>

</tr>
DELIMETER;
		echo $row;
		$sr++;
	}
}


function get_search_samples($search = "")
{

	if (isset($_POST['delete_sample'])) {
		if ($_POST['delete_sample'] != "") {
			delete_sample_search();
			unset($_POST['dna_id']);
			unset($_POST['qty']);
			unset($_POST['owner_id']);
			unset($_POST['delete_sample']);
		}
	}
	global $var;
	global $samples;
	$samples_div = "";
	$sql = '';
	$main_count = 0;
	$sr = 1;
	extract($_POST);
	$sql .= "SELECT * FROM owners ";
	$sql .= "WHERE owner_phone = '{$phone}' ORDER BY id DESC";


	$query = query($sql);
	confirm($query);
	$count = num_rows($query);
	$folder = "";
	if ($search == '') {
		$folder = "../";
	}

	$sr = 1;
	if ($count > 0) {
		while ( $data = fetch_array($query) ) {
			extract($data);
			$sample_sql = "SELECT * FROM dna_samples WHERE owner_id = {$id}";

			if($search == 'true' && $payment_status == 'Credit') {
				$pdf_btn = '';
			} else {
				$pdf_btn = '<a href="'.$folder.'dna_pdf.php?owner_id='.$id.'" target="_blank" class="btn btn-success">Download in PDF</a>';
			}

			

			$sample_query = query($sample_sql);
			confirm($sample_query);

			$temp_count = 0;
			$quantity = 0;
			while ($sample = fetch_array($sample_query)) {
				extract($sample);
				$validate = true;
				
				if ($_POST['dna'] != "") {
					$validate = validate_bird_id_search($_POST['dna'],$bird_id);
				}

				if ($validate) {
					$temp_count++;
					$quantity++;
				}
			}

			$amount = intval($amount) * intval($quantity);
			$total = (intval($amount)+intval($extra_amount))-intval($discount); 
			$rowspan = '';
			$rowspan = <<<DELIMETER
			<td rowspan="{$temp_count}">
				<p class='text-left'>
					<b>Amount</b> : {$amount} Rs <br>
					<b>Extra Amount</b> : {$extra_amount} Rs <br>
					<b>Discount</b> : {$discount} Rs <br>
					<b>Total</b> : {$total} Rs
					<br>
					{$pdf_btn}
				</p>
			</td>
			DELIMETER;
			$row_count = 1;

			if ($temp_count > 0) {
				$main_count = 1;
			}

			$sample_query = query($sample_sql);
			confirm($sample_query);

			while ($sample = fetch_array($sample_query)) {
				
				extract($sample);
				$validate = true;

				if ($_POST['dna'] != "") {
					$validate = validate_bird_id_search($_POST['dna'],$bird_id);
				}

				if ($validate) {

					$card_btn = "<span class='text-danger'>N/A</span>";

					if ($result != "") {
						$card_btn = '<a href="'.$folder.'dna_card.php?sample_id='.$sample['id'].'" target="_blank" class="btn-sm btn-primary mt-1 border-0 d-block" data-phone="'.$owner_phone.'">Print Card</a>';
					}

					if ($search == "true") {
						$card_btn = '<a href="'.$folder.'dna_card.php?sample_id='.$sample['id'].'&print=false" target="_blank" class="btn-sm btn-primary mt-1 border-0 d-block" data-phone="'.$owner_phone.'">View Card</a>';
					}

					if ($result == "") {
						$result = "<span class='text-danger'>Pending</span>";
						$data['result'] = $result;
						$card_btn = "<span class='text-danger'>N/A</span>";
					} else {
						$result = create_gender_div($result);
					}
	
					$quality_div = "";
					$delete_btn = "";

					if ($search == "") {
						$quality_div = "<td><b>{$var['add_sample']['quality_text'][$quality]}</b></td>";						
						$delete_btn = "<button class='btn-sm btn-danger mt-1 border-0 d-block delete-sample-search w-100' data-sampleID='".$sample['id']."' data-qty='".$data['quantity']."' data-ownerID='".$data['id']."'>Delete</button>";
					} else {
						if ($data['payment_status'] == 'Credit') {
							$result = "<span class='text-danger'>Payment Pending</span>";
							$card_btn = "<span class='text-danger'>N/A</span>";
						}
					}

					$received_date = convert_date($sample['created_at']);
					$reported_date = convert_date($sample['updated_at']);
					
					if ($sample['result'] == "") {
						$reported_date = "<span class='text-danger'>Pending</span>";
					}
					
					$dates = "<b>Received Date: </b> ".$received_date." <b><br>Reported Date: </b> ".$reported_date;
					$rowspan = ($row_count == 1) ? $rowspan : '' ;
					$row = <<<DELIMETER
					<tr>
						<td>{$sr}</td>
						{$rowspan}
						<td>{$sample['id']}</td>
						<td>{$bird_id}</td>
						<td>{$specie}</td>
						<td>{$type}</td> 
						<td>{$result}</td>
						{$quality_div}
						<td>{$dates}</td>
						<td class="text-center">
							{$card_btn}
							{$delete_btn}
						</td>
					</tr>
					DELIMETER;
					echo $row;
					$row_count++;
					$sr++;
				}
			}
		}
	} else {
		$main_count = 0;
	}

	if ($main_count == 0) {
		echo "<tr><td colspan='8'><p class='text-center text-danger'>No Record Found.</p></td><tr/>";
	}
}

// Pending Credit

function pending_credit()
{
	global $var;
	$sql = "SELECT * FROM owners WHERE payment_status =  'Credit' ORDER BY id DESC";
	$query = query($sql);
	confirm($query);
	$sr = 1;
	while ( $data = fetch_array($query) ) {
		extract($data);
		$total = calculate_total_amount("WHERE id = {$id}");
		$date = convert_date($created_at);
$row = <<<DELIMETER
<tr>
	<td>{$sr}</td>
	<td>{$owner_name}</td>
	<td>{$owner_phone}</td>
	<td>{$quantity}</td>
	<td>{$total} Rs</td>
	<td>{$date}</td>
	<td class="text-center">
		<a href="#"  style="display: inline-block;" class="btn-sm btn-success border-0 pay-cash" data-OwnerID="{$id}" data-cashAmount="{$total}">Pay Cash</a>
		<a target="_blank"  style="display: inline-block;" href="index.php?page=dna_detail&owner_id={$id}&cashamount={$total}&quality={$quality}" class="btn-sm btn-info border-0">Detail</a>
	</td>
</tr>
DELIMETER;
		echo $row;
		$sr++;
	}
}

//  Print Card

function get_sample_data()
{
	$sample_id = $_GET['sample_id'];
	$sql = '';
	$sql .= "SELECT owners.*,dna_samples.* ";
	$sql .= " FROM dna_samples ";
	$sql .= " JOIN owners ON dna_samples.owner_id=owners.id ";
	$sql .= " WHERE dna_samples.id = ".$sample_id." ";
	$query = query($sql);
	$data = fetch_array($query);
	return $data;
}

function pay_cash()
{
	if (isset($_GET['owner_id'])) {
		$id = $_GET['owner_id'];
		$data = array (
			'payment_status' => 'Cash'
		);
		update_data('owners',$data,'id = '.$id);
		redirect('index.php?page=credit_detail');
	}
}

// DNA Detail

function dna_detail()
{
	global $var;
	$id = $_GET['owner_id'];
	$quality = $_GET['quality'];
	$sql = "SELECT * FROM dna_samples WHERE owner_id =  {$id}";
	$query = query($sql);
	confirm($query);
	$sr = 1;
	while ( $data = fetch_array($query) ) {
		extract($data);
		$date = convert_date($created_at);
		$result = create_gender_div($result);
$row = <<<DELIMETER
<tr>
	<td>{$id}</td>
	<td>{$bird_id}</td>
	<td>{$type}</td>
	<td>{$specie}</td>
	<td>{$var['add_sample']['quality_text'][$quality]}</td>
	<td>{$result}</td>
	<td>{$date}</td>
</tr>
DELIMETER;
		echo $row;
		$sr++;
	}
}

// Show Owner Detail
function get_owner_details($owner_id)
{
	$sql = "SELECT * FROM owners WHERE id = {$owner_id}";
	$query = query($sql);
	confirm($query);
	$data = fetch_array($query);
	return "<b> Customer Name: </b> {$data['owner_name']} | <b> Customer Phone : </b> {$data['owner_phone']} | <b> Total Amount : </b> {$data['total']} Rs";
}

// Show DNA For PDF

function get_samples_pdf()
{
	if (isset($_GET['owner_id'])) {
		$sql = "SELECT * FROM dna_samples WHERE owner_id = {$_GET['owner_id']}";
		$query = query($sql);
		confirm($query);
		$count = num_rows($query);
		$sr = 1;
		if ($count > 15) {
			$style = "padding: 0 10px;height: 10px;";
		} else {
			$style = "padding: 10px;height: 30px;";
		}
		while ( $data = fetch_array($query) ) {
			extract($data);
			$received_date = convert_date($created_at);
			$reported_date = convert_date($updated_at);
			$result = create_gender_div($result);
$row = <<<DELIMETER
<tr class="sample-row">
	<td style="{$style}border-right: 2px solid #000;">{$sr}</td>
	<td style="{$style}border-right: 2px solid #000;width: 40px;">{$specie}</td>
	<td colspan="2" style="{$style}border-right: 2px solid;">{$bird_id}</td>
	<td colspan="2" style="{$style}border-right: 2px solid;">{$id}</td>
	<td style="{$style}border-right: 2px solid;">{$result}</td>
	<td style="{$style}border-right: 2px solid;">{$received_date}</td>
	<td style="{$style}border-right: 2px solid;">{$reported_date}</td>
</tr>
DELIMETER;
			echo $row;
			$sr++;
		}
	}
}

function get_total_bar_search() {
	if (isset($_POST['search_sample'])) {
		extract($_POST);
		$sql = "";
		$sql .= "SELECT owners.* FROM owners ";
		$sql .= "WHERE owner_phone = '{$phone}'";

		$query = query($sql);
		confirm($query);
		$count = num_rows($query);
		$Total = 0;
		$tQTY = 0;
		$total_text = '';
		if ($count > 0) {
			while ($data = fetch_array($query)) {
				extract($data);
				$sample_sql = "SELECT bird_id FROM dna_samples WHERE owner_id={$data['id']}";
				$sample_query = query($sample_sql);
				confirm($sample_query);
				$quantity = 0;
				while ($sample_data = fetch_array($sample_query)) {
					extract($sample_data);
					$validate = true;
					if ($_POST['dna'] != "") {
						$validate = validate_bird_id_search($_POST['dna'],$bird_id);;
					}

					if ($validate) {
						$quantity++;
					}
				}
				$subTotal = ((intval($quantity)*intval($amount)) + intval($extra_amount)) - intval($discount);
				$Total = $Total+$subTotal;
				$tQTY = $quantity+$tQTY;
			}
			$total_text =  "<b>Total Amount : </b>{$Total} Rs | <b>Total Samples :</b> {$tQTY}";
		}

		return $total_text;
	}
}

function get_owner_details_search()
{
	if (isset($_POST['search_sample'])) {
		$phone = $_POST['phone'];
		$sql = "SELECT * FROM owners WHERE owner_phone = '{$phone}'";
		$query = query($sql);
		confirm($query);
		$count = num_rows($query);
		$data = fetch_array($query);
		return ($count > 0) ? "<b> Customer Name: </b> {$data['owner_name']} | <b> Customer Phone : </b> {$data['owner_phone']} " : "" ;
	}
}

// Delete Sample

function delete_sample()
{
	if (isset($_GET['delete'])) {
		extract($_GET);
		$records = count_row('dna_samples','WHERE owner_id='.$owner_id.'');
		if ($records > 1) {
			$sql = "DELETE FROM dna_samples WHERE id={$dna_id}";
			$query = query($sql);
			confirm($query);

			$sql1 = "SELECT * FROM owners WHERE id = ".$owner_id."";
			$query1 = query($sql1);
			confirm($query1);
			$data1 = fetch_array($query1);
			$remaining = $data1['total'] - $data1['amount'];
	
			$data = array (
				'quantity' => intval($qty)-1,
				'total' => $remaining
			);
			update_data('owners',$data,'id = '.$owner_id.'');
			sweetalert('success','Sample Deleted successfuly.','index.php?page='.$page);
		} elseif ($records == 1) {
			$sql = "DELETE FROM dna_samples WHERE id={$dna_id}";
			$query = query($sql);
			confirm($query);
			$sql = "DELETE FROM owners WHERE id={$owner_id}";
			$query = query($sql);
			confirm($query);
			sweetalert('success','Sample Deleted successfuly.','index.php?page='.$page);
		}
	}
}

function delete_sample_search()
{
	extract($_POST);
	$records = count_row('dna_samples','WHERE owner_id='.$owner_id.'');
	if ($records > 1) {
		$sql = "DELETE FROM dna_samples WHERE id={$dna_id}";
		$query = query($sql);
		confirm($query);

		$sql1 = "SELECT * FROM owners WHERE id = ".$owner_id."";
		$query1 = query($sql1);
		confirm($query1);
		$data1 = fetch_array($query1);
		$remaining = $data1['total'] - $data1['amount'];

		$data = array (
			'quantity' => intval($qty)-1,
			'total' => $remaining
		);
		update_data('owners',$data,'id = '.$owner_id.'');
	} elseif ($records == 1) {
		$sql = "DELETE FROM dna_samples WHERE id={$dna_id}";
		$query = query($sql);
		confirm($query);
		$sql = "DELETE FROM owners WHERE id={$owner_id}";
		$query = query($sql);
		confirm($query);
	}
}
// function update_data($table,$data,$where)
// {
// 	$count = count($data);
// 	$string = "";
// 	$update = "";
// 	if (isset($data['updated_at'])) {
// 		$update = ',updated_at=CURRENT_TIMESTAMP ';
// 		unset($data['updated_at']);
// 	}
// 	foreach($data as $index => $value) {
// 		$string .= $index."='".$value."',";
// 	}
// 	$string = substr($string,0,-1);
// 	$string .= $update;
// 	$sql = "UPDATE {$table} SET {$string} WHERE {$where}";
// 	$query = query($sql);
// 	confirm($query);
// }

// Update Settings

function update_setting()
{
	if (isset($_POST['update_setting'])) {
		extract($_POST);
		$data = array (
			'quality_a' => $quality_a,
			'quality_b' => $quality_b,
			'lab_no' => $lab_no
		);
		update_data('settings',$data,'id = 1');
	}
}

function validate_sampleID()
{
	extract($_POST);
	$count = count($data);
	$return_data = [];
	for ($i=0; $i<$count; $i++) {
		$sql = "SELECT 	owners.owner_name,dna_samples.bird_id,dna_samples.result,dna_samples.status FROM owners,dna_samples WHERE owners.owner_phone = '{$phone}' AND dna_samples.bird_id = '{$data[$i]['bird_id']}'";
		// echo $sql;
		$query = query($sql);
		confirm($query);
		$row_count = num_rows($query);
		if ($row_count > 0) {
			$sample_data = fetch_array($query);
			extract($sample_data);
			if ($result != 'Rejected') {
				$temp_data = array(
					"class_name" => $data[$i]['class']
				);
				array_push($return_data,$temp_data);
			}
		}
	}
	echo json_encode($return_data);
}

function get_all_owners()
{
	global $var;
	$sql = "SELECT * FROM owners ORDER BY id DESC";
	$query = query($sql);
	confirm($query);
	$sr = 1;
	while ( $data = fetch_array($query) ) {
		extract($data);
		$total = calculate_total_amount("WHERE id = {$id}");
		$date = convert_date($created_at);
$row = <<<DELIMETER
<tr>
	<td>{$owner_name}</td>
	<td>{$owner_phone}</td>
	<td>{$quantity}</td>
	<td>{$total} Rs</td>
	<td>{$date}</td>
	<td class="text-center">
		<a target="_blank"  style="display: inline-block;" href="index.php?page=dna_detail&owner_id={$id}&cashamount={$total}&quality={$quality}&owner=true" class="btn-sm btn-info border-0">Detail</a>
		<a href="#" data-URL="index.php?page=all_owners&owner_id={$id}&delete_confirm=true" class="btn-sm btn-danger delete-button">Delete</a>
	</td>
</tr>
DELIMETER;
		echo $row;
		$sr++;
	}
}


function delete_owner()
{
	if (isset($_GET['delete_confirm'])) {
		extract($_GET);
		$sql = "DELETE FROM dna_samples WHERE owner_id={$owner_id}";
		$query = query($sql);
		confirm($query);

		$sql = "DELETE FROM owners WHERE id={$owner_id}";
		$query = query($sql);
		confirm($query);

		sweetalert('success','Owner Deleted successfuly.','index.php?page='.$page);
	}
}