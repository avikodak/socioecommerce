/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
              
        $(".infiniteScrollBtn").click(function(){
                        
            $(".images").append("<div class=\"partner\"><div class=\"parnterDP\"><img src=\"testImages/avikodak.jpg\"/></div><div class=\"imageRow\"><div class=\"image\"><img src=\"testImages/265219865525107307_6nARqSg4_b.jpg\"/><div class=\"imageContent\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, </div></div><div class=\"image\"><img src=\"testImages/97996667432736343_89e70f4e4127.jpg\"/><div class=\"imageContent\">Lorem ipsum dolor sit amet, consectetur adipisicing elit,  </div></div><div class=\"image\"><img src=\"testImages/97988874483013075_7cfa5aa1cdfe.jpg\"/><div class=\"imageContent\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, </div></div></div></div>");
        });
    
    
    
    
    $(".image").click(function(){
       
        $(this).append('<div style="position:absolute;top:0;background-color:pink;width:200px;height:200px;opacity:0.5;"><div style="top:80px;left:75px;position:absolute;width:30px">HELLO</div></div>');
    });
    
    
//    $(".infiniteScrollBtn").click(function(){
//    
//        $.ajax({
//            url: "../src/AjaxImages.php",
//            
//            success: function(data) {
//                $('.images').append(data);
//                
//            }
//        });
//    });
    
    
});

