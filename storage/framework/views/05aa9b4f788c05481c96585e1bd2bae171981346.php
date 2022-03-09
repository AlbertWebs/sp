<?php $__env->startSection('content'); ?>

  <main class="page-content">
  <?php echo $__env->make('front.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="section-50 section-sm-90 section-md-bottom-120 section-lg-bottom-165">
      <div class="shell isotope-wrap text-center">
        <div class="range">
        <?php $__currentLoopData = $Portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="cell-xs-12 offset-top-40">
            <div class="section-title text-center">
							<h2 style="font-size:24px;"><?php echo e($Portfolio->title); ?> Gallery</h2>
						</div>
            <div class="row">
              <div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default">
                <?php if($Portfolio->image_one == null): ?>

                <?php else: ?>
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;" src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_one); ?>" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_one); ?>" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                <?php endif; ?>

                <?php if($Portfolio->image_two == null): ?>

                <?php else: ?>
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_two); ?>" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_two); ?>" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                <?php endif; ?>
                <?php if($Portfolio->image_three == null): ?>

                <?php else: ?>
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_three); ?>" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_three); ?>" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                <?php endif; ?>
                <?php if($Portfolio->image_four == null): ?>

                <?php else: ?>
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_four); ?>" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_four); ?>" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                <?php endif; ?>
                <?php if($Portfolio->image_five == null): ?>

                <?php else: ?>
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_five); ?>" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_five); ?>" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                <?php endif; ?>

                <?php if($Portfolio->image_six == null): ?>

                <?php else: ?>
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_six); ?>" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_six); ?>" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                <?php endif; ?>

                <?php if($Portfolio->image_seven == null): ?>

                <?php else: ?>
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_seven); ?>" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_seven); ?>" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                <?php endif; ?>

                <?php if($Portfolio->image_eight == null): ?>

                <?php else: ?>
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_eight); ?>" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_eight); ?>" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                <?php endif; ?>

                <?php if($Portfolio->image_nine == null): ?>

                <?php else: ?>
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_nine); ?>" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_nine); ?>" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                <?php endif; ?>

                <?php if($Portfolio->image_ten == null): ?>

                <?php else: ?>
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3">
                    <figure><img style="min-height:278px; border-radius:10px;"  src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_ten); ?>" alt="" width="370" height="278"/> </figure>
                    <div class="caption"><a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($Portfolio->image_ten); ?>" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                  </div>
                </div>
                <?php endif; ?>

                <?php $Photos  =DB::table('photos')->where('portfolio_id',$Portfolio->id)->get(); ?>
                <?php $__currentLoopData = $Photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                    <div class="thumbnail thumbnail-variant-3">
                      <figure><img style="min-height:278px; border-radius:10px;"  src="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($photo->name); ?>" alt="" width="370" height="278"/> </figure>
                      <div class="caption"><a href="<?php echo e(url('/')); ?>/uploads/portfolio/<?php echo e($photo->name); ?>" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                    </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>
              <div class="post-meta">
                
              </div>
              <div class="post-body">
                <p><?php echo html_entity_decode($Portfolio->content); ?>

              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>
  </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/designekta/stagepassRevamps/resources/views/front/portfolio_detail.blade.php ENDPATH**/ ?>