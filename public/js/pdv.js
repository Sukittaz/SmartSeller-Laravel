$(document).ready(function(){

    generateOrderValue();
    var commnand = 1;

	$('input[name=ProductCode]').on('blur', function(){

	    var quantit = $(this).attr("quantit");

	    if($(this).val()){
            $.ajax({
                url:'/api/v1/products/' + $(this).val(),
                type:'GET',
                dataType:'json',
                success:function(json){

                    var lineValue = quantit * parseFloat(json.ProductPrice);
                    var producValue = parseFloat(json.ProductPrice);

                    var lineProduct = '<tr count="' + json.ProductID + '" value="' + lineValue + '">';
                    lineProduct += '<td>' + json.ProductID + '</td>';
                    lineProduct += '<td>' + json.ProductName + '</td>';
                    lineProduct += '<td>' + quantit + '</td>';
                    lineProduct += '<td>' + producValue.toFixed(2) + '</td>';
                    lineProduct += '<td>' + lineValue.toFixed(2) + '</td>';
                    lineProduct += '</tr>';

                    $(".products-list-table tbody").append(lineProduct);
                    $(".row-two").text(json.ProductName);

                    generateOrderValue();
                }
            });
        }
	});

    $( document ).keydown(function( event ) {
    	if(commnand == 1){

    		commnand = 0;
            event.preventDefault();

            var keyCode = event.keyCode || event.which;

            switch (keyCode){
                case 112:
                    $('#modal-costumer').modal('show');
                    break
                case 113:
                    $('#modal-product').modal('show');
                    break
            }
        }
    });

	$(".close").on("click", function () {
		commnand = 1;
    });
});

function generateOrderValue(){

	var orderValue = 0.00;

    $(".products-list-table tbody tr").each(function(){
        orderValue += parseFloat($(this).attr("value"));
	});

    $(".sale-price p span").text(orderValue.toFixed(2))
}
