<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="form-container" id="form-container">
        <h2>Data Form</h2>
        <label for="form" id="label">FORM DATA</label>
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
    <script>
        $(function() {

            $.ajax({
                url: 'db/getDepartments.php',
                method: 'GET',
                data: '',
                dataType: 'json',
                success: function(response) {

                    for (let i = 0; i < response.length; i++) {
                        $('#department_id').append(`<option value="${i}">${response[i].title}</option>`);
                    }

                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                }
            });
        });

    </script>
    <script>
        $('#sbmt-btn').click(
            function(e) {

                e.preventDefault();

                let formData = {
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    phone: $('#phone').val(),
                    email: $('#email').val(),
                    content: $('#content').val(),
                    department_id: $('#department_id').val(),
                };

                $.ajax(
                    url: 'db/post.php',
                    data: formData,
                    success: function(response) {
                         bna
                    }

                )

            }
        );
    </script>
</body>
</html>

