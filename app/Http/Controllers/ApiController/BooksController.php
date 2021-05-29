<?php

namespace App\Http\Controllers\ApiController;

use App\Models\Books;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BookType;
use PhpParser\Node\Stmt\TryCatch;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  this function will fetch data by book_type_id  Ex: if booktype is english id will be '1'
    public function index($book_type=null)
    {
            try {
                // $books=Books::with('categories','booksType')->get();
                // $book_types=Books::where('book_type_id','=',$book_type)->with('categories','booksType')->get();
                //       return $book_type?$books:$book_types;

                      if($book_type ==null){
                          return Books::with('categories','booksType')->get();
                      }
                      else{
                         return  Books::where('book_type_id','=',$book_type)->with('categories','booksType')->get();
                      }


            }


            catch (\Throwable $th) {
                return 'Server not Found please check your Internet Connection';
            }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
