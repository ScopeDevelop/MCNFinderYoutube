<?php
include 'head.php';
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

<div class="bannerlong">
  <h1>Find Youtube Networks</h1>
  <h3>Choose from the selection of networks to see if you qualify</h3>
  <h4><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Enter below to check stats of a channel, or click networks above to begin</h4>
</div>

<p id="channelname"></p>
<p id="channelimage"></p>
<br>
<div id="subcount" class="subcount animated fadeInLeft"></div>
<div id="viewcount" class="viewcount animated fadeInRight"></div>
<input type="text" id="channelinput" placeholder="Please Enter Channel ID">
<br>
<button id="channelsubmit">Submit</button>

</body>
</html>
