<?php
$pages;
if ($_POST['menutype'] == "nonMemberMenuBar") {
  $pages = array("Home" => "home", "Sign In" => "signin", "Sign Up" => "signup", "About" => "about");
} elseif ($_POST['menutype'] == "student") {
  $pages = array("Home" => "studentHome", "Session History" => "sessionHistory", "Record Session" => "recordSession", "Messages&nbsp;&#128233;" => "studentMessage", "Practice" => "practiceS");
} else {
  $pages = array("Home" => "tutorHome", "Roster" => "roster", "Edit" => "edit", "Messages&nbsp;&#128233;" => "tutorMessage");
}
foreach ($pages as $key => $val) {
  $selected = false;
  if ($val == $_POST['selected']) {
    $selected = true;
    ?>
    <span id="menuBarItemSelected">
    <?php
  }
  ?>
    <div class="menuBarItem"><a href=<?php echo $val . ".php" ?>><?php echo $key ?></a></div>
    <?php
    if ($selected == true) {
      ?>
    </span>
  <?php
    }
}
?>