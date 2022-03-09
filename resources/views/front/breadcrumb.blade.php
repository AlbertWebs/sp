<section id="breadcrumb" style="background-image: url('{{url('/')}}/uploads/banners/<?php $Banner = DB::table('banners')->where('name','Banner')->get() ?>@foreach($Banner as $banner){{$banner->image}}@endforeach'); background-color: rgba(0,0,0,.8);" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap bg-fixed">
      <div class="shell">
        <div class="page-title">
          <h4></h4>
        </div>
      </div>
    </section>