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
        <div id="smallerP">
            <p>
                You have one new message!
            </p>
            <details>
                <summary>Messages</summary>
                <p id="newMessage">
                    &#128308; From Example_Student on 2/4/23: You changed my life through tutoring....
                    <span id="extra" class="historyHoverText">and I wish I didn't goof off as much.</span>
                </p>
            </details>
            <p>
                Hover over a message to see it in full.
            </p>
            <p>
                To send a mesage to a Student, click <a href=sendStudentMessage.php>here</a>
            </p>
            <p>
                To see older messages click <a href=olderMessagesT.php>here</a>
            </p>
        </div>
        <?php include("footer.php"); ?>
    </div>
    </body>

    </html>