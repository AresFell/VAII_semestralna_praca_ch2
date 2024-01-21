<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class UploadManager extends Controller
{

    //Create function
    public function upload()
    {
        $files = Posts::all();
        return view("/post/upload", compact('files'));
    }

    //Store function
    function uploadPost(Request $request) {
        $file = $request->file("file");
        $name = $file->getClientOriginalName();
        $size = $file->getSize();

        $destinationPath = public_path("postsUpload");

        $file->move($destinationPath, $name);

        $post = new Posts();
        $post->name = $name;
        $post->size = $size;
        $post->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $post = Posts::findOrFail($id);

        // Delete the file from storage
        $filePath = public_path("postsUpload/{$post->name}");
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        // Delete the record from the database
        $post->delete();
        return  redirect('/upload')->with('message', 'Post bol uspesne vymazany!');
    }

    public function edit($id)
    {
        $post = Posts::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Posts::findOrFail($id);

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            // Update the post data
            $newFile = $request->file('file');
            $existingFilePath = public_path("postsUpload/{$post->name}");
            if (file_exists($existingFilePath)) {
                unlink($existingFilePath);
            }
            $newFileName = $newFile->getClientOriginalName();
            $newFileSize = $newFile->getSize();
            $newFile->move(public_path('postsUpload'), $newFileName);

            $post->update([
                'name' => $newFileName,
                'size' => $newFileSize
            ]);
        }
        return redirect('/upload')->with('message', 'Post successfully updated!');
    }
}
