<div class="responsive-type-generator">
	<? 
		$data['copy'] = array(
			'title' => 'Responsive Type Generator', 
			'summary' => 'Explorations in Typography'
		);
		$this->load->view('components/page-title', $data); 
	?>
	<div class="container container_12">
		<div class="grid_12">
			<p>
				<strong>Base Font Size</strong>
				<input type="text" placeholder="Size" size="4" maxlength="2" class="base-font" />
				<select name="units">
					<option value="0">px</option>
					<option value="1">em</option>
					<option value="2">pt</option>
					<option value="3">%</option>
				</select>
			</p>
		</div>
		<div class="clear"></div>
	</div>
	<div class="type-sample">
		<div class="vertical-rythm"></div>
		<div class="container container_12">
			<div class="grid_12">
				<div><strong>Min Line Height:</strong> <span class="data-line-min"></span></div>
				<div><strong>Max Line Height:</strong> <span class="data-line-max"></span></div>
				<h1 class="data">Headline 1</h1>
				<h2 class="data">Headline 2</h2>
				<h3 class="data">Headline 3</h3>
				<h4 class="data">Headline 4</h4>
				<h5 class="data">Headline 5</h5>
				<h6 class="data">Headline 6</h6>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>