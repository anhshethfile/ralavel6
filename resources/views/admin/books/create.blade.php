@extends('layouts.backend.app')

@section('content')
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2><i class="fa fa-plus"></i> Add Book</h2>
                <ul class="nav navbar-right panel_toolbox">
                <button type="button" class="btn btn-primary" onclick="window.location='{{ url("admin/books/create") }}'">Add New Books</button>
                <button type="button" class="btn btn-dark" onclick="window.location='{{ url("admin/books") }}'">Book List</button>
              </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form action="{{ url('admin/books/store') }}" method="post">
                  @csrf
                <div class="row">
                     <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group">
                                 <span class="input-group-btn">
                                   <button type="button"  class="btn btn-default" required>Title</button>
                                 </span>
                                 <input name="title" type="text" class="form-control">
                               </div>
                            </div>
   
                             <div class="col-sm-6">
                                <div class="input-group">
                                 <span class="input-group-btn">
                                   <button type="button" class="btn btn-default" >Slug</button>
                                 </span>
                                 <input name="slug" type="text" class="form-control">
                               </div>
                            </div>
                          </div>
                       <div class="row">
                         <div class="col-sm-6">
                             <div class="input-group">
                              <span class="input-group-btn">
                                <button type="button"  class="btn btn-default" >Subtitle</button>
                              </span>
                              <input name="subtitle" type="text" class="form-control">
                            </div>
                         </div>

                          <div class="col-sm-6">
                             <div class="input-group">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-default" >ISBN</button>
                              </span>
                              <input name="ISBN" type="number" class="form-control">
                            </div>
                         </div>
                       </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-6">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Series Id</button>
                                  </span>
                                  <input name="series_id" type="number" class="form-control">
                                </div>
                             </div>

                              <div class="col-sm-6">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button name="subtitle" type="button" class="btn btn-default" >Publisher Id</button>
                                  </span>
                                  <input name="publisher_id" type="number" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Published Year</button>
                                  </span>
                                  <input name="published_year" type="number" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Author Id</button>
                                  </span>
                                  <input name="author_id" type="number" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Edition</button>
                                  </span>
                                  <input name="edition" type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Edition Year</button>
                                  </span>
                                  <input name="edition_year" type="number" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Pages</button>
                                  </span>
                                  <input name="pages" type="number" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Binding</button>
                                  </span>
                                  <input name="binding" type="text" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Quantity</button>
                                  </span>
                                  <input name="quantity" type="number" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Price</button>
                                  </span>
                                  <input name="price" type="number" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Language Id</button>
                                  </span>
                                  <input name="language_id" type="number" class="form-control">
                                </div>
                             </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Source</button>
                                  </span>
                                  <input name="source" type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Notes</button>
                                  </span>
                                  <input name="notes" type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                              <div class="input-group">
                               <span class="input-group-btn">
                                 <button type="button" class="btn btn-default" >Categories</button>
                               </span>
                                    <select id="heard" name="categories" class="form-control" required>
                                      <option value="">Choose...</option>
                                      <option value="History Book">History Book</option>
                                      <option value="Ancient Book">Ancient Book</option>
                                      <option value="Romance Book">Romance Book</option>
                                      <option value="Other">Other</option>
                                    </select>       
                             </div>
                          </div>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="row">
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Status</button>
                                  </span>
                                  <input name="status" type="number" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-8">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Image</button>
                                  </span>
                                  <input name="image" type="file" class="form-control">
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