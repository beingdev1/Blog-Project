@extends('admin.layouts.app')

@section('main-content')

<div class="comment-form-wrap pl-5">
        <h3 class="mb-5 pl-4">Add New Category</h3>
    
       @include('includes.messages')
        <form action="{{ route('category.store') }}" method="post" class="p-3 p-md-5 bg-light">
          {{ csrf_field() }} 
          <div class="form-group">
            <label for="name">Category Title</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="slug">Category Slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
          </div>

          <div class="form-group">
                <input type="submit" value=" Add Category " class="btn py-3 px-4 pb-4 btn-primary">
                <a href="{{ route('category.index') }}"  class="btn py-3 px-4 pb-4 btn-warning">Back</a>
              </div>


@endsection