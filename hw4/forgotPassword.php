<?php
include("titlefab.php");
include("h1s.php");
?>
<h1>Forgot Password</h1>
</div>
<?php
$_POST['selected'] = 'signin';
$_POST['menutype'] = 'nonMemberMenuBar';
?>
<div id="menuBarFourCol" class="menuBar">
  <?php
  include("menu.php");
  unset($_POST['selected']);
  unset($_POST['menutype']);
  ?>

  <div id="signInBackgroundPic" class="backgroundPicFormat">
    <select name="accountType" id="accountType">
      <option disabled="disabled" selected="selected">Account Type</option>
      <option value="student">Student</option>
      <option value="tutor/instructor">Tutor/Instructor</option>
    </select>
    <input type="text" id="TutorID" name="TutorID" placeholder="Tutor ID #">
    <input type="text" id="UserName" name="UserName" placeholder="UserName">
    <p>
      <button type="button" onclick="alert('Check the email that you signed up with!')">Tell Me
        My Password!</button>
    </p>
    <p>
      <a href=signin.php>Sign In</a>
      &nbsp;&nbsp;
      <a href=resetPassword.php>Reset Password</a>
    </p>
    <?php include("footer.php"); ?>
  </div>
  </body>

  </html>