$('#addaddress').on('click', function(event){
	event.preventDefault()
	let newaddress=$('.newaddressval').val()
	if(newaddress!=''){
		$.ajax({
            method: 'post',
            url: '../account/php/addaddress.php',
            data: {newaddress},
            success:function(data){
                console.log(data)
            	// $('.res-add-moderator').html(data)
                // setTimeout(function(){ location.reload() }, 1000)
            }
		})
	}else{
        $('.add_address_error').html("lracreq dashty")
	}
})
