// $('.btn1').on('click', function(event){
// 	event.preventDefault()
// 	let number=$('.numberval').val()
// 	let email=$('.emailval').val()
// 	let address1=$('.address1val').val()
// 	let address2=$('.address2val').val()
// 	let address3=$('.address3val').val()
// 	if(number!=''  && email!='' && address1!='' || address2!='' || address3!=''){
// 		$.ajax({
//             method: 'post',
//             url: '../account/php/change_info.php',
//             data: {number, email, address1, address2, address3},
//             success:function(data){
//             	$('.res-add-moderator').html(data)
//                 // setTimeout(function(){ location.reload() }, 2000)
//             }
// 		})
// 	}else{
//         $('.res-add-moderator').html("lracreq dashty")
// 	}
// })


// $('.btn2').on('click', function(event){
// 	event.preventDefault()

// 	let passold=$('.passoldval').val()
// 	let passnew=$('.passnewval').val()
// 	let passcheck=$('.passcheckval').val()
// 	if(passold!='' && passnew!='' && passcheck!=''){
// 		$.ajax({
//             method: 'post',
//             url: '../account/php/change_password.php',
//             data: {passold, passnew, passcheck},
//             success:function(data){
//             	$('.res-add-moderator2').html(data)
//                 // setTimeout(function(){ location.reload() }, 2000)
//             }
// 		})
// 	}else{
// 		$('.res-add-moderator2').html("lracreq bolor dashtery")
// 	}
// })

// $('#myModal').on('shown.bs.modal', function () {
//   $('#myInput').trigger('focus')
// })




$('.btn1').on('click', function(event){
	event.preventDefault()
	let number=$('.numberval').val()
	let email=$('.emailval').val()
	let address1=$('.address1val').val()
	if(number!=''  && email!='' && address1!=''){
		$.ajax({
            method: 'post',
            url: '../account/php/change_info.php',
            data: {number, email, address1},
            success:function(data){
            	$('.res-add-moderator').html(data)
                setTimeout(function(){ location.reload() }, 2000)
            }
		})
	}else{
        $('.res-add-moderator').html("lracreq dashty")
	}
})


$('.btn2').on('click', function(event){
	event.preventDefault()

	let passold=$('.passoldval').val()
	let passnew=$('.passnewval').val()
	let passcheck=$('.passcheckval').val()
	if(passold!='' && passnew!='' && passcheck!=''){
		$.ajax({
            method: 'post',
            url: '../account/php/change_password.php',
            data: {passold, passnew, passcheck},
            success:function(data){
            	$('.res-add-moderator2').html(data)
                setTimeout(function(){ location.reload() }, 2000)
            }
		})
	}else{
		$('.res-add-moderator2').html("lracreq bolor dashtery")
	}
})

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})