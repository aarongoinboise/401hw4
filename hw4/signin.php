<?php
include("titlefab.php");
include("h1s.php");
?>
<h1>Sign In</h1>
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
      <input type="text" id="UserName" name="UserName" placeholder="UserName">
      &nbsp;&nbsp;
      <input type="text" id="Password" name="Password" placeholder="Password">
    </p>
    <p>
      <button onclick="window.location.href='studentHome.php';"> Student Login</button>
      &nbsp;&nbsp;
      <button onclick="window.location.href='tutorHome.php';">Tutor/Instructor Login</button>
    </p>
    <p>
      <a href=forgotPassword.php>Forgot Password?</a>
      &nbsp;&nbsp;
      <a href=resetPassword.php>Reset Password</a>
    </p>
    <?php include("footer.php"); ?>
  </div>
  </body>

  </html>