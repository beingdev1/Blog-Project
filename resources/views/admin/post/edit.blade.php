@extends('admin.layouts.app')

@section('headSection')

<link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('admin/css/sb-admin.css') }}" rel="stylesheet">



@endsection

@section('main-content')




        @include('includes.messages')
            <!--we dont want it to go to store but it must go to update  and also we need id -->
        <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data" class="p-3 p-md-5 bg-light">
        {{-- for soemthing to upload we need to add multipart as above--}}
          {{ csrf_field() }} 

          {{ method_field('PUT') }} 

          <div >
              <h3 class="mb-5 pl-4">Add New Post</h3>
      
              
                  <h3 class="mb-30">Tags</h3>
                  <select id="tags" name="tags ">
                      @foreach($tags as $tag)
      
                      <option value="{{$tag->id}}"> {{ $tag->name}}</option>
                      <!-- to show the tags in the edit page 
                        ...create a loop to show posted tags -->
                      @foreach ($post->tags as $postTag)
                          @if ($postTag->id == $tag->id)
                        selected
                              
                          @endif
                      @endforeach
                      
                      @endforeach
                    </select>  
                    
                    <h3 class="mb-30">Category</h3>
                  <select id="categories " name="categories[]">
                      @foreach($categories as $category)
      
                      <option value="{{$category->id}}"> {{ $category->name}}</option>
                     
                                  <!-- to show the tags in the edit page 
                        ...create a loop to show posted tags -->
                        @foreach ($post->categories as $postCategory)
                        @if ($postCategory->id == $category->id)
                      selected
                            
                        @endif
                    @endforeach

                      @endforeach
                    </select>  
                    
             <br>
      </div>
        <br>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title}}">
          </div>
          <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $post->subtitle }}">
          </div>
          <div class="form-group">
            <label for="slug">Post Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value=" {{ $post->slug}}">
          </div>
    
          <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control" >{{ $post->body}}</textarea>
          </div>
    
          <div class="form-group">
            <label for="image">Post Image</label>
           <input type="file" class="form-control" id="image" name="image">
            
          </div>
          
          <div class="form-group">
            <input type="submit" value=" Edit Post " class="btn py-3 px-4 pb-4 btn-primary">
            <a href="{{ route('post.index') }}"  class="btn py-3 px-4 pb-4 btn-warning">Back</a>
          </div>
    
        </form>
         
    <br>

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

@endsection