@extends('layouts.admin')

@section('content')

    <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2><i class="fa fa-users"></i> All lists of Users</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role </th>
                      <th>Status</th>
                      <th>Create Date</th>
                      <th>Update Date</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach ($data['users'] as $student)




                    <tr>
                      <td>{{ $student->id }}</td>
                      <td>{{ $student->name }}</td>
                      <td>{{ $student->email }}</td>
                      <td>
                        @php
                            $roles = App\role::where('id', $student->role_id)->get('name');
                        @endphp

                        @foreach ($roles as $role)
                            {{$role->name}}
                        @endforeach
                      
                      </td>
                      <td>{{ $student->is_active ==1 ? 'Active' : 'Not Active ' }}</td>
                      <td>{{ $student->created_at->diffForHumans() }}</td>
                      <td>{{ $student->updated_at->diffForHumans()}}</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
