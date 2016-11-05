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


	foreach ($set as $data) {
		if ($data->view_id == $view_id)
		echo "<div class='clearfix'><div class='col-sm-4'><h4> $data->view_title </h4><span> $data->view_date - <i class='glyphicon glyphicon-time'></i> $data->view_dur mins - <i class='glyphicon glyphicon-star'></i> $data->view_rating </span></div><div class='col-sm-8'><p> $data->view_desc</p></div></div>";
	}

	/*
	echo "<script>var sel = document.querySelectorAll('input[value=\"$rating\"]'); sel.setAttribute('checked','')</script>";
	*/

	switch ($rating) {
		case 1:
			$v1 = "checked";
			break;
		case 2:
			$v2 = "checked";
			break;
		case 3:
			$v3 = "checked";
			break;
		case 4:
			$v4 = "checked";
			break;
		case 5:
			$v5 = "checked";
			break;
		case 6:
			$v6 = "checked";
			break;
		case 7:
			$v7 = "checked";
			break;
		case 8:
			$v8 = "checked";
			break;
		case 9:
			$v9 = "checked";
			break;
		case 10:
			$v10 = "checked";
	}

	?>

	<hr/>
	<form method="get" class="text-center">
		<label class="form-check-inline">
			<input class="form-check-input" type="radio" name="r" value="1" onchange="this.form.submit()" <?php echo $v1 ?>> 1&nbsp;
		</label>
		<label class="form-check-inline">
			<input class="form-check-input" type="radio" name="r" value="2" onchange="this.form.submit()" <?php echo $v2 ?>> 2&nbsp;
		</label>
		<label class="form-check-inline">
			<input class="form-check-input" type="radio" name="r" value="3" onchange="this.form.submit()" <?php echo $v3 ?>> 3&nbsp;
		</label>
		<label class="form-check-inline">
			<input class="form-check-input" type="radio" name="r" value="4" onchange="this.form.submit()" <?php echo $v4 ?>> 4&nbsp;
		</label>
		<label class="form-check-inline">
			<input class="form-check-input" type="radio" name="r" value="5" onchange="this.form.submit()" <?php echo $v5 ?>> 5&nbsp;
		</label>
		<label class="form-check-inline">
			<input class="form-check-input" type="radio" name="r" value="6" onchange="this.form.submit()" <?php echo $v6 ?>> 6&nbsp;
		</label>
		<label class="form-check-inline">
			<input class="form-check-input" type="radio" name="r" value="7" onchange="this.form.submit()" <?php echo $v7 ?>> 7&nbsp;
		</label>
		<label class="form-check-inline">
			<input class="form-check-input" type="radio" name="r" value="8" onchange="this.form.submit()" <?php echo $v8 ?>> 8&nbsp;
		</label>
		<label class="form-check-inline">
			<input class="form-check-input" type="radio" name="r" value="9" onchange="this.form.submit()" <?php echo $v9 ?>> 9&nbsp;
		</label>
		<label class="form-check-inline">
			<input class="form-check-input" type="radio" name="r" value="10" onchange="this.form.submit()" <?php echo $v10 ?>> 10&nbsp;
		</label>
	</form>

</div>
