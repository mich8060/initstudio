<? foreach($read as $r) { ?>
<? 
	$data['copy'] = array(
		'title' => $r->title, 
		'date' => $r->date
	);
	$this->load->view('components/page-title', $data); 
?>
<section class="blog-posting">
	<div class="container container_12">
		<div class="grid_12 paragraph-1">
			<? echo $r->post; ?>
		</div>	
		<div class="clear"></div>
		<div class="grid_12 paragraph-1">
			<div class="recent-posts">
			<? foreach($recent as $r) { ?>
				<div class="recent">
					<div><a href="<? echo base_url().$r->url; ?>"><? echo $r->title; ?></a></div>
					<div class="mouse"><? echo date('l, F d, Y', strtotime($r->date)); ?></div>
				</div>
			<? } ?>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>

	<? } ?>
