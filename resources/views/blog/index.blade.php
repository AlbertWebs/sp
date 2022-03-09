@extends('front.master')
@section('content')
<main class="page-content">
@include('front.breadcrumb')
    <section class="section-50 section-sm-75 section-lg-100">
      <div class="shell">
        <div class="range range-sm-center range-md-left">
        @foreach($Blog as $blog)
          <div class="cell-sm-9 cell-md-6 height-fill offset-top-30">
            <article class="post-block">
              <div class="post-image"><img src="{{url('/')}}/uploads/blog/{{$blog->image_one}}" alt="" width="570" height="253"/> </div>
              <div class="post-body">
                <h4 class="post-header"><a href="{{url('/blog')}}/{{$blog->title}}">{{$blog->title}}</a></h4>
                <ul class="post-meta">
                  <li class="object-inline"><span class="text-style-2 text-white">by</span><span>{{$blog->author}}</span></li>
                  <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-query_builder"></span>
                    <time datetime="2016-01-01"><?php  $timestamp = $blog->created_at; echo timeago($timestamp); ?></time>
                  </li>
                  <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-loyalty"></span>
                    <ul class="list-tags-inline">
                      <li><a href="{{url('/blog')}}/cat/<?php $Category = DB::table('category')->where('id',$blog->cat)->get();  ?>@foreach($Category as $Cat){{$Cat->cat}}@endforeach"><?php $Category = DB::table('category')->where('id',$blog->cat)->get();  ?>@foreach($Category as $Cat) {{$Cat->cat}} @endforeach</a></li>
                     
                    </ul>
                  </li>
                </ul>
              </div>
            </article>
          </div>
        @endforeach

           
        
        </div>
        <div class="range text-center offset-top-40 offset-sm-top-60 offset-lg-top-100">
          <div class="cell-xs-12">
            <?php echo $Blog ?>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection