<?php session_start();
ob_start();
defined('DB_HOST') ? null : define('DB_HOST', 'localhost');

// Helper Veriables
defined('base_url') ? null : define('base_url', 'http://localhost/10.100.1/September%202021/Github/BirdDNAmanagmentSystem/' );

// defined('DB_USER') ? null : define('DB_USER','qualitydnalabcom_qualitydnalab' );
// defined('DB_PASS') ? null : define('DB_PASS', '$1]L@X_]}(zm' );
// defined('DB_NAME') ? null : define('DB_NAME', 'qualitydnalabcom_qualitydnalab' );

// Local
defined('DB_USER') ? null : define('DB_USER','root' );
defined('DB_PASS') ? null : define('DB_PASS', '' );
defined('DB_NAME') ? null : define('DB_NAME', 'qualitydnalabcom_qualitydnalab' );


$connection = mysqli_connect(DB_HOST , DB_USER , DB_PASS , DB_NAME);
$query = mysqli_query($connection,'SELECT * FROM `settings` WHERE id = 1');
extract(mysqli_fetch_array($query));

$var = array(
    "add_sample" => array(
        'quality_amount' => array($quality_a,$quality_b),
        'quality_text' => array('A','B')
    ),
    "global" => array(
        "mode" => "test",
        "lab_no" => $lab_no,
        "table_id" => "#table"
    )
);

require_once('functions.php');

?>