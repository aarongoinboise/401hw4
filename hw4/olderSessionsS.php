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
  <div id="studentBackgroundPic" class="backgroundPicFormat">
    <div id="smallerP">
      <p>
        No older sessions exist!
      </p>
      <p>
        To see newer sessions click <a href=sessionHistory.php>here</a>
      </p>
    </div>
    <?php include("footer.php"); ?>
  </div>
  </body>

  </html>