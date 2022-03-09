@extends('front.master')
@section('content')

   
    
    <main class="page-content">
    @include('front.breadcrumb')
    @foreach($Industries as $industries)
    @if($industries->id % 2 == 0)
    
    <section id="{{$industries->title}}" data-on="false" data-md-on="true" style="background-image: url('{{url('/')}}/uploads/industries/{{$industries->image}}')" class="section-lg-top-180 bg-image-industries-right">
     
      <!-- Row -->
      <div class="row" >




 
           <div class="col-md-5 quote-default-industries-even" >
              <div class="section-header">
                <h2 class="title text-shadow-big text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s" data-wow-offset="80">{{$industries->title}}</h2>
              </div>
            <!-- Content -->
            <div class="offset-top-15 offset-md-top-0">
            <blockquote class="industries-content">
          
            <div data-wow-duration="1s" data-wow-delay=".1s" data-wow-offset="80" class="text-center quote-body wow fadeInLeftSmall">
            <p> <q class="text-shadow">{!!html_entity_decode($industries->content)!!}</q> </p>
            </div>
        
            </blockquote>
            </div>
            <!-- Content -->
           </div>

           <div class="col-md-7">

           </div>
 




      </div>
  
    </section>
    @else
    <section id="{{$industries->title}}" data-on="false" data-md-on="true" style="background-image:url('{{url('/')}}/uploads/industries/{{$industries->image}}')" class="section-lg-top-180 bg-image-industries-left">
    <div class="row">




 


<div class="col-md-7">

</div>

<div class="col-md-5 quote-default-industries-odd" >
   <div class="section-header">
     <h2 class="title text-shadow-big text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s" data-wow-offset="80">{{$industries->title}}</h2>
   </div>
 <!-- Content -->
 <div class="offset-top-15 offset-md-top-0">
 <blockquote class="">

 <div data-wow-duration="1s" data-wow-delay=".1s" data-wow-offset="80" class="text-center quote-body wow fadeInRightSmall">
 <p> <q class="text-shadow">{!!html_entity_decode($industries->content)!!}</q> </p>
 </div>

 </blockquote>
 </div>
 <!-- Content -->
</div>





</div>
  
    </section>
    @endif
    @endforeach


  
    
  </main>
       
@endsection