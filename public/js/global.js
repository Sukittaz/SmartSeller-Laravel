/* Data-Table */
$(function () {
	$('#data-table').DataTable({
	    "oLanguage": {
	    "sLengthMenu": "Mostrar _MENU_ registros por página",
	    "sZeroRecords": "Nenhum registro encontrado",
	    "sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
	    "sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
	    "sInfoFiltered": "(filtrado de _MAX_ registros)",
	    "sSearch": "Pesquisar: ",
		    "oPaginate": {
		        "sFirst": "Início",
		        "sPrevious": "Anterior",
		        "sNext": "Próximo",
		        "sLast": "Último"
		    }
	   },
	  'paging'      : true,
	  'lengthChange': true,
	  'pageLength'  : 20,
	  'searching'   : true,
	  'ordering'    : true,
	  'info'        : true,
	  'autoWidth'   : true
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