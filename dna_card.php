<?php require_once 'resources/config.php';
 extract(get_sample_data()); ?>
<html>
	<head>
		<title>Sample Card</title>
		<style type="text/css">
			body { font-family: Arial; font-size: 20.4px }
			.pos { position: absolute; z-index: 0; left: 0px; top: 0px }
		</style>
	</head>
	<body>
		<nobr>
			<nowrap>
				<div class="pos" id="_0:0" style="top:0">
					<img name="_1100:850" src="assets/images/card_page.jpg" height="1100" width="850" border="0" usemap="#Map">
				</div>
				<div class="pos" id="_682:76" style="top:76;left:682">
					<span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
					    <?php echo $dna_id?>
                    </span>
				</div>
				<div class="pos" id="_170:148" style="top:148;left:170">
					<span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
                    <?php echo $bird_id?>
                    </span>
				</div>
				<div class="pos" id="_170:174" style="top:174;left:170">
					<span id="_13.5" style=" font-family:Arial; font-size:13.5px; color:#000000">
                    <?php echo $name?>
                    </span>
				</div>
				<div class="pos" id="_170:200" style="top:200;left:170">
					<span id="_13.1" style=" font-family:Arial; font-size:13.1px; color:#000000">
                    <?php echo $specie?>
                    </span>
				</div>
				<div class="pos" id="_170:227" style="top:227;left:170">
					<span id="_13.5" style=" font-family:Arial; font-size:13.5px; color:#000000">
                    <?php echo convert_date($created_at)?>
                    </span>
				</div>
				<div class="pos" id="_447:227" style="top:227;left:447">
					<span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
                    <?php echo $type?>
                    </span>
				</div>
				<div class="pos" id="_170:253" style="top:253;left:170">
					<span id="_13.5" style=" font-family:Arial; font-size:13.5px; color:#000000">
                    <?php echo convert_date($updated_at)?>
                    </span>
				</div>
				<div class="pos" id="_447:253" style="top:253;left:447">
					<span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
                    <?php echo $result?>
                    </span>
				</div>
			</nowrap>
		</nobr>
	</body>
</html>