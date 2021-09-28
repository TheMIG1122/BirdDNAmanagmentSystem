<?php require_once 'resources/config.php';
 extract(get_sample_data());
 ?>
<html>
	<head>
		<title>Sample Card</title>
		<style type="text/css">
			body { font-family: Arial; font-size: 20.4px }
			.pos { position: absolute; z-index: 0; left: 0px; top: 0px }
img {
    width: 790px;
    position: absolute;
    top: -28px;
    left: -26px;
}

@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }

	.download-button {
		display: none !important;
	}
}

.download-button {
    color: #fff;
    background-color: #36bea6;
    border-color: #36bea6;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    margin: 20px 10 0;
    display: block;
    width: 100px;
	float:left;
    text-align: center;
    text-decoration: none;
}
		</style>
	</head>
	<body>
		<div id="main" style="position: relative;width: 760px;height: 317px;">
			<nowrap>
				<div class="pos no-print" id="main1" style="top:0">
					<img name="_1100:850" src="assets/images/card/final.png" border="0" usemap="#Map">
				</div>
				<div class="pos" id="_682:76" style="top: 25px;left: 615;">
					<span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
					    <?php echo $id?>
                    </span>
				</div>
				<div class="pos" id="_170:148" style="top: 101px;left: 130px;">
					<span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
                    <?php echo $bird_id?>
                    </span>
				</div>
				<div class="pos" id="_170:174" style="top: 127px;left: 130;">
					<span id="_13.5" style=" font-family:Arial; font-size:13.5px; color:#000000">
                    <?php echo $owner_name?>
                    </span>
				</div>
				<div class="pos" id="_170:200" style="top: 151px;left: 130;">
					<span id="_13.1" style=" font-family:Arial; font-size:13.1px; color:#000000">
                    <?php echo $specie?>
                    </span>
				</div>
				<div class="pos" id="_170:227" style="top: 177px;left: 130;">
					<span id="_13.5" style=" font-family:Arial; font-size:13.5px; color:#000000">
                    <?php echo convert_date($created_at)?>
                    </span>
				</div>
				<div class="pos" id="_447:227" style="top: 172px;left: 385px;">
					<span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
                    <?php echo $type?>
                    </span>
				</div>
				<div class="pos" id="_170:253" style="top: 200px;left: 130;">
					<span id="_13.5" style=" font-family:Arial; font-size:13.5px; color:#000000">
                    <?php echo convert_date($updated_at)?>
                    </span>
				</div>
				<div class="pos" id="_447:253" style="top: 197px;left: 386px;">
					<span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
                    <?php echo $result?>
                    </span>
				</div>
			</nowrap>
</div>
<a href="" download id="download-image" class="download-button">Download</a>
<a href="#" id="print-image" class="download-button">Print</a>
		<script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/html2canvas/html2canvas.js"></script>
    <script src="assets/libs/jspdf/jspdf.min.js"></script>
<script>
function genImg() {
    html2canvas($('#main'), {
        onrendered: function(canvas) {
            var img = canvas.toDataURL("image/png");
			$("#download-image").attr("href",img);
			$("#download-image").trigger('click');
        }
    });
}

$(document).ready(function() {
    genImg();
	$('#print-image').click(function(){
		window.print();
	});
});
</script>
	</body>
</html>
