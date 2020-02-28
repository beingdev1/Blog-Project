@extends('admin.layouts.app')

@section('headSection')

<link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

@endsection


 @section('main-content')

  
    <div class="card mb-5 pl-4">
      <div class="card-header">
        
        <i class="fas fa-table"></i>
        Tag List Table
       
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="2">
            <thead>
              <tr>
                <th>S.No</th>
                <th> Tag Name</th>
                <th>Slug</th>
                <th>Edit</th>
                <th>Delete</th>
                
              </tr>
            </thead>
            <tfoot>
              <tr>
                  <th>S.No</th>
                  <th> Tag Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
            </tfoot>
            <tbody>
              @foreach( $tags as $tag)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $tag->name }} </td>
                <td>{{ $tag->slug }}</td>
                <td><div class="button-group-area mt-10">
                  
                    <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-primary">Edit</a>
                  </div>
                </td>
               <td>
                  <!-- Delete method-->
                <!-- as in route list we need to define the tag id so, -->
                <form id="delete-form-{{ $tag->id }}" action="{{ route('tag.destroy', $tag->id) }}" method="post">

                    {{ csrf_field() }}

                    {{ method_field('DELETE')}}
                  </form>
                  
                  <!-- for alert use if before event -->
                  
                  <a href=""  onclick="
                  
                  if(confirm('Are you sure, You want to delete this?'))
                  
                        {event.preventDefault();
                             document.getElementById  

                                  ('delete-form-{{ $tag->id }}').submit();}

                    else
                          {event.preventDefault();}" 
                  
                  class="btn btn-primary">Delete</a>
                  
                  <!-- delete end-->
               </td>
               
              </tr>
              
              @endforeach
            </tbody>
          </table>

        
        </div><br>
        <a class="col-lg-offset-6 btn btn-primary text-center" href="{{ route('tag.create') }}">Add New Tag</a>
      </div>
      
    </div>


  
   @endsection
      
 @section('footerSection')

 <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.js') }}'"></script>
  <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
 @endsection  
