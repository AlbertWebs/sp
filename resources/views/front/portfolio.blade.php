@extends('front.master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/work.css')}}" />
<main class="page-content">
    @include('front.breadcrumb')
    <section class="hero-section">
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
        <style>
          .pagination {
            display: inline-block;
          }

          .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border:1px solid #F6C501;
          }

          .active{
             background-color: #F6C501;
          }
          </style>

        <div class="range text-center offset-top-40 offset-sm-top-60 offset-lg-top-100">
            <div class="cell-xs-12">
              <?php
                 echo $Portfolio;
               ?>
            </div>
        </div>

        {{--  --}}
        <br><br>
        <center>
            <a target="new" href="http://instagram.com/stagepassav/" class="btn  btn-primary">Go to Instagram</a>
        </center>
        {{--  --}}
    </section>


</main>

  <main class="page-content">
    @if($Portfolio->isEmpty())

    @else

    @endif
    <section class="section-60 section-sm-100 bg-primary">
      <div class="shell text-center text-md-left">
        <div class="range range-md-middle range-md-center">
        <?php $File = DB::table('files')->get() ?>
        @foreach($File as $file)

          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a id="click-me" class="btn btn-xl btn-white-outline"> View Our Profile</a></div>
          <div class="container-popup" style="background: url('{{url('/')}}/uploads/banners/tumblr_ms92j3l63y1s1b6gto1_1280.gif') no-repeat center;" id="show">
          <div class="x">
            <div class="one"></div>
            <div class="two"></div>
          </div>
        <div class="sign-up">
          <h1>Stagepass Audio Visual</h1>
          <p style="color:#fff">Get a copy of our <strong>Business Profile.<strong></p>
          <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{url('/subscribe')}}" class="rd-mailform">
                <input type="text" name="email" placeholder="Enter your email address">
                <input type="submit" value="Request Profile">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>


        </div>
    </div>
        @endforeach
        </div>

      </div>
    </section>

  </main>

  <!-- Popup -->


  <!-- Popup -->
@endsection

