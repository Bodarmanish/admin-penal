// 
$(document).ready(function()
{	
		
		if($('#force_update').val() == 'YES')
		{
			$('#force_update'). attr('checked',true);
		}
		else if($('#force_update').val() == 'NO')
		{
			$('#force_update'). attr('checked',false);
		}
});


				
//edit_user dateinput
$(document).ready(function()
{
	$('#datetime').click(function(){
		
		$('#datetime').datetimepicker();
	});
});

//editapp chackbox  
$(document).ready(function()
{	
		
		if($('#force_update').val() == 'YES')
		{
			$('#force_update'). attr('checked',true);
		}
		else if($('#force_update').val() == 'NO')
		{
			$('#force_update'). attr('checked',false);
		}
});

$(document).ready(function()
{
		if($('#only_banner').val() == 'YES')
		{
			$('#only_banner'). attr('checked',true);
		}
		else if($('#only_banner').val() == 'NO')
		{
			$('#only_banner'). attr('checked',false);
		}
});

$('#force_update').change(function() {
		//alert("change");
        if($(this).is(":checked")) {
            $(this).attr("value", 'YES');
        }
        else
        {
        	$(this).attr("value", 'NO');
        
        }
});
$('#only_banner').change(function() {
		//alert("change");
        if($(this).is(":checked")) {
            $(this).attr("value", 'YES');
        }
        else
        {
        	$(this).attr("value", 'NO');
        
        }
});

$("select.user").change(function() {
    //var filterIndex = $(this).children("option:selected").index();
    var filterValue = $(this).children("option:selected").val();
    var row = $('.gradeX'); 
    //var col = $('.col');
    row.hide();
     var colElements = document.getElementsByClassName("col");
     var i;
     if (filterValue == 'All App User' ) {																																																										
     	row.show();
     }else{
     for( i=0;i<colElements.length;i++){
     	if(colElements[i].innerHTML == filterValue ){
     	var parentRow = colElements[i].parentElement;
     	parentRow.style.display = "table-row";
     	}
     }
 }
});


//filter data
$("select.Application").change(function() {
    //var filterIndex = $(this).children("option:selected").index();
    var filterValue = $(this).children("option:selected").val();
    var row = $('.gradeX'); 
    //var col = $('.col');
    row.hide();
     var colElements = document.getElementsByClassName("col");
     var i;
     if (filterValue == 'All' ) {																																																										
     	row.show();
     }else{
     for( i=0;i<colElements.length;i++){
     	if(colElements[i].innerHTML == filterValue ){
     	var parentRow = colElements[i].parentElement;
     	parentRow.style.display = "table-row";
     	}
     }
 }
});

//gritter message
$(document).ready(function () {          

            setTimeout(function() {
                $('#gritter-item-1').slideUp("slow");
            }, 7000);
});


//change user password
$(document).ready(function(){
	$("#current_Pwd").focusout(function(){
		var current_Pwd = $("#current_Pwd").val();
		$.ajax({
			type:'get',
			url:'/admin/chkpass',
			data:{current_Pwd:current_Pwd},
			success:function(resp)
			{
				if(resp=="false")
				{
					$('#chkpass').html("<font color='red'>Current Password is incorrect</font>");
				}
				else if(resp=="true")
				{
					$('#chkpass').html("<font color='green'>Current Password is Correct</font>");

				}
			},
			// error:function()
			// {
			// 	alert('Error');
			// }

		});
	});

	// $('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	//$('select').select2();
	
	// Form Validation
    $("#basic_validate").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			date:{
				required:true,
				date: true
			},
			url:{
				required:true,
				url: true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});


//add_application validattion	
$("#add_application").validate({
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
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

//editeuser validatetion
$("#edit_application").validate({
		rules:{
			Country:{
					required:true,
				 },
			DeviceType:{
					required:true,
				 },
			OSVersion:{
					required:true,
					number:true,
				  },
			AppVersion:{
					required:true,
					number:true,
				},
					
				
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
// end////

	$("#password_validate").validate({
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
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$(".delete").click(function(){
		if(confirm('Are you sure you want to delete this category?'))
		{
			return true;
		}
		return false;
	});
	$(".delete1").click(function(){
		if(confirm('Are you sure you want to delete this product?'))
		{
			return true;
		}
		return false;
	});
});



