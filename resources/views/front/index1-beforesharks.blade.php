@extends('front.master')
@section('content')

   <main class="page-content"> 
    <section>
      <div data-loop="false" data-autoplay="false" data-simulate-touch="true" class="swiper-container swiper-slider swiper-variant-1 bg-gray-base">
        <div class="swiper-wrapper text-center">
        @foreach($Slider as $slider)
          <div data-slide-bg="" class="swiper-slide">
            <!-- Video -->
            <video autoplay loop muted id="myVideos" class="video-relative">
              <source src="{{url('/')}}/uploads/video/ceo.mp4" type="video/mp4">
              
            </video>
            <div class="swiper-slide-caption">
              <div class="shell">
                <div class="range range-sm-center">
                  <div class="cell-sm-11 cell-md-10 cell-lg-9">
                    <h2 data-wow-duration="3s" data-wow-delay="7s"  class="slider-header tinted wow fadeInUp">{{$slider->name}}</h2>
                  </div>
                </div>
              </div>
            </div>
            <!-- </Video -->
            <!-- <div class="content">
              <!-- <h1>Heading</h1> -->
             <!-- Use a button to pause/play the video with JavaScript -->
              <!-- <span id="myBtn" onclick="myFunction()"><i class="fa fa-pause"></i></span> -->
            <!-- </div>   -->
          </div>
        @endforeach
         
        </div> 
 
        
      </div>
    </section>
    <div class="divider-spectrum"></div> 
    <!-- <section id="section-start-journey" class="section-50 section-sm-90 section-lg-top-120 section-lg-bottom-145"> -->
     <section data-on="false" data-md-on="true" style="background-image: url('{{url('/')}}/uploads/banners/<?php $Banner = DB::table('banners')->where('name','first')->get() ?>@foreach($Banner as $banner){{$banner->image}}@endforeach')"  class="section-90 section-sm-90 section-lg-top-120 section-lg-bottom-145 bg-fixed overlay-tint">
      <div  class="shell">
        <center>
        <br><br><br>
        <div  class="range range-md-bottom range-sm-center">
          <div class="cell-sm-10 cell-md-10 ">
            <h3 data-wow-duration="2s" data-wow-offset="200" style="color:#ffffff" class="text-red-orang wow fadeInUp">One-Stop-Solution For All Your AV Services</h3>
            <?php $SiteSettings = DB::table('sitesettings')->get() ?>
            @foreach($SiteSettings as $Settings)
          
            <div class="offset-top-30">
              <blockquote class="quote-default">
                
                <div data-wow-duration="3s" data-wow-offset="200" class="quote-body wow fadeInUp">
                  <p class="big-font" style="color:#ffffff; font-size:24px;"> {!!html_entity_decode($Settings->welcome)!!} </p>
                </div>
              
              </blockquote>
            </div>
            @endforeach 
            <a style="opacity:0.8" href="{{url('/about')}}" class="btn  btn-primary">Learn More</a> </div>
         
        </div>
        
        </center>
      </div>
    </section>
    <div class="divider-spectrum"></div>
    <section  data-on="false" data-md-on="true" style="background-image: url('{{url('/')}}/uploads/banners/<?php $Banner = DB::table('banners')->where('name','vision')->get() ?>@foreach($Banner as $banner){{$banner->image}}@endforeach')"  class="section-90 section-sm-90 section-lg-top-120 section-lg-bottom-145 bg-fixed">
      <div data-speed="0.33" data-type="media" data-url="images/teest.jpeg" class="rd-parallax-layer"></div>
      <div data-speed="0" data-type="html" class="rd-parallax-layer">
        <div class="section-60 section-sm-90 section-lg-120">
          <div class="cell-sm-10 cell-md-10 shell text-center">
            <h2 class="text-red-orange" style="color:#FFF; font-size:50px; text-shadow: 2px 2px rgba(0, 0, 0, 0.5);">Our Vision</h2>
            <div class="range range-md-center offset-top-40">
              <div class="cell-md-11 cell-lg-9">
                <div class="">
                  <div data-items="1" data-stage-padding="0" data-loop="false" data-margin="30" data-nav="true" data-numbering="#owl-numbering-1" data-animation-in="fadeIn" data-animation-out="fadeOut" class="">
                    <div class="item">
                      <blockquote class="quote-minimal quote-minimal-inverse">
                        <div class="quote-body">
                          <p> <b style="color:#FFF; font-size:34px; text-shadow: 2px 2px rgba(0, 0, 0, 0.5);">TO BE AFRICA'S REVOLUTIONARY EVENTS EXPERTS</b> </p>
                        </div>
                        
                      </blockquote>
                    </div>
                    
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="divider-spectrum"></div>

  
  <section id="section-start-journey" class="section-50 section-sm-90 section-lg-top-120 section-lg-bottom-145">
      <div class="shell">
        @foreach($About as $about)
        <div class="range range-md-bottom range-sm-center">
          <div  data-wow-duration="2s" data-wow-offset="200" class=" section-title text-centercell-sm-10 cell-md-5 wow fadeInLeft">
            <h2 class="text-red-orange">About Us</h2>
            
            <p class="text-secondary">{!!html_entity_decode($about->content)!!}</p>
          </div>
          <div class="cell-sm-11 cell-md-7 offset-top-40 offset-sm-top-60 offset-md-top-0">
            <div class="image-group">
              <figure data-wow-duration=".6s" data-wow-delay=".0s" data-wow-offset="80" class="wow fadeInRightSmall"><img src="{{url('/')}}/uploads/images/{{$about->image}}" alt="" width="243" height="199"/> </figure>
              <figure data-wow-duration=".9s" data-wow-delay=".4s" data-wow-offset="200" class="wow fadeInRightMedium"><img src="{{url('/')}}/uploads/images/{{$about->image_one}}" alt="" width="508" height="341"/> </figure>
              <figure data-wow-duration=".9s" data-wow-delay=".8s" data-wow-offset="300" class="wow fadeInRightSmall"><img src="{{url('/')}}/uploads/images/{{$about->image_two}}" alt="" width="689" height="469"/> </figure>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <div class="divider-spectrum"></div>
    <section data-on="false" data-md-on="true" style="background-image: url('{{url('/')}}/uploads/banners/<?php $Banner = DB::table('banners')->where('name','Page')->get() ?>@foreach($Banner as $banner){{$banner->image}}@endforeach')" class="rd-parallax bg-gray-base bg-image">
      <div data-speed="0.33" data-type="media" data-url="images/StagepassBanner.jpeg" class="rd-parallax-layer"></div>
      <div data-speed="0" data-type="html" class="rd-parallax-layer">
        <div class="section-50 section-sm-75 section-lg-top-100 section-lg-bottom-120">
          <div class="shell">
            <div class="range range-sm-center">
              <div class="cell-sm-11 cell-md-10 cell-lg-9 text-center">
                <h3 style="color:#F6C501"><span>Our</span><em></em><span>Capabilities</span></h3>
                <!-- <p> Service Description goes here, Just before the list of services </p> -->
              </div>
            </div>
            <div class="range">
            
            @foreach($Services as $service) 
              <div class="cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0">
                <article class="icon-box-vertical"><span class="icon icon-primary icon-md"><img  src="{{url('/')}}/uploads/{{$service->icon}}"></span>
                  <h5 class="icon-box-header"><a href="{{url('/service')}}/{{$service->title}}">{{$service->title}}</a></h5>
                  @if($service->content == '' OR $service->content == null)
                  <!-- Limit to 30 -->
                  <?php
                                $original_string = $service->pre;
                                $num_words = 30;
                                $words = array();
                                $words = explode(" ", $original_string, $num_words);
                                $shown_string = "";
                                

                                $post_id = $service->title;
                                $url = url("/service");

                                if(count($words) == 30){
                                  $words[29] = "<a href='$url/$post_id'>....More &raquo;</a> ";
                                }

                                $shown_string = implode(" ", $words);

                ?>
                {!!html_entity_decode($shown_string)!!}
                  @else

                 
                  <!-- Limit to 30 -->
                  <?php
                                $original_string = $service->content;
                                $num_words = 30;
                                $words = array();
                                $words = explode(" ", $original_string, $num_words);
                                $shown_string = "";
                                

                                $post_id = $service->title;
                                $url = url("/service");

                                if(count($words) == 30){
                                  $words[29] = "<a href='$url/$post_id'>....More &raquo;</a> ";
                                }

                                $shown_string = implode(" ", $words);

                ?>
                  
                  {!!html_entity_decode($shown_string)!!}
                @endif
                </article>
              </div>
            @endforeach
              
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <div class="divider-spectrum"></div>
    <!-- Our People -->
    <!-- <section id="section-start-journey" class="section-50 section-sm-90 section-lg-top-120 section-lg-bottom-145"> -->
  <section id="section-start-journey" data-on="false" data-md-on="true" style="background-image: url('{{url('/')}}/uploads/banners/<?php $Banner = DB::table('banners')->where('name','peoople')->get() ?>@foreach($Banner as $banner){{$banner->image}}@endforeach')" class="section-180 section-sm-90 section-lg-top-180 section-lg-bottom-145 bg-fixed">
      <div class="shell">
        <center>
        
        <div class="range range-md-bottom range-sm-center">
          <div class="cell-sm-10 cell-md-8 ">
            
            <h3 data-wow-duration="5s" data-wow-offset="200" style="color:#ffffff" class="text-red-orang wow fadeInUp">Our People</h3>
          
            <div class="offset-top-30">
              <blockquote class="quote-default">
                
                <div data-wow-duration="6s" data-wow-offset="300" class="quote-body wow fadeInUp">
               
                  <p> <q class="big-font"></q>  <p class="big-font" style="color:#ffffff; opacity:0.5 font-size:24px;"> While we’ve got the most trusted audiovisual, staging and lighting brands available to you, it is our unparalleled team that will exceed your expectations. </p> </p>
                </div>
              
              </blockquote>
            </div>
            
            
         
        </div>
        
        </center>
      </div>
    </section>
       
    <!-- </our People -->
   
    <div class="clearfix"></div>
    @if($Video->isEmpty())

    @else
    @foreach($Video as $video)
    
    <!--<section  class="rd-parallax bg-gray-base bg-imagee section-lg-bottomm-145 the-featured-video">-->
 
    <!--    <div class="video-background" style="min-height:700px;">-->
    <!--        <div class="video-foreground">-->
    <!--          <iframe width="1280" height="700" src="https://www.youtube.com/embed/zH2DV9VBy5s?autoplay=1&mute=1&VQ=HD720&rel=0&showinfo=0&controls=0&autohide=1&loop=1&playlist=zH2DV9VBy5s" allow='autoplay' frameborder="0" allowfullscreen></iframe>-->
    <!--        </div>-->
    <!--    </div>-->

    <!--    <div id="vidtop-content" style="min-height:700px;">-->
    <!--        <div class="vid-info">-->
    <!--          <h1>Sound reinforcement for 70,000 pax during  EVERTON VS KARIOBANGI SHARKS Football Match</h1>-->
           
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    @endforeach
    @endif
 

    <div class="divider-spectrum"></div>
    <section class="section-60 section-sm-100 bg-gray-base">
      <div class="shell">
        <div class="range">
          <div class="cell-xs-6 cell-sm-4">
            <div class="box-counter box-counter-inverse"><span class="icon icon-md icon-primary material-icons-content_copy"></span>
            <?php 
                   use App\Stat;
                   $Stats = Stat::find(1);
             ?>
              <div class="text-large counter">{{$Stats->value}}</div>
              <h5 class="box-header">{{$Stats->title}}</h5>
            </div>
          </div>
          <div class="cell-xs-6 cell-sm-4 offset-top-40 offset-xs-top-0">
            <div class="box-counter box-counter-inverse"><span class="icon icon-md icon-primary material-icons-mood"></span>
            <?php 
                   
                   $Stats = Stat::find(2);
             ?>
              <div class="text-large counter counter">{{$Stats->value}}</div>
              <h5 class="box-header">{{$Stats->title}}</h5>
            </div>
          </div>
          <div class="cell-xs-6 cell-sm-4 offset-top-40 offset-sm-top-0">
            <div class="box-counter box-counter-inverse"><span class="icon icon-md icon-primary material-icons-access_time"></span>
            <?php 
                   
                   $Stats = Stat::find(3);
             ?>
              <div class="text-large counter">{{$Stats->value}}</div>
              <h5 class="box-header">{{$Stats->title}}</h5>
            </div>
          </div>
        
        </div>
      </div>
    </section>

    <section class="section-60 section-sm-100 bg-primary">
      <div class="shell text-center text-md-left">
        <div class="range range-md-middle range-md-center">
         
          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a href="{{url('/quote')}}" class="btn btn-xl btn-white-outline">Request Quote</a></div>
          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a href="{{url('/contact')}}" class="btn btn-xl btn-white-outline">Contact Us</a></div>
          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a href="{{url('/rfp')}}" class="btn btn-xl btn-white-outline">Submit an RFP</a></div>
          
        </div>
      </div>
    </section>
    
    <section class="section-50 section-sm-90 section-lg-top-120">
     
     
        
        <div class="container">
          <section class="customer-logos slider">
            
            <?php $Clients = DB::table('clients')->get(); ?>
            @foreach($Clients as $Client)
            <div class="slide"><img src="{{url('/')}}/uploads/clients/{{$Client->image}}"></div>
            @endforeach
            
          </section>
        </div>
       
          
       
      
    </section>
 
    @if($Testimonial->isEmpty())

    @else
    <section data-on="false" data-md-on="true" style="background-image: url(images/tesst.jpeg)" class="rd-parallax bg-gray-base bg-image">
      <div data-speed="0.33" data-type="media" data-url="images/teest.jpeg" class="rd-parallax-layer"></div>
      <div data-speed="0" data-type="html" class="rd-parallax-layer">
        <div class="section-60 section-sm-90 section-lg-120">
          <div class="shell text-center">
            <h3>Customers Feedback</h3>
            <div class="range range-md-center offset-top-40">
              <div class="cell-md-11 cell-lg-9">
                <div class="owl-carousel-inverse">
                  <div data-items="1" data-stage-padding="0" data-loop="false" data-margin="30" data-nav="true" data-numbering="#owl-numbering-1" data-animation-in="fadeIn" data-animation-out="fadeOut" class="owl-carousel owl-nav-position-numbering">
                    <div class="item">
                      <blockquote class="quote-minimal quote-minimal-inverse">
                        <div class="quote-body">
                          <p> <q>I am glad I've purchased Designekta premium template. It allows me not to worry how to represent my services on the web – everything is already included! Moreover, I think this web design will perfectly suit anyone</q> </p>
                        </div>
                        <div class="quote-meta"> <cite>Janet Henry</cite>
                          <p class="caption">Contractor</p>
                        </div>
                      </blockquote>
                    </div>
                    @foreach($Testimonial as $testimonial)
                    <div class="item">
                      <blockquote class="quote-minimal quote-minimal-inverse">
                        <div class="quote-body">
                          <p> <q>{!!html_entity_decode($testimonial->content)!!}</q> </p>
                        </div>
                        <div class="quote-meta"> <cite>{{$testimonial->name}}</cite>
                          <p class="caption">{{$testimonial->company}}</p>
                        </div>
                      </blockquote>
                    </div>
                    @endforeach
                    
                  </div>
                  <div id="owl-numbering-1" class="owl-numbering owl-numbering-default">
                    <div class="numbering-current"></div>
                    <div class="numbering-separator"></div>
                    <div class="numbering-count"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

    
  </main>
@endsection