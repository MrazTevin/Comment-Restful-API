<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllComments($bookid)
    {
        //return all comments from database
        $comments = DB::select('select * from comments where bookid = ?', [$bookid]);
        return response()->json([
            'comments' => $comments,
            'commentCount' => count($comments)
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validatation

        $this->validate($request, [
            'bookid' => 'required',
            'comment' => 'required',
            'created_at' => 'required',
            'visitor' => 'required'
        ]);

        $comment = new Comment();

            // check if comment value is present
        if($request->has('comment')) {
                //
            $request->input('bookid');
            $request->ip();
            $request->input('comment');
            $current_date = date(DATE_RFC850); // RETURN DATE IN UTC
            $comment->created_at = $current_date;
        }

           // $comment->comment = $request->input('comment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showOneComment($id)
    {
        // return 1 comment from the table
        $comment = Comment::find($id);
        return response()->json($comment);
    }

  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete comment
        $comments = Comment::find($id);
        $comments->delete();
        return response()->json("deleted comment successfully", 200); 

    }
}
