@extends('admin.layouts.app')

@section('main-content')

<div class="comment-form-wrap pl-5">
        <h3 class="mb-5 pl-4">Add New Post</h3>
    
        @if(count($errors)>0)
            @foreach( $errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
          @endforeach
        @endif
        <form action="" method="post" class="p-3 p-md-5 bg-light">
          {{ csrf_field() }} 
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
          <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle">
          </div>
          <div class="form-group">
            <label for="slug">Post Slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
          </div>
    
          <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
          </div>
    
          <div class="form-group">
            <label for="image">Post Image</label>
           <input type="file" class="form-control" id="image" name="image">
            
          </div>
          
          <div class="form-group">
            <input type="submit" value=" Add Post " class="btn py-3 px-4 pb-4 btn-primary">
          </div>
    
        </form>
      </div>
    <br>

@endsection