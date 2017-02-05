<?php require_once('header.php'); ?>

        <section class="bread-crumb-container">
          <div class="bread-crumb-img">
            <img src="images/bread-crumb4.png" alt="">
          </div>
          <div class="bread-crumb-content">
            <div class="bread-crumb-inner">
              <h2>contact</h2>
              <a href="index.html">Home</a> - <a href="contact.html">Contact</a>
            </div>
          </div> <!-- bread-crumb-content -->
        </section> <!-- bread-crumb-container -->
        <div class="main-part">
          <section class="shedule-container contact-container">
            <div class="shedule-part">
              <div class="container">
                <div class="shedule-left">
                  <h2>Contact us</h2>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <div class="row contact-bottom">
                    <div class="col-md-4 col-sm-12 col-xs-12 contact-add-left">
                      <div class="contact-add-inner">
                        <span>Address</span>
                        <p>Houston, Texas, USA</p>
                      </div>
                      <div class="contact-add-inner">
                        <span>Phone</span>
                        <a href="javascript:;">(713) 679-3802</a>
                      </div>
                      <div class="contact-add-inner">
                        <span>Email</span>
                        <a href="mailto:thecubanspottruck@gmail.com ">thecubanspottruck@gmail.com </a>
                      </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12 contact-add-right">
                      <form name="contact-form" method="post" action="functions.php">
                        <div class="alert-container">
                          <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                            <span class="alert-message"></spna>
                          </div>
                        </div>
                        <div class="form-field">
                          <input name="full_name" placeholder="* Name" type="text" required>
                        </div> <!-- form-field -->
                        <div class="form-field">
                          <input name="email_address" placeholder="* Email" type="email" required>
                        </div> <!-- form-field -->
                        <div class="form-field">
                          <textarea name="message" placeholder="* comment" required></textarea>
                        </div> <!-- form-field -->
                        <div class="form-field">
                          <button class="btn-black">Send message</button>
                        </div> <!-- form-field -->
                      </form>                   
                    </div>
                  </div>
                </div>
                <div class="shedule-right">
                  <img src="images/shedule-bg.jpg" alt="">
                  <div class="shedule-content">
                    <h2>Our Shedule</h2>
                    <h3>Food truck</h3>
                    <div class="shedule-inside">
                      <h6>Monday-Friday: 800<sup>00</sup> - 2000<sup>00</sup></h6>
                      <h6>Saturday: 900<sup>00</sup> - 1700<sup>00</sup></h6>
                      <h6>Sunday: closed</h6>
                    </div>
                    <h3>Catering</h3>
                    <div class="shedule-inside">
                      <h6>Monday-Friday: 800<sup>00</sup> - 2400<sup>00</sup></h6>
                      <h6>Saturday: 900<sup>00</sup> - 2200<sup>00</sup></h6>
                      <h6>Sunday: closed</h6>
                    </div>
                    <div class="free-juice">
                      <p>*Daily first 5 clients receive a free juice</p>
                    </div>
                    <div class="glass">
                      <img src="images/glass.png" alt="">
                    </div>
                  </div> <!-- shedule-content -->
                </div>
              </div> <!-- container -->
            </div> <!-- shedule-part -->
          </section> <!-- shedule-container -->          
          <div class="map-outer">
            <div id="truck-locator"></div>
          </div>
        </div> <!-- main-part -->

<?php require_once('footer.php'); ?>