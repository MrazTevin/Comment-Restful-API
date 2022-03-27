<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Traits\PickIpTrait;

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
        // validate user input 
        $this->validate($request, [
            "comment" => 'required',
            "bookid" => 'required'
        ]);
        
        //and add the comment to database
        $comment = new Comment();
        $ipAddress = new PickIpTrait();
        $comment->comment = $request->input('comment');
        $comment->bookid = $request->input('bookid');


    }

    public function showoneComment($id)
    {
        //
        $comments = Comment::find($id);
        return response()->json($comments);
    }

    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
        $comments = Comment::find($id);
        $comments->delete();
        return response()->json($comments);
    }
}
