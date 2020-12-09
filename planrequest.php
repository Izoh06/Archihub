<?php
include('cont.php')
?>
</header>
 
<!--HEADER ENDS-->

<br>
 <div class="container contact-form">
    <div class="contact-image mt-5">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>
    <form name="form" method="post" action="plan.php">
        <h3>In need of plan? Give us the details below</h3>
      <div class="row">
        <div class="col-md-6">
        <label>Name:</label><br>
        <div class="form-group">
        <input type="text" name="name" class="form-control" required placeholder="your name">
      </div><br>

      <div>
          <label>Email:</label><br>
          <input type="Email" name="email" class="form-control" placeholder="you@gmail.com">
      </div><br>
  
      <div>
        <label>Phone:</label><br>
        <input type="Number" name="phone" class="form-control" required placeholder="+2547XXXXXXXX">
      </div><br>

      <div>
          <label>Bedrooms:</label><br>
          <select name="bedrooms" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5+">5+</option>
          </select>
        </div><br>
      
      <div>
        <label>Living Rooms:</label><br>
        <select name="livingrooms" class="form-control">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3+">3+</option>
        </select>
      </div><br>

      <div>
          <label>Dining Rooms:</label><br>
          <select name="diningrooms" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3+">3+</option>
          </select>
        </div><br>
      
      <div>
        <label>Kitchens:</label><br>
      <select name="kitchens" class="form-control">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4+">4+</option>
      </select>
      </div><br>

      <div>
          <label>Water Closets:</label><br>
          <select name="closets" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5+">5+</option>
          </select>
        </div><br>
      
      <div>
        <label>Showers:</label><br>
        <select name="showers" class="form-control">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5+">5+</option>
        </select>
      </div><br>

      <div>
          <label>Enter Plot Size</label> 
          <input type="text" name="size" class="form-control"><br>
        </div><br>

      <div class>
        <b>Description</b><br>
      </div>
      <div>
        <textarea rows="5" cols="50" name="description" class="form-control"></textarea><br>
      </div><br>

      <div class="form-group">
        <input type="submit" name="btnSubmit" class="btnContact" value="Send" />
    </div> 

      
    </div> 
    </div> <br> 
    
    </form>
  </div><br>

<!--FOOTER BEGINS-->

<?php
include('footer.php')
?>