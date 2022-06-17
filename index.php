<?php include "header.php";?>
                        
      <!-- Breadcrumbs -->
      <!-- <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Contacts</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(./images/ingredients-pics.png);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li class="active">Contacts</li>
          </ul>
        </div>
      </section> -->
      <!-- Contacts-->
      <section class="section section-lg bg-default text-md-left">
        <div class="container">
          <div class="row row-60 justify-content-center">
            <div class="col-lg-8">
              <h4 class="text-spacing-25 text-transform-none">Get in Touch</h4>
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="./contactform.php">
                <div class="row row-20 gutters-20">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-your-name-5" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-your-name-5">Your Name*</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input border border-warning" id="contact-email-5" type="email" name="mail" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email-5">Your E-mail*</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <!--Select 2-->
                      <select class="form-input" name="service" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                        <option value="1">Select a Service</option>
                        <option value="2">Dine-In</option>
                        <option value="3">Carry-Out</option>
                        <option value="4">Event Catering</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-phone-5" type="text" name="phone" data-constraints="@Numeric">
                      <label class="form-label" for="contact-phone-5">Your Phone*</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input border border-warning" id="contact-email-5" type="text" name="subject" data-constraints="@Required">
                      <label class="form-label" for="contact-email-5">Subject</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message-5">Message</label>
                      <textarea class="form-input textarea-lg" id="contact-message-5" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <button class="button button-secondary button-winona" name="submit" type="submit">Contact us</button>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="aside-contacts">
                <div class="row row-30">
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                    <p class="aside-contacts-title">Get social</p>
                    <ul class="list-inline contacts-social-list list-inline-sm">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <!-- <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li> -->
                    </ul>
                  </div>
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                    <p class="aside-contacts-title">Phone</p>
                    <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                      <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                      <div class="unit-body"><a class="phone" href="tel:+2349020721445">09020721445</a></div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                    <p class="aside-contacts-title">E-mail</p>
                    <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                      <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                      <div class="unit-body"><a class="mail" href="mailto:wilyxuz@gmail.com">wilyxuz@gmail.com</a></div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                    <p class="aside-contacts-title">Address</p>
                    <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                      <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                      <div class="unit-body"><a class="address" href="#">Address <br class="d-md-none"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

     <?php include "./footer.php";?>
  </body>
</html>