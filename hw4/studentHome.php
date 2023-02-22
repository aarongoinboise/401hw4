<?php
include("titlefab.php");
include("h1s.php");
?>
<h1>Student Home</h1>
</div>
<?php
$_POST['selected'] = 'studentHome';
$_POST['menutype'] = 'student';
?>
<div id="menuBarFiveCol">
  <?php
  include("menu.php");
  unset($_POST['selected']);
  unset($_POST['menutype']);
  ?>
  <div id="studentBackgroundPic" class="backgroundPicFormat">
    <h2>Welcome Example_Student!</h2>
    <div id="studentHText">
      <p>
        In your last session on 2/4/22... You goofed off and didn't work on stuff.
      </p>
      <p>
        Suggestion from tutor: Be less cringe when you goof off.
      </p>
      <p>
        You have 1 new message from your tutor.
      </p>
      <p>
        Next Tutor Session: 2/24/23 from 2PM-4PM at the Kount Learning Center
      </p>
    </div>
    <?php include("footer.php"); ?>
  </div>
  </body>

  </html>