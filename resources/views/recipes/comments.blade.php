    <div class="col-md-12">
        @foreach($comments as $comment)
            <div class="row comment-container">
                <div class = "col-md-6">
                    <!-- Left column for user names -->
                    <p><strong>{{ $comment->user->name }}:</strong></p>
                </div>
                <div class="col-md-4">
                    <!-- Right column for comments content -->
                    <p>{{ $comment->content }}</p>
                </div>

                <div class="col-md-2">
                    <form action="{{ route('comments.destroy', ['comment' => $comment]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger py-1" type="submit">Vymaž komentar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
