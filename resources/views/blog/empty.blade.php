<?php $page_title = 'No Blogs For that tag' ?>
@extends('front.master')
@section('content')
@include('front.breadcrumb')

		<!-- Start top-category-widget Area -->
		<section class="top-category-widget-area pt-90 pb-90 ">
				<div class="container">
					<div class="row">	
					@foreach($Cat as $value)	
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    <a href="{{url('/blog')}}/tag/{{$value->cat}}" target="_blank">
								      <div class="thumb">
								  		 
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">{{$value->cat}}</h4>
								        <span></span>								        
								        
								      </div>
								    </a>
								</div>
							</div>
						</div>
					@endforeach
																	
					</div>
				</div>	
			</section>
			<!-- End top-category-widget Area -->
			
	@endsection