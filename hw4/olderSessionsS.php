<?php
include("titlefab.php");
include("h1s.php");
?>
<h1>Session History</h1>
</div>
<?php
$_POST['selected'] = 'sessionHistory';
$_POST['menutype'] = 'student';
?>
<div id="menuBarFiveCol" class="menuBar">
  <?php
  include("menu.php");
  unset($_POST['selected']);
  unset($_POST['menutype']);
  ?>
  <div id="tutorBackgroundPic"  class="backgroundPicFormat formStyle formText">
    <p>
      No older sessions exist!
    </p>
    <p>
      To see newer sessions click <a href=sessionHistory.php>here</a>
    </p>
    <?php include("footer.php"); ?>
  </div>
  </body>

  </html>