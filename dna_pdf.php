<?php require_once 'resources/config.php' ;

$dna_id = $_GET['dna_id'];
$dna = get_record( 'dna',"WHERE id = {$dna_id}" );
extract($dna);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Template</title>
    <link rel="stylesheet" href="assets/css/custom.css">

</head>
<body>
    <div class="pdf-wrapper">
        <div class="pdf-wrapper-inner">
            <div class="table-outer-most">
                <div class="table-outer">
                    <table>
                        <tbody>
                            <tr class="noborder logo-row">
                                <td colspan="3">
                                    <img src="assets/images/logo.png" alt="">
                                </td>
                                <td colspan="4" class="align-center">
                                    <span class="text-top">QUALITY DNA LAB</span>
                                    <br>
                                    <span class="text-bottom">Research, Accuracy, Sensitivity</span>
                                </td>
                            </tr>
                            <tr class="noborder submiter">
                                <td colspan="7"><span>SUBMITTER’s INFORMATION</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr class="noborder-f pad-f">
                                <td colspan="2"><b>Owner’s Name:</b></td>
                                <td colspan="1"><?php echo $owner_name; ?></td>
                                <td colspan="3"></td>
                                <td colspan="2"><b>Contact Info</b></td>
                                <td colspan="1"><?php echo $owner_phone; ?></td>
                            </tr>
                            <tr class="noborder dna-report">
                                <td colspan="9">
                                    QUALITY DNA Sexing Report
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr class="sample-row heading">
                                <td>Sr#</td>
                                <td colspan="2">Specie</td>
                                <td colspan="2">Bird's Name / ID</td>
                                <td>DNA-ID</td>
                                <td>DNA Result</td>
                                <td>Recieved Date</td>
                                <td>Reported Date</td>
                            </tr>
                            <?php echo get_samples_pdf();?>
                            
                            <tr class="sample-row">
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td></td>
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
                                <td></td>
                            </tr>
                            <tr class="sample-row">
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td></td>
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
                                <td></td>
                            </tr>
                            <tr class="sample-row">
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td></td>
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
                                <td></td>
                            </tr>
                            <tr class="sample-row">
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td></td>
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