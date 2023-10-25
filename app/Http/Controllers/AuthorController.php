<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show($id)
    {
        $author = Author::with('books')
            ->where('id', $id)
            ->first();
        return view('authors.show' ,compact('author'));
    }
}
