
    @isset($data['instagram_feed'])
    <section class="section-50 section-sm-90 section-lg-top-120 section-lg-bottom-145"> `
      <div class="shell isotope-wrap">
        <div class="range">
          <div class="cell-xs-12 text-center">
          <a target="new" href="http://instagram.com/stagepassav/"> <h3 style="color:#F6C501;"><img height="100" width="100" src="{{url('/')}}/uploads/icons/instalogo.png"/> @stagepassAV</h3></a>
          </div>
          @isset($data['instagram_feed'])
            <div class="cell-xs-12 offset-top-40">
                <div class="row">
                <div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default">
                    <?php $counter = 1; ?>
                    @foreach($data['instagram_feed'] as $item)

                        <div data-filter="" class="col-xs-12 col-sm-6 col-md-4 isotope-item" style="height:270px; border-radius:10px">
                        <div class="thumbnail thumbnail-variant-3" style="border-radius:10px"><a target="_blank" href="{{$item['url']}}" class="link link-external"><span class="icon icon-sm fa fa-link"></span></a>
                            <figure style="width:100%;"><img style="max-width:100%; max-height:100%;" src="{{$item['url']}}" alt="StagePass Audio Visual" /> </figure>
                            <div class="caption"><a href="{{$item['url']}}" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                        </div>
                        </div>

                        @if($counter == 20)
                        @break
                        @endif
                        <?php $counter ++; ?>
                    @endforeach



                </div>
                </div>
            </div>
          @endisset



        </div>
      </div>
      <br><br>
      <center><a target="new" href="http://instagram.com/stagepassav/" class="btn  btn-primary">Go to Instagram</a> </div></center>
    </section>
    @endisset
