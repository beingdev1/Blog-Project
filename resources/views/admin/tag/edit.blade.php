@extends('admin.layouts.app')

@section('main-content')

<div class="comment-form-wrap pl-5">
        <h3 class="mb-5 pl-4">Edit Tag</h3>
    
        @include('includes.messages')

         <!--we dont want it to go to store but it must go to update  and also we need id -->
         <form action="{{ route('tag.update',$tag->id) }}" method="post" class="p-3 p-md-5 bg-light">
         
          {{ csrf_field() }}
          
          {{ method_field('PUT') }} 
         
          <div class="form-group">
            <label for="name"> Tag Title</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $tag->name}}">
          </div>
          <div class="form-group">
            <label for="slug">Tag Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $tag->slug}}">
          </div>

          <div class="form-group">
                <input type="submit" value="Edit Tag " class="btn py-3 px-4 pb-4 btn-primary">
                <a href="{{ route('tag.index') }}"  class="btn py-3 px-4 pb-4 btn-warning">Back</a>
              </div>
        </form>
</div>

@endsection