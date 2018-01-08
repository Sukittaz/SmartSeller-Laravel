$(document).ready(function(){

    generateOrderValue();
    var commnand = 1;

	// $('input[name=ProductCode]').on('blur', function(){
	// 	$('#modal-employer').modal('show');
	// });

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

            console.log(keyCode);
        }
    });




    // $('input[name=ProductCode]').on('blur', function(){
    $('input[name=ProductCode]').keydown(function( event ) {

        // if(commnand == 1){
        //
        //     commnand = 0;
        //     event.preventDefault();
        //
        //     var keyCode = event.keyCode || event.which;
        //
        //     switch (keyCode){
        //         case 112:
        //             $('#modal-costumer').modal('show');
        //             break
        //         case 113:
        //             $('#modal-product').modal('show');
        //             break
        //     }
        //
        //     console.log(keyCode);
        // }
    });






	$(".close").on("click", function () {
		commnand = 1;
    });




});

function generateOrderValue(){

	var orderValue = 0.00;

    $(".products-list-table tbody tr").each(function(){

        orderValue += parseFloat($(this).attr("value"));

    	console.log($(this).attr("value"));
	});

    $(".sale-price p span").text(orderValue)
}
