<?php

require_once "inc/header.inc.php";

?>
<head>
    <title></title>
<body>
<div class="container">
    <div class="form-container" id="form-container">
        <label for="form" id="label" class="display-4">Lead input form</label>
        <form method="post" id="form">
            <!-- First Name -->
            <div class="form-group">
                <label for="first_name" class="d-block">First Name</label>
                <input class="form-control w-25" type="text" id="first_name" name="first_name" maxlength="20"> <!-- TODO: add required-->
            </div>

            <!-- Last Name -->
            <div class="form-group">
                <label for="last_name" class="d-block">Last Name</label>
                <input class="form-control w-25" type="text" id="last_name" name="last_name" maxlength="20">  <!-- TODO: add required-->
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label for="phone" class="d-block">Phone</label>
                <input class="form-control w-25" type="text" id="phone" name="phone" maxlength="10" pattern="\d{10}">  <!-- TODO: add required-->
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email" class="d-block">Email</label>
                <input class="form-control w-25" type="email" id="email" name="email" maxlength="50" pattern="[^@\s]+@[^@\s]+\.[^@\s]+">  <!-- TODO: add required-->
            </div>

            <!-- Content -->
            <div class="form-group">
                <label for="content" class="d-block">Content</label>
                <textarea class="form-control w-50" id="content" name="content" rows="1"></textarea>  <!-- TODO: add required-->
            </div>

            <!-- Department -->
            <div class="form-group">
                <label for="department_id" class="d-block">Department</label>
                <select id="department_id" name="department_id">
                    <option value="">Please choose</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="form-group mt-3">
                <button type="button" id="sbmt-btn" class="delete-btn">Submit</button>
            </div>
        </form>
    </div>
</div>

    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/ajax-index-getmethod.js"></script>
    <script src="js/ajax-index-postmethod.js"></script>
</body>
</html>

