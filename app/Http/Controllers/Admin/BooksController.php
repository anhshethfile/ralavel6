<?php

namespace App\Http\Controllers\Admin;

use App\Books;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Books::all();
        return view('admin.books.index',compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.books.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      // return $request->all();
    //     $this->validate($request,[
    //         'title' => 'required',
    //         'slug' => 'required',
    //         'subtitle' => 'required',
    //         'ISBN' => 'required',
    //         'categories' => 'required',
    //         'series_id' => 'required',
    //         'publisher_id' => 'required',
    //         'author_id' => 'required',
    //         'edition' => 'required',
    //         'edition_year' => 'required',
    //         'published_year' => 'required',
    //         'pages' => 'required',
    //         'binding' => 'required',
    //         'quantity' => 'required',
    //         'price' => 'required',
    //         'source' => 'required',
    //         'language_id' => 'required',
    //         'description' => 'required',
    //         // 'image' => 'required',
           
    // ]);


   
    $books = new Books();
    $books-> title=$request->title;
    $books-> slug=$request->slug;
    $books-> subtitle=$request->subtitle;
    $books-> ISBN=$request->ISBN;
    $books-> categories=$request->categories;
    $books-> series_id=$request->series_id;
    $books-> publisher_id=$request->publisher_id;
    $books-> author_id=$request->author_id;
    $books-> edition=$request->edition;
    $books-> edition_year=$request->edition_year;
    $books-> publisher_id=$request->publisher_id;
    $books-> published_year=$request->published_year;
    $books-> pages=$request->pages;
    $books-> binding=$request->binding;
    $books-> quantity=$request->quantity;
    $books-> price=$request->price;
    $books-> source=$request->source;
    $books-> status=$request->status;
    $books-> notes=$request->notes;
    $books-> language_id=$request->language_id;

    $books->save();

    return redirect(url('admin/books'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        //
     //   return view('admin.books.show',compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Books::FindOrFail($id);
        return view('admin.books.edit',compact('book'));
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
       // return $id;
        $books = Books::FindOrFail($id);

        $books-> title=$request->title;
        $books-> slug=$request->slug;
        $books-> subtitle=$request->subtitle;
        $books-> ISBN=$request->ISBN;
        $books-> categories=$request->categories;
        $books-> series_id=$request->series_id;
        $books-> publisher_id=$request->publisher_id;
        $books-> author_id=$request->author_id;
        $books-> edition=$request->edition;
        $books-> edition_year=$request->edition_year;
        $books-> publisher_id=$request->publisher_id;
        $books-> published_year=$request->published_year;
        $books-> pages=$request->pages;
        $books-> binding=$request->binding;
        $books-> quantity=$request->quantity;
        $books-> price=$request->price;
        $books-> source=$request->source;
        $books-> status=$request->status;
        $books-> notes=$request->notes;
        $books-> language_id=$request->language_id;
        $books->save();
    
   
    return redirect(url('admin/books'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
	{
        $book = Books::FindOrFail($id);
		$book->delete();
		return redirect()->back();
	// return view('admin.post.index',compact('post'));
	}
}
