@extends('user.app')

@section('title', $post->title)
@section('bg-img', Storage::disk('local')->url($post->image))

@section('main-content')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" 
src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=473172686915010&autoLogAppEvents=1"></script>
        
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
        <div class="container">
           <div class="row">
              <div class="col-lg-8 posts-list">
                 <div class="single-post">
                    <div class="feature-img">
                       <img class="img-fluid" src=" @yield('bg-img')" alt="">
                    </div>
                    <div class="blog_details">
                       <h2>{{ $post->subtitle}}
                       </h2>
                       {{-- Category --}}
                          @foreach ($post->categories as $category)
                          <small class="pull-right"> 
                             <h4>Category:</h4><strong>{{$category->name}}</strong>
                           </small>
                          @endforeach

                       
                       
                       <ul class="blog-info-link mt-3 mb-4">
                          <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                          <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                       <li>Created at: {{ $post->created_at }}</li><!-- ->diffForHumans-->
                        </ul>
                       
                       <!-- use this to render html tags -->
                       {!! htmlspecialchars_decode($post->body) !!}
                         
                       
                    </div>
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                           <li>
                              <a href="#">{{-- Tag--}}

                                    @foreach($post->tags as $tag)
                                    <small> 
                                       <h4>Tag:</h4><strong>{{ $tag->name }}</strong>
                                     </small>
                                    @endforeach</a>
                           </li>
                        </ul>
                    </aside>
                 <!-- like and share section -->


                 <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                       <p class="like-info"><span class="align-middle"><i class="far fa-heart"></i></span> Lily and 4
                          people like this</p>
                       <div class="col-sm-4 text-center my-2 my-sm-0">
                          <!-- <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p> -->
                       </div>
                       <ul class="social-icons">
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                          <li><a href="#"><i class="fab fa-behance"></i></a></li>
                       </ul>
                    </div>
                 
              </div>
           
           <div class="blog-author">
                <div class="media align-items-center">
                   <img src="{{ asset('user/img/blog/author.png') }}" alt="">
                   <div class="media-body">
                      <a href="#">
                         <h4>Harvard milan</h4>
                      </a>
                      <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                         our dominion twon Second divided from</p>
                   </div>
                </div>
             </div>
             <div class="fb-comments" data-href="https://localhost:8000/post/first" data-width="" data-numposts="5"></div>
        </div>
           </div></div></div>
        </div>
        

@endsection