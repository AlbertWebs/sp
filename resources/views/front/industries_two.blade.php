@extends('front.master')
@section('content')

   
    
    <main class="page-content">
    @include('front.breadcrumb')
    @foreach($Industries as $industries)
    @if($industries->id % 2 == 0)
    <section class="section-100 section-sm-75 section-lg-100">
      <!-- Option Two -->
      <div id="features" class="section md-padding bg-grey">

          <!-- Container -->
          <div class="container">

            <!-- Row -->
            <div class="row">

              <!-- why choose us content -->
              <div class="col-md-6">
                <div class="section-header">
                  <h2 class="title">{{$industries->title}}</h2>
                </div>
                 <!-- Content -->
                 <div class="offset-top-15 offset-md-top-0">
              <blockquote class="quote-default">
                
              <div data-wow-duration="1s" data-wow-delay=".1s" data-wow-offset="80" class="text-center quote-body wow fadeInLeftSmall">
                  <p> <q>{!!html_entity_decode($industries->content)!!}</q> </p>
                </div>
               
              </blockquote>
            </div>
                 <!-- Content -->
              </div>
              <!-- /why choose us content -->

              <!-- About slider -->
              <div class="col-md-6">
                <div id="about-slider" class="owl-carousel owl-theme">
                  <img class="img-responsive" src="{{url('/')}}/uploads/industries/{{$industries->image}}" alt="">
                  <img class="img-responsive" src="{{url('/')}}/uploads/industries/{{$industries->image}}" alt="">
                  <img class="img-responsive" src="{{url('/')}}/uploads/industries/{{$industries->image}}" alt="">
                  <img class="img-responsive" src="{{url('/')}}/uploads/industries/{{$industries->image}}" alt="">
                </div>
              </div>
              <!-- /About slider -->

            </div>
            <!-- /Row -->

          </div>
          <!-- /Container -->

      </div>
      <!-- /Why Choose Us -->
    </section>
    @else
    <section class="section-100 section-sm-75 section-lg-100">
      <!-- Option Two -->
      <div id="features" class="section md-padding bg-grey">

          <!-- Container -->
          <div class="container">

            <!-- Row -->
            <div class="row">

              <!-- why choose us content -->
            
                 <!-- Content -->
              </div>
              <!-- /why choose us content -->

              <!-- About slider -->
              <div class="col-md-6">
                <div id="about-slider" class="owl-carousel owl-theme">
                  <img class="img-responsive" src="{{url('/')}}/uploads/industries/{{$industries->image}}" alt="">
                  <img class="img-responsive" src="{{url('/')}}/uploads/industries/{{$industries->image}}" alt="">
                  <img class="img-responsive" src="{{url('/')}}/uploads/industries/{{$industries->image}}" alt="">
                  <img class="img-responsive" src="{{url('/')}}/uploads/industries/{{$industries->image}}" alt="">
                </div>
              </div>
              <!-- /About slider -->
              <div class="col-md-6">
                <div class="section-header">
                  <h2 class="title">{{$industries->title}}</h2>
                </div>
                 <!-- Content -->
                 <div class="offset-top-15 offset-md-top-0">
              <blockquote class="quote-default">
                
              <div data-wow-duration="1s" data-wow-delay=".1s" data-wow-offset="80" class="text-center quote-body wow fadeInRightSmall">
                  <p> <q>{!!html_entity_decode($industries->content)!!}</q> </p>
                </div>
               
              </blockquote>
            </div>
            </div>
            <!-- /Row -->

          </div>
          <!-- /Container -->

      </div>
      <!-- /Why Choose Us -->
    </section>
    @endif
    @endforeach

  <!-- </Option Two -->
  
    
  </main>
       
@endsection