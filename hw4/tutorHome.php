<?php
include("titlefab.php");
include("h1s.php");
?>
<h1>Tutor Home</h1>
</div>
<?php
$_POST['selected'] = 'tutorHome';
$_POST['menutype'] = 'tutor';
?>
<div id="menuBarFourCol" class="menuBar">
    <?php
    include("menu.php");
    unset($_POST['selected']);
    unset($_POST['menutype']);
    ?>
    <div id="tutorBackgroundPic" class="backgroundPicFormat">
    <h2>Welcome Tutor 12345!</h2>
        <div id="sTHomeText">
            <p>
                In your last session on 2/4/22... You had 1 person attend your session.
            </p>
            <p>
                You have 1 new message.
            </p>
            <p>
                Next Tutor Session: 2/6/23 from 2PM-4PM at the Kount Learning Center
            </p>
            <p>
                To logout and return to the login page, click <a href=signin.php>here</a>
            </p>
        </div>
        <?php include("footer.php"); ?>
    </div>
    </body>

    </html>