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

        $.ajax({
            url: 'db/indexPost.php',
            type: 'POST',
            data: formData,
            success: function (response) {
                console.log('New element has been successfully added to DB.');
                console.log(response);
            }
        });
    }
)