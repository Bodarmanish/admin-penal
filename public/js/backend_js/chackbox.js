
$(document).ready(function() {

$('#fullAccess').change(function() {
	

        if($(this).is(":checked")) {
            $(this).attr("value", 'YES');
            $('#PurchaseAds').attr("value", 'YES').attr('checked', true);
            $('#PurchaseWatermark').attr("value", 'YES').attr('checked', true);
            $('#Purchase').attr("value", 'YES').attr('checked', true);
            $('#PurchaseSubscription').attr("value", 'YES').attr('checked', true);
            var currentdate = new Date(); 
					var datetime = currentdate.getDate() + "/"
		                + (currentdate.getMonth()+1)  + "/" 
		                + (currentdate.getFullYear()+20) + " "  
		                + currentdate.getHours() + ":"  
		                + currentdate.getMinutes() + ":" 
		                + currentdate.getSeconds();
					$('#datetime').val(datetime);

        }
        else
        {
        	$(this).attr("value", 'NO').attr('checked', false);
        	$('#PurchaseAds').attr("value", 'NO').attr('checked', false);
            $('#PurchaseWatermark').attr("value", 'NO').attr('checked', false);
            $('#Purchase').attr("value", 'NO'). prop("checked", false);
            $('#PurchaseSubscription').attr("value", 'NO').attr('checked', false);
            $('#datetime').val("");
        
        }//location.reload();
   });
});
// $(document).ready(function(){

// $('#fullAccess').click(function(){
//                 var check = $('#fullAccess').val();

//                 $.ajax({
//                     url: '/admin/test',
//                     type: 'get',
//                     //data: {check},
//                     success: function(data)
//                     {
//                         if($('#fullAccess').is(":checked")) 
//                         {   alert(check);
//                             $('#fullAccess').attr("value", 'YES');
//                             $('#PurchaseAds').attr("value", 'YES').attr('checked', true);
//                             $('#PurchaseWatermark').attr("value", 'YES').attr('checked', true);
//                             $('#Purchase').attr("value", 'YES').attr('checked', true);
//                             $('#PurchaseSubscription').attr("value", 'YES').attr('checked', true);
//                             var currentdate = new Date(); 
//                                  var datetime = currentdate.getDate() + "/"
//                                      + (currentdate.getMonth()+1)  + "/" 
//                                      + (currentdate.getFullYear()+20) + " "  
//                                      + currentdate.getHours() + ":"  
//                                      + currentdate.getMinutes() + ":" 
//                                      + currentdate.getSeconds();
//                                  $('#datetime').val(datetime);

//                         }
//                         else if($('#fullAccess').attr('checked', false)) 
//                         // else
//                         {
//                             alert(check);
//                             $('#fullAccess').attr("value", 'NO');//.attr('checked', false);
//                             $('#PurchaseAds').attr("value", 'NO').attr('checked', false);
//                             $('#PurchaseWatermark').attr("value", 'NO').attr('checked', false);
//                             $('#Purchase').attr("value", 'NO'). prop("checked", false);
//                             $('#PurchaseSubscription').attr("value", 'NO').attr('checked', false);
//                             $('#datetime').val("");
                        
//                         }
//                     }
//                 });
//             });
            
    

//});
   