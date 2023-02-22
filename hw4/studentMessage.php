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
<div id="menuBarFiveCol" class="menuBar">
  <?php
  include("menu.php");
  unset($_POST['selected']);
  unset($_POST['menutype']);
  ?>
  <div id="studentBackgroundPic" class="backgroundPicFormat formStyle formText">
    <div id="smallerP">
    <p>
      You have one new message!
    </p>
    <details>
      <summary>Messages</summary>
      <p id="newMessage">
        &#128308; 2/4/23: Thanks for coming to my session. I would recommend....
        <span id="extra" class="historyHoverText">practicing print statements. Click on the Practice tab to practice
          them.</span>
      </p>
      <hr>
      <p>
        &nbsp;&nbsp;&nbsp;1/30/23: I hope you learned about the categories of functions....
        <span id="extra" class="historyHoverText">and when to use them.</span>
      </p>
    </details>
    <p>
      Hover over a message to see it in full.
    </p>
    <p>
      To send a mesage to Aaron (your tutor), click click <a href=sendTutorMessage.php>here</a>
    </p>
    <p>
      To see older messages click <a href=olderMessagesS.php>here</a>
    </p>
</div>
  <?php include("footer.php"); ?>
</div>
</body>

</html>