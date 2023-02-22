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
        <p>
            No older messages exist!
        </p>
        <p>
            To see newer messages click <a href=studentMessage.php>here</a>
        </p>
        <?php include("footer.php"); ?>
    </div>
    </body>

    </html>