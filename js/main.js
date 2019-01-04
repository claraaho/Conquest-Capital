// On document load
//$( document ).ready(function(){ 
  // Expand secondary navigation
  /*$('#accordion').find('.accordion-toggle').click(function(){
    // Expand or collapse this panel
    $(this).next().slideToggle('fast');
    $(this).toggleClass('active');

    // Hide the other panels
    $(".accordion-content").not($(this).next()).slideUp('fast');
    $(".active").not($(this)).removeClass('active');
  });*/
//});

$(window).load(function(){
  // Center footer navbar-brand
  fWidth   = $('footer').width();
  elWidth   = $('footer').find('.navbar-brand').width();
  marginLeft= fWidth/2 - elWidth/2; 
  $('footer').find('.navbar-brand').css({'margin-left': marginLeft });

  // contact bar vertical adjustment
  navHeight = $( "nav" ).outerHeight();
  vpHeight  = $( window ).height();
  lpHeight  = vpHeight - navHeight;
  $("#contact-bar").css({ 'top': navHeight-6 });

  // Page A, B vertical adjustments
  var h1MarginTop = navHeight + 34;
  vpWidth   = $( window ).width();
  if ( vpWidth < 480) h1MarginTop += $( "#contact-bar" ).outerHeight();
  $(".page-a").css({ 'margin-top': h1MarginTop });
  $(".page-b").css({ 'margin-top': h1MarginTop });
  next2marginTop = h1MarginTop + 65;
  //$(".next").css({ 'margin-top': next2marginTop });


  fromTop = (vpHeight/2) - ($(".logo").height()/2);
  $(".logo").css({ 'margin-top': fromTop });
 
});

$(document).ready(function(){
  // Center footer navbar-brand
  fWidth   = $('footer').width();
  elWidth   = $('footer').find('.navbar-brand').width();
  marginLeft= fWidth/2 - elWidth/2; 
  $('footer').find('.navbar-brand').css({'margin-left': marginLeft });

  // Search bar vertical adjustment
  navHeight = $( "nav" ).outerHeight();
  vpHeight  = $( window ).height();
  lpHeight  = vpHeight - navHeight;
  $("#search-bar").css({ 'top': navHeight-10 });

  // Page A, B vertical adjustments
  var h1MarginTop = navHeight + 20;
  vpWidth   = $( window ).width();
  if ( vpWidth < 480) h1MarginTop += $( "#search-bar" ).outerHeight();
  $(".page-a").css({ 'margin-top': h1MarginTop });
  $(".page-b").css({ 'margin-top': h1MarginTop });

  // Intialize height
  // var widest = 0;

  // // Loop through equalize elements
  // $('.split-ul').each( function() {
  //   // Set height to tallest elements
  //   widest = $(this).width() > widest ? $(this).width() : widest;
  // }).width(widest);
});

// Accordion activation
/*$(document).on({
    mouseenter: function() {
      $(this).children("li").stop().slideDown(200, "linear");
      // Only add active class if not initial s-nav
      if(!$(this).hasClass('s-a-c')){
        $(this).children("h3").addClass("active");
      
        switch ($(this).attr("id")) {
          case "s-nav-1":
            ping = new Audio('/mp3/A_sharp.mp3');
            break;
          case "s-nav-2":
            ping = new Audio('/mp3/C_sharp.mp3');        
            break;
          case "s-nav-3":
            ping = new Audio('/mp3/E_sharp.mp3');
            break;  
          default:
            ping = new Audio('/mp3/F_sharp_2.mp3');
            break;
        }
        ping.volume = 1;
        ping.play();
      }     
    },
    mouseleave: function() {
      $(this).children("li").stop().slideUp(200, "linear");
      $(this).children("h3").removeClass("active");
    }
  }, ".accordion-content");


$( "#call-to-action" ).hover(function() {
  // Call to action hover sound and effect
  var ping = new Audio('/ping.mp3');
  ping.volume = 0.04;
  $(this).addClass('glow-this');
  ping.play();
  document.cookie = "true";
}, function() {
  //cta_audio.pause();
});*/
// Toggle the accordion buttons
/*$(window).on('scroll', function() {
  $(".active").next().slideToggle('linear');
  $(".active").not($(this)).removeClass('active');
});   */

// Play video after 2 seconds 
/*setTimeout( function(){
  if(!window.location.pathname.substr(1)){
    $("#vid-wrapper")[0].play();
    $("#vid-wrapper").css('opacity', '1');
  }
}, 2000 );*/

// Select a video using the buttons
// $(".cycle-btn").on('click', function() {
//   $(".btn-active").removeClass('btn-active');
//   $(this).addClass('btn-active');
// });

// loop through videos
//video_count = getRandomInt();
//videoPlayer = document.getElementById("vid-wrapper");

$(".split-ul").hover(function(){
    $(".dbl-button").css("margin-top", "50px");
    }, function(){
    $(".dbl-button").css("margin-top", "-38px");
});


// Anchor smooth scrolling
$(document).ready(function(){
  $('a[href^="#"]').on('click',function (e) {
    e.preventDefault();
    var target = this.hash;
    $target = $(target);
    $('html, body').stop().animate({
      'scrollTop':  ($target.offset().top - 50)
    }, 400, 'swing', function () {
      window.location.hash = target;
    });
  });
});

$( ".career-item" ).click(function() {
  window.location = "mailto:info@imaginerestudios.com";
});

$("h3").click(function(){
  $("form").addClass('showForm');
});

$( "ul.side li" ).click(function() {
  var mystr   = $(this).attr('id');
  var fullId  = mystr.split("-");
  var index   = fullId[0];

  $( ".menu-desc" ).slideUp("slow");
  
  $( "#"+index ).slideToggle( "slow", function() {
  });
});


if (!window.location.pathname.substr(1)) {
  $('footer').css({'position': 'fixed', 'bottom': 0 });
  $('#contact-bar').addClass('contact-bar-home');

  $("body").css({"overflow": "hidden"});

  // var vidWidth = $(".home-video").width();
  if ($(window).height() > $(".home-video").height()) {
   $("#homevideo").height($("body").height());

   var aspectRatio  = 1.778;

   var vidWidth = $("body").height() * aspectRatio;

    // If video isn't wide enough for screen
    if ($("body").width() > vidWidth) {

      $("#homevideo").width($("body").width());

      var newHeight = $("body").width() / aspectRatio;

      $("#homevideo").height(newHeight);

    } else {
      $("#homevideo").width(vidWidth);
    }
  }

  // VIMEO EMBEDDING AND SEEKING FOR HOMEPAGE
  // VIMEO EMBEDDING AND SEEKING FOR HOMEPAGE
  // VIMEO EMBEDDING AND SEEKING FOR HOMEPAGE

  // Timestamp of the beginning of each video
  var seekArray = [0, 4.7, 8.9, 13.5, 18.0];

  var randTimestamp = seekArray.sort(function() { return 0.5 - Math.random() });

  // Load Vimeo API for the embedded video
  var iframe_player = $('#homevideo')[0];
  var player_1 = $f(iframe_player);

  // Function to control what happens when each link is clicked
  function setupLinks() {
          
      $("#landing-page").click(function () {
          player_1.api('play'); //Play the video
          var randInt = getRandomInt(1,5);
          player_1.api('seekTo', seekArray[randInt]); //Seek to the number of seconds 

          /*player_1.api('getCurrentTime', function(value, player_1){
            curr = value;
          });
          
          var i;
          for ( i = 0 ; i < seekArray.length ; i++){
            if (seekArray[i] >= curr) {
              console.log("curr ", curr);
              console.log("seek ", seekArray[i]);
              player_1.api('seekTo', seekArray[i]); //Seek to the number of seconds 
              break;
            }
          }*/
      });
  }

  setupLinks();
  var src = $("#homevideo").data('src');
  // Hide video on mobile
  if (window.matchMedia("(min-width: 700px)").matches) {
    $("#homevideo").attr('src', src);
  }else{
    var num = getRandomInt(1,4);
    $("body").css({"background": "url('/img/evolve_"+num+".jpg')"});
    $("#homevideo").css('display', 'none');
  }


} else if(window.location.pathname.substr(1) == "our-services") {
  $(".c-btn-wrapper").css("padding-bottom", "95px");
  // Show nav-services on scroll
  var maximumWidth = Math.max.apply( null, $( '.second-nav' ).map( function () {
      return $( this ).outerWidth( true );
  }).get() );

  $(".second-nav").css('width',maximumWidth);

  
  $(window).scroll(function(){
    var showNavThreshold = $("#icon-main").offset().top + $("#icon-main").height();
    if (showNavThreshold > $(window).scrollTop()) {
      $("#service-nav").removeClass("service-nav-show");
    } else if (!$("#service-nav").hasClass("service-nav-show")){
      $("#service-nav").addClass("service-nav-show");
    }
    // check if at bottom
    if($(window).scrollTop() + $(window).height() == $(document).height()) {
      var fHeight = $("footer").outerHeight();
      $("#service-nav").css("margin-bottom", fHeight);
    } else {
      $("#service-nav").css("margin-bottom", "0");
    }
  });
} else if (window.location.pathname.substr(1) == "corporate-reel") {
  $("footer").remove();
  $("#contact-bar").remove();
  $("nav.navbar").css("background", "rgba(0,0,0,0.95)");
  $("html").css("overflow", "hidden");
} else if (window.location.pathname.substr(1) == "our-company") {
  navHeight = $( "nav" ).outerHeight();
  $(".our-company-page").css("padding-top", navHeight);
}





// Check when video finishes
// $(function() {
//     var iframe = $('#homevideo')[0];
//     var player = $f(iframe);

//     // When the player is ready, add listeners finish
//     player.addEvent('ready', function() {        
//         player.addEvent('finish', onFinish);
//     });

//     function onFinish() {
//         nextVid();
//     }
// });

//function nextVid() {
  

  // $("#homevideo").remove();
  // var vidNum = '171605901';
  // var path = "https://player.vimeo.com/video/"+ vidNum +"?api=1&player_id=homevideo&background=1&loop=0"
  // var element =   '<iframe id="homevideo" src="'+ path +'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
  // $('#landing-page').append(element);
//}



function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}



//material contact form animation
$('.contact-form').find('.form-control').each(function() {
  var targetItem = $(this).parent();
  if ($(this).val()) {
    $(targetItem).find('label').css({
      'top': '10px',
      'fontSize': '14px'
    });
  }
})
$('.contact-form').find('.form-control').focus(function() {
  $(this).parent('.input-block').addClass('focus');
  $(this).parent().find('label').animate({
    'top': '10px',
    'fontSize': '14px'
  }, 300);
})
$('.contact-form').find('.form-control').blur(function() {
  if ($(this).val().length == 0) {
    $(this).parent('.input-block').removeClass('focus');
    $(this).parent().find('label').animate({
      'top': '25px',
      'fontSize': '18px'
    }, 300);
  }
})






