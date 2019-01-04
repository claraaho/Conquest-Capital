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
          <input name="first-name" type="text" class="form-control" placeholder="First Name" required>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="input-block">
          <input name="last-name" type="text" class="form-control" placeholder="Last Name" required>
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