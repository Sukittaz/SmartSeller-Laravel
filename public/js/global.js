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

/* Search CEP CostumerADD */
$('input[name=CostumerCEP]').on('blur', function(){
	var cep = $(this).val();

	$.ajax({
		url:'http://api.postmon.com.br/v1/cep/'+cep,
		type:'GET',
		dataType:'json',
		success:function(json){
			if(typeof json.logradouro != 'undefined') {
				$('input[name=CostumerAddres]').val(json.logradouro);
				$('input[name=CostumerNeigh]').val(json.bairro);
				$('input[name=CostumerUF]').val(json.estado);
				$('input[name=CostumerCity]').val(json.cidade);
				$('input[name=CostumerCountry]').val('Brasil');
				$('input[name=CostumerAddresNumber]').focus();
			}
		}
	});
});