$('#searchProduct').on('click', function(){

	var productName = $("input[name=Product]").val();

    $.ajax({
	    url:'ajax/searchProduct',
	    type:'GET',
	    data:{productName:productName},
	    dataType:'json',
	    success:function(json){
			$('.table').css('display','block');
            var html = '';
   
			for(var item in json){
				html += '<tr>';
				html += '<td class="col-md-1" style="text-align: left;">'+json[item].ProductCode+'</td>';
				html += '<td class="col-md-2" style="text-align: left;">'+json[item].ProductName+'</td>';
				html += '<td class="col-md-1" style="text-align: left;">'+json[item].category.CategoryName+'</td>';
				html += '<td class="col-md-1" productid="'+json[item].ProductID+'"><span class="glyphicon glyphicon-ok" style="color: green;" />';
				html += '<tr/>';
			}

			$(".tbody").append(html);
		}
	});
});
