$(function(){

    // Navigation menu 

    $(".menu_icon").click(function(){
        if ($(".longbar").hasClass("longbaractive")){
            $(".longbar").removeClass("longbaractive");
            $(".shortbar").removeClass("shortbaractive");
            $(".menu").removeClass("menuactive");
        }
        else{
            $(".longbar").addClass("longbaractive");
            $(".shortbar").addClass("shortbaractive");
            $(".menu").addClass("menuactive");
        }
    })
    
    // 



    // 



  });
  