<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url"         content="http://www.imaginerestudios.com" />
    <meta property="og:type"        content="website" />
    <meta property="og:title"       content="Imagin&middot;ere Studios" />
    <meta property="og:description" content="Corporate Films, Marketing and Advertising." />
    <meta property="og:image"       content="http://www.imaginerestudios.com/og-pic.png" />
    
    <!-- Android theme colour -->
    <meta name="theme-color" content="#1589C4">

    <title>imagin&bull;ere</title>

    <!-- COMPILE INTO ONE STYLESHEET -->
    <!-- COMPILE INTO ONE STYLESHEET -->
    <!-- COMPILE INTO ONE STYLESHEET -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- FAVICONS FOR DIFFERENT PLATFORMS -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '996846630429732');
    fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=996846630429732&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    <script async src="//81313.tctm.co/t.js"></script>

  </head>
  <body>

    <?php
    //if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
      $uri = preg_split("/(\/|\?|=)/", $_SERVER["REQUEST_URI"]);
      //$uri  = explode('/', $_SERVER["REQUEST_URI"]);
      include 'nav_bar.php';

      // Find out which page the user is trying to get to
      /*if (in_array('our-company', $uri)) include 'tech.php';*/
      if (in_array('team', $uri)) include 'careers.php';
      else if (in_array('corporate-reel', $uri)) include 'corporate_reel.php';
      else if (in_array('login', $uri)) include 'login.php';
      else if (in_array('mission-page', $uri)) include 'mission_page.php';
      else if (in_array('our-portfolio', $uri)) include 'our_portfolio.php';
      else if (in_array('our-services', $uri)) include 'our_services.php';
      else if (in_array('our-company', $uri)) include 'our_company.php';
      else if (in_array('contactengine.php', $uri)) include 'contactengine.php';
      else if (in_array('contact-us', $uri)) include 'contact_form.php';

      else include 'home.php';
      include 'overlay.php';
   // }else {
      ?>
    <script>
      // REMOVE COUNTDOWN ON JUNE 20
      /*var end = new Date('06/21/2016 10:1 AM');
      var _second = 1000;
      var _minute = _second * 60;
      var _hour = _minute * 60;
      var _day = _hour * 24;
      var timer;

      function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {
          clearInterval(timer);
          document.getElementById('countdown').innerHTML = 'EXPIRED!';
          return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = days + ' days ';
        document.getElementById('countdown').innerHTML += hours + ' hrs ';
        document.getElementById('countdown').innerHTML += minutes + ' mins ';
        document.getElementById('countdown').innerHTML += seconds + ' sec';
      }
      timer = setInterval(showRemaining, 1000);*/

    </script>
    <!-- <div class="countdown-page">
      <div class="logo">
        <img src="/img/logo.png">
      </div>
      <div id="countdown">LAUNCH INITIATED - WEB CONSOLE COMING SOON</div>
      <h3> Evoke the Experience </h3>
      <form name='input' action="/" method='post'>
        <label for='username'>Username: </label><input type='text' id='username' name='username' /><br/>
        <label for='password'>Password:&nbsp;</label><input type='password' id='password' name='password' /><br/>
        <input type='submit' value='Login' name='sub' />    
      </form>
    </div> -->

      <?php
    //}
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <!-- GOOGLE ANALYTICS -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-62834806-2', 'auto');
      ga('send', 'pageview');

    </script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/jquery-match-height.js"></script>
    <script src="/js/jquery.circliful.min.js"></script>
    <script src="/js/jquery.webticker.min.js"></script>
    <script>
          $(".first-circle").circliful({
              animationStep: 5,
              foregroundBorderWidth: 5,
              backgroundBorderWidth: 15,
              percent: 74
          });
          $(".second-circle").circliful({
              animationStep: 5,
              foregroundBorderWidth: 5,
              backgroundBorderWidth: 15,
              percent: 80
          });
          $(".third-circle").circliful({
              animationStep: 5,
              foregroundBorderWidth: 5,
              backgroundBorderWidth: 15,
              percent: 68
          });


          if(window.location.pathname.substr(1) == 'mission-page' 
              || window.location.pathname.substr(1) == 'our-services'
              || window.location.pathname.substr(1) == 'our-company') {
            $(function() {
              $('.grid-item').matchHeight();
              $('.service-wrapper').matchHeight();
              $('.person-wrapper').matchHeight();
              $('.sml-img').matchHeight();
            });
          }
          $('#webTicker').webTicker({'speed': '100'});

      </script>
  </body>
</html>

