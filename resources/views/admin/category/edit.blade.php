@extends('admin.layouts.app')

@section('main-content')

<div class="comment-form-wrap pl-5">
        <h3 class="mb-5 pl-4">Edit Category</h3>
    
        @include('includes.messages')

         <!--we dont want it to go to store but it must go to update  and also we need id -->
         <form action="{{ route('category.update',$category->id) }}" method="post" class="p-3 p-md-5 bg-light">
         
          {{ csrf_field() }}
          
          {{ method_field('PUT') }} 
         
          <div class="form-group">
            <label for="name"> Category Title</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name}}">
          </div>
          <div class="form-group">
            <label for="slug">Category Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug}}">
          </div>

          <div class="form-group">
                <input type="submit" value="Edit Category " class="btn py-3 px-4 pb-4 btn-primary">
                <a href="{{ route('category.index') }}"  class="btn py-3 px-4 pb-4 btn-warning">Back</a>
              </div>
        </form>
</div>

@endsection