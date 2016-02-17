<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{


	public function index()
	{
		$books = Book::all();
		return response()->json($books);
	}

	public function getBook($id)
	{
		$book = Book::find($id);
		return response()->json($book);
	}

	public function createBook(Request $request)
	{
		$book = Book::create($request->all());
		return response()->json($request->all());
	}

	public function updateBook(Request $request, $id)
	{
		$book = Book::find($id)->update($request->all());
		return response()->json($book);
	}

	public function deleteBook($id)
	{
		$book = Book::find($id)->delete();
		return response()->json('deleted');
	}


}
