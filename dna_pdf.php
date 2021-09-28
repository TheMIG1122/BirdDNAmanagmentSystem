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
</head>
<body>
    <div class="pdf-wrapper" id="pdf" style="width: 1100px;height: auto;color: #000 !important;transform: scale(0.8);">
        <div class="pdf-wrapper-inner">
            <div class="table-outer-most">
                <div class="table-outer" id="table-outer" style="margin:80px;border: 2px solid;overflow: hidden;margin-top: 0;">
                    <table style="width: 940px;border-spacing: 0px;">
                        <tbody>
                            <tr class="noborder logo-row" style="background-color: #f2bf11;padding: 20px;">
                                <td colspan="3" style="padding: 20px;border: 0;border-bottom: 2px solid;width: 200px;">
                                    <img src="assets/images/logo.png" alt="" style="background-color: #fff;width: 100%;">
                                </td>
                                <td colspan="4" class="align-center" style="padding: 20px;text-align: center;border: 0;border-bottom: 2px solid;">
                                    <span class="text-top" style="font-size: 35px;">QUALITY DNA LAB</span>
                                    <br>
                                    <span class="text-bottom" style="font-size: 18px;font-family: sans-serif;">Research, Accuracy, Sensitivity</span>
                                </td>
                            </tr>
                            <tr class="noborder submiter" style="background-color: #ccfdcc;font-size: 16px;font-family: sans-serif;font-weight: 600;text-align: center;">
                                <td colspan="7" style="padding: 0;border: 0;border-bottom: 2px solid;"><span style="padding: 10px;display: block;">SUBMITTER’s INFORMATION</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 940px;border-spacing: 0px;">
                        <tbody>
                            <tr class="noborder-f pad-f">
                                <td colspan="2" style="padding: 5px;text-align: left;"><b>Owner’s Name:</b></td>
                                <td colspan="1" style="padding: 5px;text-align: left;"><?php echo $owner_name; ?></td>
                                <td colspan="3" style="padding: 5px;text-align: left;"></td>
                                <td colspan="2" style="padding: 5px;text-align: left;"><b>Contact Info</b></td>
                                <td colspan="1" style="padding: 5px;text-align: left;"><?php echo $owner_phone; ?></td>
                            </tr>
                            <tr class="noborder dna-report" style="background: #67ccfe;text-align: center;font-size: 18px;font-weight: 600;">
                                <td colspan="9" style="padding: 10px;border: 0;border-bottom: 2px solid;border-top: 2px solid;">
                                    QUALITY DNA Sexing Report
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 940px;border-spacing: 0px;">
                        <tbody>
                            <tr class="sample-row heading" style="background: #ccfecc;font-weight: 600;text-align: center;font-family: sans-serif;">
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;width: 40px;border-bottom: 2px solid;">Sr#</td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;border-bottom: 2px solid;">Specie</td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;border-bottom: 2px solid;">Bird's Name / ID</td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border-bottom: 2px solid;">DNA-ID</td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border-bottom: 2px solid;">DNA Result</td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border-bottom: 2px solid;">Recieved Date</td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border: 0;border-bottom: 2px solid;">Reported Date</td>
                            </tr>
                            <?php echo get_samples_pdf();?>
                            
                            <tr class="sample-row">
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                            <tr class="sample-row">
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                            <tr class="sample-row">
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                            <tr class="sample-row">
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                            <tr class="sample-row">
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                            <tr class="sample-row">
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                            <tr class="sample-row">
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                            <tr class="sample-row">
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                            <tr class="sample-row">
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                            <tr class="sample-row">
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="bottom-text" style="padding: 25px 10px;text-align: center;border-top: 2px solid;margin: 0;font-size: 15px;font-weight: 600;font-family: sans-serif;">
                        Ali Birds Shop, Chaudhary Canal Birds Market, Fateh Garh Lahore.
                        <br>
                        0322-8432745, 0324-4667726
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/html2canvas/html2canvas.js"></script>
    <script src="assets/libs/jspdf/jspdf.min.js"></script>
<script>
function genPDF() {
    html2canvas($('#pdf'), {
        onrendered: function(canvas) {
            var img = canvas.toDataURL("image/png");
            var doc = new jsPDF();
            doc.addImage(img, 'JPEG', 10, 10, 232, 0);
            // doc.addImage(img, 'JPEG', 10, 10, 199, 300);
            doc.save('test.pdf');
        }
    });
}

$(document).ready(function() {
    genPDF();
});
</script>
</body>
</html>