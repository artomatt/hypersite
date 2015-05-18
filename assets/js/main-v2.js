$(document).ready(function(){

  // Scroll Position
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
    $("h1.page-title").addClass("scroll");
    }
    else {
    $("h1.page-title").removeClass("scroll");
    }
  });
  
  // First and Last child
  $("li:last-child").addClass("last-child");
  $("li:first-child").addClass("first-child");
  
  // Accordian
  $(".toggle-area").hide();
  $(".toggle").click(function(){
    $(".toggle-area").fadeToggle(250);
  });
  

  $('body').hide();

  $(window).load(function() {
    $('body').show();
  }); 

  $('a.fade').click(function(event){
    event.preventDefault();
    linkLocation = this.href;
    $('body').addClass('fadeOut');
    setTimeout(function(){
      $('body').hide(0, redirectPage); 
    },500)
  });
       
  function redirectPage() {
    window.location = linkLocation;
  }
  
});