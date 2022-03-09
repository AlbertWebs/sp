@extends('front.master')
@section('content')

<main class="page-content">
@include('front.breadcrumb')
    <section class="section-60 section-sm-90 section-lg-bottom-120">
      <div class="shell">
        <h3>Copyright Statement</h3>
        <div class="range range-sm-center offset-top-40 offset-sm-top-60">
          <div class="cell-lg-10">
            <div id="accordionOne" role="tablist" aria-multiselectable="true" class="panel-group panel-group-custom panel-group-light">
                
             

                @foreach($Copyright as $terms)
                    <div id="accordionOneCollapse1" role="tabpanel" aria-labelledby="accordionOneHeading1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p>{!!html_entity_decode($terms->content)!!}</p>
                    </div>
                    </div>
                </div>
                <div class="panel panel-custom panel-light">
                   
                @endforeach
              
        
            
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

     
