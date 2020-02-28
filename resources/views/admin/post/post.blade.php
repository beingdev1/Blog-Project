@extends('admin.layouts.app')

@section('main-content')

<div class="comment-form-wrap pl-5">
        <h3 class="mb-5 pl-4">Add New Post</h3>
    
        @include('includes.messages')

        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" class="p-3 p-md-5 bg-light">
        
          {{ csrf_field() }} 
        
         <div>           
              
                  <h3 class="mb-30">Tags</h3>
                  <select id="tags" name="tags ">
                      @foreach($tags as $tag)
      
                      <option value="{{$tag->id}}"> {{ $tag->name}}</option>
                      @endforeach
                    </select>  
                    
                    <h3 class="mb-30">Category</h3>
                  <select id="categories " name="categories[]">
                      @foreach($categories as $category)
      
                      <option value="{{$category->id}}"> {{ $category->name}}</option>
                      @endforeach
                    </select>  
                  </div>      
             <br>
     
        <br>
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
            <a href="{{ route('post.index') }}"  class="btn py-3 px-4 pb-4 btn-warning">Back</a>
          </div>
    
        </form>
      </div>
    <br>

@endsection