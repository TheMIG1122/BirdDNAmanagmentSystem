<?php require_once '../../../resources/config.php';

$bird_id = $_GET['bird_id'];

echo intval(count_row('dna_samples'," WHERE bird_id='{$bird_id}'"));

// valdate_birdID($bird_id);