<!-- JavaScript for Auto-Refreshing Comments -->
    $(document).ready(function() {
    // Handle form submission using AJAX
    $('#commentForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: 'json', // Expect JSON response
            success: function(response) {
                console.log(response);
                // Refresh comments container
                $('#commentsContainer').html(response.commentsHtml);
                // Clear the comment textarea
                $('#content').val('');
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});
