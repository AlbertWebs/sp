@extends('front.master')
@section('content')
@include('front.breadcrumb');
       
        <!-- blog-details-area start -->
        <section class="blog-details-area ptb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-12 col">
                        <aside class="right-sidebar">
                           
                            @include('clientarea.menu')
                        
                        </aside>
                    </div>
                        <div class="col-md-10 col-xs-12">
                        @if($Order->isEmpty())
                                
                                    <center><h2>You Have No Active Orders at the Moment</h2></center>
                                
                        @else
                                <section id="cart_items">
                                        
                                            
                                            <div class="table-responsive cart_info">
                                                    <table class="table table-condensed">
                                                            <thead>
                                                                <tr class="cart_menu">
                                                                    <td class="description">Title</td>
                                                                    <td class="description">Description</td>
                                                                    <td class="price">Charges</td>
                                                                    <td class="price">Status</td>
                                                                                                                           
                                                                
                                                                
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($Order as $order)
                                                                <tr>
                                                                        <td class="cart_price">
                                                                            <p>{{$order->title}}</p>
                                                                        </td>

                                                                         <td class="cart_price">
                                                                            <p>{{$order->content}}</p>
                                                                        </td>
                                                                    
                                                                        <td class="cart_price">
                                                                            <p>{{$order->total}}</p>
                                                                            
                                                                        </td>
                                                                        <td class="cart_price">
                                                                            <p>{{$order->status}}</p>
                                                                            
                                                                        </td>
                                                                        
                                                                        
                                                                    
                                                                </tr>
                                                            @endforeach
                                                                
                                                            </tbody>
                                                    </table>
                                                    <center><a href="{{url('/')}}/contact"> Send Message</a></center>
                                            </div>
                                       
                                </section>
                        @endif
                            
                            
                            
                            
                            </div>
                        </div>
                    
                </div>
            </div>
        </section>
        <!-- blog-details-area end -->
    @endsection