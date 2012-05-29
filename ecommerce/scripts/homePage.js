
$(document).ready(function(){
              
    $(".infiniteScrollBtn").click(function(){
        
        $.ajax({
            type : "POST",
            url : '../src/textAjax.php',
            start : function(){
                $(".mainContent").append("<img src='BouncingLoader.gif' width=\"64\" height=\"64\" />");
            },
            success: function(data) {

                $(".mainContent").append(data);
            },
            error : function() {
                alert("Sorry, The requested property could not be found.");
            }
        });
    });
    $("#msg").ajaxError(function(event, request, settings){
        $(this).append("<li>Error requesting page " + settings.url + "</li>");
    });
   
    
    $(".mainContent").on("click",".image", function() {
       alert($(this).height());
       
    });
    
   
    
});

