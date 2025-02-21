<?php include"includes/header.php"; ?>

        
        
         <!-- Page Header Start -->
    <div class="page-header-contact">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- <h2>Contact Us</h2> -->
          </div>
        </div>
      </div>
    </div>
      <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="contact-img">
                    <img src="img/19.jpeg" alt="Image">
                </div>
                <div class="contact-form"> 
    <div id="success"></div>
    <form name="sentMessage" id="contactForm" method="POST" action="submit.php" novalidate="novalidate">
        <div class="control-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
            <p class="help-block text-danger"></p>
        </div>
        <div class="control-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
            <p class="help-block text-danger"></p>
        </div>
        <div class="control-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
            <p class="help-block text-danger"></p>
        </div>
        <div class="control-group">
            <textarea class="form-control" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
            <p class="help-block text-danger"></p>
        </div>
        <div>
            <button class="btn btn-custom" type="submit" id="sendMessageButton" name="sendMessageButton">Send Message</button>
        </div>
    </form>
</div>

            </div>
        </div>
        <!-- Contact End -->


        <?php include"includes/footer.php"; ?>