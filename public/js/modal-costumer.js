$('#searchCostumer').on('click', function(){

	var costumerName = $("input[name=Costumer]").val();

    $.ajax({
	    url:'ajax/searchCostumer',
	    type:'GET',
	    data:{costumerName:costumerName},
	    dataType:'json',
	    success:function(json){
			$('.table').css('display','block');
            var html = '';
   
			for(var item in json){
				html += '<tr>';
				html += '<td class="col-md-11" style="text-align: left;">'+json[item].CostumerName+'</td>';
				html += '<td class="col-md-11" style="text-align: left;">'+json[item].CostumerCPF+'</td>';
				html += '<td class="col-md-1" productid="'+json[item].CostumerID+'"><span class="glyphicon glyphicon-ok" style="color: green;" />';
				html += '<tr/>';
			}

			$(".tbody").append(html);
		}
	});
});
