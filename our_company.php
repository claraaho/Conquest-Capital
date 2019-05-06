<div class="next our-company-page">
  <div class="blue-splash container-fluid">
    <h2>The Company</h2>
    <div class="our-company-grid">
      <div class="person-wrapper col-xs-12">
        <div class="headshot-wrapper">
          <img src="/img/conquest/headshot-connor.JPG" />
        </div>
        <h3 class="name">Connor Yuen</h3>
        <h4 class="title">Managing Partner</h4>
      </div>
      <div class="person-wrapper col-xs-12">
        <div class="headshot-wrapper">
          <img src="/img/conquest/headshot-alson.jpeg" />
        </div>
        <h3 class="name">Alson Niu</h3>
        <h4 class="title">Managing Partner</h4>
      </div>
    </div>
  </div>
  <div class="container-fluid blue-splash partners-container">
    <h2>Our Partners</h2>
    <div class="col-xs-12 col-sm-4 partners-item">
      <div class="partners-wrapper">
        <div class="logo-wrapper">
          <a href="https://tracerdigital.ca/">
            <img src="/img/conquest/logo-tracerdigital.png" />
          </a>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4 partners-item">
      <div class="partners-wrapper">
        <div class="logo-wrapper">
          <a href="https://evolvebranding.ca/">
            <img src="/img/conquest/logo-evolve.png" />
          </a>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4 partners-item">
      <div class="partners-wrapper">
        <div class="logo-wrapper">
          <a href="https://agea-bc.ca/">
            <img src="/img/conquest/logo-agea.png" />
          </a>
        </div>
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