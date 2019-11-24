<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;



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
      //  return "hello World";
        return view('admin.books.index');
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
        //
        $this->validate($request,[
                'title' => 'required',
                'slug' => 'required',
                'subtitle' => 'required',
                'ISBN' => 'required',
                'series_id' => 'required',
                'publisher_id' => 'required',
                'author_id' => 'required',
                'edition' => 'required',
                'published_year' => 'required',
                'pages' => 'required',
                'binding' => 'required',
                'quantity' => 'required',
                'price' => 'required',
                'language_id' => 'required',
                'description' => 'required',
               
        ]);

        return redirect()->route('admin.books.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

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
