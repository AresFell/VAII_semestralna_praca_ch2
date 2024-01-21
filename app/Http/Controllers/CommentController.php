<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use App\Models\Comment;

class CommentController extends Controller
{
    //Save and view comment
    public function store(Request $request, Recipe $recipe)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $comment = $recipe->comments()->create([
            'content' => $request->input('content'),
            'user_id' => $user->id,
        ]);


        $comments = $recipe->comments;
        $commentsHtml = view('recipes.comments', compact('comments'))->render();

        return response()->json(['commentsHtml' => $commentsHtml]);
    }

    //Delete a comment
    public function destroy(Comment $comment){
        $comment->delete();
        return redirect('/');
    }

}
