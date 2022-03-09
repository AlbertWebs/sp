@extends('front.master')
@section('content')
<main class="page-content">
@include('front.breadcrumb')
    <section class="section-60 section-sm-90 section-lg-bottom-120">
      <div class="shell">
        <h3>Privacy Policies</h3>
        <div class="range range-sm-center offset-top-40 offset-sm-top-60">
          <div class="cell-lg-10">
            <div id="accordionOne" role="tablist" aria-multiselectable="true" class="panel-group panel-group-custom panel-group-light">
                
               @foreach($Privacy as $terms)
                <div class="panel panel-custom panel-light">
                    <div id="accordionOneHeading{{$terms->id}}" role="tab" class="panel-heading">
                    <div class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse{{$terms->id}}" aria-controls="accordionOneCollapse{{$terms->id}}" class="collapsed">{{$terms->title}}
                        <div class="panel-arrow"></div>
                        </a> </div>
                    </div>
                    <div id="accordionOneCollapse{{$terms->id}}" role="tabpanel" aria-labelledby="accordionOneHeading{{$terms->id}}" class="panel-collapse">
                    <div class="panel-body">
                        <p>{!!html_entity_decode($terms->content)!!}</p>
                    </div>
                    </div>
                </div>
                @endforeach
              
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

     