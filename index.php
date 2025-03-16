<?php

require_once "inc/header.inc.php";

?>
    <title>Document</title>
</head>
<body>
    <div class="form-container" id="form-container">
        <label for="form" id="label" class="display-4">Lead input form</label>
        <form method="post" id="form">
            <!-- First Name -->
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" maxlength="20"> <!-- TODO: add required-->
            </div>

            <!-- Last Name -->
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" maxlength="20">  <!-- TODO: add required-->
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" maxlength="10" pattern="\d{10}">  <!-- TODO: add required-->
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" maxlength="50" pattern="[^@\s]+@[^@\s]+\.[^@\s]+">  <!-- TODO: add required-->
            </div>

            <!-- Content -->
            <div class="form-group">
                <label for="content" id="label-1">Content</label>
                <textarea id="content" name="content" rows="5"></textarea>  <!-- TODO: add required-->
            </div>

            <!-- Department -->
            <div class="form-group">
                <label for="department_id">Department</label>
                <select id="department_id" name="department_id">
                    <option value="">Please choose</option>
<!--                    <option value="1">Sales</option>-->
<!--                    <option value="2">Customer Service</option>-->
                </select>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="button" id="sbmt-btn">Submit</button>
            </div>
        </form>
    </div>

    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/ajax-index-getmethod.js"></script>
    <script src="js/ajax-index-postmethod.js"></script>
</body>
</html>

