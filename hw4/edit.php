<?php
include("titlefab.php");
include("h1s.php");
?>
<h1>Edit</h1>
</div>
<?php
$_POST['selected'] = 'edit';
$_POST['menutype'] = 'tutor';
?>
<div id="menuBarFourCol" class="menuBar">
    <?php
    include("menu.php");
    unset($_POST['selected']);
    unset($_POST['menutype']);
    ?>
    <div id="tutorBackgroundPic" class="backgroundPicFormat">
        <div id="formText">
            <p>
                Select the type of edit you would like to make:
                <select>
                    <option disabled="disabled" selected="selected">Type of Edit</option>
                    <option value="session">Session</option>
                    <option value="practice">Practice</option>
                </select>
            </p>
            <p>
                Enter the student username:
                <input type="text" id="UserName" name="UserName" placeholder="UserName">
            </p>
            <p>
                Enter a description of the event:
                <input type="text" id="Description" name="Description" placeholder="Description">
            </p>
            <p>
                Enter the date that this event will take place (2 digit month/2 digit day/ 2 digit year):
                <input type="text" id="Description" name="Description" placeholder="ex: 02/22/23">
            </p>
            <hr>
            <p>
                If editing Practice, enter the practice question:
                <input type="text" id="Question" name="Question" placeholder="ex: What is a computer">
            </p>
            <p>
                Enter possible answers, leaving a '+' next to correct answers, and ',' in between each option:
                <input type="text" id="Answers" name="Answers" placeholder="A fruit,A dog,A machine">
            </p>
            <hr>
            <p>
                Please check your information before overwriting your event.&#11014;&#10004;
            </p>
            <button type="button"
                onclick="alert('Your event has been saved.')">Submit Event</button>
        </div>
        <?php include("footer.php"); ?>
    </div>
    </body>

    </html>