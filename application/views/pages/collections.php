<section class="collections">
	<div class="container">
		<div class="box-grid">
			<? foreach($read as $r) { ?>
			<div class="grid_4">
				<div class="wrapper">
					<a href="<? echo $r->url; ?>" target="_blank"><img src="img/collections/<? echo $r->image; ?>" alt="<? echo $r->title; ?>" title="" /></a>
				</div>
				<div>
					<? echo $r->title; ?>
				</div>
			</div>
			<? } ?>
			<div class="clear"></div>
		</div>
	</div>
</section>