<?php
include 'head2.php';
?>

<body>


<div class="wrapper">
<div class="bannermiddle">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="networks.php">Networks</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</div>
</div>



<div class="container">
  <form id="contact" class="contact animated bounce" action="" method="post">
    <h3>Contact</h3>
    <h4>Enter questions or concerns down below</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>

</body>
</html>
