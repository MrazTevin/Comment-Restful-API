<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    
    public function showAllComments()
    {
        //similar to how default index works

        $comments = Comment::all();
        return response()->json([
            $comments,
            'commentCounts' => count($comments)
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function showoneComment($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
