@extends('front.master')
@section('content')

   
    
    <main class="page-content">
    @include('front.breadcrumb')
    <section class="section-100 section-sm-75 section-lg-100">

      <div class="ftco-section">
        <div class="container">
        
          <div class="row">
          @foreach($Industries as $industries)
          @if($industries->video == 1)
            <!-- Video Theme Here -->
            <div class="col-md-6 col-lg-6"  data-aos="fade-up">
              <div class="flip-container-three">
                <div class="flipper">
                  <div class="front">
                  <!-- Background Image Goes Here -->
                  <div class="video-container">
                    <video autoplay loop muted id="myVideo" class="video-relative" >
                      <source src="{{url('/')}}/uploads/video/dance.mp4" type="video/mp4">
                    </video>
                  </div>
                   
                    <!-- </Background Image Goes Here -->
                    <div class="box">
                      <h2>{{$industries->title}}</h2>
                      
                    </div>
                  </div>
                  <div class="back">
                    <!-- back content -->
                    <blockquote>
                      <p>&ldquo;
                      <?php
                                    $original_string = $industries->content;
                                    $num_words = 70;
                                    $words = array();
                                    $words = explode(" ", $original_string, $num_words);
                                    $shown_string = "";
                                    $link = url('/industry');

                                    if(count($words) == 70){
                                      $words[69] = "<a href=$link/$industries->id>...Read More</a>";
                                    }

                                    $shown_string = implode(" ", $words);

                    ?>
                    
                    {!!html_entity_decode($shown_string)!!}
                      
                      &rdquo;</p>
                    </blockquote>
                  
                    <div class="author d-flex">
                      <div class="image mr-3 align-self-center">
                        
                      </div>
                      <div class="name align-self-center">{{$industries->title}} </div>
                    </div>
                  </div>
                </div>
              </div> <!-- .flip-container -->
            </div>
          <!-- </Video Theme Here -->

          @else

            <div class="col-md-6 col-lg-6"  data-aos="fade-up">
              <div class="flip-container">
                <div class="flipper">
                  <div class="front" style="background-image: url('{{url('/')}}/uploads/industries/{{$industries->image}}');">
                    <div class="box">
                      <h2>{{$industries->title}}</h2>
                      <p>StagePass Audio Visual</p>
                    </div>
                  </div>
                  <div class="back">
                    <!-- back content -->
                    <blockquote>
                      <p>&ldquo;
                      <?php
                                    $original_string = $industries->content;
                                    $num_words = 70;
                                    $words = array();
                                    $words = explode(" ", $original_string, $num_words);
                                    $shown_string = "";
                                    $link = url('/industry');

                                    if(count($words) == 70){
                                      $words[69] = "<a href=$link/$industries->id>...Read More</a>";
                                    }

                                    $shown_string = implode(" ", $words);

                    ?>
                    
                    {!!html_entity_decode($shown_string)!!}
                      
                      &rdquo;</p>
                    </blockquote>
                  
                    <div class="author d-flex">
                      <div class="image mr-3 align-self-center">
                        
                      </div>
                      <div class="name align-self-center">{{$industries->title}} </div>
                    </div>
                  </div>
                </div>
              </div> <!-- .flip-container -->
            </div>
          @endif
            
          @endforeach
          
          </div>
        </div>
      </div>
    </section>
  <div class="divider-spectrum"></div>


  </main>
       
@endsection