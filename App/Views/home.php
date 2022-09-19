

<header>
  <div>
    <div class="h-img">
      <img src="/public/img/avatar-swirl.png" alt="avatar" srcset="widepack avatar swirl">
    </div>
    <div class="h-name">
      <span class="w">Wide</span><span class="p">Pack</span>
    </div>
  </div>

</header>




<main>

  <section class="sectOne"></section>

  <section class="subOne">
    <div class="sub-container">

      <div class="card left">
        <div class="card-header"><?php echo $trans['contact']['admin']; ?></div>
        <div class="card-body">
          <h1><?php echo $trans['forms']['address']; ?></h1>
          <h2>Dreefvelden 56 A</h2>
          <h2>22860 St. Katelijne Waver"</h2>
          <h1><?php echo $trans['forms']['vat']; ?></h1>
          <h2>BE 0881.216.096</h2>
          <h1><?php echo $trans['forms']['email']; ?></h1>
          <h2>info@widepack.be</h2>
          <h1><?php echo $trans['forms']['phone']; ?></h1>
          <h2>+32 (0) 494 63 19 91</h2>
        </div>
      </div>

      <div class="card right">
        <div class="card-header"><?php echo $trans['contact']['wh']; ?></div>
        <div class="card-img">
          <img class="card-img" src="/public/img/widepack-hq.png" alt="widepack HQ" srcset="Widepack HQ">
        </div>
        <div class="card-body">
          <h1><?php echo $trans['forms']['address']; ?></h1>
          <h2>Dreefvelden 56 A</h2>
          <h2>22860 St. Katelijne Waver</h2>
        </div>
    </div>  

  </div>
  <div class="sub-container">
    <h1><?php echo $trans['contact']['sales']; ?></h1>
  </div>
  <div class="sub-container">
    <!-- Denis -->
    <div class="card left">
      <div class="card-img">
        <img src="/public/img/card-denis.svg" alt="business card Denis" srcset="business card Denis">
      </div>
    </div>
     <!-- Mario -->
    <div class="card right">
      <img class="card-img" src="/public/img/card-mario.svg" alt="business card Mario" srcset="business card Mario">
    </div>
  </div>
    
  </section>





  <section class="sectTwo"></section>



  <section class="subTwo">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5014.785393995389!2d4.53723863973751!3d51.06430055607573!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fcbe07dc1e3b349!2sWIDEPACK!5e0!3m2!1snl!2sbe!4v1613566399956!5m2!1snl!2sbe" 
      width="100%" height="630px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </section>



  <section class="sectThree"></section>




  <section class="subThree">
    <div class="left">
      <div class="title">
        <div class="col1">
          <img src="/public/img/avatar-swirl.svg" alt="avatar" srcset="">
        </div>

        <div class="col2">
          <div class="name">WidePack</div>
          <div class="slogan"><?php echo $trans['slogan']; ?></div>
        </div>
        
      </div>
      <div class="content">
        <p><?php echo $trans['contact-content-p-001']; ?></p>
        <p><?php echo $trans['contact-content-p-002']; ?></p>
        <p><?php echo $trans['contact-content-p-003']; ?></p>
      </div>
    </div>
    <div class="right">
      <form>
        <label for="name"><?php echo $trans['forms']['name']; ?>
          <input type="text" id="name" name="name" placeholder="James T Kirk" required>
        </label>
        <label for="email"><?php echo $trans['forms']['email']; ?>
          <input type="text" id="email" name="email" placeholder="JTK@startrek.com" required 
          pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
        </label>
        <label for="phone"><?php echo $trans['forms']['phone']; ?>
          <input type="text" id="phone" name="phone" required placeholder="+32 494 00 00 00">
        </label>
        <label for="message"><?php echo $trans['forms']['message']; ?>
          <textarea name="message" rows="6" required placeholder="Beam me up scotty"></textarea>
        </label>
        <input class="btn expanded" type="submit" value="<?php echo $trans['forms']['send']; ?>">
      </form>
    </div>
  </section>



</main>