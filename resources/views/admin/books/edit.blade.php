@extends('layouts.backend.app')

@section('content')
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2><i class="fa fa-plus"></i> Add Book</h2>
                <ul class="nav navbar-right panel_toolbox">
                <button type="button" class="btn btn-dark primary" onclick="window.location='{{ url("admin/books/create") }}'">Add New Books</button>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form action="{{ url('admin/books/update',$book->id) }}" method="post">
                  {{  csrf_field()}}
                  {{ method_field("PUT") }}
                <div class="row">
                     <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group">
                                 <span class="input-group-btn">
                                   <button type="button"  class="btn btn-default" >Title</button>
                                 </span>
                                 <input name="title" value="{{ $book->title }}" type="text" class="form-control">
                               </div>
                            </div>
   
                             <div class="col-sm-6">
                                <div class="input-group">
                                 <span class="input-group-btn">
                                   <button type="button" class="btn btn-default" >Slug</button>
                                 </span>
                                 <input name="slug" type="text" value="{{$book->slug }}" class="form-control">
                               </div>
                            </div>
                          </div>
                       <div class="row">
                         <div class="col-sm-6">
                             <div class="input-group">
                              <span class="input-group-btn">
                                <button type="button"  class="btn btn-default" >ISBN Number</button>
                              </span>
                              <input name="ISBN" type="text" value="{{ $book->ISBN }}" class="form-control">
                            </div>
                         </div>

                          <div class="col-sm-6">
                             <div class="input-group">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-default" >Code</button>
                              </span>
                              <input name="code" type="text" value="{{ $book->code }}" class="form-control">
                            </div>
                         </div>
                       </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-6">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Book Name</button>
                                  </span>
                                  <input name="bookname" value="{{ $book->bookname }}" type="text" class="form-control">
                                </div>
                             </div>

                              <div class="col-sm-6">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button name="subtitle" type="button" class="btn btn-default" >Sub Title</button>
                                  </span>
                                  <input name="subtitle" value="{{ $book->subtitle }}" type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Category</button>
                                  </span>
                                  <input name="categories" value="{{ $book->categories }}" type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Edition</button>
                                  </span>
                                  <input name="edition"  value="{{ $book->edition }}"  type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Edition Year</button>
                                  </span>
                                  <input name="edition_year" value="{{ $book->edition_year }}" type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Language</button>
                                  </span>
                                  <input name="language_id" value="{{ $book->language_id }}" type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Publisher</button>
                                  </span>
                                  <input name="publisher_id" value="{{ $book->language_id }}" type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Publish Year</button>
                                  </span>
                                  <input name="published_year" value="{{ $book->published_year }}" type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Series</button>
                                  </span>
                                  <input name="series_id" value="{{ $book->series_id }}" type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Author</button>
                                  </span>
                                  <input name="author_id" value="{{ $book->author_id }}" type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Rack Location</button>
                                  </span>
                                  <input name="binding" value="{{ $book->binding }}" type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Price</button>
                                  </span>
                                  <input name="price" value="{{ $book->price }}" type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Total Page</button>
                                  </span>
                                  <input name="pages" value="{{ $book->pages }}" type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Source</button>
                                  </span>
                                  <input name="source" value="{{ $book->source }}" type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Notes</button>
                                  </span>
                                  <input name="notes" value="{{ $book->notes }}" type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Quantity</button>
                                  </span>
                                  <input name="quantity" value="{{ $book->quantity }}" type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Books Status</button>
                                  </span>
                                  <input name="status" value="{{ $book->status }}" type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                         <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-12">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Books Image</button>
                                  </span>
                                  <input name="image" value="{{ $book->image }}" type="file" class="form-control">
                                </div>
                             </div>
                           </div>
                </div>
                <div class="col-sm-12 ">       
                          <button type="button" class="btn btn-warning">Cancel</button>
                          <button type="submit" class="btn btn-success">Save</button>
                        </div>

              </div>
              </form>
            </div>
        </div>
    </div>
@endsection