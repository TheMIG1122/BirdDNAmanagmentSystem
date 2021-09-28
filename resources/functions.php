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
		$div = '<span class="gender-result female"><i class="flaticon-female"></i> Fe-Male</span>';
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
			'discount' => $discount,
			'total' => $total
		);
		$dna_id = insert_data_return('dna',$data);
		$count = count($bird_id);

		for ( $i=0; $i<$count; $i++ ) {
			$data = array (
				'bird_id' => $bird_id[$i],
				'specie' => $specie[$i],
				'type' => $type[$i],
				'dna_id' => $dna_id
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

function get_pending_samples()
{
	global $var;
	$sql = "SELECT * FROM dna_samples WHERE status = 0";
	$query = query($sql);
	confirm($query);
	$sr = 1;
	while ( $data = fetch_array($query) ) {
		extract($data);
		$owner = get_record( 'dna',"WHERE id = {$dna_id}" );
		extract($owner);
		$payment_status = genrate_payment_div($payment_status);
		$quality = "<b>{$var['add_sample']['quality_text'][$owner['quality']]}</b>";
		$received_date = convert_date($data['created_at']);
		$reported_date = convert_date($data['updated_at']);
		$row = <<<DELIMETER
		<tr>
			<td>{$sr}</td>
			<td>{$bird_id}</td>
			<td>{$specie}</td>
			<td>{$type}</td>
			<td>{$payment_status}</td>
			<td><b>Received Date : </b>{$received_date} <br> <b>Reported Date : </b>{$reported_date}</td>
			<td class="text-center">
				<a href="#" class="btn-sm btn-info border-0 show-owner-detail" data-name="{$owner_name}" data-phone="{$owner_phone}" data-quality="{$quality}" data-quantity="{$quantity}" data-payment_status="{$owner['payment_status']}" data-total="{$total}">Owner Detail</a> 
				<a href="#" class="btn-sm btn-success border-0 add-sample-result" data-sampleID="{$data['id']}">Add Result</a>
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
	$sql = "SELECT * FROM dna_samples WHERE status =  1";
	$query = query($sql);
	confirm($query);
	$sr = 1;
	while ( $data = fetch_array($query) ) {
		extract($data);
		$owner = get_record( 'dna',"WHERE id = {$dna_id}" );
		extract($owner);
		$card_btn = "<span class='text-danger'>Pending</span>";
		if ($result != "") {
			$card_btn = '<a href="../dna_card.php?sample_id='.$data['id'].'" target="_blank" class="btn-sm btn-primary mt-1 border-0 d-block">Print Card</a>';
		}
		$result = create_gender_div($result);
		$payment_div = genrate_payment_div($payment_status);

		$row = <<<DELIMETER
		<tr>
			<td>{$sr}</td>
			<td>{$bird_id}</td>
			<td>{$specie}</td>
			<td>{$type}</td>
			<td>{$result}</td>
			<td><b>{$var['add_sample']['quality_text'][$quality]}</b></td>
			<td>{$payment_div}</td>
			<td class="text-center">
			<a href="#" class="btn-sm btn-info border-0 show-owner-detail d-block" data-name="{$owner_name}" data-phone="{$owner_phone}" data-quality="{$var['add_sample']['quality_text'][$quality]}" data-quantity="{$quantity}" data-payment_status="{$payment_status}" data-total="{$total}">Owner Detail</a>
				{$card_btn}
			</td>
		</tr>
		DELIMETER;
		echo $row;
		$sr++;
	}
}


function get_search_samples($search = "")
{
	global $var;
	global $samples;
	echo $samples;
	$samples_div = "";
	$sql = '';
	// $sql .= "SELECT dna.owner_name,dna.owner_phone,dna.quality,dna.extra_amount,dna.id AS dna_id,dna.amount,dna.discount,dna.total,dna_samples.*,dna_samples.id AS sample_id ";
	$sql .= "SELECT * FROM dna ";
	if (isset($_POST['search_sample'])) {
		extract($_POST);
		if ( $type == 'owner' ) {
			$sql .= " WHERE dna.owner_phone = '{$phone}' ";
		} else if($type == 'dna') {
			$sql .= " WHERE dna.id = {$dna} ";
		}
	}

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
			$sample_sql = "SELECT * FROM dna_samples WHERE dna_id = {$id}";
			$sample_query = query($sample_sql);
			confirm($sample_query);
			$temp_count = num_rows($sample_query);
			$rowspan = '';
			if ($_POST['type'] == 'owner' || $_POST['dna']) {
				$rowspan = <<<DELIMETER
				<td rowspan="{$temp_count}">
					<p class='text-left'>
						<b>{$owner_name}</b>
						<br>{$owner_phone}<br>
						<b>Amount</b> : {$amount} Rs <br>
						<b>Extra Amount</b> : {$extra_amount} Rs <br>
						<b>Discount</b> : {$discount} Rs <br>
						<b>Total</b> : {$total} Rs
						<br>
						<a href="{$folder}dna_pdf.php?dna_id={$id}" target="_blank" class="btn btn-success">Download as PDF</a>
					</p>
				</td>
				DELIMETER;
			}
			
			// echo $rowspan;

			$row_count = 1;
			while ($sample = fetch_array($sample_query)) {
				extract($sample);
				$card_btn = "<span class='text-danger'>Pending</span>";
				if ($result != "") {
					$card_btn = '<a href="'.$folder.'dna_card.php?sample_id='.$data['id'].'" target="_blank" class="btn-sm btn-primary mt-1 border-0 d-block" data-phone="'.$owner_phone.'">Print Card</a>';
				}
				if ($result == "") {
					$result = "<span class='text-danger'>Pending</span>";
					$data['result'] = $result;
				} else {
					$result = create_gender_div($result);
				}
				$rowspan = ($row_count == 1) ? $rowspan : '' ;
				$row = <<<DELIMETER
				<tr>
					<td>{$row_count}</td>
					{$rowspan}
					<td>{$bird_id}</td>
					<td>{$specie}</td>
					<td>{$type}</td> 
					<td>{$result}</td>
					<td><b>{$var['add_sample']['quality_text'][$quality]}</b></td>
					<td class="text-center">
						{$card_btn}
					</td>
				</tr>
				DELIMETER;
				echo $row;
				$row_count++;
			}
		}
	} else {
		echo "<tr><td colspan='8'><p class='text-center text-danger'>No Record Found.</p></td><tr/>";
	}
	return $samples_div;
}

// Pending Credit

function pending_credit()
{
	global $var;
	$sql = "SELECT * FROM dna WHERE payment_status =  'Credit'";
	$query = query($sql);
	confirm($query);
	$sr = 1;
	while ( $data = fetch_array($query) ) {
		extract($data);
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
				<a href="#" class="btn-sm btn-success border-0 pay-cash" data-dnaID="{$id}" data-cashAmount="{$total}">Pay Cash</a>
				<a href="index.php?page=dna_detail&dna_id={$id}&cashamount={$total}&quality={$quality}" class="btn-sm btn-info border-0">Deatil</a>
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
	$sql .= "SELECT dna.*,dna_samples.* ";
	$sql .= " FROM dna_samples ";
	$sql .= " JOIN dna ON dna_samples.dna_id=dna.id ";
	$sql .= " WHERE dna_samples.id = ".$sample_id." ";
	$query = query($sql);
	$data = fetch_array($query);
	return $data;
}

function pay_cash()
{
	if (isset($_GET['dna_id'])) {
		$id = $_GET['dna_id'];
		$data = array (
			'payment_status' => 'Cash'
		);
		update_data('dna',$data,'id = '.$id);
		redirect('index.php?page=credit_detail');
	}
}

// DNA Detail

function dna_detail()
{
	global $var;
	$id = $_GET['dna_id'];
	$quality = $_GET['quality'];
	$sql = "SELECT * FROM dna_samples WHERE dna_id =  {$id}";
	$query = query($sql);
	confirm($query);
	$sr = 1;
	while ( $data = fetch_array($query) ) {
		extract($data);
		$date = convert_date($created_at);
		$result = create_gender_div($result);
		$row = <<<DELIMETER
		<tr>
			<td>{$sr}</td>
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
function get_owner_details($dna_id)
{
	$sql = "SELECT * FROM dna WHERE id = {$dna_id}";
	$query = query($sql);
	confirm($query);
	$data = fetch_array($query);
	return "<b> Owner Name: </b> {$data['owner_name']} | <b> Owner Phone : </b> {$data['owner_phone']} | <b> Total Amount : </b> {$data['total']} Rs";
}

// Show DNA For PDF

function get_samples_pdf()
{
	if (isset($_GET['dna_id'])) {
		$sql = "SELECT * FROM dna_samples WHERE dna_id = {$_GET['dna_id']}";
		$query = query($sql);
		confirm($query);
		$sr = 1;
		while ( $data = fetch_array($query) ) {
			extract($data);
			$received_date = convert_date($created_at);
			$reported_date = convert_date($updated_at);
			$result = create_gender_div($result);
			$row = <<<DELIMETER
			<tr class="sample-row">
				<td style="padding: 10px;height: 30px;border-right: 2px solid #000;">{$sr}</td>
				<td style="padding: 10px;height: 30px;border-right: 2px solid #000;width: 40px;">{$specie}</td>
				<td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;">{$bird_id}</td>
				<td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;">{$dna_id}</td>
				<td style="padding: 10px;height: 30px;border-right: 2px solid;">{$result}</td>
				<td style="padding: 10px;height: 30px;border-right: 2px solid;">{$received_date}</td>
				<td style="padding: 10px;height: 30px;border-right: 2px solid;">{$reported_date}</td>
			</tr>
			DELIMETER;
			echo $row;
			$sr++;
		}
	}
}