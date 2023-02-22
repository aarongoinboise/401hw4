<?php
include("titlefab.php");
include("h1s.php");
?>
<h1>Sign Up</h1>
</div>
<?php
$_POST['selected'] = 'signup';
$_POST['menutype'] = 'nonMemberMenuBar';
?>
<div id="menuBarFourCol">
  <?php
  include("menu.php");
  unset($_POST['selected']);
  unset($_POST['menutype']);
  ?>

  <div id="signUpBackgroundPic" class="backgroundPicFormat formStyle">
    <div id="signUpText">
      <p>
        Please select the type of account you're signing up for:
        <select name="accountType" id="accountType">
          <option disabled="disabled" selected="selected">Account Type</option>
          <option value="student">Student</option>
          <option value="tutor/instructor">Tutor/Instructor</option>
        </select>
      </p>
      <p>
        Please enter an appropriate username. We'll tell you if it's available:
        <input type="text" id="UserName" name="UserName" placeholder="UserName">
      </p>
      <p>
        Please enter a secure password:
        <input type="text" id="Password" name="Password" placeholder="Password">
      </p>
      <p>
        Please reenter the same password you entered above:
        <input type="text" id="ReenterPassword" name="ReenterPassword" placeholder="Reenter Password">
      </p>
      <p>
        Please enter an email address. This will be used for signing in:
        <input type="email" id="email" name="email" placeholder="Ex: Email@provider.net">
      </p>
      <p>
        If you are a tutor, simply write "tutor".
        <br>Otherwise, please provide your tutor's ID number:
        <input type="tutor" id="tutor" name="tutor" placeholder="tutor or tutorID">
      <p>
        Please check your informationg before signing up.&#11014;&#10004;
      </p>
      <button type="button"
        onclick="alert('Success! A link has been sent to your email. Click it to sign in for the first time. Tutors: your ID number will be in this email; take note of it.')">Sign
        Me Up!</button>
      </p>
      <p>
      </p>
    </div>
    <?php include("footer.php"); ?>
  </div>
  </body>

  </html>