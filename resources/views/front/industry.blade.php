@extends('front.master')
@section('content')

   
    
    <main class="page-content">
    @include('front.breadcrumb')
    @foreach($Industries as $industries)
   
    <section class="section-50 section-sm-75 section-lg-100">
      <div class="shell">
        <div class="range range-sm-center range-md-left">
          <div class="cell-sm-6 cell-md-6">
            <div class="thumbnail thumbnail-profile">
              <div class="thumbnail-image"><img src="{{url('/')}}/uploads/industries/{{$industries->image}}" alt="" width="570" height="570"/> </div>
              <div class="thumbnail-caption">
                <div class="thumbnail-caption-inner">
                  <ul>
                    <li>
                      <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                        <div class="unit-left"><span class="icon icon-xxs icon-gray-base"></span></div>
                        <div class="unit-body"><h5>{{$industries->title}}</h5></div>
                      </div>
                    </li>
                    
                  </ul>
                  <div class="btn-wrap"><a href="{{url('/quote')}}" class="btn btn-small btn-gray-base-outline">Request Quote</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="cell-sm-6 cell-md-6 cell-lg-6 offset-top-40 offset-sm-top-0">
          
            <div class="offset-top-15 offset-md-top-0">
              <blockquote class="quote-default">
                <div class="quote-open">
                  <svg version="1.1" baseprofile="tiny" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="21px" height="15px" viewbox="0 0 21 15" overflow="scroll" xml:space="preserve">
                    <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316            c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37            C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316            c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37            C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                  </svg>
                </div>
                <div class="quote-body">
                  <p> <q>{!!html_entity_decode($industries->content)!!}</q> </p>
                </div>
                <div class="quote-close">
                  <svg version="1.1" baseprofile="tiny" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="21px" height="15px" viewbox="0 0 21 15" overflow="scroll" xml:space="preserve">
                    <path d="M11.39,4.593c0-1.306,0.473-2.399,1.418-3.277C13.752,0.44,14.869,0,16.157,0c1.287,0,2.414,0.44,3.382,1.316            c0.966,0.879,1.448,1.931,1.448,3.154c0,1.226-0.58,2.716-1.739,4.473l-3.865,6.062h-3.737l2.384-6.37            C12.271,7.86,11.39,6.512,11.39,4.593z M0,4.593c0-1.306,0.473-2.399,1.418-3.277C2.362,0.44,3.478,0,4.768,0            c1.288,0,2.415,0.44,3.381,1.316c0.966,0.879,1.45,1.931,1.45,3.154c0,1.226-0.582,2.716-1.74,4.473l-3.865,6.062H0.259l2.382-6.37            C0.881,7.86,0,6.512,0,4.593z"></path>
                  </svg>
                </div>
              </blockquote>
            </div>
            
          </div>
        </div>
     
      </div>
    </section>
    @endforeach
    
  </main>
       
@endsection