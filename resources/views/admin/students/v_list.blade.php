@extends('layouts.backend.app')

@section('content')
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bar-chart"></i> All Student Information</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <button onclick="window.location.href = '';" type="button" class="btn btn-primary" data-toggle="modal">Add New</button>
                    </ul>
                    <div class="clearfix"></div>

                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <!-- Large modal -->
                   

                    </div>
                  
                      <thead>
                        <tr>
                          <th>
                           <th><input type="checkbox" id="check-all" class="flat"></th>
                          </th>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Borrow Type ID</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>
                           <th><input type="checkbox" id="check-all" class="flat"></th>
                          </th>
                          <td>id</td>
                          <td>title</td>
                          <td>date</td>
                          <td><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endsection