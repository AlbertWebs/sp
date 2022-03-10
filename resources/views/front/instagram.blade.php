<?php $Portfolio = DB::table('portfolio')->orderBy('orders','ASC')->paginate('6'); ?>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/work.css')}}" />
<section class="hero-section section-50 section-sm-90 section-lg-top-120">
    <h1><span>Our</span> Work</h1>
    <h4>Creative Solutions, Technical Excellence</h4>
    <div class="work-container-image">
        @foreach ($Portfolio as $portfolio)
        <div class="image-one">
             <img src="{{url('/')}}/uploads/portfolio/{{$portfolio->image_one}}" alt="{{$portfolio->title}}" />
             <div class="image-one-cover">
                 <h2>{{$portfolio->title}}</h2>
                 <div class="btn-wrap folio-btn">
                     <a href="{{url('/')}}/portfolio/{{$portfolio->slung}}" class="btn btn-sm btn-gray-base-outline">View Gallery</a>
                 </div>
             </div>
         </div>
        @endforeach
    </div>


    {{--  --}}
    <br><br>
    <center>
        <a target="new" href="{{url('/')}}/our-work" class="btn  btn-primary">Explore More</a>
    </center>
    </div>
    <br><br>

    {{--  --}}
</section>
