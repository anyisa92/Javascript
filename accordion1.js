//when document is ready it will run function
$(document).ready(function(){

    //selects the class of action on click then runs the function function is defined by e 
    $(".action").click(function(e){
    //prevents action from happening on click 
    e.preventDefault();  
    //this removes the class from the items that are not clicked thus only showing one slide
    $(".slide1").removeClass("active");
    //turns selected slide into a variable and goes up the element tree in the div 
    var slide = $(this).closest(".slide1");
    //this adds the class to the only element in the function that is click and displays it
    slide.addClass("active");

    });
  //check the width

})