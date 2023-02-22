<?php
include("titlefab.php");
include("h1s.php");
?>
<h1>Student Roster</h1>
</div>
<?php
$_POST['selected'] = 'roster';
$_POST['menutype'] = 'tutor';
?>
<div id="menuBarFourCol">
    <?php
    include("menu.php");
    unset($_POST['selected']);
    unset($_POST['menutype']);
    ?>
    <div id="tutorBackgroundPic" class="backgroundPicFormat formStyle formText">
        <p>
            No more students!
        </p>
        <p>
            To see your most recent students, click <a href=roster.php>here</a>
        </p>
        <?php include("footer.php"); ?>
    </div>
    </body>

    </html>