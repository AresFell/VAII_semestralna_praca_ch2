@extends('components.layout')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('update', ['id' => $post->id]) }}" enctype="multipart/form-data" class="mb-4">
            @csrf
            @method('PUT') <!-- Use the PUT method for updating -->

            <div class="mb-3">
                <label for="formFile" class="form-label col-form-label-lg">Edit your image</label>
                <input class="form-control" name="file" type="file" id="formFile">
            </div>
            <input type="submit" class="btn btn-success pt-1" value="Update">
        </form>
    </div>
@endsection
