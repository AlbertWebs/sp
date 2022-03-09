@extends('front.master')
@section('content')
	<!-- Breadcrumb -->
	@include('front.breadcrumb')
	<!-- BreadCrumb -->
       
        <!-- blog-details-area start -->
        <section class="blog-details-area ptb-140">
            <div class="container">
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 col">
                        <aside class="right-sidebar">
                           
                            @include('clientarea.menu')
                        
                        </aside>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="blog-details-wrap">
                            <div class="col-md-8">
                                <div class="contact-wrap form-style">
                                    
                                        <center>
                                        @if(Session::has('message'))
                                                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                                        @endif
                                        </center>
                                
                                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                                                <div class="free-quote bg-dark h-100">
                                                    <h2 class="my-4 heading  text-center">Your Details</h2>
                                                    <form method="post" action="{{url('/clientarea')}}/save">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <div class="form-group">
                                                        <input type="text" class="form-control btn-block" value="{{$User->name}}" id="fq_name" name="name" placeholder="Juliet Wangui">
                                                            <input type="text" class="form-control btn-block" value="{{$User->email}}" id="fq_name" name="email" placeholder="julietwangui@domain.com">
                                                            <input type="text" class="form-control btn-block" value="{{$User->mobile}}" id="fq_name" name="mobile" placeholder="0723014032">
                                                            <input type="text" class="form-control btn-block" value="{{$User->address}}" id="fq_name" name="address" placeholder="P.O Box 00100-6813, Nairobi Kenya">
                                                            
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" value="Save">  
                                                        </div>
                                                        <div class="text-success text-center Results" ></div>
                                                    </form>
                                                </div>
                                        </div>
                                </div>
                            </div>
                    <!-- <div class="col-md-">
                        <blockquote>
                                   Changing your email destroys the current session Data
                        </blockquote>
                    </div> -->
                         </div>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- blog-details-area end -->
    @endsection