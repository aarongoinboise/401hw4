<?php
include("titlefab.php");
include("h1s.php");
?>
<h1>About</h1>
</div>
<?php
$_POST['selected'] = 'about';
$_POST['menutype'] = 'nonMemberMenuBar';
?>
<div id="menuBarFourCol" class="menuBar">
  <?php
  include("menu.php");
  unset($_POST['selected']);
  unset($_POST['menutype']);
  ?>

  <div id="aboutBackgroundPic" class="backgroundPicFormat">
    <div id="smallerP">
      <p>
        This site is for students and tutors who appreciate a warm and fuzzy approach to tutoring.
        Whether you want to keep track of your sessions, or to simply practice all
        the wonderful things you've learned, you've come to the right place!&#129395;
      </p>
      <p>
        If you're a tutor or instructor, you can sign up by clicking the "Sign Up" button above.
        Any student you work with can sign up by using the ID number that is provided to you.
        This will allow you to keep track of everyone you work with.&#128104;&#8205;&#127979;
      </p>
      <p>
        If you're a student, you can sign up by using your tutor's (or instructor's) ID number.
        This will allow you to leave feedback, record sessions, and do all of the wonderful things
        that will allow you to blossom as a student.&#128526;
      </p>
      <p>
        Have fun! Learn lots!&#129299;
      </p>
    </div>
    <?php include("footer.php"); ?>
  </div>
  </body>

  </html>