<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Comment;

class Controller extends BaseController
{
    public function index() 
    {
        $comments = Comment::all();
 
        return response()->json($comments);
    }

    public function show($id)
    {
        // show 1 comment
        $comment = Comment::find($id);

        return response()->json($comment);
    }

    public function store(Request $request)
    {
        // post user comment to database
         $this->validate($request,[
            'comment' => 'required',
            'created at',
            'visitor',
         ]);
    }
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return response()->json('Successfully deleted comment!');
    }
}
