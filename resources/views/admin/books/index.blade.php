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
                 
                    <button type="button" class="btn btn-dark primary" onclick="window.location='{{ url("admin/books/create") }}'">Add New Books</button>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
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
                      @foreach ($books as $book)
                  <tr>
                    <th>
                     <th><input type="checkbox" id="check-all" class="flat"></th>
                    </th>
                    <th>{{$book->id }}</th>
                    <th>{{$book->title }}</th>
                    <th>{{$book->create_at }}</th>
                    <th>{{$book->author_id }}</th>
                    <th>{{$book->status }}</th>
                    <form action="{{ url('admin/books/destroy',$book->id) }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field("DELETE") }}
                    <td><button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </button>
                      <a href="{{ route('admin.books.edit',$book->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    </td>
                  </form>
                    <!-- <td><?php //echo $row['language'];?></td>
                    <td><?php //echo $row['price'];?></td> -->
                  </tr>
                  @endforeach
                 
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

