// Popup
var r_product = new Array ();
r_product[0] = "purchased item 1";

if (typeof jQuery !== 'undefined') {
  setInterval(function(){ $(".custom-social-proof").stop().slideToggle('slow'); }, 3000);
  $(".custom-close").click(function() {
    $(".custom").stop().slideToggle('slow');
  });


  $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
    var src = $(this).attr('src');
    var modal;
  
    function removeModal() {
      modal.remove();
      $('body').off('keyup.modal-close');
    }
    modal = $('<div>').css({
      background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
      backgroundSize: 'contain',
      width: '100%',
      height: '100%',
      position: 'fixed',
      zIndex: '10000',
      top: '0',
      left: '0',
      cursor: 'zoom-out'
    }).click(function() {
      removeModal();
    })
  });
}








 // Typed animation effect h1
 let typable = document.querySelector(".typing");
 if (typable) {
  
   var typed = new Typed(".typing",{
     strings:["","UI Designer","UX Designer","Intégrator"],
     typeSpeed:100,
     BackSpeed:60,
     loop:true,
   });
 }
 