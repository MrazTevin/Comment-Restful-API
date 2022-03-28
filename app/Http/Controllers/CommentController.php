<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Traits\UtcTime;
use Illuminate\Support\Facades\DB;


class CommentController extends Controller
{
    
    public function showAllComments($bookid)
    {
        //similar to how default index works

        $comments = DB::select('select * from comments where bookId = ?', [$bookid]);
        $comments = Comment::all();

        return response()->json([
            $comments,
            'commentCounts' => count($comments)
        ]);
    }

    public function createComment(Request $request)
    {
        // validate user input 
        $this->validate($request, [
            "bookid" => 'required',
            "comment" => 'required',
            "visitor" => '',
            "date_added" => ''
        ]);      
        //and add the comment to database
        $comment = new Comment();   
        $timezone = new UtcTime();
    ;
        if($request->filled('bookId') && $request->filled('comment')) {
            $comment->bookid = $request->input('bookid');
            $comment->comment = $request->input('comment');
            $comment->date_added = $timezone->getTime();
            $comment->visitor = $request->ip();
            $comment->save();

        } else  {

                $comment->bookid = $request->input('bookid');
                $comment->comment = $request->input('comment');
                $comment->date_added = $timezone->getTime();
                $comment->visitor = $request->ip();
            
        }

        DB::insert('insert into comments (bookId, comment, date_added, visitor) values (?, ?, ?, ?)', 
            [
                $comment->bookid,
                $comment->comment,
                $comment->date_added,
                $comment->visitor
            ]
        );



    return response()->json($comment,201);

    }

    public function showoneComment($id)
    {
        //
        $comments = Comment::find($id);
        return response()->json($comments);
    }

    // public function update(Request $request, $id)
    // {
    //     //
    // }

 
    public function destroy($id)
    {
        //
        $comments = Comment::find($id);
        $comments->delete();
        return response()->json($comments);
    }
}
