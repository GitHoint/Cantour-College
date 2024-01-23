$(document).ready(function(){

    //Navigation Bar dropdown
    var menuOpen = false; //for swapping burger icon

    $("#navbar-toggleButton").click(function(){
        //reveal nav
        $(".navbar").slideToggle("fast");
        
        //changes header colour
        $("header").toggleClass(".header-def-back").toggleClass("header-nav-back");
        
        //changes burger icon
        if (menuOpen === false){
            $(".bar:nth-child(1)").css("transform", "translateY(4px) rotate(45deg)");
            $(".bar:nth-child(2)").hide();
            $(".bar:nth-child(3)").css("transform",  "translateY(-4px) rotate(-45deg)");
            menuOpen = true;
        } else if (menuOpen === true) {
            $(".bar:nth-child(1)").css("transform", "translateY(0px)");
            $(".bar:nth-child(2)").show();
            $(".bar:nth-child(3)").css("transform",  "translateY(0px)");
            menuOpen = false;
        }
    })
    //Foundation Year Display
    $(".foundation").each(function(){
        if ($(this).text() == "0"){
            $(this).text("No Foundation Year");
        }
        else{
            $(this).text("Foundation Year Avaliable");
        }
    })

    //UCAS Information Display
    $(".code").each(function(){
        if ($(this).text() == "UCAS Code: "){
            $(this).text("UCAS Not Avaliable For This Course");
        }
    })
    $(".points").each(function(){
        if ($(this).text() == " Points"){
            $(this).remove();
        }
    })

    //Recruitment Avaliability
    $(".recruit").each(function(){
        if ($(this).text() == "0"){
            $(this).text("Avaliable");
            $(this).addClass("alt-col");
        }
        else{
            $(this).text("No Longer Avaliable");
            $(this).addClass("alt-col");
        }
    })
    //Submit form
    $("form").submit(function(){
        $(this).remove();
        $(".content > h3").html("<h3>Thank <span class='alt-col'>You</span></h3>");
        $("#prompt > p").remove();
        $("#prompt").append("<p>We will get back to you as soon as possible.</p>");
    })

    //Sub-dropdown in navbar
    $(".drop").click(function(){
        $(this).next("ul").slideToggle("Fast");
        $(this).toggleClass("alt-col");
    })

    //lightslider
    $("#lightSlider").lightSlider({
        item: 1,
        slideMargin: 0,
        loop: true,
    })

})
