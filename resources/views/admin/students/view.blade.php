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
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                  <button onclick="window.location.href = 'student/create';" type="button" class="btn btn-dark"><i class="fa fa-plus"></i> Add Student</button>
                                <button  onclick="window.location.href = '';" type="button" class="btn btn-dark active"><i class="fa fa-sort-amount-asc"></i> Student Borrow</button>
                                </li>
                              </ul>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>

                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <!-- Large modal -->
                    <button onclick="window.location.href = '';" type="button" class="btn btn-primary" data-toggle="modal">Add</button>

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