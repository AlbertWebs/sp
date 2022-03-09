@extends('front.master')
@section('content')

   
    
    <main class="page-content">
    @include('front.breadcrumb')
    @foreach($Industries as $industries)
    @if($industries->id % 2 == 0)
    <section class="section-100 section-sm-75 section-lg-100">
    
      <div class="shell">
        <div class="range range-sm-center range-md-left">
          <!-- <div class="cell-sm-6 cell-md-6">
            <div class="thumbnail thumbnail-profile">
              <div data-wow-duration="1s" data-wow-delay=".5s" data-wow-offset="80" class="thumbnail-image wow fadeInLeftSmall"><img src="{{url('/')}}/uploads/industries/{{$industries->image}}" alt="{{$industries->title}}" width="100%" /> </div>
              
            </div>
          </div> -->
          <div  id="{{$industries->title}}" class="cell-sm-12 cell-md-12 cell-lg-12 offset-top-40 offset-sm-top-0">
            <div class="inset-sm-left-50 inset-md-left-40 inset-lg-left-100">
              <h4 data-wow-duration="2s" data-wow-delay=".2s" data-wow-offset="80" class="text-center wow fadeIn">{{$industries->title}}</h4>
              
             
            </div>
            <div class="offset-top-15 offset-md-top-0">
              <blockquote class="quote-default">
                
              <div data-wow-duration="1s" data-wow-delay=".1s" data-wow-offset="80" class="text-center quote-body wow fadeInRightSmall">
                  <p> <q>{!!html_entity_decode($industries->content)!!}</q> </p>
                </div>
               
              </blockquote>
            </div>
            
          </div>
          
        </div>
      </div>
    </section>
    <div class="divider-spectrum"></div>
    @else
    
    <section class="section-50 section-sm-75 section-lg-100">
      <div class="shell">
        <div class="range range-sm-center range-md-left">
          
          <div id="{{$industries->title}}" class="cell-sm-12 cell-md-12 cell-lg-12 offset-top-40 offset-sm-top-0">
            <div class="inset-sm-left-50 inset-md-left-40 inset-lg-left-100">
              <h4 data-wow-duration="2s" data-wow-delay=".2s" data-wow-offset="80" class="text-center wow fadeIn">{{$industries->title}}</h4>
              
             
            </div>
            <div class="offset-top-15 offset-md-top-0">
              <blockquote class="quote-default">
                
                <div data-wow-duration="1s" data-wow-delay=".1s" data-wow-offset="80" class="text-center quote-body wow fadeInLeftSmall">
                  <p> <q>{!!html_entity_decode($industries->content)!!}</q> </p>
                </div>
               
              </blockquote>
            </div>
            
          </div>

          <!-- <div class="cell-sm-6 cell-md-6">
            <div class="thumbnail thumbnail-profile">
              <div data-wow-duration="1s" data-wow-delay=".5s" data-wow-offset="80" class="thumbnail-image wow fadeInRightSmall"><img src="{{url('/')}}/uploads/industries/{{$industries->image}}" alt="{{$industries->title}}" width="100%" /> </div>
              
            </div>
          </div> -->
          
        </div>
      </div>
    </section>
    <div class="divider-spectrum"></div>
    @endif
    @endforeach
  
    
  </main>
       
@endsection