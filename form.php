<?php include('form_process.php'); ?>
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" type="text/css">
<!-- <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css"> -->

<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="form.css" type="text/css">






<div class="container">  
  
  <h3>
     <a href="http://www.affariint.com" class="anchor">
       <i class="fas fa-arrow-left"></i>
       Back
      </a>
     
   </h3>

 
    
  
  <div class="my-form">
    <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h3>Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" name="url" value="<?= $url ?>" tabindex="4" >
      <span class="error"><?= $url_error ?></span>
    </fieldset>
    <fieldset>
      <textarea value="<?= $message ?>" name="message" tabindex="5">
      </textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success ?></div>
  </form>
  </div>

  <div class="image">
    <img src="assets/img/ananta_slider/contact.jpg">
  </div>

  <div class="my-location">
    <div class="headline"><h2>Office</h2></div> 
                <address class="md-margin-bottom-40">
                    <p><strong>Dhaka Factory Office</strong><br />177/1, Road#6,South Bishil, Mirpur-1<br />Dhaka, Bangladesh.<br />Phone: +8801707055444<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />Email:&nbsp;<a href="mailto:affariint.bd@gmail.com">affariint.bd@gmail.com&nbsp;</a><br />Web:&nbsp;<a href="http://affariint.com" target="">www.affariint.com</a><br />FB:&nbsp;<a href="https://www.facebook.com/" target="_blank">Affariint</a></p>
                    <p><br /><strong>Head Office</strong><br />20,Kunipara,Tejgaon Industrial Area ,Dhaka-1208<br />  
                </address>

     <div class="rumman">
       <div class="headline"><h2>Shahadat Hossain Rumman</h2></div> 
       <h3>Chairman</h3>
       <p><strong>+880170705544</strong></p>
     </div> 
     <div class="jishan">
       <div class="headline"><h2>Saif Alam</h2></div> 
       <h4>Director,Commercial</h4>
       <p><strong>+880167057099</strong></p>
     </div> 
     <div class="mustafa">
       <div class="headline"><h2>Golam Mustafa Miron</h2></div> 
       <h4>Managing Director</h4>
       <p><strong>+8801748713042</strong></p>
     </div> 
     <div class="pavel">
       <div class="headline"><h2>H M Pavel</h2></div> 
       <h4>Director,Marketing</h4>
       <p><strong>+8801713016346</strong></p>
     </div>           


  </div>

</div>


  

