/* Data-Table */
$(function () {
	$('#data-table').DataTable({
	  'paging'      : true,
	  'lengthChange': false,
	  'pageLength'  : 15,
	  'searching'   : true,
	  'ordering'    : true,
	  'info'        : true,
	  'autoWidth'   : false
	})
})