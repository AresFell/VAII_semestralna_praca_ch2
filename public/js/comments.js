$(document).ready(function() {
    $('#commentForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                console.log(response);
                // refresh comments container
                $('#commentsContainer').html(response.commentsHtml);
                // clear the comment textarea
                $('#content').val('');
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});
