<h3>Update Member</h3>
<p>Last Update : </p>
<form action="<?= base_url('backend/member/importMember') ?>" method="post" enctype="multipart/form-data">
	<input type="file" class="form-control" required name="file_member"> 
	<br>
	<input type="submit" class="btn btn-primary">
</form>
<hr>
<br>
<table class="table table-sm table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>No Member</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telp</th>
			<th>No Kitas</th>
			<th>Registrasi</th>
			<th>Tanggal</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>0002-1001</td>
			<td>Test</td>
			<td>Test</td>
			<td>Test</td>
			<td>Test</td>
			<td>Test</td>
			<td>Test</td>
			
		</tr>
	</tbody>
	
</table>