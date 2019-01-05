$('.seenotification').click(function(){
        var aboutid= $(this).attr('about-id');
		   var newTabUrl= $(this).attr('data-baseurl');
		  var notifyid= $(this).attr('notify-id');
		  var tbl= $(this).attr('tbl');
		  var status='0';
		  var status_tbl= 'notifications';
		  var action =$(this).attr('action');
		  $.ajax({
        type:'POST',
        url:action,
         data:{notifyid:notifyid,status:status,status_tbl:status_tbl},
         success: function(data){
         if(data.trim()!='')
       {
          window.location=newTabUrl;
        }
        
       }

       });
});

function custommodal()
{
    $('#myModal').modal("show");
}