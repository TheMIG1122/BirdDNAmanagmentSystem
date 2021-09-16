<?php session_start();
ob_start();
defined('DB_HOST') ? null : define('DB_HOST', 'localhost');

defined('DB_USER') ? null : define('DB_USER','root' );
defined('DB_PASS') ? null : define('DB_PASS', '' );
defined('DB_NAME') ? null : define('DB_NAME', 'tech_roar_bird_dna_management' );

$connection = mysqli_connect(DB_HOST , DB_USER , DB_PASS , DB_NAME);

// Helper Veriables
defined('base_url') ? null : define('base_url', 'http://localhost/10.100.1/September%202021/Github/BirdDNAmanagmentSystem/' );

require_once('functions.php');

?>