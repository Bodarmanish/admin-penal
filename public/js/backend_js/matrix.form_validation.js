//chakebox edituser x

x(document).ready(function(){

	if(x('#fullAccess').val() == 'yes'){x('#fullAccess'). attr('checked',true);}
	else if(x('#fullAccess').val() == 'no'){x('#fullAccess'). attr('checked',false);}
		if(x('#PurchaseAds').val() == 'yes'){x('#PurchaseAds'). attr('checked',true);}
	else if(x('#PurchaseAds').val() == 'no'){x('#PurchaseAds'). attr('checked',false);}
		if(x('#PurchaseWatermark').val() == 'yes'){x('#PurchaseWatermark'). attr('checked',true);}
	else if(x('#PurchaseWatermark').val() == 'no'){x('#PurchaseWatermark'). attr('checked',false);}
		if(x('#unlimeted').val() == 'yes'){x('#unlimeted'). attr('checked',true);}
	else if(x('#unlimeted').val() == 'no'){x('#unlimeted'). attr('checked',false);}
		if(x('#PurchaseSubscription').val() == 'yes'){x('#PurchaseSubscription'). attr('checked',true);}
	else if(x('#PurchaseSubscription').val() == 'no'){x('#PurchaseSubscription'). attr('checked',false);}
});

x('#fullAccess').change(function() {
	

        if(x(this).is(":checked")) {
            x(this).attr("value", 'yes');
            x('#PurchaseAds').attr("value", 'yes').attr('checked', true);
            x('#PurchaseWatermark').attr("value", 'yes').attr('checked', true);
            x('#unlimeted').attr("value", 'yes').attr('checked', true);
            x('#PurchaseSubscription').attr("value", 'yes').attr('checked', true);
            var currentdate = new Date(); 
					var datetime = currentdate.getDate() + "/"
		                + (currentdate.getMonth()+1)  + "/" 
		                + (currentdate.getFullYear()+20) + " "  
		                + currentdate.getHours() + ":"  
		                + currentdate.getMinutes() + ":" 
		                + currentdate.getSeconds();
					x('#datetime').val(datetime);

        }
        else
        {
        	x(this).attr("value", 'no').attr('checked', false);
        	x('#PurchaseAds').attr("value", 'no').attr('checked', false);
            x('#PurchaseWatermark').attr("value", 'no').attr('checked', false);
            x('#unlimeted').attr("value", 'no').attr("checked", false);
            x('#PurchaseSubscription').attr("value", 'no').attr('checked', false);
            x('#datetime').val("");
        
        }//location.reload();
	});


x('#PurchaseAds').change(function() {
		//alert("change");
        if(x(this).is(":checked")) {
            x(this).attr("value", 'yes');
        }
        else
        {
        	x(this).attr("value", 'no');
        
        }
});
x('#PurchaseWatermark').change(function() {
		//alert("change");
        if(x(this).is(":checked")) {
            x(this).attr("value", 'yes');
        }
        else
        {
        	x(this).attr("value", 'no');
        
        }
});

x('#unlimeted').change(function() {
		//alert("change");
        if(x(this).is(":checked")) {
            x(this).attr("value", 'yes');
        }
        else
        {
        	x(this).attr("value", 'no');
        
        }
});
x('#PurchaseUnlimited').change(function() {
		//alert("change");
        if(x(this).is(":checked")) {
            x(this).attr("value", 'yes');
        }
        else
        {
        	x(this).attr("value", 'no');
        
        }
});
x('#PurchaseSubscription').change(function() {
		//alert("change");
        if(x(this).is(":checked")) {
            x(this).attr("value", 'yes');
        }
        else
        {
        	x(this).attr("value", 'no');
        
        }
});

				


// //editapp chackbox  
// $(document).ready(function()
// {	
		
// 		if($('#force_update').val() == 'YES')
// 		{
// 			$('#force_update'). attr('checked',true);
// 		}
// 		else if($('#force_update').val() == 'NO')
// 		{
// 			$('#force_update'). attr('checked',false);
// 		}
// });

// $(document).ready(function()
// {
// 		if($('#only_banner').val() == 'YES')
// 		{
// 			$('#only_banner'). attr('checked',true);
// 		}
// 		else if($('#only_banner').val() == 'NO')
// 		{
// 			$('#only_banner'). attr('checked',false);
// 		}
// });

// $('#force_update').change(function() {
// 		//alert("change");
//         if($(this).is(":checked")) {
//             $(this).attr("value", 'YES');
//         }
//         else
//         {
//         	$(this).attr("value", 'NO');
        
//         }
// });
// $('#only_banner').change(function() {
// 		//alert("change");
//         if($(this).is(":checked")) {
//             $(this).attr("value", 'YES');
//         }
//         else
//         {
//         	$(this).attr("value", 'NO');
        
//         }
// });

// $("select.user").change(function() {
//     //var filterIndex = $(this).children("option:selected").index();
//     var filterValue = $(this).children("option:selected").val();
//     var row = $('.gradeX'); 
//     //var col = $('.col');
//     row.hide();
//      var colElements = document.getElementsByClassName("col");
//      var i;
//      if (filterValue == 'All App User' ) {																																																										
//      	row.show();
//      }else{
//      for( i=0;i<colElements.length;i++){
//      	if(colElements[i].innerHTML == filterValue ){
//      	var parentRow = colElements[i].parentElement;
//      	parentRow.style.display = "table-row";
//      	}
//      }
//  }
// });


// //filter data
// $("select.Application").change(function() {
//     //var filterIndex = $(this).children("option:selected").index();
//     var filterValue = $(this).children("option:selected").val();
//     var row = $('.gradeX'); 
//     //var col = $('.col');
//     row.hide();
//      var colElements = document.getElementsByClassName("col");
//      var i;
//      if (filterValue == 'All' ) {																																																										
//      	row.show();
//      }else{
//      for( i=0;i<colElements.length;i++){
//      	if(colElements[i].innerHTML == filterValue ){
//      	var parentRow = colElements[i].parentElement;
//      	parentRow.style.display = "table-row";
//      	}
//      }
//  }
// });

// //gritter message
// $(document).ready(function () {          

//             setTimeout(function() {
//                 $('#gritter-item-1').slideUp("slow");
//             }, 7000);
// });

// //edit_user dateinput
// $(document).ready(function()
// {
// 	$('#datetime').click(function(){
		
// 		$('#datetime').datetimepicker();
// 	});
// });



//change user password
x(document).ready(function(){
	x("#current_Pwd").focusout(function(){
		var current_Pwd = x("#current_Pwd").val();
		
		x.ajax({
			type:'get',
			url:'/admin/chkpass',
			data:{current_Pwd:current_Pwd},

			success:function(resp)
			{
				if(resp=="false")
				{
					x('#chkpass').html("<font color='red'>Current Password is incorrect</font>");
				}
				else if(resp=="true")
				{
					x('#chkpass').html("<font color='green'>Current Password is Correct</font>");

				}
			},
			// error:function()
			// {
			// 	alert('Error');
			// }

		});
	});

	
//add_application validattion	
x("#add_application").validate({
		rules:{
			name:{
					required:true
				 },
			Version:{
					required:true,
					number:true,
				 },
			title:{
					required:true,
				  },
			message:{
					required:true,
				},
			link:{
					required:true,
					url: true,
				},
			email:{
					required:true,
					email: true,
				},
			format:{
					required:true,
					
				},	
			contact_format:{
					required:true,
					
				},
			devloper_site:{
					required:true,
					url:true,
				},		

			devloper_name:{
					required:true,
					
				},	
			devloper_apps:{
					required:true,
					
				},
			generated_app:{
					required:true,
					
				},		
				
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			x(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			x(element).parents('.control-group').removeClass('error');
			x(element).parents('.control-group').addClass('success');
		}
	});


	x("#password_validate").validate({
		rules:{
			current_Pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			new_Pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			confirm_Pwd:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#new_Pwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			x(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			x(element).parents('.control-group').removeClass('error');
			x(element).parents('.control-group').addClass('success');
		}
	});

	// $(".delete").click(function(){
	// 	if(confirm('Are you sure you want to delete this category?'))
	// 	{
	// 		return true;
	// 	}
	// 	return false;
	// });
	// $(".delete1").click(function(){
	// 	if(confirm('Are you sure you want to delete this product?'))
	// 	{
	// 		return true;
	// 	}
	// 	return false;
	// });
});
