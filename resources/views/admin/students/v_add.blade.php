@extends('layouts.backend.app')

@section('content')
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2><i class="fa fa-plus"></i> Add Student</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <button onclick="window.location.href = '';" type="button" class="btn btn-primary" data-toggle="modal">Students List</button>
                  </ul>
                <div class="clearfix"></div>
                
              </div>
              <div class="x_content">

                <div class="row">
                     <div class="col-sm-12">
                       <div class="row">
                         <div class="col-sm-6">
                             <div class="input-group">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-default" >ISBN Number</button>
                              </span>
                              <input type="text" class="form-control">
                            </div>
                         </div>

                          <div class="col-sm-6">
                             <div class="input-group">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-default" >Code</button>
                              </span>
                              <input type="text" class="form-control">
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
                                  <input type="text" class="form-control">
                                </div>
                             </div>

                              <div class="col-sm-6">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Sub Title</button>
                                  </span>
                                  <input type="text" class="form-control">
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
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Edition</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Edition Year</button>
                                  </span>
                                  <input type="text" class="form-control">
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
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Publisher</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Publish Year</button>
                                  </span>
                                  <input type="text" class="form-control">
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
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Author</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Rack Location</button>
                                  </span>
                                  <input type="text" class="form-control">
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
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Total Page</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Source</button>
                                  </span>
                                  <input type="text" class="form-control">
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
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                              <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Quantity</button>
                                  </span>
                                  <input type="text" class="form-control">
                                </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="input-group">
                                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" >Books Status</button>
                                  </span>
                                  <input type="text" class="form-control">
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
                                  <input type="file" class="form-control">
                                </div>
                             </div>
                           </div>
                </div>

                 <div class="col-sm-12 ">       
                          <button onclick="window.location.href = '';" type="button" class="btn btn-warning">Cancel</button>
                          <button type="button" class="btn btn-success">Save</button>
                        </div>

              </div>
            </div>
        </div>
    </div>

@endsection
