$(document).ready(function() {
  
  $(window).load(function() {
    setTimeout(function() {
    $('body').show();
    }, 100);
  }); 
  
  $("a.fade").click(function(event){
    event.preventDefault();
    linkLocation = this.href;
    $('body').addClass('fadeOut'); 
    setTimeout(function() {
      $('body').hide(0, redirectPage);   
    }, 500);
  });
       
  function redirectPage() {
    window.location = linkLocation;
  }
});    