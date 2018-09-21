<h3><?= $title ?></h3>

<div class="jumbotron">
	<div class="row">
		<div class="col-md-12">
			<p>Update Poin Member</p>
		</div>
	</div>
	<form action="backend/point/generate" method="post">
		<div class="row">
			<div class="col-md-6">
				<input type="text" name="start_date" class="form-control" id="datepicker" placeholder="Start Date" required autocomplete="off">
			</div>
			<div class="col-md-6">
				<input type="text" name="end_date" class="form-control" id="datepickers" placeholder="End Date" required autocomplete="off">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-block btn-primary">Generate!</button>
			</div>
		</div>
	</form>
</div>