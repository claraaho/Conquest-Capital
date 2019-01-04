<div class="next our-company-page">
  <!-- <div class="container our-company-container">
    <h1>imagin&middot; the possibilities...</h1>
    <p>imagin&middot; an advertising firm that fused brand new technologies with psychological marketing to optimize a brand.</p>
    <a href="#contact-us-now">
    <div class="high-speed-btn">
      Request Consultation <i class="fa fa-angle-right" aria-hidden="true"></i>
    </div>
    </a>
  </div> -->
  <div class="blue-splash container-fluid">
    <div class="our-company-grid">
      <div class="person-wrapper col-xs-4">
        <div class="headshot-wrapper">
          <img src="/img/company/jr3.jpg" />
        </div>
        <h3 class="name">JERMAINE LOPEZ</h3>
        <h4 class="title">CREATIVE DIRECTOR / FOUNDER</h4>
        <div class="sm">
          <a href='mailto:***REMOVED***' class='fa fa-envelope-square'></a>
          <a href='https://ca.linkedin.com/in/j-r-lopez-57b9b561' class='fa fa-linkedin-square'></a>
        </div>
      </div>
      <div class="person-wrapper col-xs-4">
        <div class="headshot-wrapper">
          <img src="/img/company/pouria.jpg" />
        </div>
        <h3 class="name">POURIA ASSADIPOUR</h3>
        <h4 class="title">LEAD WEB DEVELOPER</h4>
        <div class="sm">
          <a href='mailto:***REMOVED***' class='fa fa-envelope-square'></a>
          <a href='https://www.linkedin.com/in/pouria-assadipour-66884350' class='fa fa-linkedin-square'></a>
        </div>
      </div>
      <div class="person-wrapper col-xs-4">
        <div class="headshot-wrapper">
          <img src="/img/company/elise2.jpg" />
        </div>
        <h3 class="name">ELISE McNEILL</h3>
        <h4 class="title">BRAND TECHNOLOGIST</h4>
        <div class="sm">
          <a href='https://www.linkedin.com/in/elisemcneill' class='fa fa-linkedin-square'></a>
        </div>
      </div>
      <div class="person-wrapper col-xs-4">
        <div class="headshot-wrapper">
          <img src="/img/company/sandy-lopez.jpg" />
        </div>
        <h3 class="name">SANDY LOPEZ</h3>
        <h4 class="title">ADMIN</h4>
        <div class="sm">
        </div>
      </div>
      <div class="person-wrapper col-xs-4">
        <div class="headshot-wrapper">
          <img src="/img/company/ketan.jpg" />
        </div>
        <h3 class="name">KETAN JOGIA</h3>
        <h4 class="title">DIRECTOR OF SOUND</h4>
        <div class="sm">
        </div>
      </div>
      <div class="person-wrapper col-xs-4">
        <div class="headshot-wrapper">
          <img src="/img/company/shawn-kambo.jpg" />
        </div>
        <h3 class="name">SHAWN KAMBO</h3>
        <h4 class="title">HUMAN RESOURCES</h4>
      </div>
      <div class="person-wrapper col-xs-4">
        <div class="headshot-wrapper">
          <img src="/img/company/paulo.jpg" />
        </div>
        <h3 class="name">PAULO AGELIDIS</h3>
        <h4 class="title">PARTNER</h4>
        <div class="sm">
        </div>
      </div>
      <div class="person-wrapper col-xs-4">
        <div class="headshot-wrapper">
          <img src="/img/company/leviswanky.jpg" />
        </div>
        <h3 class="name">LEVI SWANKY</h3>
        <h4 class="title">TRANSPORTATION</h4>
        <div class="sm">
        </div>
      </div>
      <div class="person-wrapper col-xs-4">
        <div class="headshot-wrapper">
          <img src="/img/company/doug.jpg" />
        </div>
        <h3 class="name">DOUG SHORTT</h3>
        <h4 class="title">SEARCH MARKETING CONSULTANT</h4>
      </div>
      <div class="person-wrapper col-xs-4">
        <div class="headshot-wrapper">
          <img src="/img/company/dean.jpg" />
        </div>
        <h3 class="name">DEAN OSMON</h3>
        <h4 class="title">CASTING DIRECTOR</h4>
      </div>
    </div>
  </div>
  <div class="container-fluid blue-bg" id="contact-us">
    <h5>Request a Consultation</h5>
    <section class="contact-wrap">
      <?php
        if ($_GET["sent"] == "success"){
          echo "<span class='success'>Message successfully sent</span>";
        }
      ?>
      <form action="/contactengine.php" method="post" class="contact-form">
        <div class="col-sm-6">
          <div class="input-block">
            <input name="name" type="text" class="form-control" placeholder="Name" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="input-block">
            <input name="tel" type="text" class="form-control" placeholder="Telephone" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="input-block">
            <input name="company" type="text" class="form-control" placeholder="Company" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="input-block">
            <input name="email" type="email" class="form-control" placeholder="Email" required>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="input-block textarea">
            <textarea name="message" rows="3" type="text" class="form-control" placeholder="Your Message" required></textarea>
          </div>
        </div>
        <div class="col-sm-12 radio">
          <span>Subscribe to our mailing list </span>
          <input type="radio" name="subscribe" value="true" checked="checked"><label>&nbsp;Yes &nbsp;</label>
          <input type="radio" name="subscribe" value="false"><label>&nbsp;Not now&nbsp;</label><br>
        </div>
        <div class="col-sm-12">
          <button class="square-button">Send</button>
        </div>
      </form>
    </section>
</div>