@extends('components.layout')

@section('content')
    <div class="container">
        <form method="POST" action="{{route("upload")}}" enctype="multipart/form-data" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label col-form-label-lg">NAHRAJ SVOJ OBRAZOK! </label>
                <input class="form-control" name="file" type="file" id="formFile">
            </div>
            <input type="submit" class="btn btn-success pt-1">
        </form>

        <div class="b-example-divider"></div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($files as $file)
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('postsUpload/'.$file->name) }}" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Post Image">
                        <div class="card-body">
                            <p class="card-text">{{ $file->name }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-success  " onclick="window.location.href='{{ route('edit', ['id' => $file->id]) }}'">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger  " onclick="confirmDelete('{{ $file->id }}')">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            if (confirm('Ste si isty, ze chcete zmazať daný obrázok?')) {
                window.location.href = '/post/delete/' + id;
            }
        }
    </script>
@endsection
