<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    
    public function showAllComments()
    {
        //similar to how default index works
        return response()->json("works");
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
