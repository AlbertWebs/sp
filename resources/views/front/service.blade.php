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
      @if($Service->icon_png == '' OR $Service->icon_png == null)

      <article class="post-info offset-top-40">

      @if($Service->pre == '' OR $Service->pre == null)

      <h3 class="text-center">{{$Service->title}}</h3>

      @endif

          <div class="offset-top-15 offset-md-top-0">
                <blockquote class="quote-default text-center">
                  
                <div data-wow-duration="1s" data-wow-delay=".1s" data-wow-offset="80" class="quote-body wow fadeInUp">
                    <p> <q>{!!html_entity_decode($Service->content)!!}</q> </p>
                  </div>
                
                </blockquote>
              </div>
          
          
        </article>
      @else
      
      
        <article class="post-info offset-top-40">
          
          <div class="post-main">
            <div class="post-left">
            
       
           
                
            <h3 class="middle-center"> <img  width="100" height="100" src="{{url('/')}}/uploads/icons/{{$Service->icon_png}}" alt=""> </h3>
            
            </div>
            <div class="post-body">
              <blockquote class="quote-default">
                <div class="quote-body text-center">
                  <p> <q style="color:#000000;">{!!html_entity_decode($Service->content)!!}</q></p>
                </div>
              </blockquote>
            </div>
          </div>
        </article>

      @endif
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
    
    
 
    
    <section data-on="false" data-md-on="true" style="background-image: url('{{url('/')}}/uploads/backgrounds/bg.jpeg')" class="rd-parallax bg-gray-base bg-fixed">
     <div class="layer">
      <div class="shell">
        <div class="range range-sm-center range-md-left">
        @foreach($Extras as $value)
          <div class="cell-sm-9 cell-md-6 height-fill offset-top-30">
            
              
                <div class="offset-top-15 offset-md-top-0">
                  
                    <blockquote class="quote-default">
                      <!-- Heading -->
                      <div class="section-heading">
                          <h4 class="text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s" data-wow-offset="80">{{$value->title}}</h4>
                      </div>
                      <!-- <heading -->
                      <div class="quote-body text-center">
                        <p> <q style="color:#ffffff;">
                        <?php
                                            $original_string = $value->content;
                                            $num_words = 60;
                                            $words = array();
                                            $words = explode(" ", $original_string, $num_words);
                                            $shown_string = "";
                                            $link = url('/service');

                                            if(count($words) == 60){
                                              $words[59] = "....<br><br><div class='btn-wrap'><a href='$link/$Service->slung/$value->slung' class='btn btn-sm btn-gray-base-outline'>Read More</a></div>";
                                            }

                                            $shown_string = implode(" ", $words);

                            ?>
                
                            {!!html_entity_decode($shown_string)!!}
                        
                        </q> </p>
                      </div>
                      
                    </blockquote>
                </div>
            
          </div>
        @endforeach
        </div>
      </div>
     </div>
    </section>
    
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