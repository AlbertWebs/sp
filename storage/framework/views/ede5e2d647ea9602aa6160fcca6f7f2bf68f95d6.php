 
    <?php if(isset($data['instagram_feed'])): ?>
    <section class="section-50 section-sm-90 section-lg-top-120 section-lg-bottom-145"> `
      <div class="shell isotope-wrap">
        <div class="range">
          <div class="cell-xs-12 text-center">
          <a target="new" href="http://instagram.com/stagepassav/"> <h3 style="color:#F6C501;"><img height="100" width="100" src="<?php echo e(url('/')); ?>/uploads/icons/instalogo.png"/> @stagepassAV</h3></a>
          </div>
          <?php if(isset($data['instagram_feed'])): ?>
            <div class="cell-xs-12 offset-top-40">
                <div class="row">
                <div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default">
                    <?php $counter = 1; ?>
                    <?php $__currentLoopData = $data['instagram_feed']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <div data-filter="" class="col-xs-12 col-sm-6 col-md-3 isotope-item" style="height:170px;">
                        <div class="thumbnail thumbnail-variant-3"><a target="_blank" href="<?php echo e($item['url']); ?>" class="link link-external"><span class="icon icon-sm fa fa-link"></span></a>
                            <figure style="width:100%;"><img style="max-width:100%; max-height:100%;" src="<?php echo e($item['url']); ?>" alt="StagePass Audio Visual" /> </figure>
                            <div class="caption"><a href="<?php echo e($item['url']); ?>" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                        </div>
                        </div>
                    
                        <?php if($counter == 52): ?>
                        <?php break; ?>
                        <?php endif; ?>
                        <?php $counter ++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                
                
                </div>
                </div>
            </div>
          <?php endif; ?>

         
          
        </div>
      </div>
      <br><br>
      <center><a target="new" href="http://instagram.com/stagepassav/" class="btn  btn-primary">Go to Instagram</a> </div></center>
    </section>
    <?php endif; ?><?php /**PATH /home/stagepassco/public_html/resources/views/front/instagram-work.blade.php ENDPATH**/ ?>