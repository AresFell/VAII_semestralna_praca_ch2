@extends('components.layout')

@section('content')
    <!-- Recipe details -->
    <div class="container">
        <div class="recipe">
            <h2>
                {{$recipe['title']}}
            </h2>
            <ul>
                @foreach (explode(', ', $recipe->ingredients) as $ingredient)
                    <li>{{ $ingredient }}</li>
                @endforeach
            </ul>
            <p>Postup:</p>
            <ol>
                @foreach (explode('. ', $recipe->instructions) as $instruction)
                    <li>{{ $instruction }}</li>
                @endforeach
            </ol>
        </div>

        <!-- Edit and Delete buttons -->
        <div class="mt-4">
            <a href="/recipes/{{$recipe->id}}/edit" class="btn btn-success w-100 py-2" tabindex="-1" role="button">Edituj</a>
            <form method="POST" action="/recipes/{{$recipe->id}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger w-100 py-2" type="submit">Vymaž</button>
            </form>
        </div>

        <!-- Add Comment Form -->
        <div class="mt-4">
            <h2>Pridaj komentár</h2>
            <form id="commentForm" method="post" action="{{ route('comments.store', $recipe->id) }}">
                @csrf
                <div class="form-group">
                    <label for="content">Comment:</label>
                    <textarea class="form-control" name="content" id="content" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Pridaj</button>
                </div>
            </form>
        </div>

        <!-- Display Comments -->
            <div class="mt-4">
                <h2>Komenty</h2>
                <div class="row" id="commentsContainer">
                    <div class="col-md-6">
                        <!-- Left column for user names -->
                        @foreach($recipe->comments as $comment)
                            <div>
                                <p><strong>{{ $comment->user->name }}:</strong></p>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        <!-- Right column for comments content -->
                        @foreach($recipe->comments as $comment)
                            <div>
                                <p>{{ $comment->content }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>

    <script src="/js/comments.js"></script>
@endsection
