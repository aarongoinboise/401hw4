<?php
include("titlefab.php");
include("h1s.php");
?>
<h1>Messages</h1>
</div>
<?php
$_POST['selected'] = 'studentMessage';
$_POST['menutype'] = 'student';
?>
<div id="menuBarFiveCol">
  <?php
  include("menu.php");
  unset($_POST['selected']);
  unset($_POST['menutype']);
  ?>

  <div id="studentBackgroundPic" class="backgroundPicFormat formStyle formText">
    <p>
      Today's Date: xx/xx/2023
    </p>
    <p>
      Write a brief message to send to your tutor below:
    </p>
    <p>
      <input type="text" id="Message" name="Message" placeholder="Message">
    </p>
    <p>
      <button type="button" onclick="alert('Your message has been sent!')">Send Message</button>
    </p>
    <p>
      To see newest messages click <a href=studentMessage.php>here</a>
    </p>
    <?php include("footer.php"); ?>
  </div>
  </body>

  </html>