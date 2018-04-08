<?php include('form_process.php'); ?>
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" type="text/css">
<!-- <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css"> -->

<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="form.css" type="text/css">


 <div >
   
 </div>




<div class="container">  
  
  <h3>
     <a href="http://www.affariint.com" class="anchor">
       <i class="fas fa-arrow-left"></i>
       Back
      </a>
     
   </h3>

  <div class="row">
    
  
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
    <img src="assets/img/ananta_slider/worker.jpg">
  </div>

  



</div>
</div>

