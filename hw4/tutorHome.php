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
<div id="menuBarFourCol">
    <?php
    include("menu.php");
    unset($_POST['selected']);
    unset($_POST['menutype']);
    ?>
    <div id="tutorBackgroundPic" class="backgroundPicFormat">
        <div id="p">
            <p>
                In your last session on 2/4/22... You had 1 person attend your session.
            </p>
            <p>
                You have 1 new message.
            </p>
            <p>
                Next Tutor Session: 2/6/23 from 2PM-4PM at the Kount Learning Center
            </p>
        </div>
        <?php include("footer.php"); ?>
    </div>
    </body>

    </html>