 @extends('user.app')

@section('title', 'Hello World')

 
 @section('main-content')
 
<!-- portfolio part css start -->
<section class="portfolio_part section_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section_tittle">
                    <p>My portfolio</p>
                    <h2>Take a look around some of my awesome works</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section_btn text-right">
                    <a href="#" class="btn_2">More works</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="mesonary_part">
                    <div class="grid">
                        <div class="grid-sizer"></div>
                        <a href="portfolio_details.html" class="grid-item">
                            <img src="{{ asset('user/img/port_1.png') }}" alt="">
                            <div class="portfolio_hover_text">
                                <i class="ti-plus"></i>
                            </div>
                        </a>
                        <a href="portfolio_details.html" class="grid-item big_height big_weight">
                            <img src="{{ asset('user/img/port_2.png') }}" alt="">
                            <div class="portfolio_hover_text">
                                <i class="ti-plus"></i>
                            </div>
                        </a>
                        <a href="portfolio_details.html" class="grid-item">
                            <img src="{{ asset('user/img/port_3.png') }}" alt="">
                            <div class="portfolio_hover_text">
                                <i class="ti-plus"></i>
                            </div>
                        </a>
                        <a href="portfolio_details.html" class="grid-item big_weight">
                            <img src="{{ asset('user/img/port_4.png') }}" alt="">
                            <div class="portfolio_hover_text">
                                <i class="ti-plus"></i>
                            </div>
                        </a>
                        <a href="portfolio_details.html" class="grid-item">
                            <img src="{{ asset('user/img/port_5.png') }}" alt="">
                            <div class="portfolio_hover_text">
                                <i class="ti-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio part css end -->

<!-- this is the blog list section -->

    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('user/img/blog/single_blog_1.') }}png" alt="">
                                    <a href="{{ route('post')}}" class="blog_item_date">
                                                                                 
                                        
                                    <h3>15</h3>
                                        <p>Jan</p>
                                      
                                    </a>
                                </div>
    
                            
    
                                <div class="blog_details">
                                    @foreach ($posts as $post)
                                        
                                    
                                    <a class="d-inline-block" href="{{ route('post', $post->slug) }}">
                                        <h2> {{ $post->title}} </h2>
                                    </a>
                                <p>{{ $post->subtitle }}</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> {{$post->created_at }}</a></li>
                                    </ul>
                                    @endforeach
                                </div>
                            </article>
    
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('user/img/blog/single_blog_3.') }}png" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </a>
                                </div>
    
                          
                            </article>
    
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                            
                        </div>
                    </div>
                </div></div>
                
                

<!--::review_part start::-->
<section class="review_part section_padding">
    <div class="container">
       <div class="row">
          <div class="col-xl-5">
             <div class="section_tittle">
                <p>Word from my clients</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-12">
             <div class="client_review_part owl-carousel">
                <div class="client_review_single">
                   <div class="client_review_text">
                      <p>
                        “There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you're thing, night darkness. Which itself stars 
                      </p>
                      <div class="client_review_img">
                        <img src="{{ asset('user/img/client/client_1.png') }}" alt="#" />
                        <h4>Mosan Cameron</h4>
                        <p>Critive director</p>
                      </div>
                   </div>
                </div>
                <div class="client_review_single">
                   <div class="client_review_text">
                      <p>
                        “There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you're thing, night darkness. Which itself stars 
                      </p>
                      <div class="client_review_img">
                         <img src="{{ asset('user/img/client/client_2.png') }}" alt="#" />
                         <h4>Mosan Cameron</h4>
                         <p>Critive director</p>
                      </div>
                   </div>
                </div>
                <div class="client_review_single">
                   <div class="client_review_text">
                      <p>
                        “There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you're thing, night darkness. Which itself stars 
                      </p>
                      <div class="client_review_img">
                         <img src="{{ asset('user/img/client/client_2.png') }}" alt="#" />
                         <h4>Mosan Cameron</h4>
                         <p>Critive director</p>
                      </div>
                   </div>
                </div>
                <div class="client_review_single">
                   <div class="client_review_text">
                      <p>
                        “There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you're thing, night darkness. Which itself stars 
                      </p>
                      <div class="client_review_img">
                         <img src="{{ asset('user/img/client/client_2.png') }}" alt="#" />
                         <h4>Mosan Cameron</h4>
                         <p>Critive director</p>
                      </div>
                   </div>
                </div>
                <div class="client_review_single">
                   <div class="client_review_text">
                        <p>
                        “There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you're thing, night darkness. Which itself stars 
                        </p>
                      <div class="client_review_img">
                         <img src="img/client/client_3.png" alt="#" />
                         <h4>Mosan Cameron</h4>
                         <p>Critive director</p>
                      </div>
                   </div>
                </div>
                <div class="client_review_single">
                   <div class="client_review_text">
                      <p>
                        “There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you're thing, night darkness. Which itself stars 
                      </p>
                      <div class="client_review_img">
                         <img src="img/client/client_3.png" alt="#" />
                         <h4>Mosan Cameron</h4>
                         <p>Critive director</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</section>
 <!--::review_part end::-->
 @endsection