<?php
include("titlefab.php");
include("h1s.php");
?>
<h1>Messages</h1>
</div>
<?php
$_POST['selected'] = 'tutorMessage';
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
            No older messages exist!
        </p>
        <p>
            To see newer messages click <a href=tutorMessage.php>here</a>
        </p>
        <?php include("footer.php"); ?>
    </div>
    </body>

    </html>