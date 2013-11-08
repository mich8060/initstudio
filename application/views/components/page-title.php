<?
	if(isset($copy['date'])){
		$date = $copy['date'];
		list($year, $month, $day) = explode('-', $date);
		$date = date("F, d Y", mktime(0, 0, 0, $month, $day, $year));
	}


?>
<section class="page-title">
	<div class="container container_12">
		<div class="grid_12">
				<h1><? echo $copy['title']; ?></h1>
				<h6 class="lead">
					By Michael Stevens
					<?
						if(isset($copy['date'])){
							echo ", ".$date;
						}
					?>
				</h6>
		</div> 
	</div>	
	<div class="clear"></div>
</section>