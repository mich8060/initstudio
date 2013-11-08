<?

	$data['options'] = array(
		'0'		=>		'Pixels',
		'1' 	=>		'Points',
		'2'		=>		'Picas',
		'3' 	=>		'Inches',
		'4' 	=>		'Centimeters',
		'5'		=>		'X-Height',
		'6' 	=>		'Millimeters',
		'7' 	=>		'EM',
		'8'		=>		'REM',
		'9'		=>		'Percent'
	);

?>
<div class="font-converter">
	<div class="container container_12">
		<div class="grid_12">
			<div class="grid_12 product-title">
				<img src="img/layout/font-size-icon.png" />
				<h5>Font Size Converter</h5>
			</div>
			<div class="grid_6 prefix_3">
				<div class="ui-input-selector">
					<div class="ui-input-custom-selector">
						<select class="selector-input">
							<?
								foreach($data['options'] as $key => $value) {
									if($value == "Pixels"){
										echo '<option value="'.$key.'" selected="selected">'.$value.'</option>';
									}else{
										echo '<option value="'.$key.'">'.$value.'</option>';
									}
								}
							?>
						</select>
						<div class="ui-input-custom-value">Pixels</div>
					</div>
					<input type="tel" placeholder="16" maxlength="3" class="ui-input calculator-input" />
				</div>
			</div>
			<div class="grid_6 prefix_3">
				<input type="tel" placeholder="Base Font Size" maxlength="3" class="ui-input calculator-base" />
			</div>
			<div class="grid_6 prefix_3">
				<div class="ui-input-selector">
					<div class="ui-input-custom-selector">
						<select class="selector-output">
							<?
								foreach($data['options'] as $key => $value) {
									if($value == "Points"){
										echo '<option value="'.$key.'" selected="selected">'.$value.'</option>';
									}else{
										echo '<option value="'.$key.'">'.$value.'</option>';
									}
								}
							?>
						</select>
						<div class="ui-input-custom-value">Points</div>
					</div>
					<input type="tel" placeholder="12" maxlength="3" class="ui-input calculator-output" />
				</div>
			</div>
			<div class="clear"></div>
			<pre style="display:none;">
CSS Units: 

in 	- 	Inches 			= 		1in
pt 	- 	Points 			= 		0.013888888in = 1pt
px 	- 	Pixels			=		px = pt * (0.35146/25.4) * 96)
pc 	- 	Picas 			= 		1pt = 0.083333333pc
cm 	- 	Centimeters		= 		1px = 0.026458333cm
ex 	-	X-Height		=		2px = 1ex
mm	-	Millimeters		=		1px = 0.264583333mm
em 	- 	M's 			= 		[# / (Base Size)]em
rem - 	Relative M's    = 		[# / (HTML Base Size)]rem
% 	- 	Percentage		=		([# / (Base Size)] * 100)%

PX
If the decimal value is 0.5 or greater, round up.
If the decimal value is lower than 0.5, round down.
			</pre>
		</div>
		<div class="clear"></div>
	</div>
</div>