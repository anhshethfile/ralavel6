@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                  <strong>All Series</strong>
                  <button type="button" class="btn btn-sm btn-success float-right" id="createseries"><i class="fas fa-plus-circle mr-1"></i>create series</button>
                </div>

                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>SL.</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($allseries as $series)
                      <tr>
                        <th scope="row">{{$series->id}}.</th>
                        <td>{{$series->name}}</td>
                        <td>{{$series->slug}}</td>
                        <td>
                          <button type="button" class="btn btn-sm btn-info" data-id="{{$series->id}}" id="seriesview"><i class="fas fa-eye"></i></button>
                          <button type="button" class="btn btn-sm btn-warning" data-id="{{$series->id}}" id="seriesedit"><i class="fas fa-pencil-alt"></i></button>
                          <button type="button" class="btn btn-sm btn-danger" data-id="{{$series->id}}" id="seriesdelete"><i class="fas fa-trash"></i></button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>

                <div class="card-foter m-auto">
                    {{ $allseries->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@include('series.modals.createseries')
@include('series.modals.editseries')
@include('series.modals.viewseries')
@include('series.modals.deleteseries')

@endsection


@section('script')
<script type="text/javascript">

  $(document).on('click', '#createseries', function(e){
    $('#createseriesmodal').modal('show');
  });

  // EDIT series
  $(document).on('click', '#seriesedit', function(e){
    $('#serieseditmodal').modal('show');
    var series = $(this).data('id');
    $.get('series/'+series+'/edit', function(data){
      $('#serieseditmodal form').attr('action','series/'+data.series.id);
      $('#serieseditmodal #name').val(data.series.name);
    });
  });

  // VIEW series
  $(document).on('click', '#seriesview', function(e){
    $('#seriesviewmodal').modal('show');
    var series = $(this).data('id');
    $.get('series/'+series, function(data){
      $('#seriesviewmodal #name').html(data.series.name);
    });
  });

  // DELETE series
  $(document).on('click', '#seriesdelete', function(e){
    e.preventDefault();
    var delbtntr = $(this).parents('tr');
    var series = $(this).data('id');
    $.get('series/'+series, function(data){
        $('#seriesdeletemodal #name').html(data.series.name);
        $('#seriesdeletemodal button.btn-danger').attr('id','deleteseries-'+data.series.id);
        $('#seriesdeletemodal').modal('show');
        $('#deleteseries-'+data.series.id).on('click', function(e){
          $.ajax({
            type: "DELETE",
            url:'series/'+data.series.id,
            data: data.series,
            success: function(data){
              delbtntr.remove();
              $('#seriesdeletemodal').modal('hide');
              toastr.success('Series deleted successfully.')
            },
            dataType: 'json'
          });
        });
      });
  });


</script>
@endsection
