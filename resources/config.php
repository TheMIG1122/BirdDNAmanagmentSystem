<?php session_start();
ob_start();
defined('DB_HOST') ? null : define('DB_HOST', 'localhost');

// Helper Veriables
defined('base_url') ? null : define('base_url', 'http://localhost/10.100.1/September%202021/Github/BirdDNAmanagmentSystem/' );

$var = array(
    "add_sample" => array(
        'quality_amount' => array(500,600),
        'quality_text' => array('A','B')
    ),
    "global" => array(
        "mode" => "test",
        "table_id" => "#table"
    )
);

if ($var['global']['mode'] == "test") {
    defined('DB_USER') ? null : define('DB_USER','root' );
    defined('DB_PASS') ? null : define('DB_PASS', '' );
    defined('DB_NAME') ? null : define('DB_NAME', 'tech_roar_bird_dna_managementv2' );
} else {
    defined('DB_USER') ? null : define('DB_USER','root' );
    defined('DB_PASS') ? null : define('DB_PASS', '' );
    defined('DB_NAME') ? null : define('DB_NAME', 'tech_roar_bird_dna_managementv2' );
}


$connection = mysqli_connect(DB_HOST , DB_USER , DB_PASS , DB_NAME);



require_once('functions.php');

?>