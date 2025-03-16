$(function() {

    $.ajax({
        url: 'db/getDepartments.php',
        method: 'GET',
        data: '',
        dataType: 'json',
        success: function(response) {

            for (let i = 0; i < response.length; i++) {
                $('#department_id').append(`<option value="${i + 1}">${response[i].title}</option>`);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
});