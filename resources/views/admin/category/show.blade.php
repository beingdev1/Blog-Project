@extends('admin.layouts.app')


 @section('main-content')

 <div class="card mb-5 pl-4">
    <div class="card-header">
      
      <i class="fas fa-table"></i>
      Category List Table
     
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="2">
          <thead>
            <tr>
              <th>S.No</th>
              <th> Category Name</th>
              <th>Slug</th>
              <th>Edit</th>
              <th>Delete</th>
              
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>S.No</th>
                <th> Category Name</th>
                <th>Slug</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach( $categories as $category)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td>{{ $category->name }} </td>
              <td>{{ $category->slug }}</td>
              
              <td><div class="button-group-area mt-10">
                  
                  <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                </div>
              </td>
             <td>
                <!-- Delete method-->
              <!-- as in route list we need to define the category id so, -->
              <form id="delete-form-{{ $category->id }}" action="{{ route('category.destroy', $category->id) }}" method="post">

                  {{ csrf_field() }}

                  {{ method_field('DELETE')}}
                </form>
                
                <!-- for alert use if before event -->
                
                <a href=""  onclick="
                
                if(confirm('Are you sure, You want to delete this?'))
                
                      {event.preventDefault();
                           document.getElementById  

                                ('delete-form-{{ $category->id }}').submit();}

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
      <a class="col-lg-offset-6 btn btn-primary text-center" href="{{ route('category.create') }}">Add New Category</a>
    </div>
    
  </div>

      
 @endsection
     

 

