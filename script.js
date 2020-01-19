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
            if ($(".search_form_container").hasClass("search_form_container_active")) {
                $(".search_form_container").removeClass("search_form_container_active");
            }
        }
    });
    
    //Scroll makes topbar bgc 

    if ($(window).scrollTop() > 0) {
        $(".topbar").addClass("topbarbgc");
    }
    $(window).scroll(function() {
        if ($(window).scrollTop() > 0) {
          $(".topbar").addClass("topbarbgc");
        } else {
          $(".topbar").removeClass("topbarbgc");
        }
      });

    // 

    $(".search").click(function(){
        if ($(".search_form_container").hasClass("search_form_container_active")) {
            $("#search_form").submit();
          } else {
            $(".search_form_container").addClass("search_form_container_active");
            if ($(".longbar").hasClass("longbaractive")){
                $(".longbar").removeClass("longbaractive");
                $(".shortbar").removeClass("shortbaractive");
                $(".menu").removeClass("menuactive");
            }
          }
    })


    // $(window).scroll(function() {
    //     if ($(".search_form_container").hasClass("search_form_container_active")) {
    //         $(".search_form_container").removeClass("search_form_container_active");
    //       }
    // })

      $("body > *").not("body > .topbar").click(function() {
        if ($(".search_form_container").hasClass("search_form_container_active")) {
            $(".search_form_container").removeClass("search_form_container_active");
        }
        if ($(".longbar").hasClass("longbaractive")){
            $(".longbar").removeClass("longbaractive");
            $(".shortbar").removeClass("shortbaractive");
            $(".menu").removeClass("menuactive");
        }
    })

  });
  