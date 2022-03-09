@extends('front.master')
@section('content')
<main class="page-content">
@include('front.breadcrumb')
    <section class="section-50 section-sm-75 section-lg-100">
      <div class="shell">
        <div class="range range-sm-center range-md-left">
        @foreach($videos as $video)
          <div class="cell-sm-9 cell-md-6 height-fill offset-top-30">
            <article class="post-block">
            <div class="post-video">
            <iframe 
            src="https://www.youtube.com/embed/{{$video->link}}">
            </iframe> 
            </div>
              <div class="post-body">
                <!-- <h4 class="post-header"><a href="{{url('/blog')}}/{{$video->title}}">{{$video->title}}</a></h4> -->
                
              </div>
            </article>
          </div>
        @endforeach

           
        
        </div>
        <div class="range text-center offset-top-40 offset-sm-top-60 offset-lg-top-100">
          <div class="cell-xs-12">
            <?php echo $videos ?>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection