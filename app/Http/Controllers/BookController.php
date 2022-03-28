<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    
    public function showBooks() {
        
        // Get all books from external API
        $bookApiResponse = Http::get($this->bookUrl .'books');

        // list book data
        $books = json_decode($bookApiResponse->body());
        $id = 0;

        // get individual data items
        foreach ($books as $book) {

            $id = ++$id;

            $comments = $this->fetchComments($id);

            $bookList = (object) [
                'id' => $id,
                'title' => $book->name,
                'authors' => $book->authors, 
                'commentCount' => $comments->commentCount,
                'comments' => $comments->comments, 
                'characters' => $book->characters 
            ];

            $response[] = $bookList;
            
        }
        
        // Return response with above data
        return response()->json([
            'books' => $response
        ]);

    }

    
    private function fetchComments($bookId) {

        $comments = DB::select('select * from comments where bookId = ?', [$bookId]);

        $commentIndices = array();

        foreach ($comments as $comment) {
            $commentIndices[] = $comment->id;
        }

        return (object) [
            'comments' => $commentIndices,
            'commentCount' => count($comments)
        ];
    }
}
