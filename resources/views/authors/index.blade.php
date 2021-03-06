@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                  <strong>All author</strong>
                  <button type="button" class="btn btn-sm btn-success float-right" id="createauthor"><i class="fas fa-plus-circle mr-1"></i>create author</button>
                </div>

                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>SL.</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Language</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($authors as $key => $author)
                      <tr>
                        <th scope="row">{{++$key}}.</th>
                        <td><img src="images/{{$author->image}}" alt="{{$author->title}}" class="rounded-circle" width="50px"></td>
                        <td>{{$author->name}}</td>
                        <td>{{$author->country->name}}</td>
                        <td>{{$author->language->name}}</td>
                        <td>
                          <button type="button" class="btn btn-sm btn-info" data-id="{{$author->id}}" id="authorview"><i class="fas fa-eye"></i></button>
                          <button type="button" class="btn btn-sm btn-warning" data-id="{{$author->id}}" id="authoredit"><i class="fas fa-pencil-alt"></i></button>
                          <button type="button" class="btn btn-sm btn-danger" data-id="{{$author->id}}" id="authordelete"><i class="fas fa-trash"></i></button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>

                <div class="card-foter m-auto">
                    {{ $authors->links() }}
                </div>

            </div>
        </div>
    </div>
</div>

@include('authors.modals.createauthor')
@include('authors.modals.editauthor')
@include('authors.modals.viewauthor')
@include('authors.modals.deleteauthor')

@endsection


@section('script')
<script type="text/javascript">

  $(document).on('click', '#createauthor', function(e){
    $('#createauthormodal').modal('show');
  });

  // EDIT author
  $(document).on('click', '#authoredit', function(e){
    $('#authoreditmodal').modal('show');
    var author = $(this).data('id');
    $.get('authors/'+author+'/edit', function(data){
      $('#authoreditmodal form').attr('action', 'authors/'+data.author.id);
      $('#authoreditmodal #name').val(data.author.name);
      $('#authoreditmodal #dateofbirth').val(data.author.dateofbirth);
      $('#editauthorbio').summernote('code', data.author.bio);
      $('#authoreditmodal #authorimageeditpreview').attr('src','images/'+data.author.image);
      $('#authoreditmodal #authorimageeditpreview').attr('alt',data.author.title);

      $('#authoreditmodal #country').val(data.author.country_id);
      $('#authoreditmodal #country').trigger('change');

      $('#authoreditmodal #language').val(data.author.language_id);
      $('#authoreditmodal #language').trigger('change');
    });
  });

  // VIEW author
  $(document).on('click', '#authorview', function(e){
    $('#authorviewmodal').modal('show');
    var author = $(this).data('id');
    $.get('authors/'+author, function(data){
      $('#authorviewmodal #name').html(data.author.name);
      $('#authorviewmodal #country').html(data.author.country.name);
      $('#authorviewmodal #language').html(data.author.language.name);
      $('#authorviewmodal #dateofbirth').html(data.author.dateofbirth);
      $('#viewauthorbio').html(data.author.bio);
      $('#authorviewmodal #authorimageviewpreview').attr('src','images/'+data.author.image);
      $('#authorviewmodal #authorimageviewpreview').attr('alt',data.author.title);
    });
  });

  // DELETE author
  $(document).on('click', '#authordelete', function(e){
    e.preventDefault();
    var delbtntr = $(this).parents('tr');
    var author = $(this).data('id');
    $.get('authors/'+author, function(data){
        $('#authordeletemodal #name').html(data.author.name);
        $('#authordeletemodal button.btn-danger').attr('id','deleteauthor-'+data.author.id);
        $('#authordeletemodal').modal('show');
        $('#deleteauthor-'+data.author.id).on('click', function(e){
          $.ajax({
            type: "DELETE",
            url:'authors/'+data.author.id,
            data: data.author,
            success: function(data){
              delbtntr.remove();
              $('#authordeletemodal').modal('hide');
              toastr.success('Author deleted successfully.')
            },
            dataType: 'json'
          });
        });
      });
  });

  // SUMMERNOTE EDITOR
  $('#createauthorbio').summernote({
     placeholder: 'Author description goes here..',
     height: 200,
     focus: true,
     dialogsInBody: true,
  });
  $('.note-popover').css({'display': 'none'});


  // IMAGE UPLOAD PREVIEW
  function readURL(input, previewid) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $(previewid).attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#authorimageedit").change(function() {
    readURL(this, '#authorimageeditpreview');
  });
  $("#authorimagecreate").change(function() {
    readURL(this, '#authorimagecreatepreview');
  });

</script>
@endsection
