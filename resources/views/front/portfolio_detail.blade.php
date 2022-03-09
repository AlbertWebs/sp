@extends('front.master')
@section('content')

  <main class="page-content">
  @include('front.breadcrumb')
    <section class="section-50 section-sm-90 section-md-bottom-120 section-lg-bottom-165">
      <div class="shell isotope-wrap text-center">
        <div class="range">
        @foreach($Portfolio as $Portfolio)
          <div class="cell-xs-12 offset-top-40">
            <div class="section-title text-center">
							<h2 style="font-size:24px;">{{$Portfolio->title}} Gallery</h2>
						</div>
            <div class="row">
              <div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default">
                @if($Portfolio->image_one == null)

                @else
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;" src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_one}}" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_one}}" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                @endif

                @if($Portfolio->image_two == null)

                @else
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_two}}" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_two}}" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                @endif
                @if($Portfolio->image_three == null)

                @else
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_three}}" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_three}}" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                @endif
                @if($Portfolio->image_four == null)

                @else
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_four}}" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_four}}" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                @endif
                @if($Portfolio->image_five == null)

                @else
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_five}}" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_five}}" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                @endif

                @if($Portfolio->image_six == null)

                @else
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_six}}" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_six}}" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                @endif

                @if($Portfolio->image_seven == null)

                @else
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_seven}}" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_seven}}" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                @endif

                @if($Portfolio->image_eight == null)

                @else
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_eight}}" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_eight}}" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                @endif

                @if($Portfolio->image_nine == null)

                @else
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_nine}}" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_nine}}" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                @endif

                @if($Portfolio->image_ten == null)

                @else
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_ten}}" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="{{url('/')}}/uploads/portfolio/{{$Portfolio->image_ten}}" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                @endif

                <?php $Photos  =DB::table('photos')->where('portfolio_id',$Portfolio->id)->get(); ?>
                @foreach($Photos as $photo)
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                    <div class="thumbnail thumbnail-variant-3">
                      <figure><img style="min-height:278px; border-radius:10px;"  src="{{url('/')}}/uploads/portfolio/{{$photo->name}}" alt="" width="370" height="278"/> </figure>
                      <div class="caption"><a href="{{url('/')}}/uploads/portfolio/{{$photo->name}}" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                    </div>
                  </div>
                @endforeach

              </div>
              <div class="post-meta">
                {{-- <ul class="list-bordered-horizontal">
                  <li>
                    <dl class="list-terms-inline">
                      <dt>Venue</dt>
                      <dd>
                        <time datetime="2016-01-22">{{$Portfolio->venue}}</time>
                      </dd>
                    </dl>
                  </li>
                  <li>
                    <dl class="list-terms-inline">
                      <dt>Audience</dt>
                      <dd>{{$Portfolio->audience}}</dd>
                    </dl>
                  </li>
                  <li>
                    <dl class="list-terms-inline">
                      <dt>Client</dt>
                      <dd>{{$Portfolio->client}}</dd>
                    </dl>
                  </li>

                </ul> --}}
              </div>
              <div class="post-body">
                <p>{!!html_entity_decode($Portfolio->content)!!}
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </section>
  </main>

@endsection
