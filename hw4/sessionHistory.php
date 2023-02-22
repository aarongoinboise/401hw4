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
      <details>
        <summary>Date and Session Description</summary>
        <p>
          1/30/23: Worked on HW1 and learned...
          <span id="extra" class="historyHoverText">about the categories of functions</span>
        </p>
        <hr>
        <p>
          2/4/23: I made methods for my Cache class...
          <span id="extra" class="historyHoverText">which means I'm a life winner!</span>
        </p>
      </details>
      <p>
        Click on the "►" to see your sessions.
      </p>
      <p>
        Hover over a session date to see more info.
      </p>
      <p>
        To see older sessions click <a href=olderSessionsS.php>here</a>
      </p>
    </div>
    <?php include("footer.php"); ?>
  </div>
  </body>

  </html>