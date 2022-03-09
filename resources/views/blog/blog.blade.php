@extends('front.master')
@section('content')
@foreach($Blog as $blog)
<main class="page-content">
@include('front.breadcrumb')
    <section class="section-60 section-sm-75 section-lg-90">
      <div class="shell">
        <div class="range">
          <div class="cell-md-8 cell-lg-9">
            <article class="post post-single">
              <div class="post-image">
                <figure><img src="{{url('/')}}/uploads/blog/{{$blog->image_one}}" alt="" width="870" height="412"/> </figure>
              </div>
              <div class="post-header">
                <h4>{{$blog->title}}</h4>
              </div>
              <div class="post-meta">
                <ul class="list-bordered-horizontal">
                  <li>
                    <dl class="list-terms-inline">
                      <dt>Date</dt>
                      <dd>
                        <time datetime="2016-01-22"><?php $timeStampRaw = $blog->created_at; $timeStamp = date( "M, d, Y", strtotime($timeStampRaw)); echo $timeStamp ?></time>
                      </dd>
                    </dl>
                  </li>
                  <li>
                    <dl class="list-terms-inline">
                      <dt>Posted by</dt>
                      <dd>{{$blog->author}}</dd>
                    </dl>
                  </li>
                  <li>
                    <dl class="list-terms-inline">
                      <dt>Comments</dt>
                      <dd><?php $counter = count($Comments); echo $counter ?></dd>
                    </dl>
                  </li>
                  <li>
                    <dl class="list-terms-inline">
                      <dt>Category</dt>
                      <dd><?php $Category = DB::table('category')->where('id',$blog->cat)->get();  ?>@foreach($Category as $Cat) {{$Cat->cat}} @endforeach</dd>
                    </dl>
                  </li>
                </ul>
              </div>
              <div class="divider-fullwidth bg-gray-light offset-top-15"></div>
              <div class="post-body">
			  {!!html_entity_decode($blog->content)!!}
              </div>
              <div class="post-footer">
                <h5>Share this post:</h5>
                <ul class="list-inline list-inline-xs">
                  <li><a target="_new" href="http://www.facebook.com/sharer/sharer.php?u={{url('/')}}/blog/{{$blog->title}}" class="icon icon-xxs-small link-tundora fa-facebook"></a></li>
				  <li><a target="_new" href="https://twitter.com/home?status={{url('/')}}/blog/{{$blog->title}}" class="icon icon-xxs-small link-tundora fa-twitter"></a></li>
				  <li><a target="_new" href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source={{url('/')}}/blog/{{$blog->title}}" class="icon icon-xxs-small link-tundora fa-linkedin"></a></li>
                  <li><a target="_new" href="https://plus.google.com/share?url={{url('/')}}/blog/{{$blog->title}}" class="icon icon-xxs-small link-tundora fa-google"></a></li>
        
                </ul>
              </div>
            </article>
            <div class="divider-fullwidth bg-gray-lighter offset-top-40"></div>
            <div class="offset-top-40">
              <h4><?php $counter = count($Comments); echo $counter ?> Comment(s)</h4>
              <div class="comment-list inset-sm-right-60 inset-md-right-30 inset-lg-right-100 offset-top-30">
			  @foreach($Comments as $Comment)
                <div class="comment-group">
                  <article class="comment">
                    <div class="unit unit-spacing-md unit-xs-horizontal">
                     
                      <div class="unit-body">
                        <div class="comment-body">
                          <div class="comment-body-header">
                            <div class="comment-meta">
                              <p class="user">{{$Comment->author}}</p>
                              <!-- <ul class="list-inline list-icon-meta">
                                <li><a href="#" class="link-group link-group-baseline"><span class="icon icon-xxs-smaller icon-dusty-gray mdi mdi-thumb-up-outline"></span><span>Like</span></a></li>
                                <li><a href="#" class="link-group"><span class="icon icon-xxs-smaller icon-dusty-gray mdi mdi-comment-outline"></span><span>Reply</span></a></li>
                              </ul> -->
                            </div>
                            <div class="comment-time">
                              <div class="object-inline">
                                <time datetime="2016-02-16"><?php $timeStampRaw = $Comment->created_at; $timeStamp = date( "M, d, Y", strtotime($timeStampRaw)); $time = date( "H:s", strtotime($timeStampRaw)); echo $timeStamp; echo " , "; echo $time; ?></time>
                                <span class="icon icon-xxs-smaller icon-dusty-gray mdi mdi-clock"></span> </div>
                            </div>
                          </div>
                          <div class="comment-body-text">
                            <p>{!!html_entity_decode($Comment->content)!!}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
              
				</div>
			   @endforeach
				
				
               
              </div>
            </div>
            <div class="offset-top-40 offset-sm-top-60">
              <h4>Leave a comment</h4>
              <div class="inset-sm-right-60 inset-md-right-30 inset-lg-right-100 offset-top-15">
                <form data-form-output="form-output-global" data-form-type="contact" action="{{url('/blog/comment')}}" method="POST" class="rd-mailform-comment form-classic form-classic-bordered label-outside">
                <div class="form-group">
                            <label for="comment-message" class="form-label-outside">Name:</label>
                            <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
                          </div>
                  <div class="form-group">
                            <label for="comment-message" class="form-label-outside">Email:</label>
                            <input id="contact-name" type="text" name="email" data-constraints="@Required" class="form-control">
                  </div>
                  <input type="hidden" name="blog_id" value="{{$blog->id}}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <label for="comment-message" class="form-label-outside">Message:</label>
                    <textarea id="comment-message" name="message" data-constraints="@Required" class="form-control"></textarea>
                  </div>
                  <div class="offset-top-30">
                    <button type="submit" style="min-width: 200px;" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="cell-md-4 cell-lg-3 offset-top-50 offset-md-top-0">
            <div class="inset-md-left-15 inset-md-right-10">
              <div class="range"> 
                <div class="cell-sm-6 cell-md-12">
                  <form  action="{{url('/blog/search')}}" method="post" class="rd-search rd-search-classic">
                    <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <label for="rd-search-form-input-1" class="form-label">Search...</label>
                      <input id="rd-search-form-input-1" type="text" name="s" autocomplete="off" class="form-control">
                    </div>
                    <button type="submit" class="rd-search-submit"></button>
                  </form>
                  <div class="offset-top-50">
                    <h6 class="text-uppercase">Categories</h6>
                    <ul class="list-marked-bordered offset-top-15">
					<?php $Category = DB::table('category')->get(); ?>
					@foreach($Category as $Cat)
					  <li><a href="{{url('/blog')}}/cat/<?php $Category = DB::table('category')->where('id',$blog->cat)->get();  ?>@foreach($Category as $Cat){{$Cat->cat}}@endforeach"><span>{{$Cat->cat}}</span><span class="text-dusty-gray">(<?php $BlogCount = DB::table('blog')->where('cat',$blog->cat)->get(); echo count($BlogCount); ?>)</span></a></li>
					@endforeach
                    
                    </ul>
                  </div>
                  <div class="offset-top-50">
                    <h6 class="text-uppercase">Popular posts</h6>
                    <div class="offset-top-30">
					<?php $BlogPop = DB::table('blog')->inRandomOrder()->paginate(4); ?>
					@foreach($BlogPop as $blogPorpular)
                      <article class="post post-preview offset-top-15"><a href="{{url('/blog')}}/{{$blogPorpular->title}}">
                        <div class="unit unit-horizontal unit-spacing-sm">
                          <!-- <div class="unit-left">
                            <figure class="post-image post-image-img"><img src="{{url('/')}}/uploads/blog/{{$blogPorpular->image_one}}" alt="" width="70" height="70"/> </figure>
                          </div> -->
                          <div class="unit-body">
                            <div class="post-header">
                              <p>{{$blogPorpular->title}}</p>
                            </div>
                            <div class="post-meta">
                              <ul class="list-meta">
                                <li>
                                  <time datetime="2016-02-04"> <?php $timeStampRawPpular = $blogPorpular->created_at; $timeStampPop = date( "M, d, Y", strtotime($timeStampRawPpular)); echo $timeStampPop; ?></time>
                                </li>
                                <li><?php $CommentsPopular = DB::table('comments')->where('blog_id',$blogPorpular->id)->get(); echo count($CommentsPopular) ?> Comment(s)</li>
                              </ul>
                            </div>
                          </div>
                        </div>
						</a></article>
					  @endforeach
                  
                    </div>
                  </div>
                </div>
                <!-- <div class="cell-sm-6 cell-md-12 offset-top-50 offset-sm-top-0 offset-md-top-50">
                  <h6 class="text-uppercase">Twitter feed</h6>
                  <div data-twitter-username="themeforest" class="twitter offset-top-30">
                    <div data-twitter-type="tweet" class="twitter-item twitter-item-minimal">
                      <div class="object-inline-baseline"><a href="#" data-url="href" class="icon icon-xxs icon-primary fa-twitter"></a>
                        <time data-date="text,datetime" datetime="2016-04-20"></time>
                      </div>
                      <p data-tweet="text" class="tweet-text"></p>
                      <p data-screen_name="text" data-user_name="href" class="tweet-user"></p>
                    </div>
                    <div data-twitter-type="tweet" class="twitter-item twitter-item-minimal">
                      <div class="object-inline-baseline"><a href="#" data-url="href" class="icon icon-xxs icon-primary fa-twitter"></a>
                        <time data-date="text,datetime" datetime="2016-04-20"></time>
                      </div>
                      <p data-tweet="text" class="tweet-text"></p>
                      <p data-screen_name="text" data-user_name="href" class="tweet-user"></p>
                    </div>
                    <div data-twitter-type="tweet" class="twitter-item twitter-item-minimal">
                      <div class="object-inline-baseline"><a href="#" data-url="href" class="icon icon-xxs icon-primary fa-twitter"></a>
                        <time data-date="text,datetime" datetime="2016-04-20"></time>
                      </div>
                      <p data-tweet="text" class="tweet-text"></p>
                      <p data-screen_name="text" data-user_name="href" class="tweet-user"></p>
                    </div>
                </div> -->
                  <!-- Plugins -->
                  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                  <div class="elfsight-app-b4587323-98a9-4730-a8c7-541e7123433c"></div>
                  <!-- Plugins -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
@endforeach
 

  @endsection