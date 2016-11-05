<div class="container">

	<?php

	require "temps/process.inc.php";

	$view_id = $_GET["v_id"];
	$rating = $_GET["r"];


	//+//
	$sql = "SELECT * FROM view";

	$result = $connect->query($sql);

	while ($row = $result->fetch_object()) {
		$set[] = $row;
	}
	//+//


	foreach ($set as $data):
	?>

	<div class="clearfix">
		<?php if($data->has_img): ?>
		<div class="col-sm-2">
			<div style="height:127.5px;width:85.75px;background:url(/assets/img/<?php echo $data->view_id; ?>.jpg) center/cover" title="<?php echo $data->view_title; ?>"></div>
		</div>
		<?php endif; ?>
		<div class="col-sm-4">
			<h4>
				<a href="/view/<?php echo $data->view_id ?>">
					<?php echo $data->view_title ?>
				</a>
			</h4>
			<span>
				<?php echo $data->view_date; ?>
				 &bull; <i class="glyphicon glyphicon-time"></i>
				<?php echo $data->view_dur; ?> mins
				 &bull; <i class="glyphicon glyphicon-star"></i>
				<?php echo $data->view_rating; ?>
			</span>
		</div>
		<div class="col-sm-8">

			<p>
				<?php echo $data->view_desc; ?>
			</p>

		</div>
	</div>
	<hr/>

	<?php endforeach; ?>

</div>
