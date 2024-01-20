<!-- resources/views/recipes/comments.blade.php -->

    <div class="col-md-6">
        <!-- Left column for user names -->
        @foreach($comments as $comment)
            <div>
                <p><strong>{{ $comment->user->name }}:</strong></p>
            </div>
        @endforeach
    </div>
    <div class="col-md-6">
        <!-- Right column for comments content -->
        @foreach($comments as $comment)
            <div>
                <p>{{ $comment->content }}</p>
            </div>
        @endforeach
    </div>
