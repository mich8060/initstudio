<div class="browser-support">
	<section class="page-title">
		<div class="container container_12">
			<div class="grid_12">
				<h3 class="lead">Browser Support</h3>
				<h6 class="lead">Quickly export all information about your browser for the developers.</h6>
			</div>
			<div class="clear"></div>
		</div>
	</section>
	<div class="support-details">
		<div class="container container_12">
			<div class="grid_5">
				<strong>Browser</strong>
				<div><? echo $this->agent->browser().' '.$this->agent->version(); ?></div>
			</div>
			<div class="grid_5">
				<strong>Operating System</strong>
				<div>
<? 

	$keywords = explode(" ", $this->agent->agent_string());
	print_r($keywords);
	
?>
				</div>
			</div>
			<div class="grid_2">Side</div>
			<div class="grid_5">
				<strong>Javascript</strong>
				<div class="support-javascript">Disabled</div>
			</div>
			<div class="grid_5">
				<strong>Cookies</strong>
				<div>
					<?
						echo "Enabled";
					
					
					?>
				</div>
			</div>
			<div class="grid_5">
				<strong>Screen Resolution</strong>
				<div class="support-screen"></div>
			</div>
			<div class="grid_5">
				<strong>Browser Resolution</strong>
				<div class="support-browser-resolution"></div>
			</div>
			<div class="grid_5">
				<strong>Retina</strong>
				<div class="support-ratio"></div>
			</div>
			<div class="grid_5">
				<strong>Color Depth</strong>
				<div class="support-color-depth"></div>
			</div>
			<div class="grid_5">
				<strong>Device Type</strong>
				<div><? echo $mobile; ?></div>
			</div>
			<div class="grid_5">
				<strong>IP Address</strong>
				<div><? echo $this->input->ip_address(); ?></div>
			</div>
			<div class="grid_5">
				<strong>Touch Enabled</strong>
				<div class="support-touch">No</div>
			</div>
			<div class="grid_5">
				<strong>Flash Enabled</strong>
				<div class="support-flash"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>