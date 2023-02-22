<?php
include("titlefab.php");
include("h1s.php");
?>
<h1>Reset Password</h1>
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
    <p>
      <select name="accountType" id="accountType">
        <option disabled="disabled" selected="selected">Account Type</option>
        <option value="student">Student</option>
        <option value="tutor/instructor">Tutor/Instructor</option>
      </select>
      <input type="text" id="UserName" name="UserName" placeholder="UserName">
      <input type="text" id="OldPassword" name="OldPassword" placeholder="Old Password">
      <input type="text" id="NewPassword" name="NewPassword" placeholder="New Password">
      <input type="text" id="reenterNewPassword" name="reenterNewPassword" placeholder="Reenter New Password">
    <p>
      <button type="button" onclick="alert('Your password is reset! Please sign with your new password.')">Reset My
        Password!</button>
    </p>
    </p>
    <div>
      <br><a href=signin.php>Sign In</a>
      &nbsp;&nbsp;
      <a href=forgotPassword.php>Forgot Password</a><br>
    </div>
    <?php include("footer.php"); ?>
  </div>
  </body>

  </html>