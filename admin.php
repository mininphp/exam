<?php

require "inc/header.inc.php";

?>
        <label for="admin-table" class="display-4">Leads table</label>
        <table id="admin-table" class="table">
            <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Content</th>
                <th>Department</th>
                <th>Action</th>
            </thead>
            <tbody id="tbody">
            </tbody>
        </table>
        <script src="js/jquery-3.7.1.js"></script>
        <script src="js/ajax-admin-getmethod.js"></script>
        <script src="js/ajax-delete-button.js"></script>
    </body>
</html>


