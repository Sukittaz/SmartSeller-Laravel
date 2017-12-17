$('#searchEmployer').on('click', function(){
	var employerName = $("input[name=Employer]").val();

    $.ajax({
	    url:'ajax/searchEmployer',
	    type:'GET',
	    data:{employerName:employerName},
	    dataType:'json',
	    success:function(json){
			$('.table').css('display','block');
            var html = '';
   
			for(var item in json){
				html += '<tr>';
				html += '<td class="col-md-12" style="text-align: left;">'+json[item].UserName+'</td>';
				html += '<td class="col-md-1" productid="'+json[item].UserID+'"><span class="glyphicon glyphicon-ok" style="color: green;" />';
				html += '<tr/>';
			}

			$(".tbody").append(html);
		}
	});
});
