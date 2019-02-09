<h3>Import Penjualan Member</h3>
<hr>
<div class="row">
	<form action="import/store" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<input type="hidden" value="<?= $this->def->get_current('username') ?>" name="username">
			<input type="hidden" value="<?= date('Y-m-d'); ?>" name="tgl">
			<div class="col-md-3">
				<p>Dari</p>
				<input type="text" class="form-control" id="datepicker" placeholder="tanggal" name="dari">
			</div>
			<div class="col-md-3">
				<p>Sampai</p>
				<input type="text" class="form-control" id="datepickers" placeholder="tanggal" name="sampai">
			</div>
			<label for="" class="col-sm-12 control-label">
				File
			</label>
			<div class="col-sm-6">
				<input type="file" name="attach" class="form-control">
			</div>
			<div class="col-md-12">
				<br>
				<input type="submit" class="btn btn-primary" value="Simpan" >
			</div>
		</div>
		
	</form>
</div>


<div class="row">
	<div class="col-md-10">
		<br>
		<?= $keterangan ?>
	</div>
	
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama File</th>
					<th>Download</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($import as $data) { ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $data['file'] ?></td>
					<td><a href="<?= base_url('upload_cabang/'.$data['file']) ?>" class="btn btn-primary"><i class="fa fa-download"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
			
		</table>
	</div>
	
</div>