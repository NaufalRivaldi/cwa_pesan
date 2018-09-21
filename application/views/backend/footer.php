</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/less-1.3.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
	$(function(){
		$(".toggle_trigger").on("click",function(){
			$(".toggle_target").slideToggle();
		});

	});
	$.extend( true, $.fn.dataTable.defaults, {
		"pageLength": 25
	} );
	$(document).ready( function () {
	    $('#myTable').DataTable();
	} );
</script>

<?php if(isset($_GET['kd_member'])) { ?>
<script>
    $(window).on('load',function(){
        $('#memberModal').modal('show');
    });
</script>
<?php } ?>


<script>
$(".modal").on("hidden.bs.modal", function(){
    window.location = "<?= base_url('backend/member') ?>";
});
</script>
</body>
</html>