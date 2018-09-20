<?php if($this->uri->segment(3) == 'create') { ?>
<form action="<?= base_url('backend/karyawan/store') ?>" class="add form-horizontal col-md-6" method="post">
<?php } else { ?>
<form action="<?= base_url('backend/karyawan/update/'.$this->uri->segment(4)) ?>" class="add form-horizontal col-md-6" method="post">
<?php } ?>
		<fieldset>
			<legend>Tambah Karyawan</legend>
			<div class="form-group">
				<label for="usrnm" class="col-md-2 control-label">
					Nama 
				</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required value="<?= $karyawan['nama_lengkap'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="nmm" class="col-md-2 control-label">
					TTL
				</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="ttl" placeholder="contoh : Denpasar, 09-06-1998" required value="<?= $karyawan['ttl'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="nmm" class="col-md-2 control-label">
					Devisi
				</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="devisi" required value="<?= $karyawan['devisi'] ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-10 col-md-offset-2">
					<button type="submit" class="btn btn-primary">
						SAVE
					</button>
				</div>
			</div>
		</fieldset>
	</form>