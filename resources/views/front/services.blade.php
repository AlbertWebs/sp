@extends('front.master')
@section('content')
@foreach($Services as $Service)
 

  <main class="page-content">
  

  @include('front.breadcrumb')
  <!-- top -->
  @if($Service->pre == '' OR $Service->pre == null)

@else
<section data-on="false" data-md-on="true" style="background-image: url('{{url('/')}}/uploads/banners/<?php $Banner = DB::table('banners')->where('name','services')->get() ?>@foreach($Banner as $banner){{$banner->image}}@endforeach')" class="rd-parallax bg-gray-base bg-image">
      <div data-speed="0.5" data-type="media" data-url="images/1920x900.jpg" class="rd-parallax-layer"></div>
      <div data-speed="0.01" data-type="html" class="rd-parallax-layer">
        <div class="section-60 section-sm-100 section-lg-120">
          <div class="shell text-center">
            <div class="range">
              <div class="cell-xs-12">
              <h3>{{$Service->title}}</h3>
                <div style="max-width: 740px;" class="reveal-inline-block offset-top-22">
                  <p class="big text-light">{!!html_entity_decode($Service->pre)!!}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif
    @if($Service->content == '' OR $Service->content == null)

    @else
    <section class="section-60 section-sm-75 section-lg-90">
      <div class="shell">
      
      
      
        <article class="post-info offset-top-40">
          
          <div class="post-main">
            <div class="post-left">
            
       
           
                
                <h3 class="pull-left middle-center">  @if($Service->title == 'Rigging & Staging') Rigging <br> & Staging @else {{$Service->title}} @endif</h3>
               
            
            </div>
            <div class="post-body">
              <p class="medium-font">{!!html_entity_decode($Service->content)!!}</p>
            </div>
          </div>
        </article>
      </div>
    </section>
    @endif
  <!-- </Top -->

  <?php 
      $Extras = DB::table('extras')->where('service_id',$Service->id)->get();
      $AllExtras = count($Extras);
      $count = 1;
  ?>
  @if($AllExtras == 0)

  @else
  @foreach($Extras as $value)
  @if($count % 2 == 0)
      <section class="section-35 section-sm-50">
        <div class="shell">
          <h3>Image Right</h3>
          <div class="range range-sm-reverse range-md-justify offset-top-30 offset-sm-top-40">
            <div class="cell-sm-6">
              <figure><img src="{{url('/')}}/theme/images/570x386.jpg" alt="" width="570" height="386"/> </figure>
            </div>
            <div class="offset-top-15 offset-md-top-0">
              <blockquote class="quote-default">
                
              <div data-wow-duration="1s" data-wow-delay=".1s" data-wow-offset="80" class="quote-body wow fadeInRightSmall">
                  <p> <q>Words Here</q> </p>
                </div>
               
              </blockquote>
            </div>
          </div>
        </div>
      </section>
      @else
      <section class="section-40 section-sm-bottom-100 section-lg-bottom-165">
        <div class="shell">
          <h3>Image Left</h3>
          <div class="range range-md-justify offset-top-30 offset-sm-top-40">
            <div class="cell-sm-6">
              <figure><img src="images/570x386.jpg" alt="" width="570" height="386"/> </figure>
            </div>
            <div class="offset-top-15 offset-md-top-0">
              <blockquote class="quote-default">
                
              <div data-wow-duration="1s" data-wow-delay=".1s" data-wow-offset="80" class="quote-body wow fadeInRightSmall">
                  <p> <q>Words Here</q> </p>
                </div>
               
              </blockquote>
            </div>
          </div>
        </div>
      </section>
      <?php $count++ ?>
      @endif
  @endforeach
  @endif
@endforeach
      <section class="section-60 section-sm-100 bg-primary">
      <div class="shell text-center text-md-left">
        <div class="range range-md-middle range-md-center">
         
          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a href="{{url('/quote')}}" class="btn btn-xl btn-white-outline">Request Quote</a></div>
          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a href="{{url('/contact')}}" class="btn btn-xl btn-white-outline">Contact Us</a></div>
          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a href="{{url('/rfp')}}" class="btn btn-xl btn-white-outline">Submit an RFP</a></div>
          
        </div>
      </div>
    </section>
  </main>
    
@endsection