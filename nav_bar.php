<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img src="/img/conquest/logo-black1.png">
      </a>
    </div>
    <!-- PAGE LINKS -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="nav-link" href="/mission-page">MISSION</a></li>
        <li><a class="nav-link" href="/our-services">SERVICES</a></li>
        <!-- <li><a class="nav-link" href="/our-portfolio">WORK</a></li> -->
        <li><a class="nav-link" href="/our-company">COMPANY</a></li>
      </ul>
    </div>
  </div>
  
  <?php 
  if (in_array('solutions',$uri) && !in_array('about-us', $uri)){ ?>
    <div class="sub-navigation container-fluid">
      <div class="sub">SALES STRATEGY</div>
      <div class="sub">OPERATIONAL MODELLING</div>
      <div class="sub">KPI'S &amp; ANALYTICS</div>
    </div>
  <?php } 
  if (in_array('branding',$uri) && !in_array('about-us', $uri)){ ?>
    <div class="sub-navigation container-fluid">
      <div class="sub">CONSULTING</div>
      <div class="sub">CORPORATE IDENTITY</div>
      <div class="sub">WEB CONSOLES</div>
    </div>
  <?php } 
  if (in_array('sustainment',$uri) && !in_array('about-us', $uri)){ ?>
    <div class="sub-navigation container-fluid">
      <div class="sub">SEO</div>
      <div class="sub">SOCIAL MEDIA</div>
      <div class="sub">ADVERTISING</div>
    </div>
  <?php } 
  if (in_array('production',$uri) && !in_array('about-us', $uri)){ ?>
    <div class="sub-navigation container-fluid">
      <div class="sub">CINEMATIC VIDEO</div>
      <div class="sub">VISUAL EFFECTS</div>
      <div class="sub">PHOTOGRAPHY</div>
    </div>
  <?php } ?>

</nav>
