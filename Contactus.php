<?php
include('cont.php')
?>
</header>
 
<!--HEADER ENDS-->

 <!--CONTACT FORM BEGINS-->

 <div class="container contact-form">
  <div class="contact-image">
      <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
  </div>
  <form method="post" action="contact.php">
      <h3>Drop Us a Message</h3>
     <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
              </div>
              <div class="form-group">
                  <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
              </div>
              <div class="form-group">
                  <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
              </div> <br> <br>
              
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
              </div>
          </div>
          
      </div> <br>
      
      <div class="form-group">
                  <input type="submit" name="submit" class="btnContact" value="Send Message" />
      </div>
      
  </form>
</div>

<!--CONTACT FORM ENDS-->

<!--FOOTER BEGINS-->

<?php
include('footer.php')
?>