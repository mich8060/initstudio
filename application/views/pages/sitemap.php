<? 
	$data['copy'] = array(
		'title' => 'Sitemap', 
		'summary' => 'Yeah I have a lot of pages'
	);
	$this->load->view('components/page-title', $data); 
?>
<div class="container">
	<div class="container_12">
		<div class="grid_12">
			<? foreach($read as $r) { ?>

				<div><a href="<? echo base_url().$r->url; ?>"><? echo $r->name; ?></a></div>

			<? } ?>
		</div>	
			<div class="clear"></div>
	</div>
</div>