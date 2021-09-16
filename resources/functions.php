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
	header('Location: $location');
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
		
		$count = count($bird_id);
		for ( $i=0; $i<$count; $i++ ) {
			$data = array (
				'bird_id' => $bird_id[$i],
				'specie' => $specie[$i],
				'type' => $type[$i],
				'quality' => $quality[$i],
				'amount' => $amount[$i],
				'owner_id' => $owner_id
			);
			insert_data('dna_samples',$data);
		}

		sweetalert('success','Sample added successfuly.','index.php?page=add_sample');

	}
}

function get_pending_samples()
{
	$sql = "SELECT * FROM dna_samples WHERE status = 0";
	$query = query($sql);
	confirm($query);
	$sr = 1;
	while ( $data = fetch_array($query) ) {
		extract($data);
		$owner = get_record( 'owners',"WHERE id = {$owner_id}" );
		extract($owner);
		$row = <<<DELIMETER
		<tr>
			<td>{$sr}</td>
			<td>{$bird_id}</td>
			<td>{$specie}</td>
			<td>{$type}</td>
			<td>{$quality}</td>
			<td>{$amount}</td>
			<td class="text-center">
				<a href="#" class="btn-sm btn-info border-0 show-owner-detail" data-name="{$name}" data-phone="{$phone}">Owner Detail</a> 
				<a href="#" class="btn-sm btn-success border-0">Add Result</a>
			</td>
		</tr>
		DELIMETER;
		echo $row;
		$sr++;
	}
}

function get_tested_samples()
{
	$sql = "SELECT * FROM dna_samples WHERE status =  1";
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
			<td>{$quality}</td>
			<td>{$amount}</td>
			<td class="text-center">
				<a href="#" class="btn-sm btn-info border-0 show-owner-detail" data-name="{$name}" data-phone="{$phone}">Owner Detail</a> 
			</td>
		</tr>
		DELIMETER;
		echo $row;
		$sr++;
	}
}