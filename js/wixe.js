$(document).ready(function(){
    /* forms */
    setInterval(function () {
    $('.btn').bind('click', function () {
        var title = $(this).attr('data-q');
      if (title != undefined) {
        $('#q').html(title);
        $('input[name=package]').val(title);        
      }
      });    
    }, 1000);
  setTimeout(function() {


    $("#Grid button").click(function(){
      $(this).addClass('btn-success').siblings('button').removeClass('btn-success');
      var value = $(this).attr('data-filter');        
      if(value == "all")
      {
        $('.all').attr('style','transform:scale(0) rotate(360deg);position:absolute;');
        setTimeout(function() {
          $('.all').attr('style','transform:scale(1) rotate(0deg);opacity:1;');          
        }, 500);
      }
      else
      {
        $(".all").not('.'+value).attr('style','transform:scale(0) rotate(360deg);position:absolute;');

        $('.all').filter('.'+value).attr('style','transform:scale(1) rotate(0deg);opacity:1;');

      }
    });
    if ($("#Grid button").removeClass("active")) {

      $(this).removeClass("active");
    }

    $(this).addClass("active");

  });
}, 500);


/* JavaScript Document */
$(document).ready(function (jQuery) {


 AOS.init({
  easing: 'ease',
  duration: 1000
});
 setInterval(function(){
  $('div[class^=col]:nth-child(even)').attr({'data-aos': 'flip-right'});
  $('div[class^=col]:nth-child(odd)').attr({'data-aos': 'flip-left'});
  $('#banner div').removeAttr('data-aos');
}, 1000);

 $('.mobile-menu li').not('li:first-child').hide(400);
 $('.mobile-menu li button').click(function () {
 $('.mobile-menu li').not('li:first-child').slideToggle(400);
});

 $('.menu-toggle button').bind('click', CT);

 function CT() {
  $(this).toggleClass('x');
  $('#menuList').slideToggle(400);
}

$('ins').parent().hide();

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
/* scroll to show button */

$(window).scroll(function() {
  var height = $(window).scrollTop();

  if(height  > 500) {
   $('.alt2').fadeIn(500);
 }else {
   $('.alt2').fadeOut(500);
 }
});



});

