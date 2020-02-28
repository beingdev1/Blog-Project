@extends('admin.layouts.app')

@section('headSection')
<link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('admin/css/sb-admin.css') }}" rel="stylesheet">


@endsection
 @section('main-content')
<div id="wrapper">
 
  <div class="card mb-5 pl-4">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Post List Table</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="2">
          <thead>
            <tr>
              <th>S.No</th>
              <th>Title</th>
              <th>Subtitle</th>
              <th>Slug</th>
              <th>Body</th>
              <th>Created At</th>
              
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>S.No</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Slug</th>
                <th>Body</th>
                <th>Created At</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach( $posts as $post)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->subtitle }}</td>
              <td>{{ $post->slug }}</td>
              <td>{{ $post->body }}</td>
              <td>$320,800</td>
              <td>
                <div class="button-group-area mt-10">
                  
                  <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                </div>
                </td>
                  
              <td>
                <!-- Delete method-->
                <!-- as in route list we need to define the post id so, -->
                  <form id="delete-form-{{ $post->id }}" action="{{ route('post.destroy', $post->id) }}" method="post">

                    {{ csrf_field() }}

                    {{ method_field('DELETE')}}
                  </form>
                  
                  <!-- for alert use if before event -->
                  
                  <a href="" 
                  onclick="
                  
                  if(confirm('Are you sure, You want to delete this?'))
                  
                        {event.preventDefault();
                             document.getElementById  

                                  ('delete-form-{{ $post->id }}').submit();}

                    else
                          {event.preventDefault();}" 
                  
                  class="btn btn-primary">Delete</a>
                  
                  <!-- delete end-->
              </td>
            </tr>
            
            @endforeach
          </tbody>
        </table>
      </div>
    
    <a class="col-lg-offset-6 btn btn-primary text-center" href="{{ route('post.create') }}">Add New Post</a>
    
  </div>
</div>
 @endsection

 @section('footerSection')

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.js') }}'"></script>
  <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('admin/js/sb-admin.min.js') }}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{  asset('admin/js/demo/datatables-demo.js') }}"></script>

   
 @endsection
     

 

