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
	foreach($data as $index => $value) {
		$string .= $index."='".$value."',";
	}
	$string = substr($string,0,-1);
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
	if ( $gender == "Male" ) {
		$div = '<span class="gender-result male"><i class="flaticon-mars"></i> Male</span>';
	} else if ( $gender == "Fe-Male" ) {
		$div = '<span class="gender-result female"><i class="flaticon-female"></i> Fe-Male</span>';
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
		
		if ( check_field('owners','phone',$phone) ) {
			$data = array (
				'name'=> $name,
				'phone'=> $phone
			);

			$owner_id = insert_data_return('owners',$data);
		} else {
			$owner_id = select_field('owners','phone',$phone,'id');
		}
		
		$data = array (
			'owner_id' => $owner_id,
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
				'quality' => $quality[$i],
				'owner_id' => $owner_id,
				'dna_id' => $dna_id
			);
			insert_data('samples',$data);
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
		);
		update_data('samples',$data,'id = '.$id);
		sweetalert('success','Sample result added successfuly.','index.php?page=pending_sample');
	}
}

function get_pending_samples()
{
	global $var;
	$sql = "SELECT * FROM samples WHERE status = 0";
	$query = query($sql);
	confirm($query);
	$sr = 1;
	while ( $data = fetch_array($query) ) {
		extract($data);
		$owner = get_record( 'owners',"WHERE id = {$owner_id}" );
		extract($owner);
		// print_r($var);
		$row = <<<DELIMETER
		<tr>
			<td>{$sr}</td>
			<td>{$bird_id}</td>
			<td>{$specie}</td>
			<td>{$type}</td>
			<td><b>{$var['add_sample']['quality_text'][$quality]}</b> ({$var['add_sample']['quality_amount'][$quality]} Rs)</td>
			<td class="text-center">
				<a href="#" class="btn-sm btn-info border-0 show-owner-detail" data-name="{$name}" data-phone="{$phone}">Owner Detail</a> 
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
	$sql = "SELECT * FROM samples WHERE status =  1";
	$query = query($sql);
	confirm($query);
	$sr = 1;
	while ( $data = fetch_array($query) ) {
		extract($data);
		$owner = get_record( 'owners',"WHERE id = {$owner_id}" );
		extract($owner);
		$result = create_gender_div($result);
		$row = <<<DELIMETER
		<tr>
			<td>{$sr}</td>
			<td>{$bird_id}</td>
			<td>{$specie}</td>
			<td>{$type}</td>
			<td>{$result}</td>
			<td><b>{$var['add_sample']['quality_text'][$quality]}</b> ({$var['add_sample']['quality_amount'][$quality]} Rs)</td>
			<td class="text-center">
				<a href="#" class="btn-sm btn-info mt-1 border-0 show-owner-detail d-block" data-name="{$name}" data-phone="{$phone}">Owner Detail</a>
				<a href="#" class="btn-sm btn-success mt-1 border-0 show-owner-detail d-block" data-name="{$name}" data-phone="{$phone}">Download PDF</a>
				<a href="#" class="btn-sm btn-primary mt-1 border-0 show-owner-detail d-block" data-name="{$name}" data-phone="{$phone}">Print Card</a>

			</td>
		</tr>
		DELIMETER;
		echo $row;
		$sr++;
	}
}