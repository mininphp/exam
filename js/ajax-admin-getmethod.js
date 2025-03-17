$(function() {

    $.ajax({
        url: 'db/getLeads.php',
        method: 'GET',
        data: '',
        dataType: 'json',
        success: function(response) {

            for (let i = 0; i < response.length; i++) {
                $('#admin-table')
                    .append(`<tr>
                                <td class="row-id">${response[i].id}</td>    
                                <td>${response[i].first_name}</td>
                                <td>${response[i].last_name}</td>
                                <td>${response[i].phone}</td>
                                <td>${response[i].email}</td>                                 
                                <td>${response[i].content}</td>
                                <td>${response[i].title}</td>
                                <td><button class='delete-btn'>Delete</button></td>
                             </tr>`);
                console.log(response);
            }
        },
        error: function(xhr, status, error) {
            console.error('Minin: Error fetching data:', error);
        }
    });
});