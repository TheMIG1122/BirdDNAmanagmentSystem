<?php require_once 'resources/config.php' ;

$owner_id = $_GET['owner_id'];
$owner = get_record( 'owners',"WHERE id = {$owner_id}" );
extract($owner);
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
    <div class="pdf-wrapper" id="pdf" style="font-family:sans-serif !important;width: 1100px;height: auto;color: #000 !important;transform: scale(.8);transform-origin: top left;">
        <div class="pdf-wrapper-inner">
            <div class="table-outer-most">
                <div class="table-outer" id="table-outer" style="font-family:sans-serif !important;margin:80px;border: 2px solid;overflow: hidden;margin-top: 0;font-weight: 700 !important;">
                    <table style="font-family:sans-serif !important; width: 940px;border-spacing: 0px;">
                        <tbody>
                            <tr class="noborder logo-row" style="font-family:sans-serif !important; background-color: #f2bf11;padding: 20px;">
                                <td colspan="3" style="font-family:sans-serif !important; padding: 20px;border: 0;border-bottom: 2px solid;width: 200px;">
                                    <img src="assets/images/logo.png" alt="" style="font-family:sans-serif !important;background: #fff;width: 60%;">
                                </td>
                                <td colspan="4" class="align-center" style="font-family:sans-serif !important; padding: 20px;text-align: center;border: 0;border-bottom: 2px solid;">
                                    <span class="text-top" style="font-family:sans-serif !important; font-size: 35px;">QUALITY DNA LAB</span>
                                    <br>
                                    <span class="text-bottom" style="font-family:sans-serif !important; font-size: 18px;font-family: sans-serif;">Research, Accuracy, Sensitivity</span>
                                </td>
                            </tr>
                            <tr class="noborder submiter" style="font-family:sans-serif !important; background-color: #ccfdcc;font-size: 16px;font-family: sans-serif;font-weight: 600;text-align: center;">
                                <td colspan="7" style="font-family:sans-serif !important; padding: 0;border: 0;border-bottom: 2px solid;"><span style="font-family:sans-serif !important; padding: 10px;display: block;">SUBMITTER’s INFORMATION</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="font-family:sans-serif !important; width: 940px;border-spacing: 0px;">
                        <tbody>
                            <tr class="noborder-f pad-f">
                                <td colspan="2" style="font-family:sans-serif !important; padding: 5px;text-align: left;"><b>Owner’s Name:</b></td>
                                <td colspan="1" style="font-family:sans-serif !important; padding: 5px;text-align: left;"><?php echo $owner_name; ?></td>
                                <td colspan="3" style="font-family:sans-serif !important; padding: 5px;text-align: left;"></td>
                                <td colspan="2" style="font-family:sans-serif !important; padding: 5px;text-align: left;"><b>Contact Info</b></td>
                                <td colspan="1" style="font-family:sans-serif !important; padding: 5px;text-align: left;"><?php echo $owner_phone; ?></td>
                            </tr>
                            <tr class="noborder-f pad-f">
                                <td colspan="2" style="font-family:sans-serif !important; padding: 5px;text-align: left;"><b>Lab No :</b></td>
                                <td colspan="1" style="font-family:sans-serif !important; padding: 5px;text-align: left;"><?php echo $var['global']['lab_no']; ?></td>
                                <td colspan="3" style="font-family:sans-serif !important; padding: 5px;text-align: left;"></td>
                                <td colspan="2" style="font-family:sans-serif !important; padding: 5px;text-align: left;"></td>
                                <td colspan="1" style="font-family:sans-serif !important; padding: 5px;text-align: left;"></td>
                            </tr>
                            <tr class="noborder dna-report" style="font-family:sans-serif !important;/* background: #67ccfe; */text-align: center;font-size: 18px;font-weight: 600;">
                                <td colspan="9" style="font-family:sans-serif !important;/* padding: 10px; */border: 0;/* border-bottom: 2px solid; *//* border-top: 2px solid; */">
                                    <p class="bottom-text" style="font-family:sans-serif !important;padding: 25px 10px;text-align: center;border-top: 2px solid;margin: 0;font-size: 18px;font-weight: 600;font-family: sans-serif;">
                                        Ali Birds Shop, Chaudhary Canal Birds Market, Fateh Garh Lahore.
                                        <br>
                                        0322-8432745, 0324-4667726
                                    </p>
                                </td>
                            </tr>
                            <tr class="noborder dna-report" style="font-family:sans-serif !important; background: #67ccfe;text-align: center;font-size: 18px;font-weight: 600;">
                                <td colspan="9" style="font-family:sans-serif !important; padding: 10px;border: 0;border-bottom: 2px solid;border-top: 2px solid;">
                                    QUALITY DNA Sexing Report
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="font-family:sans-serif !important; width: 940px;border-spacing: 0px;">
                        <tbody>
                            <tr class="sample-row heading" style="font-family:sans-serif !important; background: #ccfecc;font-weight: 600;text-align: center;font-family: sans-serif;">
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;width: 40px;border-bottom: 2px solid;">Sr#</td>
                                <td colspan="2" style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;border-bottom: 2px solid;">Specie</td>
                                <td colspan="2" style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;border-bottom: 2px solid;">Bird's Name / ID</td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;border-bottom: 2px solid;">DNA-ID</td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;border-bottom: 2px solid;">DNA Result</td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;border-bottom: 2px solid;">Recieved Date</td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;border: 0;border-bottom: 2px solid;">Reported Date</td>
                            </tr>
                            <?php echo get_samples_pdf();?>
                            
                            <tr class="sample-row">
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                            <tr class="sample-row">
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                            <tr class="sample-row">
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                            <tr class="sample-row">
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;width: 40px;"></td>
                                <td colspan="2" style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td colspan="2" style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;"></td>
                                <td style="font-family:sans-serif !important; padding: 10px;height: 30px;border-right: 2px solid;border: 0;"></td>
                            </tr>
                        </tbody>
                    </table>
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
            doc.save('<?php echo $owner_name; ?> (<?php echo time() ?>).pdf');
        }
    });
    // html2pdf();
    // html2canvas($('#pdf'), {
    //     onrendered: function(canvas) {
    //         var img = canvas.toDataURL("image/png");
    //         var doc = new jsPDF('p', 'pt', 'a4');
    //         doc.addHTML(img);
    //         doc.addImage(img, 'JPEG', 10, 10, 199, 300);
    //         doc.save('<?php echo $owner_name; ?> (<?php echo time() ?>).pdf');
    //     }
    // });
    // var pdf = new jsPDF('p', 'pt', 'a4');
    // var options = {
    //         pagesplit: true
    //     };

    // pdf.addHTML($("#pdf"), options, function()
    // {
    //     pdf.save("test.pdf");
    // });
///-------------------
    // html2canvas($('#pdf'), {
    //     height: 2480,
    //     height: 3508
    //   }).then((canvas) => {
    //     let imgWidth = 800;
    //     let pageHeight = 1200;
    //     let imgHeight =
    //       ((canvas.height * imgWidth) / 2454)*1.24;
    //     var heightLeft = imgHeight;

    //     const imgData = canvas.toDataURL("image/png");

    //     const pdf = new jsPDF({
    //       orientation: "p",
    //       unit: "mm",
    //     //   format: [400, 480],
    //     });

    //     let position = 0;
    //     // pdf.setFillColor(248);
    //     // pdf.rect(0, 0, 400, 480, "F");
    //     // pdf.addImage(imgData, "JPEG", 0, 0, 400, 400);
    //     // pdf.setFontSize(35);
    //     // pdf.text('SMRF 360', 10, 420);
    //     // pdf.setFontSize(15);
    //     // pdf.text(`Feedback report`, 10, 433)
    //     // pdf.text('March 2021', 10, 440)
    //     // pdf.addPage();
    //     // alert(imgWidth)
    //     pdf.addImage(imgData, "PNG",0, position, 199, 300);
    //     heightLeft -= pageHeight;

    //     while (heightLeft >= 0) {
    //       position = heightLeft - imgHeight;
    //       pdf.addPage();
    //       pdf.addImage(imgData, "PNG",0, position, 199, 300);
    //       heightLeft -= pageHeight;
    //     }
    //     pdf.save("Result.pdf");
    //   });
}

$(document).ready(function() {
    genPDF();
});
</script>
</body>
</html>