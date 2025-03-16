$(document).on('click', '.delete-btn', function() {
    let row = $(this).closest('tr');
    let id = row.find('.row-id').text();

    $.ajax({
        url: 'db/deleteLead.php', // Your PHP script to handle deletion
        type: 'POST',
        data: { id: id },
        success: function(response) {
            alert(response);
            row.remove();
        }
    });
// console.log(id);
});
