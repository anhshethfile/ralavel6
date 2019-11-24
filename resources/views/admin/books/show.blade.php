@extends('layouts.backend.app')
@section('content')

 
      <div class="">
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Borrow Book<small>Users</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <button type="button" class="btn btn-primary fa  fa-plus-square
                    " data-toggle="modal" data-target=".bs-example-modal-lg"> Add Book</button>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <!-- <p class="text-muted font-13 m-b-30">
                  The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                </p> -->

              <table id="datatable-buttons" class="table table-striped table-bordered">
                <!-- Large modal -->
                <thead>
                  <tr>
                    <th>
                     <th><input type="checkbox" id="check-all" class="flat"></th>
                    </th>
                    <th>ID</th>
                    <th>Book Title</th>
                    <th>Entry Date</th>
                    <th>Author</th>
                    <th>Join Authors</th>
                    <th>Action</th>
                    <!-- <th>language</th>
                    <th>price</th> -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>
                     <th><input type="checkbox" id="check-all" class="flat"></th>
                    </th>
                    <th>ID</th>
                    <th>Book Title</th>
                    <th>Entry Date</th>
                    <th>Author</th>
                    <th>Join Authors</th>
                    <td><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    </td>
                    <!-- <td><?php //echo $row['language'];?></td>
                    <td><?php //echo $row['price'];?></td> -->
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        <!-- /page content -->
@endsection

