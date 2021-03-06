<?php //pdCompletionForm.php
    require 'header.php';
?>

<section class="container">
    <h1>Professional Development Completion Form</h1>

    <!-- TODO: This action should point to a file that handles the $_POST superglobal
                by testing if all fields are set, and if so, make a SQL call to add
                this submission as a row. -->
    <form method="post" action="pdCompletionForm.php">
        <!-- EMPLOYEE STATUS RADIO BUTTONS -->
        <div class="employeeStatus">
            <p>What is your employee status?</p>
            <input type="radio" name="status" id="full_time" value="full_time">
            <label for="status">Full-time Faculty Member</label><br>
            <input type="radio" name="status" id="adjunct" value="adjunct">
            <label for="status">Adjunct Faculty Member</label><br>
        </div><br>

        <!-- TEXT BOX FOR SESSION NAME --> 
        <div class="sessionName">
            <label for="session">What professional development session or event did you attend?</label>
            <input type="text" name="session" size="30" maxlength="50"><br>
        </div><br>

        <!-- START DATE OF SESSION -->
        <div class="sessionStartDate">
            <label for="date">What day did this session begin?</label>
            <input type="date" name="startDate"><br>
        </div><br>

        <!-- END DATE OF SESSION -->
        <div class="sessionEndDate">
            <label for="date">What day did this session end?</label>
            <input type="date" name="endDate"><br>
        </div><br>

        <!-- ORGANIZATION -->
        <div class="sessionOrg">
            <label for="org">Which organization hosted this session?</label>
            <input type="text" name="org" size="30" maxlength="50"><br>
        </div><br>

        <!-- PRESENTER -->
        <div class="sessionPresenter">
            <label for="presenter">Who was the main presenter?</label>
            <input type="text" name="presenter" size="30" maxlength="50"><br>
        </div><br>

        <!-- DESCRIPTION -->
        <div class="sessionDescription">
            <label for="description">Describe the session you attended and how it relates to your professional development.</label><br>
            <textarea name="description" rows="5" cols="80"></textarea>
        </div><br>
</form>

</section>

<?php 
    require 'footer.php';
?>